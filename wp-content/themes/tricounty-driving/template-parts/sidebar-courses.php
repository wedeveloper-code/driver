<!-- Courses sidebar -->
<aside class="sidebar">
  <div class="sidebar-widget">
    <h4>All Programs</h4>
    <ul>
      <li><a href="<?php echo esc_url(home_url('/courses/tractor-trailer-training/')); ?>">Tractor Trailer Training</a></li>
      <li><a href="<?php echo esc_url(home_url('/courses/heavy-equipment-training/')); ?>">Heavy Equipment Training</a></li>
      <li><a href="<?php echo esc_url(home_url('/courses/fiber-optics-training/')); ?>">Fiber Optics Training</a></li>
      <li><a href="<?php echo esc_url(home_url('/courses/diesel-school/')); ?>">Diesel School</a></li>
      <li><a href="<?php echo esc_url(home_url('/courses/surface-mining-papers/')); ?>">Surface Mining Papers</a></li>
      <li><a href="<?php echo esc_url(home_url('/courses/osha-hazmat-training/')); ?>">OSHA &amp; Hazmat Training</a></li>
      <li><a href="http://www.va-drivercourses.com/clickIn.php?school=13" target="_blank" rel="noopener">VA Online Driver Improvement</a></li>
    </ul>
  </div>

  <div class="sidebar-widget">
    <h4>Pell Grant Packages</h4>
    <p style="font-size:.88rem;color:#555;margin-bottom:14px;">Enter your email to receive information about Pell Grant packages.</p>
    <?php echo do_shortcode('[contact-form-7 id="pell-grant-form" title="Pell Grant Inquiry"]'); ?>
    <?php if (!shortcode_exists('contact-form-7')) : ?>
    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
      <input type="hidden" name="action" value="tricounty_pell_inquiry">
      <?php wp_nonce_field('tricounty_pell_nonce'); ?>
      <label for="pell_email" style="font-size:.85rem;font-weight:600;">Email Address *</label>
      <input type="email" id="pell_email" name="pell_email" required style="width:100%;padding:8px;margin:6px 0 12px;border:1px solid #ccc;border-radius:4px;">
      <label style="font-size:.85rem;font-weight:600;">Select Package *</label>
      <label style="font-size:.85rem;font-weight:normal;display:flex;align-items:center;gap:8px;margin-bottom:6px;">
        <input type="checkbox" name="package[]" value="heavy-equipment"> Package 1: Heavy Equipment
      </label>
      <label style="font-size:.85rem;font-weight:normal;display:flex;align-items:center;gap:8px;margin-bottom:12px;">
        <input type="checkbox" name="package[]" value="cdl"> Package 2: CDL
      </label>
      <button type="submit" class="btn btn-primary" style="width:100%;">Submit</button>
    </form>
    <?php endif; ?>
  </div>

  <div class="sidebar-widget">
    <h4>Contact Us</h4>
    <p style="font-size:.88rem;">
      Tri-County Driving Academy<br>
      P.O. Box 2109<br>
      Lebanon, VA 24266<br><br>
      <strong>Phone:</strong><br>
      <a href="tel:2767947660">276-794-7660</a>
    </p>
    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-primary" style="width:100%;text-align:center;margin-top:10px;">Send Message</a>
  </div>
</aside>
