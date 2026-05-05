<?php
/**
 * Template helper functions
 */

function daw_posted_on() {
    printf(
        '<time class="post-date" datetime="%1$s">%2$s</time>',
        esc_attr(get_the_date('c')),
        esc_html(get_the_date())
    );
}

function daw_posted_by() {
    printf(
        '<span class="post-author">by %s</span>',
        esc_html(get_the_author())
    );
}

function daw_entry_footer() {
    if ('post' === get_post_type()) {
        $categories = get_the_category_list(', ');
        if ($categories) {
            printf('<span class="post-categories">%s</span>', $categories);
        }
    }
}

function daw_post_thumbnail($size = 'program-card') {
    if (!has_post_thumbnail()) {
        return;
    }
    printf(
        '<div class="post-thumbnail"><a href="%s">%s</a></div>',
        esc_url(get_permalink()),
        get_the_post_thumbnail(null, $size, ['loading' => 'lazy'])
    );
}

function daw_get_contact($field) {
    $defaults = [
        'address' => '123 Training Road, Lebanon, VA 24266',
        'phone'   => '(276) 889-4042',
        'email'   => 'info@tricountydrivingacademy.com',
        'hours'   => 'Mon - Fri: 8:00 AM - 5:00 PM',
    ];
    $value = get_theme_mod('daw_' . $field, $defaults[$field] ?? '');
    return $value;
}

function daw_phone_link() {
    $phone = daw_get_contact('phone');
    $tel   = preg_replace('/[^0-9+]/', '', $phone);
    printf('<a href="tel:%s">%s</a>', esc_attr($tel), esc_html($phone));
}

function daw_email_link() {
    $email = daw_get_contact('email');
    printf('<a href="mailto:%s">%s</a>', esc_attr($email), esc_html($email));
}

function daw_breadcrumb() {
    if (is_front_page()) {
        return;
    }

    echo '<nav class="breadcrumb" aria-label="Breadcrumb"><div class="container">';
    echo '<a href="' . esc_url(home_url('/')) . '">Home</a>';
    echo '<span class="breadcrumb__sep">/</span>';

    if (is_page()) {
        $ancestors = get_post_ancestors(get_the_ID());
        $ancestors = array_reverse($ancestors);
        foreach ($ancestors as $ancestor_id) {
            printf(
                '<a href="%s">%s</a><span class="breadcrumb__sep">/</span>',
                esc_url(get_permalink($ancestor_id)),
                esc_html(get_the_title($ancestor_id))
            );
        }
        echo '<span class="breadcrumb__current" aria-current="page">' . esc_html(get_the_title()) . '</span>';
    } elseif (is_single()) {
        echo '<a href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '">News</a>';
        echo '<span class="breadcrumb__sep">/</span>';
        echo '<span class="breadcrumb__current" aria-current="page">' . esc_html(get_the_title()) . '</span>';
    } elseif (is_home()) {
        echo '<span class="breadcrumb__current">News</span>';
    } elseif (is_404()) {
        echo '<span class="breadcrumb__current">404</span>';
    }

    echo '</div></nav>';
}

function daw_seo_meta() {
    if (is_singular()) {
        $description = get_the_excerpt();
    } elseif (is_home()) {
        $description = 'Latest news from Tri-County Driving Academy.';
    } else {
        $description = get_bloginfo('description');
    }
    $description = wp_strip_all_tags($description);
    if ($description) {
        printf('<meta name="description" content="%s">' . "\n", esc_attr(wp_trim_words($description, 30)));
    }

    echo '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr(wp_get_document_title()) . '">' . "\n";
    if ($description) {
        echo '<meta property="og:description" content="' . esc_attr(wp_trim_words($description, 30)) . '">' . "\n";
    }
    echo '<meta property="og:url" content="' . esc_url(is_singular() ? get_permalink() : home_url('/')) . '">' . "\n";
    echo '<meta property="og:type" content="' . (is_single() ? 'article' : 'website') . '">' . "\n";

    if (is_singular() && has_post_thumbnail()) {
        echo '<meta property="og:image" content="' . esc_url(get_the_post_thumbnail_url(null, 'large')) . '">' . "\n";
    }
}

function daw_schema_local_business() {
    $schema = [
        '@context'         => 'https://schema.org',
        '@type'            => ['LocalBusiness', 'EducationalOrganization'],
        'name'             => 'Tri-County Driving Academy, Inc.',
        'description'      => get_bloginfo('description'),
        'url'              => home_url('/'),
        'telephone'        => daw_get_contact('phone'),
        'email'            => daw_get_contact('email'),
        'address'          => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => '123 Training Road',
            'addressLocality' => 'Lebanon',
            'addressRegion'   => 'VA',
            'postalCode'      => '24266',
            'addressCountry'  => 'US',
        ],
        'openingHours'     => 'Mo-Fr 08:00-17:00',
    ];

    if (has_custom_logo()) {
        $logo_id  = get_theme_mod('custom_logo');
        $logo_url = wp_get_attachment_image_url($logo_id, 'full');
        if ($logo_url) {
            $schema['logo'] = $logo_url;
        }
    }

    printf(
        '<script type="application/ld+json">%s</script>' . "\n",
        wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)
    );
}

function daw_default_page_content($slug) {
    $pages = [
        'privacy-policy' => '
<h2>Information We Collect</h2>
<p>When you visit our website or contact us, we may collect the following information:</p>
<ul>
<li><strong>Personal Information:</strong> Name, email address, phone number, and mailing address when you submit our contact or enrollment forms.</li>
<li><strong>Educational Records:</strong> Training progress, certifications earned, and attendance records for enrolled students.</li>
<li><strong>Website Usage Data:</strong> IP address, browser type, pages visited, and time spent on our site through standard web server logs.</li>
</ul>

<h2>How We Use Your Information</h2>
<ul>
<li>To respond to your inquiries and enrollment requests</li>
<li>To process admissions applications and financial aid</li>
<li>To maintain student training records as required by FMCSA, Virginia DMV, and accrediting bodies</li>
<li>To send program updates, class schedules, and career opportunities (with your consent)</li>
<li>To improve our website and training programs</li>
</ul>

<h2>Information Sharing</h2>
<p>We do not sell, rent, or trade your personal information. We may share information with:</p>
<ul>
<li><strong>Regulatory Bodies:</strong> FMCSA, Virginia DMV, SCHEV, and NCCER as required for licensing and certification</li>
<li><strong>Hiring Partners:</strong> Only with your explicit written consent for job placement purposes</li>
<li><strong>Financial Aid Providers:</strong> WIOA offices and VA benefits administrators to process your funding</li>
</ul>

<h2>Data Security</h2>
<p>We implement appropriate security measures to protect your personal information, including encrypted form submissions and secure record storage. Student records are maintained in compliance with applicable federal and state regulations.</p>

<h2>Your Rights</h2>
<p>You may request access to, correction of, or deletion of your personal information by contacting us at <a href="mailto:' . esc_attr(daw_get_contact('email')) . '">' . esc_html(daw_get_contact('email')) . '</a> or calling ' . esc_html(daw_get_contact('phone')) . '.</p>

<h2>Contact Us</h2>
<p>If you have questions about this Privacy Policy, please contact:</p>
<p>Tri-County Driving Academy, Inc.<br>' . esc_html(daw_get_contact('address')) . '<br>Phone: ' . esc_html(daw_get_contact('phone')) . '<br>Email: <a href="mailto:' . esc_attr(daw_get_contact('email')) . '">' . esc_html(daw_get_contact('email')) . '</a></p>

<p><em>Last updated: January 2025</em></p>',

        'terms-of-service' => '
<h2>Enrollment Agreement</h2>
<p>By enrolling in any training program at Tri-County Driving Academy, Inc., you agree to the following terms and conditions.</p>

<h2>Admissions Requirements</h2>
<ul>
<li>Students must meet all program-specific prerequisites as listed on the respective program page</li>
<li>CDL students must be at least 18 years old (21 for interstate driving) and hold a valid driver\'s license</li>
<li>All students must pass required DOT physical and drug screening where applicable</li>
<li>Tri-County Driving Academy reserves the right to deny admission based on driving record review</li>
</ul>

<h2>Tuition & Payment</h2>
<ul>
<li>Tuition is due in full prior to the start of training unless a payment plan or financial aid has been arranged</li>
<li>Payment plans are available interest-free with no credit check required</li>
<li>Financial aid through WIOA, Veterans Benefits, and employer reimbursement may cover partial or full tuition</li>
<li>All fees are subject to change; current pricing is listed on our Financial Aid page</li>
</ul>

<h2>Attendance & Conduct</h2>
<ul>
<li>Students are expected to attend all scheduled training sessions</li>
<li>Excessive absences may result in dismissal from the program</li>
<li>Students must comply with all safety regulations and instructor directions</li>
<li>Use of alcohol, drugs, or any controlled substance during training is grounds for immediate dismissal</li>
<li>Students dismissed for conduct violations are not eligible for tuition refunds</li>
</ul>

<h2>Refund Policy</h2>
<ul>
<li>Students who withdraw before the first day of class receive a full refund minus the registration fee</li>
<li>Refunds after the start of training are prorated based on the percentage of training completed</li>
<li>No refund is given after 50% of the program has been completed</li>
<li>Refund requests must be submitted in writing to the academy administration</li>
</ul>

<h2>Certification & Licensing</h2>
<ul>
<li>Successful completion of training does not guarantee passing state licensing exams</li>
<li>Students are responsible for all DMV fees, endorsement fees, and licensing costs</li>
<li>Tri-County Driving Academy provides test preparation but the licensing authority makes all pass/fail determinations</li>
</ul>

<h2>Job Placement</h2>
<p>Tri-County Driving Academy offers lifetime job placement assistance to graduates. While we maintain partnerships with 30+ hiring companies and have a 94% placement rate, we do not guarantee employment.</p>

<h2>Limitation of Liability</h2>
<p>Tri-County Driving Academy, Inc. is not liable for any injuries sustained during training beyond what is covered by our insurance policies. Students participate in all training activities at their own risk and must follow all safety protocols.</p>

<h2>Contact</h2>
<p>For questions about these terms, contact:<br>Tri-County Driving Academy, Inc.<br>' . esc_html(daw_get_contact('address')) . '<br>Phone: ' . esc_html(daw_get_contact('phone')) . '<br>Email: <a href="mailto:' . esc_attr(daw_get_contact('email')) . '">' . esc_html(daw_get_contact('email')) . '</a></p>

<p><em>Last updated: January 2025</em></p>',
    ];

    return $pages[$slug] ?? '<p>This page is being updated. Please check back soon.</p>';
}
