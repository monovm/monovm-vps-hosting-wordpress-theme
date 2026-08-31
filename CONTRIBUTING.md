# Contributing to MonoVM Blueprint

Thank you for helping improve MonoVM Blueprint.

## Before opening a change

- Search existing GitHub issues and WordPress.org support topics.
- Keep proposals within the presentation-only boundary in `docs/PRODUCT-SPEC.md`.
- Do not add custom post types, shortcodes, custom blocks, billing, provisioning,
  domain lookup, forms, analytics, or another plugin responsibility.
- Do not introduce a required plugin, remote font, CDN, telemetry, affiliate
  link, or demo importer.
- Confirm the license and provenance of every proposed visual, font, icon, or
  library before adding it to source control.

## Local checks

Run from the repository root:

```powershell
node scripts/validate-theme.mjs
Get-ChildItem -Recurse -Filter *.php | ForEach-Object { php -l $_.FullName }
powershell -ExecutionPolicy Bypass -File scripts/build-release.ps1
```

The complete release gates are in `docs/ACCEPTANCE-CHECKLIST.md`.

## Pull requests

- Use a focused branch and a clear English title.
- Explain the user problem and the visible result.
- Include editor and front-end screenshots for visual changes.
- Test all three style variations and the documented responsive widths.
- Update documentation and changelog when behavior or release scope changes.
- Keep generated release ZIP files out of commits.

By contributing, you agree that your contribution is licensed under
GPL-2.0-or-later.
