</main>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">

            <div class="footer-col">
                <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>" style="margin-bottom:1.25rem;display:inline-flex;">
                    <?php if (has_custom_logo()) : ?>
                        <?php
                        $logo_id = get_theme_mod('custom_logo');
                        $logo_url = wp_get_attachment_image_url($logo_id, 'full');
                        ?>
                        <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>" width="140" height="40" loading="lazy">
                    <?php else : ?>
                        <?php echo daw_icon('truck', 'site-logo__icon', '28'); ?>
                        <span class="site-logo__text" style="color:var(--white);">Tri-County <span class="site-logo__accent">Academy</span></span>
                    <?php endif; ?>
                </a>
                <div class="footer-contact">
                    <div class="footer-contact__item">
                        <?php echo daw_icon('location', '', '16'); ?>
                        <span><?php echo esc_html(daw_get_contact('address')); ?></span>
                    </div>
                    <div class="footer-contact__item">
                        <?php echo daw_icon('phone', '', '16'); ?>
                        <?php daw_phone_link(); ?>
                    </div>
                    <div class="footer-contact__item">
                        <?php echo daw_icon('envelope', '', '16'); ?>
                        <?php daw_email_link(); ?>
                    </div>
                    <div class="footer-contact__item">
                        <?php echo daw_icon('clock', '', '16'); ?>
                        <span><?php echo esc_html(daw_get_contact('hours')); ?></span>
                    </div>
                </div>
                <div class="footer-social">
                    <?php
                    $social = ['facebook', 'linkedin', 'instagram'];
                    foreach ($social as $network) :
                        $url = get_theme_mod('daw_' . $network . '_url', '');
                        if ($url) :
                    ?>
                        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr(ucfirst($network)); ?>">
                            <?php echo daw_icon($network, '', '16'); ?>
                        </a>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>

            <div class="footer-col">
                <h4 class="footer-col__title"><?php esc_html_e('Our Programs', 'drivingacademywp'); ?></h4>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer-programs',
                    'container'      => false,
                    'menu_class'     => 'footer-menu',
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ]);
                ?>
            </div>

            <div class="footer-col">
                <h4 class="footer-col__title"><?php esc_html_e('Student Resources', 'drivingacademywp'); ?></h4>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer-resources',
                    'container'      => false,
                    'menu_class'     => 'footer-menu',
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ]);
                ?>
            </div>

            <div class="footer-col">
                <h4 class="footer-col__title"><?php esc_html_e('Legal & Useful', 'drivingacademywp'); ?></h4>
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer-legal',
                    'container'      => false,
                    'menu_class'     => 'footer-menu',
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ]);
                ?>
            </div>

        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            &copy; <?php echo date('Y'); ?> <?php echo esc_html(get_theme_mod('daw_copyright', 'Tri-County Driving Academy, Inc. All rights reserved.')); ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
