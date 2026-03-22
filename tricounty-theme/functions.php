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
}
add_action('after_setup_theme', 'tricounty_setup');

/**
 * Enqueue styles and scripts
 */
function tricounty_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style('tricounty-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800&family=Rajdhani:wght@500;600;700&display=swap', array(), null);

    // Theme CSS
    wp_enqueue_style('tricounty-theme', get_template_directory_uri() . '/assets/css/theme.css', array(), '1.0.0');

    // Main JS
    wp_enqueue_script('tricounty-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'tricounty_enqueue_assets');

/**
 * Helper: get image URL from theme assets
 */
function tricounty_img($filename) {
    return get_template_directory_uri() . '/assets/images/' . $filename;
}

/**
 * Auto-create pages on theme activation
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
        // Check if page already exists
        $existing = get_page_by_path($page_data['slug']);
        if ($existing) {
            // Update template if page exists
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

    // Set the front page
    $home_page = get_page_by_path('home');
    if ($home_page) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home_page->ID);
    }

    // Create primary menu
    $menu_name = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);
        if (!is_wp_error($menu_id)) {
            // Assign menu to primary location
            $locations = get_theme_mod('nav_menu_locations');
            $locations['primary'] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }
    }
}
add_action('after_switch_theme', 'tricounty_create_pages');

/**
 * Custom 404 page
 */
function tricounty_custom_404() {
    if (is_404()) {
        // The 404.php template handles this
    }
}
