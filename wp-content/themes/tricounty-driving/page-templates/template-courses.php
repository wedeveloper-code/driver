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
            'title' => 'Tractor Trailer Training (CDL Class A)',
            'price' => '$4,500 (VA) / $3,450 (TN)',
            'url'   => home_url('/courses/tractor-trailer-training/'),
            'desc'  => 'The trucking industry is experiencing driver shortages. Graduates earn Class "A" CDL and are qualified to drive long distances, regionally, or locally. Price includes training, books, supplies, DOT physical, and drug screen.',
          ],
          [
            'title' => 'Heavy Equipment Training',
            'price' => '$4,900 (VA) / $4,250 (TN)',
            'url'   => home_url('/courses/heavy-equipment-training/'),
            'desc'  => 'Construction is a thriving business in constant need of safe, competent heavy equipment operators. Operate dozers, end loaders, excavators, and back-hoes. Earn NCCER industry credentials.',
          ],
          [
            'title' => 'Fiber Optics Training',
            'price' => '$2,500',
            'url'   => home_url('/courses/fiber-optics-training/'),
            'desc'  => 'Fiber Optic design, installation, and maintenance is a profession that will see increasing demands in the future. Become a certified Assembler or Installer/Technician. Classes start the first Monday of each month.',
          ],
          [
            'title' => 'Diesel School',
            'price' => '$21,500',
            'url'   => home_url('/courses/diesel-school/'),
            'desc'  => 'Program Length: 11 months. Training covers diesel engines, transmissions, fuel injection systems, computerized systems, truck electricity, and more. Financial aid available for Virginia residents.',
          ],
          [
            'title' => 'Surface Mining Papers',
            'price' => '$125',
            'url'   => home_url('/courses/surface-mining-papers/'),
            'desc'  => 'Program Length: Two days. Classes start once per month. Includes tuition and books.',
          ],
          [
            'title' => 'OSHA &amp; Hazmat Training',
            'price' => '$125',
            'url'   => home_url('/courses/osha-hazmat-training/'),
            'desc'  => 'Program Length: Two days. Classes start once per month. Includes tuition, books, and supplies.',
          ],
          [
            'title' => 'Virginia Online Driver Improvement Course',
            'price' => '$75',
            'url'   => home_url('/courses/virginia-online-driver-improvement/'),
            'desc'  => 'State-certified online Driver Improvement Course accepted at any Virginia Court that allows online driver improvement courses.',
          ],
          [
            'title' => 'Driver Improvement Class (In-Person)',
            'price' => '$75',
            'url'   => home_url('/courses/driver-improvement/'),
            'desc'  => 'In-person Driver Improvement class held at Tri-County Driving Academy, 1714 US Hwy 19, Lebanon, VA. Classes held 8am–5pm. Call for schedule.',
          ],
          [
            'title' => 'NCCER Training',
            'price' => 'Included with Heavy Equipment Training',
            'url'   => home_url('/courses/nccer-training/'),
            'desc'  => 'Earn industry-recognized credentials verifiable through the NCCER Automated National Registry upon completing Heavy Equipment Operations Level One.',
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
