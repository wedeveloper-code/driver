<?php
/**
 * Blog Archive / News Page
 */
get_header();
?>

<?php daw_breadcrumb(); ?>

<section class="page-hero page-hero--short" style="background-image:url('<?php echo esc_url(DAW_URI . '/assets/images/a-lot-of-trucks.jpg'); ?>');">
    <div class="container">
        <div class="page-hero__content">
            <h1 class="page-hero__title"><?php esc_html_e('News & Updates', 'drivingacademywp'); ?></h1>
            <p class="page-hero__text"><?php esc_html_e('Stay up to date with the latest from Tri-County Driving Academy.', 'drivingacademywp'); ?></p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php if (have_posts()) : ?>
        <div class="blog-layout">
            <div class="blog-posts">
                <div class="grid grid--2">
                    <?php while (have_posts()) : the_post(); ?>
                    <article class="post-card">
                        <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="post-card__image">
                            <?php the_post_thumbnail('program-card', ['loading' => 'lazy']); ?>
                        </a>
                        <?php endif; ?>
                        <div class="post-card__body">
                            <div class="post-card__meta">
                                <?php daw_posted_on(); ?>
                            </div>
                            <h2 class="post-card__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="post-card__excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 25)); ?></p>
                            <a href="<?php the_permalink(); ?>" class="post-card__link">
                                <?php esc_html_e('Read More', 'drivingacademywp'); ?>
                                <?php echo daw_icon('arrow-right', '', '14'); ?>
                            </a>
                        </div>
                    </article>
                    <?php endwhile; ?>
                </div>

                <?php
                the_posts_pagination([
                    'mid_size'  => 2,
                    'prev_text' => '&laquo; ' . esc_html__('Previous', 'drivingacademywp'),
                    'next_text' => esc_html__('Next', 'drivingacademywp') . ' &raquo;',
                ]);
                ?>
            </div>

            <?php get_sidebar(); ?>
        </div>
        <?php else : ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
