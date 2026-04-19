<section class="trust-bar">
    <div class="container">
        <div class="trust-bar__grid">
            <?php for ($i = 1; $i <= 3; $i++) :
                $icon     = get_theme_mod("daw_trust_{$i}_icon", ['shield', 'certificate', 'dollar'][$i - 1]);
                $title    = get_theme_mod("daw_trust_{$i}_title", ['DMV Approved', 'NCCER Certified', 'WIOA Eligible'][$i - 1]);
                $subtitle = get_theme_mod("daw_trust_{$i}_subtitle", ['State Certified Training', 'National Craft Standards', 'Financial Aid Available'][$i - 1]);
            ?>
            <div class="trust-bar__item">
                <div class="trust-bar__icon"><?php echo daw_icon($icon, '', '20'); ?></div>
                <div class="trust-bar__label">
                    <div class="trust-bar__title"><?php echo esc_html($title); ?></div>
                    <div class="trust-bar__subtitle"><?php echo esc_html($subtitle); ?></div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
