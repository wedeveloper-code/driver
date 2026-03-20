<?php
/**
 * Enqueue theme assets.
 * All scripts and styles are self-hosted — no external CDN.
 */

declare(strict_types=1);

add_action('wp_enqueue_scripts', 'tcda_enqueue_assets');

function tcda_enqueue_assets(): void
{
    $v = TCDA_VERSION;

    // Remove block library CSS (not needed — theme uses custom CSS)
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');

    // Main stylesheet
    wp_enqueue_style(
        'tcda-main',
        TCDA_URI . '/assets/css/main.css',
        [],
        $v
    );

    // Navigation script (hamburger + dropdown)
    wp_enqueue_script(
        'tcda-navigation',
        TCDA_URI . '/assets/js/navigation.js',
        [],
        $v,
        true // load in footer
    );

    // Slider — only on front page
    if (is_front_page()) {
        wp_enqueue_script(
            'tcda-slider',
            TCDA_URI . '/assets/js/slider.js',
            [],
            $v,
            true
        );
    }

    // Main JS (stats counter, misc)
    wp_enqueue_script(
        'tcda-main',
        TCDA_URI . '/assets/js/main.js',
        [],
        $v,
        true
    );
}

// Add defer attribute to all theme scripts
add_filter('script_loader_tag', 'tcda_defer_scripts', 10, 3);

function tcda_defer_scripts(string $tag, string $handle, string $src): string
{
    $defer_handles = ['tcda-navigation', 'tcda-slider', 'tcda-main'];

    if (in_array($handle, $defer_handles, true)) {
        return str_replace(' src=', ' defer src=', $tag);
    }

    return $tag;
}
