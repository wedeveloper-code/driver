/* Tri-County Driving Academy — Hero Slider (simple CSS-class rotator) */
(function () {
  'use strict';

  var slides = document.querySelectorAll('.hero-slide');
  if (slides.length < 2) return;

  var current = 0;
  slides[0].classList.add('active');

  setInterval(function () {
    slides[current].classList.remove('active');
    current = (current + 1) % slides.length;
    slides[current].classList.add('active');
  }, 5000);

})();
