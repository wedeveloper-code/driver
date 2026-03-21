<?php
/**
 * Template Name: Career Placement
 * Description: Career Placement Assistance page.
 */

declare(strict_types=1);

get_header();
?>

<section class="page-banner">
  <div class="container">
    <h1>Career Placement Assistance</h1>
    <p>We don't just train you — we help you land the job.</p>
  </div>
</section>

<section class="career-section">
  <div class="container">

    <div class="career-intro">
      <p class="lead-text">At Tri-County Driving Academy, our commitment to your success doesn't end when training does. We actively work with employers across Virginia, Tennessee, and the region to connect our graduates with high-paying career opportunities.</p>
    </div>

    <!-- Highlight Stats -->
    <div class="career-stats">
      <div class="career-stat">
        <span class="career-stat-number">Many</span>
        <span class="career-stat-label">Graduates hired before graduation</span>
      </div>
      <div class="career-stat">
        <span class="career-stat-number">Since 1996</span>
        <span class="career-stat-label">Placing graduates in careers</span>
      </div>
      <div class="career-stat">
        <span class="career-stat-number">All Areas</span>
        <span class="career-stat-label">Job placement assistance provided</span>
      </div>
    </div>

    <!-- Services -->
    <div class="career-services">
      <h2>Our Job Placement Services</h2>
      <div class="career-services-grid">

        <div class="career-service-card">
          <div class="career-service-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
          </div>
          <h3>Employer Network</h3>
          <p>We maintain relationships with major trucking companies, construction firms, and heavy equipment operators throughout Virginia, Tennessee, and beyond. Our graduates are trusted by these employers.</p>
        </div>

        <div class="career-service-card">
          <div class="career-service-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <h3>Resume Assistance</h3>
          <p>Our staff helps you craft a professional resume that highlights your new certifications and training, making you stand out to employers looking for qualified operators and drivers.</p>
        </div>

        <div class="career-service-card">
          <div class="career-service-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <h3>Interview Preparation</h3>
          <p>We prepare you for job interviews with coaching on what employers look for, how to present your skills, and how to navigate the hiring process for commercial driving and equipment operator positions.</p>
        </div>

        <div class="career-service-card">
          <div class="career-service-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
          </div>
          <h3>Recruiter Campus Visits</h3>
          <p>We invite recruiters from major employers directly to our campus during training. Students have the opportunity to meet with hiring managers and receive job offers before completing their programs.</p>
        </div>

      </div>
    </div><!-- /.career-services -->

    <!-- Industries -->
    <div class="career-industries">
      <h2>Where Our Graduates Work</h2>
      <div class="industries-grid">
        <div class="industry-item">
          <?php echo tcda_icon('truck'); ?>
          <span>Trucking &amp; Freight</span>
        </div>
        <div class="industry-item">
          <?php echo tcda_icon('excavator'); ?>
          <span>Construction &amp; Site Work</span>
        </div>
        <div class="industry-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93l-1.41 1.41M4.93 4.93l1.41 1.41M12 2v2M12 20v2M4.93 19.07l1.41-1.41M19.07 19.07l-1.41-1.41M2 12h2M20 12h2"/></svg>
          <span>Mining &amp; Extraction</span>
        </div>
        <div class="industry-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
          <span>Diesel Mechanics</span>
        </div>
        <div class="industry-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="1 4 1 10 7 10"/><path d="M3.51 15a9 9 0 1 0 .49-3"/></svg>
          <span>Logistics &amp; Distribution</span>
        </div>
        <div class="industry-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
          <span>Government &amp; Municipal</span>
        </div>
      </div>
    </div>

    <!-- Salary Ranges -->
    <div class="career-salaries">
      <h2>Earning Potential After Training</h2>
      <div class="salary-cards">
        <div class="salary-card">
          <h3>CDL Class A Driver</h3>
          <div class="salary-range">$2,400 – $3,600<span>/month</span></div>
          <p>Starting wages for new CDL drivers. Experienced drivers with endorsements can earn significantly more.</p>
        </div>
        <div class="salary-card">
          <h3>Heavy Equipment Operator</h3>
          <div class="salary-range">$1,800 – $3,600<span>/month</span></div>
          <p>Entry to mid-level operators. NCCER-certified operators command higher rates from contractors.</p>
        </div>
        <div class="salary-card">
          <h3>Diesel Mechanic</h3>
          <div class="salary-range">~$18.94<span>/hour median</span></div>
          <p>Bureau of Labor Statistics median wage for heavy vehicle service technicians. ASE-certified mechanics earn a premium.</p>
        </div>
      </div>
    </div>

    <!-- CTA -->
    <div class="career-cta">
      <h2>Start Your New Career Today</h2>
      <p>Ready to join the hundreds of Tri-County graduates working in rewarding, well-paying trades? Contact us to learn about our next available program start date.</p>
      <div class="career-cta-btns">
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-amber">Get Started</a>
        <a href="<?php echo esc_url(home_url('/training-programs/')); ?>" class="btn-outline-dark">View All Programs</a>
      </div>
    </div>

  </div><!-- /.container -->
</section>

<?php get_footer(); ?>
