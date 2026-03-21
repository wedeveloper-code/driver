<?php
/**
 * Template Name: Courses Archive
 * Description: Lists all training programs.
 */
get_header();
get_template_part('template-parts/content', 'page-banner');
?>

<div class="container">
  <div class="content-area">
    <main id="main-content">
      <p style="font-size:1.05rem;color:#555;margin-bottom:20px;">
        We strive to produce skilled, motivated, and safe workers. To accomplish this we have set the
        highest standard for our staff and students. The result: our graduates are some of the most
        accepted new operators in the industry.
      </p>
      <ul class="checklist" style="margin-bottom:28px;">
        <li>Individual students receive classroom and job-site training — they handle equipment in a variety of real situations.</li>
        <li>The days of the self-trained operator are gone. Today's equipment complexity demands professional, confident, well-trained workers.</li>
        <li>Companies depend on us for that kind of operator. They know our graduates are well trained and highly motivated.</li>
      </ul>

      <h2 style="margin-bottom:24px;">Our Programs</h2>
      <div class="courses-grid">

        <?php
        $courses = [
          [
            'title' => 'CDL Class "A" Training',
            'price' => '$4,500 (VA) / $3,450 (TN) / $3,950 (other states)',
            'url'   => home_url('/commercial-driver-training-class-a-cdl/'),
            'desc'  => 'Earn your Class A CDL in just 4 weeks. Train on real tractor-trailers. Tuition includes training, books, supplies, DOT physical, and drug screen. Classes begin every 3 weeks.',
          ],
          [
            'title' => 'Certified Heavy Equipment Training',
            'price' => '$4,900 (VA) / $4,250 (TN &amp; other states)',
            'url'   => home_url('/certified-heavy-equipment-training/'),
            'desc'  => '6-week program. Operate backhoes, excavators, dozers, and forklifts. Earn NCCER Heavy Equipment Operations Level One credentials. OSHA, flagman, and forklift certifications included.',
          ],
          [
            'title' => 'Diesel Mechanics / Heavy Truck Maintenance',
            'price' => '$21,500 (VA) — financial aid available',
            'url'   => home_url('/diesel-mechanics-heavy-truck-maintenance/'),
            'desc'  => '11-month program covering diesel engines, computerized systems, truck electronics, brakes, and HVAC. Includes ASE certification exam prep. Median wage ~$18.94/hr.',
          ],
          [
            'title' => 'NCCER Training',
            'price' => 'Included with Heavy Equipment Training',
            'url'   => home_url('/nccer-training/'),
            'desc'  => 'Earn industry-recognized NCCER credentials verifiable through the NCCER Automated National Registry upon completing Heavy Equipment Operations Level One.',
          ],
          [
            'title' => 'Virginia Driver Improvement Course',
            'price' => '$75',
            'url'   => home_url('/driver-improvement/'),
            'desc'  => 'Virginia-certified driver improvement course accepted at any Virginia court allowing driver improvement courses. In-person at our Lebanon, VA location. Hours: 8am–5pm.',
          ],
        ];

        foreach ($courses as $course) : ?>
        <div class="course-card">
          <div class="course-card-img">
            <span class="course-card-icon">&#128663;</span>
          </div>
          <div class="course-card-body">
            <h3 class="course-card-title">
              <a href="<?php echo esc_url($course['url']); ?>"><?php echo $course['title']; ?></a>
            </h3>
            <p class="course-card-price">Price: <?php echo esc_html($course['price']); ?></p>
            <p><?php echo esc_html($course['desc']); ?></p>
          </div>
          <div class="course-card-footer">
            <a href="<?php echo esc_url($course['url']); ?>" class="btn btn-primary" style="font-size:.85rem;padding:8px 18px;">Read More</a>
          </div>
        </div>
        <?php endforeach; ?>

      </div><!-- /.courses-grid -->
    </main>

    <?php get_template_part('template-parts/sidebar', 'courses'); ?>
  </div>
</div>

<?php get_footer(); ?>
