window.addEventListener('load', function () {
    const preloader = document.getElementById('preloader');
    if (preloader) {
        preloader.style.opacity = '0';
        setTimeout(() => {
            preloader.style.display = 'none';
        }, 500);
    }
});

// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenuClose = document.getElementById('mobile-menu-close');
const mobileMenu = document.getElementById('mobile-menu');
const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

function openMobileMenu() {
    if (mobileMenu) mobileMenu.classList.add('active');
    if (mobileMenuOverlay) mobileMenuOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeMobileMenu() {
    if (mobileMenu) mobileMenu.classList.remove('active');
    if (mobileMenuOverlay) mobileMenuOverlay.classList.remove('active');
    document.body.style.overflow = '';
}

if (mobileMenuBtn) mobileMenuBtn.addEventListener('click', openMobileMenu);
if (mobileMenuClose) mobileMenuClose.addEventListener('click', closeMobileMenu);
if (mobileMenuOverlay) mobileMenuOverlay.addEventListener('click', closeMobileMenu);

if (mobileMenu) {
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });
}

// Navbar Scroll Effect
const navbar = document.getElementById('navbar');
const navBg = document.getElementById('nav-bg');

window.addEventListener('scroll', function () {
    if (!navbar || !navBg) return;

    if (window.scrollY > 50) {
        navBg.style.opacity = '1';
        navbar.classList.add('shadow-lg');
    } else {
        navBg.style.opacity = '0';
        navbar.classList.remove('shadow-lg');
    }
});

// Scroll Reveal Animation
const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');

if (revealElements.length > 0) {
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));
}

// Counter Animation
const counters = document.querySelectorAll('.counter');
const counterSpeed = 200;

if (counters.length > 0) {
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-target')) || 0;

                const updateCount = () => {
                    const count = parseInt(counter.innerText) || 0;
                    const increment = target / counterSpeed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + increment);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target;
                    }
                };

                updateCount();
                counterObserver.unobserve(counter);
            }
        });
    }, {
        threshold: 0.5
    });

    counters.forEach(counter => counterObserver.observe(counter));
}

// Job Filter
const filterBtns = document.querySelectorAll('.job-filter-btn');
const jobCards = document.querySelectorAll('.job-card');

if (filterBtns.length > 0 && jobCards.length > 0) {
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            filterBtns.forEach(b => {
                b.classList.remove('active', 'bg-primary-600', 'text-white');
                b.classList.add('bg-slate-100', 'text-slate-600');
            });

            btn.classList.add('active', 'bg-primary-600', 'text-white');
            btn.classList.remove('bg-slate-100', 'text-slate-600');

            const filter = btn.getAttribute('data-filter');

            jobCards.forEach(card => {
                const category = card.getAttribute('data-category');

                if (filter === 'all' || category === filter) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                    }, 10);
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });

    filterBtns.forEach(btn => {
        if (btn.classList.contains('active')) {
            btn.classList.add('bg-primary-600', 'text-white');
        } else {
            btn.classList.add('bg-slate-100', 'text-slate-600');
        }
    });
}

// Real Laravel Form Submission
const inquiryForm = document.getElementById('inquiry-form');

if (inquiryForm) {
    inquiryForm.addEventListener('submit', function () {
        const submitBtn = inquiryForm.querySelector('button[type="submit"]');

        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.classList.add('opacity-75', 'cursor-not-allowed');

            submitBtn.innerHTML = `
                <svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span>Sending...</span>
            `;
        }
    });
}

// Job Apply Button Handler
const applyBtns = document.querySelectorAll('.job-apply-btn');

if (applyBtns.length > 0) {
    applyBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const card = this.closest('.job-card');
            if (!card) return;

            const titleEl = card.querySelector('h3');
            if (!titleEl) return;

            const jobTitle = titleEl.textContent;
            const contactSection = document.getElementById('contact');

            if (contactSection) {
                contactSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }

            setTimeout(() => {
                const positionSelect = document.getElementById('position');
                if (!positionSelect) return;

                for (let i = 0; i < positionSelect.options.length; i++) {
                    if (positionSelect.options[i].text.includes(jobTitle.split(' ')[0])) {
                        positionSelect.value = positionSelect.options[i].value;
                        break;
                    }
                }
            }, 800);
        });
    });
}

// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const targetSelector = this.getAttribute('href');
        if (!targetSelector || targetSelector === '#') return;

        const target = document.querySelector(targetSelector);

        if (target) {
            e.preventDefault();
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});