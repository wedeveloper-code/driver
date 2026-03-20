<?php
/**
 * Tri-County Driving Academy — functions.php
 * PHP 8.3+
 */

declare(strict_types=1);

if (!defined('ABSPATH')) {
    exit;
}

define('TCDA_VERSION', '1.0.0');
define('TCDA_DIR', get_template_directory());
define('TCDA_URI', get_template_directory_uri());

require_once TCDA_DIR . '/inc/theme-setup.php';
require_once TCDA_DIR . '/inc/enqueue.php';
require_once TCDA_DIR . '/inc/menus.php';
require_once TCDA_DIR . '/inc/custom-post-types.php';
require_once TCDA_DIR . '/inc/helpers.php';
