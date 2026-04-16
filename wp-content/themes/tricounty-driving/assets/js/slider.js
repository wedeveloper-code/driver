/* Tri-County Driving Academy — Hero Slider */
(function () {
  'use strict';

  var slides = document.querySelectorAll('.hero-slide');
  if (slides.length < 2) return;

  var dots    = document.querySelectorAll('.hero-dot');
  var prevBtn = document.querySelector('.hero-prev');
  var nextBtn = document.querySelector('.hero-next');
  var current = 0;
  var timer;

  function goTo(index) {
    slides[current].classList.remove('active');
    if (dots[current]) dots[current].classList.remove('active');
    if (dots[current]) dots[current].setAttribute('aria-selected', 'false');

    current = (index + slides.length) % slides.length;

    slides[current].classList.add('active');
    if (dots[current]) dots[current].classList.add('active');
    if (dots[current]) dots[current].setAttribute('aria-selected', 'true');
  }

  function startAuto() {
    timer = setInterval(function () { goTo(current + 1); }, 5000);
  }

  function resetAuto() {
    clearInterval(timer);
    startAuto();
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', function () { goTo(current - 1); resetAuto(); });
  }
  if (nextBtn) {
    nextBtn.addEventListener('click', function () { goTo(current + 1); resetAuto(); });
  }

  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () { goTo(i); resetAuto(); });
  });

  // Keyboard navigation
  document.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowLeft')  { goTo(current - 1); resetAuto(); }
    if (e.key === 'ArrowRight') { goTo(current + 1); resetAuto(); }
  });

  startAuto();

})();
