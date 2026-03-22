<?php
/**
 * Tri-County Driving Academy Theme Functions
 */

// Prevent direct access
if (!defined('ABSPATH')) exit;

/**
 * Theme Setup
 */
function tricounty_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tricounty'),
    ));

    // Add custom image sizes for news cards
    add_image_size('news-card', 900, 500, true);
    add_image_size('news-featured', 1200, 600, true);
}
add_action('after_setup_theme', 'tricounty_setup');

/**
 * Enqueue styles and scripts
 */
function tricounty_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style('tricounty-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&family=Rajdhani:wght@500;600;700&display=swap', array(), null);

    // Theme CSS
    wp_enqueue_style('tricounty-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), '1.0.1');

    // Main JS
    wp_enqueue_script('tricounty-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'tricounty_enqueue_assets');

/**
 * Helper: get image URL from theme assets
 */
function tricounty_img($filename) {
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

/**
 * Helper: estimate reading time for a post
 */
function tricounty_reading_time($post_id = null) {
    if (!$post_id) $post_id = get_the_ID();
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = max(1, ceil($word_count / 250));
    return $reading_time;
}

/**
 * Auto-create pages and blog posts on theme activation
 */
function tricounty_create_pages() {
    $pages = array(
        array(
            'title'    => 'Home',
            'slug'     => 'home',
            'template' => 'page-templates/front-page.php',
        ),
        array(
            'title'    => 'About Us',
            'slug'     => 'about-us',
            'template' => 'page-templates/page-about.php',
        ),
        array(
            'title'    => 'Contact Us',
            'slug'     => 'contact-us',
            'template' => 'page-templates/page-contact.php',
        ),
        array(
            'title'    => 'CDL Class A Training',
            'slug'     => 'cdl-class-a-training',
            'template' => 'page-templates/page-cdl.php',
        ),
        array(
            'title'    => 'Certified Heavy Equipment Training',
            'slug'     => 'heavy-equipment-training',
            'template' => 'page-templates/page-heavy-equipment.php',
        ),
        array(
            'title'    => 'Diesel Mechanics Heavy Truck Maintenance',
            'slug'     => 'diesel-mechanics',
            'template' => 'page-templates/page-diesel.php',
        ),
        array(
            'title'    => 'NCCER Training',
            'slug'     => 'nccer-training',
            'template' => 'page-templates/page-nccer.php',
        ),
        array(
            'title'    => 'Driver Improvement',
            'slug'     => 'driver-improvement',
            'template' => 'page-templates/page-driver-improvement.php',
        ),
        array(
            'title'    => 'Admissions',
            'slug'     => 'admissions',
            'template' => 'page-templates/page-admissions.php',
        ),
        array(
            'title'    => 'Financial Aid and Tuition',
            'slug'     => 'financial-aid',
            'template' => 'page-templates/page-financial-aid.php',
        ),
        array(
            'title'    => 'Job Placement Assistance',
            'slug'     => 'job-placement',
            'template' => 'page-templates/page-job-placement.php',
        ),
        array(
            'title'    => 'Our Fleet and Facility',
            'slug'     => 'our-fleet',
            'template' => 'page-templates/page-fleet.php',
        ),
        array(
            'title'    => 'FAQ',
            'slug'     => 'faq',
            'template' => 'page-templates/page-faq.php',
        ),
    );

    foreach ($pages as $page_data) {
        $existing = get_page_by_path($page_data['slug']);
        if ($existing) {
            update_post_meta($existing->ID, '_wp_page_template', $page_data['template']);
            continue;
        }

        $page_id = wp_insert_post(array(
            'post_title'   => $page_data['title'],
            'post_name'    => $page_data['slug'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ));

        if ($page_id && !is_wp_error($page_id)) {
            update_post_meta($page_id, '_wp_page_template', $page_data['template']);
        }
    }

    // Create News page (used as Posts page)
    $news_page = get_page_by_path('news');
    if (!$news_page) {
        $news_page_id = wp_insert_post(array(
            'post_title'   => 'News',
            'post_name'    => 'news',
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ));
    } else {
        $news_page_id = $news_page->ID;
    }

    // Set the front page and posts page
    $home_page = get_page_by_path('home');
    if ($home_page) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home_page->ID);
    }
    if ($news_page_id) {
        update_option('page_for_posts', $news_page_id);
    }

    // Create news categories
    $news_categories = array(
        'Industry Updates',
        'Student Success',
        'Career Tips',
        'Announcements',
        'School Update',
    );
    foreach ($news_categories as $cat_name) {
        if (!term_exists($cat_name, 'category')) {
            wp_insert_term($cat_name, 'category');
        }
    }

    // Remove default "Uncategorized" category if custom ones exist
    $default_cat = get_category_by_slug('uncategorized');
    if ($default_cat) {
        $school_update = get_category_by_slug('school-update');
        if ($school_update) {
            update_option('default_category', $school_update->term_id);
        }
    }

    // Create sample news posts
    tricounty_create_sample_posts();

    // Create primary menu
    $menu_name = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);
        if (!is_wp_error($menu_id)) {
            $locations = get_theme_mod('nav_menu_locations');
            $locations['primary'] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }
    }
}
add_action('after_switch_theme', 'tricounty_create_pages');

/**
 * Create sample news posts on theme activation
 */
function tricounty_create_sample_posts() {
    $sample_posts = array(
        array(
            'title'    => 'Spring 2026 CDL Cohort Opens with Expanded Behind-the-Wheel Hours',
            'slug'     => 'spring-2026-cdl-cohort-expanded-hours',
            'category' => 'School Update',
            'tags'     => array('CDL Training', 'WIOA', 'Virginia'),
            'date'     => '2026-03-20 10:00:00',
            'content'  => '<p>Tri-County has expanded practical road training for the new CDL Class A cohort to better align with regional employer onboarding expectations and current safety standards.</p>

<h2>Why Safety Protocols Are Tightening</h2>
<p>Regional employers report that freight volume and route pressure continue to grow, while insurance and compliance requirements remain strict. As a result, entry-level drivers are being evaluated more closely on consistency, not just basic road-test readiness.</p>

<h3>Core Areas Employers Review</h3>
<ul>
<li>Complete and accurate pre-trip inspection routines.</li>
<li>Backing control and communication in yard conditions.</li>
<li>Defensive spacing and hazard prediction on mixed routes.</li>
<li>Clear documentation habits for logs and incident notes.</li>
</ul>

<blockquote><p>"Technical driving skill matters, but consistency under routine pressure is what hiring teams remember most in the first 30 days." — Lead Instructor, Tri-County Driving Academy</p></blockquote>

<p>Instructors now integrate these checkpoints earlier in training so students can build repeatable habits. This approach improves confidence during recruiter ride-alongs and practical interviews.</p>

<h2>How Students Can Prepare Now</h2>
<ol>
<li>Practice inspection flow until it is consistent and time-efficient.</li>
<li>Use mock scenarios to explain decisions out loud while driving.</li>
<li>Track personal progress weekly with instructor feedback.</li>
<li>Review employer-specific expectations during career coaching sessions.</li>
</ol>

<p>Students who combine practical training with strong communication habits usually transition faster into productive shifts and receive stronger early evaluations.</p>',
        ),
        array(
            'title'    => 'Graduate Spotlight: From First Permit to Full-Time OTR Position in 10 Weeks',
            'slug'     => 'graduate-spotlight-permit-to-otr-10-weeks',
            'category' => 'Student Success',
            'tags'     => array('CDL Training', 'Job Placement', 'Student Success'),
            'date'     => '2026-03-14 09:00:00',
            'content'  => '<p>A recent graduate shares the timeline, training highlights, and interview strategy that helped secure a regional over-the-road offer within weeks of completing the CDL Class A program.</p>

<h2>The Training Journey</h2>
<p>Starting with zero commercial driving experience, this student completed all classroom hours, behind-the-wheel training, and the CDL skills test in the standard 4-week program window. Following graduation, career services connected them with three regional carriers actively hiring in Southwest Virginia.</p>

<h3>Key Milestones</h3>
<ul>
<li>Week 1-2: Classroom instruction, permit test preparation, and initial yard practice.</li>
<li>Week 3: Behind-the-wheel road training with expanded hours on regional routes.</li>
<li>Week 4: CDL skills exam, pre-trip inspection certification, and road test.</li>
<li>Week 6-10: Interview process, orientation, and first solo dispatch.</li>
</ul>

<p>The graduate credits consistent daily practice and instructor feedback loops as the most important factors in passing the skills test on the first attempt.</p>',
        ),
        array(
            'title'    => 'What New Fleet Technology Means for Entry-Level Commercial Drivers in 2026',
            'slug'     => 'fleet-technology-entry-level-drivers-2026',
            'category' => 'Industry Updates',
            'tags'     => array('Industry Trends', 'Fleet Technology', 'CDL Training'),
            'date'     => '2026-03-09 08:00:00',
            'content'  => '<p>Modern trucks are evolving fast. We explain which systems students should expect and how training prepares them for technology-assisted commercial driving.</p>

<h2>Technology Systems in Modern Fleets</h2>
<p>Today\'s Class 8 trucks increasingly include advanced driver assistance systems (ADAS), electronic logging devices (ELDs), and collision mitigation technology. For entry-level drivers, understanding these systems before day one on the job reduces onboarding time and builds employer confidence.</p>

<h3>What Students Should Know</h3>
<ul>
<li>Electronic Logging Devices (ELD) are mandatory — familiarize yourself with HOS compliance.</li>
<li>Automatic emergency braking and lane departure warnings are common but don\'t replace defensive driving skills.</li>
<li>GPS-integrated routing software helps optimize fuel efficiency and delivery schedules.</li>
<li>Dashcam and telematics systems are standard for safety monitoring and coaching.</li>
</ul>

<p>Tri-County integrates technology orientation into the CDL curriculum so graduates understand both manual skills and digital systems used in modern fleet operations.</p>',
        ),
        array(
            'title'    => 'Interview Checklist for New CDL Graduates: 7 Points Recruiters Expect',
            'slug'     => 'interview-checklist-cdl-graduates',
            'category' => 'Career Tips',
            'tags'     => array('Career Advice', 'CDL Training', 'Job Placement'),
            'date'     => '2026-03-02 09:30:00',
            'content'  => '<p>Use this pre-interview framework to present your training record clearly and improve your first-round outcomes with regional and national carriers.</p>

<h2>The 7-Point Checklist</h2>
<ol>
<li><strong>Valid CDL with correct endorsements</strong> — Confirm your license class and any additional endorsements (HazMat, Tanker, Doubles/Triples).</li>
<li><strong>Clean MVR</strong> — Bring a current Motor Vehicle Report showing your driving history.</li>
<li><strong>DOT Medical Card</strong> — Ensure your medical certificate is current and properly filed.</li>
<li><strong>Training records</strong> — Have documentation of behind-the-wheel hours and classroom completion.</li>
<li><strong>Pre-trip inspection confidence</strong> — Be prepared to demonstrate or discuss your inspection routine.</li>
<li><strong>Professional references</strong> — Include instructors and any previous employers who can speak to reliability.</li>
<li><strong>Questions for the employer</strong> — Prepare at least 3 questions about routes, equipment, and safety culture.</li>
</ol>

<p>Career services at Tri-County provides mock interview sessions and resume reviews to help graduates make strong first impressions with hiring managers.</p>',
        ),
        array(
            'title'    => 'Financial Aid Advising Hours Expanded for Spring Enrollment',
            'slug'     => 'financial-aid-advising-hours-expanded-spring',
            'category' => 'Announcements',
            'tags'     => array('Financial Aid', 'WIOA', 'Enrollment'),
            'date'     => '2026-02-25 10:00:00',
            'content'  => '<p>Advisors are now available for extended evening sessions to help students complete funding paperwork on time for the spring enrollment period.</p>

<h2>Updated Advising Schedule</h2>
<p>Beginning March 1, financial aid advisors will hold extended hours every Tuesday and Thursday evening from 5:00 PM to 7:30 PM. Walk-ins are welcome, though appointments are recommended for WIOA eligibility reviews.</p>

<h3>Services Available During Extended Hours</h3>
<ul>
<li>WIOA grant eligibility screening and application support.</li>
<li>Pell Grant and federal financial aid guidance.</li>
<li>Veterans benefits documentation review (GI Bill, VR&amp;E).</li>
<li>Payment plan setup and tuition overview for all programs.</li>
</ul>

<p>Students who need assistance with FAFSA, dislocated worker verification, or third-party sponsorship letters should bring all relevant documentation to their appointment.</p>

<p>Contact the admissions office at <a href="tel:+12767947660">(276) 794-7660</a> or email <a href="mailto:tcda1@hotmail.com">tcda1@hotmail.com</a> to schedule an advising session.</p>',
        ),
        array(
            'title'    => 'Heavy Equipment Student Success: Early Placement with Utility Contractor',
            'slug'     => 'heavy-equipment-student-early-placement',
            'category' => 'Student Success',
            'tags'     => array('Heavy Equipment', 'NCCER', 'Job Placement'),
            'date'     => '2026-02-17 09:00:00',
            'content'  => '<p>After completing operator modules in the Certified Heavy Equipment Training program, a recent student transitioned directly into a field crew training track with a regional utility contractor.</p>

<h2>Training to Employment Pipeline</h2>
<p>The 6-week heavy equipment program covers excavator, backhoe, dozer, and front-end loader operations along with NCCER Level One certification. This student completed all practical assessments and NCCER credentialing before being connected with an employer through Tri-County\'s placement network.</p>

<h3>Program Highlights That Made the Difference</h3>
<ul>
<li>Hands-on operation of multiple machine types in realistic site conditions.</li>
<li>NCCER national registry credentials recognized across state lines.</li>
<li>Safety training including trenching, grading, and site hazard management.</li>
<li>Career services coordination with regional contractors actively hiring.</li>
</ul>

<p>The $4,900 program investment returned a full-time field position within 3 weeks of graduation, with the employer noting the NCCER credential as a deciding factor.</p>',
        ),
        array(
            'title'    => 'Regional Demand Update: Diesel Maintenance Roles Continue to Grow',
            'slug'     => 'regional-demand-diesel-maintenance-roles',
            'category' => 'Industry Updates',
            'tags'     => array('Diesel Mechanics', 'Industry Trends', 'ASE Certification'),
            'date'     => '2026-02-10 08:30:00',
            'content'  => '<p>Employers across Virginia and neighboring states report sustained hiring demand for preventative maintenance and diagnostic support technicians across mixed commercial fleets.</p>

<h2>Market Overview</h2>
<p>The Bureau of Labor Statistics projects continued growth for diesel service technicians through 2030, with particular demand in the Mid-Atlantic and Southeast regions. Fleet operators managing Class 6-8 vehicles need technicians who can perform scheduled maintenance, diagnose electronic systems, and handle DOT inspection preparation.</p>

<h3>Skills Employers Are Seeking</h3>
<ul>
<li>Engine diagnostics and electronic troubleshooting using OBD-II and manufacturer-specific tools.</li>
<li>Brake system inspection, adjustment, and replacement per FMCSA standards.</li>
<li>HVAC system service and refrigerant handling certification.</li>
<li>Preventative maintenance scheduling and documentation.</li>
</ul>

<p>Tri-County\'s 11-month Diesel Mechanics program covers all eight core ASE certification areas, preparing graduates for immediate entry into shop environments. The program\'s $21,500 tuition is eligible for WIOA and Pell Grant funding for qualified students.</p>',
        ),
        array(
            'title'    => 'How to Build a Resume When You Are New to Transportation Careers',
            'slug'     => 'build-resume-new-transportation-careers',
            'category' => 'Career Tips',
            'tags'     => array('Career Advice', 'Resume Tips', 'Job Placement'),
            'date'     => '2026-02-04 09:00:00',
            'content'  => '<p>Practical guidance on highlighting training hours, certifications, and reliability for first-role applications in the transportation and logistics industry.</p>

<h2>Resume Structure for New Graduates</h2>
<p>When you lack years of industry experience, your resume should emphasize verifiable training, certifications, and transferable skills. Recruiters reviewing entry-level candidates look for evidence of commitment, safety awareness, and coachability.</p>

<h3>Key Sections to Include</h3>
<ol>
<li><strong>Professional Summary</strong> — Two sentences highlighting your training completion, license class, and career goal.</li>
<li><strong>Certifications & Credentials</strong> — CDL class and endorsements, DOT medical card, NCCER credentials, ASE certifications.</li>
<li><strong>Training Details</strong> — Total behind-the-wheel hours, classroom hours, equipment types operated.</li>
<li><strong>Transferable Skills</strong> — Time management, safety compliance, physical stamina, communication.</li>
<li><strong>Work History</strong> — Any previous employment showing reliability and consistency.</li>
</ol>

<p>Tri-County\'s career services team provides resume templates and one-on-one review sessions for all graduates. Contact career services to schedule your session before your first interview.</p>',
        ),
        array(
            'title'    => 'Campus Tour Days Added for New Applicants in Southwest Virginia',
            'slug'     => 'campus-tour-days-new-applicants',
            'category' => 'Announcements',
            'tags'     => array('Campus Tours', 'Admissions', 'Enrollment'),
            'date'     => '2026-01-29 10:00:00',
            'content'  => '<p>Future students can now reserve guided visits to classrooms, training yard zones, and equipment bays at our Hansonville campus.</p>

<h2>Tour Details</h2>
<p>Campus tours run every Wednesday and Friday at 10:00 AM and 2:00 PM. Each tour lasts approximately 45 minutes and includes a walk-through of the classroom facility, CDL training vehicles, heavy equipment yard, and diesel mechanics shop.</p>

<h3>What You Will See</h3>
<ul>
<li>CDL training fleet — Class 8 tractor-trailers used in behind-the-wheel instruction.</li>
<li>Heavy equipment yard — Excavators, backhoes, dozers, and front-end loaders.</li>
<li>Diesel mechanics bays — Full-service shop with diagnostic equipment and training engines.</li>
<li>Classroom and testing facility — Where written instruction and certification exams take place.</li>
</ul>

<p>Tours are free and open to prospective students, family members, and referring agencies. To reserve a spot, call <a href="tel:+12767947660">(276) 794-7660</a> or email <a href="mailto:tcda1@hotmail.com">tcda1@hotmail.com</a>.</p>

<p>Our campus is located at 1714 US Hwy 19, Hansonville, VA. Mailing address: P.O. Box 2109, Lebanon, VA 24266.</p>',
        ),
    );

    foreach ($sample_posts as $post_data) {
        // Check if post already exists
        $existing = get_page_by_path($post_data['slug'], OBJECT, 'post');
        if ($existing) continue;

        // Get category ID
        $cat = get_category_by_slug(sanitize_title($post_data['category']));
        $cat_id = $cat ? $cat->term_id : 1;

        $post_id = wp_insert_post(array(
            'post_title'   => $post_data['title'],
            'post_name'    => $post_data['slug'],
            'post_status'  => 'publish',
            'post_type'    => 'post',
            'post_content' => $post_data['content'],
            'post_date'    => $post_data['date'],
            'post_category' => array($cat_id),
        ));

        if ($post_id && !is_wp_error($post_id) && !empty($post_data['tags'])) {
            wp_set_post_tags($post_id, $post_data['tags']);
        }
    }
}

/**
 * Customize excerpt length
 */
function tricounty_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'tricounty_excerpt_length');

/**
 * Customize excerpt more text
 */
function tricounty_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'tricounty_excerpt_more');

/**
 * Add pagination styles
 */
function tricounty_pagination_css() {
    if (is_home() || is_archive() || is_category() || is_tag()) {
        echo '<style>
        .pagination-nav { display:flex; gap:0.5rem; justify-content:center; flex-wrap:wrap; }
        .pagination-nav a, .pagination-nav span { display:inline-flex; align-items:center; justify-content:center; min-width:40px; height:40px; border-radius:8px; border:1px solid #d6e3f2; background:#fff; color:#1a385e; font-weight:600; padding:0 0.6rem; text-decoration:none; }
        .pagination-nav .current { background:#1d4ed8; border-color:#1d4ed8; color:#fff; }
        .pagination-nav a:hover { border-color:#93b4ea; color:#1d4ed8; }
        </style>';
    }
}
add_action('wp_head', 'tricounty_pagination_css');
