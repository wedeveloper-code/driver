<?php
/**
 * Custom Post Types: testimonial
 */

declare(strict_types=1);

add_action('init', 'tcda_register_post_types');

function tcda_register_post_types(): void
{
    // Testimonials
    register_post_type('testimonial', [
        'labels' => [
            'name'               => __('Testimonials', 'tricounty-driving'),
            'singular_name'      => __('Testimonial', 'tricounty-driving'),
            'add_new'            => __('Add New', 'tricounty-driving'),
            'add_new_item'       => __('Add New Testimonial', 'tricounty-driving'),
            'edit_item'          => __('Edit Testimonial', 'tricounty-driving'),
            'new_item'           => __('New Testimonial', 'tricounty-driving'),
            'view_item'          => __('View Testimonial', 'tricounty-driving'),
            'search_items'       => __('Search Testimonials', 'tricounty-driving'),
            'not_found'          => __('No testimonials found', 'tricounty-driving'),
            'not_found_in_trash' => __('No testimonials found in trash', 'tricounty-driving'),
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => ['title', 'editor', 'thumbnail'],
        'menu_icon'    => 'dashicons-format-quote',
        'rewrite'      => false,
    ]);
}

// Meta boxes for testimonial
add_action('add_meta_boxes', 'tcda_testimonial_meta_boxes');

function tcda_testimonial_meta_boxes(): void
{
    add_meta_box(
        'tcda_testimonial_details',
        __('Testimonial Details', 'tricounty-driving'),
        'tcda_testimonial_meta_box_html',
        'testimonial',
        'side',
        'default'
    );
}

function tcda_testimonial_meta_box_html(\WP_Post $post): void
{
    wp_nonce_field('tcda_testimonial_meta', 'tcda_testimonial_nonce');
    $program = get_post_meta($post->ID, '_testimonial_program', true);
    $company = get_post_meta($post->ID, '_testimonial_company', true);
    ?>
    <p>
        <label for="testimonial_program"><strong><?php esc_html_e('Program Completed', 'tricounty-driving'); ?></strong></label><br>
        <input type="text" id="testimonial_program" name="testimonial_program"
               value="<?php echo esc_attr($program); ?>" style="width:100%"
               placeholder="e.g. CDL Class A">
    </p>
    <p>
        <label for="testimonial_company"><strong><?php esc_html_e('Now Working At', 'tricounty-driving'); ?></strong></label><br>
        <input type="text" id="testimonial_company" name="testimonial_company"
               value="<?php echo esc_attr($company); ?>" style="width:100%"
               placeholder="e.g. Swift Transportation">
    </p>
    <?php
}

add_action('save_post_testimonial', 'tcda_save_testimonial_meta');

function tcda_save_testimonial_meta(int $post_id): void
{
    if (
        !isset($_POST['tcda_testimonial_nonce']) ||
        !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['tcda_testimonial_nonce'])), 'tcda_testimonial_meta') ||
        defined('DOING_AUTOSAVE') && DOING_AUTOSAVE
    ) {
        return;
    }

    if (isset($_POST['testimonial_program'])) {
        update_post_meta($post_id, '_testimonial_program', sanitize_text_field(wp_unslash($_POST['testimonial_program'])));
    }
    if (isset($_POST['testimonial_company'])) {
        update_post_meta($post_id, '_testimonial_company', sanitize_text_field(wp_unslash($_POST['testimonial_company'])));
    }
}

// Meta boxes for program pages
add_action('add_meta_boxes', 'tcda_program_meta_boxes');

function tcda_program_meta_boxes(): void
{
    add_meta_box(
        'tcda_program_details',
        __('Program Details', 'tricounty-driving'),
        'tcda_program_meta_box_html',
        'page',
        'side',
        'default'
    );
}

function tcda_program_meta_box_html(\WP_Post $post): void
{
    // Only show on pages using the program template
    $template = get_post_meta($post->ID, '_wp_page_template', true);
    if ($template !== 'page-templates/template-program.php') {
        echo '<p style="color:#999">' . esc_html__('Only visible on Program Page template.', 'tricounty-driving') . '</p>';
        return;
    }

    wp_nonce_field('tcda_program_meta', 'tcda_program_nonce');
    $duration  = get_post_meta($post->ID, '_program_duration', true);
    $tuition   = get_post_meta($post->ID, '_program_tuition', true);
    $salary    = get_post_meta($post->ID, '_program_salary_range', true);
    $admission = get_post_meta($post->ID, '_program_admission', true);
    ?>
    <p>
        <label><strong><?php esc_html_e('Duration', 'tricounty-driving'); ?></strong></label><br>
        <input type="text" name="program_duration" value="<?php echo esc_attr($duration); ?>"
               style="width:100%" placeholder="e.g. 4 Weeks">
    </p>
    <p>
        <label><strong><?php esc_html_e('Tuition', 'tricounty-driving'); ?></strong></label><br>
        <input type="text" name="program_tuition" value="<?php echo esc_attr($tuition); ?>"
               style="width:100%" placeholder="e.g. $4,500">
    </p>
    <p>
        <label><strong><?php esc_html_e('Salary Range', 'tricounty-driving'); ?></strong></label><br>
        <input type="text" name="program_salary" value="<?php echo esc_attr($salary); ?>"
               style="width:100%" placeholder="e.g. $2,400 – $3,600/month">
    </p>
    <p>
        <label><strong><?php esc_html_e('Admission Requirements', 'tricounty-driving'); ?></strong></label><br>
        <textarea name="program_admission" style="width:100%" rows="3"
                  placeholder="e.g. Valid driver's license, DOT physical"><?php echo esc_textarea($admission); ?></textarea>
    </p>
    <?php
}

add_action('save_post_page', 'tcda_save_program_meta');

function tcda_save_program_meta(int $post_id): void
{
    if (
        !isset($_POST['tcda_program_nonce']) ||
        !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['tcda_program_nonce'])), 'tcda_program_meta') ||
        defined('DOING_AUTOSAVE') && DOING_AUTOSAVE
    ) {
        return;
    }

    $fields = [
        'program_duration' => '_program_duration',
        'program_tuition'  => '_program_tuition',
        'program_salary'   => '_program_salary_range',
        'program_admission'=> '_program_admission',
    ];

    foreach ($fields as $post_key => $meta_key) {
        if (isset($_POST[$post_key])) {
            update_post_meta($post_id, $meta_key, sanitize_textarea_field(wp_unslash($_POST[$post_key])));
        }
    }
}
