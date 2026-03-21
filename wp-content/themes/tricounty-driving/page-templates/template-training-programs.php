<?php
/**
 * Template Name: Training Programs
 * Description: Overview of all training programs offered.
 */

declare(strict_types=1);

get_header();
?>

<section class="page-banner">
  <div class="container">
    <h1>Training Programs</h1>
    <p>State-certified vocational training programs that launch careers in high-demand trades.</p>
  </div>
</section>

<section class="programs-overview-section">
  <div class="container">

    <div class="programs-overview-intro">
      <p>We strive to produce skilled, motivated, and safe workers. To accomplish this, we hold our staff and students to the highest standards. The result: our graduates are some of the most sought-after new operators and drivers in the industry.</p>
      <ul class="programs-highlights">
        <li>Individual students receive one-on-one classroom and hands-on training</li>
        <li>Real equipment and real trucks — not simulators</li>
        <li>SCHEV certified (Virginia) and THEC authorized (Tennessee)</li>
        <li>Job placement assistance for every graduate</li>
      </ul>
    </div>

    <!-- Programs Grid -->
    <div class="programs-full-grid">

      <!-- CDL Class A -->
      <div class="program-full-card">
        <div class="program-full-header">
          <div class="program-full-icon">
            <?php echo tcda_icon('truck'); ?>
          </div>
          <div>
            <h2>CDL Class A Training</h2>
            <div class="program-meta-badges">
              <span class="badge-duration">4 Weeks</span>
              <span class="badge-tuition">From $3,450</span>
              <span class="badge-salary">$2,400–$3,600/mo</span>
            </div>
          </div>
        </div>
        <div class="program-full-body">
          <p>The trucking industry faces an ongoing driver shortage. Earn your Commercial Driver's License (Class A) in just 4 weeks. You'll train on modern tractor-trailers, obtain your CDL permit in Week 1, and be ready for DMV testing by Week 4.</p>
          <ul class="program-full-list">
            <li>Written exam preparation</li>
            <li>Pre-trip inspection</li>
            <li>Backing maneuvers (straight, 45°, parallel)</li>
            <li>Coupling and uncoupling</li>
            <li>Defensive driving techniques</li>
            <li>DOT Physical included</li>
          </ul>
          <div class="program-full-footer">
            <a href="<?php echo esc_url(home_url('/commercial-driver-training-class-a-cdl/')); ?>" class="btn-amber">Program Details</a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-outline-dark">Enroll Now</a>
          </div>
        </div>
      </div>

      <!-- Heavy Equipment -->
      <div class="program-full-card">
        <div class="program-full-header">
          <div class="program-full-icon">
            <?php echo tcda_icon('excavator'); ?>
          </div>
          <div>
            <h2>Heavy Equipment Training</h2>
            <div class="program-meta-badges">
              <span class="badge-duration">6 Weeks</span>
              <span class="badge-tuition">From $4,250</span>
              <span class="badge-salary">$1,800–$3,600/mo</span>
            </div>
          </div>
        </div>
        <div class="program-full-body">
          <p>Construction is a thriving industry in constant need of safe, competent heavy equipment operators. Train on real backhoes, excavators, and dozers. Earn your NCCER Heavy Equipment Operations Level One certification — a credential recognized nationally by employers.</p>
          <ul class="program-full-list">
            <li>Backhoe, excavator, dozer operation</li>
            <li>Forklift certification</li>
            <li>Blueprint reading</li>
            <li>OSHA safety certification</li>
            <li>Flagman certification</li>
            <li>NCCER nationally recognized credential</li>
          </ul>
          <div class="program-full-footer">
            <a href="<?php echo esc_url(home_url('/certified-heavy-equipment-training/')); ?>" class="btn-amber">Program Details</a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-outline-dark">Enroll Now</a>
          </div>
        </div>
      </div>

      <!-- Diesel Mechanics -->
      <div class="program-full-card">
        <div class="program-full-header">
          <div class="program-full-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
          </div>
          <div>
            <h2>Diesel Mechanics / Heavy Truck Maintenance</h2>
            <div class="program-meta-badges">
              <span class="badge-duration">11 Months</span>
              <span class="badge-tuition">$21,500</span>
              <span class="badge-salary">~$18.94/hr median</span>
            </div>
          </div>
        </div>
        <div class="program-full-body">
          <p>Our comprehensive 11-month Diesel Mechanics program prepares you for a career as a certified heavy truck maintenance technician. Covers everything from diesel engine fundamentals to computerized systems and ASE certification preparation.</p>
          <ul class="program-full-list">
            <li>Diesel engine fundamentals</li>
            <li>Hydro-mechanical fuel injection</li>
            <li>Computerized truck systems</li>
            <li>Truck electronics</li>
            <li>Steering, suspension, and wheels</li>
            <li>Brakes, driveline, and HVAC systems</li>
            <li>ASE certification exam prep</li>
          </ul>
          <div class="program-full-footer">
            <a href="<?php echo esc_url(home_url('/diesel-mechanics-heavy-truck-maintenance/')); ?>" class="btn-amber">Program Details</a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-outline-dark">Enroll Now</a>
          </div>
        </div>
      </div>

      <!-- NCCER Training -->
      <div class="program-full-card">
        <div class="program-full-header">
          <div class="program-full-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
          </div>
          <div>
            <h2>NCCER Training</h2>
            <div class="program-meta-badges">
              <span class="badge-duration">Included w/ Heavy Equipment</span>
            </div>
          </div>
        </div>
        <div class="program-full-body">
          <p>NCCER (National Center for Construction Education and Research) credentials are industry-recognized and verifiable through the NCCER Automated National Registry. Our Heavy Equipment program awards NCCER Heavy Equipment Operations Level One certification.</p>
          <div class="program-full-footer">
            <a href="<?php echo esc_url(home_url('/nccer-training/')); ?>" class="btn-amber">Learn More</a>
          </div>
        </div>
      </div>

      <!-- Driver Improvement -->
      <div class="program-full-card">
        <div class="program-full-header">
          <div class="program-full-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="m4.93 4.93 14.14 14.14"/></svg>
          </div>
          <div>
            <h2>Virginia Driver Improvement Course</h2>
            <div class="program-meta-badges">
              <span class="badge-duration">1 Day (8AM–5PM)</span>
              <span class="badge-tuition">$75</span>
            </div>
          </div>
        </div>
        <div class="program-full-body">
          <p>Virginia-certified driver improvement course accepted at any Virginia court allowing driver improvement courses. Helps reduce demerit points on your driving record.</p>
          <div class="program-full-footer">
            <a href="<?php echo esc_url(home_url('/driver-improvement/')); ?>" class="btn-amber">Program Details</a>
            <a href="tel:2767947660" class="btn-outline-dark">Call to Register</a>
          </div>
        </div>
      </div>

    </div><!-- /.programs-full-grid -->

    <!-- Financial Aid Banner -->
    <div class="programs-aid-banner">
      <div class="aid-banner-content">
        <h2>Financial Aid Available</h2>
        <p>Pell Grants, WIOA funding, and Veterans benefits may be available to help cover the cost of your training.</p>
      </div>
      <div class="aid-banner-cta">
        <a href="<?php echo esc_url(home_url('/financial-aid/')); ?>" class="btn-amber">Explore Financial Aid</a>
      </div>
    </div>

  </div><!-- /.container -->
</section>

<?php get_footer(); ?>
