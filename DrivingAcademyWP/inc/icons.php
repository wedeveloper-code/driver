<?php
/**
 * Inline SVG icon system (replaces FontAwesome)
 */

function daw_icon(string $name, string $class = '', string $size = '24'): string {
    $icons = [
        'truck' => '<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v2h2.382a1 1 0 0 1 .894.553l2.448 4.896A1 1 0 0 1 22 12v4a2 2 0 0 1-2 2h-1a3 3 0 1 1-6 0H9a3 3 0 1 1-6 0H2a2 2 0 0 1-2-2V4zm16 12a1 1 0 1 0 0 2 1 1 0 0 0 0-2zM6 16a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm10-8V6H2v10h1.05A2.99 2.99 0 0 1 6 14c1.2 0 2.27.7 2.76 1.73h4.48A3 3 0 0 1 16 14c.77 0 1.47.29 2 .76V12h-2z"/>',
        'chevron-down' => '<path d="M6 9l6 6 6-6"/>',
        'bars' => '<path d="M3 6h18M3 12h18M3 18h18"/>',
        'xmark' => '<path d="M6 6l12 12M6 18L18 6"/>',
        'star' => '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 22 12 18.27 5.82 22 7 14.14l-5-4.87 6.91-1.01z"/>',
        'certificate' => '<path d="M12 2L9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61z"/>',
        'dollar' => '<path d="M12 2v20m5-15c0-1.66-2.24-3-5-3S7 5.34 7 7s2.24 3 5 3 5 1.34 5 3-2.24 3-5 3-5-1.34-5-3"/>',
        'graduation' => '<path d="M12 3L1 9l11 6 9-4.91V17h2V9z"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17z"/>',
        'briefcase' => '<path d="M20 7H4a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>',
        'clock' => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
        'road' => '<path d="M4 19L8 5h2l-4 14zm10 0L18 5h2l-4 14zM11 5h2v3h-2zm0 5h2v3h-2zm0 5h2v3h-2z"/>',
        'check' => '<path d="M20 6L9 17l-5-5"/>',
        'shield' => '<path d="M12 2l8 4v6c0 5.25-3.5 9.74-8 11-4.5-1.26-8-5.75-8-11V6z"/>',
        'location' => '<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>',
        'phone' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.81.36 1.6.68 2.34a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.74.32 1.53.55 2.34.68a2 2 0 0 1 1.72 2.05z"/>',
        'envelope' => '<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/>',
        'facebook' => '<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>',
        'linkedin' => '<path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>',
        'instagram' => '<rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><circle cx="17.5" cy="6.5" r="1.5"/>',
        'arrow-right' => '<path d="M5 12h14M12 5l7 7-7 7"/>',
        'users' => '<path d="M17 21v-2a4 4 0 0 0-3-3.87M9 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><circle cx="16" cy="3.13" r="4"/>',
        'wrench' => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',
        'excavator' => '<path d="M18 10h-4l-3-8H7L4 10H2v4h2l1 6h14l1-6h2v-4h-4zm-6-6l2 6H8l2-6h2z"/>',
        'cog' => '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/>',
        'award' => '<circle cx="12" cy="8" r="7"/><path d="M8.21 13.89L7 23l5-3 5 3-1.21-9.12"/>',
        'heart' => '<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>',
        'map' => '<path d="M1 6v16l7-4 8 4 7-4V2l-7 4-8-4z"/><path d="M8 2v16M16 6v16"/>',
        'home' => '<path d="M3 12l9-9 9 9"/><path d="M9 21V12h6v9"/>',
        'book' => '<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M4 4.5A2.5 2.5 0 0 1 6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5z"/>',
        'plus' => '<path d="M12 5v14M5 12h14"/>',
        'minus' => '<path d="M5 12h14"/>',
        'send' => '<path d="M22 2L11 13M22 2l-7 20-4-9-9-4z"/>',
        'building' => '<path d="M3 21h18M9 8h1M9 12h1M9 16h1M14 8h1M14 12h1M14 16h1M5 21V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16"/>',
        'handshake' => '<path d="M11 17l-1.56 1.56a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83L12 10.34M16.73 7.27l.34-.34a2.82 2.82 0 1 0-4-4l-5.38 5.38a2 2 0 0 0 0 2.83L11 14.46"/><path d="M2 11l6-6M22 13l-6 6"/>',
        'file-text' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/>',
        'target' => '<circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/>',
        'trending-up' => '<path d="M23 6l-9.5 9.5-5-5L1 18"/><path d="M17 6h6v6"/>',
        'tool' => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91A6 6 0 0 1 14.7 6.3z"/>',
        'quote' => '<path d="M3 21c3 0 7-1 7-8V5c0-1.25-.76-2.017-2-2H5c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V21z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.76-2.017-2-2h-3c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3z"/>',
    ];

    if (!isset($icons[$name])) {
        return '';
    }

    $svg_class = 'daw-icon daw-icon--' . esc_attr($name);
    if ($class) {
        $svg_class .= ' ' . esc_attr($class);
    }

    $stroke_icons = [
        'chevron-down', 'bars', 'xmark', 'clock', 'check', 'arrow-right',
        'phone', 'envelope', 'briefcase', 'dollar', 'plus', 'minus',
    ];
    $is_stroke = in_array($name, $stroke_icons, true);

    $fill   = $is_stroke ? 'none' : 'currentColor';
    $stroke = $is_stroke ? 'currentColor' : 'none';
    $sw     = $is_stroke ? ' stroke-width="2" stroke-linecap="round" stroke-linejoin="round"' : '';

    return sprintf(
        '<svg class="%s" width="%s" height="%s" viewBox="0 0 24 24" fill="%s" stroke="%s"%s aria-hidden="true">%s</svg>',
        $svg_class,
        esc_attr($size),
        esc_attr($size),
        $fill,
        $stroke,
        $sw,
        $icons[$name]
    );
}
