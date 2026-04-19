<?php
/**
 * Template Name: About Page
 */
get_header();
$hero_img = get_the_post_thumbnail_url(get_the_ID(), 'hero-slide') ?: DAW_URI . '/assets/images/two-trucks.jpg';
?>

<?php daw_breadcrumb(); ?>

<section class="page-hero" style="background-image:url('<?php echo esc_url($hero_img); ?>');">
    <div class="container">
        <div class="page-hero__content">
            <span class="page-hero__badge"><?php esc_html_e('Since 1996', 'drivingacademywp'); ?></span>
            <h1 class="page-hero__title"><?php the_title(); ?></h1>
            <p class="page-hero__text"><?php esc_html_e('Producing skilled, motivated, and safe workers for the transportation, construction, and diesel industries since 1996.', 'drivingacademywp'); ?></p>
        </div>
    </div>
</section>

<!-- History & Mission -->
<section class="section">
    <div class="container">
        <div class="grid grid--2" style="align-items:center;">
            <div>
                <h2 style="font-size:1.5rem;font-weight:700;color:var(--brand-blue);margin-bottom:0.75rem;"><?php esc_html_e('Our Story', 'drivingacademywp'); ?></h2>
                <p style="color:var(--gray-600);line-height:1.8;margin-bottom:1rem;">
                    <?php esc_html_e('Tri-County Driving Academy, Inc. was established in 1996 by D. Carter McGlothlin with one goal: to provide personal, one-on-one training that prepares students for real careers. What started as a Class A CDL driving school in Lebanon, Virginia, has grown into a comprehensive career training center offering programs in commercial driving, heavy equipment operation, diesel mechanics, NCCER certification, and more.', 'drivingacademywp'); ?>
                </p>
                <p style="color:var(--gray-600);line-height:1.8;margin-bottom:1rem;">
                    <?php esc_html_e('For nearly three decades, we have maintained the highest standards for our staff and our students. The result is our graduates are some of the most accepted new operators in the industry. Companies depend on our school for quality operators who are professional, confident, and well-trained.', 'drivingacademywp'); ?>
                </p>
                <p style="color:var(--gray-600);line-height:1.8;">
                    <?php esc_html_e('We strive to produce skilled, motivated, and safe workers. Our students receive individual classroom and job-site training, handling equipment in a wide variety of situations. Give us a call so that we can get your career started today.', 'drivingacademywp'); ?>
                </p>
            </div>
            <div>
                <img src="<?php echo esc_url(DAW_URI . '/assets/images/a-lot-of-trucks.jpg'); ?>" alt="<?php esc_attr_e('Tri-County Driving Academy campus', 'drivingacademywp'); ?>" style="border-radius:var(--radius);box-shadow:var(--shadow-lg);" width="800" height="533" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Certifications & Accreditations -->
<section class="section section--gray">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('Accreditations & Certifications', 'drivingacademywp'); ?></h2>
            <p class="section__subtitle"><?php esc_html_e('Our programs meet the highest national and state standards for career training.', 'drivingacademywp'); ?></p>
        </div>
        <div class="grid grid--3">
            <?php
            $certs = [
                ['shield', 'SCHEV Certified', 'Certified by the State Council of Higher Education for Virginia (SCHEV) as an approved postsecondary educational institution.'],
                ['certificate', 'Virginia DMV Approved', 'Approved by the Virginia Department of Motor Vehicles as an official Class A CDL training provider.'],
                ['award', 'NCCER Accredited', 'Accredited training sponsor with the National Center for Construction Education and Research (NCCER), providing nationally recognized credentials.'],
                ['building', 'TN Higher Education Commission', 'Authorized for operation as a postsecondary educational institution by the Tennessee Higher Education Commission.'],
                ['graduation', 'SVCC Partnership', 'Partner with Southwest Virginia Community College (SVCC) — qualifying students may earn college credit hours toward Career Studies Diplomas.'],
                ['check', 'DOT / FMCSA Compliant', 'All training programs and equipment meet or exceed U.S. Department of Transportation and FMCSA safety standards.'],
            ];
            foreach ($certs as $c) :
            ?>
            <div class="aid-card">
                <div class="aid-card__icon"><?php echo daw_icon($c[0], '', '24'); ?></div>
                <h3 class="aid-card__title"><?php echo esc_html($c[1]); ?></h3>
                <p class="aid-card__text"><?php echo esc_html($c[2]); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- What Sets Us Apart -->
<section class="section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('What Sets Us Apart', 'drivingacademywp'); ?></h2>
        </div>
        <div class="grid grid--2">
            <?php
            $strengths = [
                ['users', 'One-on-One Instruction', 'Unlike large training mills, we provide personal, individualized instruction. Our certified instructors work closely with each student to ensure complete readiness.'],
                ['wrench', 'Hands-On Training', 'From day one, students are working with real equipment — real trucks, real excavators, real diesel engines. Theory is important, but seat time is where careers are built.'],
                ['briefcase', 'Job Placement Assistance', 'Our Career Services team provides job placement assistance in all areas of training. Recruiters visit our campus weekly, and many students receive job offers before graduation.'],
                ['heart', 'Student Support', 'Our staff is always helpful with training and lodging arrangements. We treat every student like family and our doors are always open to alumni.'],
            ];
            foreach ($strengths as $s) :
            ?>
            <div class="feature-bar__item">
                <div class="feature-bar__icon"><?php echo daw_icon($s[0], '', '20'); ?></div>
                <div>
                    <div class="feature-bar__title"><?php echo esc_html($s[1]); ?></div>
                    <div class="feature-bar__text"><?php echo esc_html($s[2]); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="section section--blue">
    <div class="container">
        <div class="stats-bar" style="padding:0;">
            <div class="stat-item">
                <div class="stat-item__value"><span data-counter="29" data-suffix="+">0</span>+</div>
                <div class="stat-item__label" style="color:rgba(255,255,255,0.7);"><?php esc_html_e('Years in Operation', 'drivingacademywp'); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-item__value"><span data-counter="8" data-suffix="">0</span></div>
                <div class="stat-item__label" style="color:rgba(255,255,255,0.7);"><?php esc_html_e('Training Programs', 'drivingacademywp'); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-item__value"><span data-counter="94" data-suffix="%">0</span>%</div>
                <div class="stat-item__label" style="color:rgba(255,255,255,0.7);"><?php esc_html_e('Job Placement Rate', 'drivingacademywp'); ?></div>
            </div>
            <div class="stat-item">
                <div class="stat-item__value"><span data-counter="6" data-suffix="">0</span></div>
                <div class="stat-item__label" style="color:rgba(255,255,255,0.7);"><?php esc_html_e('National Accreditations', 'drivingacademywp'); ?></div>
            </div>
        </div>
    </div>
</section>

<?php
$content = get_the_content();
if ($content) :
?>
<section class="section">
    <div class="container curriculum-section">
        <?php the_content(); ?>
    </div>
</section>
<?php endif; ?>

<!-- CTA -->
<section class="section section--gray text-center">
    <div class="container">
        <h2 class="section__title"><?php esc_html_e('Ready to Start Your Career?', 'drivingacademywp'); ?></h2>
        <p class="section__subtitle"><?php esc_html_e('Contact us today to learn about our programs, tour the campus, and meet our instructors.', 'drivingacademywp'); ?></p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:1.5rem;">
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn--primary btn--lg"><?php esc_html_e('Contact Us', 'drivingacademywp'); ?></a>
            <a href="<?php echo esc_url(home_url('/admissions-funding/')); ?>" class="btn btn--outline btn--lg"><?php esc_html_e('Apply Now', 'drivingacademywp'); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
