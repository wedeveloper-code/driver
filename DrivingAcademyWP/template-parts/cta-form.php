<?php
$form_title    = $args['title'] ?? 'Start Your Enrollment';
$form_subtitle = $args['subtitle'] ?? 'Next class starts soon. Reserve your spot today.';
$show_program  = $args['show_program'] ?? true;
?>
<div class="sticky-form">
    <h3 class="sticky-form__title"><?php echo esc_html($form_title); ?></h3>
    <p class="sticky-form__subtitle"><?php echo esc_html($form_subtitle); ?></p>
    <form data-demo-form>
        <div class="form-row">
            <div class="form-group">
                <label for="cta-fname"><?php esc_html_e('First Name', 'drivingacademywp'); ?></label>
                <input type="text" id="cta-fname" name="fname" required placeholder="John">
            </div>
            <div class="form-group">
                <label for="cta-lname"><?php esc_html_e('Last Name', 'drivingacademywp'); ?></label>
                <input type="text" id="cta-lname" name="lname" required placeholder="Doe">
            </div>
        </div>
        <div class="form-group mb-2">
            <label for="cta-phone"><?php esc_html_e('Phone Number', 'drivingacademywp'); ?></label>
            <input type="tel" id="cta-phone" name="phone" placeholder="(555) 123-4567">
        </div>
        <div class="form-group mb-2">
            <label for="cta-email"><?php esc_html_e('Email Address', 'drivingacademywp'); ?></label>
            <input type="email" id="cta-email" name="email" required placeholder="you@example.com">
        </div>
        <?php if ($show_program) : ?>
        <div class="form-group mb-3">
            <label for="cta-program"><?php esc_html_e('Program of Interest', 'drivingacademywp'); ?></label>
            <select id="cta-program" name="program">
                <option value="">Select a program...</option>
                <option>CDL Class "A" Training</option>
                <option>Heavy Equipment Training</option>
                <option>Diesel Mechanics</option>
                <option>NCCER Training</option>
                <option>Driver Improvement</option>
                <option>Not Sure / Other</option>
            </select>
        </div>
        <?php endif; ?>
        <button type="submit" class="btn btn--primary btn--block"><?php esc_html_e('Submit Application', 'drivingacademywp'); ?></button>
    </form>
</div>
