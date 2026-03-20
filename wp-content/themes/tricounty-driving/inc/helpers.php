<?php
/**
 * Helper functions for templates.
 */

declare(strict_types=1);

/**
 * Get program meta value for a page.
 */
function tcda_get_program_meta(int $post_id, string $key, string $default = ''): string
{
    $value = get_post_meta($post_id, $key, true);
    return is_string($value) && $value !== '' ? $value : $default;
}

/**
 * Output phone number as a clickable tel: link.
 */
function tcda_phone_link(bool $show_icon = true): void
{
    $phone     = '(276) 794-7660';
    $phone_raw = '2767947660';
    $icon      = $show_icon ? '<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>' : '';
    echo '<a href="tel:' . esc_attr($phone_raw) . '" class="tcda-phone-link">' . $icon . esc_html($phone) . '</a>';
}

/**
 * Output the contact form. Handles both display and submission.
 */
function tcda_contact_form(): void
{
    $submitted = false;
    $error     = '';
    $success   = false;

    if (
        isset($_POST['tcda_contact_nonce']) &&
        wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['tcda_contact_nonce'])), 'tcda_contact_form')
    ) {
        $name    = sanitize_text_field(wp_unslash($_POST['contact_name'] ?? ''));
        $email   = sanitize_email(wp_unslash($_POST['contact_email'] ?? ''));
        $subject = sanitize_text_field(wp_unslash($_POST['contact_subject'] ?? ''));
        $message = sanitize_textarea_field(wp_unslash($_POST['contact_message'] ?? ''));

        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            $error = __('Please fill in all required fields.', 'tricounty-driving');
        } elseif (!is_email($email)) {
            $error = __('Please enter a valid email address.', 'tricounty-driving');
        } else {
            $to      = get_option('admin_email');
            $headers = ['Content-Type: text/plain; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>'];
            $body    = "Name: {$name}\nEmail: {$email}\nSubject: {$subject}\n\nMessage:\n{$message}";

            $sent = wp_mail($to, 'Contact Form: ' . $subject, $body, $headers);

            if ($sent) {
                $success = true;
            } else {
                $error = __('There was a problem sending your message. Please call us directly.', 'tricounty-driving');
            }
        }
        $submitted = true;
    }

    get_template_part('template-parts/contact-form', null, [
        'success'   => $success,
        'error'     => $error,
        'submitted' => $submitted,
    ]);
}

/**
 * Get testimonials for display.
 *
 * @return \WP_Post[]
 */
function tcda_get_testimonials(int $count = 4): array
{
    $query = new WP_Query([
        'post_type'      => 'testimonial',
        'posts_per_page' => $count,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ]);

    return $query->posts;
}

/**
 * Return the theme image URL (from assets/images/).
 */
function tcda_img(string $filename): string
{
    return TCDA_URI . '/assets/images/' . ltrim($filename, '/');
}

/**
 * SVG icon helper — returns inline SVG string.
 */
function tcda_icon(string $name): string
{
    $icons = [
        'truck'   => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M1 3h15v13H1z"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>',
        'excavator'=> '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="14" width="8" height="6" rx="1"/><path d="M10 17h4l6-8-4-2-6 7z"/><path d="M6 14V8l4-4"/></svg>',
        'wrench'  => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
        'cert'    => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>',
        'wheel'   => '<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="3"/><line x1="12" y1="2" x2="12" y2="9"/><line x1="12" y1="15" x2="12" y2="22"/><line x1="2" y1="12" x2="9" y2="12"/><line x1="15" y1="12" x2="22" y2="12"/></svg>',
        'phone'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>',
        'email'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>',
        'pin'     => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>',
        'clock'   => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
    ];

    return $icons[$name] ?? '';
}
