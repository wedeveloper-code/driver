<?php
/**
 * Template Name: Contact Page
 */
get_header();
$hero_img = get_the_post_thumbnail_url(get_the_ID(), 'hero-slide') ?: DAW_URI . '/assets/images/a-lot-of-trucks.jpg';
$address  = daw_get_contact('address');
$phone    = daw_get_contact('phone');
$email    = daw_get_contact('email');
$hours    = daw_get_contact('hours');
$map_url  = get_theme_mod('daw_map_embed', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3178.123!2d-82.079!3d36.898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDUzJzUzLjAiTiA4MsKwMDQnNDQuMCJX!5e0!3m2!1sen!2sus!4v1');
?>

<?php daw_breadcrumb(); ?>

<section class="page-hero" style="background-image:url('<?php echo esc_url($hero_img); ?>');">
    <div class="container">
        <div class="page-hero__content">
            <span class="page-hero__badge"><?php esc_html_e('Get In Touch', 'drivingacademywp'); ?></span>
            <h1 class="page-hero__title"><?php the_title(); ?></h1>
            <p class="page-hero__text"><?php esc_html_e('Have questions about enrollment, financial aid, or our programs? We\'re here to help you take the first step toward your new career.', 'drivingacademywp'); ?></p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="grid grid--2" style="gap:3rem;">
            <!-- Contact Info -->
            <div>
                <h2 style="font-size:1.5rem;font-weight:700;color:var(--brand-blue);margin-bottom:1.5rem;"><?php esc_html_e('Contact Information', 'drivingacademywp'); ?></h2>

                <div style="display:flex;flex-direction:column;gap:1.5rem;margin-bottom:2rem;">
                    <?php if ($address) : ?>
                    <div style="display:flex;gap:1rem;align-items:flex-start;">
                        <div style="flex-shrink:0;width:40px;height:40px;background:var(--brand-blue);color:var(--white);border-radius:var(--radius);display:flex;align-items:center;justify-content:center;">
                            <?php echo daw_icon('location', '', '20'); ?>
                        </div>
                        <div>
                            <div style="font-weight:600;margin-bottom:0.25rem;"><?php esc_html_e('Address', 'drivingacademywp'); ?></div>
                            <div style="color:var(--gray-600);"><?php echo esc_html($address); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if ($phone) : ?>
                    <div style="display:flex;gap:1rem;align-items:flex-start;">
                        <div style="flex-shrink:0;width:40px;height:40px;background:var(--brand-blue);color:var(--white);border-radius:var(--radius);display:flex;align-items:center;justify-content:center;">
                            <?php echo daw_icon('phone', '', '20'); ?>
                        </div>
                        <div>
                            <div style="font-weight:600;margin-bottom:0.25rem;"><?php esc_html_e('Phone', 'drivingacademywp'); ?></div>
                            <div style="color:var(--gray-600);"><?php daw_phone_link(); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if ($email) : ?>
                    <div style="display:flex;gap:1rem;align-items:flex-start;">
                        <div style="flex-shrink:0;width:40px;height:40px;background:var(--brand-blue);color:var(--white);border-radius:var(--radius);display:flex;align-items:center;justify-content:center;">
                            <?php echo daw_icon('envelope', '', '20'); ?>
                        </div>
                        <div>
                            <div style="font-weight:600;margin-bottom:0.25rem;"><?php esc_html_e('Email', 'drivingacademywp'); ?></div>
                            <div style="color:var(--gray-600);"><?php daw_email_link(); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if ($hours) : ?>
                    <div style="display:flex;gap:1rem;align-items:flex-start;">
                        <div style="flex-shrink:0;width:40px;height:40px;background:var(--brand-blue);color:var(--white);border-radius:var(--radius);display:flex;align-items:center;justify-content:center;">
                            <?php echo daw_icon('clock', '', '20'); ?>
                        </div>
                        <div>
                            <div style="font-weight:600;margin-bottom:0.25rem;"><?php esc_html_e('Office Hours', 'drivingacademywp'); ?></div>
                            <div style="color:var(--gray-600);"><?php echo esc_html($hours); ?></div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if ($map_url) : ?>
                <div style="border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow);">
                    <iframe src="<?php echo esc_url($map_url); ?>" width="100%" height="300" style="border:0;display:block;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php esc_attr_e('Campus Location Map', 'drivingacademywp'); ?>"></iframe>
                </div>
                <?php endif; ?>
            </div>

            <!-- Contact Form -->
            <div>
                <div class="cta-card">
                    <h2 class="cta-card__title"><?php esc_html_e('Send Us a Message', 'drivingacademywp'); ?></h2>
                    <p class="cta-card__subtitle"><?php esc_html_e('Fill out the form below and we\'ll get back to you within one business day.', 'drivingacademywp'); ?></p>

                    <form id="daw-contact-form" class="cta-form" novalidate>
                        <div class="form-group">
                            <label for="cf-name" class="form-label"><?php esc_html_e('Full Name', 'drivingacademywp'); ?> <span class="required">*</span></label>
                            <input type="text" id="cf-name" name="name" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="cf-email" class="form-label"><?php esc_html_e('Email Address', 'drivingacademywp'); ?> <span class="required">*</span></label>
                            <input type="email" id="cf-email" name="email" class="form-input" required>
                        </div>
                        <div class="form-group">
                            <label for="cf-phone" class="form-label"><?php esc_html_e('Phone Number', 'drivingacademywp'); ?></label>
                            <input type="tel" id="cf-phone" name="phone" class="form-input">
                        </div>
                        <div class="form-group">
                            <label for="cf-subject" class="form-label"><?php esc_html_e('Subject', 'drivingacademywp'); ?></label>
                            <select id="cf-subject" name="subject" class="form-input">
                                <option value=""><?php esc_html_e('Select a topic...', 'drivingacademywp'); ?></option>
                                <option value="enrollment"><?php esc_html_e('Enrollment / Admissions', 'drivingacademywp'); ?></option>
                                <option value="financial-aid"><?php esc_html_e('Financial Aid / WIOA', 'drivingacademywp'); ?></option>
                                <option value="veterans"><?php esc_html_e('Veterans Benefits', 'drivingacademywp'); ?></option>
                                <option value="programs"><?php esc_html_e('Program Information', 'drivingacademywp'); ?></option>
                                <option value="career"><?php esc_html_e('Career Placement', 'drivingacademywp'); ?></option>
                                <option value="tour"><?php esc_html_e('Schedule a Campus Tour', 'drivingacademywp'); ?></option>
                                <option value="other"><?php esc_html_e('Other', 'drivingacademywp'); ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cf-message" class="form-label"><?php esc_html_e('Message', 'drivingacademywp'); ?> <span class="required">*</span></label>
                            <textarea id="cf-message" name="message" class="form-input" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cf-captcha" class="form-label captcha-label">
                                <span id="captcha-question"><?php esc_html_e('Loading...', 'drivingacademywp'); ?></span> <span class="required">*</span>
                            </label>
                            <input type="number" id="cf-captcha" name="captcha" class="form-input" required autocomplete="off">
                            <input type="hidden" id="cf-captcha-token" name="captcha_token">
                        </div>
                        <div id="form-status" class="form-status" role="alert" aria-live="polite"></div>
                        <button type="submit" class="btn btn--primary btn--lg" style="width:100%;">
                            <?php echo daw_icon('send', '', '16'); ?>
                            <?php esc_html_e('Send Message', 'drivingacademywp'); ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = get_the_content();
if ($content) :
?>
<section class="section section--gray">
    <div class="container curriculum-section">
        <?php the_content(); ?>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
