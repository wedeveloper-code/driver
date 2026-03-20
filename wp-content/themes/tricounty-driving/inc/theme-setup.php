<?php
/**
 * Theme setup: supports, image sizes, title tag.
 */

declare(strict_types=1);

add_action('after_setup_theme', 'tcda_theme_setup');

function tcda_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ]);
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Image sizes used by the theme
    add_image_size('tcda-hero',    1400, 600, true);
    add_image_size('tcda-card',    600,  400, true);
    add_image_size('tcda-thumb',   300,  200, true);

    // Disable block editor stylesheet on frontend — we ship our own CSS
    add_filter('should_load_separate_core_block_assets', '__return_false');

    load_theme_textdomain('tricounty-driving', TCDA_DIR . '/languages');
}

// Remove wp-emoji scripts
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove RSD, shortlink, generator meta
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');
