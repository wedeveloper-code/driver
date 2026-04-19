<?php
/**
 * 404 Error Page
 */
get_header();
?>

<section class="error-page">
    <div class="container text-center">
        <div class="error-page__code">404</div>
        <h1 class="error-page__title"><?php esc_html_e('Page Not Found', 'drivingacademywp'); ?></h1>
        <p class="error-page__text"><?php esc_html_e('Sorry, the page you\'re looking for doesn\'t exist or has been moved. Let\'s get you back on track.', 'drivingacademywp'); ?></p>
        <div class="error-page__actions">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--primary btn--lg">
                <?php echo daw_icon('home', '', '16'); ?>
                <?php esc_html_e('Back to Home', 'drivingacademywp'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn--outline btn--lg">
                <?php esc_html_e('Contact Us', 'drivingacademywp'); ?>
            </a>
        </div>
        <div class="error-page__links">
            <p style="font-weight:600;margin-bottom:0.75rem;"><?php esc_html_e('Popular Pages:', 'drivingacademywp'); ?></p>
            <ul>
                <li><a href="<?php echo esc_url(home_url('/cdl-class-a-training/')); ?>"><?php esc_html_e('CDL Class A Training', 'drivingacademywp'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/heavy-equipment-training/')); ?>"><?php esc_html_e('Heavy Equipment Training', 'drivingacademywp'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/financial-aid/')); ?>"><?php esc_html_e('Financial Aid', 'drivingacademywp'); ?></a></li>
                <li><a href="<?php echo esc_url(home_url('/admissions-funding/')); ?>"><?php esc_html_e('Admissions', 'drivingacademywp'); ?></a></li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>
