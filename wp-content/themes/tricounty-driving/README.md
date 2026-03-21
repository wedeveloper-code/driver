# Tri-County Driving Academy — WordPress Theme

Custom WordPress theme for **tricountydrivingacademy.com** — a SCHEV-certified vocational training school in Lebanon, Virginia.

---

## Requirements

| Software | Version |
|---|---|
| WordPress | 6.4+ |
| PHP | **8.3+** |
| MySQL | 5.7+ / MariaDB 10.4+ |
| Apache | mod_rewrite enabled |

---

## Installation

### 1. Install the theme

Copy the `tricounty-driving/` folder to your WordPress installation:

```
wp-content/themes/tricounty-driving/
```

In WordPress Admin → **Appearance → Themes** — activate **Tri-County Driving Academy**.

---

### 2. Import content (WXR)

1. Go to **Tools → Import → WordPress**
2. If prompted, install the WordPress Importer plugin
3. Upload `wp-content/themes/tricounty-driving/import/content.xml`
4. Map authors to your admin user
5. Click **Submit**

This creates all pages with the correct page templates and slugs.

---

### 3. Set up the Front Page

1. Go to **Settings → Reading**
2. Select **A static page**
3. Set **Front page** → *Home*

---

### 4. Create the Navigation Menu

1. Go to **Appearance → Menus**
2. Create a new menu named **Primary Navigation**
3. Add pages in this order:
   - Home
   - About Us
   - Training Programs *(links to /training-programs/)*
     - CDL Class A Training
     - Heavy Equipment Training
     - Diesel Mechanics
     - NCCER Training
     - Driver Improvement
   - Admissions & Funding
   - Financial Aid
   - Career Placement
   - FAQ
   - Contact Us
4. Assign to **Primary** location
5. Save

---

### 5. Upload Images (optional)

Replace SVG placeholders in `assets/images/` with real photos:

| File | Recommended size | Used on |
|---|---|---|
| `hero-bg.svg` / `hero-bg.jpg` | 1400×600 px | Home hero background |
| `heavy.jpg` | 800×400 px | Funding section |
| `truck.jpg` | 800×400 px | Program pages |
| `tractor_trailer_services.jpg` | 800×400 px | Program pages |

---

### 6. Configure Contact Form

The theme ships with a built-in contact form handler (`tcda_contact_form()`) in `inc/helpers.php`.

Emails are sent to the WordPress admin email (**Settings → General → Email Address**). Ensure your server's `wp_mail()` is configured (use WP Mail SMTP plugin if needed).

---

### 7. URL Redirects (.htaccess)

The root `.htaccess` file at the repo root contains 301 redirects from all old `.htm` / `.html` URLs to the new WordPress permalinks. Merge this file with your WordPress installation's `.htaccess`, placing the redirect rules **above** the `# BEGIN WordPress` block.

Make sure **mod_rewrite** is enabled:
```bash
sudo a2enmod rewrite
sudo systemctl restart apache2
```

---

### 8. Add Testimonials (optional)

1. Go to **WP Admin → Testimonials → Add New**
2. Post title = student name
3. Post content = quote text
4. In the **Testimonial Details** sidebar: set *Program Completed* and *Now Working At*
5. Add 3–4 testimonials — they appear automatically on the homepage

---

## Page Templates

| Template file | Page slug | Used for |
|---|---|---|
| `front-page.php` | *(front page)* | Homepage — hero, trust bar, programs, stats, funding, testimonials, contact |
| `page-templates/template-about.php` | `/about-us/` | About Us |
| `page-templates/template-training-programs.php` | `/training-programs/` | All programs overview |
| `page-templates/template-program.php` | `/commercial-driver-training-class-a-cdl/` etc. | Individual program detail |
| `page-templates/template-admissions.php` | `/admissions-funding/` | Admissions & Funding |
| `page-templates/template-financial-aid.php` | `/financial-aid/` | Financial Aid |
| `page-templates/template-career-placement.php` | `/career-placement/` | Career Placement |
| `page-templates/template-faq.php` | `/faq/` | FAQ accordion |
| `page-templates/template-contact.php` | `/contact-us/` | Contact Us + map |
| `page-templates/template-directions.php` | *(legacy)* | Directions |
| `page-templates/template-tuition.php` | *(legacy)* | Tuition table |
| `page-templates/template-tn-students.php` | `/tennessee-student-information/` | TN Student Info |
| `page-templates/template-news.php` | `/news/` | News archive |
| `page-templates/template-courses.php` | *(legacy)* | Courses listing |
| `index.php` | — | Blog index fallback |
| `single.php` | — | Single post |
| `page.php` | — | Generic page fallback |
| `404.php` | — | 404 Not Found |
| `search.php` | — | Search results |
| `archive.php` | — | Post archive |

---

## Program Pages (Custom Fields)

Individual program pages using `template-program.php` display a meta bar at the top if these custom fields are set. Set them via **Custom Fields** on the page editor (enable via Screen Options if hidden), or they are imported automatically via `content.xml`.

| Meta key | Description | Example |
|---|---|---|
| `_program_tuition` | Tuition cost | `$4,500 (VA) / $3,450 (TN)` |
| `_program_duration` | Duration | `4 weeks` |
| `_program_salary_range` | Typical salary | `$2,400–$3,600/month` |
| `_program_schedule` | Start frequency | `Classes begin every 3 weeks` |

> Legacy keys `_program_price` and `_program_length` are also supported for backwards compatibility.

---

## Color Palette

| Role | Hex |
|---|---|
| Dark navy (header/footer/banners) | `#0f172a` |
| Amber (primary accent/CTAs) | `#f59e0b` |
| Amber hover | `#d97706` |
| Amber gold (logo tagline) | `#fbbf24` |
| Body text | `#1e293b` |
| Light background | `#f8fafc` |
| Slate text | `#475569` |

---

## Support

**Tri-County Driving Academy, Inc.**
1714 US Hwy 19, Hansonville / P.O. Box 2109, Lebanon, VA 24266
Phone: (276) 794-7660 | Email: tcda1@hotmail.com
