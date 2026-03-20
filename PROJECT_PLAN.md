# Project Plan — Tri-County Driving Academy WordPress Theme

**Client:** Tri-County Driving Academy, Inc.
**URL:** https://tricountydrivingacademy.com
**Repository:** https://github.com/wedeveloper-code/driver
**Branch:** `claude/driving-academy-wordpress-theme-N9h0e`
**Last updated:** 2026-03-20

---

## Quick Reference

| Key | Value |
|---|---|
| Phone | (276) 794-7660 |
| Email | tcda1@hotmail.com |
| Address | 1714 US Hwy 19, Hansonville / P.O. Box 2109, Lebanon, VA 24266 |
| Founded | 1996 by D. Carter McGlothlin |
| PHP | 8.3 |
| Server | Apache (mod_rewrite enabled) |
| WordPress theme folder | `wp-content/themes/tricounty-driving/` |

---

## Technical Requirements

- **PHP 8.3** — typed properties, match expressions, no deprecated functions
- **Apache** with `mod_rewrite` for pretty permalinks and 301 redirects
- **No external CDN dependencies** — all fonts, scripts, and styles self-hosted
- **No jQuery** — vanilla JS only
- **System font stack** as default (no Google Fonts API calls):
  `-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, sans-serif`
- **Mobile-first responsive** — hamburger menu with animated X close button at ≤ 768px
- **Performance targets:** LCP < 2.5s, CLS < 0.1, TBT < 200ms (PageSpeed 90+ mobile)
- **HTML5 valid** — passes W3C Markup Validator
- **Images:** `loading="lazy"` + explicit `width`/`height` on all images
- **JS loading:** all scripts load with `defer` in footer
- **Critical CSS** for above-fold content inlined via `wp_head`
- **WordPress Gutenberg** CSS dequeued on frontend (theme uses custom templates)
- **Color scheme:**
  - Primary: `#1B3A6B` (dark navy — trust, authority)
  - Secondary: `#F5820D` (orange — energy, CTA)
  - Accent: `#00A8E8` (bright blue — clarity)
  - Text: `#2C2C2C`
  - Background light: `#F4F7FA`

---

## PHASE 1: WordPress Theme Creation

### 1.1 Theme File Structure

```
wp-content/themes/tricounty-driving/
├── style.css                          # Theme header declaration (no styles here)
├── functions.php                      # Loads all /inc files
├── index.php                          # Fallback loop
├── header.php                         # <head> + site header + navigation
├── footer.php                         # 4-column footer + bottom bar
├── front-page.php                     # Homepage (static front page template)
├── page.php                           # Generic page template
├── page-about-us.php                  # About Us page
├── page-contact-us.php                # Contact page with form + map
├── page-admissions-funding.php        # Admissions & Tuition page
├── page-career-placement.php          # Career & Job Placement page
├── page-faq.php                       # FAQ page (details/summary accordion)
├── page-tennessee-student-information.php
├── page-financial-aid.php             # Financial Aid page
├── 404.php                            # 404 error page
├── search.php                         # Search results
├── single.php                         # Single post
├── archive.php                        # Post archive
│
├── page-templates/
│   └── template-program.php          # Page Template: "Program Page" (used by all 5 courses)
│
├── inc/
│   ├── theme-setup.php               # add_theme_support(), image sizes, title tag
│   ├── enqueue.php                   # wp_enqueue_scripts — CSS + JS with version hashes
│   ├── custom-post-types.php         # CPT: testimonial
│   ├── menus.php                     # register_nav_menus()
│   └── helpers.php                   # get_program_meta(), tcda_contact_form_handler(), etc.
│
├── template-parts/
│   ├── home-hero.php                 # Slider with overlay CTA
│   ├── home-trust-bar.php            # Accreditation badges strip
│   ├── home-programs.php             # 5 program cards grid
│   ├── home-funding.php              # Grants/funding hook section
│   ├── home-stats.php                # Animated stats counter
│   ├── home-testimonials.php         # Testimonials grid (from CPT)
│   ├── home-contact-cta.php          # Contact form + map section
│   ├── program-hero.php              # Reusable program page hero
│   ├── program-overview.php          # Duration/cost badges + overview
│   ├── program-curriculum.php        # CSS tabs: Classroom / Behind the Wheel
│   ├── program-requirements.php      # Requirements checklist
│   ├── program-career.php            # Career outlook + salary info
│   ├── program-faq.php               # Per-program FAQ accordion (details/summary)
│   ├── program-cta.php               # Bottom CTA / sticky mobile bar
│   └── contact-form.php              # Reusable contact form partial
│
└── assets/
    ├── css/
    │   └── main.css                  # All theme CSS (variables → reset → layout → components → responsive)
    ├── js/
    │   ├── navigation.js             # Hamburger open/close, dropdown menus
    │   ├── slider.js                 # Hero carousel (vanilla JS, ~60 lines)
    │   └── main.js                   # Stats counter (IntersectionObserver), misc
    └── images/
        ├── logo.gif                  # Site logo (from source ZIP)
        ├── heavy.jpg                 # Heavy equipment photo
        ├── truck.jpg                 # CDL truck photo
        ├── tractor_trailer_services.jpg
        ├── favicon.png
        └── placeholder.svg           # Used when CDN image cannot be downloaded
```

### 1.2 Header Navigation Structure

```
[Logo]  Home | About Us | Training Programs ▼ | Admissions & Funding | Career Placement | Contact Us
                              ├─ CDL Class "A" Training
                              ├─ Heavy Equipment Training
                              ├─ Diesel Mechanics
                              ├─ NCCER Training
                              └─ Driver Improvement

Mobile (≤768px): Hamburger [☰] → full-screen overlay menu with [✕] close button
```

### 1.3 Footer Structure (4 columns)

| Column 1 | Column 2 | Column 3 | Column 4 |
|---|---|---|---|
| **Contact Info** | **Our Programs** | **Student Resources** | **Legal & Useful** |
| Logo | CDL Class "A" Training | Admissions & Funding | FAQ |
| 1714 US Hwy 19, Lebanon VA | Heavy Equipment Training | Financial Aid | Privacy Policy |
| (276) 794-7660 | Diesel Mechanics | Career Placement | Terms of Service |
| tcda1@hotmail.com | NCCER Training | Our Fleet & Facility | Sitemap |
| Mon–Fri 8am–5pm | Driver Improvement | Tennessee Students | |

Bottom bar: © 2026 Tri-County Driving Academy, Inc. · SCHEV Certified · Est. 1996

### 1.4 Interactive Components

| Component | Technology | JS Weight |
|---|---|---|
| Hamburger menu + X close | CSS animation + 15 lines vanilla JS | ~0.5 KB |
| Hero image slider | CSS transitions + 60 lines vanilla JS | ~2 KB |
| Stats counter (scroll-triggered) | IntersectionObserver + 25 lines vanilla JS | ~0.8 KB |
| FAQ accordion | Native HTML `<details>`/`<summary>` | **0 KB (no JS)** |
| Program page CSS tabs | CSS `:checked` radio inputs | **0 KB (no JS)** |
| Admissions timeline | Pure CSS (counter-reset + ::before) | **0 KB (no JS)** |
| Contact form validation | 30 lines vanilla JS + server-side PHP | ~1 KB |

### 1.5 Custom Post Types

**Testimonial** (`testimonial`)
- Post title: student name
- Post content: quote text
- Meta: `_testimonial_program` (which course), `_testimonial_company` (employer after graduation)
- Displayed: homepage testimonials section (latest 4)

**Pages with "Program Page" template** (not a CPT — uses standard WordPress Pages for client familiarity):
- Meta boxes: `_program_duration`, `_program_tuition`, `_program_salary_range`, `_program_admission_requirements`

---

## PHASE 2: Content Integration

### 2.1 WordPress Pages to Create

| # | Page Title | Slug | Template | Parent |
|---|---|---|---|---|
| 1 | Home | `/` | front-page.php | — |
| 2 | About Us | `/about-us` | page-about-us.php | — |
| 3 | Contact Us | `/contact-us` | page-contact-us.php | — |
| 4 | Training Programs | `/training-programs` | page.php | — |
| 5 | CDL Class "A" Training | `/commercial-driver-training-class-a-cdl` | template-program.php | Training Programs |
| 6 | Heavy Equipment Training | `/certified-heavy-equipment-training` | template-program.php | Training Programs |
| 7 | Diesel Mechanics | `/diesel-mechanics-heavy-truck-maintenance` | template-program.php | Training Programs |
| 8 | NCCER Training | `/nccer-training` | template-program.php | Training Programs |
| 9 | Driver Improvement | `/driver-improvement` | template-program.php | Training Programs |
| 10 | Admissions & Funding | `/admissions-funding` | page-admissions-funding.php | — |
| 11 | Financial Aid | `/financial-aid` | page-financial-aid.php | Admissions & Funding |
| 12 | Career Placement | `/career-placement` | page-career-placement.php | — |
| 13 | Tennessee Student Info | `/tennessee-student-information` | page.php | — |
| 14 | FAQ | `/faq` | page-faq.php | — |
| 15 | Privacy Policy | `/privacy-policy` | page.php | — |
| 16 | Terms of Service | `/terms-of-service` | page.php | — |

### 2.2 Content Per Page (from source site analysis)

#### Home Page
- **Title:** Tri-County Driving Academy, Inc.
- **Meta description:** Job Training Programs & Career Training that can have you working in as little as 4 weeks. SCHEV certified driving academy in Lebanon, VA.
- **H1:** Launch Your Driving Career in Virginia
- **Sections:** Hero slider → Trust bar → Programs grid → Stats counter → Funding block → Career placement → Testimonials → Contact CTA

#### About Us
- **Title:** About Us — Tri-County Driving Academy
- **Meta:** Learn about Tri-County Driving Academy, established in 1996 in Lebanon, VA. SCHEV-certified vocational training with one-on-one instruction.
- **H1:** About Our School
- **Content:** Founded 1996 by D. Carter McGlothlin. Started as CDL school, expanded to Heavy Equipment and Diesel Mechanics. Certified instructors, one-on-one training, job placement assistance.
- **Directions:** From I-81 Exit 14 (Abingdon), follow to Hansonville, near Valero gas station.

#### Contact Us
- **Title:** Contact Us — Tri-County Driving Academy
- **H1:** Contact Us
- **Content:** Contact form (Name, Email, Subject, Message) + Address + Phone + Email + Google Maps iframe
- **Map:** iframe embed for 1714 US Hwy 19, Hansonville, VA 24266

#### CDL Class "A" Training (`/commercial-driver-training-class-a-cdl`)
- **Title:** CDL Class "A" Training — Tri-County Driving Academy
- **Meta:** Get your Commercial Class A CDL License in 4 weeks. $4,500 tuition includes DOT physical, books, and hands-on training. SCHEV certified, Lebanon VA.
- **H1:** Commercial Driver Training — Class "A" CDL
- **Duration:** 4 weeks | **Tuition:** $4,500 | **Salary:** $2,400–$3,600/month
- **Curriculum:** Written exam prep, Pre-trip inspection, Backing maneuvers, Coupling/uncoupling, Defensive driving, DOT Physical
- **Week breakdown:** Week 1: permit + DOT physical; Weeks 2–3: hands-on truck training; Week 4: DMV testing
- **Admission:** Valid driver's license, DMV driving record, pass DOT physical
- **Schedule:** Classes begin every 3 weeks
- **Job placement:** Major carrier partnerships, many graduates placed before graduation

#### Heavy Equipment Training (`/certified-heavy-equipment-training`)
- **Title:** Certified Heavy Equipment Operator Training — Tri-County Driving Academy
- **Meta:** Become a certified heavy equipment operator in 6 weeks. $4,900 tuition. NCCER credential. Training on backhoe, excavator, dozer. Lebanon, VA.
- **H1:** Certified Heavy Equipment Training
- **Duration:** 6 weeks | **Tuition:** $4,900 | **Salary:** $1,800–$3,600/month
- **Equipment:** Backhoe, Excavator, Dozer
- **Additional:** Blueprint reading, OSHA, Flagman certification, Forklift certification
- **Certification:** NCCER Heavy Equipment Operations Level One — verifiable via NCCER Automated National Registry
- **Admission:** 18+ years old, sound physical health

#### Diesel Mechanics (`/diesel-mechanics-heavy-truck-maintenance`)
- **Title:** Diesel Mechanics & Heavy Truck Maintenance Training — Tri-County Driving Academy
- **Meta:** 11-month Diesel Mechanic program with ASE certification prep. $21,500 tuition includes books, supplies, and first ASE testing fees. Lebanon, VA.
- **H1:** Diesel Mechanics / Heavy Truck Maintenance (11-Month Program)
- **Duration:** 11 months | **Tuition:** $21,500 | **Wage:** ~$18.94/hr median
- **Curriculum:** Diesel engine fundamentals, Hydro-mechanical fuel injection, Computerized truck systems, Truck electronics, Steering/suspension/wheels, Brakes, Driveline systems, HVAC systems
- **Certification:** Diesel Mechanic/Heavy Truck Maintenance Certificate + ASE prep
- **Admission:** 18+ years old

#### NCCER Training (`/nccer-training`)
- **Title:** NCCER Training — Tri-County Driving Academy
- **H1:** NCCER Training
- **Content:** Heavy Equipment Operations Level One. Industry-recognized credentials verifiable through the NCCER Automated National Registry.

#### Driver Improvement (`/driver-improvement`)
- **Title:** Virginia Driver Improvement Course — Tri-County Driving Academy
- **H1:** Virginia Driver Improvement Course
- **Price:** $75 | **Hours:** 8:00 AM – 5:00 PM
- **Content:** Certified by Commonwealth of Virginia. Acceptable at any Virginia court allowing driver improvement courses. Call (276) 794-7660 for schedule.
- **Location:** 1714 US HWY 19, Lebanon, VA 24266

#### Admissions & Funding (`/admissions-funding`)
- **H1:** Admissions & Funding
- **CSS Timeline steps:**
  1. Get your Learner's Permit
  2. Pass DOT Physical (included in CDL/Heavy Equipment tuition)
  3. Complete Application & Enrollment
  4. Begin Classes (start every 3 weeks)
- **Tuition table:**
  | Program | VA Students | TN Students | Other States |
  |---|---|---|---|
  | CDL Class A | $4,500 | $3,450 | $3,950 |
  | Heavy Equipment | $4,900 | $4,250 | $4,250 |
  | Diesel Mechanics | $21,500 | — | — |
  | Driver Improvement | $75 | — | — |
  | OSHA/Hazmat | $125 | $125 | $125 |
- **Pell Grant info:** Some students may be eligible. Contact school for application package.
- **WIOA:** Workforce Innovation and Opportunity Act funding may be available.
- **Veterans:** VA education benefits accepted.

#### Financial Aid (`/financial-aid`)
- **H1:** Financial Aid & Tuition Assistance
- **Content:** WIOA funding, Pell Grants (Heavy Equipment & CDL), Veterans benefits, payment plans. External link: www.state.tn.us/thec for TN students.

#### Career Placement (`/career-placement`)
- **H1:** Career Placement Assistance
- **Content:** School assists with job placement in all areas. Many graduates secure positions before graduation. Resume help, interview prep, recruiter visits on campus.

#### Tennessee Student Information (`/tennessee-student-information`)
- **H1:** Tennessee Student Information
- **Content:** No Pell Grants available for TN students. No college credits. High school diploma/GED required. TN tuition rates. THEC authorization link: www.state.tn.us/thec

#### FAQ (`/faq`)
- **H1:** Frequently Asked Questions
- **Accordion items:**
  - How long does the CDL Class A program take? — 4 weeks
  - What is included in the $4,500 CDL tuition? — Training, books, supplies, DOT physical, drug screen
  - Do I need a CDL permit before starting? — You get your permit in Week 1
  - What equipment do I train on for Heavy Equipment? — Backhoe, excavator, dozer + forklift
  - Is financial aid available? — Pell Grants for some programs, WIOA, Veterans benefits
  - How do I enroll? — Call (276) 794-7660 or fill out the contact form
  - Where is the school located? — 1714 US Hwy 19, Hansonville, VA (near Valero gas station off I-81 Exit 14)
  - Is the school accredited? — Yes, SCHEV certified (Virginia). Also authorized by Tennessee Higher Education Commission.

### 2.3 Image Strategy

1. **From ZIP archive** (included directly in `assets/images/`):
   - `images/logo.gif` → `assets/images/logo.gif`
   - `images/heavy.jpg` → `assets/images/heavy.jpg`
   - `images/truck.jpg` → `assets/images/truck.jpg`
   - `uploads/tractor_trailer_services.jpg` → `assets/images/tractor_trailer_services.jpg`
   - `favicon.png` → `assets/images/favicon.png`

2. **From GoDaddy CDN** (attempt download, fallback to placeholder):
   - `nebula.wsimg.com/a2b00a348280193968e546f66b6deb85` → `slider-1.jpg`
   - `nebula.wsimg.com/bf4476437536a379d35fca04612ec1bf` → `slider-2.jpg`
   - `nebula.wsimg.com/163ae8ce2b52cbc93e5f3706b1f7520b` → `slider-3.jpg`
   - `nebula.wsimg.com/ec65b90aae40cc5fac564e95f679e647` → `slider-4.jpg`
   - Others as gallery images

3. **Placeholder SVG** (`assets/images/placeholder.svg`): Blue-tinted SVG with school name, used when CDN images are unavailable.

### 2.4 Content Import Method

**WXR XML file** (`content-import/tricounty-content.xml`)

Import steps:
1. Install and activate `tricounty-driving` theme
2. Upload images: `wp media import assets/images/*.jpg`
3. Import pages: WP Admin → Tools → Import → WordPress → upload `tricounty-content.xml`
4. Set Reading: Settings → Reading → Static page → Front page: **Home**
5. Assign menus: Appearance → Menus → Primary → "Header Navigation", Footer → "Footer Navigation"
6. Add testimonials: WP Admin → Testimonials → Add New (3–4 entries)
7. Merge `.htaccess` redirects

### 2.5 301 Redirects (.htaccess)

Place above `# BEGIN WordPress` block:

```apache
# ── Tri-County Driving Academy 301 Redirects ──
RewriteEngine On

RewriteRule ^index\.html$ / [R=301,L]
RewriteRule ^home\.html$ / [R=301,L]
RewriteRule ^home\.htm$ / [R=301,L]

RewriteRule ^about-us\.html$ /about-us/ [R=301,L]
RewriteRule ^about-us\.htm$ /about-us/ [R=301,L]
RewriteRule ^about\.html$ /about-us/ [R=301,L]
RewriteRule ^contact-us\.html$ /contact-us/ [R=301,L]
RewriteRule ^contact\.html$ /contact-us/ [R=301,L]
RewriteRule ^contact\.htm$ /contact-us/ [R=301,L]

RewriteRule ^commercial-driver-training-class--a--cdl\.html$ /commercial-driver-training-class-a-cdl/ [R=301,L]
RewriteRule ^certified-heavy-equipment-training\.html$ /certified-heavy-equipment-training/ [R=301,L]
RewriteRule ^diesel-mechanics-heavy-truck-maintenance\.html$ /diesel-mechanics-heavy-truck-maintenance/ [R=301,L]
RewriteRule ^nccer-training\.html$ /nccer-training/ [R=301,L]
RewriteRule ^driver-improvement\.html$ /driver-improvement/ [R=301,L]
RewriteRule ^driver\.html$ /driver-improvement/ [R=301,L]
RewriteRule ^operator\.html$ /certified-heavy-equipment-training/ [R=301,L]
RewriteRule ^fiber\.html$ /admissions-funding/ [R=301,L]

RewriteRule ^tennessee-student-information\.html$ /tennessee-student-information/ [R=301,L]
RewriteRule ^virginia-residents-financial-aid--pell-grant--packet\.html$ /financial-aid/ [R=301,L]
RewriteRule ^info/tuition\.htm$ /admissions-funding/ [R=301,L]
RewriteRule ^info/info-for-tn-students\.htm$ /tennessee-student-information/ [R=301,L]
RewriteRule ^info/business-neighbors\.htm$ /about-us/ [R=301,L]
RewriteRule ^our-news\.htm$ / [R=301,L]
RewriteRule ^links\.html$ /about-us/ [R=301,L]
RewriteRule ^directions\.html$ /contact-us/ [R=301,L]
RewriteRule ^directions\.htm$ /contact-us/ [R=301,L]
RewriteRule ^programs\.html$ /training-programs/ [R=301,L]
RewriteRule ^courses\.htm$ /training-programs/ [R=301,L]

RewriteRule ^Products/1(/.*)?$ /commercial-driver-training-class-a-cdl/ [R=301,L]
RewriteRule ^Products/2(/.*)?$ /certified-heavy-equipment-training/ [R=301,L]
RewriteRule ^Products/3(/.*)?$ /admissions-funding/ [R=301,L]
RewriteRule ^Products/6(/.*)?$ /diesel-mechanics-heavy-truck-maintenance/ [R=301,L]
RewriteRule ^Products/7(/.*)?$ /admissions-funding/ [R=301,L]
RewriteRule ^Products/8(/.*)?$ /admissions-funding/ [R=301,L]
RewriteRule ^Products/9(/.*)?$ /driver-improvement/ [R=301,L]
```

---

## Verification Checklist (Post-Deploy)

- [ ] PageSpeed Insights: Home page ≥ 90 mobile score
- [ ] W3C Markup Validator: 0 errors on all page templates
- [ ] Hamburger menu opens and closes with X button at 375px
- [ ] Dropdown menu works on desktop hover and keyboard tab
- [ ] All 301 redirects return HTTP 301: `curl -I https://tricountydrivingacademy.com/commercial-driver-training-class--a--cdl.html`
- [ ] No 404 errors on any image or asset
- [ ] Contact form submits and shows success message (no external service)
- [ ] Google Maps iframe loads on Contact page
- [ ] FAQ accordion expands/collapses without JS errors
- [ ] Stats counter animates on scroll
- [ ] Hero slider autoplays and responds to prev/next controls
- [ ] External links preserved: state.tn.us/thec, va-drivercourses.com (if present)
- [ ] SCHEV certification mention on About/Home
- [ ] All program tuition amounts correct (CDL $4,500, HE $4,900, Diesel $21,500, Driver Imp. $75)
- [ ] PHP 8.3 — no deprecated warnings in WP_DEBUG mode
- [ ] SSL / HTTPS — all assets load over HTTPS
