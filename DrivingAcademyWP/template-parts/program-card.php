<?php
$thumb = get_the_post_thumbnail_url(get_the_ID(), 'program-card');
$fallback = DAW_URI . '/assets/images/truck.jpg';
?>
<article class="program-card">
    <div class="program-card__image">
        <img src="<?php echo esc_url($thumb ?: $fallback); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy" width="800" height="480">
    </div>
    <div class="program-card__body">
        <h3 class="program-card__title"><?php the_title(); ?></h3>
        <p class="program-card__text"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?></p>
        <a href="<?php the_permalink(); ?>" class="program-card__link">
            <?php esc_html_e('Learn More', 'drivingacademywp'); ?>
            <?php echo daw_icon('arrow-right', '', '16'); ?>
        </a>
    </div>
</article>
