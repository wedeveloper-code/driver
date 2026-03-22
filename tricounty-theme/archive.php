<?php
/**
 * Template: News Archive (Blog listing)
 * Matches news.html design
 */
get_header();

$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$categories = get_categories(array('hide_empty' => true));

// Get the latest sticky or first post for featured
$featured_args = array(
    'posts_per_page' => 1,
    'post__in' => get_option('sticky_posts'),
);
$featured_query = new WP_Query($featured_args);
if (!$featured_query->have_posts()) {
    $featured_query = new WP_Query(array('posts_per_page' => 1));
}
?>

<main>
  <section class="news-hero" style="background-image:url('<?php echo tricounty_img('a-lot-of-trucks.jpg'); ?>');">
    <div class="container news-hero-content">
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span>/</span>
        <span>News &amp; Updates</span>
      </nav>
      <h1>Academy News &amp; Industry Updates</h1>
      <p>Stay up to date with the latest from Tri-County Driving Academy and the transportation industry.</p>
    </div>
  </section>

  <?php if ($featured_query->have_posts() && $paged == 1) : $featured_query->the_post(); ?>
  <section class="section">
    <div class="container">
      <article class="card news-featured">
        <div class="news-featured-media" style="background-image:url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : tricounty_img('truck.jpg'); ?>');"></div>
        <div class="news-featured-body">
          <?php
          $cats = get_the_category();
          if ($cats) : ?>
            <span class="badge"><?php echo esc_html($cats[0]->name); ?></span>
          <?php endif; ?>
          <span class="news-date"><?php echo get_the_date('F j, Y'); ?></span>
          <h2 class="section-title" style="margin:0;"><?php the_title(); ?></h2>
          <p class="section-intro" style="margin:0;"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
          <a class="news-link" href="<?php the_permalink(); ?>">Read Full Article &rarr;</a>
        </div>
      </article>
    </div>
  </section>
  <?php wp_reset_postdata(); endif; ?>

  <?php if ($categories && $paged == 1) : ?>
  <section class="section" style="padding-top:0;">
    <div class="container">
      <div class="filter-pills" aria-label="Categories filter">
        <a class="pill <?php echo !is_category() ? 'is-active' : ''; ?>" href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">All News</a>
        <?php foreach ($categories as $cat) : ?>
          <a class="pill <?php echo is_category($cat->term_id) ? 'is-active' : ''; ?>" href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

  <section class="section" style="padding-top:0;">
    <div class="container">
      <?php if (have_posts()) : ?>
      <div class="news-grid">
        <?php while (have_posts()) : the_post(); ?>
        <article class="card news-card">
          <div class="news-thumb" style="background-image:url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium_large') : tricounty_img('truck.jpg'); ?>');"></div>
          <div class="news-card-body">
            <span class="news-date"><?php echo get_the_date('F j, Y'); ?> &middot; <?php
              $post_cats = get_the_category();
              echo $post_cats ? esc_html($post_cats[0]->name) : 'News';
            ?></span>
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            <a href="<?php the_permalink(); ?>" class="news-link">Read more</a>
          </div>
        </article>
        <?php endwhile; ?>
      </div>

      <?php
      $pagination = paginate_links(array(
          'prev_text' => '&larr; Previous',
          'next_text' => 'Next &rarr;',
          'type'      => 'array',
      ));
      if ($pagination) : ?>
      <div class="center-wrap" style="margin-top:1.4rem;">
        <nav class="pagination-nav" aria-label="Posts pagination">
          <?php foreach ($pagination as $link) : ?>
            <?php echo $link; ?>
          <?php endforeach; ?>
        </nav>
      </div>
      <?php endif; ?>

      <?php else : ?>
      <div class="center-wrap">
        <p>No news articles found.</p>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="section" style="padding-top:0;">
    <div class="container">
      <div class="bottom-cta">
        <div>
          <h2 style="font-family:Rajdhani,sans-serif;font-size:2rem;line-height:1.05;">Ready to start your driving career?</h2>
          <p>Classes are forming now.</p>
        </div>
        <div style="display:flex;gap:0.65rem;flex-wrap:wrap;">
          <a class="btn" style="background:#f59e0b;color:#0f172a;" href="<?php echo esc_url(home_url('/admissions/')); ?>">Apply Today</a>
          <a class="btn btn-outline" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Contact Admissions</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
