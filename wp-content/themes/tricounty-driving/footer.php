<!-- Site Footer -->
<footer id="site-footer">
  <div class="container">
    <div class="footer-grid">

      <!-- About col -->
      <div class="footer-col">
        <h4><?php bloginfo('name'); ?></h4>
        <p>Tri-County Driving Academy offers state-certified professional training programs in Virginia and Tennessee. Our graduates are ready for the workforce from day one.</p>
        <div class="tn-notice">
          <strong>Tennessee Students:</strong> Tri-County Driving Academy is authorized for operation as a post-secondary educational institution by the Tennessee Higher Education Commission.
          Visit <a href="http://www.state.tn.us/thec" target="_blank" rel="noopener">www.state.tn.us/thec</a> and click "Authorized Institutions Data" for placement information.
          <a href="<?php echo esc_url(home_url('/info/info-for-tn-students/')); ?>">Transferability of credits &amp; tuition fees</a>.
        </div>
      </div>

      <!-- Courses col -->
      <div class="footer-col">
        <h4>Courses</h4>
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

      <!-- Quick Links col -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
          <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/courses/')); ?>">Courses</a></li>
          <li><a href="<?php echo esc_url(home_url('/info/tuition/')); ?>">Tuition</a></li>
          <li><a href="<?php echo esc_url(home_url('/directions/')); ?>">Directions</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a></li>
          <li><a href="<?php echo esc_url(home_url('/news/')); ?>">Our News</a></li>
        </ul>
      </div>

      <!-- Contact col -->
      <div class="footer-col">
        <h4>Contact</h4>
        <p>Tri-County Driving Academy<br>
        P.O. Box 2109<br>
        Lebanon, VA 24266</p>
        <p><strong>Phone:</strong><br>
        <a href="tel:2767947660">276-794-7660</a></p>
      </div>

    </div><!-- /.footer-grid -->

    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
  </div>
</footer>
<!-- /Site Footer -->

<?php wp_footer(); ?>
</body>
</html>
