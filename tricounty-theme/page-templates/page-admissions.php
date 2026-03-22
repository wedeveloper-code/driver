<?php
/**
 * Template Name: Admissions
 */
get_header();
?>

<main>
  <section class="inner-hero" style="background-image:url('<?php echo tricounty_img('man-studying.jpg'); ?>');">
    <div class="inner-hero-content">
      <span class="eyebrow">Admissions</span>
      <h1>How to Enroll</h1>
      <p>Follow a clear step-by-step process and start training with confidence.</p>
    </div>
  </section>

  <section class="section">
    <div class="container grid-2">
      <article class="card panel">
        <h2 class="section-title">Enrollment Timeline</h2>
        <p class="section-intro">Our admissions workflow is designed to be fast, transparent, and easy to complete.</p>
        <div class="timeline">
          <div class="timeline-step"><strong>Step 1: Get Learner's Permit</strong><p>Prepare for permit tests and obtain required permit status where applicable.</p></div>
          <div class="timeline-step"><strong>Step 2: Pass DOT Physical</strong><p>Schedule your DOT medical exam and submit documentation to admissions. The price of the physical is included in CDL program tuition.</p></div>
          <div class="timeline-step"><strong>Step 3: Submit Application</strong><p>Choose program and start date, then complete enrollment forms. CDL classes begin every three weeks.</p></div>
          <div class="timeline-step"><strong>Step 4: Funding Review</strong><p>Evaluate WIOA, veteran support, Pell Grant eligibility, and payment plan options. Financial aid depends on locality of residence and household income.</p></div>
          <div class="timeline-step"><strong>Step 5: Orientation</strong><p>Attend orientation, confirm schedule, and begin training.</p></div>
        </div>
      </article>
      <article class="card panel">
        <h2 class="section-title">Required Documents</h2>
        <ul class="list">
          <li>Government-issued photo identification</li>
          <li>Valid driver license (for applicable programs)</li>
          <li>DMV driving record (for CDL program)</li>
          <li>Social Security card or work authorization documentation</li>
          <li>Learner permit copy (if required by selected program)</li>
          <li>DOT medical card or physical exam appointment confirmation</li>
          <li>Funding eligibility paperwork (if applying for aid)</li>
        </ul>
        <h3 style="margin-top:1.2rem; color:var(--navy);">Program-Specific Requirements</h3>
        <ul class="list" style="margin-top:0.5rem;">
          <li><strong>CDL:</strong> Valid Driver's License, DMV record, pass DOT physical, 18+ years</li>
          <li><strong>Heavy Equipment:</strong> 18+ years, sound physical health</li>
          <li><strong>Diesel Mechanics:</strong> 18+ years</li>
        </ul>
        <p style="margin-top:0.8rem;"><a class="btn btn-primary" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Start Application</a></p>
      </article>
    </div>
  </section>

  <section class="section" style="background:var(--sand);">
    <div class="container grid-2">
      <article class="card panel">
        <h2 class="section-title">Pell Grant Packages</h2>
        <p>Some students may be eligible for a Pell Grant for certain courses. If you would like to obtain a Pell Grant Application, contact us with your email address and the course you are interested in. We will send you a link to download the application package.</p>
        <p style="margin-top:0.5rem;"><em>Eligibility for Pell Grants is determined by the Federal Government, and we make no guarantee you will be approved.</em></p>
        <ul class="list" style="margin-top:0.5rem;">
          <li>Package 1: Heavy Equipment</li>
          <li>Package 2: CDL</li>
        </ul>
      </article>
      <article class="card panel">
        <h2 class="section-title">College Credit Opportunity</h2>
        <p>Upon completion of one of our programs, you will receive a certificate of completion and/or certification/license depending upon the program taken.</p>
        <p style="margin-top:0.5rem;">You may also receive 12 college credits and a Career Studies Diploma from Southwest Virginia Community College or Mountain Empire Community College.</p>
        <p style="margin-top:0.5rem;"><em>College credits may not apply to all states. Call (276) 794-7660 for eligibility.</em></p>
      </article>
    </div>
  </section>
</main>

<?php get_footer(); ?>
