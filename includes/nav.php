    <nav>
        <div class="nav-container">
            <a href="index.php" class="logo" id="logo-link">
        <svg viewBox="0 0 800 300" xmlns="http://www.w3.org/2000/svg" class="animated-logo logo-image">
  <title>Perspektive und Wahrheit - Animiert</title>
  
  <style>
    .animated-logo {
      cursor: pointer;
    }
    
    /* Left circles fade in */
    .circle-left-large,
    .circle-left-medium,
    .circle-left-small {
      opacity: 0;
      animation: fadeInCircles 8s ease-in-out forwards;
    }
    
    /* Individual animations - ALL start at cy=0 (concentric!) */
    .circle-rotating-large {
      opacity: 0;
      transform-box: fill-box;
      transform-origin: 50% 50%;
      animation: rotateSequenceLarge 8s ease-in-out forwards;
    }
    
    .circle-rotating-medium {
      opacity: 0;
      transform-box: fill-box;
      transform-origin: 50% 50%;
      animation: rotateSequenceMedium 8s ease-in-out forwards;
    }
    
    .circle-rotating-small {
      opacity: 0;
      transform-box: fill-box;
      transform-origin: 50% 50%;
      animation: rotateSequenceSmall 8s ease-in-out forwards;
    }
    
    /* DUPLICATED ellipses that STAY in center */
    .ellipse-center-large {
      opacity: 0;
      transform-box: fill-box;
      transform-origin: 50% 50%;
      animation: stayInCenterLarge 8s ease-in-out forwards;
    }
    
    .ellipse-center-medium {
      opacity: 0;
      transform-box: fill-box;
      transform-origin: 50% 50%;
      animation: stayInCenterMedium 8s ease-in-out forwards;
    }
    
    .ellipse-center-small {
      opacity: 0;
      transform-box: fill-box;
      transform-origin: 50% 50%;
      animation: stayInCenterSmall 8s ease-in-out forwards;
    }
    
    /* Moving ellipses that glide to the right */
    .ellipse-moving-large {
      opacity: 0;
      transform-box: fill-box;
      transform-origin: 50% 50%;
      animation: moveToRight 8s ease-in-out forwards;
    }
    
    .ellipse-moving-medium {
      opacity: 0;
      transform-box: fill-box;
      transform-origin: 50% 50%;
      animation: moveToRightMedium 8s ease-in-out forwards;
    }
    
    .ellipse-moving-small {
      opacity: 0;
      transform-box: fill-box;
      transform-origin: 50% 50%;
      animation: moveToRightSmall 8s ease-in-out forwards;
    }
    
    /* Real ellipses fade in at the right moment */
    .real-ellipse-large,
    .real-ellipse-medium,
    .real-ellipse-small {
      opacity: 0;
      animation: showRealEllipses 8s ease-in-out forwards;
    }
    
    /* Lines grow stroke-width - NOW CSS BASED FOR PERFECT SYNC! */
    .line-large,
    .line-medium,
    .line-small {
      stroke-width: 0;
      animation: growStrokeWidth 8s ease-in-out forwards;
    }
    
    /* Keyframe animations */
    
    @keyframes fadeInCircles {
      0% { opacity: 0; }
      19% { opacity: 1; }
      100% { opacity: 1; }
    }
    
    /* LARGE circle - cy moves from 0 to -60 during rotation */
    @keyframes rotateSequenceLarge {
      0%, 19% {
        opacity: 0;
        transform: translate(133px, 150px) translateY(0px) scaleY(1);
      }
      20% {
        opacity: 1;
        transform: translate(133px, 150px) translateY(0px) scaleY(1);
      }
      44% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(0px) scaleY(1);
      }
      75% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(-60px) scaleY(0.35);
      }
      75.1% {
        opacity: 0;
      }
      100% {
        opacity: 0;
        transform: translate(400px, 150px) translateY(-60px) scaleY(0.35);
      }
    }
    
    /* MEDIUM circle - cy moves from 0 to +5 */
    @keyframes rotateSequenceMedium {
      0%, 19% {
        opacity: 0;
        transform: translate(133px, 150px) translateY(0px) scaleY(1);
      }
      20% {
        opacity: 1;
        transform: translate(133px, 150px) translateY(0px) scaleY(1);
      }
      44% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(0px) scaleY(1);
      }
      75% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(5px) scaleY(0.35);
      }
      75.1% {
        opacity: 0;
      }
      100% {
        opacity: 0;
        transform: translate(400px, 150px) translateY(5px) scaleY(0.35);
      }
    }
    
    /* SMALL circle - cy moves from 0 to +60 */
    @keyframes rotateSequenceSmall {
      0%, 19% {
        opacity: 0;
        transform: translate(133px, 150px) translateY(0px) scaleY(1);
      }
      20% {
        opacity: 1;
        transform: translate(133px, 150px) translateY(0px) scaleY(1);
      }
      44% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(0px) scaleY(1);
      }
      75% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(60px) scaleY(0.35);
      }
      75.1% {
        opacity: 0;
      }
      100% {
        opacity: 0;
        transform: translate(400px, 150px) translateY(60px) scaleY(0.35);
      }
    }
    
    /* Ellipses that STAY in center */
    @keyframes stayInCenterLarge {
      0%, 75% {
        opacity: 0;
      }
      75.1% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(-60px) scaleY(0.35);
      }
      /* Fade out before real ellipses appear */
      97% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(-60px) scaleY(0.35);
      }
      98% {
        opacity: 0;
      }
      100% {
        opacity: 0;
        transform: translate(400px, 150px) translateY(-60px) scaleY(0.35);
      }
    }
    
    @keyframes stayInCenterMedium {
      0%, 75% {
        opacity: 0;
      }
      75.1% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(5px) scaleY(0.35);
      }
      97% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(5px) scaleY(0.35);
      }
      98% {
        opacity: 0;
      }
      100% {
        opacity: 0;
        transform: translate(400px, 150px) translateY(5px) scaleY(0.35);
      }
    }
    
    @keyframes stayInCenterSmall {
      0%, 75% {
        opacity: 0;
      }
      75.1% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(60px) scaleY(0.35);
      }
      97% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(60px) scaleY(0.35);
      }
      98% {
        opacity: 0;
      }
      100% {
        opacity: 0;
        transform: translate(400px, 150px) translateY(60px) scaleY(0.35);
      }
    }
    
    /* Ellipses that MOVE to right and rotate further */
    /* 6-7s (75-87.5%): ONLY GLIDE at constant scaleY(0.35) */
    /* 7-8s (87.5-100%): ONLY ROTATE from scaleY(0.35) to 0.001 */
    @keyframes moveToRight {
      0%, 75% {
        opacity: 0;
        transform: translate(400px, 150px) translateY(-60px) scaleY(0.35);
      }
      75.1% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(-60px) scaleY(0.35);
      }
      87.5% {
        opacity: 1;
        transform: translate(667px, 150px) translateY(-60px) scaleY(0.35);
      }
      98% {
        opacity: 1;
        transform: translate(667px, 150px) translateY(-60px) scaleY(0.001);
      }
      99% {
        opacity: 0;
      }
      100% {
        opacity: 0;
        transform: translate(667px, 150px) translateY(-60px) scaleY(0.001);
      }
    }
    
    @keyframes moveToRightMedium {
      0%, 75% {
        opacity: 0;
        transform: translate(400px, 150px) translateY(5px) scaleY(0.35);
      }
      75.1% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(5px) scaleY(0.35);
      }
      87.5% {
        opacity: 1;
        transform: translate(667px, 150px) translateY(5px) scaleY(0.35);
      }
      98% {
        opacity: 1;
        transform: translate(667px, 150px) translateY(5px) scaleY(0.001);
      }
      99% {
        opacity: 0;
      }
      100% {
        opacity: 0;
        transform: translate(667px, 150px) translateY(5px) scaleY(0.001);
      }
    }
    
    @keyframes moveToRightSmall {
      0%, 75% {
        opacity: 0;
        transform: translate(400px, 150px) translateY(60px) scaleY(0.35);
      }
      75.1% {
        opacity: 1;
        transform: translate(400px, 150px) translateY(60px) scaleY(0.35);
      }
      87.5% {
        opacity: 1;
        transform: translate(667px, 150px) translateY(60px) scaleY(0.35);
      }
      98% {
        opacity: 1;
        transform: translate(667px, 150px) translateY(60px) scaleY(0.001);
      }
      99% {
        opacity: 0;
      }
      100% {
        opacity: 0;
        transform: translate(667px, 150px) translateY(60px) scaleY(0.001);
      }
    }
    
    /* Real ellipses fade in at the right moment */
    @keyframes showRealEllipses {
      0%, 93% {
        opacity: 0;
      }
      94% {
        opacity: 1;
      }
      100% {
        opacity: 1;
      }
    }
    
    /* Lines grow stroke-width - synchronized with CSS animations! */
    @keyframes growStrokeWidth {
      0%, 93% {
        stroke-width: 0;
      }
      94% {
        stroke-width: 0;
      }
      98% {
        stroke-width: 5;
      }
      100% {
        stroke-width: 5;
      }
    }
  </style>
  
  <!-- Left circles (static, concentric, fade in) -->
  <circle class="circle-left-large" cx="133" cy="150" r="80" fill="none" stroke="#34585B" stroke-width="5"/>
  <circle class="circle-left-medium" cx="133" cy="150" r="55" fill="none" stroke="#34585B" stroke-width="5"/>
  <circle class="circle-left-small" cx="133" cy="150" r="30" fill="none" stroke="#34585B" stroke-width="5"/>
  
  <!-- Rotating circles - ALL START AT cy=0 (concentric!) -->
  <circle class="circle-rotating-large" cx="0" cy="0" r="80" fill="none" stroke="#34585B" stroke-width="5"/>
  <circle class="circle-rotating-medium" cx="0" cy="0" r="55" fill="none" stroke="#34585B" stroke-width="5"/>
  <circle class="circle-rotating-small" cx="0" cy="0" r="30" fill="none" stroke="#34585B" stroke-width="5"/>
  
  <!-- Ellipses that STAY in center (appear at 75% = 6s) -->
  <circle class="ellipse-center-large" cx="0" cy="0" r="80" fill="none" stroke="#34585B" stroke-width="5.5"/>
  <circle class="ellipse-center-medium" cx="0" cy="0" r="55" fill="none" stroke="#34585B" stroke-width="5.5"/>
  <circle class="ellipse-center-small" cx="0" cy="0" r="30" fill="none" stroke="#34585B" stroke-width="5.5"/>
  
  <!-- Ellipses that MOVE to right and rotate further -->
  <circle class="ellipse-moving-large" cx="0" cy="0" r="80" fill="none" stroke="#34585B" stroke-width="5"/>
  <circle class="ellipse-moving-medium" cx="0" cy="0" r="55" fill="none" stroke="#34585B" stroke-width="5"/>
  <circle class="ellipse-moving-small" cx="0" cy="0" r="30" fill="none" stroke="#34585B" stroke-width="5"/>
  
  <!-- REAL ellipses in center (appear gradually) -->
  <g transform="translate(400, 150)">
    <ellipse class="real-ellipse-large" cx="0" cy="-60" rx="80" ry="28" fill="none" stroke="#34585B" stroke-width="5"/>
    <ellipse class="real-ellipse-medium" cx="0" cy="5" rx="55" ry="18" fill="none" stroke="#34585B" stroke-width="5"/>
    <ellipse class="real-ellipse-small" cx="0" cy="60" rx="30" ry="11" fill="none" stroke="#34585B" stroke-width="5"/>
  </g>
  
  <!-- Final LINES - NOW CSS ANIMATED FOR PERFECT SYNC! -->
  <line class="line-large" x1="587" y1="90" x2="747" y2="90" stroke="#34585B" stroke-width="5"/>
  <line class="line-medium" x1="612" y1="155" x2="722" y2="155" stroke="#34585B" stroke-width="5"/>
  <line class="line-small" x1="637" y1="210" x2="697" y2="210" stroke="#34585B" stroke-width="5"/>
</svg>

             Dr. Florian Bosse
            </a>                     
     
            
            <!-- Burger Menu Button -->
            <div class="burger-menu" id="burgerMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php#home">Willkommen</a></li>
                <li><a href="index.php#ueber-mich">Über mich</a></li>
                <li><a href="index.php#ansatz">Mein Ansatz</a></li>
                <li><a href="index.php#angebote">Angebote</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
            </ul>
        </div>
    </nav>

    <!-- Mobile Navigation Overlay -->
    <div class="mobile-nav-overlay" id="mobileOverlay"></div>
<script src="/includes/nav.js"></script>
