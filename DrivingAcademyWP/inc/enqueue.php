<?php
/**
 * Enqueue styles and scripts
 */

add_action('wp_enqueue_scripts', function () {
    $css_file = DAW_DIR . '/assets/css/main.css';
    $js_file  = DAW_DIR . '/assets/js/main.js';

    wp_enqueue_style(
        'daw-main',
        DAW_URI . '/assets/css/main.css',
        [],
        file_exists($css_file) ? filemtime($css_file) : DAW_VERSION
    );

    wp_enqueue_script(
        'daw-main',
        DAW_URI . '/assets/js/main.js',
        [],
        file_exists($js_file) ? filemtime($js_file) : DAW_VERSION,
        ['strategy' => 'defer', 'in_footer' => true]
    );

    if (is_page_template('page-templates/template-contact.php')) {
        $cf_file = DAW_DIR . '/assets/js/contact-form.js';
        wp_enqueue_script(
            'daw-contact-form',
            DAW_URI . '/assets/js/contact-form.js',
            [],
            file_exists($cf_file) ? filemtime($cf_file) : DAW_VERSION,
            ['strategy' => 'defer', 'in_footer' => true]
        );
        wp_localize_script('daw-contact-form', 'dawAjax', [
            'url'   => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('daw_contact_nonce'),
        ]);
    }
});

add_action('wp_head', function () {
    echo '<link rel="preload" href="' . esc_url(DAW_URI . '/assets/fonts/inter/Inter-700.woff2') . '" as="font" type="font/woff2" crossorigin>' . "\n";
}, 1);

add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
}, 100);
