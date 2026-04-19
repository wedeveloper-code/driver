<?php get_header(); ?>

<?php get_template_part('template-parts/hero'); ?>

<?php get_template_part('template-parts/trust-bar'); ?>

<!-- Core Programs -->
<section class="section" id="programs">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('Launch Your Career Today', 'drivingacademywp'); ?></h2>
            <p class="section__subtitle"><?php esc_html_e('Choose from our industry-certified training programs designed to get you working fast.', 'drivingacademywp'); ?></p>
        </div>
        <div class="grid grid--3">
            <?php
            $programs = new WP_Query([
                'post_type'      => 'page',
                'posts_per_page' => 5,
                'meta_key'       => '_wp_page_template',
                'meta_value'     => 'page-templates/template-program.php',
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);
            if ($programs->have_posts()) :
                while ($programs->have_posts()) : $programs->the_post();
                    get_template_part('template-parts/program-card');
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            <div class="promo-card">
                <h3 class="promo-card__title"><?php esc_html_e('Not Sure Where to Start?', 'drivingacademywp'); ?></h3>
                <p class="promo-card__text"><?php esc_html_e('Talk to our admissions team to find the perfect career path for you.', 'drivingacademywp'); ?></p>
                <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn--primary"><?php esc_html_e('Contact Us', 'drivingacademywp'); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Funding & Grants -->
<section class="section section--gray" id="funding">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e("Don't Let Cost Stop You From a Great Career", 'drivingacademywp'); ?></h2>
            <p class="section__subtitle"><?php esc_html_e('We believe everyone deserves a chance to build a solid career. We offer multiple funding options to ensure tuition isn\'t a barrier.', 'drivingacademywp'); ?></p>
        </div>
        <div class="funding-grid">
            <div class="funding-item">
                <div class="funding-item__icon"><?php echo daw_icon('building', '', '20'); ?></div>
                <div>
                    <div class="funding-item__title"><?php esc_html_e('WIOA Grants', 'drivingacademywp'); ?></div>
                    <div class="funding-item__text"><?php esc_html_e('We are a WIOA approved training provider. You may qualify for full tuition coverage.', 'drivingacademywp'); ?></div>
                </div>
            </div>
            <div class="funding-item">
                <div class="funding-item__icon"><?php echo daw_icon('shield', '', '20'); ?></div>
                <div>
                    <div class="funding-item__title"><?php esc_html_e('Veterans Assistance', 'drivingacademywp'); ?></div>
                    <div class="funding-item__text"><?php esc_html_e('Proudly accepting GI Bill&reg; and other military educational benefits.', 'drivingacademywp'); ?></div>
                </div>
            </div>
            <div class="funding-item">
                <div class="funding-item__icon"><?php echo daw_icon('dollar', '', '20'); ?></div>
                <div>
                    <div class="funding-item__title"><?php esc_html_e('Flexible Payment Plans', 'drivingacademywp'); ?></div>
                    <div class="funding-item__text"><?php esc_html_e('Affordable weekly/monthly installment plans available for out-of-pocket students.', 'drivingacademywp'); ?></div>
                </div>
            </div>
        </div>
        <div class="funding-highlight">
            <div class="funding-highlight__value"><?php esc_html_e('100%', 'drivingacademywp'); ?></div>
            <div class="funding-highlight__label"><?php esc_html_e('Tuition Covered for Eligible Students', 'drivingacademywp'); ?></div>
        </div>
        <div class="text-center mt-4">
            <a href="<?php echo esc_url(home_url('/financial-aid/')); ?>" class="btn btn--secondary"><?php esc_html_e('Explore Financial Aid Options', 'drivingacademywp'); ?></a>
        </div>
    </div>
</section>

<!-- Career Placement -->
<section class="section section--dark" id="placement">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('Graduate on Friday. Start Working on Monday.', 'drivingacademywp'); ?></h2>
            <p class="section__subtitle"><?php esc_html_e('Our job doesn\'t end when you get your certificate. We have strong partnerships with employers actively looking to hire our graduates.', 'drivingacademywp'); ?></p>
        </div>
        <div class="stats-bar" style="padding:0;">
            <?php for ($i = 1; $i <= 4; $i++) :
                $value  = get_theme_mod("daw_stat_{$i}_value", ['95', '50', '65', '29'][$i - 1]);
                $suffix = get_theme_mod("daw_stat_{$i}_suffix", ['%', '+', 'k+', '+'][$i - 1]);
                $label  = get_theme_mod("daw_stat_{$i}_label", ['Placement Rate', 'Hiring Partners', 'Avg Starting Salary', 'Years in Business'][$i - 1]);
            ?>
            <div class="stat-item">
                <div class="stat-item__value">
                    <span data-counter="<?php echo esc_attr($value); ?>" data-suffix="<?php echo esc_attr($suffix); ?>">0</span><?php echo esc_html($suffix); ?>
                </div>
                <div class="stat-item__label"><?php echo esc_html($label); ?></div>
            </div>
            <?php endfor; ?>
        </div>
        <div class="text-center mt-4">
            <a href="<?php echo esc_url(home_url('/career-placement/')); ?>" class="btn btn--primary"><?php esc_html_e('Learn About Job Placement', 'drivingacademywp'); ?></a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="section" id="testimonials">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('What Our Graduates Say', 'drivingacademywp'); ?></h2>
        </div>
        <div class="testimonial-grid">
            <?php
            $testimonials = [
                [
                    'name'  => 'Michael R.',
                    'role'  => 'CDL Graduate',
                    'quote' => 'The instructors here are top-notch. They had infinite patience and taught me exactly what I needed to pass my DMV test on the first try. I got hired by a regional carrier the day after I graduated!',
                    'image' => DAW_URI . '/assets/images/man-studying.jpg',
                ],
                [
                    'name'  => 'Sarah J.',
                    'role'  => 'Heavy Equipment Operator',
                    'quote' => 'I was worried about changing careers at 35, but the WIOA grant covered my tuition, and the hands-on time with the excavators was incredible. I\'m making double what I used to make.',
                    'image' => '',
                ],
                [
                    'name'  => 'David M.',
                    'role'  => 'Diesel Mechanic Alum',
                    'quote' => 'Real engines, real tools, real problems to solve. The diesel program at Tri-County doesn\'t just teach you theory; it gets your hands dirty. Highly recommend to anyone wanting a solid trade.',
                    'image' => '',
                ],
            ];
            foreach ($testimonials as $t) :
                get_template_part('template-parts/testimonial', null, $t);
            endforeach;
            ?>
        </div>
    </div>
</section>

<!-- Contact / Lead Capture -->
<section class="section section--gray" id="contact">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('Still Have Questions?', 'drivingacademywp'); ?></h2>
            <p class="section__subtitle"><?php esc_html_e('Fill out the form below and our admissions team will get back to you within 24 hours.', 'drivingacademywp'); ?></p>
        </div>
        <div class="contact-section">
            <div>
                <?php get_template_part('template-parts/cta-form', null, [
                    'title'    => 'Get in Touch',
                    'subtitle' => 'We\'d love to hear from you. Fill out the form to get started.',
                ]); ?>
            </div>
            <div class="map-container">
                <?php
                $map_url = get_theme_mod('daw_map_embed', '');
                if ($map_url) :
                ?>
                    <iframe src="<?php echo esc_url($map_url); ?>" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?php esc_attr_e('Our Location', 'drivingacademywp'); ?>"></iframe>
                <?php else : ?>
                    <div style="display:flex;align-items:center;justify-content:center;height:100%;background:var(--gray-100);color:var(--gray-600);padding:2rem;text-align:center;">
                        <p><?php esc_html_e('Google Maps embed will appear here. Set the embed URL in Customizer > Contact Info.', 'drivingacademywp'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
