(function () {
  'use strict';

  // --- Mobile Menu ---
  var navToggle = document.getElementById('navToggle');
  var mainNav = document.getElementById('mainNav');
  var navOpen = false;

  function closeMenu() {
    if (!navOpen) return;
    navOpen = false;
    mainNav.classList.remove('open');
    navToggle.innerHTML = '<svg class="daw-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18M3 12h18M3 18h18"/></svg>';
    navToggle.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('menu-open');
  }

  function openMenu() {
    navOpen = true;
    mainNav.classList.add('open');
    navToggle.innerHTML = '<svg class="daw-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 6l12 12M6 18L18 6"/></svg>';
    navToggle.setAttribute('aria-expanded', 'true');
    document.body.classList.add('menu-open');
  }

  if (navToggle && mainNav) {
    navToggle.addEventListener('click', function () {
      navOpen ? closeMenu() : openMenu();
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && navOpen) closeMenu();
    });

    document.addEventListener('click', function (e) {
      if (navOpen && !mainNav.contains(e.target) && !navToggle.contains(e.target)) {
        closeMenu();
      }
    });
  }

  // --- Mobile Dropdown Toggle ---
  var dropdownToggles = document.querySelectorAll('.nav-item__toggle');
  dropdownToggles.forEach(function (btn) {
    btn.addEventListener('click', function () {
      if (window.innerWidth >= 1024) return;
      var parent = btn.closest('.nav-item--has-children');
      if (parent) {
        parent.classList.toggle('open');
        btn.setAttribute('aria-expanded', parent.classList.contains('open') ? 'true' : 'false');
      }
    });
  });

  // --- Hero Carousel ---
  var slides = document.querySelectorAll('.hero-carousel__slide');
  var dots = document.querySelectorAll('.hero-carousel__dot');
  var prevBtn = document.getElementById('heroPrev');
  var nextBtn = document.getElementById('heroNext');
  var current = 0;
  var timer;

  function showSlide(index) {
    current = (index + slides.length) % slides.length;
    slides.forEach(function (slide, i) {
      slide.classList.toggle('active', i === current);
    });
    dots.forEach(function (dot, i) {
      dot.classList.toggle('active', i === current);
    });
  }

  function nextSlide() {
    showSlide(current + 1);
  }

  function startAutoplay() {
    clearInterval(timer);
    timer = setInterval(nextSlide, 6500);
  }

  if (slides.length > 1) {
    showSlide(0);
    startAutoplay();

    dots.forEach(function (dot, i) {
      dot.addEventListener('click', function () {
        showSlide(i);
        startAutoplay();
      });
    });

    if (prevBtn) {
      prevBtn.addEventListener('click', function () {
        showSlide(current - 1);
        startAutoplay();
      });
    }
    if (nextBtn) {
      nextBtn.addEventListener('click', function () {
        showSlide(current + 1);
        startAutoplay();
      });
    }

    var carousel = document.querySelector('.hero-carousel');
    if (carousel) {
      carousel.addEventListener('mouseenter', function () { clearInterval(timer); });
      carousel.addEventListener('mouseleave', startAutoplay);

      document.addEventListener('keydown', function (e) {
        var rect = carousel.getBoundingClientRect();
        if (rect.top > window.innerHeight || rect.bottom < 0) return;
        if (e.key === 'ArrowLeft') { showSlide(current - 1); startAutoplay(); }
        if (e.key === 'ArrowRight') { showSlide(current + 1); startAutoplay(); }
      });
    }
  } else if (slides.length === 1) {
    showSlide(0);
  }

  // --- Smooth Scroll ---
  var header = document.querySelector('.site-header');
  var scrollOffset = header ? header.offsetHeight + 20 : 100;

  document.querySelectorAll('a[href^="#"]').forEach(function (link) {
    link.addEventListener('click', function (e) {
      var id = this.getAttribute('href');
      if (id === '#') return;
      var target = document.querySelector(id);
      if (target) {
        e.preventDefault();
        var top = target.getBoundingClientRect().top + window.pageYOffset - scrollOffset;
        window.scrollTo({ top: top, behavior: 'smooth' });
        if (navOpen) closeMenu();
      }
    });
  });

  // --- IntersectionObserver Counters ---
  var counters = document.querySelectorAll('[data-counter]');
  if (counters.length && 'IntersectionObserver' in window) {
    var counterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;
        var max = parseInt(el.getAttribute('data-counter'), 10) || 0;
        var suffix = el.getAttribute('data-suffix') || '';
        var prefix = el.getAttribute('data-prefix') || '';
        var duration = 1200;
        var start = performance.now();

        function tick(now) {
          var progress = Math.min((now - start) / duration, 1);
          var val = Math.floor(progress * max);
          el.textContent = prefix + val.toLocaleString() + suffix;
          if (progress < 1) {
            requestAnimationFrame(tick);
          }
        }

        requestAnimationFrame(tick);
        counterObserver.unobserve(el);
      });
    }, { threshold: 0.4 });

    counters.forEach(function (c) { counterObserver.observe(c); });
  }

  // --- CSS Tabs ---
  document.querySelectorAll('[data-tab]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var group = btn.closest('.tabs');
      if (!group) return;
      group.querySelectorAll('[data-tab]').forEach(function (b) { b.classList.remove('active'); });
      group.querySelectorAll('[data-panel]').forEach(function (p) { p.classList.remove('active'); });
      btn.classList.add('active');
      var panel = group.querySelector('[data-panel="' + btn.getAttribute('data-tab') + '"]');
      if (panel) panel.classList.add('active');
    });
  });
})();
