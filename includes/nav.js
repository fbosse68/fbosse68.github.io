// Burger Menu Toggle
const burgerMenu = document.getElementById('burgerMenu');
const navLinks = document.getElementById('navLinks');
const mobileOverlay = document.getElementById('mobileOverlay');
if (burgerMenu && navLinks) {
    burgerMenu.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        burgerMenu.classList.toggle('active');
        if (mobileOverlay) {
            mobileOverlay.classList.toggle('active');
        }
    });
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', () => {
            navLinks.classList.remove('active');
            burgerMenu.classList.remove('active');
            mobileOverlay.classList.remove('active');
        });
    }
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            burgerMenu.classList.remove('active');
            if (mobileOverlay) {
                mobileOverlay.classList.remove('active');
            }
        });
    });
}

// Logo Animation Restart
(function() {
    function restartLogoAnimation() {
        const svg = document.querySelector('.animated-logo');
        if (!svg) return;
        const elements = svg.querySelectorAll('[class*="circle-"], [class*="ellipse-"], [class*="line-"]');
        elements.forEach(el => {
            const style = el.style;
            style.animation = 'none';
            el.offsetHeight;
            style.animation = '';
        });
    }
    window.addEventListener('load', restartLogoAnimation);
    window.addEventListener('pageshow', function(event) {
        if (event.persisted) {
            restartLogoAnimation();
        }
    });
})();

// Hide nav on scroll
(function() {
    const nav = document.querySelector('nav');
    let lastScroll = 0;
    let navLocked = false;

    // Nach Seitenlade automatisch verschwinden
    window.addEventListener('load', () => {
        setTimeout(() => {
            nav.classList.add('hide-on-scroll');
        }, 2000);
    });

    // Nav-Links sperren kurz nach Klick
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navLocked = true;
            nav.classList.remove('hide-on-scroll');
            setTimeout(() => { navLocked = false; }, 1000);
        });
    });

    window.addEventListener('scroll', () => {
        if (navLocked) return;
        const currentScroll = window.pageYOffset;
        if (currentScroll > lastScroll && currentScroll > 100) {
            nav.classList.add('hide-on-scroll');
        } else {
            nav.classList.remove('hide-on-scroll');
        }
        lastScroll = currentScroll;
    });
})();

// Maus nähert sich oberem Rand → Nav zeigen
(function() {
    const nav = document.querySelector('nav');
    let hideTimer = null;
    document.addEventListener('mousemove', (e) => {
        if (e.clientY < 80) {
            nav.classList.add('fast-transition');
            nav.classList.remove('hide-on-scroll');
            if (hideTimer) clearTimeout(hideTimer);
            // Timer starten sobald Nav sichtbar
            hideTimer = setTimeout(() => {
                if (window.pageYOffset > 100) {
                    nav.classList.remove('fast-transition');
                    nav.classList.add('hide-on-scroll');
                }
            }, 2000);
        }
    });
})();
