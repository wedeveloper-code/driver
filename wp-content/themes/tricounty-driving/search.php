<?php get_header(); ?>

<div class="page-banner">
  <div class="container">
    <h1>
      <?php
      $query = get_search_query();
      if ($query) {
          echo 'Search Results: ' . esc_html($query);
      } else {
          echo 'Search';
      }
      ?>
    </h1>
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      &rsaquo; <span>Search</span>
    </nav>
  </div>
</div>

<div class="container">
  <div class="content-area" style="padding:50px 0;">
    <main id="main-content">

      <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" style="margin-bottom:32px;">
        <div style="display:flex;gap:8px;">
          <input type="search" name="s" value="<?php echo esc_attr(get_search_query()); ?>"
                 placeholder="Search programs, news..."
                 style="flex:1;padding:10px 14px;border:1px solid #ccc;border-radius:4px;font-size:1rem;font-family:inherit;">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
      </form>

      <?php if (have_posts()) : ?>
        <p style="font-size:.9rem;color:#777;margin-bottom:24px;">
          <?php
          global $wp_query;
          printf(
              'Found %d result%s for &ldquo;%s&rdquo;',
              (int) $wp_query->found_posts,
              $wp_query->found_posts !== 1 ? 's' : '',
              esc_html(get_search_query())
          );
          ?>
        </p>

        <?php while (have_posts()) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('mb-3'); ?>
                   style="padding-bottom:28px;margin-bottom:28px;border-bottom:1px solid #eee;">
            <h2 style="font-size:1.35rem;margin-bottom:4px;">
              <a href="<?php the_permalink(); ?>" style="color:#1a1a2e;"><?php the_title(); ?></a>
            </h2>
            <p style="font-size:.82rem;color:#999;margin-bottom:10px;">
              <?php echo esc_html(ucfirst(get_post_type())); ?>
              <?php if ('post' === get_post_type()) : ?>
                &mdash; <?php echo get_the_date(); ?>
              <?php endif; ?>
            </p>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary"
               style="font-size:.85rem;padding:7px 16px;">View</a>
          </article>
        <?php endwhile; ?>

        <div class="mt-2">
          <?php the_posts_pagination(['mid_size' => 2]); ?>
        </div>

      <?php else : ?>
        <p>No results found for &ldquo;<?php echo esc_html(get_search_query()); ?>&rdquo;.</p>
        <p>Try a different search term, or browse our <a href="<?php echo esc_url(home_url('/courses/')); ?>">programs</a>.</p>
      <?php endif; ?>

    </main>

    <?php get_template_part('template-parts/sidebar', 'courses'); ?>
  </div>
</div>

<?php get_footer(); ?>
