<?php
/**
 * Template Name: Contact Us
 */
get_header();
?>

<main>
  <section class="inner-hero" style="background-image:url('<?php echo tricounty_img('man-studying.jpg'); ?>');">
    <div class="inner-hero-content">
      <span class="eyebrow">Contact</span>
      <h1>Talk with Admissions</h1>
      <p>Ask about classes, start dates, funding, and application requirements.</p>
    </div>
  </section>

  <section class="lead-area section">
    <div class="container lead-grid">
      <article class="lead-card">
        <h3>Quick Contact Form</h3>
        <p>Our team usually responds within one business day.</p>
        <form class="contact-form" data-demo-form>
          <input type="text" name="name" placeholder="Full Name" required />
          <input type="tel" name="phone" placeholder="Phone Number" required />
          <input type="email" name="email" placeholder="Email Address" required />
          <select name="program" required>
            <option value="">Choose Program Interest</option>
            <option>CDL Class A</option>
            <option>Heavy Equipment</option>
            <option>Diesel Mechanics</option>
            <option>NCCER</option>
            <option>Driver Improvement</option>
          </select>
          <textarea name="message" placeholder="How can we help?"></textarea>
          <button class="btn btn-primary" type="submit">Send Request</button>
        </form>
      </article>

      <article class="lead-card">
        <h3>Campus Location</h3>
        <p><strong>Tri-County Driving Academy, Inc.</strong><br>
        1714 US Hwy 19, Hansonville, VA<br>
        P.O. Box 2109, Lebanon, VA 24266<br>
        Phone: <a href="tel:+12767947660">(276) 794-7660</a><br>
        Fax: (276) 794-7748<br>
        Email: <a href="mailto:tcda1@hotmail.com">tcda1@hotmail.com</a><br>
        Hours: Mon-Fri, 8:00 AM - 5:00 PM</p>
        <p style="margin-top:0.5rem;"><strong>President:</strong> D. Carter McGlothlin<br>
        <strong>Administrative Assistant:</strong> Tabitha Hicks</p>
        <div class="map-wrap">
          <iframe title="Map" loading="lazy" src="https://www.google.com/maps?q=36.825827,-82.139253&output=embed"></iframe>
        </div>
      </article>
    </div>
  </section>
</main>

<?php get_footer(); ?>
