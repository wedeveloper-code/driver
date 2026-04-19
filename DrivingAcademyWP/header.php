<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo esc_url(DAW_URI . '/assets/images/favicon.ico'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(DAW_URI . '/assets/images/favicon.png'); ?>" type="image/png">
    <?php daw_seo_meta(); ?>
    <?php daw_schema_local_business(); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container site-header__inner">
        <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?>">
            <?php if (has_custom_logo()) : ?>
                <?php
                $logo_id = get_theme_mod('custom_logo');
                $logo_url = wp_get_attachment_image_url($logo_id, 'full');
                ?>
                <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>" class="site-logo__img" width="160" height="45">
            <?php else : ?>
                <?php echo daw_icon('truck', 'site-logo__icon', '32'); ?>
                <span class="site-logo__text">Tri-County <span class="site-logo__accent">Academy</span></span>
            <?php endif; ?>
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="<?php esc_attr_e('Toggle navigation', 'drivingacademywp'); ?>" aria-expanded="false">
            <?php echo daw_icon('bars', '', '24'); ?>
        </button>

        <nav class="main-nav" id="mainNav" aria-label="<?php esc_attr_e('Primary navigation', 'drivingacademywp'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'items_wrap'     => '<div class="main-nav__list">%3$s</div>',
                'walker'         => new DAW_Nav_Walker(),
                'fallback_cb'    => false,
            ]);
            ?>
        </nav>
    </div>
</header>

<main id="main-content">
