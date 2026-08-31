# MonoVM Blueprint 1.0 Acceptance Checklist

Every required item in this document must pass before the `1.0.0` release is
submitted to WordPress.org. An unchecked required item blocks release.

## 1. Product identity

- [ ] Theme name is exactly `MonoVM Blueprint`.
- [ ] Slug, folder name, and text domain are exactly `monovm-blueprint`.
- [ ] Version is `1.0.0` in every release surface.
- [ ] Author is `MonoVM`.
- [ ] Theme URI points to the dedicated MonoVM page for this theme.
- [ ] Author URI points to an eligible MonoVM page.
- [ ] The name contains neither `WordPress`, `Theme`, nor a `Twenty*` pattern.
- [ ] WordPress.org and trademark searches have been repeated immediately before submission.

## 2. Package structure and metadata

- [ ] The installable ZIP has one root directory named `monovm-blueprint/`.
- [ ] `style.css` contains all required headers and no inaccurate claims.
- [ ] `readme.txt` passes the WordPress.org readme validator.
- [ ] `LICENSE` contains the complete GPL v2-or-later license text.
- [ ] `theme.json` is valid JSON, uses schema version 3, and declares only supported settings.
- [ ] `templates/index.html` exists and contains valid block markup.
- [ ] `screenshot.png` is at most 1200×900, uses a 4:3 ratio, and represents the real theme.
- [ ] `readme.txt` includes description, installation, FAQ, changelog, privacy, and Resources.
- [ ] Every third-party asset has a recorded name, copyright holder, license, and source URL.
- [ ] No internal ZIP, source map without its source, build cache, `node_modules`, VCS metadata, OS file, or development secret is packaged.
- [ ] No PHP, JavaScript, CSS, HTML, or JSON parse error exists.

## 3. Required templates and parts

- [ ] Index template.
- [ ] Front Page template.
- [ ] Home/Blog template.
- [ ] Page template.
- [ ] Page without title template.
- [ ] Blank/Landing template.
- [ ] Single Post template.
- [ ] Archive template.
- [ ] Search Results template.
- [ ] 404 template.
- [ ] Default header and footer template parts.
- [ ] Alternate header and footer patterns are available in the Site Editor.
- [ ] Every template has one unambiguous main content landmark.
- [ ] Template fallback behavior has been tested with empty and populated sites.

## 4. Content patterns

- [ ] Eight starter page patterns appear in the new-page pattern flow and expand to editable Core blocks.

- [ ] VPS hero.
- [ ] Service grid.
- [ ] Pricing cards.
- [ ] Plan comparison.
- [ ] Server specifications.
- [ ] Benefits and features.
- [ ] Data-center locations.
- [ ] Security and DDoS section.
- [ ] Uptime and trust strip.
- [ ] Testimonials.
- [ ] FAQ using Core Details blocks.
- [ ] Blog and Tutorials.
- [ ] Support channels.
- [ ] Final call to action.
- [ ] Every pattern has an English title, description, category, and sensible viewport width.
- [ ] Every pattern inserts without a block validation error.
- [ ] Every pattern remains editable with the Site Editor and Core block controls.
- [ ] Patterns use neutral placeholder companies, plans, prices, metrics, and links.
- [ ] Testimonial patterns use explicit placeholder labels and contain no fictional identity, rating, or review claim.
- [ ] No pattern advertises MonoVM or contains a forced MonoVM URL.
- [ ] No pattern makes an unsupported uptime, security, compliance, or performance claim.
- [ ] No pattern relies on remote images, maps, fonts, scripts, or APIs.

## 5. Global styles and variations

- [ ] Default global styles match the approved design brief.
- [ ] Dark Infrastructure variation is complete.
- [ ] Light Business variation is complete.
- [ ] High Contrast variation is complete.
- [ ] Variations change typography, spacing, surfaces, and component treatment—not colors alone.
- [ ] All named colors, gradients, font sizes, spacing values, shadows, and layout widths use `theme.json` presets where practical.
- [ ] Editor and front end render the same typography, spacing, colors, and alignment.
- [ ] Button, link, navigation, table, code, quote, details, and form-control styling is coherent in every variation.
- [ ] User-selected Global Styles are not overridden by unnecessary high-specificity CSS.

## 6. Core-only and theme/plugin boundary

- [ ] The theme works without any plugin.
- [ ] No plugin is installed, activated, or downloaded automatically.
- [ ] No custom post type, taxonomy, role, capability, shortcode, or custom block is registered.
- [ ] No WHMCS integration, domain checker, provisioning, payment, checkout, or live pricing is included.
- [ ] No contact form, quote calculator, ticket system, analytics, SEO engine, caching, or social sharing functionality is included.
- [ ] Pricing switches, availability checks, and support controls shown in the design are static, editable presentation only.
- [ ] Switching away from the theme leaves posts, pages, navigation, and user content intact.

## 7. English and internationalization

- [ ] All default copy, pattern content, screenshot text, listing copy, and public documentation are natural English.
- [ ] A fluent English reviewer has approved grammar, capitalization, terminology, and tone.
- [ ] All user-visible PHP and JavaScript strings use the `monovm-blueprint` text domain and appropriate i18n functions.
- [ ] Human-facing text is not unnecessarily hard-coded in block template HTML.
- [ ] A test POT file can be generated without missing or malformed strings.
- [ ] Layouts tolerate English strings expanded by 30–50 percent.
- [ ] No bundled Persian or Arabic starter content is present.
- [ ] The `rtl-language-support` tag is not claimed for 1.0.
- [ ] CSS logical properties are preferred where they do not introduce compatibility regressions.

## 8. Accessibility

- [ ] All interactive elements are operable with a keyboard.
- [ ] Keyboard focus is clearly visible in every style variation.
- [ ] A working skip link is present when required.
- [ ] Navigation menus have meaningful accessible names and correct expanded-state behavior.
- [ ] Heading levels are logical in templates and every supplied pattern.
- [ ] Link labels describe their destination; generic labels such as `Click here` are absent.
- [ ] Information is not communicated by color alone.
- [ ] Normal text and interactive controls meet WCAG contrast expectations.
- [ ] Layout remains usable at 200% zoom and at a 320 CSS-pixel viewport.
- [ ] Increased text spacing does not hide, overlap, or truncate content.
- [ ] Hover-only content has a keyboard and touch-accessible equivalent.
- [ ] Decorative images have empty alt text; meaningful images have editable, useful alt text.
- [ ] Motion is non-essential and respects `prefers-reduced-motion`.
- [ ] A screen-reader spot check covers header, navigation, main content, pricing, FAQ, and footer.
- [ ] The `accessibility-ready` tag is absent unless the full manual audit and WordPress.org review path have been approved.

## 9. Responsive and browser behavior

- [ ] No unintended horizontal page scroll at 320, 375, 768, 1024, and 1440 CSS pixels.
- [ ] Header navigation is usable with mouse, keyboard, touch, and screen reader.
- [ ] Pricing cards stack in a meaningful order on narrow screens.
- [ ] Plan comparison remains understandable and keyboard-scrollable on narrow screens.
- [ ] Long plan names, prices, button labels, URLs, and headings wrap safely.
- [ ] Data-center and feature grids preserve reading order when stacked.
- [ ] Latest stable Chrome, Edge, Firefox, and Safari pass the smoke-test matrix.
- [ ] Current iOS Safari and Android Chrome pass navigation and layout smoke tests.

## 10. Performance and network behavior

- [ ] Theme-authored front-end JavaScript is zero bytes unless an exception is documented and approved.
- [ ] The theme makes zero third-party requests on a clean front-end load.
- [ ] No remote font, analytics script, CDN library, embedded map, or tracking pixel is used.
- [ ] Critical presentation does not depend on a remote image or service.
- [ ] Images are correctly dimensioned, compressed, and do not cause avoidable layout shift.
- [ ] Bundled visual assets are license-safe and sized for their real display use.
- [ ] Custom CSS is split or loaded only where doing so materially improves delivery without increasing complexity.
- [ ] Theme-authored CSS is no more than 30 KB gzipped on the reference build.
- [ ] Bundled fonts, if retained, are no more than 180 KB in total and include complete license/source records.
- [ ] The clean installable ZIP is no larger than 1.5 MB unless an approved, documented asset requires it.
- [ ] WordPress performance tooling reports no theme-caused critical issue.
- [ ] Controlled mobile demo: Lighthouse Performance is at least 90 and Accessibility is at least 95.
- [ ] Controlled mobile demo: LCP is at most 2.5 seconds and CLS is at most 0.1.

## 11. Security and privacy

- [ ] There is no telemetry, fingerprinting, tracking, affiliate parameter, or external update checker.
- [ ] No user or site data is transmitted outside the WordPress installation.
- [ ] No credential, token, environment path, private URL, or test account is packaged.
- [ ] Any PHP identifiers use a unique `monovm_blueprint_` or `MONOVM_BLUEPRINT_` prefix.
- [ ] Any input is validated and sanitized; any untrusted output is escaped at output time.
- [ ] Any state-changing action uses capability checks and a nonce.
- [ ] No deprecated, unsafe, or dynamically downloaded code is used.
- [ ] The privacy statement accurately says that the theme itself collects and transmits no data.

## 12. Compatibility matrix

- [ ] WordPress 6.6 clean install.
- [ ] Latest stable WordPress clean install; currently 7.1 at release time.
- [ ] PHP 7.4.
- [ ] PHP 8.1.
- [ ] PHP 8.3.
- [ ] Fresh site with no plugins.
- [ ] Site with Theme Unit Test Data.
- [ ] Site Editor creation, edit, save, reset, export, and template replacement flows.
- [ ] Activation, theme switch, reactivation, and deletion flows.

## 13. Automated and manual checks

- [ ] Theme Check reports no error.
- [ ] `WP_DEBUG`, `WP_DEBUG_LOG`, and script debug mode reveal no theme-caused warning, notice, or error.
- [ ] PHP syntax and coding-standard checks pass for every PHP file.
- [ ] `theme.json` and every style variation validate against the intended schema.
- [ ] A package audit rejects forbidden, hidden, generated, oversized, and unlicensed files.
- [ ] An automated link scan finds no unintended or broken URL in shipped files.
- [ ] A clean WordPress Playground blueprint installs and demonstrates the release ZIP.
- [ ] Manual visual QA compares editor and front-end screenshots for every template and variation.
- [ ] At least four of five representative test users publish the starter homepage within 30 minutes without developer help.

## 14. Release channels

- [ ] MonoVM catalog `/free-wordpress-theme/` is live and no longer returns 404.
- [ ] The dedicated English theme page is live before WordPress.org submission.
- [ ] MonoVM visibly states that its distributed WordPress themes are GPL-compatible.
- [ ] The GitHub repository is public and contains README, LICENSE, changelog, contribution, and security files.
- [ ] Git tag, GitHub Release, `style.css`, `readme.txt`, and ZIP all use version `1.0.0`.
- [ ] A clean installable ZIP—not GitHub's generated source archive—is attached to the release.
- [ ] MonoVM, GitHub Release, and WordPress.org receive the same build artifact.
- [ ] SHA-256 is recorded for the final ZIP.
- [ ] WordPress.org submission account has 2FA and the required publishing authority.
- [ ] A named maintainer owns review replies, releases, support, and security reports.

## 15. Final release gate

- [ ] Product owner approves the implemented scope against `PRODUCT-SPEC.md`.
- [ ] Design owner approves every template, pattern, breakpoint, and style variation against `DESIGN-BRIEF.md`.
- [ ] Technical owner signs off every required item in this checklist.
- [ ] Legal/brand owner confirms the theme name, asset provenance, GPL statement, and public URLs.
- [ ] No open critical or high-severity defect remains.
- [ ] Any accepted medium-severity issue is documented with an owner and target release.
