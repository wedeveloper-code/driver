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
          Tri-County Driving Academy/Skill Center was established in <strong>1996</strong> by
          <strong>D. Carter McGlothlin</strong>. The organization started out as a school for
          Class "A" CDL instruction. Over the years the Center has grown into a school that now
          includes training for Heavy Equipment Operators and Diesel Mechanics/Heavy Truck
          Maintenance. The school provides personal training to each student.
        </p>
        <p>
          We are located between Lebanon and Abingdon, Virginia at
          <strong>1714 US Hwy 19, Hansonville, VA</strong>.
        </p>

        <h3 style="margin-top:28px;">Our Staff &amp; Instructors</h3>
        <p>
          Our instructors are certified in their fields and offer the needed "one on one" assistance
          to make sure that our students are ready to pursue their career before completing their
          training.
        </p>
        <p>
          All of our classes are fully equipped with up-to-date training materials to provide
          sufficient training in your area of interest. We also provide informational materials
          along with brochures to anyone inquiring about our school. Our staff is always helpful
          and ready to offer assistance with training and lodging. We can also direct you to the
          right person who can offer financial assistance.
        </p>

        <h3 style="margin-top:28px;">Career Placement</h3>
        <p>
          With the growing need for qualified tractor trailer drivers, heavy equipment operators,
          and diesel mechanics, we can point you in the right direction to get you started in the
          industry. We assist with job placement in all areas.
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
          <a href="<?php echo esc_url(home_url('/tennessee-student-information/')); ?>">Info for TN Students</a>
          page for transferability of credits and tuition fees.</p>
        </div>

      <?php endif; ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
