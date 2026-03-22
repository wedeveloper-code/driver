<?php
/**
 * Template: Single News Article (Post)
 * Matches single-news.html design with categories, tags, sidebar
 */
get_header();

$categories = get_the_category();
$tags = get_the_tags();

// Get recent posts for sidebar
$recent_posts = new WP_Query(array(
    'posts_per_page' => 4,
    'post__not_in'   => array(get_the_ID()),
));

// Get all categories for sidebar widget
$all_categories = get_categories(array('hide_empty' => true));

// Related posts (same category)
$related_cat_ids = array();
if ($categories) {
    foreach ($categories as $cat) {
        $related_cat_ids[] = $cat->term_id;
    }
}
$related_posts = new WP_Query(array(
    'posts_per_page' => 3,
    'post__not_in'   => array(get_the_ID()),
    'category__in'   => $related_cat_ids,
));
?>

<main class="article-shell">
  <section class="section" style="padding-bottom:2.4rem;">
    <div class="container article-layout">
      <article class="article-main">
        <header class="post-header">
          <nav class="post-breadcrumbs" aria-label="Breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <span>/</span>
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">News</a>
            <?php if ($categories) : ?>
            <span>/</span>
            <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>"><?php echo esc_html($categories[0]->name); ?></a>
            <?php endif; ?>
            <span>/</span>
            <span><?php the_title(); ?></span>
          </nav>

          <div class="post-meta">
            <?php if ($categories) : ?>
              <span class="badge"><?php echo esc_html($categories[0]->name); ?></span>
            <?php endif; ?>
            <span class="news-date"><?php echo get_the_date('F j, Y'); ?></span>
            <span class="dot" aria-hidden="true"></span>
            <span class="news-date"><?php echo tricounty_reading_time(); ?> min read</span>
          </div>

          <h1 class="post-title"><?php the_title(); ?></h1>
        </header>

        <?php if (has_post_thumbnail()) : ?>
        <div class="post-featured">
          <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
        </div>
        <?php endif; ?>

        <div class="article-content">
          <?php the_content(); ?>
        </div>

        <div class="post-end">
          <?php if ($tags) : ?>
          <div class="tag-list" aria-label="Tags">
            <strong style="color:#0f172a;">Tags:</strong>
            <?php foreach ($tags as $tag) : ?>
              <a class="tag" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"><?php echo esc_html($tag->name); ?></a>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

          <div class="share-list" aria-label="Share options">
            <strong style="color:#0f172a;">Share:</strong>
            <a class="share-btn" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener">Share on Facebook</a>
            <a class="share-btn" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener">Share on LinkedIn</a>
            <button class="share-btn" type="button" data-copy-link>Copy Link</button>
          </div>
        </div>
      </article>

      <aside class="article-sidebar">
        <article class="card sidebar-widget sidebar-cta">
          <h3>Start Your New Career in 4 Weeks!</h3>
          <p>WIOA Grants Available. Speak with admissions to confirm eligibility and upcoming class start dates.</p>
          <a class="btn" style="background:#f59e0b;color:#0f172a;" href="<?php echo esc_url(home_url('/admissions/')); ?>">Apply Now</a>
        </article>

        <?php if ($recent_posts->have_posts()) : ?>
        <article class="card sidebar-widget">
          <h3 class="sidebar-title">Recent News</h3>
          <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
          <div class="recent-item">
            <div class="recent-thumb" style="background-image:url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') : tricounty_img('truck.jpg'); ?>');"></div>
            <div class="recent-body">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <small><?php echo get_the_date('F j, Y'); ?></small>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </article>
        <?php endif; ?>

        <?php if ($all_categories) : ?>
        <article class="card sidebar-widget">
          <h3 class="sidebar-title">Categories</h3>
          <ul class="category-list">
            <?php foreach ($all_categories as $cat) : ?>
            <li><a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><span><?php echo esc_html($cat->name); ?></span><span>(<?php echo $cat->count; ?>)</span></a></li>
            <?php endforeach; ?>
          </ul>
        </article>
        <?php endif; ?>
      </aside>
    </div>
  </section>

  <?php if ($related_posts->have_posts()) : ?>
  <section class="section related-news" style="padding-top:0;">
    <div class="container">
      <h2 class="section-title">More Academy News</h2>
      <p class="section-intro">You might also like these recent updates from Tri-County Driving Academy.</p>

      <div class="news-grid">
        <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
        <article class="card news-card">
          <div class="news-thumb" style="background-image:url('<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium_large') : tricounty_img('truck.jpg'); ?>');"></div>
          <div class="news-card-body">
            <span class="news-date"><?php echo get_the_date('F j, Y'); ?> &middot; <?php
              $rel_cats = get_the_category();
              echo $rel_cats ? esc_html($rel_cats[0]->name) : 'News';
            ?></span>
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
            <a href="<?php the_permalink(); ?>" class="news-link">Read more</a>
          </div>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <?php endif; ?>

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
