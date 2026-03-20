<?php
// Renders the page title banner. Call before content.
$title = isset($args['title']) ? $args['title'] : get_the_title();
?>
<div class="page-banner">
  <div class="container">
    <h1><?php echo esc_html($title); ?></h1>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <?php if (!is_front_page()) : ?>
        &rsaquo; <span><?php echo esc_html($title); ?></span>
      <?php endif; ?>
    </nav>
  </div>
</div>
