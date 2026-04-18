<?php
/**
 * Register widget areas
 */

add_action('widgets_init', function () {
    register_sidebar([
        'name'          => __('Blog Sidebar', 'drivingacademywp'),
        'id'            => 'sidebar-blog',
        'description'   => __('Sidebar for blog/news pages.', 'drivingacademywp'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget__title">',
        'after_title'   => '</h3>',
    ]);
});
