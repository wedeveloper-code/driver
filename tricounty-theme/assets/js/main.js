(function () {
  const navToggle = document.getElementById("navToggle");
  const mainNav = document.getElementById("mainNav");
  const dropdown = document.getElementById("programsDropdown");
  const dropdownBtn = dropdown ? dropdown.querySelector("button") : null;

  if (navToggle && mainNav) {
    navToggle.addEventListener("click", function () {
      mainNav.classList.toggle("open");
      navToggle.textContent = mainNav.classList.contains("open") ? "✕" : "☰";
    });
  }

  if (dropdown && dropdownBtn) {
    dropdownBtn.addEventListener("click", function () {
      if (window.innerWidth <= 1020) {
        dropdown.classList.toggle("open");
        dropdownBtn.setAttribute("aria-expanded", dropdown.classList.contains("open") ? "true" : "false");
      }
    });

    document.addEventListener("click", function (e) {
      if (!dropdown.contains(e.target) && window.innerWidth <= 1020) {
        dropdown.classList.remove("open");
        dropdownBtn.setAttribute("aria-expanded", "false");
      }
    });
  }

  const slides = Array.from(document.querySelectorAll(".slide"));
  const dotsWrap = document.getElementById("dots");
  const nextBtn = document.getElementById("nextSlide");
  const prevBtn = document.getElementById("prevSlide");

  if (slides.length && dotsWrap && nextBtn && prevBtn) {
    let current = 0;
    let timer;

    function render() {
      slides.forEach(function (slide, i) {
        slide.classList.toggle("active", i === current);
      });

      dotsWrap.querySelectorAll(".dot").forEach(function (dot, i) {
        dot.classList.toggle("active", i === current);
      });
    }

    function go(index) {
      current = (index + slides.length) % slides.length;
      render();
      clearInterval(timer);
      timer = setInterval(function () {
        go(current + 1);
      }, 6500);
    }

    slides.forEach(function (_, i) {
      const dot = document.createElement("button");
      dot.type = "button";
      dot.className = "dot";
      dot.setAttribute("aria-label", "Go to slide " + (i + 1));
      dot.addEventListener("click", function () {
        go(i);
      });
      dotsWrap.appendChild(dot);
    });

    nextBtn.addEventListener("click", function () {
      go(current + 1);
    });

    prevBtn.addEventListener("click", function () {
      go(current - 1);
    });

    render();
    timer = setInterval(function () {
      go(current + 1);
    }, 6500);
  }

  const counters = document.querySelectorAll("[data-counter]");
  if (counters.length) {
    const observer = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        const el = entry.target;
        const max = parseInt(el.getAttribute("data-counter"), 10) || 0;
        const duration = 1200;
        const start = performance.now();

        function tick(now) {
          const progress = Math.min((now - start) / duration, 1);
          el.textContent = Math.floor(progress * max).toLocaleString();
          if (progress < 1) {
            requestAnimationFrame(tick);
          }
        }

        requestAnimationFrame(tick);
        obs.unobserve(el);
      });
    }, { threshold: 0.4 });

    counters.forEach(function (counter) {
      observer.observe(counter);
    });
  }

  const ctaForms = document.querySelectorAll("form[data-demo-form]");
  ctaForms.forEach(function (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      const btn = form.querySelector("button[type='submit']");
      if (btn) {
        const old = btn.textContent;
        btn.textContent = "Submitted";
        btn.disabled = true;
        setTimeout(function () {
          btn.textContent = old;
          btn.disabled = false;
          form.reset();
        }, 1400);
      }
    });
  });

  const sparkline = document.querySelector(".sparkline svg polyline");
  if (sparkline) {
    let phase = 0;
    setInterval(function () {
      phase += 8;
      const points = [];
      for (let x = 0; x <= 100; x += 10) {
        const y = 48 - Math.sin((x + phase) / 14) * 18;
        points.push(x + "," + y.toFixed(1));
      }
      sparkline.setAttribute("points", points.join(" "));
    }, 260);
  }
})();
