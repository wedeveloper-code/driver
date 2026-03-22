<?php
/**
 * Template Name: Driver Improvement
 */
get_header();
?>

<main>
  <section class="inner-hero" style="background-image:url('<?php echo tricounty_img('tractor_trailer_services.jpg'); ?>');">
    <div class="inner-hero-content">
      <span class="eyebrow">Training Program</span>
      <h1>Driver Improvement Program</h1>
      <p>Strengthen defensive driving skills, improve road awareness, and support better driving records.</p>
      <p><a class="btn btn-primary" href="#apply">Request Info</a></p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2 class="section-title">Course Overview</h2>
      <p class="section-intro">This Driver Improvement Course is certified by the Commonwealth of Virginia and is acceptable at any Virginia Court that allows driver improvement courses.</p>
      <div class="program-meta">
        <div class="meta-card"><strong>Duration</strong><p>1 day (8:00 AM - 5:00 PM)</p></div>
        <div class="meta-card"><strong>Location</strong><p>Tri-County Driving Academy, Inc., 1714 US HWY 19, Lebanon, VA 24266</p></div>
        <div class="meta-card"><strong>Price</strong><p>$75</p></div>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--sand);">
    <div class="container grid-2">
      <article class="card panel">
        <h2 class="section-title">Curriculum</h2>
        <ul class="list">
          <li>Defensive driving strategies and risk reduction</li>
          <li>Collision avoidance and decision-making drills</li>
          <li>State law refreshers and safe driving standards</li>
          <li>Behavioral habits for long-term record improvement</li>
          <li>Virginia-specific driving regulations review</li>
        </ul>
      </article>
      <article class="card panel">
        <h2 class="section-title">Requirements</h2>
        <ul class="list">
          <li>Valid driver license or court-eligible requirement notice</li>
          <li>Photo identification at check-in</li>
          <li>Completion of required attendance hours</li>
          <li>Call for class schedule: (276) 794-7660</li>
        </ul>
      </article>
    </div>
  </section>

  <section class="section">
    <div class="container grid-2">
      <article class="salary-box">
        <h2 class="section-title">Benefits</h2>
        <p><strong>Court Accepted:</strong> This course is certified by the Commonwealth of Virginia and is acceptable at any Virginia Court that allows driver improvement courses.</p>
        <p><strong>Insurance:</strong> Completion may help reduce insurance premiums — check with your provider.</p>
        <p><strong>Record Improvement:</strong> Employers and insurers value defensive training and consistent safe driving habits.</p>
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
            <div class="tab-panel theory"><p>Road law updates, hazard prediction, Virginia driving regulations, and behavior-based risk reduction methods.</p></div>
            <div class="tab-panel practice"><p>Guided scenario reviews, defensive response planning, and decision drills.</p></div>
            <div class="tab-panel cert"><p>Students complete with a Virginia-certified Driver Improvement Course completion certificate and stronger safety habits.</p></div>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="section faq" style="background:#f7fbff;">
    <div class="container">
      <h2 class="section-title">Program FAQ</h2>
      <details><summary>Is this program court accepted?</summary><p>Yes, this Driver Improvement Course is certified by the Commonwealth of Virginia and is acceptable at any Virginia Court that allows driver improvement courses.</p></details>
      <details><summary>Can professional drivers take this course?</summary><p>Yes, the curriculum is useful for both personal and commercial safety improvement.</p></details>
      <details><summary>How do I register?</summary><p>Call (276) 794-7660 for our class schedule. Classes are held at Tri-County Driving Academy, 1714 US HWY 19, Lebanon, VA 24266.</p></details>
    </div>
  </section>

  <section class="lead-area section" id="apply">
    <div class="container lead-grid">
      <article class="lead-card">
        <h3>Register for Driver Improvement</h3>
        <p>Complete this form and an advisor will contact you about the next available class date.</p>
        <form class="contact-form" data-demo-form>
          <input type="text" name="name" placeholder="Full Name" required />
          <input type="tel" name="phone" placeholder="Phone Number" required />
          <input type="email" name="email" placeholder="Email Address" required />
          <textarea name="message" placeholder="Preferred date and questions"></textarea>
          <button class="btn btn-primary" type="submit">Submit Request</button>
        </form>
      </article>
      <article class="lead-card">
        <h3>Need Help?</h3>
        <p>Call <a href="tel:+12767947660">(276) 794-7660</a> for scheduling and questions.</p>
        <p><a class="btn btn-outline" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a></p>
      </article>
    </div>
  </section>
</main>

<a href="#apply" class="btn btn-primary sticky-cta">Register Now</a>

<?php get_footer(); ?>
