<?php
/**
 * Default Page Template
 */
get_header();
$hero_img = get_the_post_thumbnail_url(get_the_ID(), 'hero-slide') ?: DAW_URI . '/assets/images/a-lot-of-trucks.jpg';
?>

<?php daw_breadcrumb(); ?>

<section class="page-hero page-hero--short" style="background-image:url('<?php echo esc_url($hero_img); ?>');">
    <div class="container">
        <div class="page-hero__content">
            <h1 class="page-hero__title"><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="curriculum-section" style="max-width:48rem;margin:0 auto;">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
