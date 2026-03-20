<?php get_header(); ?>

<div class="page-banner">
  <div class="container">
    <h1>
      <?php if (is_category()) : single_cat_title();
      elseif (is_tag())      : single_tag_title();
      elseif (is_author())   : echo 'Author: ' . get_the_author();
      elseif (is_search())   : echo 'Search Results: ' . get_search_query();
      else                   : echo 'News &amp; Updates';
      endif; ?>
    </h1>
  </div>
</div>

<div class="container">
  <div class="content-area" style="padding:50px 0;">
    <main id="main-content">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('mb-3'); ?> style="padding-bottom:28px;border-bottom:1px solid #eee;">
            <h2 style="font-size:1.4rem;">
              <a href="<?php the_permalink(); ?>" style="color:#1a1a2e;"><?php the_title(); ?></a>
            </h2>
            <p style="font-size:.85rem;color:#999;margin-bottom:10px;">
              <?php echo get_the_date(); ?> &mdash; <?php the_author(); ?>
            </p>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary" style="font-size:.85rem;padding:7px 16px;">Read More</a>
          </article>
        <?php endwhile; ?>

        <div class="mt-2">
          <?php the_posts_pagination(['mid_size' => 2]); ?>
        </div>

      <?php else : ?>
        <p>No posts found. <a href="<?php echo esc_url(home_url('/')); ?>">Return home</a>.</p>
      <?php endif; ?>
    </main>

    <?php get_template_part('template-parts/sidebar', 'courses'); ?>
  </div>
</div>

<?php get_footer(); ?>
