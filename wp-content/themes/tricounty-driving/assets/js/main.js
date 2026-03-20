/* Tri-County Driving Academy – Main JS */
(function () {
  'use strict';

  /* Mobile nav toggle */
  var toggle = document.querySelector('.nav-toggle');
  var nav    = document.getElementById('primary-nav');

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', nav.classList.contains('open'));
    });

    /* Sub-menu toggle on mobile */
    nav.querySelectorAll('.menu-item-has-children > a').forEach(function (link) {
      link.addEventListener('click', function (e) {
        if (window.innerWidth <= 768) {
          e.preventDefault();
          link.closest('li').classList.toggle('open');
        }
      });
    });
  }

  /* Close nav on outside click */
  document.addEventListener('click', function (e) {
    if (nav && !nav.contains(e.target) && toggle && !toggle.contains(e.target)) {
      nav.classList.remove('open');
    }
  });

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

  /* Active nav highlighting */
  var current = window.location.pathname;
  document.querySelectorAll('#primary-nav a').forEach(function (a) {
    if (a.getAttribute('href') && a.getAttribute('href') !== '#' &&
        current.indexOf(a.getAttribute('href')) > -1) {
      a.closest('li') && a.closest('li').classList.add('current-menu-item');
    }
  });

})();
