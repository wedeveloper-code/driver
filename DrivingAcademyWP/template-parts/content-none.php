<section class="section">
    <div class="container text-center">
        <h2 class="section__title"><?php esc_html_e('Nothing Found', 'drivingacademywp'); ?></h2>
        <p class="section__subtitle">
            <?php if (is_search()) : ?>
                <?php esc_html_e('No results matched your search terms. Try different keywords.', 'drivingacademywp'); ?>
            <?php else : ?>
                <?php esc_html_e('It seems we can\'t find what you\'re looking for. Check back soon for new content.', 'drivingacademywp'); ?>
            <?php endif; ?>
        </p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--primary mt-4"><?php esc_html_e('Back to Homepage', 'drivingacademywp'); ?></a>
    </div>
</section>
