# Content Import Instructions

## Step-by-step setup after theme activation

### 1. Upload images to Media Library

Upload these images from the theme's `assets/images/` folder via **WP Admin → Media → Add New**:

- `truck.jpg` — CDL Training Truck
- `heavy.jpg` — Heavy Equipment Training
- `tractor_trailer_services.jpg` — Tractor-Trailer Services

### 2. Import pages (WXR)

**Via WP Admin:**
1. Go to **Tools → Import → WordPress**
2. Install the WordPress Importer plugin if prompted
3. Upload `content.xml` from this folder
4. Click **Download and import file attachments**
5. Assign posts to an existing user (e.g., admin)

**Via WP-CLI (faster):**
```bash
wp import wp-content/themes/tricounty-driving/import/content.xml --authors=create
```

### 3. Publish imported pages

After import, all pages are in **Draft** status. Bulk-publish them:

1. Go to **Pages → All Pages**
2. Select all drafts
3. Bulk Actions → **Edit** → Status: **Published** → Update

### 4. Set the front page

**Settings → Reading:**
- Your homepage displays: **A static page**
- Homepage: **Home**
- Posts page: *(leave blank)*

### 5. Assign Navigation Menus

**Appearance → Menus → create two menus:**

**Primary Menu** (Location: Header Navigation):
- Home
- Training Programs (parent)
  - Class A CDL
  - Heavy Equipment
  - Diesel Mechanics
  - NCCER Training
  - Driver Improvement
- About Us
- Admissions & Funding
- Career Placement
- Contact Us

**Footer Menu** (Location: Footer Navigation):
- Financial Aid
- FAQ
- Tennessee Students
- Privacy Policy
- Terms of Service

### 6. Add Testimonials

Go to **WP Admin → Testimonials → Add New** and enter 3–4 graduate testimonials.
Set the custom fields:
- `_testimonial_student_name` — Graduate's name
- `_testimonial_company` — Employer
- `_testimonial_program` — CDL / Heavy Equipment / etc.

### 7. Apply 301 Redirects

Copy the rules from `htaccess-redirects.txt` (in the repo root) into your WordPress `.htaccess` file, **above** the `# BEGIN WordPress` block.

### 8. Verify

- Front page loads with hero slider
- All program pages accessible via their slugs
- Contact form submits successfully
- Stats counter animates on scroll
- Hamburger menu works on mobile
