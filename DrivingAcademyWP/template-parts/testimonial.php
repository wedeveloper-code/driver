<?php
$name  = $args['name'] ?? '';
$role  = $args['role'] ?? '';
$quote = $args['quote'] ?? '';
$image = $args['image'] ?? '';
?>
<div class="testimonial-card">
    <blockquote class="testimonial-card__quote"><?php echo esc_html($quote); ?></blockquote>
    <div class="testimonial-card__author">
        <?php if ($image) : ?>
            <img class="testimonial-card__avatar" src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($name); ?>" width="48" height="48" loading="lazy">
        <?php endif; ?>
        <div>
            <div class="testimonial-card__name"><?php echo esc_html($name); ?></div>
            <div class="testimonial-card__role"><?php echo esc_html($role); ?></div>
        </div>
    </div>
</div>
