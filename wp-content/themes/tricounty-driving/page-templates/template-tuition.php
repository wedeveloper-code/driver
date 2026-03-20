<?php
/**
 * Template Name: Tuition
 */
get_header();
get_template_part('template-parts/content', 'page-banner');
?>

<div class="container">
  <div class="content-area">
    <main id="main-content">
      <h2>Tuition &amp; Fees</h2>
      <p>The following tuition rates are current. All prices include tuition, books, and supplies unless noted otherwise. Financial aid may be available for eligible students — call <a href="tel:2767947660">276-794-7660</a> for details.</p>

      <table class="table-styled" style="margin-top:24px;">
        <thead>
          <tr>
            <th>Program</th>
            <th>Duration</th>
            <th>VA Students</th>
            <th>TN Students</th>
            <th>Notes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="<?php echo esc_url(home_url('/courses/tractor-trailer-training/')); ?>">Tractor Trailer Training (CDL Class A)</a></td>
            <td>4 weeks</td>
            <td>$4,500</td>
            <td>$3,450</td>
            <td>Includes tuition, books, supplies, DOT physical &amp; drug screen. WV/KY/other states: $3,950.</td>
          </tr>
          <tr>
            <td><a href="<?php echo esc_url(home_url('/courses/heavy-equipment-training/')); ?>">Heavy Equipment Training</a></td>
            <td>6 weeks</td>
            <td>$4,900</td>
            <td>$4,250</td>
            <td>Includes tuition, books, supplies, OSHA, Flagman &amp; NCCER certifications.</td>
          </tr>
          <tr>
            <td><a href="<?php echo esc_url(home_url('/courses/fiber-optics-training/')); ?>">Fiber Optics Training</a></td>
            <td>3 weeks</td>
            <td>$2,500</td>
            <td>$2,500</td>
            <td>Includes tuition, books, supplies &amp; tools used in training.</td>
          </tr>
          <tr>
            <td><a href="<?php echo esc_url(home_url('/courses/diesel-school/')); ?>">Diesel School</a></td>
            <td>11 months</td>
            <td>$21,500</td>
            <td>—</td>
            <td>Includes tuition, books, supplies &amp; first ASE testing fees. Financial aid available (VA residents).</td>
          </tr>
          <tr>
            <td><a href="<?php echo esc_url(home_url('/courses/surface-mining-papers/')); ?>">Surface Mining Papers</a></td>
            <td>2 days</td>
            <td>$125</td>
            <td>$125</td>
            <td>Includes tuition &amp; books.</td>
          </tr>
          <tr>
            <td><a href="<?php echo esc_url(home_url('/courses/osha-hazmat-training/')); ?>">OSHA &amp; Hazmat Training</a></td>
            <td>2 days</td>
            <td>$125</td>
            <td>$125</td>
            <td>Includes tuition, books &amp; supplies. DMV fees for HAZMAT endorsement paid separately.</td>
          </tr>
          <tr>
            <td><a href="<?php echo esc_url(home_url('/courses/virginia-online-driver-improvement/')); ?>">VA Online Driver Improvement Course</a></td>
            <td>Online / self-paced</td>
            <td>$75</td>
            <td>—</td>
            <td>Court-accepted online course for Virginia residents.</td>
          </tr>
          <tr>
            <td><a href="<?php echo esc_url(home_url('/courses/driver-improvement/')); ?>">Driver Improvement Class (In-Person)</a></td>
            <td>1 day (8am–5pm)</td>
            <td>$75</td>
            <td>—</td>
            <td>Held at Tri-County Driving Academy. Call for schedule.</td>
          </tr>
        </tbody>
      </table>

      <div class="info-box" style="margin-top:28px;">
        <p><strong>Financial Aid:</strong> Financial aid is available for our Virginia residents for the Diesel School program.
        Please call our office at <a href="tel:2767947660">276-794-7660</a> for more information about eligibility and application.</p>
      </div>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry-content" style="margin-top:28px;"><?php the_content(); ?></div>
      <?php endwhile; endif; ?>
    </main>

    <?php get_template_part('template-parts/sidebar', 'courses'); ?>
  </div>
</div>

<?php get_footer(); ?>
