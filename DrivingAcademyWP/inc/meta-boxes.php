<?php
/**
 * Custom meta boxes for program pages
 */

add_action('add_meta_boxes', function () {
    add_meta_box(
        'daw_program_meta',
        __('Program Details', 'drivingacademywp'),
        'daw_program_meta_box_render',
        'page',
        'normal',
        'high'
    );
});

function daw_program_meta_box_render($post) {
    $template = get_page_template_slug($post->ID);
    if ($template !== 'page-templates/template-program.php') {
        echo '<p>' . esc_html__('These fields are only used with the "Program Page" template.', 'drivingacademywp') . '</p>';
    }

    wp_nonce_field('daw_program_meta', 'daw_program_meta_nonce');

    $fields = [
        '_program_duration'   => ['Duration', 'e.g. 160 Hours / 4 Weeks'],
        '_program_format'     => ['Format', 'e.g. Theory & Behind-the-Wheel'],
        '_program_credential' => ['Credential', 'e.g. Class A CDL License'],
        '_program_badge_1'    => ['Badge 1', 'e.g. Most Popular'],
        '_program_badge_2'    => ['Badge 2', 'e.g. WIOA Eligible'],
        '_program_salary'     => ['Salary Range', 'e.g. $55k - $75k+'],
        '_program_demand'     => ['Industry Demand', 'e.g. 80,000+ driver shortage'],
        '_program_placement'  => ['Placement', 'e.g. Lifetime support'],
    ];

    echo '<table class="form-table"><tbody>';
    foreach ($fields as $key => [$label, $placeholder]) {
        $value = get_post_meta($post->ID, $key, true);
        printf(
            '<tr><th><label for="%1$s">%2$s</label></th><td><input type="text" id="%1$s" name="%1$s" value="%3$s" placeholder="%4$s" class="regular-text"></td></tr>',
            esc_attr($key),
            esc_html($label),
            esc_attr($value),
            esc_attr($placeholder)
        );
    }
    echo '</tbody></table>';
}

add_action('save_post', function ($post_id) {
    if (!isset($_POST['daw_program_meta_nonce']) || !wp_verify_nonce($_POST['daw_program_meta_nonce'], 'daw_program_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    $fields = [
        '_program_duration', '_program_format', '_program_credential',
        '_program_badge_1', '_program_badge_2',
        '_program_salary', '_program_demand', '_program_placement',
    ];

    foreach ($fields as $key) {
        if (isset($_POST[$key])) {
            update_post_meta($post_id, $key, sanitize_text_field($_POST[$key]));
        }
    }
});
