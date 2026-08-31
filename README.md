# MonoVM Blueprint

MonoVM Blueprint is an English-first, native WordPress block theme for VPS, cloud,
server, hosting, and managed-infrastructure businesses. It provides a complete,
editable marketing-site foundation without a page builder, required plugin,
remote service, or theme-specific content model.

## Project status

Version 1.0.0 implementation is complete as of August 31, 2026. The theme
requires WordPress 6.6 or later and PHP 7.4 or later; its current public
compatibility metadata is tested up to WordPress 7.1.

Static checks, WordPress Theme Check, minimum-version runtime testing, responsive
browser checks, and deterministic package validation pass. The exact evidence
and the remaining publication prerequisite are recorded in the
[QA report](docs/QA-REPORT.md).

## Included in version 1.0.0

- Ten block templates, including custom Page without title and Blank / Landing templates.
- Four header and footer template parts.
- Fourteen hosting-specific content patterns plus compact header and footer patterns.
- Seven non-inserter patterns that keep template copy translation-ready.
- Dark Infrastructure, Light Business, and High Contrast style variations.
- Local IBM Plex Sans and IBM Plex Mono variable-font subsets.
- A WordPress Playground blueprint and deterministic release-packaging script.
- Zero theme-authored front-end JavaScript and no remote runtime dependency.

## Requirements

- WordPress 6.6 or later.
- PHP 7.4 or later.
- No required plugin.

## Installation

1. Download or build the installable `monovm-blueprint` ZIP file.
2. In WordPress, open Appearance > Themes > Add New > Upload Theme.
3. Install and activate the theme.
4. Open Appearance > Editor to choose a style, edit site identity and navigation,
   and assemble pages with the MonoVM Blueprint patterns.
5. Replace every sample price, specification, destination, and placeholder
   before publishing.

## Documentation

- [Product specification](docs/PRODUCT-SPEC.md)
- [Design brief](docs/DESIGN-BRIEF.md)
- [Acceptance checklist](docs/ACCEPTANCE-CHECKLIST.md)
- [QA report](docs/QA-REPORT.md)

## Development checks

Run the repository validator from the theme root:

```sh
node scripts/validate-theme.mjs
```

Install the PHP development dependencies and run the coding-standard checks:

```sh
composer install
composer lint
```

Create a clean distribution ZIP with PowerShell:

```powershell
./scripts/build-release.ps1 -Version 1.0.0
```

## Product boundary

MonoVM Blueprint provides presentation only. Billing, checkout, WHMCS integration,
domain lookup, provisioning, account management, ticketing, forms, analytics,
and other business behavior belong in plugins or external services chosen by
the site owner.

The distributed theme contains no telemetry, remote fonts, CDN assets, demo
importer, affiliate link, forced credit, or MonoVM service dependency.

## Distribution intent

The same clean release artifact is intended for WordPress.org, the dedicated
MonoVM theme page, and GitHub Releases. Release checks must pass before that
artifact is published.

## License

MonoVM Blueprint is licensed under GPL-2.0-or-later. Bundled IBM Plex font subsets are
licensed under the SIL Open Font License 1.1; full provenance is recorded in
`assets/fonts/README.md`.
