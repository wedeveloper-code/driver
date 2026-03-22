<?php
/**
 * Template Name: NCCER Training
 */
get_header();
?>

<main>
  <section class="inner-hero" style="background-image:url('<?php echo tricounty_img('nccer-training.jpg'); ?>');">
    <div class="inner-hero-content">
      <span class="eyebrow">Training Program</span>
      <h1>NCCER Training</h1>
      <p>Prepare for NCCER-aligned pathways with practical knowledge and credential-focused instruction.</p>
      <p><a class="btn btn-primary" href="#apply">Request Info</a></p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2 class="section-title">Course Overview</h2>
      <p class="section-intro">Tri-County Driving Academy is now offering NCCER Training in Heavy Equipment Operations Level One. Students successfully completing the program will earn industry-recognized credentials verifiable through the NCCER Automated National Registry.</p>
      <div class="program-meta">
        <div class="meta-card"><strong>Duration</strong><p>120 hours / 6 weeks</p></div>
        <div class="meta-card"><strong>Classroom vs Practical</strong><p>45% classroom / 55% practical labs</p></div>
        <div class="meta-card"><strong>Schedule</strong><p>Rolling starts each month</p></div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--sand);">
    <div class="container grid-2">
      <article class="card panel">
        <h2 class="section-title">Curriculum</h2>
        <ul class="list">
          <li>Core craft modules and workplace expectations</li>
          <li>Safety systems and hazard recognition practices</li>
          <li>Technical reading and task sequencing</li>
          <li>Credential preparation and competency verification</li>
          <li>Heavy Equipment Operations Level One modules</li>
          <li>Rigging and Signaling Training</li>
        </ul>
      </article>
      <article class="card panel">
        <h2 class="section-title">Requirements</h2>
        <ul class="list">
          <li>Minimum age: 18 years</li>
          <li>Valid identification</li>
          <li>Basic literacy and attendance commitment</li>
          <li>Completion of onboarding orientation</li>
        </ul>
      </article>
    </div>
  </section>

  <section class="section">
    <div class="container grid-2">
      <article class="salary-box">
        <h2 class="section-title">Career Outlook</h2>
        <p><strong>Virginia:</strong> $40,000 - $64,000 depending on specialty track.</p>
        <p><strong>United States:</strong> $45,000 - $72,000 based on craft and region.</p>
        <p>NCCER credentials strengthen credibility for construction and industrial employers. Industry-recognized credentials are verifiable through the NCCER Automated National Registry.</p>
      </article>
      <article class="card panel">
        <h2 class="section-title">Program Details</h2>
        <div class="tabs">
          <input class="tab-radio" type="radio" name="tabs" id="tab-theory" checked />
          <input class="tab-radio" type="radio" name="tabs" id="tab-practice" />
          <input class="tab-radio" type="radio" name="tabs" id="tab-cert" />
          <div class="tab-labels">
            <label for="tab-theory">Theory</label>
            <label for="tab-practice">Practical</label>
            <label for="tab-cert">Outcomes</label>
          </div>
          <div class="tab-panels">
            <div class="tab-panel theory"><p>Core curriculum modules, terminology, safety codes, OSHA compliance, and credential preparation.</p></div>
            <div class="tab-panel practice"><p>Lab demonstrations, supervised tasks, equipment operation, and competency-based skill checks.</p></div>
            <div class="tab-panel cert"><p>Students graduate with NCCER Heavy Equipment Operations Level One credentials verifiable through the national automated registry.</p></div>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="section faq" style="background:#f7fbff;">
    <div class="container">
      <h2 class="section-title">Program FAQ</h2>
      <details><summary>What is NCCER used for?</summary><p>NCCER credentials validate trade readiness and are widely recognized by employers across construction and industrial sectors.</p></details>
      <details><summary>Can this lead to apprenticeships?</summary><p>Yes, graduates often use credentials to improve placement and apprenticeship access in construction companies.</p></details>
      <details><summary>Do I need to choose a specialty now?</summary><p>You can begin with core modules and refine your path with advisor support.</p></details>
    </div>
  </section>

  <section class="lead-area section" id="apply">
    <div class="container lead-grid">
      <article class="lead-card">
        <h3>Enroll in NCCER Training</h3>
        <p>Complete this form and an advisor will contact you about schedule options, required documents, and funding.</p>
        <form class="contact-form" data-demo-form>
          <input type="text" name="name" placeholder="Full Name" required />
          <input type="tel" name="phone" placeholder="Phone Number" required />
          <input type="email" name="email" placeholder="Email Address" required />
          <textarea name="message" placeholder="Preferred start date and questions"></textarea>
          <button class="btn btn-primary" type="submit">Submit Request</button>
        </form>
      </article>
      <article class="lead-card">
        <h3>Need Admissions Help?</h3>
        <p>Call <a href="tel:+12767947660">(276) 794-7660</a> or review admissions, financial aid, and job placement pages for full enrollment guidance.</p>
        <p><a class="btn btn-outline" href="<?php echo esc_url(home_url('/admissions/')); ?>">View Admissions Steps</a></p>
      </article>
    </div>
  </section>
</main>

<a href="#apply" class="btn btn-primary sticky-cta">Enroll Now</a>

<?php get_footer(); ?>
