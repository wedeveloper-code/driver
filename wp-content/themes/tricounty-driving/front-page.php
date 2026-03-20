<?php get_header(); ?>

<!-- Hero -->
<section id="hero">
  <div class="container">
    <h1 class="hero-title">Professional Driving &amp; Trade Training</h1>
    <p class="hero-subtitle">
      Tri-County Driving Academy offers state-certified CDL, heavy equipment, diesel, fiber optics,
      OSHA, and surface mining programs in Virginia and Tennessee.
    </p>
    <div class="hero-cta">
      <a href="<?php echo esc_url(home_url('/courses/')); ?>" class="btn btn-primary">View All Courses</a>
      <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-outline">Contact Us</a>
    </div>
  </div>
</section>

<!-- Intro -->
<section class="section section-alt">
  <div class="container">
    <h2 class="section-title">Your Career Starts Here</h2>
    <div class="section-divider"></div>
    <p style="text-align:center;max-width:780px;margin:0 auto 30px;font-size:1.05rem;color:#555;">
      Companies are looking for skilled, professional employees. Tri-County Driving Academy gives you
      the training to be in demand. Upon completion of one of our programs you will receive a certificate
      of completion and/or certification/license. You may also receive 12 college credits and a Career
      Studies Diploma from Southwest Virginia Community College or Mountain Empire Community College.
    </p>
    <p style="text-align:center;font-size:.9rem;color:#777;">
      College credits may not apply to all states. Call <a href="tel:2767947660">276-794-7660</a> for eligibility.
    </p>
  </div>
</section>

<!-- Featured Courses -->
<section class="section">
  <div class="container">
    <h2 class="section-title">Featured Programs</h2>
    <div class="section-divider"></div>
    <div class="services-grid">
      <?php get_template_part('template-parts/home', 'service-box', [
        'title' => 'Tractor Trailer Training',
        'url'   => home_url('/courses/tractor-trailer-training/'),
        'desc'  => 'The trucking industry is experiencing driver shortages. Graduates earn Class "A" CDL qualification for long-haul, regional, or local driving.',
        'img'   => get_template_directory_uri() . '/assets/images/tractor_trailer_services.jpg',
      ]); ?>
      <?php get_template_part('template-parts/home', 'service-box', [
        'title' => 'Heavy Equipment Training',
        'url'   => home_url('/courses/heavy-equipment-training/'),
        'desc'  => 'Construction demands safe, competent operators. Gain skills to operate dozers, end loaders, excavators, and back-hoes.',
        'img'   => get_template_directory_uri() . '/assets/images/heavy.jpg',
      ]); ?>
      <?php get_template_part('template-parts/home', 'service-box', [
        'title' => 'Fiber Optics Training',
        'url'   => home_url('/courses/fiber-optics-training/'),
        'desc'  => 'Fiber Optic design, installation, and maintenance — a profession with increasing future demand. Become a certified Assembler or Installer/Technician.',
        'img'   => get_template_directory_uri() . '/assets/images/truck.jpg',
      ]); ?>
    </div>
    <div class="text-center mt-3">
      <a href="<?php echo esc_url(home_url('/courses/')); ?>" class="btn btn-primary">See All Programs</a>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="section section-alt">
  <div class="container">
    <h2 class="section-title">Why Choose Tri-County?</h2>
    <div class="section-divider"></div>
    <div class="features-grid">
      <div class="feature-item">
        <div class="feature-icon">&#127891;</div>
        <h4>State-Certified Programs</h4>
        <p>All courses meet Virginia and Tennessee certification requirements and industry standards.</p>
      </div>
      <div class="feature-item">
        <div class="feature-icon">&#128196;</div>
        <h4>College Credits</h4>
        <p>Earn up to 12 college credits and a Career Studies Diploma from SWVCC or MECC.</p>
      </div>
      <div class="feature-item">
        <div class="feature-icon">&#128736;</div>
        <h4>Hands-On Training</h4>
        <p>Students handle real equipment in a variety of real-world situations from day one.</p>
      </div>
      <div class="feature-item">
        <div class="feature-icon">&#128179;</div>
        <h4>Financial Aid Available</h4>
        <p>Pell Grants and other financial aid options available for eligible Virginia residents.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Band -->
<section style="background:#b22222;padding:50px 0;text-align:center;">
  <div class="container">
    <h2 style="color:#fff;margin-bottom:.4em;">Ready to Start Your New Career?</h2>
    <p style="color:#fdd;font-size:1.05rem;margin-bottom:24px;">
      Call us at <a href="tel:2767947660" style="color:#f0c040;font-weight:700;">276-794-7660</a>
      or contact us online today.
    </p>
    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-secondary">Get In Touch</a>
  </div>
</section>

<?php get_footer(); ?>
