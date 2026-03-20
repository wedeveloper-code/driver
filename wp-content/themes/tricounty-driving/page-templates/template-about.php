<?php
/**
 * Template Name: About Us
 */
get_header();
get_template_part('template-parts/content', 'page-banner');
?>

<div class="container">
  <div class="content-area no-sidebar" style="padding:50px 0;">
    <main id="main-content">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; else : ?>

        <h2>About Tri-County Driving Academy</h2>
        <p>
          Tri-County Driving Academy has been providing professional driver and trade training
          to students in Virginia and Tennessee since 2005. We are located between Lebanon and
          Abingdon, Virginia.
        </p>

        <h3 style="margin-top:28px;">Our Commitment to You</h3>
        <p>
          We strive to produce skilled, motivated, and safe workers. To accomplish this, we have
          set the highest standards for our staff and our students. The result: our graduates are
          some of the most accepted new operators in the industry.
        </p>
        <ul class="checklist" style="margin:16px 0 24px;">
          <li>Individual students receive both classroom and job-site training.</li>
          <li>Students handle equipment in a variety of real-world situations.</li>
          <li>Today's equipment complexity demands professional, well-trained operators.</li>
          <li>Companies depend on us to supply that level of skilled, motivated employee.</li>
        </ul>

        <h3>Accreditation &amp; Credentials</h3>
        <p>
          Our programs are certified by the Commonwealth of Virginia and authorized by the
          Tennessee Higher Education Commission for post-secondary educational operations.
          Graduates may receive up to 12 college credits and a Career Studies Diploma from
          Southwest Virginia Community College or Mountain Empire Community College.
        </p>
        <p style="font-size:.9rem;color:#666;">
          College credits may not apply to all states. Call <a href="tel:2767947660">276-794-7660</a>
          for eligibility.
        </p>

        <div class="info-box" style="margin-top:28px;">
          <p><strong>Tennessee Students:</strong> Tri-County Driving Academy is authorized for operation
          as a post-secondary educational institution by the Tennessee Higher Education Commission.
          Visit <a href="http://www.state.tn.us/thec" target="_blank" rel="noopener">www.state.tn.us/thec</a>
          for job placement and completion data. See our
          <a href="<?php echo esc_url(home_url('/info/info-for-tn-students/')); ?>">Info for TN Students</a>
          page for transferability of credits and tuition fees.</p>
        </div>

      <?php endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
