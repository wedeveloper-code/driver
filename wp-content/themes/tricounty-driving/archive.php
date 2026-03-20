<?php get_header(); ?>

<div class="page-banner">
  <div class="container">
    <h1>
      <?php
      if (is_category()) {
          single_cat_title();
      } elseif (is_tag()) {
          echo 'Tag: ';
          single_tag_title();
      } elseif (is_author()) {
          echo 'Author: ' . esc_html(get_the_author());
      } elseif (is_year()) {
          echo get_the_date('Y');
      } elseif (is_month()) {
          echo get_the_date('F Y');
      } elseif (is_day()) {
          echo get_the_date('F j, Y');
      } else {
          echo 'News Archive';
      }
      ?>
    </h1>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      &rsaquo;
      <a href="<?php echo esc_url(home_url('/news/')); ?>">Our News</a>
      <?php if (is_category() || is_tag() || is_author() || is_date()) : ?>
        &rsaquo; <span>
          <?php
          if (is_category()) {
              single_cat_title();
          } elseif (is_tag()) {
              single_tag_title();
          } elseif (is_author()) {
              echo esc_html(get_the_author());
          } else {
              echo get_the_date('F Y');
          }
          ?>
        </span>
      <?php endif; ?>
    </nav>
  </div>
</div>

<div class="container">
  <div class="content-area" style="padding:50px 0;">
    <main id="main-content">

      <?php if (is_category()) : ?>
        <?php $cat_desc = category_description(); if ($cat_desc) : ?>
          <p style="color:#555;margin-bottom:24px;"><?php echo wp_kses_post($cat_desc); ?></p>
        <?php endif; ?>
      <?php endif; ?>

      <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('mb-3'); ?>
                   style="padding-bottom:28px;margin-bottom:28px;border-bottom:1px solid #eee;">
            <h2 style="font-size:1.35rem;margin-bottom:4px;">
              <a href="<?php the_permalink(); ?>" style="color:#1a1a2e;"><?php the_title(); ?></a>
            </h2>
            <p style="font-size:.82rem;color:#999;margin-bottom:10px;">
              <?php echo get_the_date('F j, Y'); ?> &mdash; <?php the_author(); ?>
            </p>
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('tcda-thumb', ['style' => 'float:left;margin:0 18px 10px 0;border-radius:4px;']); ?>
              </a>
            <?php endif; ?>
            <?php the_excerpt(); ?>
            <div style="clear:both;"></div>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary"
               style="font-size:.85rem;padding:7px 16px;margin-top:8px;">Read More</a>
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
