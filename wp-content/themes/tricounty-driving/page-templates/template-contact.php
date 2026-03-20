<?php
/**
 * Template Name: Contact Us
 */
get_header();
get_template_part('template-parts/content', 'page-banner');
?>

<div class="container">
  <div class="content-area">
    <main id="main-content">
      <h2>Get In Touch</h2>
      <p>Have questions about our programs, tuition, or enrollment? Contact us today — we're happy to help.</p>

      <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;margin-bottom:40px;">
        <div>
          <h3 style="margin-bottom:16px;">Send Us a Message</h3>
          <?php echo do_shortcode('[contact-form-7 id="contact" title="Contact Form"]'); ?>
          <?php if (!shortcode_exists('contact-form-7')) : ?>
          <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
            <input type="hidden" name="action" value="tricounty_contact">
            <?php wp_nonce_field('tricounty_contact_nonce'); ?>
            <label>Your Name *<br>
              <input type="text" name="contact_name" required style="width:100%;padding:9px 12px;border:1px solid #ccc;border-radius:4px;margin:4px 0 14px;">
            </label>
            <label>Email Address *<br>
              <input type="email" name="contact_email" required style="width:100%;padding:9px 12px;border:1px solid #ccc;border-radius:4px;margin:4px 0 14px;">
            </label>
            <label>Phone Number<br>
              <input type="tel" name="contact_phone" style="width:100%;padding:9px 12px;border:1px solid #ccc;border-radius:4px;margin:4px 0 14px;">
            </label>
            <label>Program of Interest<br>
              <select name="contact_program" style="width:100%;padding:9px 12px;border:1px solid #ccc;border-radius:4px;margin:4px 0 14px;">
                <option value="">-- Select a Program --</option>
                <option>Tractor Trailer Training (CDL Class A)</option>
                <option>Heavy Equipment Training</option>
                <option>Fiber Optics Training</option>
                <option>Diesel School</option>
                <option>Surface Mining Papers</option>
                <option>OSHA &amp; Hazmat Training</option>
                <option>VA Online Driver Improvement</option>
                <option>General Inquiry</option>
              </select>
            </label>
            <label>Message *<br>
              <textarea name="contact_message" required rows="5" style="width:100%;padding:9px 12px;border:1px solid #ccc;border-radius:4px;margin:4px 0 14px;resize:vertical;"></textarea>
            </label>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
          <?php endif; ?>
        </div>

        <div>
          <h3 style="margin-bottom:16px;">Our Location</h3>
          <p>
            <strong>Tri-County Driving Academy</strong><br>
            P.O. Box 2109<br>
            Lebanon, VA 24266
          </p>
          <p style="margin-top:14px;">
            <strong>Phone:</strong><br>
            <a href="tel:2767947660" style="font-size:1.2rem;font-weight:700;color:#b22222;">276-794-7660</a>
          </p>
          <p style="margin-top:14px;color:#555;font-size:.9rem;">
            Located between Lebanon and Abingdon, Virginia.
          </p>

          <div style="margin-top:24px;">
            <iframe
              class="map-embed"
              src="https://maps.google.com/maps?q=Lebanon,+VA+24266&output=embed"
              allowfullscreen
              loading="lazy"
              title="Tri-County Driving Academy location map">
            </iframe>
          </div>

          <div class="info-box" style="margin-top:24px;">
            <p><strong>Directions:</strong> We are located between Lebanon and Abingdon, Virginia.
            See our <a href="<?php echo esc_url(home_url('/directions/')); ?>">Directions page</a> for detailed driving instructions.</p>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

<?php get_footer(); ?>
