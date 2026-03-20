<?php get_header(); ?>

<div class="container">
  <div class="error-404-content">
    <h1>404</h1>
    <h2>Page Not Found</h2>
    <p style="max-width:500px;margin:0 auto 30px;color:#666;">
      Sorry, the page you're looking for doesn't exist. It may have been moved or deleted.
    </p>
    <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Go to Homepage</a>
      <a href="<?php echo esc_url(home_url('/courses/')); ?>" class="btn btn-secondary">View Courses</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>
