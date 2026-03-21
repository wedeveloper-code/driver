<!-- Site Footer -->
<footer id="site-footer">
  <div class="container">
    <div class="footer-grid">

      <!-- Col 1: Logo + Contact Info -->
      <div class="footer-col">
        <a class="footer-logo site-logo" href="<?php echo esc_url(home_url('/')); ?>">
          <div class="logo-icon"><?php echo tcda_icon('truck'); ?></div>
          <div class="logo-text">
            <span class="logo-name">TRI-COUNTY</span>
            <span class="logo-tagline">Driving Academy</span>
          </div>
        </a>

        <div class="footer-contact-item">
          <?php echo tcda_icon('pin'); ?>
          <span>1714 US Hwy 19, Hansonville<br>P.O. Box 2109, Lebanon, VA 24266</span>
        </div>
        <div class="footer-contact-item">
          <?php echo tcda_icon('phone'); ?>
          <a href="tel:2767947660">(276) 794-7660</a>
        </div>
        <div class="footer-contact-item">
          <?php echo tcda_icon('email'); ?>
          <a href="mailto:tcda1@hotmail.com">tcda1@hotmail.com</a>
        </div>
        <div class="footer-contact-item">
          <?php echo tcda_icon('clock'); ?>
          <span>Mon &ndash; Fri: 8:00 AM &ndash; 5:00 PM<br>Sat &ndash; Sun: Closed</span>
        </div>
      </div>

      <!-- Col 2: Our Programs -->
      <div class="footer-col">
        <h4>Our Programs</h4>
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

      <!-- Col 3: Student Resources -->
      <div class="footer-col">
        <h4>Student Resources</h4>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/info/tuition/')); ?>">Tuition &amp; Financial Aid</a></li>
          <li><a href="<?php echo esc_url(home_url('/courses/')); ?>">Course Catalog</a></li>
          <li><a href="<?php echo esc_url(home_url('/directions/')); ?>">Directions</a></li>
          <li><a href="<?php echo esc_url(home_url('/news/')); ?>">Our News</a></li>
          <li><a href="<?php echo esc_url(home_url('/info/info-for-tn-students/')); ?>">Info for TN Students</a></li>
        </ul>
      </div>

      <!-- Col 4: Quick Links + TN Notice -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a></li>
          <li><a href="tel:2767947660">(276) 794-7660</a></li>
        </ul>

        <div class="tn-notice">
          <strong style="color:#f1f5f9;">Tennessee Students:</strong> Tri-County Driving Academy is authorized for operation as a post-secondary educational institution by the Tennessee Higher Education Commission.
          Visit <a href="http://www.state.tn.us/thec" target="_blank" rel="noopener">www.state.tn.us/thec</a> for placement information.
          <a href="<?php echo esc_url(home_url('/info/info-for-tn-students/')); ?>">Transferability of credits &amp; tuition fees</a>.
        </div>
      </div>

    </div><!-- /.footer-grid -->
  </div>

  <div class="footer-bottom">
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>, Inc. All rights reserved.</p>
    </div>
  </div>
</footer>
<!-- /Site Footer -->

<?php wp_footer(); ?>
</body>
</html>
