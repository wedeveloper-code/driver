<?php
/**
 * Template Name: FAQ
 * Description: Frequently Asked Questions page with accordion.
 */

declare(strict_types=1);

get_header();
?>

<section class="page-banner">
  <div class="container">
    <h1>Frequently Asked Questions</h1>
    <p>Everything you need to know about our programs, enrollment, and financial aid.</p>
  </div>
</section>

<section class="faq-section">
  <div class="container faq-container">

    <details class="faq-item">
      <summary>How long does the CDL Class A program take?</summary>
      <div class="faq-body">
        <p>The CDL Class A program takes <strong>4 weeks</strong> to complete. Classes begin every 3 weeks, so you can start quickly. Week 1 covers permit prep and DOT physical; Weeks 2–3 are hands-on truck training; Week 4 is DMV testing.</p>
      </div>
    </details>

    <details class="faq-item">
      <summary>What is included in the $4,500 CDL tuition?</summary>
      <div class="faq-body">
        <p>The $4,500 CDL Class A tuition (Virginia residents) includes:</p>
        <ul class="faq-list">
          <li>All classroom training and materials</li>
          <li>Books and supplies</li>
          <li>DOT Physical exam</li>
          <li>Drug screen</li>
          <li>Hands-on truck training hours</li>
          <li>Job placement assistance</li>
        </ul>
        <p>Tennessee residents qualify for a discounted rate of $3,450.</p>
      </div>
    </details>

    <details class="faq-item">
      <summary>Do I need a CDL permit before starting?</summary>
      <div class="faq-body">
        <p>No — you do <strong>not</strong> need your CDL learner's permit before you start. You will obtain your Commercial Learner's Permit (CLP) during Week 1 of the program as part of your training.</p>
      </div>
    </details>

    <details class="faq-item">
      <summary>What equipment do I train on for Heavy Equipment?</summary>
      <div class="faq-body">
        <p>The 6-week Heavy Equipment program provides hands-on training on real job-site equipment, including:</p>
        <ul class="faq-list">
          <li>Backhoe</li>
          <li>Excavator</li>
          <li>Dozer (bulldozer)</li>
          <li>Forklift (certification included)</li>
        </ul>
        <p>You also receive NCCER Heavy Equipment Operations Level One certification, blueprint reading, OSHA safety, and Flagman certification.</p>
      </div>
    </details>

    <details class="faq-item">
      <summary>Is financial aid available?</summary>
      <div class="faq-body">
        <p>Yes! Several funding options are available:</p>
        <ul class="faq-list">
          <li><strong>Pell Grants</strong> — Some Virginia students may be eligible for the Heavy Equipment and CDL programs. Contact us for the application package.</li>
          <li><strong>WIOA (Workforce Innovation and Opportunity Act)</strong> — Funding may be available for eligible students. Contact your local workforce office.</li>
          <li><strong>Veterans Benefits</strong> — VA education benefits are accepted.</li>
          <li><strong>Payment Plans</strong> — Flexible payment arrangements available. Call us to discuss.</li>
        </ul>
        <p><a href="<?php echo esc_url(home_url('/financial-aid/')); ?>">Learn more about Financial Aid →</a></p>
      </div>
    </details>

    <details class="faq-item">
      <summary>How do I enroll?</summary>
      <div class="faq-body">
        <p>Getting started is easy:</p>
        <ol class="faq-list">
          <li>Call us at <a href="tel:2767947660">(276) 794-7660</a> to discuss your goals and schedule</li>
          <li>Complete the enrollment application (available in our office)</li>
          <li>Provide a valid driver's license and DMV driving record</li>
          <li>Pass the DOT physical (included in CDL/Heavy Equipment tuition)</li>
          <li>Begin classes — new sessions start every 3 weeks</li>
        </ol>
        <p>Or <a href="<?php echo esc_url(home_url('/contact-us/')); ?>">fill out our contact form</a> and we'll get back to you promptly.</p>
      </div>
    </details>

    <details class="faq-item">
      <summary>Where is the school located?</summary>
      <div class="faq-body">
        <p>We are located at:</p>
        <address class="faq-address">
          <strong>Tri-County Driving Academy, Inc.</strong><br>
          1714 US Hwy 19<br>
          Hansonville, VA 24266<br>
          (Mailing: P.O. Box 2109, Lebanon, VA 24266)
        </address>
        <p>We are conveniently located near the Valero gas station, just off <strong>I-81 Exit 14</strong> (Abingdon). Follow US-19 north toward Hansonville.</p>
        <p><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Get directions →</a></p>
      </div>
    </details>

    <details class="faq-item">
      <summary>Is the school accredited?</summary>
      <div class="faq-body">
        <p>Yes. Tri-County Driving Academy is certified by the <strong>State Council of Higher Education for Virginia (SCHEV)</strong>, which is the Commonwealth of Virginia's coordinating body for higher education.</p>
        <p>We are also authorized for operation as a post-secondary educational institution by the <strong>Tennessee Higher Education Commission (THEC)</strong>. Visit <a href="http://www.state.tn.us/thec" target="_blank" rel="noopener">www.state.tn.us/thec</a> for information about THEC and transferability of credits.</p>
      </div>
    </details>

    <details class="faq-item">
      <summary>What is the NCCER certification?</summary>
      <div class="faq-body">
        <p>NCCER (National Center for Construction Education and Research) is an industry-recognized credentialing organization. Our Heavy Equipment Training program awards <strong>NCCER Heavy Equipment Operations Level One</strong> certification.</p>
        <p>Your NCCER credentials are verifiable by potential employers through the <strong>NCCER Automated National Registry</strong>, giving you a portable, nationally recognized qualification.</p>
      </div>
    </details>

    <details class="faq-item">
      <summary>Do you offer job placement assistance?</summary>
      <div class="faq-body">
        <p>Absolutely. Job placement assistance is part of every program. Our staff actively works with major carriers and construction companies to connect graduates with employers. Many of our students receive job offers <strong>before they even complete their training</strong>.</p>
        <p>We assist with resume preparation, interview coaching, and recruiter visits on campus.</p>
      </div>
    </details>

  </div><!-- /.faq-container -->

  <div class="container" style="text-align:center;padding-top:2rem;padding-bottom:3rem;">
    <p style="font-size:1.1rem;margin-bottom:1.5rem;">Still have questions? We're happy to help.</p>
    <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-amber">Contact Us Today</a>
  </div>
</section>

<?php get_footer(); ?>
