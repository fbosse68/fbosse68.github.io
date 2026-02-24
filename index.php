<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>Dr. Florian Bosse - Schmerztherapeut Göttingen | Achtsamkeit & MBSR | Hypnosystemik</title>
    <meta name="description" content="Facharzt für Schmerztherapie in Göttingen. Chronische Schmerzen, Achtsamkeit, MBSR, Hypnosystemik, Langjährige Erfahrung">
    <meta name="keywords" content="Schmerztherapie Göttingen, chronische Schmerzen, MBSR, Achtsamkeit, Hypnosystemik, Neuroplastizität, Dr. Bosse">
    <!-- Google Site Verification -->
    <meta name="google-site-verification" content="2ikfE-aLvrJ4-44RcKuoOutv7_RC3mczA9YnfP-s9ck">
    <meta name="author" content="Dr. Florian Bosse">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph (Social Media) -->
    <meta property="og:title" content="Dr. Florian Bosse - Schmerztherapie & Achtsamkeit">
    <meta property="og:description" content="Facharzt für Schmerztherapie in Göttingen. Integrativer Ansatz: Neurobiologie, Achtsamkeit & systemischer und hypnosystemischer A.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.drbosse.de">
    <meta property="og:locale" content="de_DE">
    
    <!-- Lokales SEO -->
    <meta name="geo.region" content="DE-NI">
    <meta name="geo.placename" content="Göttingen">
    
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* ===== INDEX-SPEZIFISCHE STYLES ===== */

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8rem 2rem 4rem;
            background: linear-gradient(to bottom, #FAFAF8 0%, rgba(52, 88, 91, 0.05) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            max-width: 800px;
            text-align: center;
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.8s ease-out 0.2s both;
             /* NEU: Für Göttingen ganz unten */
    display: flex;
    flex-direction: column;
    min-height: 70vh;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-tagline {
            font-size: 0.85rem;
            color: var(--petrol);
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            animation: fadeInUp 0.8s ease-out 0.3s both;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            line-height: 1.15;
            margin-top: 8rem;
            margin-bottom: 2rem;
            color: var(--text-primary);
            font-weight: 300;
            white-space: nowrap;
        }
        
        
.hero-line {
    font-size: clamp(1.1rem, 2.2vw, 1.4rem);
    color: var(--text-secondary);
    margin: 0 0;  /* GEÄNDERT: Kein Abstand! */
    line-height: 1.3;  /* GEÄNDERT: Engerer Zeilenabstand */
    font-weight: 300;
}

.hero-subtitle {
    font-size: clamp(1rem, 2vw, 1.2rem);
    color: var(--text-secondary);
    margin-top: 2.5rem; /* Abstand nach oben */
    margin-bottom: 0; /* GEÄNDERT: Kein Abstand nach unten */
    opacity: 0.8;
    font-weight: 300;
    line-height: 1.3;
}

.hero-location {
    font-size: 0.85rem;
    color: var(--petrol);
    letter-spacing: 3px;
    text-transform: uppercase;
    margin-top: auto;  /* GEÄNDERT: von 3rem auf auto Push to bottom */
    padding-bottom: 2rem;  /* NEU: Abstand zum unteren Rand GEÄNDERT: padding statt margin*/
    opacity: 0.6;
    font-weight: 500;
}

        

        /* Section Styling */

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 400px 1fr;
            gap: 5rem;
            align-items: start;
        }

        .about-image {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(52, 88, 91, 0.15);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .about-text p {
            margin-bottom: 1.5rem;
            color: var(--text-secondary);
            font-weight: 300;
            line-height: 1.9;
        }

        /* Approach Grid */
        .approach-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        .approach-card {
            background: white;
            padding: 3rem 2.5rem;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(52, 88, 91, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            color: inherit;
            display: block;
            border: 1px solid rgba(52, 88, 91, 0.08);
        }

        .approach-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(52, 88, 91, 0.15);
            border-color: var(--petrol-light);
        }

     /* Fotos in den Approach Cards */
.approach-photo {
    width: 100%;              /* Volle Breite der Card */
    height: 200px;            /* Einheitliche Höhe */
    object-fit: cover;        /* Foto füllt den Bereich aus */
    border-radius: 8px;       /* Abgerundete Ecken */
    margin-bottom: 1.5rem;    /* Abstand zum Text darunter */
}

/* Optional: Hover-Effekt für die Fotos */
.approach-photo:hover {
    transform: scale(1.02);
    transition: transform 0.3s ease;
}

/* Responsive: Auf Mobile etwas niedriger */
@media (max-width: 768px) {
    .approach-photo {
        height: 180px;
    }
}

        .approach-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-primary);
            font-weight: 400;
        }

        .approach-card p {
            color: var(--text-secondary);
            line-height: 1.8;
            font-weight: 300;
            margin-bottom: 1.5rem;
        }

        .card-link-text {
            color: var(--petrol);
            font-weight: 500;
            font-size: 0.9rem;
            transition: gap 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .card-link-text::after {
            content: '→';
            transition: transform 0.3s ease;
        }

        .approach-card:hover .card-link-text::after {
            transform: translateX(4px);
        }

        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        .service-card {
            background: white;
            padding: 3rem 2.5rem;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(52, 88, 91, 0.08);
            transition: all 0.4s ease;
            border: 1px solid rgba(52, 88, 91, 0.08);
        }

        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(52, 88, 91, 0.12);
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--text-primary);
            font-weight: 400;
        }

        .service-card p {
            color: var(--text-secondary);
            line-height: 1.8;
            margin-bottom: 2rem;
            font-weight: 300;
        }

        .service-features {
            list-style: none;
            padding: 0;
        }

        .service-features li {
            padding: 0.75rem 0;
            color: var(--text-secondary);
            border-bottom: 1px solid rgba(52, 88, 91, 0.1);
            font-weight: 300;
        }

        .service-features li:last-child {
            border-bottom: none;
        }

        .service-features li::before {
            content: '✓';
            color: var(--petrol);
            margin-right: 0.75rem;
            font-weight: 600;
        }

        /* Contact Section */
        #kontakt {
            text-align: center;
            padding: 6rem 2rem;
        }

        #kontakt h2 {
            font-size: clamp(2rem, 4vw, 2.5rem);
            margin-bottom: 1.5rem;
            color: var(--text-primary);
            font-weight: 400;
        }

        #kontakt p {
            font-size: 1.1rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto 3rem;
            font-weight: 300;
            line-height: 1.8;
        }

        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            max-width: 900px;
            margin: 5rem auto 0;
            text-align: left;
        }

        .contact-item {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .contact-item strong {
            color: var(--petrol);
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .contact-item span,
        .contact-item a {
            color: var(--text-secondary);
            font-weight: 300;
            text-decoration: none;
        }

        .contact-item a:hover {
            color: var(--petrol);
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            

            section {
                padding: 5rem 1.5rem;
            }

            #kontakt {
                padding: 4rem 2rem;
            }

            .contact-info {
                gap: 2.5rem;
            }

            .hero h1 {
                white-space: normal;
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .about-content {
                grid-template-columns: 1fr;
                gap: 3rem;
            }

            .about-image {
                max-width: 400px;
                margin: 0 auto;
            }

            .approach-grid,
            .services-grid {
                grid-template-columns: 1fr;
            }

            .contact-info {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }

        @media (max-width: 400px) {
            .nav-container {
                padding: 1.5rem 1rem;
            }

            .logo {
                font-size: 0.85rem;
                letter-spacing: 0.05em;
                gap: 0.5rem;
            }

            .nav-links {
                width: 260px;
            }

            .hero h1 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
   
<body>
    <!-- Navigation -->
<?php include 'includes/nav.php'; ?>
   <!-- Hero Section -->
<section class="hero" id="home">
    <div class="hero-content">
        <h1>Raum für Veränderung</h1>
        
        <p class="hero-line">Integrative Schmerztherapie</p>
        <p class="hero-line">Hypnosystemik und Achtsamkeit</p>
        
        <p class="hero-subtitle">Begleitung und Coaching</p>
        
        <p class="hero-location">Göttingen</p>
    </div>
</section>

    <!-- About Section -->
    <section id="ueber-mich">
        <div class="section-intro">
            <h2>Über mich</h2>
            <p>Ein Weg zwischen Wissenschaft und Praxis</p>
        </div>
        <div class="about-content">
            <div class="about-image">
                <img src="Schmerztherapeut-Florian-Bosse.jpg" alt="Doktor Florian Bosse Schmerztherapeut">
            </div>
            <div class="about-text">
                <p>Willkommen auf meiner Webseite.</p>
                <p>Als Facharzt für Anästhesiologie mit Zusatzbezeichnung Spezielle Schmerzmedizin verbinde ich schulmedizinische Expertise mit integrativen Ansätzen der Schmerztherapie. Mein Fokus liegt auf neurobiologisch fundierten, multimodalen Therapiekonzepten, die Menschen dabei unterstützen, ihre Selbstregulationsfähigkeiten wiederzuerlangen.</p>
<p>Tatsächlich geht es dabei ganz konkret und unmittelbar erfahrbar um die Integration von Körper, Seele und Geist. Ohne Esoterik - ganz auf wissenschaftlicher Grundlage</p>
                <p>Über viele Jahre habe ich einen Zugang zu Veränderungsprozessen entwickelt, der Neurobiologie, Systemtheorie und kontemplative Praxis miteinander verbindet.</p>
                
                <p>Mein Weg begann in der Medizin, führte mich durch Systemtheorie und Konstruktivismus, vertiefte sich durch die Asiatische Kampfkunst Karate-Do, kontemplative Praktiken wie Zen und Achtsamkeit, und mündete in die Hypnosystemik nach Gunther Schmidt.</p>
                
               <p>Heute arbeite ich als niedergelassener Schmerztherapeut in Göttingen, begleite Menschen mit chronischen Erkrankungen und in herausfordernden Lebensphasen, leite MBSR-Kurse und arbeite daran, die ganz lebenspraktischen Erfahrungen der Achtsamkeitspraxis in die Arbeitswelt einfließen zu lassen.</p>
                <p>Was mich dabei leitet: Demut vor der Komplexität lebender Systeme, Vertrauen in ihre Selbstorganisationsfähigkeit und die Überzeugung, dass Veränderung möglich wird, wenn wir die richtigen Bedingungen schaffen.</p>

                
            </div>
        </div>
    </section>

    <!-- Approach Section -->
    <section id="ansatz">
        <div class="section-intro">
            <h2>Mein Ansatz</h2>
            <p>Neuroplastische Integration</p>
        </div>
        
        <div class="approach-grid">
            <!-- Hypnosystemik -->         
            <a href="hypnosystemik.php" class="approach-card">
                 <img src="bilder/hypnosystemik.jpg" 
                 alt="Hypnosystemische Therapie - Wasser fließt" 
                 class="approach-photo">
                <h3>Hypnosystemisch</h3>
                <p>Integration von Hypnotherapie nach Milton Erickson und systemischer Arbeit. Nicht instruieren, sondern einladen. Der Maserung folgen statt gegen sie arbeiten. Wu Wei (無為) – Entstehen lassen durch Nicht-Handeln.</p>
                <div class="card-link-text">Mehr erfahren</div>
            </a>
            
            <!-- Achtsamkeit -->
            <a href="achtsamkeit.php" class="approach-card">
                <img src="bilder/balance.jpg" 
                 alt="Achtsamkeitsbasierte Therapie - Meditation und Präsenz" 
                 class="approach-photo">
                <h3>Achtsamkeitsbasiert</h3>
                <p>MBSR und kontemplative Praxis als Grundlage. Wohlwollende Präsenz statt Technik. Verkörperte Regulation. Ko-Regulation als neurobiologische Basis begleitender Beziehungen.</p>
                <div class="card-link-text">Mehr erfahren</div>
            </a>
       
        <!-- Neurobiologie -->
         <a href="neurobiologie.php" class="approach-card">
                <img src="bilder/Gehirn.jpg" 
                 alt="Neurobiologisch fundierte Therapie - Neuroplastizität" 
                 class="approach-photo">
                <h3>Neurobiologisch fundiert</h3>
                <p>Auf Basis aktueller Neurowissenschaften: Neuroplastizität und Autopoiese. Das Gehirn als selbstorganisierendes System verstehen und nutzen.</p>
                <div class="card-link-text">Mehr erfahren</div>
            </a>
         </div>

        
    </section>

    <!-- Services Section -->
    <section id="angebote">
        <div class="section-intro">
            <h2>Meine Angebote</h2>
            <p>Verschiedene Formate für unterschiedliche Bedürfnisse</p>
        </div>
        
        <div class="services-grid">
            
             <a href="mbsr-kurs.php" class="service-card" style="text-decoration: none; color: inherit; display: block; cursor: pointer;">
                <h3>MBSR-Kurse</h3>
                <p>8-Wochen-Programm zur Stressbewältigung durch Achtsamkeit. Wissenschaftlich erforscht, praktisch erprobt. In kleinen Gruppen mit viel Raum für Erfahrung.</p>
                <ul class="service-features">
                    <li>8 Wochen à 2,5 Stunden</li>
                    <li>Ein Tag der Achtsamkeit</li>
                    <li>Tägliche Übungspraxis zu Hause</li>
                </ul>
                <span style="display: inline-block; margin-top: 1rem; color: var(--petrol); font-weight: 500;">Mehr erfahren →</span>
            </a>
            
            <div class="service-card">
                <h3>Schmerztherapie</h3>
                <p>Begleitung bei chronischem Schmerz, Belastungen, Angst oder schwierigen Lebensphasen. Einzelsitzungen in ruhiger Atmosphäre wo Veränderung in ihrem eigenen Tempo geschehen darf.</p>
                <ul class="service-features">
                    <li> Integrative Schmerztherapie</li>
                    <li>Hypnosystemische Einzelbegleitung</li>
                    <li>Achtsamkeitsbasierte Verfahren</li>
                    <li>Körperorientierte Unterstützung</li>
                </ul>
            </div>
            
           
            
            <div class="service-card">
                <h3>Coaching & Beratung</h3>
                <p>Unterstützung in Übergangsphasen, bei beruflichen Veränderungen oder persönlicher Weiterentwicklung. Klar, ressourcenorientiert, auf Augenhöhe.</p>
                <ul class="service-features">
                    <li>Berufliche Neuorientierung</li>
                    <li>Führungskräfte-Coaching</li>
                    <li>Supervision für Begleiter</li>
                </ul>
            </div>
                  
        </div>
    </section>

    <!-- Footer -->
<?php include 'includes/footer.php'; ?>
    <script>
(function() {
    function restartLogoAnimation() {
        const svg = document.querySelector('.animated-logo');
        if (!svg) return;
        
        // Alle animierten Elemente finden
        const elements = svg.querySelectorAll('[class*="circle-"], [class*="ellipse-"], [class*="line-"]');
        
        // Animations zurücksetzen
        elements.forEach(el => {
            const style = el.style;
            style.animation = 'none';
            el.offsetHeight; // Trigger reflow
            style.animation = '';
        });
    }
    
    // Bei jedem Seitenladen
    window.addEventListener('load', restartLogoAnimation);
    
    // Beim Zurückkehren von Unterseiten (wichtig!)
    window.addEventListener('pageshow', function(event) {
        if (event.persisted) {
            restartLogoAnimation();
        }
    });
})();
</script>
</body>
</html>

