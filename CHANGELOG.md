# Changelog

All notable changes to MonoVM VPS are documented in this file.

## [1.0.0] - 2026-08-11

### Added

- Native WordPress block-theme foundation for WordPress 6.6+ and PHP 7.4+.
- Ten templates and four reusable header and footer template parts.
- Fourteen hosting-specific content patterns plus compact header and footer patterns.
- Seven internal patterns for translatable template content.
- Dark Infrastructure, Light Business, and High Contrast visual systems.
- English-first, translation-ready copy using the `monovm-vps` text domain.
- Locally hosted IBM Plex Sans and IBM Plex Mono variable-font subsets.
- WordPress Playground blueprint and deterministic release packaging.
- Automated checks for package structure, patterns, JSON, runtime URLs, language,
  CSS size, font size, and required release files.

### Security and privacy

- Added no telemetry, tracking, external updater, remote runtime dependency, or
  theme-owned form endpoint.
- Kept all patterns on WordPress Core blocks with no required plugin.

### Accessibility and responsive behavior

- Added visible focus treatment, logical-property layouts, accessible table
  overflow, native Details behavior, forced-colors support, and 44-pixel targets
  where practical.
- Added semantic stripe colors and independently accessible tokens for all three
  visual systems.
