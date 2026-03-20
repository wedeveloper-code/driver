<?php get_header(); ?>

<?php get_template_part('template-parts/content', 'page-banner'); ?>

<div class="container">
  <div class="content-area no-sidebar" style="padding:50px 0;">
    <main id="main-content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
