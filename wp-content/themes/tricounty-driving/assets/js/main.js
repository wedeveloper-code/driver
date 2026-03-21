/* Tri-County Driving Academy — Main JS */
/* Navigation is handled by navigation.js — this file covers page interactions */
(function () {
  'use strict';

  /* Smooth scroll for anchor links */
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      var target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  /* Stats counter animation on scroll */
  var counters = document.querySelectorAll('.stat-number[data-target]');
  if (counters.length > 0) {
    var animated = false;

    function animateCounters() {
      if (animated) return;
      counters.forEach(function (counter) {
        var target = parseInt(counter.getAttribute('data-target'), 10);
        var duration = 1500;
        var start = Date.now();

        function step() {
          var elapsed = Date.now() - start;
          var progress = Math.min(elapsed / duration, 1);
          var ease = 1 - Math.pow(1 - progress, 3);
          counter.textContent = Math.round(target * ease);
          if (progress < 1) {
            requestAnimationFrame(step);
          }
        }
        requestAnimationFrame(step);
      });
      animated = true;
    }

    var statsSection = document.querySelector('.stats-section');
    if (statsSection && 'IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries) {
        if (entries[0].isIntersecting) {
          animateCounters();
          observer.disconnect();
        }
      }, { threshold: 0.3 });
      observer.observe(statsSection);
    }
  }

  /* FAQ accordion — one item open at a time */
  var faqItems = document.querySelectorAll('.faq-item');
  if (faqItems.length > 0) {
    faqItems.forEach(function (item) {
      item.addEventListener('toggle', function () {
        if (item.open) {
          faqItems.forEach(function (other) {
            if (other !== item && other.open) {
              other.removeAttribute('open');
            }
          });
        }
      });
    });
  }

})();
