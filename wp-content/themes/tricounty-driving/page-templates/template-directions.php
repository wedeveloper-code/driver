<?php
/**
 * Template Name: Directions
 */
get_header();
get_template_part('template-parts/content', 'page-banner');
?>

<div class="container">
  <div class="content-area no-sidebar" style="padding:50px 0;">
    <main id="main-content">
      <h2>How to Find Us</h2>
      <p>Tri-County Driving Academy is located between Lebanon and Abingdon, Virginia.</p>

      <div style="margin-bottom:32px;">
        <iframe
          class="map-embed"
          src="https://maps.google.com/maps?q=Lebanon,+VA+24266&output=embed"
          allowfullscreen
          loading="lazy"
          title="Tri-County Driving Academy map">
        </iframe>
      </div>

      <div style="display:grid;grid-template-columns:1fr 1fr;gap:32px;">
        <div>
          <h3>Mailing Address</h3>
          <p>
            Tri-County Driving Academy<br>
            P.O. Box 2109<br>
            Lebanon, VA 24266
          </p>
          <p style="margin-top:14px;">
            <strong>Phone:</strong><br>
            <a href="tel:2767947660" style="font-size:1.15rem;font-weight:700;color:#b22222;">276-794-7660</a>
          </p>
        </div>
        <div>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="entry-content"><?php the_content(); ?></div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </main>
  </div>
</div>

<?php get_footer(); ?>
