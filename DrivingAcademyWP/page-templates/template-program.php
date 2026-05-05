<?php
/**
 * Template Name: Program Page
 */
get_header();

$slug = get_post_field('post_name', get_the_ID());

$programs = [
    'cdl-class-a-training' => [
        'hero_img'   => 'a-lot-of-trucks.jpg',
        'badge1'     => 'Most Popular',
        'badge2'     => 'WIOA Eligible',
        'excerpt'    => 'Earn your Class A CDL in just 4 weeks with hands-on training from experienced instructors.',
        'duration'   => '160 Hours / 4 Weeks',
        'format'     => 'Theory & Behind-the-Wheel',
        'credential' => 'Class A CDL License',
        'salary'     => '$55K–$75K+',
        'demand'     => '80,000+ Shortage',
        'placement'  => '94% Placement Rate',
        'sections'   => [
            [
                'title' => 'Classroom Theory',
                'items' => [
                    'Orientation & DOT Safety Regulations',
                    'Logbooks & Hours of Service (ELD Compliance)',
                    'Trip Planning & Map Reading',
                    'Accident Procedures & Prevention',
                    'Vehicle Systems & Components',
                    'Cargo Securement & Weight Distribution',
                    'HAZMAT Awareness & Endorsement Preparation',
                ],
            ],
            [
                'title' => 'Range & Road Training',
                'items' => [
                    'Pre-Trip, En-Route & Post-Trip Inspections',
                    'Basic Control Skills (Straight-Line Backing, Offset, Parallel Park)',
                    'Shifting & Double Clutching (10-Speed Manual)',
                    'Coupling & Uncoupling Procedures',
                    'City, Highway & Rural Driving',
                    'Mountain & Night Driving Techniques',
                    'CDL Skills Test & Road Test Preparation',
                ],
            ],
            [
                'title' => 'Admissions Requirements',
                'items' => [
                    'Minimum 18 years of age (21 for interstate)',
                    'Valid state driver\'s license',
                    'Acceptable driving record (MVR)',
                    'Pass DOT Physical Exam',
                    'Pass DOT Drug Screen',
                    'CDL Learner\'s Permit (academy assists with obtaining)',
                ],
            ],
        ],
        'extras' => '<p>Our CDL program is <strong>FMCSA ELDT compliant</strong> and approved by the Virginia DMV. Students train on late-model Freightliner Cascadia trucks with 10-speed manual transmissions. New classes start every 3 weeks with rolling enrollment.</p><p>Graduates earn an <strong>unrestricted Class A CDL</strong> (no "E" restriction) and receive lifetime job placement assistance through our network of 30+ hiring partners.</p><p>College credit: Earn <strong>12 credits</strong> through our partnership with Southwest Virginia Community College (SVCC).</p>',
    ],
    'heavy-equipment-training' => [
        'hero_img'   => 'excavator-and-loader-training.jpg',
        'badge1'     => 'Hands-On Training',
        'badge2'     => 'NCCER Certified',
        'excerpt'    => 'Learn to operate excavators, wheel loaders, bulldozers, backhoes, and forklifts on real job-site equipment.',
        'duration'   => '120 Hours / 3 Weeks',
        'format'     => 'Hands-On Equipment Operation',
        'credential' => 'NCCER Certification',
        'salary'     => '$45K–$65K+',
        'demand'     => 'High Growth Industry',
        'placement'  => 'Lifetime Support',
        'sections'   => [
            [
                'title' => 'Track Excavators (CAT 320 & Komatsu PC210)',
                'items' => [
                    'Joystick ISO/SAE controls',
                    'Trenching & grading techniques',
                    'Loading trucks & stockpiling material',
                    'Enclosed ROPS/FOPS safety cabs',
                ],
            ],
            [
                'title' => 'Wheel Loaders (John Deere 544L)',
                'items' => [
                    'Articulated steering fundamentals',
                    'Stockpiling & truck loading operations',
                    'Quick-coupler attachment changes',
                    'Material handling & site cleanup',
                ],
            ],
            [
                'title' => 'Bulldozers (CAT D6N)',
                'items' => [
                    '6-Way PAT blade operation',
                    'GPS machine control basics',
                    'Rough & finish grading techniques',
                    'Site preparation & land clearing',
                ],
            ],
            [
                'title' => 'Backhoes & Forklifts',
                'items' => [
                    'Backhoe digging & trenching operations',
                    'Material loading & handling',
                    'OSHA forklift certification included',
                    'Warehouse & rough-terrain forklift models',
                    'Load capacity & safety protocols',
                ],
            ],
        ],
        'extras' => '<p>No state license is required to operate heavy equipment — but employers require formal training and certification. Our program provides both.</p><p>Students can combine Heavy Equipment Training with our CDL program for <strong>combo discounts</strong> that maximize job opportunities in construction, mining, and infrastructure.</p><p>Earn <strong>12 college credits</strong> through our SVCC partnership. OSHA forklift certification and Hazmat training ($125) are included.</p>',
    ],
    'diesel-mechanics' => [
        'hero_img'   => 'training-in-engine-design.jpg',
        'badge1'     => 'Hands-On Training',
        'badge2'     => '',
        'excerpt'    => 'Master diesel engine diagnostics, maintenance, and repair in our 10,000 sq. ft. DOT-compliant facility.',
        'duration'   => '160 Hours / 4 Weeks',
        'format'     => 'Diagnostics & Repair',
        'credential' => 'Diesel Mechanics Certificate',
        'salary'     => '$45K–$65K+',
        'demand'     => 'Growing Industry',
        'placement'  => 'Lifetime Support',
        'sections'   => [
            [
                'title' => 'Engine Diagnostics & Repair',
                'items' => [
                    'Heavy-duty diesel engine theory & operation',
                    'Electronic engine diagnostics (Cummins INSITE™)',
                    'Detroit Diagnostic Link software',
                    'Fuel system inspection & repair',
                    'Cooling & lubrication systems',
                ],
            ],
            [
                'title' => 'Brake & Electrical Systems',
                'items' => [
                    'Air brake system diagnostics & repair',
                    'Bendix ACom diagnostic software',
                    'Electrical system troubleshooting',
                    'ABS & traction control systems',
                    'Air brake simulation exercises',
                ],
            ],
            [
                'title' => 'Preventive Maintenance & HVAC',
                'items' => [
                    'DOT inspection procedures',
                    'Preventive maintenance schedules',
                    'HVAC systems — Freon recovery & recharging',
                    'Tire & wheel maintenance',
                    'Fluid analysis & replacement',
                ],
            ],
        ],
        'extras' => '<p>Train in our <strong>10,000 sq. ft. maintenance facility</strong> featuring three full service bays with pits and lifts capable of handling fully loaded tractor-trailers. Our Advanced Diagnostics Lab includes Cummins INSITE™, Detroit Diagnostic Link, and Bendix ACom software.</p><p>Real engines, real tools, real problems to solve. The diesel program doesn\'t just teach theory — it gets your hands dirty.</p>',
    ],
    'nccer-training' => [
        'hero_img'   => 'nccer-training.jpg',
        'badge1'     => 'Nationally Recognized',
        'badge2'     => '',
        'excerpt'    => 'Earn nationally recognized NCCER credentials for construction and maintenance careers.',
        'duration'   => 'Varies by Level',
        'format'     => 'Standardized Curriculum',
        'credential' => 'NCCER Certification',
        'salary'     => '$40K–$60K+',
        'demand'     => 'National Recognition',
        'placement'  => 'Lifetime Support',
        'sections'   => [
            [
                'title' => 'NCCER Core Curriculum',
                'items' => [
                    'Basic Safety (OSHA 10-Hour Construction)',
                    'Introduction to Construction Math',
                    'Introduction to Hand Tools & Power Tools',
                    'Introduction to Construction Drawings',
                    'Basic Communication Skills',
                    'Material Handling & Basic Rigging',
                ],
            ],
            [
                'title' => 'Heavy Equipment Operations',
                'items' => [
                    'Equipment operation fundamentals',
                    'Earthmoving & site preparation',
                    'Grade setting & checking',
                    'Safety protocols & OSHA compliance',
                    'Equipment maintenance & inspection',
                ],
            ],
            [
                'title' => 'Why NCCER Certification?',
                'items' => [
                    'Recognized by employers across all 50 states',
                    'Standardized curriculum ensures consistent quality',
                    'Portable credentials that travel with you',
                    'Registry system verifies your training nationally',
                    'Pathway to advanced certifications & leadership roles',
                ],
            ],
        ],
        'extras' => '<p>The National Center for Construction Education and Research (NCCER) provides standardized construction and maintenance curricula. Our accredited training center delivers NCCER programs that are recognized by employers nationwide.</p><p>NCCER credentials are registered in a national database, making your training verifiable and portable across state lines and employers.</p>',
    ],
    'driver-improvement' => [
        'hero_img'   => 'two-trucks.jpg',
        'badge1'     => 'DMV Approved',
        'badge2'     => '',
        'excerpt'    => 'Improve your driving record, reduce license points, and lower insurance premiums with our defensive driving course.',
        'duration'   => '8 Hours / 1 Day',
        'format'     => 'Classroom Instruction',
        'credential' => 'Completion Certificate',
        'salary'     => '',
        'demand'     => '',
        'placement'  => '',
        'sections'   => [
            [
                'title' => 'Course Curriculum',
                'items' => [
                    'Defensive driving techniques & strategies',
                    'Virginia traffic laws & regulations review',
                    'Hazard recognition & avoidance',
                    'Adverse weather & road condition driving',
                    'Distracted & impaired driving awareness',
                    'Road rage prevention & management',
                    'Sharing the road with commercial vehicles',
                ],
            ],
            [
                'title' => 'Benefits of Completion',
                'items' => [
                    'Up to 5 safe driving points added to your record',
                    'May satisfy court-ordered driving improvement requirements',
                    'Insurance premium reduction (check with your provider)',
                    'Improved driving confidence & safety awareness',
                    'Certificate valid for DMV and court submissions',
                ],
            ],
            [
                'title' => 'Who Should Attend',
                'items' => [
                    'Drivers with accumulated demerit points',
                    'Court-referred drivers',
                    'Anyone seeking insurance premium discounts',
                    'Drivers wanting to refresh their defensive driving skills',
                    'Commercial drivers needing continuing education',
                ],
            ],
        ],
        'extras' => '<p>Our Driver Improvement course is <strong>approved by the Virginia DMV</strong> and satisfies court-ordered driver improvement requirements. Classes are held regularly — contact us for the next available date.</p><p>Completion of this course can add up to 5 safe driving points to your record and may qualify you for insurance discounts.</p>',
    ],
    'fiber-optics' => [
        'hero_img'   => 'nccer-training.jpg',
        'badge1'     => 'FOA Certified',
        'badge2'     => '',
        'excerpt'    => 'Become a Certified Fiber Optic Technician (CFOT) in just 3 weeks with hands-on training.',
        'duration'   => '120 Hours / 3 Weeks',
        'format'     => 'Theory & Hands-On Lab',
        'credential' => 'CFOT Certification (FOA)',
        'salary'     => '$45K–$65K+',
        'demand'     => 'High Demand',
        'placement'  => 'Lifetime Support',
        'sections'   => [
            [
                'title' => 'Fiber Optic Fundamentals',
                'items' => [
                    'Fiber optic theory & light transmission',
                    'Single-mode vs. multi-mode fiber types',
                    'Cable construction & identification',
                    'Network design & architecture',
                    'Industry standards & safety protocols',
                ],
            ],
            [
                'title' => 'Installation & Termination',
                'items' => [
                    'Cable pulling & routing techniques',
                    'Mechanical & fusion splicing',
                    'Connector termination (SC, LC, ST types)',
                    'Cable management & labeling',
                    'Aerial, underground & indoor installation',
                ],
            ],
            [
                'title' => 'Testing & Troubleshooting',
                'items' => [
                    'OTDR (Optical Time Domain Reflectometer) testing',
                    'Power meter & light source testing',
                    'Visual fault locator usage',
                    'Loss budget calculation',
                    'Network troubleshooting & documentation',
                ],
            ],
        ],
        'extras' => '<p>Fiber optics is one of the fastest-growing fields in telecommunications. Our program prepares you for the <strong>Fiber Optic Association (FOA) Certified Fiber Optic Technician (CFOT)</strong> exam.</p><p>Earn <strong>10 college credits</strong> through our SVCC partnership. Tuition: $2,500.</p>',
    ],
    'osha-hazmat' => [
        'hero_img'   => 'a-lot-of-trucks.jpg',
        'badge1'     => 'OSHA Certified',
        'badge2'     => '',
        'excerpt'    => 'Earn your OSHA safety certification and hazardous materials handling credentials in just 2 days.',
        'duration'   => '16 Hours / 2 Days',
        'format'     => 'Classroom & Practical',
        'credential' => 'OSHA & Hazmat Certificates',
        'salary'     => '',
        'demand'     => '',
        'placement'  => '',
        'sections'   => [
            [
                'title' => 'OSHA Safety Training',
                'items' => [
                    'Workplace safety standards & regulations',
                    'Hazard identification & risk assessment',
                    'Personal protective equipment (PPE)',
                    'Fall protection & scaffolding safety',
                    'Electrical safety awareness',
                    'Fire prevention & emergency response',
                ],
            ],
            [
                'title' => 'Hazardous Materials Handling',
                'items' => [
                    'HAZMAT classification & identification',
                    'Proper handling & storage procedures',
                    'Spill response & containment',
                    'Transportation safety requirements',
                    'Documentation & regulatory compliance',
                ],
            ],
        ],
        'extras' => '<p>This 2-day certification course costs <strong>$125</strong> and is included free with our Heavy Equipment Training program. OSHA and Hazmat certifications are required by many employers in construction, mining, and transportation.</p>',
    ],
];

$program = $programs[$slug] ?? null;

if (!$program) {
    $hero_img = get_the_post_thumbnail_url(get_the_ID(), 'hero-slide') ?: DAW_URI . '/assets/images/a-lot-of-trucks.jpg';
    $duration   = get_post_meta(get_the_ID(), '_program_duration', true);
    $format     = get_post_meta(get_the_ID(), '_program_format', true);
    $credential = get_post_meta(get_the_ID(), '_program_credential', true);
    $badge1     = get_post_meta(get_the_ID(), '_program_badge_1', true);
    $badge2     = get_post_meta(get_the_ID(), '_program_badge_2', true);
    $salary     = get_post_meta(get_the_ID(), '_program_salary', true);
    $demand     = get_post_meta(get_the_ID(), '_program_demand', true);
    $placement  = get_post_meta(get_the_ID(), '_program_placement', true);
    $program = [
        'hero_img'   => basename($hero_img),
        'badge1'     => $badge1,
        'badge2'     => $badge2,
        'excerpt'    => get_the_excerpt(),
        'duration'   => $duration,
        'format'     => $format,
        'credential' => $credential,
        'salary'     => $salary,
        'demand'     => $demand,
        'placement'  => $placement,
        'sections'   => [],
        'extras'     => '',
    ];
}

$hero_url = DAW_URI . '/assets/images/' . $program['hero_img'];
if (has_post_thumbnail()) {
    $hero_url = get_the_post_thumbnail_url(get_the_ID(), 'hero-slide');
}
?>

<?php daw_breadcrumb(); ?>

<section class="page-hero" style="background-image:url('<?php echo esc_url($hero_url); ?>');">
    <div class="container">
        <div class="page-hero__content">
            <?php if (!empty($program['badge1']) || !empty($program['badge2'])) : ?>
                <?php if (!empty($program['badge1'])) : ?><span class="page-hero__badge"><?php echo esc_html($program['badge1']); ?></span><?php endif; ?>
                <?php if (!empty($program['badge2'])) : ?><span class="page-hero__badge"><?php echo esc_html($program['badge2']); ?></span><?php endif; ?>
            <?php endif; ?>
            <h1 class="page-hero__title"><?php the_title(); ?></h1>
            <?php if (!empty($program['excerpt'])) : ?>
                <p class="page-hero__text"><?php echo esc_html($program['excerpt']); ?></p>
            <?php endif; ?>
            <div class="page-hero__actions">
                <a href="#enroll-form" class="btn btn--primary btn--lg"><?php esc_html_e('Enroll Now', 'drivingacademywp'); ?></a>
                <a href="#curriculum" class="btn btn--outline btn--lg"><?php esc_html_e('View Curriculum', 'drivingacademywp'); ?></a>
            </div>
        </div>
    </div>
</section>

<?php if (!empty($program['duration']) || !empty($program['format']) || !empty($program['credential'])) : ?>
<section class="section--gray" style="padding:2rem 0;">
    <div class="container">
        <div class="program-stats">
            <?php if (!empty($program['duration'])) : ?>
            <div class="program-stat">
                <div class="program-stat__value"><?php echo daw_icon('clock', '', '20'); ?></div>
                <div class="program-stat__label"><?php echo esc_html($program['duration']); ?></div>
            </div>
            <?php endif; ?>
            <?php if (!empty($program['format'])) : ?>
            <div class="program-stat">
                <div class="program-stat__value"><?php echo daw_icon('book', '', '20'); ?></div>
                <div class="program-stat__label"><?php echo esc_html($program['format']); ?></div>
            </div>
            <?php endif; ?>
            <?php if (!empty($program['credential'])) : ?>
            <div class="program-stat">
                <div class="program-stat__value"><?php echo daw_icon('award', '', '20'); ?></div>
                <div class="program-stat__label"><?php echo esc_html($program['credential']); ?></div>
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

                <?php if (!empty($program['sections'])) : ?>
                    <?php foreach ($program['sections'] as $section) : ?>
                        <h2><?php echo esc_html($section['title']); ?></h2>
                        <ul>
                            <?php foreach ($section['items'] as $item) : ?>
                                <li><?php echo esc_html($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php the_content(); ?>

                <?php if (!empty($program['extras'])) : ?>
                    <?php echo wp_kses_post($program['extras']); ?>
                <?php endif; ?>

                <?php if (!empty($program['salary']) || !empty($program['demand']) || !empty($program['placement'])) : ?>
                <h2><?php esc_html_e('Career Outlook', 'drivingacademywp'); ?></h2>
                <div class="career-grid">
                    <?php if (!empty($program['salary'])) : ?>
                    <div class="career-item">
                        <div class="career-item__value"><?php echo esc_html($program['salary']); ?></div>
                        <div class="career-item__label"><?php esc_html_e('Avg. Starting Salary', 'drivingacademywp'); ?></div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($program['demand'])) : ?>
                    <div class="career-item">
                        <div class="career-item__value"><?php echo esc_html($program['demand']); ?></div>
                        <div class="career-item__label"><?php esc_html_e('Industry Demand', 'drivingacademywp'); ?></div>
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($program['placement'])) : ?>
                    <div class="career-item">
                        <div class="career-item__value"><?php echo esc_html($program['placement']); ?></div>
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
