<?php
/**
 * Template Name: Fleet & Equipment Page
 */
get_header();
$hero_img = get_the_post_thumbnail_url(get_the_ID(), 'hero-slide') ?: DAW_URI . '/assets/images/two-trucks.jpg';
?>

<?php daw_breadcrumb(); ?>

<section class="page-hero" style="background-image:url('<?php echo esc_url($hero_img); ?>');">
    <div class="container">
        <div class="page-hero__content">
            <span class="page-hero__badge"><?php esc_html_e('Train on the Best', 'drivingacademywp'); ?></span>
            <h1 class="page-hero__title"><?php esc_html_e('Our Training Fleet & Facilities', 'drivingacademywp'); ?></h1>
            <p class="page-hero__text"><?php esc_html_e('Your career demands real-world experience. We maintain a diverse, modern fleet of manual and automatic semi-trucks, heavy equipment, and a fully operational mechanics bay.', 'drivingacademywp'); ?></p>
        </div>
    </div>
</section>

<!-- Feature Bar -->
<section class="section">
    <div class="container">
        <div class="feature-bar">
            <?php
            $features = [
                ['shield', 'No "E" Restrictions', 'We train on 10-speed manual transmissions so you graduate with a full, unrestricted Class A CDL.'],
                ['cog', 'Modern Automatics', 'With 80% of fleets moving to AMTs, we ensure you get seat time in the trucks you\'ll drive professionally.'],
                ['check', 'DOT Compliant', 'Every piece of equipment is meticulously maintained to exceed FMCSA and DOT safety standards.'],
            ];
            foreach ($features as $f) :
            ?>
            <div class="feature-bar__item">
                <div class="feature-bar__icon"><?php echo daw_icon($f[0], '', '20'); ?></div>
                <div>
                    <div class="feature-bar__title"><?php echo esc_html($f[1]); ?></div>
                    <div class="feature-bar__text"><?php echo esc_html($f[2]); ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Trucks -->
<section class="section section--gray">
    <div class="container">
        <div class="section__header" style="text-align:left;">
            <h2 class="section__title"><?php esc_html_e('Commercial Trucks & Trailers', 'drivingacademywp'); ?></h2>
        </div>
        <div class="grid grid--2">
            <div class="fleet-card">
                <div class="fleet-card__image">
                    <img src="<?php echo esc_url(DAW_URI . '/assets/images/truck.jpg'); ?>" alt="Freightliner Cascadia" width="800" height="480" loading="lazy">
                </div>
                <div class="fleet-card__body">
                    <span class="fleet-card__badge"><?php esc_html_e('10-Speed Manual', 'drivingacademywp'); ?></span>
                    <h3 class="fleet-card__title"><?php esc_html_e('Freightliner Cascadia', 'drivingacademywp'); ?></h3>
                    <div class="fleet-card__subtitle"><?php esc_html_e('Primary Training Vehicle', 'drivingacademywp'); ?></div>
                    <div class="fleet-card__specs">
                        <div class="fleet-card__spec"><span class="fleet-card__spec-label">Engine</span><span class="fleet-card__spec-value">Detroit DD15 (400-505 HP)</span></div>
                        <div class="fleet-card__spec"><span class="fleet-card__spec-label">Transmission</span><span class="fleet-card__spec-value">Eaton Fuller 10-Speed</span></div>
                        <div class="fleet-card__spec"><span class="fleet-card__spec-label">Config</span><span class="fleet-card__spec-value">Tandem Axle, Day Cab</span></div>
                    </div>
                    <p class="fleet-card__note"><?php esc_html_e('Mastering the double-clutch ensures you will never have an "E" (Automatic Only) restriction.', 'drivingacademywp'); ?></p>
                </div>
            </div>
            <div class="fleet-card">
                <div class="fleet-card__image">
                    <img src="<?php echo esc_url(DAW_URI . '/assets/images/two-trucks.jpg'); ?>" alt="Kenworth T680" width="800" height="480" loading="lazy">
                </div>
                <div class="fleet-card__body">
                    <span class="fleet-card__badge"><?php esc_html_e('Automated Manual (AMT)', 'drivingacademywp'); ?></span>
                    <h3 class="fleet-card__title"><?php esc_html_e('Kenworth T680', 'drivingacademywp'); ?></h3>
                    <div class="fleet-card__subtitle"><?php esc_html_e('Highway & Road Test Vehicle', 'drivingacademywp'); ?></div>
                    <div class="fleet-card__specs">
                        <div class="fleet-card__spec"><span class="fleet-card__spec-label">Engine</span><span class="fleet-card__spec-value">PACCAR MX-13</span></div>
                        <div class="fleet-card__spec"><span class="fleet-card__spec-label">Transmission</span><span class="fleet-card__spec-value">12-Speed AMT</span></div>
                        <div class="fleet-card__spec"><span class="fleet-card__spec-label">Config</span><span class="fleet-card__spec-value">76" Sleeper Cab</span></div>
                    </div>
                    <p class="fleet-card__note"><?php esc_html_e('Training on automatics prepares you for the modern, fuel-efficient trucks you\'ll drive after graduation.', 'drivingacademywp'); ?></p>
                </div>
            </div>
        </div>
        <div class="funding-highlight mt-4">
            <div class="funding-highlight__value"><?php esc_html_e('15+', 'drivingacademywp'); ?></div>
            <div class="funding-highlight__label"><?php esc_html_e('Trailers on Site — 53\' Dry Vans & 48\' Flatbeds', 'drivingacademywp'); ?></div>
        </div>
    </div>
</section>

<!-- Heavy Equipment -->
<section class="section">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e('Heavy Equipment Fleet', 'drivingacademywp'); ?></h2>
        </div>
        <div class="grid grid--3">
            <?php
            $equipment = [
                ['Track Excavators', 'CAT 320 & Komatsu PC210', DAW_URI . '/assets/images/excavator-and-loader-training.jpg', ['Joystick ISO/SAE controls', 'Trenching & grading simulation', 'Enclosed ROPS/FOPS cabs']],
                ['Wheel Loaders', 'John Deere 544L', DAW_URI . '/assets/images/bulldozer-with-a-bucket.jpg', ['Articulated steering', 'Stockpiling & truck loading', 'Quick-coupler attachments']],
                ['Bulldozers', 'CAT D6N', DAW_URI . '/assets/images/bulldozer-training.jpg', ['6-Way PAT blade operation', 'GPS machine control basics', 'Rough & finish grading']],
            ];
            foreach ($equipment as $eq) :
            ?>
            <div class="fleet-card">
                <div class="fleet-card__image">
                    <img src="<?php echo esc_url($eq[2]); ?>" alt="<?php echo esc_attr($eq[0]); ?>" width="800" height="480" loading="lazy">
                </div>
                <div class="fleet-card__body">
                    <h3 class="fleet-card__title"><?php echo esc_html($eq[0]); ?></h3>
                    <div class="fleet-card__subtitle"><?php echo esc_html($eq[1]); ?></div>
                    <ul class="aid-card__list">
                        <?php foreach ($eq[3] as $spec) : ?>
                            <li><?php echo esc_html($spec); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Repair Bays -->
<section class="section section--dark">
    <div class="container">
        <div class="grid grid--2" style="align-items:center;">
            <div>
                <h2 style="font-size:1.5rem;font-weight:700;margin-bottom:0.75rem;"><?php esc_html_e('State-of-the-Art Repair Bays', 'drivingacademywp'); ?></h2>
                <p style="color:rgba(255,255,255,0.7);line-height:1.7;margin-bottom:1.5rem;"><?php esc_html_e('Our 10,000 sq. ft. maintenance facility keeps our fleet in DOT-compliant condition and serves as the hands-on classroom for Diesel Mechanics students.', 'drivingacademywp'); ?></p>
                <div style="display:flex;flex-direction:column;gap:1rem;">
                    <?php
                    $bays = [
                        ['wrench', 'Full-Service Pits & Lifts', 'Three bays capable of lifting fully loaded tractor-trailers for undercarriage inspection.'],
                        ['cog', 'Advanced Diagnostics Lab', 'Equipped with Cummins INSITE™, Detroit Diagnostic Link, and Bendix ACom software.'],
                        ['tool', 'HVAC & Brake Stations', 'Dedicated stations for air brake simulations and Freon recovery/recharging.'],
                    ];
                    foreach ($bays as $b) :
                    ?>
                    <div class="feature-bar__item">
                        <div class="feature-bar__icon" style="background:rgba(245,158,11,0.2);color:var(--brand-accent);"><?php echo daw_icon($b[0], '', '20'); ?></div>
                        <div>
                            <div class="feature-bar__title" style="color:var(--white);"><?php echo esc_html($b[1]); ?></div>
                            <div class="feature-bar__text" style="color:rgba(255,255,255,0.6);"><?php echo esc_html($b[2]); ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div>
                <img src="<?php echo esc_url(DAW_URI . '/assets/images/training-in-engine-design.jpg'); ?>" alt="Repair bays" style="border-radius:var(--radius);box-shadow:var(--shadow-lg);" width="800" height="533" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Tour CTA -->
<section class="section text-center">
    <div class="container">
        <h2 class="section__title"><?php esc_html_e('Want to see our equipment in person?', 'drivingacademywp'); ?></h2>
        <p class="section__subtitle"><?php esc_html_e('Schedule a campus tour to walk the yard, sit in the cab of our Freightliners, and see the repair bays for yourself.', 'drivingacademywp'); ?></p>
        <p style="color:var(--gray-600);font-size:0.875rem;margin-top:1rem;"><?php esc_html_e('Tours available Monday - Friday, 9:00 AM to 4:00 PM.', 'drivingacademywp'); ?></p>
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn btn--primary btn--lg mt-2"><?php esc_html_e('Book a Tour', 'drivingacademywp'); ?></a>
    </div>
</section>

<?php get_footer(); ?>
