# MonoVM Blueprint 1.0.0 QA Report

Audit date: August 31, 2026

## Scope

This report records source, package, runtime, and browser checks run against the
version 1.0.0 release candidate. It is not a substitute for WordPress.org's
human review or the remaining optional checks in the acceptance checklist.

## Metadata audit

- `style.css` and `readme.txt` agree on version `1.0.0`, WordPress `6.6+`,
  tested up to WordPress `7.1`, PHP `7.4+`, license, and text domain.
- `composer.json` requires PHP `>=7.4`; the build script defaults to `1.0.0` and
  the Playground blueprint targets the matching `1.0.0` release asset.
- All twelve declared theme tags are present in the current official
  [WordPress.org Themes API feature list][theme-feature-list].
- `accessibility-ready` and `rtl-language-support` are intentionally absent.
- The official [WordPress version API][version-api] reported WordPress `7.1`
  as current at the audit date, so `Tested up to: 7.1` is correctly formatted
  and current.

## Passing static checks

- `theme.json` and all three files in `styles/` parse as JSON and validate
  against the official [WordPress 6.6 theme schema][theme-schema].
- PHP syntax validation passes for `functions.php` and every PHP pattern file
  with PHP 8.3.24. Theme setup and pattern-category registration also pass a
  stubbed runtime check.
- `style.css` and `assets/css/theme.css` pass CSS Tree syntax validation.
- Combined theme CSS is 10,080 bytes raw and 2,536 bytes at gzip level 9,
  below the 30 KB gzip budget.
- The theme contains 10 required templates, 4 template parts, 24 public
  patterns, and 7 internal non-inserter patterns.
- Runtime scanning finds no external dependency, non-Core block namespace,
  JavaScript URL, Arabic-script starter copy, or theme-authored JavaScript.
- The two valid WOFF2 files total 101,564 bytes, below the 180 KB font budget;
  their SHA-256 values and OFL provenance are recorded under `assets/fonts/`.
- The complete GPL-2.0 license and the complete SIL Open Font License are present.
- Thirty-five intended token-pair contrast spot checks produced no failure
  against their 4.5:1 text or 3:1 interface-boundary thresholds.

## Passing runtime and browser checks

- WordPress 7.1 with PHP 8.3 rendered the front page, page, single post,
  search, archive, and 404 templates without a PHP fatal or parse error. Each
  route produced one semantic `main` landmark and one page-level heading.
- The Site Editor opened successfully and exposed templates, patterns, and all
  four style choices: Default, Dark Infrastructure, Light Business, and High
  Contrast.
- All eight full-page starters appeared under Starter content in the page
  editor. Inserting the VPS starter expanded it into eight independent Core
  block groups with no synced or theme-dependent pattern reference left behind.
- A 390-pixel mobile viewport produced no page-level horizontal overflow. The
  responsive navigation opened and closed, pricing cards stacked, and the wide
  comparison table remained horizontally scrollable inside its own container.
- A separate minimum-version Playground run passed on WordPress 6.6 with PHP
  7.4 for the front page, page, post, search, and archive routes.
- The final 1200x900 `screenshot.png` is a valid PNG generated from the running
  theme, not a design mockup.
- Three additional product-page previews were captured from the running theme
  at 1440x900 desktop and 390x844 mobile viewports.

## Passing release-package checks

- `node scripts/validate-theme.mjs` passes all repository checks: 20 required
  files, 24 public patterns, 7 internal patterns, 4 JSON files, CSS budget, and
  font budget.
- PHP_CodeSniffer passes all 32 PHP files under the project's WordPress Coding
  Standards and PHPCompatibility ruleset.
- The deterministic build contains 60 files under the single
  `monovm-blueprint/` root, includes the POT and screenshot, excludes development
  tooling, and is 556,491 bytes.
- Two consecutive builds produced the same SHA-256 digest:
  `4a8d94f4ac122a74d82716931b1e8b9318086fb157109e8b2904db5eaabdbe15`.
- A clean Playground run from the extracted ZIP passed on WordPress 7.1 with
  PHP 8.3 for the front page, page, post, search, and archive routes.
- WordPress Theme Check ran 11,333 tests against the extracted package and
  reported that MonoVM Blueprint passed. Its only remaining text-domain message
  is informational and confirms the correct `monovm-blueprint` domain.

## Publication prerequisite

The approved Theme URI, `https://monovm.com/free-wordpress-theme/`, returned
HTTP 404 during this audit. Keep the metadata URL unchanged, but publish that
page and verify an HTTP 200 response before WordPress.org submission. The Author
URI and all bundled-font and GPL resource URLs returned HTTP 200.

## Checks not claimed by this report

- Native-device Safari and Firefox testing, a full screen-reader audit, and the
  optional `accessibility-ready` review path.
- The intermediate PHP 8.1 point in the broader test matrix.
- Lighthouse, LCP, CLS, and controlled-demo performance scores.
- WordPress.org reviewer approval.

[theme-feature-list]: https://api.wordpress.org/themes/info/1.2/?action=feature_list
[theme-schema]: https://schemas.wp.org/wp/6.6/theme.json
[version-api]: https://api.wordpress.org/core/version-check/1.7/
