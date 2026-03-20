<?php
/**
 * Template Name: Directions
 */
get_header();
get_template_part('template-parts/content', 'page-banner');
?>

<div class="container">
  <div class="content-area no-sidebar" style="padding:50px 0;">
    <main id="main-content">
      <h2>How to Find Us</h2>
      <p>Tri-County Driving Academy is located at <strong>1714 US Hwy 19, Hansonville, Virginia</strong> — between Lebanon and Abingdon, VA.</p>

      <div style="margin-bottom:32px;">
        <iframe
          class="map-embed"
          src="https://maps.google.com/maps?q=1714+US+Hwy+19,+Hansonville,+VA&output=embed"
          allowfullscreen
          loading="lazy"
          title="Tri-County Driving Academy map">
        </iframe>
      </div>

      <div style="display:grid;grid-template-columns:1fr 1fr;gap:32px;margin-bottom:32px;">
        <div>
          <h3>Address &amp; Contact</h3>
          <p>
            Tri-County Driving Academy<br>
            1714 US Hwy 19, Hansonville<br>
            P.O. Box 2109<br>
            Lebanon, VA 24266
          </p>
          <p style="margin-top:14px;">
            <strong>Phone:</strong><br>
            <a href="tel:2767947660" style="font-size:1.15rem;font-weight:700;color:#b22222;">276-794-7660</a>
          </p>
          <p style="margin-top:10px;">
            <strong>Email:</strong><br>
            <a href="mailto:tcda1@hotmail.com">tcda1@hotmail.com</a>
          </p>
        </div>
        <div>
          <h3>Accommodations</h3>
          <p>
            Tri-County Driving Academy is located within minutes of the Town and Country Motor Lodge,
            which provides our students with accommodations. The motel reserves rooms to our students
            for approximately <strong>$28.00 per night</strong>. The rooms are equipped with small
            refrigerators.
          </p>
        </div>
      </div>

      <h3>Driving Directions from I-81</h3>
      <ol style="padding-left:24px;margin-bottom:24px;">
        <li style="margin-bottom:10px;">From <strong>Interstate 81</strong>, take <strong>Virginia Exit 14 (Abingdon)</strong>, just north of Bristol.</li>
        <li style="margin-bottom:10px;">Turn <strong>right</strong> at the end of the exit ramp. (If coming north from Tennessee, the exit automatically goes to the right.)</li>
        <li style="margin-bottom:10px;">Go to the second red light and turn <strong>right</strong> onto <strong>Lee Hwy / US 11</strong> — this is a "T" intersection.</li>
        <li style="margin-bottom:10px;">Go to the second red light and turn <strong>left</strong> onto <strong>US 19 N / Alt. 58 W</strong>. You will see a Walgreens on your right and CVS on your left.</li>
        <li style="margin-bottom:10px;">Go approximately <strong>12 miles</strong> until you enter Russell County. You will pass a Dodge Dealership on your right.</li>
        <li style="margin-bottom:10px;">Go about ½ to 1 mile and you will see a <strong>Valero gas station</strong> on your right. This is <strong>Hansonville</strong>.</li>
        <li style="margin-bottom:10px;">Turn <strong>right</strong> into the Valero parking lot, go to the back of the lot, and you will see our driveway going down the hill. We are the last blue building on the hill.</li>
      </ol>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry-content"><?php the_content(); ?></div>
      <?php endwhile; endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
