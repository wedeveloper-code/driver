<?php
/**
 * Template: Category Archive
 * Uses same layout as news archive with category highlighted
 */
get_header();

$current_cat = get_queried_object();
$categories = get_categories(array('hide_empty' => true));
?>

<main>
  <section class="news-hero" style="background-image:url('<?php echo tricounty_img('a-lot-of-trucks.jpg'); ?>');">
    <div class="container news-hero-content">
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <span>/</span>
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">News</a>
        <span>/</span>
        <span><?php echo esc_html($current_cat->name); ?></span>
      </nav>
      <h1><?php echo esc_html($current_cat->name); ?></h1>
      <?php if ($current_cat->description) : ?>
        <p><?php echo esc_html($current_cat->description); ?></p>
      <?php else : ?>
        <p>Browse all articles in <?php echo esc_html($current_cat->name); ?>.</p>
      <?php endif; ?>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="filter-pills" aria-label="Categories filter">
        <a class="pill" href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">All News</a>
        <?php foreach ($categories as $cat) : ?>
          <a class="pill <?php echo ($cat->term_id === $current_cat->term_id) ? 'is-active' : ''; ?>" href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section" style="padding-top:0;">
    <div class="container">
      <?php if (have_posts()) : ?>
      <div class="news-grid">
        <?php while (have_posts()) : the_post(); ?>
        <article class="card news-card">
          <div class="news-thumb" style="background-image:url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium_large') : tricounty_img('truck.jpg'); ?>');"></div>
          <div class="news-card-body">
            <span class="news-date"><?php echo get_the_date('F j, Y'); ?> &middot; <?php echo esc_html($current_cat->name); ?></span>
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
          <?php foreach ($pagination as $link) echo $link; ?>
        </nav>
      </div>
      <?php endif; ?>

      <?php else : ?>
      <div class="center-wrap">
        <p>No articles found in this category.</p>
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
