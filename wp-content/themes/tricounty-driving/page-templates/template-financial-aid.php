<?php
/**
 * Template Name: Financial Aid
 * Description: Financial Aid & Tuition Assistance page.
 */

declare(strict_types=1);

get_header();
?>

<section class="page-banner">
  <div class="container">
    <h1>Financial Aid &amp; Tuition Assistance</h1>
    <p>Multiple funding options are available to help you pay for your training at Tri-County Driving Academy.</p>
  </div>
</section>

<section class="financial-aid-section">
  <div class="container">

    <!-- Intro -->
    <div class="aid-intro">
      <p>We believe that the cost of training should never stand between you and a better career. Tri-County Driving Academy works with several federal, state, and veteran funding programs to help qualified students reduce out-of-pocket costs.</p>
    </div>

    <!-- Aid Cards Grid -->
    <div class="aid-grid">

      <!-- Pell Grants -->
      <div class="aid-card">
        <div class="aid-card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
        </div>
        <h2>Pell Grants</h2>
        <p>Some Virginia students may be eligible for <strong>Federal Pell Grants</strong> for the CDL Class A and Heavy Equipment Training programs. Pell Grants do not need to be repaid.</p>
        <ul class="aid-list">
          <li>Available for eligible Virginia residents</li>
          <li>Applies to CDL Class A and Heavy Equipment programs</li>
          <li>Based on financial need (FAFSA required)</li>
          <li>Does not need to be repaid</li>
        </ul>
        <p class="aid-note"><strong>Note for Tennessee students:</strong> Pell Grants are <em>not</em> available for Tennessee residents at our school. See <a href="<?php echo esc_url(home_url('/tennessee-student-information/')); ?>">Tennessee Student Information</a>.</p>
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-aid">Request Pell Grant Packet</a>
      </div>

      <!-- WIOA -->
      <div class="aid-card">
        <div class="aid-card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="14" x="2" y="7" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
        </div>
        <h2>WIOA Funding</h2>
        <p>The <strong>Workforce Innovation and Opportunity Act (WIOA)</strong> provides training funds to eligible workers seeking in-demand career skills.</p>
        <ul class="aid-list">
          <li>Federally funded workforce development program</li>
          <li>Available for eligible adults and dislocated workers</li>
          <li>Contact your local Virginia Career Works or American Job Center</li>
          <li>Can cover full or partial tuition costs</li>
        </ul>
        <p>To apply for WIOA funding, contact your local workforce development office or Virginia Employment Commission office before enrolling.</p>
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-aid">Ask About WIOA</a>
      </div>

      <!-- Veterans Benefits -->
      <div class="aid-card">
        <div class="aid-card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="m9 12 2 2 4-4"/></svg>
        </div>
        <h2>Veterans Benefits</h2>
        <p>Tri-County Driving Academy accepts <strong>VA education benefits</strong> to help veterans and eligible dependents pay for vocational training.</p>
        <ul class="aid-list">
          <li>GI Bill&reg; benefits accepted</li>
          <li>Applies to CDL, Heavy Equipment, and Diesel programs</li>
          <li>Contact the VA or your State Approving Agency for eligibility</li>
          <li>Call us to confirm your specific benefit chapter applies</li>
        </ul>
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-aid">Veterans — Contact Us</a>
      </div>

      <!-- Payment Plans -->
      <div class="aid-card">
        <div class="aid-card-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
        </div>
        <h2>Payment Plans</h2>
        <p>If institutional or government aid does not fully cover your tuition, we offer <strong>flexible payment arrangements</strong> to help you manage costs.</p>
        <ul class="aid-list">
          <li>Discuss options directly with our office</li>
          <li>Plans tailored to your individual situation</li>
          <li>No third-party lender required</li>
        </ul>
        <p>Call <a href="tel:2767947660">(276) 794-7660</a> to discuss a payment plan before enrollment.</p>
        <a href="tel:2767947660" class="btn-aid">Call (276) 794-7660</a>
      </div>

    </div><!-- /.aid-grid -->

    <!-- Tuition Table -->
    <div class="tuition-table-wrap">
      <h2>Program Tuition Summary</h2>
      <div class="table-responsive">
        <table class="tuition-table">
          <thead>
            <tr>
              <th>Program</th>
              <th>Virginia Residents</th>
              <th>Tennessee Residents</th>
              <th>Other States</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="<?php echo esc_url(home_url('/commercial-driver-training-class-a-cdl/')); ?>">CDL Class A Training</a></td>
              <td>$4,500</td>
              <td>$3,450</td>
              <td>$3,950</td>
            </tr>
            <tr>
              <td><a href="<?php echo esc_url(home_url('/certified-heavy-equipment-training/')); ?>">Heavy Equipment Training</a></td>
              <td>$4,900</td>
              <td>$4,250</td>
              <td>$4,250</td>
            </tr>
            <tr>
              <td><a href="<?php echo esc_url(home_url('/diesel-mechanics-heavy-truck-maintenance/')); ?>">Diesel Mechanics (11 months)</a></td>
              <td>$21,500</td>
              <td colspan="2" style="text-align:center;">—</td>
            </tr>
            <tr>
              <td><a href="<?php echo esc_url(home_url('/driver-improvement/')); ?>">Driver Improvement Course</a></td>
              <td>$75</td>
              <td colspan="2" style="text-align:center;">—</td>
            </tr>
            <tr>
              <td>OSHA / Hazmat Training</td>
              <td>$125</td>
              <td>$125</td>
              <td>$125</td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="tuition-note">Tuition prices include training, books, and supplies where applicable. CDL and Heavy Equipment tuition also includes DOT Physical and drug screen. Prices subject to change — call for current rates.</p>
    </div>

    <!-- CTA -->
    <div class="aid-cta">
      <h2>Ready to Take the Next Step?</h2>
      <p>Contact us today to discuss which funding options are available to you and how to get started on your new career.</p>
      <div class="aid-cta-btns">
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-amber">Contact Us</a>
        <a href="tel:2767947660" class="btn-outline-dark">Call (276) 794-7660</a>
      </div>
    </div>

    <!-- Tennessee Notice -->
    <div class="tn-students-notice">
      <h3>Tennessee Students</h3>
      <p>Tennessee residents are <strong>not eligible</strong> for Pell Grants at our institution. No college credits are awarded. A high school diploma or GED is required for enrollment. Tennessee tuition rates apply as shown in the table above.</p>
      <p>Tri-County Driving Academy is authorized for operation as a post-secondary educational institution by the Tennessee Higher Education Commission. Visit <a href="http://www.state.tn.us/thec" target="_blank" rel="noopener">www.state.tn.us/thec</a> for placement and transferability information.</p>
      <p><a href="<?php echo esc_url(home_url('/tennessee-student-information/')); ?>">Full Tennessee Student Information →</a></p>
    </div>

  </div><!-- /.container -->
</section>

<?php get_footer(); ?>
