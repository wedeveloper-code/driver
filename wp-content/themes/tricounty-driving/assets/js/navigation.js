/* Tri-County Driving Academy — Navigation JS */
(function () {
  'use strict';

  var toggle = document.querySelector('.nav-toggle');
  var nav    = document.getElementById('primary-nav');

  if (!toggle || !nav) return;

  toggle.addEventListener('click', function () {
    var open = nav.classList.toggle('open');
    toggle.setAttribute('aria-expanded', String(open));
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

  /* Close nav when clicking outside */
  document.addEventListener('click', function (e) {
    if (!nav.contains(e.target) && !toggle.contains(e.target)) {
      nav.classList.remove('open');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });

})();
