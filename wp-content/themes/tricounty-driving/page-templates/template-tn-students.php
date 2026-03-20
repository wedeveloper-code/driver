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
      <h2>Information for Tennessee Students</h2>

      <div class="info-box">
        <p>
          Tri-County Driving Academy is authorized for operation as a post-secondary educational institution
          by the <strong>Tennessee Higher Education Commission</strong>. In order to view detailed job
          placement and completion information on the program offered by Tri-County Driving Academy,
          please visit <a href="http://www.state.tn.us/thec" target="_blank" rel="noopener">www.state.tn.us/thec</a>
          and click on the "Authorized Institutions Data" button.
        </p>
      </div>

      <h3 style="margin-top:28px;">Transferability of Credits</h3>
      <p>
        Credits earned at Tri-County Driving Academy may transfer to other institutions, but
        transferability is not guaranteed. Students seeking transfer of credit should contact the
        receiving institution before enrolling. College credits may not apply to all states.
      </p>
      <p>
        Please call our office at <a href="tel:2767947660">276-794-7660</a> for eligibility details.
      </p>

      <h3 style="margin-top:28px;">Tuition &amp; Fees for Tennessee Students</h3>
      <p>
        Tuition rates are the same for Virginia and Tennessee students. See our
        <a href="<?php echo esc_url(home_url('/info/tuition/')); ?>">Tuition page</a>
        for current program prices. Financial aid availability may vary by state.
      </p>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry-content" style="margin-top:28px;"><?php the_content(); ?></div>
      <?php endwhile; endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
