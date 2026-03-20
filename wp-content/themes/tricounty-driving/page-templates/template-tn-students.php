<?php
/**
 * Template Name: Info for Tennessee Students
 */
get_header();
get_template_part('template-parts/content', 'page-banner');
?>

<div class="container">
  <div class="content-area no-sidebar" style="padding:50px 0;">
    <main id="main-content">
      <h2>Special Information for Tennessee Students</h2>

      <p>The purpose of this page is to provide links to disclosures and documents required by Tennessee law to be provided to students from Tennessee.</p>

      <div class="info-box">
        <p>
          Tri-County Driving Academy is authorized for operation as a post-secondary educational institution
          by the <strong>Tennessee Higher Education Commission</strong>. In order to view detailed job
          placement and completion information on the program offered by Tri-County Driving Academy,
          please visit <a href="http://www.state.tn.us/thec" target="_blank" rel="noopener">www.state.tn.us/thec</a>
          and click on the "Authorized Institutions Data" button.
        </p>
      </div>

      <h3 style="margin-top:28px;">Financial Aid for Tennessee Residents</h3>
      <p>
        <strong>No Pell Grants are available for Tennessee students.</strong>
        There are also no college credits available for Tennessee students at this time.
      </p>

      <h3 style="margin-top:28px;">Admission Requirements for Tennessee Students</h3>
      <p>
        Tennessee students are required to have a <strong>high school diploma or GED</strong>
        before they take CDL, Heavy Equipment, or Fiber Optics classes at Tri-County Driving Academy.
      </p>

      <h3 style="margin-top:28px;">Tuition for Tennessee Students</h3>
      <table class="table-styled" style="margin-top:12px;">
        <thead>
          <tr>
            <th>Program</th>
            <th>Tuition (TN Rate)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Commercial Driver Training (CDL Class A)</td>
            <td>$3,450.00</td>
          </tr>
          <tr>
            <td>Heavy Equipment Training</td>
            <td>$4,250.00</td>
          </tr>
          <tr>
            <td>Fiber Optics Training</td>
            <td>$2,500.00</td>
          </tr>
        </tbody>
      </table>
      <p style="font-size:.9rem;color:#666;margin-top:8px;">
        Call <a href="tel:2767947660">276-794-7660</a> or email
        <a href="mailto:tcda1@hotmail.com">tcda1@hotmail.com</a> for more information.
      </p>

      <h3 style="margin-top:28px;">Transferability of Credits</h3>
      <p>
        Credits earned at Tri-County Driving Academy may transfer to other institutions, but
        transferability is not guaranteed. Students seeking transfer of credit should contact the
        receiving institution before enrolling.
      </p>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry-content" style="margin-top:28px;"><?php the_content(); ?></div>
      <?php endwhile; endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
