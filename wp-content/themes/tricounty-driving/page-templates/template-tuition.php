<?php
/**
 * Template Name: Tuition
 * Description: Tuition & Fees — redirects to admissions-funding, kept for backwards compat.
 */
get_header();
get_template_part('template-parts/content', 'page-banner');
?>

<div class="container">
  <div class="content-area">
    <main id="main-content">
      <h2>Tuition &amp; Fees</h2>
      <p>The following tuition rates are current. All prices include tuition, books, and supplies unless noted otherwise. Financial aid may be available for eligible students — call <a href="tel:2767947660">(276) 794-7660</a> for details.</p>

      <table class="table-styled" style="margin-top:24px;">
        <thead>
          <tr>
            <th>Program</th>
            <th>Duration</th>
            <th>VA Students</th>
            <th>TN Students</th>
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
            <td><a href="<?php echo esc_url(home_url('/certified-heavy-equipment-training/')); ?>">Certified Heavy Equipment Training</a></td>
            <td>6 weeks</td>
            <td>$4,900</td>
            <td>$4,250</td>
            <td>$4,250</td>
          </tr>
          <tr>
            <td><a href="<?php echo esc_url(home_url('/diesel-mechanics-heavy-truck-maintenance/')); ?>">Diesel Mechanics / Heavy Truck Maintenance</a></td>
            <td>11 months</td>
            <td>$21,500</td>
            <td colspan="2" style="text-align:center;">—</td>
          </tr>
          <tr>
            <td><a href="<?php echo esc_url(home_url('/driver-improvement/')); ?>">Virginia Driver Improvement Course</a></td>
            <td>1 day (8am–5pm)</td>
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

      <div class="info-box" style="margin-top:28px;">
        <p><strong>Financial Aid:</strong> Pell Grants, WIOA funding, and Veterans benefits may be available for eligible students. Please call <a href="tel:2767947660">(276) 794-7660</a> or see our <a href="<?php echo esc_url(home_url('/financial-aid/')); ?>">Financial Aid page</a> for details.</p>
      </div>

      <p style="margin-top:20px;">
        <a href="<?php echo esc_url(home_url('/admissions-funding/')); ?>" class="btn btn-primary">Admissions &amp; Enrollment Information</a>
      </p>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry-content" style="margin-top:28px;"><?php the_content(); ?></div>
      <?php endwhile; endif; ?>
    </main>

    <?php get_template_part('template-parts/sidebar', 'courses'); ?>
  </div>
</div>

<?php get_footer(); ?>
