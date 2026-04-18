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
        echo '<span class="breadcrumb__current">' . esc_html(get_the_title()) . '</span>';
    } elseif (is_single()) {
        echo '<a href="' . esc_url(get_permalink(get_option('page_for_posts'))) . '">News</a>';
        echo '<span class="breadcrumb__sep">/</span>';
        echo '<span class="breadcrumb__current">' . esc_html(get_the_title()) . '</span>';
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
