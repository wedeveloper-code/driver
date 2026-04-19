<?php
/**
 * Template Name: Financial Aid Page
 */
get_header();
$hero_img = get_the_post_thumbnail_url(get_the_ID(), 'hero-slide') ?: DAW_URI . '/assets/images/man-studying.jpg';
?>

<?php daw_breadcrumb(); ?>

<section class="page-hero" style="background-image:url('<?php echo esc_url($hero_img); ?>');">
    <div class="container">
        <div class="page-hero__content">
            <span class="page-hero__badge"><?php esc_html_e('Invest in Your Future', 'drivingacademywp'); ?></span>
            <h1 class="page-hero__title"><?php the_title(); ?></h1>
            <p class="page-hero__text"><?php esc_html_e('Don\'t let the cost of tuition stand in the way of your new career. We offer multiple financial assistance programs, state grants, and flexible payment plans.', 'drivingacademywp'); ?></p>
        </div>
    </div>
</section>

<nav class="sub-nav">
    <div class="container" style="display:flex;">
        <a href="<?php echo esc_url(home_url('/admissions-funding/')); ?>" class="sub-nav__link"><?php esc_html_e('Admissions Process', 'drivingacademywp'); ?></a>
        <a href="<?php echo esc_url(home_url('/financial-aid/')); ?>" class="sub-nav__link sub-nav__link--active"><?php esc_html_e('Financial Aid', 'drivingacademywp'); ?></a>
        <a href="<?php echo esc_url(home_url('/career-placement/')); ?>" class="sub-nav__link"><?php esc_html_e('Career Placement', 'drivingacademywp'); ?></a>
    </div>
</nav>

<!-- WIOA Section -->
<section class="section">
    <div class="container">
        <div class="grid grid--2" style="align-items:center;">
            <div>
                <div class="aid-card__icon" style="margin-bottom:1rem;"><?php echo daw_icon('building', '', '24'); ?></div>
                <h2 style="font-size:1.5rem;font-weight:700;color:var(--brand-blue);margin-bottom:0.75rem;"><?php esc_html_e('State Grants (WIOA)', 'drivingacademywp'); ?></h2>
                <p style="color:var(--gray-600);line-height:1.7;margin-bottom:1rem;"><?php esc_html_e('The Workforce Innovation and Opportunity Act (WIOA) is a federal program that provides funding for individuals who need training to enter or re-enter the workforce. If you qualify, WIOA can cover up to 100% of your CDL training tuition.', 'drivingacademywp'); ?></p>
                <h3 style="font-weight:600;margin-bottom:0.5rem;"><?php esc_html_e('Who may qualify?', 'drivingacademywp'); ?></h3>
                <ul class="curriculum-section" style="margin-bottom:0;">
                    <li><?php esc_html_e('Dislocated workers (recently laid off or receiving unemployment)', 'drivingacademywp'); ?></li>
                    <li><?php esc_html_e('Low-income individuals looking to improve their earning potential', 'drivingacademywp'); ?></li>
                    <li><?php esc_html_e('Underemployed individuals currently working part-time', 'drivingacademywp'); ?></li>
                </ul>
            </div>
            <div>
                <img src="<?php echo esc_url(DAW_URI . '/assets/images/man-studying.jpg'); ?>" alt="WIOA financial aid" style="border-radius:var(--radius);box-shadow:var(--shadow-lg);" width="800" height="533" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Veterans Benefits -->
<section class="section section--dark">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('Military & Veterans Benefits', 'drivingacademywp'); ?></h2>
            <p class="section__subtitle"><?php esc_html_e('We are approved to accept various VA educational benefits for our commercial driving programs.', 'drivingacademywp'); ?></p>
        </div>
        <div class="grid grid--3">
            <?php
            $va_benefits = [
                ['Post-9/11 GI Bill®', 'Eligible veterans can use Chapter 33 benefits to cover the cost of tuition, and may also qualify for a monthly housing allowance.'],
                ['VR&E (Chapter 31)', 'The Veteran Readiness and Employment program provides services to eligible service members with service-connected disabilities.'],
                ['Montgomery GI Bill®', 'Active Duty (Chapter 30) and Selected Reserve (Chapter 1606) benefits can be applied toward our CDL training programs.'],
            ];
            foreach ($va_benefits as $b) :
            ?>
            <div class="aid-card" style="background:rgba(255,255,255,0.05);border-color:rgba(255,255,255,0.1);">
                <div class="aid-card__icon" style="background:rgba(245,158,11,0.2);color:var(--brand-accent);"><?php echo daw_icon('shield', '', '24'); ?></div>
                <h3 class="aid-card__title" style="color:var(--white);"><?php echo esc_html($b[0]); ?></h3>
                <p class="aid-card__text" style="color:rgba(255,255,255,0.7);"><?php echo esc_html($b[1]); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <p style="text-align:center;font-size:0.75rem;color:rgba(255,255,255,0.5);margin-top:1.5rem;">
            <?php echo wp_kses_post('GI Bill® is a registered trademark of the U.S. Department of Veterans Affairs (VA). More information at <a href="https://www.benefits.va.gov/gibill" target="_blank" rel="noopener noreferrer" style="color:var(--brand-accent);">www.benefits.va.gov/gibill</a>.'); ?>
        </p>
    </div>
</section>

<!-- Alternative Financing -->
<section class="section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('Alternative Financing Options', 'drivingacademywp'); ?></h2>
        </div>
        <div class="grid grid--3">
            <?php
            $options = [
                ['In-House Payment Plans', 'Pay as you go! We offer interest-free, short-term installment plans directly through the school.', ['Requires an initial down payment', 'Weekly payments during training', 'Zero interest charges', 'No credit check required'], false],
                ['Partner Lenders', 'We partner with leading financial institutions that specialize in career training and trade school loans.', ['Fixed or variable interest rates', 'Options to defer payments until after graduation', 'Co-signer options available'], false],
                ['Employer Tuition Reimbursement', 'Many major trucking companies offer tuition reimbursement programs (up to $7,000+) as a sign-on incentive.', ['You pay upfront or via loan', 'Employer pays you back monthly', 'On top of your regular paycheck'], true],
            ];
            foreach ($options as $o) :
            ?>
            <div class="aid-card<?php echo $o[3] ? ' aid-card--featured' : ''; ?>">
                <?php if ($o[3]) : ?><div class="aid-card__badge"><?php esc_html_e('Most Popular Route', 'drivingacademywp'); ?></div><?php endif; ?>
                <h3 class="aid-card__title"><?php echo esc_html($o[0]); ?></h3>
                <p class="aid-card__text"><?php echo esc_html($o[1]); ?></p>
                <ul class="aid-card__list">
                    <?php foreach ($o[2] as $item) : ?>
                        <li><?php echo esc_html($item); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section section--gray">
    <div class="container">
        <div class="grid grid--2" style="align-items:center;">
            <div class="text-center" style="text-align:left;">
                <h2 style="font-size:1.5rem;font-weight:700;color:var(--brand-blue);margin-bottom:0.5rem;"><?php esc_html_e('Not sure what you qualify for?', 'drivingacademywp'); ?></h2>
                <p style="color:var(--gray-600);margin-bottom:1rem;"><?php esc_html_e('Our Financial Aid Advisor will review your profile and contact you with your best funding options.', 'drivingacademywp'); ?></p>
                <p style="font-size:0.875rem;color:var(--gray-600);"><?php esc_html_e('Or call us now:', 'drivingacademywp'); ?> <strong><?php daw_phone_link(); ?></strong></p>
            </div>
            <div>
                <?php get_template_part('template-parts/cta-form', null, [
                    'title'        => 'Financial Aid Consultation',
                    'subtitle'     => 'Fill out the form and we\'ll help you find funding.',
                    'show_program' => false,
                ]); ?>
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

<?php get_footer(); ?>
