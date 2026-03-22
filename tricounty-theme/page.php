<?php
/**
 * Default page template
 */
get_header();
?>
<main>
  <section class="section">
    <div class="container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="section-title"><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
      <?php endwhile; endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>
