<?php
/**
 * Template Name: CDL Class A Training
 */
get_header();
?>

<main>
  <section class="inner-hero" style="background-image:url('<?php echo tricounty_img('two-trucks.jpg'); ?>');">
    <div class="inner-hero-content">
      <span class="eyebrow">Training Program</span>
      <h1>CDL Class "A" Training</h1>
      <p>Train for Class A commercial driving with safety-first, employer-ready instruction.</p>
      <p><a class="btn btn-primary" href="#apply">Request Info</a></p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2 class="section-title">Course Overview</h2>
      <p class="section-intro">Tri-County Driving Academy Commercial Driver/Class "A" CDL Training program will provide you with the knowledge and skills to become a Class "A" licensed driver qualifying you to drive long distances, regionally or for a local carrier.</p>
      <div class="program-meta">
        <div class="meta-card"><strong>Duration</strong><p>4 weeks / 160 hours</p></div>
        <div class="meta-card"><strong>Classroom vs Practical</strong><p>First week classroom, 3 weeks hands-on driving</p></div>
        <div class="meta-card"><strong>Tuition</strong><p>$4,500 — includes books, supplies, DOT physical, drug screen</p></div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--sand);">
    <div class="container grid-2">
      <article class="card panel">
        <h2 class="section-title">Curriculum</h2>
        <ul class="list">
          <li>Preparation for the Class-A Commercial Written Exams</li>
          <li>Class-A Commercial Road Test</li>
          <li>Pre-trip Inspection</li>
          <li>Backing Maneuvers</li>
          <li>Coupling and Uncoupling</li>
          <li>Defensive Driving and Safety</li>
          <li>DOT Physical included</li>
        </ul>
      </article>
      <article class="card panel">
        <h2 class="section-title">Admission Requirements</h2>
        <ul class="list">
          <li>Applicant must have a valid Driver's License</li>
          <li>Provide a DMV driving record</li>
          <li>Pass a DOT physical</li>
          <li>Must be 18 years of age or older</li>
          <li>Class begins every three weeks — call for scheduling</li>
        </ul>
      </article>
    </div>
  </section>

  <section class="section">
    <div class="container grid-2">
      <article class="salary-box">
        <h2 class="section-title">Career Outlook</h2>
        <p><strong>Monthly Pay:</strong> Commercial Drivers average $2,400 - $3,600 monthly.</p>
        <p><strong>Job Placement:</strong> Tri-County Driving Academy helps place its graduates for employment with several major carriers. Many graduates have completed employment applications, conducted interviews, and selected their employer before graduation.</p>
        <p>This process allows all students the ability to go to work immediately after completion of training.</p>
      </article>
      <article class="card panel">
        <h2 class="section-title">Program Details</h2>
        <div class="tabs">
          <input class="tab-radio" type="radio" name="tabs" id="tab-theory" checked />
          <input class="tab-radio" type="radio" name="tabs" id="tab-practice" />
          <input class="tab-radio" type="radio" name="tabs" id="tab-cert" />
          <div class="tab-labels">
            <label for="tab-theory">Week 1: Theory</label>
            <label for="tab-practice">Weeks 2-4: Practical</label>
            <label for="tab-cert">Outcomes</label>
          </div>
          <div class="tab-panels">
            <div class="tab-panel theory"><p>First week is preparation for the Class "A" commercial drivers learners permit. Also you will be scheduled during class hours to complete your DOT physical. The price of the physical is included in the total cost of the program.</p></div>
            <div class="tab-panel practice"><p>The remaining three weeks you will receive hands-on training in the trucks. DMV testing will be completed during the last week of class.</p></div>
            <div class="tab-panel cert"><p>Graduates receive a Commercial Driver Training Certificate, Class "A" CDL license with testing support. Degree option: Career Studies Diploma from Southwest Virginia Community College (SVCC) with 12 college credit hours.</p></div>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="section faq" style="background:#f7fbff;">
    <div class="container">
      <h2 class="section-title">Program FAQ</h2>
      <details><summary>How soon can I test for my CDL?</summary><p>Most students are test-ready during the final week after completing required skills benchmarks. DMV testing is completed during the last week of class.</p></details>
      <details><summary>Do you help with permit prep?</summary><p>Yes, the first week is dedicated to preparation for the Class "A" commercial drivers learners permit with structured review and practice materials.</p></details>
      <details><summary>Is financial aid available?</summary><p>Financial aid depends on locality of residence and household income. We are a WIOA approved training provider and can help with Pell Grant applications.</p></details>
      <details><summary>Is a refresher course available?</summary><p>Yes, a refresher course is also available for those who need to update their skills. Call our office for more information.</p></details>
    </div>
  </section>

  <section class="lead-area section" id="apply">
    <div class="container lead-grid">
      <article class="lead-card">
        <h3>Enroll in CDL Class A</h3>
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
