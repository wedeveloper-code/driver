<?php
/**
 * 404 Error Page
 */
wp_head();
?>
<body class="error-404">
  <article class="error-card">
    <span class="eyebrow">Navigation Error</span>
    <div class="error-code">404</div>
    <h1 style="font-family:Rajdhani,sans-serif;font-size:2rem;">This Route Is Not on the Map</h1>
    <p style="max-width:58ch;color:#d7e6f9;">The page you requested may have moved, been renamed, or never existed. Use quick links below to continue browsing Tri-County Driving Academy.</p>

    <div class="error-actions">
      <a class="btn btn-primary" href="<?php echo esc_url(home_url('/')); ?>">Back to Home</a>
      <a class="btn btn-outline" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Admissions</a>
      <a class="btn btn-outline" href="<?php echo esc_url(home_url('/faq/')); ?>">View FAQ</a>
    </div>

    <div class="sparkline" aria-hidden="true">
      <svg viewBox="0 0 100 70" preserveAspectRatio="none">
        <polyline fill="none" stroke="#ffbe74" stroke-width="2.6" points="0,48 10,41 20,45 30,34 40,39 50,30 60,36 70,29 80,33 90,28 100,34"></polyline>
      </svg>
    </div>

    <p style="margin-top:1rem;color:#d7e6f9;">Quick links: <a href="<?php echo esc_url(home_url('/cdl-class-a-training/')); ?>">CDL Training</a> | <a href="<?php echo esc_url(home_url('/admissions/')); ?>">Admissions</a> | <a href="<?php echo esc_url(home_url('/financial-aid/')); ?>">Financial Aid</a></p>
  </article>

  <?php wp_footer(); ?>
</body>
</html>
