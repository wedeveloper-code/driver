<?php
/**
 * Template Name: Our Fleet
 */
get_header();
?>

<main>
  <section class="inner-hero" style="background-image:url('<?php echo tricounty_img('bulldozer-training.jpg'); ?>');">
    <div class="inner-hero-content">
      <span class="eyebrow">Fleet &amp; Facility</span>
      <h1>Our Training Fleet and Yard</h1>
      <p>Train on modern equipment that reflects real jobsite and road conditions.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h2 class="section-title">Equipment Highlights</h2>
      <p class="section-intro">Our fleet includes manual and automatic trucks, heavy equipment units, and workshop bays for mechanical training. All classes are fully equipped with up to date training materials.</p>
      <div class="fleet-grid">
        <article class="card fleet-card">
          <div class="media" style="background-image:url('<?php echo tricounty_img('two-trucks.jpg'); ?>');"></div>
          <div class="body">
            <h3>CDL Trucks</h3>
            <p>Manual and automatic Class A tractors with trailer combinations for complete CDL training coverage. Students practice pre-trip inspection, backing maneuvers, coupling and uncoupling.</p>
          </div>
        </article>
        <article class="card fleet-card">
          <div class="media" style="background-image:url('<?php echo tricounty_img('excavator-and-loader-training.jpg'); ?>');"></div>
          <div class="body">
            <h3>Excavators &amp; Loaders</h3>
            <p>Operator training units including backhoe, excavator, and dozer for site movement, trenching practice, and production workflows.</p>
          </div>
        </article>
        <article class="card fleet-card">
          <div class="media" style="background-image:url('<?php echo tricounty_img('training-in-engine-design.jpg'); ?>');"></div>
          <div class="body">
            <h3>Diesel Workshop Bays</h3>
            <p>Dedicated maintenance bays with diesel engine systems, fuel injection, electrical, brakes, and HVAC components for diagnostics and service training.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" style="background:var(--sand);">
    <div class="container grid-2">
      <article class="card panel">
        <h2 class="section-title">Facility Specifications</h2>
        <ul class="list">
          <li>Dedicated backing and maneuver yard zones for CDL training</li>
          <li>Classroom spaces with safety and compliance modules</li>
          <li>Lab stations for diesel systems and maintenance tasks</li>
          <li>Equipment inspection and maintenance support areas</li>
          <li>NCCER certified training environment</li>
          <li>OSHA compliant facility</li>
        </ul>
      </article>
      <article class="card panel">
        <h2 class="section-title">Training Value</h2>
        <p>Students train on the same categories of machines and systems they will encounter at work, reducing transition time after graduation.</p>
        <p style="margin-top:0.8rem;">Our instructors are certified in their fields and offer the needed "one on one" assistance to make sure that our students are ready to pursue their career before completing their training.</p>
        <p style="margin-top:0.8rem;"><a class="btn btn-primary" href="<?php echo esc_url(home_url('/contact-us/')); ?>">Book a Campus Tour</a></p>
      </article>
    </div>
  </section>
</main>

<?php get_footer(); ?>
