<?php
/**
 * Register navigation menu locations.
 */

declare(strict_types=1);

add_action('after_setup_theme', 'tcda_register_menus');

function tcda_register_menus(): void
{
    register_nav_menus([
        'primary' => __('Header Navigation', 'tricounty-driving'),
        'footer'  => __('Footer Navigation', 'tricounty-driving'),
    ]);
}
