# Plan: DrivingAcademyWP — Custom WordPress Theme for Tri-County Driving Academy

## Context

The client runs a driving school (Tri-County Driving Academy, Inc., Lebanon VA) currently on a
static HTML site. The task is to build a custom WordPress theme named **DrivingAcademyWP** that:
- Migrates all content from the existing 7-page HTML site
- Adds new pages (About, FAQ, Privacy Policy, Terms, News/blog)
- Passes Google PageSpeed / Lighthouse (90+) on mobile and desktop
- Has zero external CDN dependencies (fonts, icons, CSS frameworks all self-hosted)
- Is fully editable from the WordPress admin (menus, pages, posts, customizer)

---

## Source Material

| File | Content |
|---|---|
| `main_page.html` | Homepage — carousel, programs, funding, placement, testimonials, contact form |
| `programs.html` | CDL Class A — curriculum, FAQ accordion, sticky enroll form |
| `Financial Aid.html` | WIOA grants, veterans benefits, financing options |
| `Admissions.html` | Admissions steps (duplicate of programs layout) |
| `Job Placement.html` | Career stats, hiring partners, 4-step process |
| `Our Fleet.html` | Trucks, heavy equipment, repair bays |
| `404.html` | Error page |
| `tricountydrivingacademy.com.zip` | Old production site — real images (logo.gif, truck photos), old page URLs |
| `new design.zip` | Second design iteration — reusable `main.js` and `styles.css` patterns |

**Real images extracted from zip** (in theme `assets/images/`):
- `logo.gif`, `a-lot-of-trucks.jpg`, `bulldozer-training.jpg`, `bulldozer-with-a-bucket.jpg`
- `excavator-and-loader-training.jpg`, `nccer-training.jpg`, `tractor_trailer_services.jpg`
- `training-in-engine-design.jpg`, `two-trucks.jpg`, `man-studying.jpg`, `heavy.jpg`
- `favicon.ico`, `favicon.png`

---

## Design Specification

**Colors (CSS custom properties):**
```css
--brand-blue:   #1e3a8a;
--brand-light:  #3b82f6;
--brand-accent: #f59e0b;
--accent-hover: #d97706;
```

**Typography:** Inter (self-hosted woff2, weights 400/500/600/700/800, `font-display: swap`)

**Breakpoints:** 640px (sm), 768px (md), 1024px (lg)

**No external resources** except the Google Maps iframe embed on the Contact page.

---

## Theme Directory Structure

```
wp-content/themes/DrivingAcademyWP/
├── style.css                        ← WordPress theme header only
├── functions.php                    ← requires all inc/ files
├── header.php
├── footer.php
├── index.php                        ← blog archive
├── front-page.php                   ← homepage
├── page.php                         ← default page (About, Privacy, Terms)
├── single.php                       ← single news post
├── 404.php
├── sidebar.php
├── comments.php
├── screenshot.png                   ← 1200x900
│
├── page-templates/
│   ├── template-program.php         ← CDL, Heavy Equip, Diesel, NCCER, Driver Impr.
│   ├── template-admissions.php
│   ├── template-financial-aid.php
│   ├── template-job-placement.php
│   ├── template-fleet.php
│   ├── template-contact.php
│   └── template-faq.php
│
├── template-parts/
│   ├── hero.php
│   ├── trust-bar.php
│   ├── program-card.php
│   ├── testimonial.php
│   ├── cta-form.php
│   └── content-none.php
│
├── inc/
│   ├── theme-setup.php              ← add_theme_support, nav menus, image sizes
│   ├── enqueue.php                  ← wp_enqueue_scripts
│   ├── customizer.php               ← Customizer panels/settings
│   ├── meta-boxes.php               ← program page custom fields
│   ├── contact-form-handler.php     ← AJAX handler + math captcha
│   ├── template-tags.php            ← helper output functions
│   └── widgets.php                  ← register sidebars
│
└── assets/
    ├── css/main.css                 ← all styles (~30 KB)
    ├── js/
    │   ├── main.js                  ← carousel, menu, counters, tabs, scroll
    │   └── contact-form.js          ← AJAX form + math captcha
    ├── fonts/
    │   ├── inter/                   ← Inter woff2 (400,500,600,700,800)
    │   └── fontawesome/             ← FA 6.4 Free self-hosted
    └── images/                      ← all site photos + logo + favicon
```

---

## WordPress Pages & Templates

| Page Title | Template | Slug | Source |
|---|---|---|---|
| Home | front-page.php | / | main_page.html |
| About Us | page.php | /about-us | about-us.html (zip) |
| CDL Class A Training | template-program.php | /cdl-class-a-training | programs.html |
| Heavy Equipment Training | template-program.php | /heavy-equipment-training | certified-heavy-equipment-training.html |
| Diesel Mechanics | template-program.php | /diesel-mechanics | diesel-mechanics-heavy-truck-maintenance.html |
| NCCER Training | template-program.php | /nccer-training | nccer-training.html |
| Driver Improvement | template-program.php | /driver-improvement | driver-improvement.html |
| Admissions & Funding | template-admissions.php | /admissions-funding | Admissions.html |
| Financial Aid | template-financial-aid.php | /financial-aid | Financial Aid.html |
| Career Placement | template-job-placement.php | /career-placement | Job Placement.html |
| Our Fleet & Equipment | template-fleet.php | /our-fleet-equipment | Our Fleet.html |
| Contact Us | template-contact.php | /contact-us | contact-us.html (zip) |
| FAQ | template-faq.php | /faq | — |
| News | (Posts page) | /news | — |
| Privacy Policy | page.php | /privacy-policy | — |
| Terms of Service | page.php | /terms-of-service | — |

---

## Menu Structure

**Primary Menu (header):**
- Home
- About Us
- Training Programs (dropdown): CDL Class A, Heavy Equipment, Diesel Mechanics, NCCER, Driver Improvement
- Admissions & Funding
- Career Placement
- News
- Contact Us (styled as CTA button)

**Footer — 4 columns:**
1. Contact Info (logo + address + phone + email + hours — Customizer)
2. Our Programs (wp_nav_menu: footer-programs)
3. Student Resources (wp_nav_menu: footer-resources)
4. Legal & Useful (wp_nav_menu: footer-legal)

---

## Key Implementation Details

### inc/theme-setup.php
```php
register_nav_menus([
    'primary'          => 'Primary Menu',
    'footer-programs'  => 'Footer: Our Programs',
    'footer-resources' => 'Footer: Student Resources',
    'footer-legal'     => 'Footer: Legal & Useful',
]);
add_image_size('program-card', 800, 480, true);
add_image_size('hero-slide',  1920, 1080, true);
add_image_size('avatar',       150, 150,  true);
```

### inc/enqueue.php
- Enqueue `assets/css/main.css` (versioned by filemtime)
- Enqueue `assets/fonts/fontawesome/css/all.min.css`
- Enqueue `assets/js/main.js` in footer with `defer`
- Conditionally enqueue `assets/js/contact-form.js` only on contact template
- `wp_localize_script()` passes `ajaxurl` + nonce to contact-form.js
- Dequeue jQuery if no plugin needs it
- Add `<link rel="preload">` for Inter-700.woff2

### inc/customizer.php Panels
- **Contact Info**: address, phone, email, hours, map embed URL
- **Social Links**: Facebook, LinkedIn, Instagram URLs
- **Homepage Hero**: 3 slides (image, badge, heading, subtext, CTA text+URL)
- **Trust Bar**: 3 items (icon, title, subtitle)
- **Stats**: 4 counters (value, suffix, label)
- **Footer**: copyright text

### inc/meta-boxes.php (program pages)
- `_program_duration` e.g. "160 Hours / 4 Weeks"
- `_program_format` e.g. "Theory & Behind-the-Wheel"
- `_program_credential` e.g. "Class A CDL License"
- `_program_badge_1`, `_program_badge_2`

### inc/contact-form-handler.php
```php
add_action('wp_ajax_nopriv_daw_contact', 'daw_handle_contact');
add_action('wp_ajax_daw_contact',        'daw_handle_contact');
```
1. Verify nonce → sanitize inputs → validate fields + email → check math CAPTCHA transient → wp_mail() → return JSON

### assets/js/main.js
- Burger menu: toggle `.open` on `#mainNav`; swap hamburger/X; close on ESC + outside click
- Dropdown: CSS-only on desktop; JS toggle on mobile
- Carousel: auto-rotate 6.5s, dots, prev/next, pause on hover, keyboard arrows
- IntersectionObserver counters: `[data-counter]` 0 → target on scroll
- CSS tabs: `[data-tab]` / `[data-panel]` switching
- Smooth scroll: anchor links with 80px header offset

---

## .htaccess — 301 Redirects (above WordPress block)

```apache
RewriteEngine On
RewriteRule ^index\.html?$                                     /                          [R=301,L]
RewriteRule ^home\.htm$                                        /                          [R=301,L]
RewriteRule ^programs\.html$                                   /cdl-class-a-training/     [R=301,L]
RewriteRule ^commercial-driver-training-class--a--cdl\.html$   /cdl-class-a-training/     [R=301,L]
RewriteRule ^certified-heavy-equipment-training\.html$         /heavy-equipment-training/ [R=301,L]
RewriteRule ^diesel-mechanics-heavy-truck-maintenance\.html$   /diesel-mechanics/         [R=301,L]
RewriteRule ^nccer-training\.html$                             /nccer-training/           [R=301,L]
RewriteRule ^driver-improvement\.html$                         /driver-improvement/       [R=301,L]
RewriteRule ^about-us\.html?$                                  /about-us/                 [R=301,L]
RewriteRule ^about\.html$                                      /about-us/                 [R=301,L]
RewriteRule ^contact-us\.html$                                 /contact-us/               [R=301,L]
RewriteRule ^contact\.html?$                                   /contact-us/               [R=301,L]
RewriteRule ^directions\.html?$                                /contact-us/               [R=301,L]
RewriteRule ^our-news\.htm$                                    /news/                     [R=301,L]
RewriteRule ^virginia-residents-financial-aid--pell-grant--packet\.html$ /financial-aid/ [R=301,L]
RewriteRule ^tennessee-student-information\.html$              /admissions-funding/       [R=301,L]
RewriteRule ^links\.html$                                      /                          [R=301,L]
RewriteRule ^fiber\.html$                                      /                          [R=301,L]
RewriteRule ^Products/1(/.*)?$                                 /cdl-class-a-training/     [R=301,L]
RewriteRule ^Products/2(/.*)?$                                 /heavy-equipment-training/ [R=301,L]
RewriteRule ^Products/6(/.*)?$                                 /diesel-mechanics/         [R=301,L]
RewriteRule ^Products/9(/.*)?$                                 /driver-improvement/       [R=301,L]
RewriteRule ^Financial(%20|\ )Aid\.html$                       /financial-aid/            [R=301,L]
RewriteRule ^Admissions\.html$                                 /admissions-funding/       [R=301,L]
RewriteRule ^Job(%20|\ )Placement\.html$                       /career-placement/         [R=301,L]
RewriteRule ^Our(%20|\ )Fleet\.html$                           /our-fleet-equipment/      [R=301,L]
RewriteRule ^main_page\.html$                                  /                          [R=301,L]
RewriteRule ^404\.html$                                        /                          [R=301,L]
RewriteRule ^info/tuition\.htm$                                /financial-aid/            [R=301,L]
RewriteRule ^info/.*$                                          /admissions-funding/       [R=301,L]
```

---

## WordPress Settings

```
Settings > Reading:  Static front page = "Home" | Posts page = "News"
Settings > Permalinks: Post name /%postname%/
Settings > General:  Title: Tri-County Driving Academy | Lang: English (US)
```

---

## SEO / Schema (wp_head)

- `<title>` via `add_theme_support('title-tag')`
- `<meta name="description">` from page excerpt or Customizer
- Open Graph: `og:title`, `og:description`, `og:image`, `og:url`
- JSON-LD: `LocalBusiness` (all pages), `EducationalOrganization` (home), `Course` (programs), `FAQPage`

---

## Implementation Order

1. Prepare assets — images extracted, Inter woff2 downloaded, FA 6.4 Free downloaded
2. Theme scaffold — `style.css` header, `functions.php`, all `inc/` files
3. `assets/css/main.css` — full mobile-first stylesheet
4. `assets/js/main.js` — carousel, menu, counters, tabs
5. `header.php` + `footer.php`
6. `front-page.php` — homepage
7. `page-templates/template-program.php`
8. Remaining page templates
9. Blog templates — `index.php`, `single.php`, `sidebar.php`, `comments.php`
10. `404.php`
11. `inc/contact-form-handler.php` + `assets/js/contact-form.js`
12. `inc/customizer.php`
13. SEO / Schema in `header.php`
14. WordPress content setup (pages, menus, customizer values)
15. `.htaccess` 301 redirects
16. Performance pass — lazy loading, preload, width/height attrs
17. Testing — Lighthouse, mobile, forms, redirects, schema

---

## Verification Checklist

- [ ] Theme appears in wp-admin Appearance > Themes
- [ ] All 16 pages with correct templates and slugs
- [ ] Burger menu opens/closes with hamburger/X on mobile
- [ ] Desktop dropdown works on hover
- [ ] Homepage carousel auto-rotates with dots + arrows
- [ ] Counter animation on scroll
- [ ] Contact form: client validation, CAPTCHA, AJAX, email delivery
- [ ] All 301 redirects return HTTP 301
- [ ] Google Lighthouse Desktop + Mobile >= 90 all categories
- [ ] Schema validates at schema.org/validator
- [ ] No console errors
- [ ] All images have `width`, `height`, `alt`
- [ ] Customizer fields update live on site
- [ ] All menus editable from WP Admin > Appearance > Menus
