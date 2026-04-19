<?php
/**
 * Single Post Template
 */
get_header();
?>

<?php daw_breadcrumb(); ?>

<section class="section">
    <div class="container">
        <div class="blog-layout">
            <article class="single-post">
                <?php while (have_posts()) : the_post(); ?>

                <header class="single-post__header">
                    <h1 class="single-post__title"><?php the_title(); ?></h1>
                    <div class="single-post__meta">
                        <?php daw_posted_on(); ?> &middot; <?php daw_posted_by(); ?>
                        <?php
                        $categories = get_the_category();
                        if ($categories) :
                        ?>
                        &middot;
                        <?php
                        foreach ($categories as $i => $cat) {
                            if ($i > 0) echo ', ';
                            printf('<a href="%s">%s</a>', esc_url(get_category_link($cat->term_id)), esc_html($cat->name));
                        }
                        endif;
                        ?>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                <div class="single-post__image">
                    <?php the_post_thumbnail('hero-slide', ['loading' => 'lazy']); ?>
                </div>
                <?php endif; ?>

                <div class="single-post__content curriculum-section">
                    <?php the_content(); ?>
                </div>

                <footer class="single-post__footer">
                    <?php daw_entry_footer(); ?>
                </footer>

                <?php
                the_post_navigation([
                    'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'drivingacademywp') . '</span> <span class="nav-title">%title</span>',
                    'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'drivingacademywp') . '</span> <span class="nav-title">%title</span>',
                ]);
                ?>

                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>

                <?php endwhile; ?>
            </article>

            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
