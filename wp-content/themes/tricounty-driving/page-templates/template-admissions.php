<?php
/**
 * Template Name: Admissions & Funding
 * Description: Admissions process, tuition table, and funding overview.
 */

declare(strict_types=1);

get_header();
?>

<section class="page-banner">
  <div class="container">
    <h1>Admissions &amp; Funding</h1>
    <p>Everything you need to know about enrolling and paying for your training.</p>
  </div>
</section>

<section class="admissions-section">
  <div class="container">

    <!-- How to Enroll Timeline -->
    <div class="admissions-timeline-wrap">
      <h2>How to Enroll</h2>
      <p>Getting started at Tri-County Driving Academy is straightforward. Follow these steps:</p>

      <ol class="admissions-timeline">
        <li class="timeline-step">
          <div class="timeline-number">1</div>
          <div class="timeline-content">
            <h3>Get Your Learner's Permit</h3>
            <p>For CDL programs, you will obtain your Commercial Learner's Permit (CLP) during Week 1 of training. For other programs, a standard valid driver's license is sufficient.</p>
          </div>
        </li>
        <li class="timeline-step">
          <div class="timeline-number">2</div>
          <div class="timeline-content">
            <h3>Pass Your DOT Physical</h3>
            <p>A DOT physical examination is required for CDL and Heavy Equipment programs. The cost of the DOT physical is <strong>included in the tuition</strong> for these programs. You must be in sound physical health to operate commercial vehicles and heavy equipment.</p>
          </div>
        </li>
        <li class="timeline-step">
          <div class="timeline-number">3</div>
          <div class="timeline-content">
            <h3>Complete Application &amp; Enrollment</h3>
            <p>Call our office at <a href="tel:2767947660">(276) 794-7660</a> or visit us in person to complete the enrollment application. You will need:</p>
            <ul>
              <li>Valid driver's license</li>
              <li>DMV driving record (obtainable from your state DMV)</li>
              <li>High school diploma or GED (required for all programs)</li>
              <li>Must be 18 years of age or older</li>
            </ul>
          </div>
        </li>
        <li class="timeline-step">
          <div class="timeline-number">4</div>
          <div class="timeline-content">
            <h3>Begin Classes</h3>
            <p>New sessions start <strong>every 3 weeks</strong>, so you won't have to wait long. Our instructors provide one-on-one, hands-on training from day one. You'll be on the equipment or in the truck quickly.</p>
          </div>
        </li>
      </ol>
    </div><!-- /.admissions-timeline-wrap -->

    <!-- Tuition Table -->
    <div class="tuition-table-wrap">
      <h2>Tuition &amp; Fees</h2>

      <div class="table-responsive">
        <table class="tuition-table">
          <thead>
            <tr>
              <th>Program</th>
              <th>Duration</th>
              <th>Virginia Residents</th>
              <th>Tennessee Residents</th>
              <th>Other States</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="<?php echo esc_url(home_url('/commercial-driver-training-class-a-cdl/')); ?>">CDL Class A Training</a></td>
              <td>4 weeks</td>
              <td>$4,500</td>
              <td>$3,450</td>
              <td>$3,950</td>
            </tr>
            <tr>
              <td><a href="<?php echo esc_url(home_url('/certified-heavy-equipment-training/')); ?>">Heavy Equipment Training</a></td>
              <td>6 weeks</td>
              <td>$4,900</td>
              <td>$4,250</td>
              <td>$4,250</td>
            </tr>
            <tr>
              <td><a href="<?php echo esc_url(home_url('/diesel-mechanics-heavy-truck-maintenance/')); ?>">Diesel Mechanics</a></td>
              <td>11 months</td>
              <td>$21,500</td>
              <td colspan="2" style="text-align:center;">—</td>
            </tr>
            <tr>
              <td><a href="<?php echo esc_url(home_url('/driver-improvement/')); ?>">Virginia Driver Improvement</a></td>
              <td>1 day</td>
              <td>$75</td>
              <td colspan="2" style="text-align:center;">—</td>
            </tr>
            <tr>
              <td>OSHA / Hazmat Training</td>
              <td>2 days</td>
              <td>$125</td>
              <td>$125</td>
              <td>$125</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="tuition-note">CDL and Heavy Equipment tuition includes training, books, supplies, DOT Physical, and drug screen. All prices subject to change — call to confirm current rates.</p>
    </div>

    <!-- Financial Aid Summary -->
    <div class="admissions-aid">
      <h2>Financial Aid Options</h2>
      <div class="aid-summary-grid">

        <div class="aid-summary-item">
          <h3>Pell Grants</h3>
          <p>Some Virginia students may be eligible for federal Pell Grants (CDL &amp; Heavy Equipment programs). Contact us for the application packet. <strong>Not available to Tennessee residents.</strong></p>
          <a href="<?php echo esc_url(home_url('/financial-aid/')); ?>">Learn More →</a>
        </div>

        <div class="aid-summary-item">
          <h3>WIOA Funding</h3>
          <p>Workforce Innovation and Opportunity Act funding may be available for eligible adults and dislocated workers. Contact your local workforce development office to apply.</p>
          <a href="<?php echo esc_url(home_url('/financial-aid/')); ?>">Learn More →</a>
        </div>

        <div class="aid-summary-item">
          <h3>Veterans Benefits</h3>
          <p>VA education benefits (GI Bill&reg;) are accepted. Call us to confirm your specific benefit chapter qualifies for our programs.</p>
          <a href="<?php echo esc_url(home_url('/financial-aid/')); ?>">Learn More →</a>
        </div>

        <div class="aid-summary-item">
          <h3>Payment Plans</h3>
          <p>Flexible payment arrangements are available. Call our office to discuss options that work for your situation.</p>
          <a href="tel:2767947660">Call (276) 794-7660 →</a>
        </div>

      </div>
    </div>

    <!-- CTA -->
    <div class="admissions-cta">
      <h2>Ready to Enroll?</h2>
      <p>Call us or fill out the contact form and we'll walk you through every step of the enrollment process.</p>
      <div class="admissions-cta-btns">
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-amber">Contact Us to Enroll</a>
        <a href="tel:2767947660" class="btn-outline-dark">Call (276) 794-7660</a>
      </div>
    </div>

  </div><!-- /.container -->
</section>

<?php get_footer(); ?>
