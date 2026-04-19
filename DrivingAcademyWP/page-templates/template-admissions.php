<?php
/**
 * Template Name: Admissions Page
 */
get_header();
$hero_img = get_the_post_thumbnail_url(get_the_ID(), 'hero-slide') ?: DAW_URI . '/assets/images/man-studying.jpg';
?>

<?php daw_breadcrumb(); ?>

<section class="page-hero" style="background-image:url('<?php echo esc_url($hero_img); ?>');">
    <div class="container">
        <div class="page-hero__content">
            <span class="page-hero__badge"><?php esc_html_e('Start Here', 'drivingacademywp'); ?></span>
            <h1 class="page-hero__title"><?php the_title(); ?></h1>
            <p class="page-hero__text"><?php esc_html_e('Your step-by-step guide to enrolling at Tri-County Driving Academy.', 'drivingacademywp'); ?></p>
        </div>
    </div>
</section>

<nav class="sub-nav">
    <div class="container" style="display:flex;">
        <a href="<?php echo esc_url(home_url('/admissions-funding/')); ?>" class="sub-nav__link sub-nav__link--active"><?php esc_html_e('Admissions Process', 'drivingacademywp'); ?></a>
        <a href="<?php echo esc_url(home_url('/financial-aid/')); ?>" class="sub-nav__link"><?php esc_html_e('Financial Aid', 'drivingacademywp'); ?></a>
        <a href="<?php echo esc_url(home_url('/career-placement/')); ?>" class="sub-nav__link"><?php esc_html_e('Career Placement', 'drivingacademywp'); ?></a>
    </div>
</nav>

<section class="section">
    <div class="container">
        <div class="grid grid--2-1">
            <div>
                <div class="curriculum-section">
                    <?php the_content(); ?>
                </div>

                <h2 style="font-size:1.5rem;font-weight:700;color:var(--brand-blue);margin-bottom:1.5rem;"><?php esc_html_e('How to Enroll', 'drivingacademywp'); ?></h2>
                <div class="timeline">
                    <?php
                    $steps = [
                        ['Get Your Learner\'s Permit', 'Visit your local DMV to obtain a CDL Learner\'s Permit. We\'ll guide you through the written test preparation.'],
                        ['Pass DOT Physical Exam', 'Complete a DOT-approved physical examination and drug screening.'],
                        ['Submit Your Application', 'Fill out our enrollment application online or in person at our Lebanon, VA campus.'],
                        ['Secure Funding', 'Meet with our Financial Aid office to explore WIOA grants, VA benefits, or payment plans.'],
                        ['Start Training', 'Attend orientation and begin your hands-on training program!'],
                    ];
                    foreach ($steps as $step) :
                    ?>
                    <div class="timeline__step">
                        <div class="timeline__dot"></div>
                        <div class="timeline__title"><?php echo esc_html($step[0]); ?></div>
                        <div class="timeline__text"><?php echo esc_html($step[1]); ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div>
                <?php get_template_part('template-parts/cta-form', null, [
                    'title'    => 'Apply Now',
                    'subtitle' => 'Get started on your new career today.',
                ]); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
