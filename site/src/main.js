import './style.css'

/* ════════════════════════════════════
   SHARED HEADER / FOOTER INJECTION
════════════════════════════════════ */

const NAV_LINKS = [
  { label: 'Home',              href: '/index.html' },
  { label: 'About Us',          href: '/about.html' },
  {
    label: 'Training Programs',
    dropdown: [
      { label: 'CDL Class "A" Training',        href: '/cdl.html' },
      { label: 'Heavy Equipment Training',       href: '/heavy-equipment.html' },
      { label: 'Diesel Mechanics',               href: '/diesel-mechanics.html' },
      { label: 'NCCER Training',                 href: '/nccer.html' },
      { label: 'Driver Improvement',             href: '/driver-improvement.html' },
    ]
  },
  { label: 'Admissions & Funding', href: '/admissions.html' },
  { label: 'Career Placement',     href: '/career-placement.html' },
  { label: 'Directions',           href: '/directions.html' },
]

function buildHeader() {
  const cur = window.location.pathname

  const desktopLinks = NAV_LINKS.map(item => {
    if (item.dropdown) {
      const items = item.dropdown.map(d =>
        `<a href="${d.href}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-blue hover:text-white transition-colors">${d.label}</a>`
      ).join('')
      return `
        <div class="nav-dropdown relative">
          <button class="flex items-center text-gray-700 hover:text-brand-blue font-medium transition-colors gap-1">
            ${item.label}
            <svg class="w-3 h-3 mt-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="nav-dropdown-menu absolute left-0 mt-2 w-64 bg-white border border-gray-100 shadow-xl rounded-lg hidden z-50">
            <div class="py-2">${items}</div>
          </div>
        </div>`
    }
    const active = cur.endsWith(item.href.replace('/', '')) ? 'nav-link-active font-semibold' : ''
    return `<a href="${item.href}" class="text-gray-700 hover:text-brand-blue font-medium transition-colors ${active}">${item.label}</a>`
  }).join('')

  const mobileLinks = NAV_LINKS.map(item => {
    if (item.dropdown) {
      const items = item.dropdown.map(d =>
        `<a href="${d.href}" class="block py-1 text-sm text-gray-600 hover:text-brand-blue pl-4">${d.label}</a>`
      ).join('')
      return `
        <div class="px-3 py-2">
          <div class="font-semibold text-brand-blue text-sm mb-1">Training Programs</div>
          <div class="border-l-2 border-gray-200 pl-2 space-y-1">${items}</div>
        </div>`
    }
    return `<a href="${item.href}" class="block px-3 py-3 font-medium text-gray-800 hover:bg-gray-50 hover:text-brand-blue rounded-md">${item.label}</a>`
  }).join('')

  return `
  <header class="fixed top-0 w-full bg-white shadow-md z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-20">
        <!-- Logo -->
        <a href="/index.html" class="flex items-center gap-2 flex-shrink-0">
          <svg class="w-10 h-10 text-brand-blue" viewBox="0 0 64 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="2" y="14" width="40" height="22" rx="3" fill="#1e3a8a"/>
            <rect x="42" y="20" width="18" height="16" rx="2" fill="#1e3a8a"/>
            <rect x="44" y="22" width="14" height="10" rx="1" fill="#bfdbfe"/>
            <circle cx="12" cy="37" r="5" fill="#1e3a8a" stroke="#f59e0b" stroke-width="2"/>
            <circle cx="12" cy="37" r="2" fill="#f59e0b"/>
            <circle cx="50" cy="37" r="5" fill="#1e3a8a" stroke="#f59e0b" stroke-width="2"/>
            <circle cx="50" cy="37" r="2" fill="#f59e0b"/>
          </svg>
          <div>
            <span class="font-extrabold text-xl text-brand-blue uppercase tracking-tight leading-tight block">Tri-County</span>
            <span class="font-semibold text-sm text-brand-accent uppercase tracking-widest block -mt-1">Driving Academy</span>
          </div>
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden lg:flex space-x-6 items-center">
          ${desktopLinks}
          <a href="/contact.html" class="bg-brand-blue text-white px-5 py-2.5 rounded-lg font-semibold hover:bg-blue-800 transition-colors shadow-md ml-2">Contact Us</a>
        </nav>

        <!-- Mobile Toggle -->
        <button id="mobile-toggle" class="lg:hidden text-gray-700 hover:text-brand-blue focus:outline-none">
          <svg id="icon-bars"   class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
          <svg id="icon-close" class="w-7 h-7 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 18 18 6M6 6l12 12"/></svg>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 shadow-lg absolute w-full left-0">
      <div class="px-4 pt-2 pb-6 space-y-1">
        ${mobileLinks}
        <a href="/contact.html" class="block mt-4 text-center px-3 py-3 bg-brand-accent text-white font-bold rounded-lg shadow">Contact Us</a>
      </div>
    </div>
  </header>`
}

function buildFooter() {
  return `
  <footer class="bg-gray-900 text-gray-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <!-- Brand -->
        <div>
          <div class="flex items-center gap-2 mb-4">
            <svg class="w-9 h-9" viewBox="0 0 64 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="2" y="14" width="40" height="22" rx="3" fill="#3b82f6"/>
              <rect x="42" y="20" width="18" height="16" rx="2" fill="#3b82f6"/>
              <rect x="44" y="22" width="14" height="10" rx="1" fill="#bfdbfe"/>
              <circle cx="12" cy="37" r="5" fill="#3b82f6" stroke="#f59e0b" stroke-width="2"/>
              <circle cx="12" cy="37" r="2" fill="#f59e0b"/>
              <circle cx="50" cy="37" r="5" fill="#3b82f6" stroke="#f59e0b" stroke-width="2"/>
              <circle cx="50" cy="37" r="2" fill="#f59e0b"/>
            </svg>
            <div>
              <span class="font-extrabold text-white text-lg uppercase tracking-tight block">Tri-County</span>
              <span class="font-semibold text-brand-accent text-xs uppercase tracking-widest block -mt-0.5">Driving Academy</span>
            </div>
          </div>
          <p class="text-sm leading-relaxed text-gray-400">
            Established 1996. Providing career-ready training in CDL, Heavy Equipment,
            Diesel Mechanics, and more across Virginia and Tennessee.
          </p>
        </div>

        <!-- Quick Links -->
        <div>
          <h4 class="text-white font-bold uppercase text-sm tracking-wider mb-4">Quick Links</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="/about.html" class="hover:text-white transition-colors">About Us</a></li>
            <li><a href="/programs.html" class="hover:text-white transition-colors">Training Programs</a></li>
            <li><a href="/admissions.html" class="hover:text-white transition-colors">Admissions & Funding</a></li>
            <li><a href="/career-placement.html" class="hover:text-white transition-colors">Career Placement</a></li>
            <li><a href="/directions.html" class="hover:text-white transition-colors">Directions</a></li>
            <li><a href="/contact.html" class="hover:text-white transition-colors">Contact Us</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div>
          <h4 class="text-white font-bold uppercase text-sm tracking-wider mb-4">Contact</h4>
          <ul class="space-y-3 text-sm">
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-brand-accent mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17.657 16.657 13.414 20.9a1.998 1.998 0 0 1-2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z"/><path d="M15 11a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/></svg>
              P.O. Box 2109 / 1714 US Hwy 19<br>Lebanon, VA 24266
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-accent flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.92 12 19.79 19.79 0 0 1 1.72 3.37 2 2 0 0 1 3.7 1.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.9a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <a href="tel:2767947660" class="hover:text-white transition-colors">(276) 794-7660</a>
            </li>
            <li class="flex items-center gap-2">
              <svg class="w-4 h-4 text-brand-accent flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              <a href="mailto:tcda1@hotmail.com" class="hover:text-white transition-colors">tcda1@hotmail.com</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="border-t border-gray-800 py-5 text-center text-xs text-gray-500">
      &copy; ${new Date().getFullYear()} Tri-County Driving Academy, Inc. All rights reserved.
    </div>
  </footer>`
}

/* ── Inject header / footer ── */
const hEl = document.getElementById('site-header')
const fEl = document.getElementById('site-footer')
if (hEl) hEl.outerHTML = buildHeader()
if (fEl) fEl.outerHTML = buildFooter()

/* ── Mobile menu toggle ── */
document.addEventListener('click', e => {
  const btn = e.target.closest('#mobile-toggle')
  if (!btn) return
  const menu  = document.getElementById('mobile-menu')
  const bars  = document.getElementById('icon-bars')
  const close = document.getElementById('icon-close')
  if (!menu) return
  const open = menu.classList.toggle('hidden')
  bars?.classList.toggle('hidden', !open)
  close?.classList.toggle('hidden', open)
})

/* ════════════════════════════════════
   CAROUSEL (home page)
════════════════════════════════════ */
const slides = document.querySelectorAll('.carousel-slide')
if (slides.length) {
  let current = 0
  const dots = document.querySelectorAll('.carousel-dot')

  function goTo(n) {
    slides[current].classList.replace('active', 'inactive')
    dots[current]?.classList.remove('bg-brand-accent')
    dots[current]?.classList.add('bg-white/50')
    current = (n + slides.length) % slides.length
    slides[current].classList.replace('inactive', 'active')
    dots[current]?.classList.add('bg-brand-accent')
    dots[current]?.classList.remove('bg-white/50')
  }

  window.carouselNext = () => goTo(current + 1)
  window.carouselPrev = () => goTo(current - 1)
  window.goToSlide    = (n) => goTo(n)

  setInterval(() => goTo(current + 1), 5000)
}

/* ════════════════════════════════════
   CONTACT FORM (contact page)
════════════════════════════════════ */
const form = document.getElementById('contact-form')
if (form) {
  form.addEventListener('submit', e => {
    e.preventDefault()
    const btn = form.querySelector('button[type=submit]')
    btn.textContent = 'Message Sent!'
    btn.disabled = true
    btn.classList.add('bg-green-600')
    btn.classList.remove('bg-brand-blue', 'hover:bg-blue-800')
  })
}
