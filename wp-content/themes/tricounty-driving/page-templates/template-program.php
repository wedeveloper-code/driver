<?php
/**
 * Template Name: Program / Course Detail
 * Description: Single training program detail page.
 */
get_header();
get_template_part('template-parts/content', 'page-banner');
?>

<div class="container">
  <div class="content-area">
    <main id="main-content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
        $price  = get_post_meta(get_the_ID(), '_program_price', true);
        $length = get_post_meta(get_the_ID(), '_program_length', true);
        $start  = get_post_meta(get_the_ID(), '_program_schedule', true);
        ?>

        <?php if ($price || $length || $start) : ?>
        <div class="program-meta">
          <?php if ($price)  : ?><div class="program-meta-item"><strong>Price:</strong> <?php echo esc_html($price); ?></div><?php endif; ?>
          <?php if ($length) : ?><div class="program-meta-item"><strong>Program Length:</strong> <?php echo esc_html($length); ?></div><?php endif; ?>
          <?php if ($start)  : ?><div class="program-meta-item"><strong>Schedule:</strong> <?php echo esc_html($start); ?></div><?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="entry-content">
          <?php the_content(); ?>
        </div>

        <div class="mt-3" style="display:flex;gap:12px;flex-wrap:wrap;">
          <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-primary">Enroll / Inquire</a>
          <a href="<?php echo esc_url(home_url('/courses/')); ?>" class="btn btn-outline" style="border-color:#1a1a2e;color:#1a1a2e;">&larr; All Programs</a>
        </div>

      <?php endwhile; endif; ?>
    </main>

    <?php get_template_part('template-parts/sidebar', 'courses'); ?>
  </div>
</div>

<?php get_footer(); ?>
