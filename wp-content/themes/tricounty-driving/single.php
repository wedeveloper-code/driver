<?php get_header(); ?>

<?php get_template_part('template-parts/content', 'page-banner'); ?>

<div class="container">
  <div class="content-area" style="padding:50px 0;">
    <main id="main-content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <p style="font-size:.85rem;color:#999;margin-bottom:18px;">
            Published: <?php echo get_the_date(); ?> &mdash; <?php the_author(); ?>
          </p>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          <div class="mt-3">
            <?php
            $prev = get_previous_post();
            $next = get_next_post();
            ?>
            <div style="display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap;padding-top:20px;border-top:1px solid #eee;">
              <?php if ($prev) : ?>
                <a href="<?php echo get_permalink($prev); ?>" class="btn btn-outline" style="border-color:#ccc;color:#333;">&larr; <?php echo get_the_title($prev); ?></a>
              <?php endif; ?>
              <?php if ($next) : ?>
                <a href="<?php echo get_permalink($next); ?>" class="btn btn-outline" style="border-color:#ccc;color:#333;"><?php echo get_the_title($next); ?> &rarr;</a>
              <?php endif; ?>
            </div>
          </div>
        </article>
      <?php endwhile; endif; ?>
    </main>

    <?php get_template_part('template-parts/sidebar', 'courses'); ?>
  </div>
</div>

<?php get_footer(); ?>
