# Tri-County Driving Academy — WordPress Theme

Custom WordPress theme recreating **tricountydrivingacademy.com** for use with a self-hosted WordPress installation.

---

## Requirements

| Software | Version |
|---|---|
| WordPress | 6.4+ |
| PHP | 8.1+ |
| MySQL | 5.7+ / MariaDB 10.4+ |

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

This creates all pages with the correct page templates assigned.

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
   - Courses
   - Info *(section header — no link)*
     - Tuition
     - Info for Tennessee Students
     - VA Online Driver Improvement *(custom link: http://www.va-drivercourses.com/clickIn.php?school=13)*
   - Our News
   - Directions
   - Contact Us
4. Assign to **Primary** location
5. Save

---

### 5. Upload Images (optional)

Replace SVG placeholders in `assets/images/` with real photos:

| File | Recommended size | Used on |
|---|---|---|
| `hero-bg.svg` / `hero-bg.jpg` | 1400×600 px | Home hero background |
| `tractor-trailer.svg` / `.jpg` | 800×400 px | Home — featured course card |
| `heavy-equipment.svg` / `.jpg` | 800×400 px | Home — featured course card |
| `fiber-optics.svg` / `.jpg` | 800×400 px | Home — featured course card |

---

### 6. Configure Contact Form

The theme ships with a built-in contact form handler (`tcda_contact_form()`).
If you prefer **Contact Form 7**:

1. Install and activate the Contact Form 7 plugin
2. Create a form with ID slug `contact`
3. The template will automatically use CF7 if the shortcode exists

Emails are sent to the WordPress admin email (`Settings → General → Email Address`).

---

### 7. URL Redirects (.htaccess)

The root `.htaccess` file contains 301 redirects from all old `.htm` / `.html` URLs to the new WordPress permalinks. Make sure **mod_rewrite** is enabled on your server.

---

## Page Templates

| Template file | Used for |
|---|---|
| `front-page.php` | Homepage (hero, featured courses, features) |
| `page-templates/template-about.php` | About Us |
| `page-templates/template-courses.php` | Courses archive listing |
| `page-templates/template-program.php` | Individual program/course detail |
| `page-templates/template-contact.php` | Contact Us |
| `page-templates/template-directions.php` | Directions |
| `page-templates/template-tuition.php` | Tuition table |
| `page-templates/template-tn-students.php` | Info for Tennessee Students |
| `page-templates/template-news.php` | Our News (blog archive) |
| `index.php` | Blog index / search results |
| `single.php` | Single post |
| `page.php` | Generic page fallback |
| `404.php` | 404 Not Found |

---

## Program Custom Fields

Individual program pages (using `template-program.php`) support these custom fields:

| Meta key | Description | Example |
|---|---|---|
| `_program_price` | Tuition cost | `$3,800` |
| `_program_length` | Duration | `4 weeks` |
| `_program_schedule` | Start frequency | `Classes start monthly` |

Set these via **Custom Fields** box on the page editor (enable via Screen Options if hidden).

---

## Color Palette

| Role | Hex |
|---|---|
| Dark navy (header/footer) | `#1a1a2e` |
| Crimson (primary accent) | `#b22222` |
| Gold (highlights) | `#f0c040` |
| Body text | `#333333` |
| Light background | `#f7f7f7` |

---

## Support

**Tri-County Driving Academy**
Phone: 276-794-7660
P.O. Box 2109, Lebanon, VA 24266
