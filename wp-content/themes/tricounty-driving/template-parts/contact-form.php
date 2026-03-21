<?php
$success   = isset($args['success'])   ? (bool) $args['success']   : false;
$error     = isset($args['error'])     ? (string) $args['error']   : '';
$submitted = isset($args['submitted']) ? (bool) $args['submitted'] : false;
?>

<?php if ($success) : ?>
  <div class="info-box" style="border-left-color:#2e7d32;background:#f1f8f1;">
    <p><strong>Thank you!</strong> Your message has been sent. We will be in touch shortly.</p>
  </div>
<?php else : ?>

  <?php if ($error) : ?>
    <div class="info-box" style="border-left-color:#b22222;background:#fff5f5;">
      <p><?php echo esc_html($error); ?></p>
    </div>
  <?php endif; ?>

  <form method="post" action="" novalidate>
    <?php wp_nonce_field('tcda_contact_form', 'tcda_contact_nonce'); ?>

    <label for="contact_name">Your Name *</label>
    <input type="text" id="contact_name" name="contact_name"
           value="<?php echo esc_attr($submitted ? sanitize_text_field(wp_unslash($_POST['contact_name'] ?? '')) : ''); ?>"
           required style="width:100%;padding:9px 12px;border:1px solid #ccc;border-radius:4px;margin:4px 0 14px;font-family:inherit;">

    <label for="contact_email">Email Address *</label>
    <input type="email" id="contact_email" name="contact_email"
           value="<?php echo esc_attr($submitted ? sanitize_email(wp_unslash($_POST['contact_email'] ?? '')) : ''); ?>"
           required style="width:100%;padding:9px 12px;border:1px solid #ccc;border-radius:4px;margin:4px 0 14px;font-family:inherit;">

    <label for="contact_phone">Phone Number</label>
    <input type="tel" id="contact_phone" name="contact_phone"
           value="<?php echo esc_attr($submitted ? sanitize_text_field(wp_unslash($_POST['contact_phone'] ?? '')) : ''); ?>"
           style="width:100%;padding:9px 12px;border:1px solid #ccc;border-radius:4px;margin:4px 0 14px;font-family:inherit;">

    <label for="contact_subject">Program of Interest *</label>
    <select id="contact_subject" name="contact_subject" required
            style="width:100%;padding:9px 12px;border:1px solid #ccc;border-radius:4px;margin:4px 0 14px;font-family:inherit;">
      <option value="">-- Select a Program --</option>
      <?php
      $programs = [
        'CDL Class "A" Training',
        'Certified Heavy Equipment Training',
        'Diesel Mechanics / Heavy Truck Maintenance',
        'NCCER Training',
        'Virginia Driver Improvement Course',
        'Admissions & Financial Aid',
        'General Inquiry',
      ];
      $selected_subject = $submitted ? sanitize_text_field(wp_unslash($_POST['contact_subject'] ?? '')) : '';
      foreach ($programs as $p) {
        printf(
          '<option value="%1$s"%2$s>%1$s</option>',
          esc_attr($p),
          selected($selected_subject, $p, false)
        );
      }
      ?>
    </select>

    <label for="contact_message">Message *</label>
    <textarea id="contact_message" name="contact_message" rows="5" required
              style="width:100%;padding:9px 12px;border:1px solid #ccc;border-radius:4px;margin:4px 0 14px;resize:vertical;font-family:inherit;"><?php
      echo esc_textarea($submitted ? sanitize_textarea_field(wp_unslash($_POST['contact_message'] ?? '')) : '');
    ?></textarea>

    <button type="submit" class="btn btn-primary">Send Message</button>
  </form>

<?php endif; ?>
