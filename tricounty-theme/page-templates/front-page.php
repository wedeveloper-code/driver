<?php
/**
 * Template Name: Home Page
 */
get_header();
$img = 'get_template_directory_uri' ;
?>

<main>
  <section class="hero" aria-label="Hero slider">
    <div class="slides">
      <div class="slide active" style="background-image:url('<?php echo tricounty_img('two-trucks.jpg'); ?>');"></div>
      <div class="slide" style="background-image:url('<?php echo tricounty_img('bulldozer-training.jpg'); ?>');"></div>
      <div class="slide" style="background-image:url('<?php echo tricounty_img('training-in-engine-design.jpg'); ?>');"></div>
      <div class="slide" style="background-image:url('<?php echo tricounty_img('a-lot-of-trucks.jpg'); ?>');"></div>
      <div class="slide" style="background-image:url('<?php echo tricounty_img('excavator-and-loader-training.jpg'); ?>');"></div>
      <div class="slide" style="background-image:url('<?php echo tricounty_img('man-studying.jpg'); ?>');"></div>
    </div>

    <div class="hero-content">
      <span class="eyebrow">Training in Lebanon, Virginia</span>
      <h1>From Student Driver to Hired Professional</h1>
      <p>Tri-County Driving Academy, Inc. is certified to operate by the State Council of Higher Education for Virginia (SCHEV). Hands-on training, recognized certifications, and direct employer pathways for trucking, construction, and mechanical careers.</p>
      <div class="hero-actions">
        <a href="<?php echo esc_url(home_url('/admissions/')); ?>" class="btn btn-primary">Apply Now</a>
        <a href="#programs" class="btn btn-outline">View Programs</a>
      </div>
    </div>

    <div class="carousel-controls">
      <div class="arrows">
        <button id="prevSlide" class="arrow-btn" aria-label="Previous slide">‹</button>
        <button id="nextSlide" class="arrow-btn" aria-label="Next slide">›</button>
      </div>
      <div class="dots" id="dots"></div>
    </div>
  </section>

  <div class="trust-bar" aria-label="Trust badges">
    <div class="container trust-inner">
      <span class="trust-item"><span class="mark">✓</span> DMV Approved</span>
      <span class="trust-item"><span class="mark">★</span> NCCER Certified</span>
      <span class="trust-item"><span class="mark">$</span> WIOA Eligible</span>
      <span class="trust-item"><span class="mark">✓</span> SCHEV Certified</span>
    </div>
  </div>

  <section class="section" id="programs">
    <div class="container">
      <h2 class="section-title">Core Programs</h2>
      <p class="section-intro">Each training track blends classroom instruction with practical field or yard time so graduates are ready for hiring standards.</p>
      <div class="program-grid">
        <article class="card program-card">
          <div class="program-media" style="background-image:url('<?php echo tricounty_img('a-lot-of-trucks.jpg'); ?>');"></div>
          <div class="program-body">
            <h3>CDL Class "A" Training</h3>
            <p>Tri-County Driving Academy Commercial Driver/Class "A" CDL Training program will provide you with the knowledge and skills to become a Class "A" licensed driver. The occupational scale for a Commercial Driver averages $2,400 - $3,600 monthly. Program cost: $4,500.</p>
            <a href="<?php echo esc_url(home_url('/cdl-class-a-training/')); ?>">Learn More</a>
          </div>
        </article>
        <article class="card program-card">
          <div class="program-media" style="background-image:url('<?php echo tricounty_img('excavator-and-loader-training.jpg'); ?>');"></div>
          <div class="program-body">
            <h3>Heavy Equipment Training</h3>
            <p>The construction industry is in constant need of competent employees. The typical pay scale for Equipment Operators is $1,800-$3,600 monthly. Training includes Backhoe, Excavator, Dozer operation plus OSHA and NCCER certification. Tuition: $4,900.</p>
            <a href="<?php echo esc_url(home_url('/heavy-equipment-training/')); ?>">Learn More</a>
          </div>
        </article>
        <article class="card program-card">
          <div class="program-media" style="background-image:url('<?php echo tricounty_img('training-in-engine-design.jpg'); ?>');"></div>
          <div class="program-body">
            <h3>Diesel Mechanics</h3>
            <p>The need for diesel engine specialists is increasing. Median hourly wages including incentive pay average $18.94. Our 11-month program covers engine fundamentals, fuel injection systems, computerized systems, brakes, and A/C. Tuition: $21,500.</p>
            <a href="<?php echo esc_url(home_url('/diesel-mechanics/')); ?>">Learn More</a>
          </div>
        </article>
        <article class="card program-card">
          <div class="program-media" style="background-image:url('<?php echo tricounty_img('nccer-training.jpg'); ?>');"></div>
          <div class="program-body">
            <h3>NCCER Training</h3>
            <p>Tri-County Driving Academy offers NCCER Training in Heavy Equipment Operations Level One. Students successfully completing the program will earn industry-recognized credentials verifiable through the NCCER Automated National Registry.</p>
            <a href="<?php echo esc_url(home_url('/nccer-training/')); ?>">Learn More</a>
          </div>
        </article>
        <article class="card program-card">
          <div class="program-media" style="background-image:url('<?php echo tricounty_img('tractor_trailer_services.jpg'); ?>');"></div>
          <div class="program-body">
            <h3>Driver Improvement</h3>
            <p>This Driver Improvement Course is certified by the Commonwealth of Virginia and is acceptable at any Virginia Court. Classes are held from 8:00am until 5:00pm. Price: $75.</p>
            <a href="<?php echo esc_url(home_url('/driver-improvement/')); ?>">Learn More</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container grid-2">
      <article class="panel funding">
        <h2 class="section-title">Funding & Grants</h2>
        <p class="section-intro">Cost should not delay your career. We are a WIOA approved training provider. You may qualify for full tuition coverage. Admissions advisors help students access workforce programs, veteran support, and flexible monthly payments.</p>
        <p>We also provide informational materials along with brochures to anyone inquiring about our school. Our staff is always helpful and ready to offer assistance with training and lodging. We can also direct you to the right person who can offer financial assistance.</p>
        <p style="margin-top:0.9rem;"><a class="btn btn-primary" href="<?php echo esc_url(home_url('/financial-aid/')); ?>">Explore Funding Options</a></p>
      </article>
      <article class="panel career">
        <h2 class="section-title">Career & Job Placement</h2>
        <p class="section-intro">Tri-County Driving Academy helps place its graduates for employment with several major carriers. Many graduates have completed employment applications, conducted interviews, and selected their employer before graduation.</p>
        <div class="stats">
          <div class="stat"><strong data-counter="29">0</strong><span>Years in Business</span></div>
          <div class="stat"><strong data-counter="1000">0</strong><span>Graduates</span></div>
          <div class="stat"><strong data-counter="45">0</strong><span>Employer Partners</span></div>
          <div class="stat"><strong data-counter="90">0</strong><span>Placement Focus %</span></div>
        </div>
      </article>
    </div>
  </section>

  <section class="section" style="background:var(--sand);">
    <div class="container">
      <h2 class="section-title">Testimonials</h2>
      <p class="section-intro">Graduates describe the school as practical, direct, and focused on employment outcomes.</p>
      <div class="grid-2">
        <article class="card panel"><p>"Instructors pushed us to train like professionals. I started my first route in less than a month after finishing."</p><p><strong>James R.</strong>, CDL Class A Graduate</p></article>
        <article class="card panel"><p>"The heavy equipment track gave me real seat time and confidence. Recruiters took me seriously during interviews."</p><p><strong>Maria T.</strong>, Equipment Operator Graduate</p></article>
        <article class="card panel"><p>"Admissions helped me secure funding and avoid delays. The support team stayed involved until I accepted an offer."</p><p><strong>Kevin L.</strong>, Diesel Program Graduate</p></article>
        <article class="card panel"><p>"Career services helped with resume edits, mock interviews, and introductions to local employers."</p><p><strong>Nicole D.</strong>, NCCER Graduate</p></article>
      </div>
    </div>
  </section>

  <section class="lead-area section">
    <div class="container lead-grid">
      <article class="lead-card">
        <h3>Questions? Speak with Admissions.</h3>
        <p>Tell us your goals and we will recommend the best program start date, funding path, and enrollment timeline.</p>
        <form class="contact-form" data-demo-form>
          <input type="text" name="name" placeholder="Full Name" required />
          <input type="tel" name="phone" placeholder="Phone Number" required />
          <input type="email" name="email" placeholder="Email Address" required />
          <textarea name="message" placeholder="What program interests you?"></textarea>
          <button class="btn btn-primary" type="submit">Request Information</button>
        </form>
        <p style="margin-top:0.75rem;">Call <a href="tel:+12767947660">(276) 794-7660</a> or email <a href="mailto:tcda1@hotmail.com">tcda1@hotmail.com</a></p>
      </article>

      <article class="lead-card">
        <h3>Visit Our Campus</h3>
        <p>Tri-County Driving Academy, 1714 US Hwy 19, Hansonville, VA. Tour classrooms, trucks, equipment, and maintenance bays.</p>
        <p>From Interstate 81 take Virginia Exit 14 (Abingdon). Turn left to Route 19 North. Go approximately 30 miles. Pass through the town of Lebanon. The school is located 3 miles past Lebanon on the left in Hansonville.</p>
        <div class="map-wrap">
          <iframe title="Map of Tri-County Driving Academy" loading="lazy" src="https://www.google.com/maps?q=36.825827,-82.139253&output=embed"></iframe>
        </div>
      </article>
    </div>
  </section>
</main>

<?php get_footer(); ?>
