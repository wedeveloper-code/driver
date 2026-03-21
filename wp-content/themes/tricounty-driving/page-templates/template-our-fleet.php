<?php
/**
 * Template Name: Our Fleet
 * Description: Our Training Fleet & Facilities page.
 */

declare(strict_types=1);

get_header();

$img = get_template_directory_uri() . '/assets/images/';
?>

<!-- ── PAGE BANNER ── -->
<section class="page-banner fleet-hero" style="background-image:url('<?php echo esc_url($img . 'tractor_trailer_services.jpg'); ?>');">
  <div class="page-banner-overlay"></div>
  <div class="container" style="position:relative;z-index:2;">
    <span class="fleet-hero-label">Train on the Best</span>
    <h1>Our Training Fleet &amp; Facilities</h1>
    <p>Your career demands real-world experience. We maintain a diverse fleet of manual and automatic semi-trucks, heavy equipment, and a fully operational mechanics bay so you are day-one ready.</p>
  </div>
</section>

<!-- ── E-E-A-T TRUST CARDS ── -->
<section class="fleet-trust-wrap">
  <div class="container">
    <div class="fleet-trust-grid">

      <div class="fleet-trust-card">
        <div class="fleet-trust-icon fleet-trust-icon--blue">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="3"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14"/><path d="M4.93 4.93a10 10 0 0 0 0 14.14"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/><path d="M8.46 8.46a5 5 0 0 0 0 7.07"/></svg>
        </div>
        <h3>No "E" Restriction</h3>
        <p>We train and test on <strong>10-speed manual transmissions</strong> so you graduate with a full, unrestricted Class A CDL — maximizing your job opportunities with every carrier.</p>
      </div>

      <div class="fleet-trust-card">
        <div class="fleet-trust-icon fleet-trust-icon--amber">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><line x1="9" y1="2" x2="9" y2="4"/><line x1="15" y1="2" x2="15" y2="4"/><line x1="9" y1="20" x2="9" y2="22"/><line x1="15" y1="20" x2="15" y2="22"/><line x1="2" y1="9" x2="4" y2="9"/><line x1="2" y1="15" x2="4" y2="15"/><line x1="20" y1="9" x2="22" y2="9"/><line x1="20" y1="15" x2="22" y2="15"/></svg>
        </div>
        <h3>Modern Automatics</h3>
        <p>With 80% of major fleets moving to automated manual transmissions (AMTs), we ensure you get seat time in the exact trucks you'll drive professionally.</p>
      </div>

      <div class="fleet-trust-card">
        <div class="fleet-trust-icon fleet-trust-icon--green">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
        </div>
        <h3>DOT Compliant</h3>
        <p>Every piece of equipment is meticulously maintained by our in-house diesel mechanics program to exceed FMCSA and DOT safety standards.</p>
      </div>

    </div>
  </div>
</section>

<!-- ── COMMERCIAL TRUCKS ── -->
<section class="fleet-section fleet-section--white">
  <div class="container">

    <div class="fleet-section-header">
      <span class="fleet-section-rule"></span>
      <h2>Commercial Trucks &amp; Trailers</h2>
    </div>

    <div class="fleet-truck-grid">

      <!-- Truck 1: Manual -->
      <div class="fleet-truck-card">
        <div class="fleet-truck-img-wrap">
          <span class="fleet-truck-badge fleet-truck-badge--navy">10-Speed Manual</span>
          <img
            src="<?php echo esc_url($img . 'truck.jpg'); ?>"
            alt="Freightliner Cascadia manual training truck"
            loading="lazy"
            width="800"
            height="400"
          >
        </div>
        <div class="fleet-truck-body">
          <h3>Freightliner Cascadia</h3>
          <p class="fleet-truck-subtitle">Primary Training Vehicle</p>
          <ul class="fleet-specs">
            <li>
              <span class="fleet-spec-label">Engine</span>
              <span class="fleet-spec-value">Detroit DD15 (400–505 HP)</span>
            </li>
            <li>
              <span class="fleet-spec-label">Transmission</span>
              <span class="fleet-spec-value">Eaton Fuller 10-Speed Manual</span>
            </li>
            <li>
              <span class="fleet-spec-label">Configuration</span>
              <span class="fleet-spec-value">Tandem Axle, Day Cab</span>
            </li>
          </ul>
          <p class="fleet-truck-note">Mastering the double-clutch on our 10-speed manuals ensures you will never have an "E" (Automatic Only) restriction on your CDL license.</p>
        </div>
      </div>

      <!-- Truck 2: Automatic -->
      <div class="fleet-truck-card">
        <div class="fleet-truck-img-wrap">
          <span class="fleet-truck-badge fleet-truck-badge--amber">Automated Manual (AMT)</span>
          <img
            src="<?php echo esc_url($img . 'tractor_trailer_services.jpg'); ?>"
            alt="Kenworth T680 automated manual training truck"
            loading="lazy"
            width="800"
            height="400"
          >
        </div>
        <div class="fleet-truck-body">
          <h3>Kenworth T680</h3>
          <p class="fleet-truck-subtitle">Highway &amp; Road Test Vehicle</p>
          <ul class="fleet-specs">
            <li>
              <span class="fleet-spec-label">Engine</span>
              <span class="fleet-spec-value">PACCAR MX-13</span>
            </li>
            <li>
              <span class="fleet-spec-label">Transmission</span>
              <span class="fleet-spec-value">12-Speed Automated Manual</span>
            </li>
            <li>
              <span class="fleet-spec-label">Configuration</span>
              <span class="fleet-spec-value">76-inch Sleeper Cab (Highway)</span>
            </li>
          </ul>
          <p class="fleet-truck-note">Nationally used by major carriers, training on our automatics prepares you for the modern, fuel-efficient trucks you will likely drive after graduation.</p>
        </div>
      </div>

    </div><!-- /.fleet-truck-grid -->

    <!-- Trailer info banner -->
    <div class="fleet-trailer-banner">
      <div class="fleet-trailer-body">
        <h3>Our Trailer Fleet</h3>
        <p>We don't just teach you to drive the truck — we teach you how to handle the load. Our yard features a mix of <strong>53′ Dry Vans</strong> (empty and loaded with water-weights for realistic simulation) and <strong>48′ Flatbeds</strong> for load securement training.</p>
      </div>
      <div class="fleet-trailer-stat">
        <span class="fleet-trailer-number">15+</span>
        <span class="fleet-trailer-label">Trailers on Site</span>
      </div>
    </div>

  </div>
</section>

<!-- ── HEAVY EQUIPMENT ── -->
<section class="fleet-section fleet-section--light">
  <div class="container">

    <div class="fleet-section-header">
      <span class="fleet-section-rule"></span>
      <h2>Heavy Equipment Fleet</h2>
      <p class="fleet-section-sub">For our Construction &amp; Heavy Equipment Operation students, we utilize industry-standard machinery found on real jobsites.</p>
    </div>

    <div class="fleet-equipment-grid">

      <div class="fleet-equipment-card">
        <div class="fleet-equipment-img">
          <img
            src="<?php echo esc_url($img . 'heavy.jpg'); ?>"
            alt="Track excavator used in heavy equipment training"
            loading="lazy"
            width="600"
            height="300"
          >
        </div>
        <div class="fleet-equipment-body">
          <h4>Track Excavators</h4>
          <p class="fleet-equipment-model">CAT 320 &amp; Komatsu PC210</p>
          <ul class="fleet-check-list">
            <li>Joystick ISO/SAE controls</li>
            <li>Trenching &amp; grading simulation</li>
            <li>Enclosed ROPS/FOPS cabs</li>
          </ul>
        </div>
      </div>

      <div class="fleet-equipment-card">
        <div class="fleet-equipment-img">
          <img
            src="<?php echo esc_url($img . 'heavy.jpg'); ?>"
            alt="Wheel loader used in operator training"
            loading="lazy"
            width="600"
            height="300"
            style="object-position:right;"
          >
        </div>
        <div class="fleet-equipment-body">
          <h4>Wheel Loaders</h4>
          <p class="fleet-equipment-model">John Deere 544L</p>
          <ul class="fleet-check-list">
            <li>Articulated steering</li>
            <li>Stockpiling &amp; truck loading</li>
            <li>Quick-coupler attachments</li>
          </ul>
        </div>
      </div>

      <div class="fleet-equipment-card">
        <div class="fleet-equipment-img">
          <img
            src="<?php echo esc_url($img . 'heavy.jpg'); ?>"
            alt="Bulldozer used in heavy equipment operator training"
            loading="lazy"
            width="600"
            height="300"
            style="object-position:center 70%;"
          >
        </div>
        <div class="fleet-equipment-body">
          <h4>Bulldozers</h4>
          <p class="fleet-equipment-model">CAT D6N</p>
          <ul class="fleet-check-list">
            <li>6-Way PAT blade operation</li>
            <li>GPS machine control basics</li>
            <li>Rough &amp; finish grading</li>
          </ul>
        </div>
      </div>

    </div><!-- /.fleet-equipment-grid -->
  </div>
</section>

<!-- ── REPAIR BAYS ── -->
<section class="fleet-bays">
  <div class="container">
    <div class="fleet-bays-inner">

      <div class="fleet-bays-text">
        <span class="fleet-bays-label">Diesel Mechanics Facility</span>
        <h2>State-of-the-Art Repair Bays</h2>
        <p>Our 10,000 sq. ft. maintenance facility serves two purposes: it keeps our CDL fleet in pristine, DOT-compliant condition, and serves as the hands-on classroom for our Diesel Mechanics students.</p>
        <ul class="fleet-bays-list">
          <li>
            <span class="fleet-bays-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
            </span>
            <div>
              <strong>Full-Service Pits &amp; Lifts</strong>
              <span>Three fully equipped bays capable of lifting fully loaded tractor-trailers for undercarriage inspection and repair.</span>
            </div>
          </li>
          <li>
            <span class="fleet-bays-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
            </span>
            <div>
              <strong>Advanced Diagnostics Lab</strong>
              <span>Equipped with Cummins INSITE™, Detroit Diagnostic Link, and Bendix ACom software to read and clear ECM fault codes.</span>
            </div>
          </li>
          <li>
            <span class="fleet-bays-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 12h10"/><path d="M9 4v16"/><path d="M3 9l-1 3 1 3"/><rect x="12" y="3" width="10" height="18" rx="1"/></svg>
            </span>
            <div>
              <strong>HVAC &amp; Brake Stations</strong>
              <span>Dedicated stations for air brake board simulations and Freon recovery/recharging.</span>
            </div>
          </li>
        </ul>
      </div>

      <div class="fleet-bays-images">
        <img
          src="<?php echo esc_url($img . 'truck.jpg'); ?>"
          alt="Diesel mechanic working on truck engine"
          loading="lazy"
          width="400"
          height="280"
          class="fleet-bays-img fleet-bays-img--top"
        >
        <img
          src="<?php echo esc_url($img . 'tractor_trailer_services.jpg'); ?>"
          alt="Heavy-duty truck in repair bay"
          loading="lazy"
          width="400"
          height="280"
          class="fleet-bays-img fleet-bays-img--bottom"
        >
      </div>

    </div>
  </div>
</section>

<!-- ── CAMPUS TOUR CTA ── -->
<section class="fleet-tour-cta">
  <div class="container">
    <div class="fleet-tour-inner">
      <div class="fleet-tour-text">
        <h2>Want to see our equipment in person?</h2>
        <p>Words and pictures only go so far. Come to Lebanon, VA and walk the yard, sit in the cab of our Freightliners, and see the repair bays for yourself.</p>
      </div>
      <div class="fleet-tour-action">
        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>" class="btn-amber">
          Schedule a Visit
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
        </a>
        <p class="fleet-tour-hours">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          Tours available Mon–Fri, 9 AM – 4 PM · Call <a href="tel:2767947660">(276) 794-7660</a>
        </p>
      </div>
    </div>
  </div>
</section>

<?php
if (have_posts()) : while (have_posts()) : the_post();
    $content = get_the_content();
    if ($content) :
?>
<div class="container" style="padding:40px 20px;">
  <div class="entry-content"><?php the_content(); ?></div>
</div>
<?php
    endif;
endwhile; endif;

get_footer();
?>
