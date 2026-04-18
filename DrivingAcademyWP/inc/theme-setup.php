<?php
/**
 * Theme setup: supports, menus, image sizes
 */

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'width'       => 300,
        'height'      => 80,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('editor-styles');

    register_nav_menus([
        'primary'          => __('Primary Menu', 'drivingacademywp'),
        'footer-programs'  => __('Footer: Our Programs', 'drivingacademywp'),
        'footer-resources' => __('Footer: Student Resources', 'drivingacademywp'),
        'footer-legal'     => __('Footer: Legal & Useful', 'drivingacademywp'),
    ]);

    add_image_size('program-card', 800, 480, true);
    add_image_size('hero-slide', 1920, 1080, true);
    add_image_size('avatar', 150, 150, true);
});

/**
 * Custom nav walker for primary menu with dropdown support
 */
class DAW_Nav_Walker extends Walker_Nav_Menu {

    public function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<div class="nav-dropdown" role="menu">';
    }

    public function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</div>';
    }

    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0) {
        $item = $data_object;
        $classes = empty($item->classes) ? [] : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes, true);

        if ($depth === 0) {
            if ($has_children) {
                $output .= '<div class="nav-item nav-item--has-children">';
                $output .= '<button class="nav-item__link nav-item__toggle" aria-expanded="false">';
                $output .= esc_html($item->title);
                $output .= ' ' . daw_icon('chevron-down', 'nav-chevron');
                $output .= '</button>';
            } else {
                $is_cta = in_array('menu-cta', $classes, true);
                $class = $is_cta ? 'nav-item__link nav-item__link--cta' : 'nav-item__link';
                $output .= '<div class="nav-item">';
                $output .= '<a class="' . $class . '" href="' . esc_url($item->url) . '">';
                $output .= esc_html($item->title);
                $output .= '</a>';
            }
        } else {
            $output .= '<a class="nav-dropdown__link" href="' . esc_url($item->url) . '" role="menuitem">';
            $output .= esc_html($item->title);
            $output .= '</a>';
        }
    }

    public function end_el(&$output, $data_object, $depth = 0, $args = null) {
        if ($depth === 0) {
            $output .= '</div>';
        }
    }
}
