import fs from 'node:fs';
import path from 'node:path';
import zlib from 'node:zlib';
import { fileURLToPath } from 'node:url';

const scriptDirectory = path.dirname(fileURLToPath(import.meta.url));
const themeRoot = path.resolve(scriptDirectory, '..');
const failures = [];

function fail(message) {
  failures.push(message);
}

function walk(directory) {
  if (!fs.existsSync(directory)) {
    return [];
  }

  return fs.readdirSync(directory, { withFileTypes: true }).flatMap((entry) => {
    const absolute = path.join(directory, entry.name);
    return entry.isDirectory() ? walk(absolute) : [absolute];
  });
}

function relative(file) {
  return path.relative(themeRoot, file).replaceAll('\\', '/');
}

const requiredFiles = [
  'style.css',
  'theme.json',
  'functions.php',
  'readme.txt',
  'LICENSE',
  'screenshot.png',
  'templates/index.html',
  'templates/front-page.html',
  'templates/home.html',
  'templates/page.html',
  'templates/single.html',
  'templates/archive.html',
  'templates/search.html',
  'templates/404.html',
  'templates/page-no-title.html',
  'templates/blank.html',
  'parts/header.html',
  'parts/header-minimal.html',
  'parts/footer.html',
  'parts/footer-minimal.html',
];

for (const required of requiredFiles) {
  if (!fs.existsSync(path.join(themeRoot, required))) {
    fail(`Missing required file: ${required}`);
  }
}

const jsonFiles = [
  path.join(themeRoot, 'theme.json'),
  ...walk(path.join(themeRoot, 'styles')).filter((file) => file.endsWith('.json')),
];

for (const file of jsonFiles) {
  try {
    JSON.parse(fs.readFileSync(file, 'utf8'));
  } catch (error) {
    fail(`Invalid JSON in ${relative(file)}: ${error.message}`);
  }
}

const themeJsonPath = path.join(themeRoot, 'theme.json');
if (fs.existsSync(themeJsonPath)) {
  try {
    const themeJson = JSON.parse(fs.readFileSync(themeJsonPath, 'utf8'));
    if (themeJson.version !== 3) {
      fail('theme.json must use schema version 3');
    }
  } catch {
    // The general JSON validation above already records the parse failure.
  }
}

const stylePath = path.join(themeRoot, 'style.css');
if (fs.existsSync(stylePath)) {
  const style = fs.readFileSync(stylePath, 'utf8');
  const requiredHeaders = [
    'Theme Name',
    'Author',
    'Description',
    'Version',
    'Requires at least',
    'Tested up to',
    'Requires PHP',
    'License',
    'License URI',
    'Text Domain',
  ];

  for (const header of requiredHeaders) {
    if (!new RegExp(`^${header}:\\s*\\S`, 'm').test(style)) {
      fail(`style.css is missing header: ${header}`);
    }
  }

  if (!/^Text Domain:\s*monovm-vps\s*$/m.test(style)) {
    fail('style.css Text Domain must be monovm-vps');
  }

  if (!/^Version:\s*1\.0\.0\s*$/m.test(style)) {
    fail('style.css Version must be 1.0.0');
  }

  if (/\b(?:accessibility-ready|rtl-language-support)\b/i.test(style)) {
    fail('style.css must not claim accessibility-ready or rtl-language-support in version 1.0');
  }
}

const screenshotPath = path.join(themeRoot, 'screenshot.png');
if (fs.existsSync(screenshotPath)) {
  const screenshot = fs.readFileSync(screenshotPath);
  const pngSignature = Buffer.from([137, 80, 78, 71, 13, 10, 26, 10]);
  if (screenshot.length < 24 || !screenshot.subarray(0, 8).equals(pngSignature)) {
    fail('screenshot.png must be a valid PNG file');
  } else {
    const width = screenshot.readUInt32BE(16);
    const height = screenshot.readUInt32BE(20);
    if (width !== 1200 || height !== 900) {
      fail(`screenshot.png must be exactly 1200 x 900 pixels; found ${width} x ${height}`);
    }
  }
}

const patternFiles = walk(path.join(themeRoot, 'patterns')).filter((file) => file.endsWith('.php'));
const expectedPublicPatternSlugs = new Set([
  'vps-hero',
  'service-grid',
  'pricing-cards',
  'plan-comparison',
  'server-specifications',
  'benefits-features',
  'data-center-locations',
  'security-ddos',
  'trust-strip',
  'testimonials',
  'faq',
  'blog-tutorials',
  'support-channels',
  'final-cta',
  'header-compact',
  'footer-compact',
]);
const expectedInternalPatternSlugs = new Set([
  'hidden-header',
  'hidden-footer',
  'hidden-index',
  'hidden-home',
  'hidden-archive',
  'hidden-search',
  'hidden-404',
]);
const expectedPatternSlugs = new Set([
  ...expectedPublicPatternSlugs,
  ...expectedInternalPatternSlugs,
]);
const discoveredPatternSlugs = new Set();

for (const file of patternFiles) {
  const content = fs.readFileSync(file, 'utf8');
  const slugMatch = content.match(/^\s*\*\s+Slug:\s+monovm-vps\/([a-z0-9-]+)\s*$/m);
  if (!/^\s*\*\s+Title:\s+\S/m.test(content)) {
    fail(`${relative(file)} is missing a pattern Title header`);
  }
  if (!slugMatch) {
    fail(`${relative(file)} is missing a valid monovm-vps pattern Slug header`);
  } else if (discoveredPatternSlugs.has(slugMatch[1])) {
    fail(`Duplicate pattern slug: ${slugMatch[1]}`);
  } else {
    discoveredPatternSlugs.add(slugMatch[1]);
  }
  if (!/^\s*\*\s+Categories:\s+\S/m.test(content)) {
    fail(`${relative(file)} is missing a pattern Categories header`);
  }
  if (!content.includes("'monovm-vps'")) {
    fail(`${relative(file)} does not contain the monovm-vps text domain`);
  }
  if (slugMatch && expectedInternalPatternSlugs.has(slugMatch[1]) && !/^\s*\*\s+Inserter:\s+no\s*$/mi.test(content)) {
    fail(`${relative(file)} must declare Inserter: no`);
  }
}

for (const slug of expectedPatternSlugs) {
  if (!discoveredPatternSlugs.has(slug)) {
    fail(`Missing expected pattern slug: ${slug}`);
  }
}

for (const slug of discoveredPatternSlugs) {
  if (!expectedPatternSlugs.has(slug)) {
    fail(`Unexpected pattern slug: ${slug}`);
  }
}

const runtimeTextFiles = [
  ...walk(path.join(themeRoot, 'templates')),
  ...walk(path.join(themeRoot, 'parts')),
  ...walk(path.join(themeRoot, 'patterns')),
  ...walk(path.join(themeRoot, 'styles')),
  ...walk(path.join(themeRoot, 'assets')).filter((file) => /\.(css|js|json|svg)$/i.test(file)),
  path.join(themeRoot, 'theme.json'),
  path.join(themeRoot, 'functions.php'),
].filter((file) => fs.existsSync(file));

const htmlTemplateFiles = [
  ...walk(path.join(themeRoot, 'templates')),
  ...walk(path.join(themeRoot, 'parts')),
].filter((file) => file.endsWith('.html'));

for (const file of htmlTemplateFiles) {
  const content = fs.readFileSync(file, 'utf8');
  const textOutsideBlockComments = content
    .replace(/<!--[\s\S]*?-->/g, '')
    .replace(/<[^>]+>/g, '')
    .trim();
  if (textOutsideBlockComments) {
    fail(`Visible literal text found in non-translatable HTML file: ${relative(file)}`);
  }
  if (/"(?:buttonText|label|moreText|placeholder)"\s*:\s*"[^"\\]*(?:\\.[^"\\]*)*"/i.test(content)) {
    fail(`User-visible block attribute found in non-translatable HTML file: ${relative(file)}`);
  }
}

for (const file of runtimeTextFiles) {
  const content = fs.readFileSync(file, 'utf8');
  const remoteUrlCandidate = content
    .replace(/https:\/\/schemas\.wp\.org\/(?:trunk|wp\/\d+\.\d+)\/theme\.json/gi, '')
    .replaceAll('http://www.w3.org/2000/svg', '')
    .replaceAll('http://www.w3.org/1999/xlink', '');
  if (/https?:\/\//i.test(remoteUrlCandidate)) {
    fail(`Unexpected external URL in runtime file: ${relative(file)}`);
  }
  if (/javascript\s*:/i.test(content)) {
    fail(`Unsafe javascript: URL in runtime file: ${relative(file)}`);
  }
  if (/<!--[ \t]*wp:([a-z0-9-]+)\/[a-z0-9-]+/i.test(content)) {
    const customBlocks = [...content.matchAll(/<!--[ \t]*wp:([a-z0-9-]+)\/[a-z0-9-]+/gi)]
      .map((match) => match[1])
      .filter((namespace) => namespace !== 'core');
    if (customBlocks.length) {
      fail(`Non-Core block namespace in ${relative(file)}: ${[...new Set(customBlocks)].join(', ')}`);
    }
  }
  if (/[\u0600-\u06ff]/u.test(content)) {
    fail(`Arabic-script text found in English runtime file: ${relative(file)}`);
  }
}

const cssFiles = [stylePath, ...walk(path.join(themeRoot, 'assets', 'css')).filter((file) => file.endsWith('.css'))]
  .filter((file) => fs.existsSync(file));
const cssBytes = Buffer.concat(cssFiles.map((file) => fs.readFileSync(file)));
const gzippedCssBytes = zlib.gzipSync(cssBytes).byteLength;
if (gzippedCssBytes > 30 * 1024) {
  fail(`Theme-authored CSS exceeds 30 KB gzipped: ${gzippedCssBytes} bytes`);
}

const fontFiles = walk(path.join(themeRoot, 'assets', 'fonts'))
  .filter((file) => /\.(woff2?|ttf|otf)$/i.test(file));
const fontBytes = fontFiles.reduce((total, file) => total + fs.statSync(file).size, 0);
if (fontBytes > 180 * 1024) {
  fail(`Bundled fonts exceed 180 KB: ${fontBytes} bytes`);
}

const forbiddenNames = new Set(['.DS_Store', 'Thumbs.db']);
for (const file of walk(themeRoot)) {
  if (forbiddenNames.has(path.basename(file))) {
    fail(`Forbidden file found: ${relative(file)}`);
  }
}

if (failures.length) {
  console.error('Theme validation failed:');
  for (const failure of failures) {
    console.error(`- ${failure}`);
  }
  process.exit(1);
}

console.log(`Theme validation passed: ${requiredFiles.length} required files, ${expectedPublicPatternSlugs.size} public patterns, ${expectedInternalPatternSlugs.size} internal patterns, ${jsonFiles.length} JSON files.`);
console.log(`CSS budget: ${gzippedCssBytes} / ${30 * 1024} gzipped bytes.`);
console.log(`Font budget: ${fontBytes} / ${180 * 1024} bytes.`);
