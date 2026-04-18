<?php
/**
 * DrivingAcademyWP theme functions
 */

define('DAW_VERSION', '1.0.0');
define('DAW_DIR', get_template_directory());
define('DAW_URI', get_template_directory_uri());

require_once DAW_DIR . '/inc/theme-setup.php';
require_once DAW_DIR . '/inc/enqueue.php';
require_once DAW_DIR . '/inc/customizer.php';
require_once DAW_DIR . '/inc/meta-boxes.php';
require_once DAW_DIR . '/inc/contact-form-handler.php';
require_once DAW_DIR . '/inc/template-tags.php';
require_once DAW_DIR . '/inc/widgets.php';
require_once DAW_DIR . '/inc/icons.php';
