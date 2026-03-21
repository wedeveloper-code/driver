<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php
  if (is_singular()) { echo wp_strip_all_tags(get_the_excerpt()); }
  else { bloginfo('description'); }
?>">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Site Header -->
<header id="site-header">
  <div class="header-inner container">

    <!-- Logo -->
    <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
      <?php if (has_custom_logo()) : ?>
        <div class="logo-icon"><?php the_custom_logo(); ?></div>
      <?php else : ?>
        <div class="logo-icon"><?php echo tcda_icon('truck'); ?></div>
        <div class="logo-text">
          <span class="logo-name">TRI-COUNTY</span>
          <span class="logo-tagline">Driving Academy</span>
        </div>
      <?php endif; ?>
    </a>

    <!-- Desktop + Mobile Nav -->
    <nav id="primary-nav" aria-label="Primary Navigation">
      <?php wp_nav_menu([
        'theme_location' => 'primary',
        'menu_class'     => '',
        'container'      => false,
        'fallback_cb'    => 'tricounty_fallback_nav',
      ]); ?>
      <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" id="nav-contact-btn">Contact Us</a>
    </nav>

    <!-- Mobile hamburger -->
    <button class="nav-toggle" aria-controls="primary-nav" aria-expanded="false">
      <span class="hamburger-icon" aria-hidden="true">&#9776;</span>
      <span class="close-icon"     aria-hidden="true">&#10005;</span>
      <span class="sr-only">Menu</span>
    </button>

  </div>
</header>
<!-- /Site Header -->
