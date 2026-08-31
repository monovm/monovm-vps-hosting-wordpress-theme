# MonoVM Blueprint 1.0 Design Brief

## Creative direction

**Core idea: Infrastructure, made legible.**

MonoVM Blueprint should look like an editorial control plane: precise, calm,
measurable, and technically credible. It should feel closer to a well-designed
infrastructure dashboard or engineering publication than to a conventional
hosting template.

The theme may retain restrained cues from MonoVM's cyan, deep teal, red, and
orange identity, but the distributed design must be brand-neutral and reusable.

### Avoid

- Blue-purple gradient wallpaper and glassmorphism.
- Glowing server racks, clouds, rockets, shields, floating cubes, or handshake stock photos.
- Endless walls of interchangeable rounded cards.
- Decorative charts or unsupported speed, uptime, security, and customer claims.
- Static content disguised as a working selector, calculator, configurator, or live status control.
- Hype such as “unmatched,” “blazing-fast,” or “revolutionary” without evidence.
- Forced MonoVM identity, pricing, links, or service names inside the theme.

## Design principles

1. **Evidence before adjectives.** Specifications, scope, location, date, and
   methodology receive more visual weight than promotional copy.
2. **Systems, not decoration.** Use topology lines, section indices,
   specification tables, coordinates, and measured grids.
3. **Editorial rhythm over card walls.** Alternate data bands, comparison
   tables, narrow reading columns, and split layouts.
4. **One clear conversion path.** Each section has at most one primary action
   with an explicit label.
5. **Useful without photography.** Every layout is complete when no photo is supplied.
6. **Native WordPress behavior.** Core blocks remain editable and editor/front-end parity is visible.
7. **Honest interfaces.** A static specification looks like content, never a fake control.
8. **Accessible in every style.** High Contrast is an option, not a repair for inaccessible defaults.

## Visual language

Use an asymmetric grid, large editorial headlines, monospaced metadata, thin
infrastructure-like rules, and restrained signal colors.

Recurring devices:

- section indices such as `01 / PLANS`;
- compact labels such as `REGION`, `CPU`, `STORAGE`, and `NETWORK`;
- tabular numerals for prices and technical values;
- hairline connections between related metrics;
- subtle rack-grid or coordinate backgrounds;
- full-width comparison rows instead of repeated floating cards;
- cyan as a signal color and red as a deliberate action color.

Status colors must never be the only carrier of meaning.

## Semantic design tokens

All values should be represented by semantic `theme.json` presets so each style
variation can replace them cleanly.

### Color token names

- `canvas`
- `surface`
- `surface-alt`
- `ink`
- `muted`
- `line`
- `signal`
- `action`
- `positive`
- `warning`
- `focus`

### Default palette direction

| Token | Value | Intended use |
|---|---:|---|
| Canvas | `#061412` | Primary dark background |
| Surface | `#0D2B29` | Grouped content and panels |
| Surface Alt | `#123936` | Alternating or elevated sections |
| Ink | `#EDF8F8` | Primary text |
| Muted | `#A9C9C8` | Secondary text |
| Line | `#2E5B57` | Borders and dividers |
| Signal | `#1ADBDC` | Links, labels, and technical highlights |
| Action | `#FF4D62` | Primary action fill with dark text |
| Positive | `#4ED17B` | Positive state with text label |
| Warning | `#FFA200` | Warning fill with dark text |
| Focus | `#FFD43B` | Keyboard focus indicator |

Every final foreground/background pair must be verified in implementation. A
brand color may be adjusted when its intended text contrast is insufficient.

### Typography

- Primary family: locally hosted `IBM Plex Sans Variable` with robust system fallbacks.
- Technical family: locally hosted `IBM Plex Mono` for short metrics, labels, prices, coordinates, and code.
- High Contrast may use the system sans stack to avoid another bundled font.
- All font files require an OFL-compatible license record and source entry.
- If the font budget cannot be met, use system stacks without changing the layout.

Suggested scale:

| Role | Size direction | Notes |
|---|---|---|
| Metadata | `0.75rem–0.875rem` | Uppercase only for short labels |
| Body | `1rem–1.125rem` | Line height around 1.65 |
| H3 | `clamp(1.5rem, 2vw, 2rem)` | Component and subsection title |
| H2 | `clamp(2.25rem, 4vw, 3.75rem)` | Major section title |
| H1 | `clamp(3rem, 6vw, 5.5rem)` | Maximum measure about 14ch |

- Prose measure: 62–70 characters.
- Use tabular numerals for prices and technical specifications.
- Never use uppercase for paragraphs or long control labels.

### Spacing and geometry

- Four-pixel base scale: `4, 8, 12, 16, 24, 32, 48, 64, 96, 128`.
- Section spacing: `clamp(4.5rem, 9vw, 9rem)`.
- Default radii: 0, 4px, and 8px.
- Pill treatment is reserved for short status labels.
- Default shadows: none.
- Default borders: one-pixel rules; featured content may use a two-pixel signal edge.
- Content width: 720px.
- Wide width: 1280px.

## Layout system

- Twelve columns on desktop, six on tablet, four on mobile.
- Desktop gutters: 32–48px.
- Mobile gutters: 20–24px.
- Common split: 7/5, with editorial content before technical proof.
- Full-bleed presentation is reserved for the hero, trust band, and final CTA.
- Sections align to common vertical rules so the page reads as one system.

Recommended homepage sequence:

1. Header
2. VPS Hero
3. Uptime and Trust Strip
4. Pricing Cards
5. Plan Comparison or Server Specifications
6. Services and Benefits
7. Data-center Locations
8. Security and DDoS
9. Testimonials
10. Blog and Tutorials
11. Support Channels
12. Final CTA
13. Footer

## Template-part direction

### Primary header

- Optional compact utility row for a user-defined support or status link.
- Main row contains Site Logo/Title, Navigation, and one editable CTA.
- No oversized mega-navigation in the default state.
- Mobile behavior uses the native WordPress navigation overlay.

### Minimal header

- Site identity and one compact navigation/action area.
- Intended for landing pages; it must still expose an accessible site/home path.

### Primary footer

- Structured sitemap, contact details, legal links, and optional status link.
- No forced author or MonoVM promotional credit.

### Minimal footer

- Site title, copyright placeholder, and one small legal navigation area.

## Pattern direction

### 1. VPS Hero

Use a 7/5 split.

- Left: eyebrow, concise headline, explanation, primary and secondary CTA.
- Right: static server blueprint showing editable region, virtualization, CPU,
  memory, storage, and network values.
- The blueprint must not look or behave like an interactive configurator.

Example voice:

> Virtual servers without the fog.

> Choose a location, operating system, and resources. Keep full control as your workload grows.

Example CTA pair:

- **Compare VPS plans**
- **View server locations**

### 2. Service Grid

- Use numbered bordered rows rather than floating icon cards.
- Each service has one outcome-focused sentence and one text link.
- Do not present the same layout as Pricing Cards.

### 3. Pricing Cards

- Three primary sample plans.
- Restrained borders, explicit billing period, scannable resources, and one featured signal edge.
- Sample prices are visibly editable examples, not live offers.
- No monthly/yearly switch unless it is plain static content with no false behavior.

### 4. Plan Comparison

- Semantic Core Table with a caption and clear row/column headers.
- Billing period and included/not-included wording are explicit.
- Icons supplement—not replace—text.
- On small screens, use an accessible overflow container and a visible cue.
- Provide Pricing Cards as the simpler mobile alternative.

### 5. Server Specifications

- Pair large numeric values with a short context label.
- Any benchmark example includes tool/method, region, hardware, and date fields.
- Decorative bars display a numeric value and textual explanation.

### 6. Benefits and Features

- Use an indexed editorial list or asymmetric two-column layout.
- Avoid another generic card grid.
- Copy focuses on user outcomes without unverifiable superlatives.

### 7. Data-center Locations

- Use an accessible regional directory rather than a map-only experience.
- Group cities by region and show editable location code and availability text.
- A decorative map may supplement the list but can never replace it.
- Do not embed a remote map or tracking resource.

### 8. Security and DDoS

- Use a simple editable flow: traffic → filtering layer → isolated VPS → monitoring.
- Describe controls rather than using a generic shield as the main visual.
- No compliance badge, vendor logo, or protection claim without a valid source.

### 9. Uptime and Trust Strip

- Three or four editable facts with room for scope and verification date.
- No prefilled 99.99% guarantee, customer count, review score, or certification.
- Neutral placeholders make it obvious that the user must supply evidence.

### 10. Testimonials

- One editorial quotation using explicit `Customer quote`, `Customer name`, and
  `Company` placeholder labels rather than a fictional identity.
- Optional compact secondary quotes.
- No five-star row unless the site owner replaces it with genuine sourced data.

### 11. FAQ

- Native Details blocks.
- Concise English questions and answers.
- Layout remains readable when all details are expanded.

### 12. Blog and Tutorials

- One lead article beside a compact chronological list.
- Use Core Query Loop, Post Title, Date, Excerpt, and Pagination blocks.
- Do not invent reading time if Core does not supply it.

### 13. Support Channels

- Show user-defined documentation, status, ticket, or contact destinations.
- Each item has an editable availability and best-use-case line.
- Do not imply a support channel exists before the site owner configures it.

### 14. Final CTA

- High-contrast command bar.
- One primary action and one reassurance line.
- No background photo is required.

## Three complete style variations

Every template and pattern must be reviewed in every variation. These are not
palette swaps: typography, spacing, border, radius, button, and density also
change.

### Dark Infrastructure — default

- Canvas `#061412`; Surface `#0D2B29`; Ink `#EDF8F8`.
- Signal `#1ADBDC`; Action `#FF4D62` with dark text.
- IBM Plex Sans and IBM Plex Mono.
- Four-pixel radius, compact vertical rhythm, thin grid lines, no shadow.
- Technical labels remain visible and prominent.
- Intended character: precise, premium, and infrastructure-led.

### Light Business

- Canvas `#F7FAF9`; Surface `#FFFFFF`; Ink `#1A3C3C`.
- Muted `#526766`; Line `#C7E9E9`; Signal/link `#007378`.
- Soft signal surface `#E6FAFA`; Action `#D01636` with white text.
- Less monospaced emphasis, 12px panel radius, and more generous spacing.
- One restrained shadow is permitted only on the featured plan.
- Intended character: managed services, resellers, and B2B buyers.

### High Contrast

- Canvas/Surface `#FFFFFF`; Ink/Line `#000000`.
- Signal fill `#1ADBDC` with black text.
- Primary CTA black with white text; Focus `#FFD43B`.
- System sans, minimum 18px body target, two-pixel borders.
- No shadow, transparency, muted gray body text, or decorative rounding.
- Body links are underlined and control spacing is increased.
- Intended character: accessibility-led, institutional, and public-sector use.

## Responsive behavior

- Hero changes from 7/5 to one column; editorial content remains first.
- Three-column grids become two columns and then one.
- Pricing remains comparable as long as possible, then stacks in reading order.
- Navigation uses the native mobile overlay.
- Primary mobile actions may become full width; inline links do not.
- Type and section spacing use fluid `clamp()` values.
- Technical labels wrap rather than truncate.
- Tables use an internal accessible overflow region; the page itself never scrolls horizontally.
- Decorative topology lines simplify or disappear below 768px.
- At 320 CSS pixels, all content reflows without loss.
- Hover-only information is prohibited.

## Content voice

English copy is technically informed, direct, calm, and readable by a buyer who
is not an infrastructure specialist.

### Use

- Short declarative headlines.
- Concrete verbs: deploy, compare, choose, migrate, monitor.
- Facts with scope and verification date.
- Plain explanations for specialist terms.
- CTA labels that describe the destination.

### Avoid

- “Best-in-class,” “game-changing,” “unlimited power,” and similar unsupported claims.
- Excessive exclamation marks.
- Fake scarcity, countdowns, and pressure language.
- Repeating fast, secure, powerful, and scalable in every section.
- Unexplained abbreviations.
- Real company, customer, vendor, certification, or plan data in shipped placeholders.

## Imagery and icon rules

- Primary visuals are original topology paths, rack grids, server blueprints,
  coordinate systems, command-line excerpts, and verified charts.
- No generic server-rack, call-center, handshake, cloud, or rocket stock imagery.
- Photography is optional and limited to genuine, licensed team or data-center material.
- Illustrations use an eight-pixel grid, one stroke system, and no more than two active colors.
- Icons use one 24px outline family with approximately 1.5px strokes.
- Do not mix icon families or use emoji as interface icons.
- OS and vendor logos require separate license and trademark clearance.
- Maps require an accompanying text list.
- Charts require labels and a textual summary.
- Decorative images use empty alt text; informative images have concise editable alt text.

## Accessibility direction

Every variation independently targets WCAG 2.2 AA.

- Normal text contrast target: at least 4.5:1.
- Large text and interface-boundary target: at least 3:1.
- Focus indicator: minimum two-pixel visible ring with offset and no clipping.
- Target size: 44×44px where practical.
- Working skip link and logical landmarks.
- One contextual H1 and coherent heading hierarchy.
- Body links remain identifiable without color alone.
- No color-only status state.
- Tables have captions and correctly scoped headers.
- Decorative icons are hidden from assistive technology.
- Motion is optional and disabled by `prefers-reduced-motion`.
- No autoplay, parallax, flashing, or scroll-jacking.
- Content supports 200% text/browser zoom without overlap.
- Test keyboard, screen-reader landmarks, forced-colors mode, and editor/front-end parity.

## Editor behavior

- Patterns should look recognizably the same in the editor and front end.
- Do not use CSS selectors that depend on incidental front-end-only wrappers.
- Avoid absolute positioning for essential content.
- Respect user palette, typography, spacing, and layout changes.
- Pattern titles and descriptions explain purpose, not visual appearance alone.
- Block controls remain usable against every editor background.

## Theme screenshot direction

- 1200×900 at 4:3.
- Default Dark Infrastructure variation.
- Show the actual header, hero, trust strip, and beginning of pricing.
- Use a cleared, fictional site identity and neutral sample plans.
- No badge, sale ribbon, rating, or feature that cannot be reproduced.
- No WordPress logo or third-party trademark.
- The composition should remain recognizable if the fictional logo is removed.

## Reference-demo performance targets

On the controlled mobile reference demo:

- Lighthouse Performance: at least 90.
- Lighthouse Accessibility: at least 95.
- LCP: at most 2.5 seconds.
- CLS: at most 0.1.
- Theme-authored CSS: at most 30 KB gzipped.
- Bundled fonts, if retained: target at most 180 KB total.
- Theme-authored front-end JavaScript: zero bytes.

These are design and release targets for the controlled demo, not promises for
arbitrary user content, plugins, networks, or hosting environments.

## Design acceptance

The direction is approved only when:

- the screenshot is recognizable without a logo and does not resemble a generic marketplace hosting theme;
- the homepage works at 320px, 768px, and 1440px;
- all three variations materially change the design character;
- every supplied layout remains useful with Core blocks and no plugin;
- the design remains complete without photography;
- pricing and benchmark content is understandable without color or decorative charts;
- editor and front end preserve the same hierarchy and visual logic;
- every variation passes the accessibility requirements in the release checklist.
