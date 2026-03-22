<?php
/**
 * Template Name: Financial Aid
 */
get_header();
?>

<main>
  <section class="inner-hero" style="background-image:url('<?php echo tricounty_img('heavy.jpg'); ?>');">
    <div class="inner-hero-content">
      <span class="eyebrow">Financial Aid</span>
      <h1>Tuition &amp; Funding Options</h1>
      <p>Discover grant pathways, veteran support, and monthly payment planning.</p>
    </div>
  </section>

  <section class="section">
    <div class="container grid-2">
      <article class="card panel">
        <h2 class="section-title">Government &amp; Workforce Programs</h2>
        <ul class="list">
          <li><strong>WIOA Assistance:</strong> We are a WIOA (Workforce Innovation and Opportunity Act) approved training provider. You may qualify for full tuition coverage depending on locality of residence and household income.</li>
          <li><strong>Veteran Benefits:</strong> Admissions helps coordinate qualifying military education support.</li>
          <li><strong>Pell Grants:</strong> Some students may be eligible for a Pell Grant for certain courses. Eligibility is determined by the Federal Government.</li>
          <li><strong>State Workforce Referrals:</strong> Partner agency referrals may unlock partial or full tuition aid.</li>
        </ul>
      </article>
      <article class="card panel">
        <h2 class="section-title">Tuition Overview</h2>
        <ul class="list">
          <li><strong>CDL Class "A" Training:</strong> $4,500 — includes books, supplies, DOT physical, drug screen</li>
          <li><strong>Heavy Equipment Training:</strong> $4,900 — includes tuition, books, supplies, certifications</li>
          <li><strong>Diesel Mechanics:</strong> $21,500 — includes tuition, books, supplies, first ASE testing fees (11-month program)</li>
          <li><strong>Driver Improvement:</strong> $75</li>
        </ul>
        <h3 style="margin-top:1rem; color:var(--navy);">Payment Flexibility</h3>
        <ul class="list" style="margin-top:0.5rem;">
          <li>Monthly installment plans for approved students</li>
          <li>Employer-sponsored training pathways for selected candidates</li>
          <li>Transparent tuition breakdown before enrollment</li>
        </ul>
        <p style="margin-top:0.8rem;"><a class="btn btn-primary" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Speak with Funding Advisor</a></p>
      </article>
    </div>
  </section>

  <section class="section faq" style="background:var(--sand);">
    <div class="container">
      <h2 class="section-title">Funding FAQ</h2>
      <details><summary>Can I apply for funding before choosing a program?</summary><p>Yes. Funding discovery can begin early so you can compare eligible programs and realistic start dates.</p></details>
      <details><summary>How fast does WIOA approval take?</summary><p>Timelines vary by region. Admissions helps track documents to avoid delays. Financial aid depends on locality of residence and household income.</p></details>
      <details><summary>Do you offer Pell Grant assistance?</summary><p>Yes. If you would like to obtain a Pell Grant Application, contact us with your email address and the course you are interested in. We will send you a link to download the application package. Available packages: Heavy Equipment and CDL.</p></details>
      <details><summary>Are college credits included?</summary><p>You may receive 12 college credits and a Career Studies Diploma from Southwest Virginia Community College or Mountain Empire Community College upon program completion. College credits may not apply to all states.</p></details>
    </div>
  </section>
</main>

<?php get_footer(); ?>
