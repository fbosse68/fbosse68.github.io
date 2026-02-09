// Central Navigation JavaScript for Dr. Florian Bosse Website
// Handles: Burger menu, mobile overlay, smooth scrolling, scroll-based nav hiding

(function() {
    'use strict';

    // ============================================
    // MOBILE MENU TOGGLE
    // ============================================
    
    const burgerMenu = document.getElementById('burgerMenu');
    const navLinks = document.getElementById('navLinks');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const navLinksItems = document.querySelectorAll('.nav-links a');

    function toggleMenu() {
        burgerMenu.classList.toggle('active');
        navLinks.classList.toggle('active');
        mobileOverlay.classList.toggle('active');
        document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : '';
    }

    // Only add event listeners if elements exist (for pages with simplified nav)
    if (burgerMenu && navLinks && mobileOverlay) {
        burgerMenu.addEventListener('click', toggleMenu);
        mobileOverlay.addEventListener('click', toggleMenu);
        
        // Close menu when clicking a link
        navLinksItems.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth <= 768) {
                    toggleMenu();
                }
            });
        });
    }

    // ============================================
    // SMOOTH SCROLLING FOR ANCHOR LINKS
    // ============================================
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            
            // Skip if it's just "#"
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            
            if (target) {
                const nav = document.querySelector('nav');
                const navHeight = nav ? nav.offsetHeight : 0;
                const targetPosition = target.offsetTop - navHeight;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ============================================
    // ELEGANT SCROLL-BASED NAVIGATION HIDING
    // ============================================
    
    const nav = document.querySelector('nav');
    
    if (nav) {
        let scrollTimeout;
        let lastScrollTop = 0;
        let isScrolling = false;

        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // Only apply scroll behavior if scrolled down more than 50px
            if (scrollTop <= 50) {
                nav.classList.remove('hide-on-scroll');
                isScrolling = false;
                return;
            }
            
            // Hide nav immediately when scrolling starts
            if (!isScrolling) {
                isScrolling = true;
                nav.classList.add('hide-on-scroll');
            }

            // Clear previous timeout
            clearTimeout(scrollTimeout);

            // Show nav 1 second after scrolling stops
            scrollTimeout = setTimeout(function() {
                isScrolling = false;
                nav.classList.remove('hide-on-scroll');
            }, 1000);

            lastScrollTop = scrollTop;
        }, { passive: true });
    }

})();
