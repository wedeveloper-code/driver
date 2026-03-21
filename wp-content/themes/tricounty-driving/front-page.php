<?php get_header(); ?>

<!-- ══════════════════════════════════════
     HERO SECTION
══════════════════════════════════════ -->
<section id="hero">
  <div id="hero-overlay"></div>
  <div class="hero-content">
    <div class="container">
      <h1 class="hero-title">Launch Your Future Career Today</h1>
      <p class="hero-subtitle">
        Professional CDL training, heavy equipment operation, and diesel mechanics programs
        serving Virginia and Tennessee since 1992.
      </p>
      <div class="hero-cta">
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-amber">
          Apply Now
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/courses/')); ?>" class="btn-outline-white">
          View Programs
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     TRUST BAR
══════════════════════════════════════ -->
<div class="trust-bar-wrap">
  <div class="trust-bar">

    <div class="trust-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
      DMV Approved
    </div>

    <div class="trust-divider"></div>

    <div class="trust-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="8" r="6"/><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/></svg>
      NCCER Certified
    </div>

    <div class="trust-divider"></div>

    <div class="trust-item">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
      WIOA Eligible
    </div>

  </div>
</div>

<!-- ══════════════════════════════════════
     TRAINING PROGRAMS SECTION
══════════════════════════════════════ -->
<section class="programs-section">
  <div class="container">

    <div class="section-header">
      <h2>Our Training Programs</h2>
      <div class="amber-divider"></div>
      <p>
        We offer comprehensive, state-certified programs that give you the hands-on skills
        to land a well-paying career and hit the ground running from day one.
      </p>
    </div>

    <div class="programs-grid">

      <!-- CDL Class A -->
      <div class="program-card">
        <div class="program-card-icon">
          <?php echo tcda_icon('truck'); ?>
        </div>
        <div class="program-card-body">
          <h3>Tractor Trailer Training (CDL Class&nbsp;&ldquo;A&rdquo;)</h3>
          <p>
            The trucking industry faces an ongoing driver shortage. Earn your Class&nbsp;&ldquo;A&rdquo; CDL
            qualification for long-haul, regional, or local driving on modern equipment.
          </p>
          <a href="<?php echo esc_url(home_url('/courses/tractor-trailer-training/')); ?>" class="program-card-link">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- Heavy Equipment -->
      <div class="program-card">
        <div class="program-card-icon">
          <?php echo tcda_icon('excavator'); ?>
        </div>
        <div class="program-card-body">
          <h3>Heavy Equipment Training</h3>
          <p>
            Construction demands safe, competent operators. Gain the skills to operate dozers,
            end loaders, excavators, and backhoes — all on real job-site equipment.
          </p>
          <a href="<?php echo esc_url(home_url('/courses/heavy-equipment-training/')); ?>" class="program-card-link">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- Diesel Mechanics -->
      <div class="program-card">
        <div class="program-card-icon">
          <?php echo tcda_icon('wrench'); ?>
        </div>
        <div class="program-card-body">
          <h3>Diesel School (Mechanics)</h3>
          <p>
            Become a certified diesel technician. Hands-on training in engine repair,
            diagnostics, and maintenance on the commercial vehicles that power our economy.
          </p>
          <a href="<?php echo esc_url(home_url('/courses/diesel-school/')); ?>" class="program-card-link">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- NCCER / Fiber Optics -->
      <div class="program-card">
        <div class="program-card-icon">
          <?php echo tcda_icon('cert'); ?>
        </div>
        <div class="program-card-body">
          <h3>Fiber Optics Training</h3>
          <p>
            Fiber optic design, installation, and maintenance — a profession with rapidly
            increasing demand. Earn your Assembler or Installer/Technician certification.
          </p>
          <a href="<?php echo esc_url(home_url('/courses/fiber-optics-training/')); ?>" class="program-card-link">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>

      <!-- Driver Improvement -->
      <div class="program-card">
        <div class="program-card-icon">
          <?php echo tcda_icon('wheel'); ?>
        </div>
        <div class="program-card-body">
          <h3>Driver Improvement</h3>
          <p>
            VA-approved driver improvement courses for point reduction, court-mandated
            classes, and defensive driving refreshers — available online or in-person.
          </p>
          <a href="http://www.va-drivercourses.com/clickIn.php?school=13" target="_blank" rel="noopener" class="program-card-link">
            Learn More
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
          </a>
        </div>
      </div>

    </div><!-- /.programs-grid -->

    <div class="programs-footer">
      <a href="<?php echo esc_url(home_url('/courses/')); ?>" class="btn btn-primary">See All Programs</a>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════
     FUNDING & GRANTS SECTION
══════════════════════════════════════ -->
<section class="funding-section">
  <div class="container">
    <div class="funding-inner">

      <!-- Left: text -->
      <div>
        <div class="funding-badge">Financial Support</div>
        <h2>Quality Training Without Financial Stress</h2>
        <p class="funding-desc">
          The cost of tuition should never stand between you and a new career. We help our
          students secure funding through government grants and offer flexible payment options
          that work with your budget.
        </p>
        <ul class="funding-checklist">
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
            <span>WIOA grant assistance — <strong>Workforce Innovation and Opportunity Act</strong> funding available for eligible students.</span>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
            <span>Pell Grants and other financial aid options available for eligible Virginia residents.</span>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
            <span>Flexible payment plans directly through the academy — no third-party lenders required.</span>
          </li>
        </ul>
        <a href="<?php echo esc_url(home_url('/info/tuition/')); ?>" class="btn-amber">
          View Tuition &amp; Funding Options
        </a>
      </div>

      <!-- Right: image -->
      <div class="funding-img-wrap">
        <img
          src="<?php echo esc_url(tcda_img('heavy.jpg')); ?>"
          alt="Heavy equipment training at Tri-County Driving Academy"
          width="600"
          height="380"
        >
        <div class="funding-img-deco" aria-hidden="true"></div>
      </div>

    </div>
  </div>
</section>

<!-- ══════════════════════════════════════
     CAREER PLACEMENT CTA
══════════════════════════════════════ -->
<section class="career-cta">
  <div class="container">

    <svg class="cta-icon" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
      <rect width="20" height="14" x="2" y="7" rx="2" ry="2"/>
      <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
    </svg>

    <h2>We Don&rsquo;t Just Train You. We Help You Get Hired.</h2>
    <p>
      We have established partnerships with leading transportation and construction companies
      throughout the region. Most of our graduates receive job offers before they even
      complete their program!
    </p>
    <a href="<?php echo esc_url(home_url('/about-us/')); ?>" class="btn-dark">
      Learn About Career Placement
    </a>

  </div>
</section>

<!-- ══════════════════════════════════════
     TESTIMONIALS
══════════════════════════════════════ -->
<section class="testimonials-section">
  <div class="container">

    <div class="section-header">
      <h2>Graduate Testimonials</h2>
      <div class="amber-divider"></div>
    </div>

    <div class="testimonials-grid">

      <?php
      // Try to load from CPT; fall back to hardcoded examples
      $testimonials_cpt = tcda_get_testimonials(3);
      if (!empty($testimonials_cpt)) :
        foreach ($testimonials_cpt as $t) :
          $program  = get_post_meta($t->ID, '_testimonial_program', true);
          $initials = strtoupper(substr($t->post_title, 0, 1));
      ?>
        <div class="testimonial-card">
          <div class="testimonial-quote-icon" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
          </div>
          <div class="star-row">
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <p class="testimonial-text">&ldquo;<?php echo esc_html($t->post_content); ?>&rdquo;</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><?php echo esc_html($initials); ?></div>
            <div>
              <div class="testimonial-name"><?php echo esc_html($t->post_title); ?></div>
              <?php if ($program) : ?>
                <div class="testimonial-course">Graduate: <?php echo esc_html($program); ?></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php
        endforeach;
      else :
        // Static fallback testimonials
        $static = [
          [
            'name'   => 'John Smith',
            'course' => "CDL Class 'A' Training",
            'text'   => 'Outstanding school! The instructors are patient and explain everything in detail. Within a week of getting my license I landed a position with a major logistics company. Best decision I ever made.',
          ],
          [
            'name'   => 'Michael Davis',
            'course' => 'Heavy Equipment Training',
            'text'   => 'The equipment on the training grounds is in excellent condition and there is plenty of hands-on time. I felt completely confident on my first day at the construction site — that is a credit to the instructors here.',
          ],
          [
            'name'   => 'Sarah Williams',
            'course' => 'Diesel Mechanics',
            'text'   => 'I came in with zero mechanical background, and the program turned me into a certified diesel technician. The staff also helped me apply for a WIOA grant that covered most of my tuition. Could not recommend it more!',
          ],
        ];
        foreach ($static as $t) :
          $initials = strtoupper(substr($t['name'], 0, 1));
      ?>
        <div class="testimonial-card">
          <div class="testimonial-quote-icon" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="currentColor"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
          </div>
          <div class="star-row">
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
            <svg width="18" height="18" viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <p class="testimonial-text">&ldquo;<?php echo esc_html($t['text']); ?>&rdquo;</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><?php echo esc_html($initials); ?></div>
            <div>
              <div class="testimonial-name"><?php echo esc_html($t['name']); ?></div>
              <div class="testimonial-course">Graduate: <?php echo esc_html($t['course']); ?></div>
            </div>
          </div>
        </div>
      <?php
        endforeach;
      endif;
      ?>

    </div><!-- /.testimonials-grid -->
  </div>
</section>

<!-- ══════════════════════════════════════
     CONTACT / LEAD CAPTURE + MAP
══════════════════════════════════════ -->
<section class="contact-section">
  <div class="container">
    <div class="contact-inner">

      <!-- Contact Form -->
      <div class="contact-form-box">
        <h2>Have Questions?</h2>
        <p>Fill out the form and our admissions team will be in touch with you shortly.</p>
        <?php tcda_contact_form(); ?>
      </div>

      <!-- Contact Details + Map -->
      <div class="contact-info">
        <h2>Our Contact Info</h2>

        <div class="contact-detail">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          <div>
            <span class="contact-detail-label">Address</span>
            <span class="contact-detail-val">
              1714 US Hwy 19, Hansonville<br>
              P.O. Box 2109, Lebanon, VA 24266
            </span>
          </div>
        </div>

        <div class="contact-detail">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1-9.4 0-17-7.6-17-17 0-.6.4-1 1-1h3.5c.6 0 1 .4 1 1 0 1.3.2 2.5.6 3.6.1.3 0 .7-.2 1L6.6 10.8z"/></svg>
          <div>
            <span class="contact-detail-label">Phone</span>
            <span class="contact-detail-val"><a href="tel:2767947660">(276) 794-7660</a></span>
          </div>
        </div>

        <div class="contact-detail">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
          <div>
            <span class="contact-detail-label">Email</span>
            <span class="contact-detail-val"><a href="mailto:tcda1@hotmail.com">tcda1@hotmail.com</a></span>
          </div>
        </div>

        <div class="contact-detail">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          <div>
            <span class="contact-detail-label">Office Hours</span>
            <span class="contact-detail-val">Mon &ndash; Fri: 8:00 AM &ndash; 5:00 PM<br>Sat &ndash; Sun: Closed</span>
          </div>
        </div>

        <!-- Google Map -->
        <div class="contact-map">
          <iframe
            src="https://maps.google.com/maps?q=Lebanon,+VA+24266&t=&z=13&ie=UTF8&iwloc=&output=embed"
            loading="lazy"
            allowfullscreen
            title="Tri-County Driving Academy Location – Lebanon, VA"
          ></iframe>
        </div>

      </div><!-- /.contact-info -->

    </div><!-- /.contact-inner -->
  </div>
</section>

<?php get_footer(); ?>
