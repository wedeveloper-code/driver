<?php
/**
 * Template Name: FAQ Page
 */
get_header();
$hero_img = get_the_post_thumbnail_url(get_the_ID(), 'hero-slide') ?: DAW_URI . '/assets/images/man-studying.jpg';
?>

<?php daw_breadcrumb(); ?>

<section class="page-hero" style="background-image:url('<?php echo esc_url($hero_img); ?>');">
    <div class="container">
        <div class="page-hero__content">
            <span class="page-hero__badge"><?php esc_html_e('Got Questions?', 'drivingacademywp'); ?></span>
            <h1 class="page-hero__title"><?php esc_html_e('Frequently Asked Questions', 'drivingacademywp'); ?></h1>
            <p class="page-hero__text"><?php esc_html_e('Find answers to the most common questions about our CDL training, heavy equipment programs, admissions, and financial aid options.', 'drivingacademywp'); ?></p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width:48rem;">

        <!-- General -->
        <h2 class="faq-category"><?php esc_html_e('General Questions', 'drivingacademywp'); ?></h2>
        <div class="faq-group">
            <?php
            $general = [
                ['Where are you located?', 'We are located in Lebanon, Virginia. Our campus includes a driving range, heavy equipment yard, and a fully equipped diesel mechanics shop.'],
                ['Do I need any prior experience?', 'No prior experience is required. Our programs are designed for beginners, and our instructors will guide you through every step of training.'],
                ['Are your programs accredited?', 'Yes. We are licensed by the Virginia Department of Education and approved by the Virginia DMV as a Class A CDL training provider. We are also a certified NCCER training facility.'],
                ['What are your class hours?', 'Our CDL program runs Monday through Friday, typically 7:00 AM to 5:00 PM. Heavy Equipment and Diesel programs may have different schedules — contact us for details.'],
            ];
            foreach ($general as $faq) :
            ?>
            <details class="faq-item">
                <summary class="faq-item__question">
                    <?php echo esc_html($faq[0]); ?>
                    <span class="faq-item__icon"><?php echo daw_icon('plus', '', '16'); ?></span>
                </summary>
                <div class="faq-item__answer"><p><?php echo esc_html($faq[1]); ?></p></div>
            </details>
            <?php endforeach; ?>
        </div>

        <!-- CDL Training -->
        <h2 class="faq-category"><?php esc_html_e('CDL Training', 'drivingacademywp'); ?></h2>
        <div class="faq-group">
            <?php
            $cdl = [
                ['How long is the CDL Class A program?', 'Our CDL Class A program is 160 hours (approximately 4 weeks of full-time training). This includes classroom instruction, driving range practice, and on-road training.'],
                ['Do I need a CDL learner\'s permit before I start?', 'Yes. You must obtain a CDL Learner\'s Permit from the Virginia DMV before beginning behind-the-wheel training. We can help you study for the written permit exam.'],
                ['Will I get an automatic restriction on my CDL?', 'No. We train on both 10-speed manual transmissions and automatic (AMT) trucks. By training on a manual, you graduate with a full, unrestricted Class A CDL — no "E" restriction.'],
                ['What does the CDL road test involve?', 'The CDL skills test has three parts: a pre-trip vehicle inspection, a basic vehicle control test (backing maneuvers on a course), and an on-road driving test.'],
                ['Do you provide job placement after graduation?', 'Yes! Our Career Services team actively works with 30+ hiring partners. We have a 94% job placement rate. Many students receive conditional job offers before they even graduate.'],
            ];
            foreach ($cdl as $faq) :
            ?>
            <details class="faq-item">
                <summary class="faq-item__question">
                    <?php echo esc_html($faq[0]); ?>
                    <span class="faq-item__icon"><?php echo daw_icon('plus', '', '16'); ?></span>
                </summary>
                <div class="faq-item__answer"><p><?php echo esc_html($faq[1]); ?></p></div>
            </details>
            <?php endforeach; ?>
        </div>

        <!-- Heavy Equipment -->
        <h2 class="faq-category"><?php esc_html_e('Heavy Equipment Training', 'drivingacademywp'); ?></h2>
        <div class="faq-group">
            <?php
            $heavy = [
                ['What equipment will I learn to operate?', 'You will train on track excavators (CAT 320 & Komatsu PC210), wheel loaders (John Deere 544L), and bulldozers (CAT D6N). Training includes real-world earthmoving scenarios.'],
                ['Do I need a special license to operate heavy equipment?', 'Heavy equipment operation does not require a state-issued license like a CDL. However, employers require proper training and certification, which our program provides.'],
                ['Can I combine heavy equipment training with CDL?', 'Yes. Many students complete both programs to maximize their job opportunities. Ask about our combination program discounts.'],
            ];
            foreach ($heavy as $faq) :
            ?>
            <details class="faq-item">
                <summary class="faq-item__question">
                    <?php echo esc_html($faq[0]); ?>
                    <span class="faq-item__icon"><?php echo daw_icon('plus', '', '16'); ?></span>
                </summary>
                <div class="faq-item__answer"><p><?php echo esc_html($faq[1]); ?></p></div>
            </details>
            <?php endforeach; ?>
        </div>

        <!-- Financial Aid -->
        <h2 class="faq-category"><?php esc_html_e('Financial Aid & Tuition', 'drivingacademywp'); ?></h2>
        <div class="faq-group">
            <?php
            $financial = [
                ['How much does training cost?', 'Tuition varies by program. Contact our admissions office for current pricing. We offer multiple financing options to make training affordable.'],
                ['What is WIOA and do I qualify?', 'The Workforce Innovation and Opportunity Act (WIOA) is a federal program that can cover up to 100% of your tuition. You may qualify if you are unemployed, underemployed, a dislocated worker, or meet low-income guidelines. Contact your local workforce development office to apply.'],
                ['Do you accept VA / GI Bill® benefits?', 'Yes. We are approved to accept Post-9/11 GI Bill® (Chapter 33), VR&E (Chapter 31), and Montgomery GI Bill® (Chapter 30 & 1606) benefits.'],
                ['Do you offer payment plans?', 'Yes. We offer interest-free, in-house payment plans with no credit check required. You make weekly payments during training after an initial down payment.'],
                ['Will my employer reimburse tuition?', 'Many large trucking companies offer tuition reimbursement programs ($5,000 – $7,000+) as part of their sign-on packages. Our Career Services team can connect you with these employers.'],
            ];
            foreach ($financial as $faq) :
            ?>
            <details class="faq-item">
                <summary class="faq-item__question">
                    <?php echo esc_html($faq[0]); ?>
                    <span class="faq-item__icon"><?php echo daw_icon('plus', '', '16'); ?></span>
                </summary>
                <div class="faq-item__answer"><p><?php echo esc_html($faq[1]); ?></p></div>
            </details>
            <?php endforeach; ?>
        </div>

        <!-- Admissions -->
        <h2 class="faq-category"><?php esc_html_e('Admissions & Requirements', 'drivingacademywp'); ?></h2>
        <div class="faq-group">
            <?php
            $admissions = [
                ['What are the requirements to enroll?', 'For CDL training: you must be at least 18 years old (21 for interstate driving), hold a valid driver\'s license, pass a DOT physical and drug screening, and obtain a CDL Learner\'s Permit.'],
                ['Do I need a high school diploma?', 'A high school diploma or GED is not required for CDL training. However, you must be able to read and speak English sufficiently to communicate with the public and understand highway signs.'],
                ['How do I get a DOT physical?', 'A DOT physical must be performed by a certified medical examiner listed on the FMCSA National Registry. We can recommend providers in the area.'],
                ['When does the next class start?', 'We offer rolling enrollment, so new classes start frequently. Contact our admissions office for the next available start date.'],
            ];
            foreach ($admissions as $faq) :
            ?>
            <details class="faq-item">
                <summary class="faq-item__question">
                    <?php echo esc_html($faq[0]); ?>
                    <span class="faq-item__icon"><?php echo daw_icon('plus', '', '16'); ?></span>
                </summary>
                <div class="faq-item__answer"><p><?php echo esc_html($faq[1]); ?></p></div>
            </details>
            <?php endforeach; ?>
        </div>

        <!-- Additional Programs -->
        <h2 class="faq-category"><?php esc_html_e('Additional Programs & Certifications', 'drivingacademywp'); ?></h2>
        <div class="faq-group">
            <?php
            $additional = [
                ['Do you offer Fiber Optics Training?', 'Yes. Our Fiber Optics program is a 3-week (120-hour) course that covers fiber optic design, installation, cable termination, and testing. Graduates earn a Certified Fiber Optic Technician certificate from the Fiber Optic Association (FOA). Tuition is $2,500.'],
                ['What is OSHA & Hazmat Training?', 'We offer a 2-day OSHA and Hazmat Training course ($125) that covers workplace safety standards and hazardous materials handling. Classes start once per month. OSHA and Flagman certifications are also included in our Heavy Equipment Training program.'],
                ['Do you offer Surface Mining certification?', 'Yes. Our Surface Mining Papers course is a 2-day program ($125) that provides the documentation needed for surface mining operations. Contact our office for the next available class date.'],
                ['What is the HAZMAT endorsement for CDL?', 'Our CDL program includes HAZMAT endorsement training. You will learn everything needed to pass the HAZMAT written test. Note: students are responsible for paying the DMV background check and endorsement fees separately — these are not included in tuition.'],
                ['Do you offer a CDL refresher course?', 'Yes. If you already have a CDL but need to brush up on your skills, we offer a refresher course. Contact our admissions office for details and pricing.'],
                ['Can I earn college credits?', 'Through our partnership with Southwest Virginia Community College (SVCC), qualifying students may earn college credit hours: 12 credits for CDL Training, 12 credits for Heavy Equipment, and 10 credits for Fiber Optics. Credit availability may vary by state of residence.'],
            ];
            foreach ($additional as $faq) :
            ?>
            <details class="faq-item">
                <summary class="faq-item__question">
                    <?php echo esc_html($faq[0]); ?>
                    <span class="faq-item__icon"><?php echo daw_icon('plus', '', '16'); ?></span>
                </summary>
                <div class="faq-item__answer"><p><?php echo esc_html($faq[1]); ?></p></div>
            </details>
            <?php endforeach; ?>
        </div>

        <!-- Practical Info -->
        <h2 class="faq-category"><?php esc_html_e('Practical Information', 'drivingacademywp'); ?></h2>
        <div class="faq-group">
            <?php
            $practical = [
                ['Is there lodging available for out-of-town students?', 'Yes. We are located near affordable motels that offer rooms with small refrigerators at budget-friendly rates. Our staff is happy to help arrange lodging for the duration of your training program. Call our office for recommendations.'],
                ['How do I get to the campus?', 'From Interstate 81, take Exit 14 (Abingdon). Turn right at the exit, then right on US 11, then left on US 19 North. Drive approximately 12-20 miles to the Valero/Exxon station at Hansonville. Turn right into the parking lot and follow the driveway to our building. See our Contact page for detailed step-by-step directions.'],
                ['Do Tennessee residents have different requirements?', 'Yes. Tennessee students must have a high school diploma or GED before enrollment. Pell Grants and college credits are not available for Tennessee residents. Tuition rates may differ — contact our office for current TN pricing.'],
                ['How often do new classes start?', 'CDL classes begin every 3 weeks. Heavy Equipment and Fiber Optics classes start on the first Monday of each month. OSHA, Hazmat, and Surface Mining classes are held once per month. Contact us for the next available start date.'],
            ];
            foreach ($practical as $faq) :
            ?>
            <details class="faq-item">
                <summary class="faq-item__question">
                    <?php echo esc_html($faq[0]); ?>
                    <span class="faq-item__icon"><?php echo daw_icon('plus', '', '16'); ?></span>
                </summary>
                <div class="faq-item__answer"><p><?php echo esc_html($faq[1]); ?></p></div>
            </details>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="section section--blue text-center">
    <div class="container">
        <h2 class="section__title"><?php esc_html_e('Still Have Questions?', 'drivingacademywp'); ?></h2>
        <p class="section__subtitle" style="color:rgba(255,255,255,0.8);"><?php esc_html_e('Our admissions team is happy to help. Give us a call or fill out the contact form.', 'drivingacademywp'); ?></p>
        <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-top:1.5rem;">
            <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn--accent btn--lg"><?php esc_html_e('Contact Us', 'drivingacademywp'); ?></a>
            <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', daw_get_contact('phone'))); ?>" class="btn btn--outline btn--lg" style="border-color:rgba(255,255,255,0.3);color:var(--white);">
                <?php echo daw_icon('phone', '', '16'); ?>
                <?php echo esc_html(daw_get_contact('phone')); ?>
            </a>
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
