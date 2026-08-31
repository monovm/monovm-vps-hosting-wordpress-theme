import fs from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const scriptDirectory = path.dirname(fileURLToPath(import.meta.url));
const themeRoot = path.resolve(scriptDirectory, '..');
const seedPath = path.join(themeRoot, 'playground', 'seed-demo.php');
const publicBlueprintPath = path.join(themeRoot, 'blueprint.json');
const qaBlueprintPath = path.join(themeRoot, 'tests', 'playground-demo-qa.json');
const checkOnly = process.argv.includes('--check');

const seedCode = fs.readFileSync(seedPath, 'utf8').replace(/\r\n/g, '\n');

function baseBlueprint() {
  return {
    $schema: 'https://playground.wordpress.net/blueprint-schema.json',
    meta: {
      title: 'MonoVM Blueprint live demo',
      description: 'A complete infrastructure-business starter site with pages, posts, and hierarchical navigation.',
      author: 'MonoVM',
      categories: ['themes', 'business', 'hosting'],
    },
    preferredVersions: {
      php: '8.3',
      wp: 'latest',
    },
    features: {
      networking: true,
    },
    landingPage: '/',
    steps: [],
  };
}

const publicBlueprint = baseBlueprint();
publicBlueprint.steps.push(
  {
    step: 'installTheme',
    themeData: {
      resource: 'git:directory',
      url: 'https://github.com/monovm/monovm-vps-hosting-wordpress-theme',
      ref: 'main',
      refType: 'branch',
    },
    options: {
      activate: true,
      targetFolderName: 'monovm-blueprint',
    },
  },
  {
    step: 'runPHP',
    code: seedCode,
  },
);

const qaBlueprint = baseBlueprint();
qaBlueprint.steps.push(
  {
    step: 'activateTheme',
    themeFolderName: 'monovm-blueprint',
  },
  {
    step: 'runPHP',
    code: seedCode,
  },
);

const outputs = [
  [publicBlueprintPath, `${JSON.stringify(publicBlueprint, null, 2)}\n`],
  [qaBlueprintPath, `${JSON.stringify(qaBlueprint, null, 2)}\n`],
];

let outOfDate = false;
for (const [file, content] of outputs) {
  if (checkOnly) {
    if (!fs.existsSync(file) || fs.readFileSync(file, 'utf8') !== content) {
      console.error(`Generated Playground file is out of date: ${path.relative(themeRoot, file)}`);
      outOfDate = true;
    }
  } else {
    fs.writeFileSync(file, content, 'utf8');
    console.log(`Generated ${path.relative(themeRoot, file)}`);
  }
}

if (outOfDate) {
  process.exit(1);
}

if (checkOnly) {
  console.log('Generated Playground files are up to date.');
}

