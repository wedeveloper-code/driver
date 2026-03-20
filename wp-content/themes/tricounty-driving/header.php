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

<!-- Top Bar -->
<div id="top-bar">
  <div class="container">
    <span>1714 US Hwy 19, Hansonville / P.O. Box 2109, Lebanon, VA 24266</span>
    <span><a href="tel:2767947660">276-794-7660</a> &nbsp;|&nbsp; <a href="mailto:tcda1@hotmail.com">tcda1@hotmail.com</a></span>
  </div>
</div>

<!-- Site Header -->
<header id="site-header">
  <div class="container">
    <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
      <?php
      if (has_custom_logo()) {
        the_custom_logo();
      } else { ?>
        <div class="site-logo-text">
          <span class="site-name"><?php bloginfo('name'); ?></span>
          <span class="site-tagline"><?php bloginfo('description'); ?></span>
        </div>
      <?php } ?>
    </a>

    <button class="nav-toggle" aria-controls="primary-nav" aria-expanded="false">
      &#9776; <span class="sr-only">Menu</span>
    </button>

    <nav id="primary-nav" aria-label="Primary Navigation">
      <?php wp_nav_menu([
        'theme_location' => 'primary',
        'menu_class'     => '',
        'container'      => false,
        'fallback_cb'    => 'tricounty_fallback_nav',
      ]); ?>
    </nav>
  </div>
</header>
<!-- /Site Header -->
