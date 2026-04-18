<?php
/**
 * AJAX contact form handler with math CAPTCHA
 */

add_action('wp_ajax_daw_contact', 'daw_handle_contact');
add_action('wp_ajax_nopriv_daw_contact', 'daw_handle_contact');

function daw_handle_contact() {
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'daw_contact_nonce')) {
        wp_send_json_error(['message' => 'Security check failed. Please refresh the page and try again.']);
    }

    $name    = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
    $email   = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $message = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';
    $captcha = isset($_POST['captcha']) ? intval($_POST['captcha']) : -1;
    $token   = isset($_POST['captcha_token']) ? sanitize_text_field($_POST['captcha_token']) : '';

    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error(['message' => 'Please fill in all required fields.']);
    }

    if (!is_email($email)) {
        wp_send_json_error(['message' => 'Please enter a valid email address.']);
    }

    $stored_answer = get_transient('daw_captcha_' . $token);
    if ($stored_answer === false || intval($stored_answer) !== $captcha) {
        wp_send_json_error(['message' => 'Incorrect CAPTCHA answer. Please try again.']);
    }

    delete_transient('daw_captcha_' . $token);

    $to      = get_option('admin_email');
    $subject = sprintf('[Tri-County Driving Academy] New message from %s', $name);
    $body    = sprintf(
        "Name: %s\nEmail: %s\n\nMessage:\n%s",
        $name,
        $email,
        $message
    );
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        sprintf('Reply-To: %s <%s>', $name, $email),
    ];

    $sent = wp_mail($to, $subject, $body, $headers);

    if ($sent) {
        wp_send_json_success(['message' => 'Thank you! Your message has been sent. We will get back to you within 24 hours.']);
    } else {
        wp_send_json_error(['message' => 'Failed to send message. Please call us directly.']);
    }
}

add_action('wp_ajax_daw_captcha_generate', 'daw_generate_captcha');
add_action('wp_ajax_nopriv_daw_captcha_generate', 'daw_generate_captcha');

function daw_generate_captcha() {
    $a     = wp_rand(1, 10);
    $b     = wp_rand(1, 10);
    $token = wp_generate_password(16, false);

    set_transient('daw_captcha_' . $token, $a + $b, 600);

    wp_send_json_success([
        'question' => sprintf('What is %d + %d?', $a, $b),
        'token'    => $token,
    ]);
}
