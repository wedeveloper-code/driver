<?php
/**
 * Template Name: Our News
 */
get_header();
get_template_part('template-parts/content', 'page-banner');
?>

<div class="container">
  <div class="content-area" style="padding:50px 0;">
    <main id="main-content">
      <?php
      $news_query = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 10,
        'post_status'    => 'publish',
      ]);

      if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('mb-3'); ?>
                   style="padding-bottom:28px;margin-bottom:28px;border-bottom:1px solid #eee;">
            <h2 style="font-size:1.35rem;margin-bottom:4px;">
              <a href="<?php the_permalink(); ?>" style="color:#1a1a2e;"><?php the_title(); ?></a>
            </h2>
            <p style="font-size:.82rem;color:#999;margin-bottom:12px;">
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
        <?php endwhile;
        wp_reset_postdata();

        // Pagination
        $big = 999999999;
        echo paginate_links([
          'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
          'format'  => '?paged=%#%',
          'current' => max(1, get_query_var('paged')),
          'total'   => $news_query->max_num_pages,
        ]);

      else : ?>
        <p>No news posts yet. <a href="<?php echo esc_url(admin_url('post-new.php')); ?>">Add the first post</a>.</p>
      <?php endif; ?>
    </main>

    <?php get_template_part('template-parts/sidebar', 'courses'); ?>
  </div>
</div>

<?php get_footer(); ?>
