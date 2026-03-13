# Toledo's Pet Bull Project — Website Reference Guide

## About This Document

This file provides context for AI sessions related to managing the Toledo's Pet Bull Project (TPBP) website. Read this at the start of every session to orient yourself before helping with any task.

**This is a living document.** After completing any substantive task, update this file with anything a future session would benefit from knowing — things like new pages created, plugins added or removed, design decisions made, quirks discovered, workarounds found, or changes to how something works. Add updates to the Session Log at the bottom of this file, and if the change affects an existing section (like a new page, a plugin swap, or a pricing change), update that section directly too.

---

## The Organization

Toledo's Pet Bull Project is a 501(c)(3) nonprofit in Toledo, Ohio, founded in 2011. The mission is built around three pillars, which form the acronym PET:

- **P**reventing animal cruelty and dog fighting
- **E**ducating on spaying/neutering and responsible pet ownership
- **T**raining individuals and their dogs to become strong advocates, regardless of breed

Address: 2249 Tremainsville Rd, Toledo, OH 43613
Phone: (567) 315-8051
Trainers email: tpbptrainers@gmail.com

## The Audience

Many site visitors may be lower-income and have varying levels of education and tech comfort. This means:

- Write at a plain, accessible reading level
- Keep navigation and instructions simple
- Prioritize mobile-friendly design (many visitors are on phones)
- Avoid jargon on public-facing pages
- Make calls-to-action obvious and easy to follow

---

## Website Technical Stack

**URL:** https://toledospetbullproject.com
**Hosting:** GoDaddy (WordPress hosting with cPanel access)
**Platform:** WordPress with WooCommerce
**Theme:** Astra (free) with a child theme (`astra-child`) for performance optimizations

### Page Builders / Editors

- Most pages have been converted to clean HTML/CSS using Custom HTML blocks in Gutenberg
- A few legacy pages still use Beaver Builder (being phased out)
- Spectra (Gutenberg addon) is also in use on some pages

### Key Plugins

- **WooCommerce** — merchandise sales and training class ticket sales
- **The Events Calendar + Event Tickets Plus** — class scheduling, ticket management, and attendee information collection via registration forms
- **Gravity Forms** — adoption applications, volunteer signups, food pantry applications, foster applications
- **Code Snippets** — PHP customizations (preferred over editing theme files directly)
- **WP Rocket** — caching and performance
- **Smush Pro** — image optimization (WebP conversion, lazy loading, CDN)
- **Mailchimp** — newsletter/email marketing (signup form in site footer)
- **All-in-One WP Migration** — backups

### Payment Processing

- **GoDaddy Payments** — credit/debit cards, Apple Pay, Google Pay (primary)
- **PayPal** — secondary option (also provides Venmo at checkout); used for the Donate page

### Security and Performance

- **Cloudflare** — CDN, DNS, WAF, Bot Fight Mode (free plan)
- DMARC configured through Cloudflare DNS for email deliverability
- Bot Fight Mode enabled to block automated attacks
- Auto-delete code snippets clean up draft orders (1 hour) and failed orders (24 hours)
- reCAPTCHA on forms (note: can conflict with some payment gateways — test after changes)

### Child Theme Performance Optimizations

The `astra-child` theme includes:
- Removes Dashicons for non-logged-in users (~35KB saved)
- Disables WooCommerce scripts on non-shop pages
- Disables Beaver Builder assets on non-BB pages

### Development Workflow

- Edit locally in VS Code
- Version control via GitHub repository (ToledoPetBull-WebComponents)
- Custom CSS lives in Child Theme Stylesheet
- PHP customizations go in Code Snippets plugin (not direct theme file editing)
- Uses WordPress Additional CSS area for safety when testing

---

## Site Color Palette

- **Accent / Logo Green:** #7AC142
- **Links / Primary Buttons:** #5A9B32 (darker green)
- **Button Hover:** #7AC142 (brighter green)
- **Headings:** #222222 (dark charcoal)
- **Body Text:** #333333 (charcoal gray)
- **Site Background:** #F6F1E7 (warm off-white)
- **Borders:** #E0E0E0 (light gray)

---

## Site Structure and Navigation

### Header

- TPBP logo (top left, links to homepage)
- Search button
- "Give Now" button (links to /donate/)
- Sticky header on desktop/tablet (768px+), normal positioning on mobile
- Social icons: Facebook, Instagram, X (Twitter)

### Main Navigation

**Home** → /

**Programs** (dropdown)
- Adoption → /adoption/
- Prevention → /prevention/
- Education → /education/
- Training → /training/

**About Us** (dropdown)
- Trainers → /trainers/
- Board of Directors → /board-of-directors/

**Get Involved** (dropdown)
- Volunteer → /volunteer/
- Foster → /foster/
- Fundraising → /fundraising/

**Shop** → /shop-our-store/

### Footer

Three-column layout:
- **Contact Us** — address, phone, "Send Us a Message" button
- **Follow Us** — Facebook, Instagram, Twitter/X icons
- **Join Our Mailing List** — Mailchimp email signup form (first name, last name, email)

### Other Key URLs

- Donate page → /donate/
- Events calendar → /events/
- Individual dog profiles → /dogs/[dog-name]/ (linked from adoption page grid)
- Individual event pages → /event/[event-slug]/ (linked from events calendar)
- WooCommerce cart/checkout → /cart/, /checkout/

---

## Page-by-Page Reference

### Homepage (/)

Title: "Dog Training Toledo | Toledo's Pet Bull Project"

The homepage is built with custom HTML/CSS in Gutenberg blocks:
- **Hero carousel** — 3 rotating slides (7-second auto-advance) with CTAs. Current slides promote: a fundraising event (Bowling for Bullies), fostering, and training classes. Each slide has a large CTA button.
- **Mission statement** — The PET acronym (Prevent, Educate, Train) with a dog image
- **Programs overview** — Three-column grid showing Prevention, Education, Training with sub-program lists and links
- **Adoptable dogs carousel** — Horizontal scrolling card carousel showing current adoptable dogs with photos, names, short bios, and "Adopt Me" buttons
- **Upcoming Events section** — Manually curated event cards (not auto-pulled from The Events Calendar)
- **Pet CPR promo** — Partnership with Pet Emergency Academy (promo code TOLEDOSPETBULLPROJECT for $10 off)
- **Partner logos** — Grid of sponsor/partner logos

### Adoption (/adoption/)

Title: "Adoption | Dog Adoption from Toledo's Pet Bull Project"

- Intro text about the adoption program
- Health care info (all dogs spayed/neutered, vaccinated, microchipped)
- **"Adoption Application" button** → links to a Gravity Forms application
- **Adoptable Dogs grid** — 4-column grid of clickable dog photos with names. Each links to an individual dog profile page.
- Individual dog pages show full bio, photos, and details

### Prevention (/prevention/)

Title: "Prevention | Pet Care Services by Toledo's Pet Bull Project"

Three main service areas presented as cards:

1. **Spay/Neuter Assistance** — Grant-funded program. Currently at capacity (page says "not accepting new applications — check back"). Has a "Donate to Fund" button.
2. **Pet Food Pantry** — Free pet food for qualifying residents. Eligibility: pets must be spayed/neutered or owner must be willing; bring photo ID and proof of income. Has "Apply for Food Assistance" (Gravity Form) and "Sponsor the Pantry" buttons.
3. **Vaccine Clinics / Park Events** — Free community vaccine clinics. Currently says "Stay Tuned for 2026 Park Schedule!"
4. **Low-Cost Grooming** — Partnership with Open Oaks Pet. Phone: (419) 309-6184, email: grooming@openoakspet.com. "Call to Schedule" button.

### Education (/education/)

Title: "Education | Education Programs for Dogs by Toledo's Pet Bull Project"

Four education programs shown as cards with duration badges:

1. **Teacher's PET** (6 Weeks) — In-classroom program for schools. Has "Enroll Now" button.
2. **Humane Education** (1-2 Hours) — Single-session presentations for groups. Has "Learn More Details" button.
3. **Pet Safety** (1-2 Hours) — Teaching children safe interactions with dogs.
4. **Pawsitive Reading** (Drop-in) — Children read aloud to dogs in library/after-school settings.

### Training (/training/)

Title: "Training | Dog Training Classes by Toledo's Pet Bull Project"

Hero section with "See Upcoming Classes" button (links to /events/). Class cards in 3-column layout:

1. **Puppy Socialization** — $80, 5-week series
2. **Good Manners 1** — $80, 5-week series (first session is humans-only orientation)
3. **Good Manners 2** — $80, 4-week series (prerequisite: Good Manners 1)
4. **Canine Good Citizen** — Listed on site (pricing on events page)
5. **Private Training** — $60, one-hour session. Has "Learn More" and "Register Now" buttons.

Each class card has a photo, price, duration, description, and relevant notes (prerequisites, orientation info).

**How class registration works:** Classes are created as events in The Events Calendar with Event Tickets Plus for ticket sales. Registration forms collect attendee info (dog name, breed, age, vaccination status, goals, etc.). Orders process through WooCommerce. See the `process-training-orders` skill for the order processing workflow.

### Events (/events/)

Powered by The Events Calendar plugin. Shows upcoming events in a searchable list view with:
- Event date, time, name, description preview
- "Get Tickets" button with price and remaining ticket count
- Events include both training classes and fundraising events

### About Us (/about-us/)

Title: "About Us | Community Dog Welfare from Toledo's Pet Bull Project"

Origin story of the organization. Clean page with text and photos.

### Trainers (/trainers/)

Title: "Trainers | Dog Training Experts at Toledo's Pet Bull Project"

Shows certified trainers in a 3-column card layout with circular photos, names, and credentials:
- Nancy Kloss — BA, CPDT-KA, CPR
- Max Machon — BA-PSY, KPA-CTP, CCPDT-KA
- Cory Cripe — KPA-CTP, CCPDT-KA

### Board of Directors (/board-of-directors/)

Title: "Nonprofit Leadership | Board of Directors"

Grid of board members with circular photos, names, titles, and bios. Similar card layout to the Trainers page.

### Volunteer (/volunteer/)

Title: "Volunteer | Community Service by Toledo's Pet Bull Project"

- Description of volunteer opportunities
- Downloadable "Volunteer Alignment" PDF
- "Steps to Become a Volunteer" section with process walkthrough
- Likely links to a Gravity Forms volunteer signup

### Foster (/foster/)

Title: "Foster Dogs | Foster Application"

- Explanation of fostering (TPBP covers medical costs and food)
- "Reasons Why Becoming a Foster is So Fulfilling" section
- Foster application (Gravity Forms)

### Fundraising (/fundraising/)

Title: "Fundraising | Donate to Toledo's Dogs"

Converted from Beaver Builder to clean HTML/CSS (March 2026). Three sections:
- **Intro** — Overview of ways to give, four program areas (Education, Outreach, Rescue, Operational), designated giving instructions
- **Upcoming Fundraising Events** — Two-column card grid showing Bowling for Bullies and A Starry Night with details, pricing, and CTA buttons
- **Donate Banner** — Green gradient banner with "Your Donation Powers Our Mission" heading and Donate Now button linking to /donate/

### Donate (/donate/)

Title: "Donate | Monetary Donations from Toledo's Pet Bull Project"

- 501(c)(3) tax-deductible giving information
- Option to designate donations to specific programs
- PayPal "Donate" button

### Shop (/shop-our-store/)

Title: "Shop Our Store | Pet Products by Toledo's Pet Bull Project"

WooCommerce store with category filter buttons:
- All Merchandise
- T-Shirts
- Sweatshirts
- Accessories

Products include branded TPBP merchandise (t-shirts, sweatshirts, etc.). Cart icon appears in header on shop pages.

---

## Forms Reference (Gravity Forms)

The site uses Gravity Forms for several key applications. These forms collect data and send email notifications:

- **Adoption Application** — linked from /adoption/
- **Foster Application** — linked from /foster/
- **Volunteer Signup** — linked from /volunteer/
- **Food Pantry Application** — linked from /prevention/
- **Contact form** — "Send Us a Message" in the footer

---

## WooCommerce Reference

WooCommerce handles two types of products:

1. **Merchandise** — Physical products (t-shirts, sweatshirts, accessories) sold through /shop-our-store/
2. **Training class tickets** — Sold through Event Tickets Plus integration with The Events Calendar. These appear as events on /events/ with "Get Tickets" buttons.

**Checkout flow:** Cart → Checkout → Payment (GoDaddy Payments or PayPal/Venmo) → Order confirmation

**Order processing:** A Code Snippets snippet on the site sends training class registration data directly to a Google Sheet on order completion.

---

## Common Design Patterns

When building or editing pages, follow these patterns observed across the site:

- **Card layouts** — 3-column grids on desktop, stack to 1-column on mobile. Used for programs, trainers, board members, education programs, and training classes.
- **CTA buttons** — Green (#5A9B32) rounded buttons with white text. Hover state brightens to #7AC142.
- **Section backgrounds** — Alternate between white and the warm off-white (#F6F1E7) to create visual separation.
- **Circular photos** — Used for people (trainers, board members). Dogs get rectangular photos.
- **Info callout boxes** — Light yellow/cream background cards for important notes (eligibility info, prerequisites, schedule updates).
- **Mobile responsive** — All custom HTML includes @media queries for 768px and 480px breakpoints.
- **Paw print decorative elements** — Subtle paw print watermarks used as background decorations.
- **Hero sections** — Full-width with large text overlaying photos, used on Training and homepage.

---

## Known Issues and Gotchas

- **reCAPTCHA conflicts:** reCAPTCHA can block GoDaddy Payments credit card fields at checkout. Test payment flow after any reCAPTCHA changes.
- **SVG display issues:** SVG files often cause problems on WordPress. Convert to PNG for reliability.
- **Beaver Builder pages:** A few pages still use Beaver Builder. Don't remove the plugin until all pages are converted.
- **Homepage carousel is custom HTML** — It's not a plugin. The carousel uses vanilla JavaScript in a Custom HTML block. The auto-scroll interval is 7 seconds.
- **Adoptable dogs on homepage** — The homepage dog carousel is manually maintained (not auto-synced with individual dog profile pages). When dogs are added/removed, both the homepage carousel and the /adoption/ page grid need updating.
- **Events section on homepage** — The events shown on the homepage are manually curated HTML, not auto-pulled from The Events Calendar. They need manual updates when events change.
- **Donate page uses PayPal button** — The /donate/ and /fundraising/ pages use a PayPal donate button, separate from the WooCommerce checkout flow.

---

## How Ellen (Webmaster) Works

- Tests changes incrementally to avoid breaking the site
- Always performs a backup before major changes
- Prefers clean, maintainable code over quick hacks
- Uses Mac (Preview for images, Terminal for Git)
- Manages the site solo — keep solutions simple and well-documented
- Custom code goes in Code Snippets plugin, not theme files directly
- Version controls web components in the ToledoPetBull-WebComponents GitHub repo

---

## Social Media Accounts

- **Facebook:** https://www.facebook.com/ToledosPETBullProject/
- **Instagram:** https://www.instagram.com/petbullproject/
- **X (Twitter):** https://x.com/PETbullProject

---

## Session Log

Record notable changes, discoveries, and decisions here so future sessions have context. Add newest entries at the top.

<!-- Example entry format:
### YYYY-MM-DD — Brief description
What was done, what was learned, and anything a future session should know.
-->

### 2026-03-12 — Added Bowling for Bullies and A Starry Night events; converted Fundraising page from Beaver Builder to HTML/CSS

**Fundraising page (/fundraising/):**
- Converted from Beaver Builder to clean HTML/CSS in Gutenberg Custom HTML blocks (page ID 87)
- Three blocks: intro text, event cards grid (2-column), donate banner (green gradient)
- Added Bowling for Bullies card (May 16, 2026 at Timbers Bowling Lanes — $35/person, $150/team of 5) with Get Tickets and Become a Sponsor buttons
- Added A Starry Night card (Oct 10, 2026 at The Pinnacle) with "Tickets Coming Soon" placeholder and "Contact Us to Sponsor" button — WooCommerce products not yet set up
- Replaced old donate section (big background photo) with a clean gradient banner using honest language: "Your Donation Powers Our Mission" / "Every dollar supports programs that keep dogs safe, healthy, and loved"
- New file: `page-components/fundraising.html`

**Homepage (/):**
- Updated Upcoming Events section from single Bowling for Bullies card to two-column grid with both events
- Added Starry Night card with "Learn More" button linking to /fundraising/#tpbp-starry-night
- Changed `.events-two` CSS from single-column (max-width: 700px) to two-column (max-width: 1100px, grid-template-columns: repeat(2, 1fr))
- Homepage carousel NOT updated — Starry Night remains commented out per Ellen's decision to add it later

**Images:**
- Downloaded Starry Night image from Kate McComb's email (14MB original, 6016x4016)
- Resized to card version: `starry-night-card-800.jpg` (800x534, 113KB) — uploaded to WordPress at `/wp-content/uploads/2026/03/starry-night-card-800.jpg`
- Resized to hero version: `starry-night-hero-1600.jpg` (1600x1068, 349KB) — saved locally for future homepage carousel use

**Design decisions:**
- Donation language avoids claiming "100% goes to dogs" since donations also cover overhead, website, etc.
- Starry Night uses placeholder ticket link (href="#" with onclick="return false") until WooCommerce products are created
- Fundraising event cards use same `.card` component pattern as the rest of the site

### 2026-03-10 — Initial reference guide created
Explored the full website and documented all pages, navigation structure, design patterns, technical stack, forms, and WooCommerce setup. Incorporated existing docs (color-palette.md, implementation-notes.md) into this single reference file.
