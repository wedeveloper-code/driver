<?php
/**
 * Template Name: Job Placement Page
 */
get_header();
$hero_img = get_the_post_thumbnail_url(get_the_ID(), 'hero-slide') ?: DAW_URI . '/assets/images/a-lot-of-trucks.jpg';
?>

<?php daw_breadcrumb(); ?>

<section class="page-hero" style="background-image:url('<?php echo esc_url($hero_img); ?>');">
    <div class="container">
        <div class="page-hero__content">
            <span class="page-hero__badge"><?php esc_html_e('Your CDL is just the beginning', 'drivingacademywp'); ?></span>
            <h1 class="page-hero__title"><?php esc_html_e('We Don\'t Just Train You. We Get You Hired.', 'drivingacademywp'); ?></h1>
            <p class="page-hero__text"><?php esc_html_e('With an ongoing nationwide shortage of qualified drivers, your skills are in high demand. Our Career Services team works with top carriers to transition you into a high-paying career.', 'drivingacademywp'); ?></p>
            <div class="page-hero__actions">
                <a href="#partners" class="btn btn--primary btn--lg"><?php esc_html_e('See Hiring Partners', 'drivingacademywp'); ?></a>
                <a href="#how-it-works" class="btn btn--outline btn--lg"><?php esc_html_e('How It Works', 'drivingacademywp'); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="section section--blue">
    <div class="container">
        <div class="stats-bar" style="padding:0;">
            <div class="stat-item">
                <div class="stat-item__value"><span data-counter="94" data-suffix="%">0</span>%</div>
                <div class="stat-item__label" style="color:rgba(255,255,255,0.7);"><?php esc_html_e('Placement Rate', 'drivingacademywp'); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-item__value"><span data-counter="30" data-suffix="+">0</span>+</div>
                <div class="stat-item__label" style="color:rgba(255,255,255,0.7);"><?php esc_html_e('National & Local Partners', 'drivingacademywp'); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-item__value">$55k-$75k</div>
                <div class="stat-item__label" style="color:rgba(255,255,255,0.7);"><?php esc_html_e('Avg. First-Year Earnings', 'drivingacademywp'); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Hiring Partners -->
<section class="section" id="partners">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('Top Companies Hire Our Graduates', 'drivingacademywp'); ?></h2>
            <p class="section__subtitle"><?php esc_html_e('Recruiters from the nation\'s leading transportation, logging, and construction companies visit our campus regularly.', 'drivingacademywp'); ?></p>
        </div>
        <div class="partner-grid">
            <?php
            $partners = ['WERNER', 'SWIFT', 'SCHNEIDER', 'TMC Transportation', 'Local Construction Co.', 'STEVENS', 'MAVERICK', 'Appalachian Logging'];
            foreach ($partners as $p) :
            ?>
            <div class="partner-logo"><?php echo esc_html($p); ?></div>
            <?php endforeach; ?>
        </div>
        <p class="text-center mt-2" style="font-size:0.8125rem;color:var(--gray-600);">
            <?php esc_html_e('This is just a sample. Local, Regional, and OTR routes are available.', 'drivingacademywp'); ?>
        </p>
    </div>
</section>

<!-- How We Support -->
<section class="section section--gray" id="how-it-works">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('How We Support Your Job Search', 'drivingacademywp'); ?></h2>
            <p class="section__subtitle"><?php esc_html_e('Once you graduate, you are part of the family. Our doors are always open to alumni.', 'drivingacademywp'); ?></p>
        </div>
        <div class="process-steps">
            <?php
            $steps = [
                ['Pre-Hire Letters', 'We help you submit applications before you even start training. Many companies offer conditional job offers so you have peace of mind.'],
                ['Resume & Application Building', 'Trucking applications require specific details. We assist you in building a professional driver\'s resume and DOT-compliant applications.'],
                ['On-Site Recruiter Visits', 'Every week, recruiters visit our classrooms. You can hear presentations, ask questions, and conduct face-to-face interviews.'],
                ['Interview Prep & Evaluation', 'We conduct mock interviews to prepare you for questions about safety protocols, logbooks, and road scenarios.'],
            ];
            foreach ($steps as $i => $s) :
            ?>
            <div class="process-step">
                <div class="process-step__number"><?php echo $i + 1; ?></div>
                <h3 class="process-step__title"><?php echo esc_html($s[0]); ?></h3>
                <p class="process-step__text"><?php echo esc_html($s[1]); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonial -->
<section class="section section--blue">
    <div class="container text-center" style="max-width:48rem;">
        <div style="font-size:1.125rem;color:rgba(255,255,255,0.9);line-height:1.8;font-style:italic;margin-bottom:1.5rem;">
            &ldquo;<?php esc_html_e('I was nervous about finding a job because I had zero experience. The career services team had me sitting down with three different recruiters during my second week of class. By the time I took my final CDL test, I already knew exactly what day my orientation started at my new company.', 'drivingacademywp'); ?>&rdquo;
        </div>
        <div style="font-weight:700;"><?php esc_html_e('Michael T.', 'drivingacademywp'); ?></div>
        <div style="font-size:0.875rem;color:rgba(255,255,255,0.6);"><?php esc_html_e('Class of 2023 • Now driving Regional', 'drivingacademywp'); ?></div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('Ready to Get Hired?', 'drivingacademywp'); ?></h2>
            <p class="section__subtitle"><?php esc_html_e('The first step to your new career is getting your CDL. Fill out the form to speak with our admissions team.', 'drivingacademywp'); ?></p>
        </div>
        <div style="max-width:36rem;margin:0 auto;">
            <?php get_template_part('template-parts/cta-form', null, [
                'title'    => 'Apply Today',
                'subtitle' => 'Tell us about your career goals.',
            ]); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
