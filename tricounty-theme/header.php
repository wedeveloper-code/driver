<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container header-inner">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Tri-County Driving Academy Home">
      <span class="logo-badge">TC</span>
      <span>Tri-County Driving Academy</span>
    </a>

    <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">☰</button>

    <nav class="main-nav" id="mainNav" aria-label="Primary navigation">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a></li>
        <li class="dropdown" id="programsDropdown">
          <button type="button" aria-expanded="false">Training Programs ▾</button>
          <div class="dropdown-menu" role="menu">
            <a href="<?php echo esc_url(home_url('/cdl-class-a-training/')); ?>">CDL Class "A" Training</a>
            <a href="<?php echo esc_url(home_url('/heavy-equipment-training/')); ?>">Heavy Equipment Training</a>
            <a href="<?php echo esc_url(home_url('/diesel-mechanics/')); ?>">Diesel Mechanics</a>
            <a href="<?php echo esc_url(home_url('/nccer-training/')); ?>">NCCER Training</a>
            <a href="<?php echo esc_url(home_url('/driver-improvement/')); ?>">Driver Improvement</a>
          </div>
        </li>
        <li><a href="<?php echo esc_url(home_url('/admissions/')); ?>">Admissions &amp; Funding</a></li>
        <li><a href="<?php echo esc_url(home_url('/job-placement/')); ?>">Career Placement</a></li>
        <li><a href="<?php echo esc_url(home_url('/news/')); ?>">News</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Us</a></li>
      </ul>
    </nav>

    <div class="header-actions">
      <a class="btn btn-primary header-cta" href="<?php echo esc_url(home_url('/admissions/')); ?>">Apply Now</a>
    </div>
  </div>
</header>
