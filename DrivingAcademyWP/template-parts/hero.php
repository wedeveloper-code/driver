<?php
$defaults = [
    1 => [
        'image'   => DAW_URI . '/assets/images/a-lot-of-trucks.jpg',
        'badge'   => 'Start Your Career Today',
        'heading' => 'Master the Road with CDL Class A Training',
        'subtext' => 'Get behind the wheel and start a high-paying career. Comprehensive hands-on training from industry experts.',
        'cta_text' => 'View Programs',
        'cta_url'  => '#programs',
    ],
    2 => [
        'image'   => DAW_URI . '/assets/images/excavator-and-loader-training.jpg',
        'badge'   => 'Hands-On Training',
        'heading' => 'Professional Heavy Equipment Operation',
        'subtext' => 'Learn to operate excavators, dozers, and loaders safely and efficiently on real job sites.',
        'cta_text' => 'Learn More',
        'cta_url'  => '/heavy-equipment-training/',
    ],
    3 => [
        'image'   => DAW_URI . '/assets/images/training-in-engine-design.jpg',
        'badge'   => 'High Demand Career',
        'heading' => 'Become a Certified Diesel Mechanic',
        'subtext' => 'Keep the industry moving. Master diesel engine diagnostics, repair, and maintenance.',
        'cta_text' => 'Get Started',
        'cta_url'  => '/diesel-mechanics/',
    ],
];
?>

<section class="hero-carousel" aria-label="<?php esc_attr_e('Hero slider', 'drivingacademywp'); ?>">
    <?php for ($i = 1; $i <= 3; $i++) :
        $image   = get_theme_mod("daw_hero_{$i}_image", $defaults[$i]['image']);
        $badge   = get_theme_mod("daw_hero_{$i}_badge", $defaults[$i]['badge']);
        $heading = get_theme_mod("daw_hero_{$i}_heading", $defaults[$i]['heading']);
        $subtext = get_theme_mod("daw_hero_{$i}_subtext", $defaults[$i]['subtext']);
        $cta_text = get_theme_mod("daw_hero_{$i}_cta_text", $defaults[$i]['cta_text']);
        $cta_url  = get_theme_mod("daw_hero_{$i}_cta_url", $defaults[$i]['cta_url']);
    ?>
    <div class="hero-carousel__slide<?php echo $i === 1 ? ' active' : ''; ?>" style="background-image:url('<?php echo esc_url($image); ?>');">
        <div class="container">
            <div class="hero-carousel__content">
                <?php if ($badge) : ?>
                    <span class="hero-carousel__badge"><?php echo esc_html($badge); ?></span>
                <?php endif; ?>
                <h1 class="hero-carousel__title"><?php echo esc_html($heading); ?></h1>
                <p class="hero-carousel__text"><?php echo esc_html($subtext); ?></p>
                <?php if ($cta_text && $cta_url) : ?>
                    <a href="<?php echo esc_url($cta_url); ?>" class="btn btn--primary btn--lg"><?php echo esc_html($cta_text); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php endfor; ?>

    <button class="hero-carousel__arrow hero-carousel__arrow--prev" id="heroPrev" aria-label="<?php esc_attr_e('Previous slide', 'drivingacademywp'); ?>">
        <?php echo daw_icon('chevron-down', '', '20'); ?>
    </button>
    <button class="hero-carousel__arrow hero-carousel__arrow--next" id="heroNext" aria-label="<?php esc_attr_e('Next slide', 'drivingacademywp'); ?>">
        <?php echo daw_icon('chevron-down', '', '20'); ?>
    </button>

    <div class="container" style="position:relative;z-index:20;">
        <div class="hero-carousel__dots">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <button class="hero-carousel__dot<?php echo $i === 0 ? ' active' : ''; ?>" aria-label="<?php printf(esc_attr__('Go to slide %d', 'drivingacademywp'), $i + 1); ?>"></button>
            <?php endfor; ?>
        </div>
    </div>
</section>
