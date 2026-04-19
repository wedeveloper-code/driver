<?php
/**
 * Template Name: Program Page
 */
get_header();

$duration   = get_post_meta(get_the_ID(), '_program_duration', true);
$format     = get_post_meta(get_the_ID(), '_program_format', true);
$credential = get_post_meta(get_the_ID(), '_program_credential', true);
$badge1     = get_post_meta(get_the_ID(), '_program_badge_1', true);
$badge2     = get_post_meta(get_the_ID(), '_program_badge_2', true);
$salary     = get_post_meta(get_the_ID(), '_program_salary', true);
$demand     = get_post_meta(get_the_ID(), '_program_demand', true);
$placement  = get_post_meta(get_the_ID(), '_program_placement', true);

$hero_img = get_the_post_thumbnail_url(get_the_ID(), 'hero-slide') ?: DAW_URI . '/assets/images/a-lot-of-trucks.jpg';
?>

<?php daw_breadcrumb(); ?>

<section class="page-hero" style="background-image:url('<?php echo esc_url($hero_img); ?>');">
    <div class="container">
        <div class="page-hero__content">
            <?php if ($badge1 || $badge2) : ?>
                <?php if ($badge1) : ?><span class="page-hero__badge"><?php echo esc_html($badge1); ?></span><?php endif; ?>
                <?php if ($badge2) : ?><span class="page-hero__badge"><?php echo esc_html($badge2); ?></span><?php endif; ?>
            <?php endif; ?>
            <h1 class="page-hero__title"><?php the_title(); ?></h1>
            <?php if (has_excerpt()) : ?>
                <p class="page-hero__text"><?php echo esc_html(get_the_excerpt()); ?></p>
            <?php endif; ?>
            <div class="page-hero__actions">
                <a href="#enroll-form" class="btn btn--primary btn--lg"><?php esc_html_e('Enroll Now', 'drivingacademywp'); ?></a>
                <a href="#curriculum" class="btn btn--outline btn--lg"><?php esc_html_e('View Curriculum', 'drivingacademywp'); ?></a>
            </div>
        </div>
    </div>
</section>

<?php if ($duration || $format || $credential) : ?>
<section class="section--gray" style="padding:2rem 0;">
    <div class="container">
        <div class="program-stats">
            <?php if ($duration) : ?>
            <div class="program-stat">
                <div class="program-stat__value"><?php echo daw_icon('clock', '', '20'); ?></div>
                <div class="program-stat__label"><?php echo esc_html($duration); ?></div>
            </div>
            <?php endif; ?>
            <?php if ($format) : ?>
            <div class="program-stat">
                <div class="program-stat__value"><?php echo daw_icon('book', '', '20'); ?></div>
                <div class="program-stat__label"><?php echo esc_html($format); ?></div>
            </div>
            <?php endif; ?>
            <?php if ($credential) : ?>
            <div class="program-stat">
                <div class="program-stat__value"><?php echo daw_icon('award', '', '20'); ?></div>
                <div class="program-stat__label"><?php echo esc_html($credential); ?></div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="section" id="curriculum">
    <div class="container">
        <div class="program-layout">
            <div class="program-content curriculum-section">
                <?php the_content(); ?>

                <?php if ($salary || $demand || $placement) : ?>
                <h2><?php esc_html_e('Career Outlook', 'drivingacademywp'); ?></h2>
                <div class="career-grid">
                    <?php if ($salary) : ?>
                    <div class="career-item">
                        <div class="career-item__value"><?php echo esc_html($salary); ?></div>
                        <div class="career-item__label"><?php esc_html_e('Avg. Starting Salary', 'drivingacademywp'); ?></div>
                    </div>
                    <?php endif; ?>
                    <?php if ($demand) : ?>
                    <div class="career-item">
                        <div class="career-item__value"><?php echo esc_html($demand); ?></div>
                        <div class="career-item__label"><?php esc_html_e('Industry Demand', 'drivingacademywp'); ?></div>
                    </div>
                    <?php endif; ?>
                    <?php if ($placement) : ?>
                    <div class="career-item">
                        <div class="career-item__value"><?php echo esc_html($placement); ?></div>
                        <div class="career-item__label"><?php esc_html_e('Placement Support', 'drivingacademywp'); ?></div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>

            <div class="program-sidebar" id="enroll-form">
                <?php get_template_part('template-parts/cta-form', null, [
                    'title'    => 'Start Your Enrollment',
                    'subtitle' => 'Next class starts soon. Reserve your spot today.',
                ]); ?>
            </div>
        </div>
    </div>
</section>

<div class="mobile-cta hide-desktop">
    <div>
        <div class="mobile-cta__text"><?php the_title(); ?></div>
        <div class="mobile-cta__sub"><?php esc_html_e('Next class starting soon', 'drivingacademywp'); ?></div>
    </div>
    <a href="#enroll-form" class="btn btn--primary"><?php esc_html_e('Enroll Now', 'drivingacademywp'); ?></a>
</div>

<?php get_footer(); ?>
