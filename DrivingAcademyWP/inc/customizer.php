<?php
/**
 * Theme Customizer settings
 */

add_action('customize_register', function (WP_Customize_Manager $wp_customize) {

    // --- Contact Info Panel ---
    $wp_customize->add_panel('daw_contact_panel', [
        'title'    => __('Contact Info', 'drivingacademywp'),
        'priority' => 30,
    ]);

    $wp_customize->add_section('daw_contact_details', [
        'title' => __('Contact Details', 'drivingacademywp'),
        'panel' => 'daw_contact_panel',
    ]);

    $contact_fields = [
        'daw_address'   => ['Address', '123 Training Road, Lebanon, VA 24266'],
        'daw_phone'     => ['Phone', '(276) 889-4042'],
        'daw_email'     => ['Email', 'info@tricountydrivingacademy.com'],
        'daw_hours'     => ['Business Hours', 'Mon - Fri: 8:00 AM - 5:00 PM'],
        'daw_map_embed' => ['Google Maps Embed URL', ''],
    ];

    foreach ($contact_fields as $id => [$label, $default]) {
        $wp_customize->add_setting($id, [
            'default'           => $default,
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ]);
        $wp_customize->add_control($id, [
            'label'   => __($label, 'drivingacademywp'),
            'section' => 'daw_contact_details',
            'type'    => $id === 'daw_address' || $id === 'daw_hours' ? 'textarea' : 'text',
        ]);
    }

    // --- Social Links ---
    $wp_customize->add_section('daw_social', [
        'title' => __('Social Links', 'drivingacademywp'),
        'panel' => 'daw_contact_panel',
    ]);

    foreach (['facebook', 'linkedin', 'instagram'] as $network) {
        $id = 'daw_' . $network . '_url';
        $wp_customize->add_setting($id, [
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control($id, [
            'label'   => ucfirst($network) . ' URL',
            'section' => 'daw_social',
            'type'    => 'url',
        ]);
    }

    // --- Homepage Panel ---
    $wp_customize->add_panel('daw_homepage_panel', [
        'title'    => __('Homepage Settings', 'drivingacademywp'),
        'priority' => 31,
    ]);

    // Hero Slides
    $wp_customize->add_section('daw_hero_slides', [
        'title' => __('Hero Slides', 'drivingacademywp'),
        'panel' => 'daw_homepage_panel',
    ]);

    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("daw_hero_{$i}_image", ['default' => '', 'sanitize_callback' => 'esc_url_raw']);
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "daw_hero_{$i}_image", [
            'label'   => sprintf(__('Slide %d Image', 'drivingacademywp'), $i),
            'section' => 'daw_hero_slides',
        ]));

        foreach (['badge' => 'Badge Text', 'heading' => 'Heading', 'subtext' => 'Subtext', 'cta_text' => 'CTA Text', 'cta_url' => 'CTA URL'] as $key => $label) {
            $setting_id = "daw_hero_{$i}_{$key}";
            $wp_customize->add_setting($setting_id, ['default' => '', 'sanitize_callback' => 'sanitize_text_field']);
            $wp_customize->add_control($setting_id, [
                'label'   => sprintf(__('Slide %d: %s', 'drivingacademywp'), $i, $label),
                'section' => 'daw_hero_slides',
                'type'    => 'text',
            ]);
        }
    }

    // Trust Bar
    $wp_customize->add_section('daw_trust_bar', [
        'title' => __('Trust Bar', 'drivingacademywp'),
        'panel' => 'daw_homepage_panel',
    ]);

    $trust_defaults = [
        1 => ['shield', 'DMV Approved', 'State Certified Training'],
        2 => ['certificate', 'NCCER Certified', 'National Craft Standards'],
        3 => ['dollar', 'WIOA Eligible', 'Financial Aid Available'],
    ];

    for ($i = 1; $i <= 3; $i++) {
        foreach (['icon' => 'Icon Name', 'title' => 'Title', 'subtitle' => 'Subtitle'] as $key => $label) {
            $setting_id = "daw_trust_{$i}_{$key}";
            $default_idx = array_search($key, ['icon', 'title', 'subtitle']);
            $wp_customize->add_setting($setting_id, [
                'default'           => $trust_defaults[$i][$default_idx],
                'sanitize_callback' => 'sanitize_text_field',
            ]);
            $wp_customize->add_control($setting_id, [
                'label'   => sprintf(__('Item %d: %s', 'drivingacademywp'), $i, $label),
                'section' => 'daw_trust_bar',
                'type'    => 'text',
            ]);
        }
    }

    // Stats
    $wp_customize->add_section('daw_stats', [
        'title' => __('Stats / Counters', 'drivingacademywp'),
        'panel' => 'daw_homepage_panel',
    ]);

    $stat_defaults = [
        1 => ['95', '%', 'Placement Rate'],
        2 => ['50', '+', 'Hiring Partners'],
        3 => ['65', 'k+', 'Avg Starting Salary'],
        4 => ['29', '+', 'Years in Business'],
    ];

    for ($i = 1; $i <= 4; $i++) {
        foreach (['value' => 'Value', 'suffix' => 'Suffix', 'label' => 'Label'] as $key => $lbl) {
            $setting_id = "daw_stat_{$i}_{$key}";
            $default_idx = array_search($key, ['value', 'suffix', 'label']);
            $wp_customize->add_setting($setting_id, [
                'default'           => $stat_defaults[$i][$default_idx],
                'sanitize_callback' => 'sanitize_text_field',
            ]);
            $wp_customize->add_control($setting_id, [
                'label'   => sprintf(__('Stat %d: %s', 'drivingacademywp'), $i, $lbl),
                'section' => 'daw_stats',
                'type'    => 'text',
            ]);
        }
    }

    // Footer
    $wp_customize->add_section('daw_footer', [
        'title'    => __('Footer Settings', 'drivingacademywp'),
        'priority' => 35,
    ]);

    $wp_customize->add_setting('daw_copyright', [
        'default'           => 'Tri-County Driving Academy, Inc. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('daw_copyright', [
        'label'   => __('Copyright Text', 'drivingacademywp'),
        'section' => 'daw_footer',
        'type'    => 'text',
    ]);
});
