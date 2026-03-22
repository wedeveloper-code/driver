<?php
/**
 * Template Name: Diesel Mechanics
 */
get_header();
?>

<main>
  <section class="inner-hero" style="background-image:url('<?php echo tricounty_img('training-in-engine-design.jpg'); ?>');">
    <div class="inner-hero-content">
      <span class="eyebrow">Training Program</span>
      <h1>Diesel Mechanics &amp; Heavy Truck Maintenance</h1>
      <p>Learn practical diesel diagnostics, preventative maintenance, and repair workflows for heavy trucks.</p>
      <p><a class="btn btn-primary" href="#apply">Request Info</a></p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2 class="section-title">Course Overview</h2>
      <p class="section-intro">Your interest in pursuing a career in this field is an excellent one. The need for this skill is increasing, because the diesel engine is becoming standard in most of our nation's trucks, locomotives, and buses.</p>
      <div class="program-meta">
        <div class="meta-card"><strong>Duration</strong><p>11 months</p></div>
        <div class="meta-card"><strong>Classroom vs Practical</strong><p>Hands-on training with lab/classroom instruction</p></div>
        <div class="meta-card"><strong>Tuition</strong><p>$21,500 — includes tuition, books, supplies, and first ASE testing fees</p></div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--sand);">
    <div class="container grid-2">
      <article class="card panel">
        <h2 class="section-title">Curriculum</h2>
        <ul class="list">
          <li>Diesel Engine Fundamentals</li>
          <li>Hydromechanical Diesel Fuel Injection Systems</li>
          <li>Computerized Truck and Bus Systems Management</li>
          <li>Truck Electricity and Electronics</li>
          <li>Truck Steering, Suspension, and Wheels</li>
          <li>Truck Brakes</li>
          <li>Truck Driveline Systems</li>
          <li>Truck Heating Ventilation and Air Conditioning Systems</li>
        </ul>
      </article>
      <article class="card panel">
        <h2 class="section-title">Admission Requirements</h2>
        <ul class="list">
          <li>Must be 18 years of age or older</li>
          <li>Valid state identification or driver license</li>
          <li>Safety footwear and workshop compliance commitment</li>
          <li>Willingness to follow shop safety procedures</li>
        </ul>
        <p style="margin-top:0.8rem;">Upon completion of the program the student will receive a Diesel Mechanic/Heavy Truck Maintenance Certificate. Financial aid is available for Virginia residents.</p>
      </article>
    </div>
  </section>

  <section class="section">
    <div class="container grid-2">
      <article class="salary-box">
        <h2 class="section-title">Career Outlook</h2>
        <p><strong>Hourly Wages:</strong> Median hourly wages of Diesel Engine Specialists, including incentive pay, was $18.94. The middle 50% earned between $15.25 and $23.58 an hour.</p>
        <p>They are also becoming more prevalent in light vehicles such as pickups and passenger vehicles, expanding career opportunities.</p>
        <p>Our training will provide you with the knowledge and skills needed for an exciting and excellent paying career.</p>
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
            <div class="tab-panel theory"><p>Engine systems, diagnostics logic, service intervals, fuel injection, computerized systems, and maintenance documentation.</p></div>
            <div class="tab-panel practice"><p>Hands-on lab work with real engines, inspections, component replacement, brake systems, electrical systems, and guided troubleshooting.</p></div>
            <div class="tab-panel cert"><p>Graduates receive Diesel Mechanic/Heavy Truck Maintenance Certificate and are prepared for ASE Certification testing. First testing fees included in tuition.</p></div>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="section faq" style="background:#f7fbff;">
    <div class="container">
      <h2 class="section-title">Program FAQ</h2>
      <details><summary>Do I need prior mechanic experience?</summary><p>No, the course starts with diesel engine fundamentals and builds toward advanced diagnostic confidence with hands-on training and lab/classroom instruction.</p></details>
      <details><summary>Will I work on real heavy truck systems?</summary><p>Yes, students train in practical lab conditions covering all major truck systems including engines, brakes, electrical, HVAC, and driveline.</p></details>
      <details><summary>Is financial aid available?</summary><p>Financial aid is available for Virginia residents. The cost of tuition is $21,500 which includes tuition, books, supplies, and first testing fees for ASE Certification.</p></details>
    </div>
  </section>

  <section class="lead-area section" id="apply">
    <div class="container lead-grid">
      <article class="lead-card">
        <h3>Enroll in Diesel Mechanics</h3>
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
