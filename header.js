// Burger Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const burgerMenu = document.getElementById('burgerMenu');
    const navLinks = document.getElementById('navLinks');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const nav = document.querySelector('nav');
    
    // Toggle menu on burger click
    if (burgerMenu) {
        burgerMenu.addEventListener('click', function() {
            burgerMenu.classList.toggle('active');
            navLinks.classList.toggle('active');
            mobileOverlay.classList.toggle('active');
            document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : '';
        });
    }
    
    // Close menu on overlay click
    if (mobileOverlay) {
        mobileOverlay.addEventListener('click', function() {
            burgerMenu.classList.remove('active');
            navLinks.classList.remove('active');
            mobileOverlay.classList.remove('active');
            document.body.style.overflow = '';
        });
    }
    
    // Close menu when clicking a link
    const navLinksItems = navLinks?.querySelectorAll('a');
    if (navLinksItems) {
        navLinksItems.forEach(link => {
            link.addEventListener('click', function() {
                burgerMenu.classList.remove('active');
                navLinks.classList.remove('active');
                mobileOverlay.classList.remove('active');
                document.body.style.overflow = '';
            });
        });
    }
    
    // Hide nav on scroll down, show on scroll up
    let lastScrollTop = 0;
    let scrollThreshold = 100;
    
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > scrollThreshold) {
            if (scrollTop > lastScrollTop) {
                // Scrolling down
                nav.classList.add('hide-on-scroll');
            } else {
                // Scrolling up
                nav.classList.remove('hide-on-scroll');
            }
        } else {
            // At top of page
            nav.classList.remove('hide-on-scroll');
        }
        
        lastScrollTop = scrollTop;
    });
});
