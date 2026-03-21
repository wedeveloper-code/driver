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
        // Support both old keys (from XML import) and new keys (from admin meta box)
        $price  = get_post_meta(get_the_ID(), '_program_tuition', true)
               ?: get_post_meta(get_the_ID(), '_program_price', true);
        $length = get_post_meta(get_the_ID(), '_program_duration', true)
               ?: get_post_meta(get_the_ID(), '_program_length', true);
        $start  = get_post_meta(get_the_ID(), '_program_schedule', true);
        $salary = get_post_meta(get_the_ID(), '_program_salary_range', true);
        ?>

        <?php if ($price || $length || $start || $salary) : ?>
        <div class="program-meta">
          <?php if ($price)  : ?><div class="program-meta-item"><strong>Tuition:</strong> <?php echo esc_html($price); ?></div><?php endif; ?>
          <?php if ($length) : ?><div class="program-meta-item"><strong>Duration:</strong> <?php echo esc_html($length); ?></div><?php endif; ?>
          <?php if ($salary) : ?><div class="program-meta-item"><strong>Salary:</strong> <?php echo esc_html($salary); ?></div><?php endif; ?>
          <?php if ($start)  : ?><div class="program-meta-item"><strong>Schedule:</strong> <?php echo esc_html($start); ?></div><?php endif; ?>
        </div>
        <?php endif; ?>

        <div class="entry-content">
          <?php the_content(); ?>
        </div>

        <div class="mt-3" style="display:flex;gap:12px;flex-wrap:wrap;">
          <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn-primary">Enroll / Inquire</a>
          <a href="<?php echo esc_url(home_url('/training-programs/')); ?>" class="btn btn-outline" style="border-color:#1a1a2e;color:#1a1a2e;">&larr; All Programs</a>
        </div>

      <?php endwhile; endif; ?>
    </main>

    <?php get_template_part('template-parts/sidebar', 'courses'); ?>
  </div>
</div>

<?php get_footer(); ?>
