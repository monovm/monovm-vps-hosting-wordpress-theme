# MonoVM Blueprint 1.0 Product Specification

## Document status

- **Decision:** Approved for specification and design
- **Implementation:** Not started
- **Target version:** 1.0.0
- **Working theme name:** MonoVM Blueprint
- **Slug and text domain:** `monovm-blueprint`
- **Default language:** English
- **License:** GPL-2.0-or-later

## Product promise

Give a VPS, cloud, server, or hosting business a credible English marketing
site that can be edited entirely with native WordPress blocks—without a page
builder, required plugin, remote dependency, or theme-specific content model.

The usability target is for a first-time test user to publish a customized
starter homepage within 30 minutes and assemble the core marketing site within
one working day. This is a validation target, not copy for the public listing.

## Strategic intent

MonoVM Blueprint is a single brand-aligned theme, not the start of a theme farm. Its
value does not depend on becoming viral. It should demonstrate MonoVM's domain
expertise, create a useful open-source asset, and establish a maintainable
presence on WordPress.org and GitHub.

The theme itself must remain neutral and reusable by any eligible user. MonoVM
promotion belongs on the separate MonoVM product page, never in locked theme
content, remote calls, admin notices, or forced front-end links.

## Problem statement

Many hosting-oriented themes are classic themes, depend on commercial upgrades
or page builders, use generic server photography, and blur presentation with
business functionality. Users need a lightweight alternative that:

- works with the WordPress Site Editor;
- provides complete, hosting-specific page patterns;
- is straightforward to customize and switch away from;
- makes no external request and collects no data;
- does not pretend to provide WHMCS, provisioning, billing, or domain services.

## Target users

### Primary

- Small and midsize VPS, cloud, dedicated-server, and hosting providers.
- Infrastructure consultancies and managed-service providers.
- Resellers launching a simple, credible service catalog.

### Secondary

- Web agencies producing an infrastructure-company site for a client.
- Technical founders validating a server or managed-infrastructure offer.
- WordPress implementers who need reusable hosting-specific patterns.

### Not targeted

- Users who require a complete billing, provisioning, domain, support, or
  customer-portal product from the theme.
- Users who require Elementor or another page-builder ecosystem.
- Users who expect a one-click remote demo import.

## Jobs to be done

1. Present VPS and infrastructure services clearly.
2. Show static example plans and compare their specifications.
3. Explain data-center coverage, security, support, and operational benefits.
4. Establish trust without unsupported metrics or claims.
5. Publish technical articles and service guides.
6. Direct visitors to the user's own checkout, quote, support, or contact URL.
7. Restyle and restructure the whole site through the Site Editor.

## Product principles

1. **Presentation only.** Persistent business behavior belongs in plugins or
   external systems.
2. **Core first.** Every shipped layout uses WordPress Core blocks.
3. **No lock-in.** User content remains useful after a theme switch.
4. **Honest by default.** No invented uptime, customer, security, review, or
   compliance claim.
5. **Infrastructure clarity.** Precise hierarchy and scannable data replace
   generic neon, stock-server, and cyberpunk decoration.
6. **Private by default.** No telemetry, tracking, remote font, or external
   service request.
7. **English first.** All public copy is natural English; implementation remains
   translation-ready.
8. **Maintainable.** Version 1.0 stays small enough for one named maintainer.

## Version 1.0 scope

### Theme architecture

- Native WordPress block theme.
- `theme.json` schema version 3.
- Core blocks only.
- No required or bundled plugin.
- No custom admin screen, onboarding wizard, or Customizer dependency.
- No remote API or runtime dependency.
- No theme-authored front-end JavaScript unless an approved accessibility issue
  cannot be solved with Core behavior and CSS.

### Templates

1. `index`
2. `front-page`
3. `home`
4. `page`
5. `single`
6. `archive`
7. `search`
8. `404`
9. Page without title
10. Blank/Landing page

The theme does not create pages or change Reading settings on activation.
Templates provide presentation; users choose or create their content through
normal WordPress flows.

### Template parts

- Default header with site identity, navigation, and one editable CTA.
- Compact alternate header.
- Default multi-column footer.
- Compact alternate footer.

Header and footer alternatives must be discoverable as patterns in the Site
Editor and must not contain a forced MonoVM link.

### Content patterns

1. **VPS Hero** — concise value proposition, two CTAs, original abstract infrastructure visual.
2. **Service Grid** — VPS, cloud, dedicated, managed, or user-defined services.
3. **Pricing Cards** — three neutral, editable plan examples.
4. **Plan Comparison** — accessible, responsive comparison of plan attributes.
5. **Server Specifications** — CPU, memory, storage, network, and OS examples.
6. **Benefits and Features** — scannable value cards without unverifiable claims.
7. **Data-center Locations** — editable region cards; no embedded remote map.
8. **Security and DDoS** — capability layout with neutral placeholder wording.
9. **Uptime and Trust Strip** — editable proof points with no prefilled guarantee.
10. **Testimonials** — explicit `Customer quote`, `Customer name`, and `Company` placeholders; no fictional identity or review claim.
11. **FAQ** — Core Details blocks with common, editable questions.
12. **Blog and Tutorials** — Core Query Loop with a lead article and compact chronological list.
13. **Support Channels** — links to user-defined documentation, status, ticket, or contact destinations.
14. **Final CTA** — short closing message with one or two editable actions.

All patterns must work independently. A user must be able to insert, remove,
reorder, and restyle them without installing a plugin.

### Style system

- Default style follows the approved `Dark Infrastructure` direction.
- `Light Business` style variation.
- `High Contrast` style variation.
- Global presets for color, typography, spacing, layout width, border, radius,
  and shadow where supported.
- Deliberately restrained block-level CSS for components not expressible in
  `theme.json`.

Variations must differ in typography, surfaces, spacing, and component
treatment. A palette-only variation does not satisfy the scope.

### Core block coverage

The design must explicitly cover at least:

- Navigation, Site Logo, Site Title, and Site Tagline;
- Heading, Paragraph, List, Buttons, and Separator;
- Group, Columns, Grid, Cover, Image, and Gallery;
- Query Loop, Post Template, Post Title, Post Excerpt, Date, and Pagination;
- Search, Details, Table, Quote, Code, Preformatted, and Social Icons;
- Form controls rendered by Core, including comments and search.

## Content model

- Pages represent services, plans, locations, about, support, and marketing
  landing pages.
- Posts and Core categories represent tutorials, news, comparisons, and guides.
- Core navigation represents primary and footer navigation.
- Pattern content is starter presentation, not imported site data.

The theme will not register a Service, Plan, Data Center, Testimonial, FAQ, or
any other custom post type or taxonomy.

## Primary user journeys

### Journey A: new site

1. User installs and activates the theme.
2. The front end renders without error and provides a coherent default state.
3. User opens Appearance → Editor.
4. User chooses a style variation and edits site identity/navigation.
5. User creates pages and inserts the supplied patterns.
6. User replaces every placeholder claim, link, price, and visual.

### Journey B: existing site

1. User previews or activates the theme on an existing site.
2. Existing posts, pages, navigation, search, archives, comments, and images
   remain available.
3. User chooses templates and patterns without a migration or demo import.
4. Switching back to another theme leaves content intact.

### Journey C: external business system

1. User edits a pricing, support, or CTA pattern.
2. User links the button to their own checkout, WHMCS, contact form, status
   page, or ticket system.
3. The theme displays the link but does not inspect, integrate with, or transmit
   data to that destination.

## Functional requirements

| ID | Requirement |
|---|---|
| FR-01 | Activation succeeds on the minimum and current supported WordPress versions without a plugin. |
| FR-02 | Every required template renders valid block markup in the editor and front end. |
| FR-03 | Every supplied pattern inserts without validation errors and remains fully editable. |
| FR-04 | Users can change site-wide colors, typography, spacing, and layout through Global Styles. |
| FR-05 | Users can replace header and footer variants through normal Site Editor flows. |
| FR-06 | Pricing, comparison, location, support, and FAQ content is static and editable. |
| FR-07 | Search, posts, archives, pagination, and 404 behavior use Core WordPress behavior. |
| FR-08 | The theme exposes no custom settings or data-storage mechanism. |
| FR-09 | No default pattern contains a live commercial, affiliate, or MonoVM destination. |
| FR-10 | A clean theme switch preserves all user-owned content. |

## Non-functional requirements

### Compatibility

- Requires WordPress 6.6 or later.
- Requires PHP 7.4 or later.
- Tested on the latest stable WordPress release at package time.
- Test baseline for release: WordPress 6.6 and 7.1.
- Test WordPress 7.1 after its stable release; an RC result is not a public
  compatibility claim.
- PHP test matrix: 7.4, 8.1, and 8.3.

### Performance

- Zero third-party requests on a clean page load.
- No remote fonts or CDN assets.
- Zero theme-authored front-end JavaScript by default.
- Installable ZIP target: no more than 1.5 MB.
- Images have explicit dimensions and are compressed for their real use.
- Global Styles are preferred over large, high-specificity stylesheets.

### Accessibility

- Visible focus and complete keyboard operation.
- Working skip link where required.
- Logical landmarks and heading hierarchy.
- Meaningful link labels and accessible navigation state.
- Sufficient color contrast in all variations.
- Usable at 200% zoom and 320 CSS pixels.
- Text-spacing tolerance and reduced-motion support.
- No information communicated by color alone.

The implementation should be built toward current accessibility-ready
requirements, but the public tag is excluded until a full manual audit and the
additional WordPress.org review path are approved.

### Privacy and security

- No telemetry, tracking, cookies, external updater, or data transmission.
- No user input handled by theme-owned endpoints.
- Any required PHP uses the `monovm_blueprint_` / `MONOVM_BLUEPRINT_` prefix, sanitizes
  input, escapes untrusted output, and applies capabilities/nonces where relevant.
- No secret, credential, environment path, or internal service URL is packaged.

### Language

- English sample content, listing, demo, screenshot, support, and documentation.
- Translation-ready user-visible strings using `monovm-blueprint`.
- No bundled Persian or Arabic starter content.
- No `rtl-language-support` claim in version 1.0.
- CSS logical properties are preferred where safe.

## Explicitly out of scope

- WHMCS, Blesta, control-panel, or billing integration.
- Domain search, registration, or availability checks.
- Server provisioning, account creation, or hosting-provider APIs.
- Live price, stock, status, threat, uptime, or location feeds.
- Checkout, payment, subscription, login, or customer portal.
- Forms, quote calculators, ticketing, chat, or newsletter capture.
- Custom blocks, shortcodes, widgets, post types, taxonomies, roles, or fields.
- SEO, schema generation, analytics, consent management, caching, or optimization.
- Demo importer, remote starter sites, admin notices, upsells, or affiliate links.
- Elementor, Gutenberg plugin, WooCommerce, or companion-plugin dependency.
- Forced front-end author credit.
- Multilingual content packs and an RTL support claim.

## Required release artifacts

- Clean installable `monovm-blueprint.zip`.
- Public GitHub source repository.
- Git tag and GitHub Release for `1.0.0`.
- WordPress.org-compliant `readme.txt`.
- English GitHub README and public documentation.
- GPL license and complete asset Resources record.
- Accurate 1200×900 screenshot.
- WordPress Playground blueprint.
- Dedicated MonoVM product page and live demo.
- SHA-256 for the release ZIP.

## Success measures

### Release quality

- WordPress.org submission package passes Theme Check with no error.
- No critical or high-severity defect at release.
- No theme-caused PHP/JavaScript warning, notice, or error.
- Zero external request or required dependency.
- Identical release artifact across approved distribution channels.
- At least four of five representative test users publish the starter homepage
  within 30 minutes without developer assistance.
- On the controlled mobile reference demo: Lighthouse Performance is at least
  90, Lighthouse Accessibility is at least 95, LCP is at most 2.5 seconds, and
  CLS is at most 0.1. These are controlled-demo targets, not promises for user
  sites, plugins, networks, or hosting environments.

### First 90 days

- At least 100 active installations.
- No unresolved critical support issue.
- Product page is indexed and receives measurable organic impressions.
- GitHub issues produce actionable feedback rather than installation confusion.

### First 12 months

- At least 500 active installations is the internal niche-success target, not a
  guarantee.
- Maintenance and support cost remains acceptable to the named owner.
- A second theme is not approved without adoption data and a distribution plan.

## Risks and controls

| Risk | Control |
|---|---|
| Users expect billing or provisioning | Repeat the presentation-only boundary in listing, FAQ, and support docs. |
| Theme becomes a MonoVM advertisement | Keep shipped content neutral and all commercial CTAs on monovm.com. |
| Generic hosting-theme appearance | Follow the infrastructure-editorial design brief and use original assets. |
| Asset-license rejection | Prefer original assets; record provenance before an asset enters source control. |
| Plugin-territory rejection | Enforce the out-of-scope list and acceptance checklist in review. |
| Accessibility review delay | Build accessibly; omit the formal tag until the team chooses the extra review path. |
| WordPress release changes | Re-run the compatibility matrix and metadata review immediately before packaging. |
| Unsupported long-term product | Assign a named maintainer and support horizon before submission. |

## Open decisions before implementation

1. Final WordPress.org and trademark clearance for `MonoVM Blueprint`.
2. Final Theme URI and Author URI.
3. Named product, design, technical, legal, and maintenance owners.
4. Whether the first submission will pursue the `accessibility-ready` tag.
5. Approved source or creation workflow for the abstract infrastructure visual.
6. Final compatibility metadata after WordPress 7.1 stable ships.
7. Public support channel and response expectation.

## Release gate

Version 1.0 is releasable only when every required item in
[ACCEPTANCE-CHECKLIST.md](ACCEPTANCE-CHECKLIST.md) passes and the implemented
result matches [DESIGN-BRIEF.md](DESIGN-BRIEF.md).
