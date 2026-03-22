<?php
/**
 * Template Name: Heavy Equipment Training
 */
get_header();
?>

<main>
  <section class="inner-hero" style="background-image:url('<?php echo tricounty_img('bulldozer-with-a-bucket.jpg'); ?>');">
    <div class="inner-hero-content">
      <span class="eyebrow">Training Program</span>
      <h1>Certified Heavy Equipment Training</h1>
      <p>Develop jobsite-ready operator skills on loaders, excavators, and core construction equipment.</p>
      <p><a class="btn btn-primary" href="#apply">Request Info</a></p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2 class="section-title">Course Overview</h2>
      <p class="section-intro">The construction industry is a thriving business in constant need of competent employees. The companies are looking for safe and professional employees and Tri-County can help you become one of the best.</p>
      <div class="program-meta">
        <div class="meta-card"><strong>Duration</strong><p>6 weeks</p></div>
        <div class="meta-card"><strong>Classroom vs Practical</strong><p>30% classroom / 70% equipment operation</p></div>
        <div class="meta-card"><strong>Tuition</strong><p>$4,900 — includes tuition, books, supplies, and certifications</p></div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--sand);">
    <div class="container grid-2">
      <article class="card panel">
        <h2 class="section-title">Curriculum</h2>
        <ul class="list">
          <li>Backhoe operation</li>
          <li>Excavator trenching and grading</li>
          <li>Dozer operations</li>
          <li>Blueprint reading</li>
          <li>Industrial safety concepts and OSHA certification</li>
          <li>Flagman certification</li>
          <li>Forklift certification</li>
          <li>NCCER Heavy Equipment Operations Level One</li>
        </ul>
      </article>
      <article class="card panel">
        <h2 class="section-title">Admission Requirements</h2>
        <ul class="list">
          <li>Students must be 18 years or older prior to the first day of class</li>
          <li>Must be in sound physical health</li>
          <li>Valid government-issued identification</li>
          <li>Ability to comply with PPE and safety training</li>
        </ul>
        <p style="margin-top:0.8rem;">Students successfully completing Heavy Equipment Operations Level One through Tri-County Driving Academy will earn industry-recognized credentials verifiable through the NCCER Automated National Registry.</p>
      </article>
    </div>
  </section>

  <section class="section">
    <div class="container grid-2">
      <article class="salary-box">
        <h2 class="section-title">Career Outlook</h2>
        <p><strong>Monthly Pay:</strong> The typical pay scale for Construction/Equipment Operators is $1,800-$3,600 monthly.</p>
        <p>In addition to regular earnings with substantial pay increases as experience is gained, many graduates enjoy full benefits including major medical and retirement programs.</p>
        <p>Infrastructure and utility projects continue to create demand for qualified operators.</p>
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
            <div class="tab-panel theory"><p>Site safety, blueprint reading basics, machine controls, OSHA compliance, and communication protocol.</p></div>
            <div class="tab-panel practice"><p>Guided seat time on backhoes, excavators, dozers, and loaders with practical grading and maneuver tasks.</p></div>
            <div class="tab-panel cert"><p>Graduates earn NCCER Heavy Equipment Operations Level One credentials, OSHA certification, flagman and forklift certifications.</p></div>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="section faq" style="background:#f7fbff;">
    <div class="container">
      <h2 class="section-title">Program FAQ</h2>
      <details><summary>Is this suitable for beginners?</summary><p>Yes, the program starts with foundational control techniques before advanced tasks. The Heavy Equipment Training program prepares students for entry level positions as operators with various construction companies.</p></details>
      <details><summary>Do you train on different machine types?</summary><p>Yes, instruction includes Backhoe, Excavator, Dozer operation with additional courses in blueprint reading, OSHA, flagman, and forklift certification.</p></details>
      <details><summary>Will I receive hiring support?</summary><p>Yes, career services provide resume support and employer introductions after graduation. We assist with job placement in all areas.</p></details>
    </div>
  </section>

  <section class="lead-area section" id="apply">
    <div class="container lead-grid">
      <article class="lead-card">
        <h3>Enroll in Heavy Equipment</h3>
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
