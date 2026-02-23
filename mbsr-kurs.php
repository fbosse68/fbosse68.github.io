<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>MBSR Kurs - 8 Wochen Achtsamkeitstraining | Dr. Bosse Göttingen</title>
    <meta name="description" content="MBSR 8-Wochen-Kurs in Göttingen. Stressbewältigung durch Achtsamkeit nach Jon Kabat-Zinn. Krankenkassen-anerkannt. Kleine Gruppen.">
    <meta name="keywords" content="MBSR Kurs, Achtsamkeitskurs Göttingen, Stressbewältigung, 8 Wochen, Krankenkasse, Gruppenkurs">
    <meta name="author" content="Dr. Florian Bosse">
    <meta name="robots" content="index, follow">
    
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* ===== MBSR-SPEZIFISCHE STYLES ===== */
        
        /* Hero Section */
        .hero {
            padding: 8rem 2rem 4rem;
            background: linear-gradient(to bottom, var(--off-white) 0%, var(--cream-light) 100%);
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            color: var(--petrol-dark);
            margin-bottom: 1rem;
        }

        .hero .subtitle {
            font-size: 1.3rem;
            color: var(--text-secondary);
            max-width: 700px;
            margin: 0 auto 2rem;
        }

        /* Content Section */
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        section {
            margin-bottom: 4rem;
        }

        h2 {
            font-size: 2.2rem;
            color: var(--petrol);
            margin-bottom: 1.5rem;
            border-bottom: 2px solid var(--petrol-light);
            padding-bottom: 0.5rem;
        }

        h3 {
            font-size: 1.5rem;
            color: var(--petrol-dark);
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        p {
            margin-bottom: 1.5rem;
            font-size: 1.05rem;
        }

        .highlight-box {
            background: var(--cream-light);
            border-left: 4px solid var(--petrol);
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 4px;
        }

        .highlight-box p:last-child {
            margin-bottom: 0;
        }

        /* Course Structure */
        .course-structure {
            display: grid;
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .week-item {
            background: white;
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 3px solid var(--petrol-lighter);
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .week-item h4 {
            color: var(--petrol);
            margin-bottom: 0.5rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 600;
        }

        /* Benefits Grid */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }

        .benefit-item {
            text-align: center;
            padding: 1.5rem;
        }

        .benefit-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .benefit-item h4 {
            color: var(--petrol-dark);
            margin-bottom: 0.5rem;
            font-family: 'DM Sans', sans-serif;
            font-weight: 600;
        }

        /* Practice Elements */
        .practice-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin: 2rem 0;
        }

        .practice-item {
            background: var(--cream-light);
            padding: 1rem 1.5rem;
            border-radius: 6px;
            font-weight: 500;
            color: var(--text-secondary);
        }

        /* Course Details Box */
        .details-box {
            background: white;
            padding: 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            margin: 3rem 0;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 1rem 0;
            border-bottom: 1px solid var(--cream);
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 600;
            color: var(--petrol-dark);
        }

        .detail-value {
            color: var(--text-secondary);
            text-align: right;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--petrol) 0%, var(--petrol-dark) 100%);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            border-radius: 12px;
            margin: 4rem 0;
        }

        .cta-section h2 {
            color: white;
            border-bottom: none;
            margin-bottom: 1rem;
        }

        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }
        .cta-section .cta-button {
            background: white;
            color: var(--petrol);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .cta-section .cta-button:hover {
            background: var(--cream);
            color: var(--petrol-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.3);
        }

        /* Download Section */
        .download-section {
            background: var(--cream-light);
            padding: 2rem;
            border-radius: 12px;
            margin-top: 2rem;
        }

        .download-category {
            margin-bottom: 2rem;
        }

        .download-category:last-child {
            margin-bottom: 0;
        }

        .download-category h3 {
            color: var(--petrol);
            font-size: 1.3rem;
            margin-bottom: 1rem;
            border-bottom: 2px solid var(--petrol-light);
            padding-bottom: 0.5rem;
        }

        .download-list {
            list-style: none;
            padding: 0;
        }

        .download-list li {
            margin: 0.8rem 0;
        }

        .download-link {
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            padding: 1rem 1.5rem;
            background: white;
            color: var(--petrol);
            text-decoration: none;
            border-radius: 8px;
            border-left: 4px solid var(--petrol);
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 500px;
        }

        .download-link:hover {
            background: var(--petrol);
            color: white;
            transform: translateX(8px);
            box-shadow: 0 4px 12px rgba(52, 88, 91, 0.2);
        }

        .download-icon {
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .download-info {
            flex: 1;
        }

        .download-title {
            font-weight: 500;
            display: block;
            margin-bottom: 0.2rem;
        }

        .download-meta {
            font-size: 0.85rem;
            opacity: 0.7;
        }

        .download-note {
            background: rgba(52, 88, 91, 0.05);
            padding: 1rem;
            border-radius: 8px;
            margin-top: 1.5rem;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }

        /* Footer */
        footer {
            background: var(--petrol-dark);
            color: var(--cream);
            text-align: center;
            padding: 2rem;
            margin-top: 4rem;
        }

        footer a {
            color: var(--cream);
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-container {
                flex-wrap: wrap;
                gap: 0.5rem;
            }

            .logo {
                font-size: 0.85rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero .subtitle {
                font-size: 1.1rem;
            }

            h2 {
                font-size: 1.8rem;
            }

            .detail-row {
                flex-direction: column;
                gap: 0.5rem;
            }

            .detail-value {
                text-align: left;
            }
        }

        @media (max-width: 480px) {
            .logo {
                font-size: 0.75rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
<?php include 'includes/nav.php'; ?>

    <!-- Hero -->
    <div class="hero">
        <h1>MBSR</h1>
        <p class="subtitle">Mindfulness-Based Stress Reduction</p>
        <p class="subtitle">Stressbewältigung durch Achtsamkeit</p>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- What is MBSR -->
        <section>
            <h2>Was ist MBSR?</h2>
            <p>
                MBSR (Mindfulness-Based Stress Reduction) ist ein wissenschaftlich fundiertes Trainingsprogramm zur Förderung von Achtsamkeit, Gelassenheit und Resilienz. Entwickelt wurde es 1979 von Prof. Jon Kabat-Zinn an der University of Massachusetts Medical School.
            </p>
            <p>
                Das Programm verbindet jahrhundertealte Meditationspraktiken mit modernen neurowissenschaftlichen Erkenntnissen und hat sich weltweit als wirksame Methode zur Reduktion von Stress, chronischen Schmerzen und psychischen Belastungen etabliert.
            </p>
            
            <div class="highlight-box">
                <p><strong>MBSR ist kein weiteres Entspannungsverfahren.</strong></p>
                <p>
                    Es ist eine grundlegende Schulung in Achtsamkeit – der Fähigkeit, dem gegenwärtigen Moment mit Offenheit und ohne sofortiges Urteilen zu begegnen. Diese Fähigkeit hat weitreichende Auswirkungen auf Ihre Beziehung zu Stress, Schmerz und schwierigen Emotionen.
                </p>
            </div>
        </section>

        <!-- Benefits -->
        <section>
            <h2>Was bringt MBSR?</h2>
            <p>
                Wissenschaftliche Studien zeigen vielfältige positive Wirkungen von regelmäßiger Achtsamkeitspraxis:
            </p>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">🧠</div>
                    <h3>Neuroplastische Veränderungen</h3>
                    <p>Messbare Veränderungen in Hirnarealen für Emotionsregulation und Aufmerksamkeit</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">🌊</div>
                    <h3>Stressreduktion</h3>
                    <p>Nachweisbare Senkung von Stressmarkern und verbesserter Umgang mit Belastungen</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">💫</div>
                    <h3>Emotionale Regulation</h3>
                    <p>Bewussterer Umgang mit schwierigen Gefühlen und reaktiven Mustern</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">🎯</div>
                    <h3>Fokus & Klarheit</h3>
                    <p>Verbesserte Konzentrationsfähigkeit und mentale Klarheit im Alltag</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">🤝</div>
                    <h3>Beziehungsqualität</h3>
                    <p>Präsenteres und mitfühlenderes Miteinander durch erhöhte Selbstwahrnehmung</p>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">⚡</div>
                    <h3>Schmerzmanagement</h3>
                    <p>Veränderte Beziehung zu chronischen Schmerzen und körperlichen Beschwerden</p>
                </div>
            </div>
        </section>

        <!-- Course Structure -->
        <section>
            <h2>Aufbau des 8-Wochen-Programms</h2>
            <p>
                Der MBSR-Kurs folgt einem strukturierten Curriculum mit aufeinander aufbauenden Themenschwerpunkten:
            </p>
            
            <div class="course-structure">
                <div class="week-item">
                    <h3>Woche 1: Automatischer Pilotmodus</h3>
                    <p>Kennenlernen der Gruppe, Einführung in Achtsamkeit, Body-Scan</p>
                </div>
                
                <div class="week-item">
                    <h3>Woche 2: Wie wir die Welt wahrnehmen</h3>
                    <p>Wahrnehmung und Bewertung, Sitzmeditation, achtsames Yoga</p>
                </div>
                
                <div class="week-item">
                    <h3>Woche 3: Im Körper beheimatet sein</h3>
                    <p>Vertiefung der Körperwahrnehmung, Verbindung von Atem und Bewegung</p>
                </div>
                
                <div class="week-item">
                    <h3>Woche 4: Stress und Stressreaktion</h3>
                    <p>Neurobiologie von Stress, automatische Reaktionsmuster erkennen</p>
                </div>
                
                <div class="week-item">
                    <h3>Woche 5: Umgang mit schwierigen Situationen</h3>
                    <p>Zwischen Reiz und Reaktion – der Raum der Wahlmöglichkeit</p>
                </div>
                
                <div class="week-item">
                    <h3>Woche 6: Achtsame Kommunikation</h3>
                    <p>Tag der Achtsamkeit (ganztägige Praxis in Stille)</p>
                </div>
                
                <div class="week-item">
                    <h3>Woche 7: Für sich selbst sorgen</h3>
                    <p>Selbstfürsorge ohne Selbstoptimierung, Integration in den Alltag</p>
                </div>
                
                <div class="week-item">
                    <h3>Woche 8: Rückblick und Ausblick</h3>
                    <p>Reflexion, nachhaltige Integration, Weiterführung der Praxis</p>
                </div>
            </div>
        </section>

        <!-- Practice Elements -->
        <section>
            <h2>Die Praxiselemente</h2>
            <p>
                Im MBSR-Kurs lernen und üben Sie verschiedene Achtsamkeitspraktiken:
            </p>
            
            <div class="practice-list">
                <div class="practice-item">Body-Scan</div>
                <div class="practice-item">Sitzmeditation</div>
                <div class="practice-item">Achtsames Yoga</div>
                <div class="practice-item">Gehmeditation</div>
                <div class="practice-item">Achtsamkeit im Alltag</div>
                <div class="practice-item">3-Minuten-Atemraum</div>
            </div>
            
            <div class="highlight-box">
                <p><strong>Tägliche Übungspraxis zu Hause</strong></p>
                <p>
                    Ein zentraler Bestandteil von MBSR ist die tägliche eigenständige Praxis (ca. 45 Minuten). Sie erhalten Audio-Anleitungen und ein umfangreiches Kurshandbuch zur Unterstützung.
                </p>
                <p>
                    Diese regelmäßige Praxis ist der Schlüssel zu den neuroplastischen Veränderungen, die MBSR bewirken kann. Nicht die wöchentlichen Kurstreffen allein, sondern die kontinuierliche Integration in Ihren Alltag macht den Unterschied.
                </p>
            </div>
        </section>

        <!-- What makes this course special -->
        <section>
            <h2>Mein Ansatz</h2>
            <p>
                Ich unterrichte MBSR aus der Perspektive eines Arztes, der über 25 Jahre Kampfkunst und Meditationserfahrung mitbringt und hypnosystemisch arbeitet. Was mir dabei wichtig ist:
            </p>
            
            <h3>Neurobiologisch fundiert</h3>
            <p>
                Als Schmerztherapeut erkläre ich die neurobiologischen Grundlagen von Stress, Schmerz und Achtsamkeit auf eine Weise, die verständlich und gleichzeitig wissenschaftlich fundiert ist. Sie verstehen, <em>warum</em> Achtsamkeit wirkt – nicht nur <em>dass</em> sie wirkt.
            </p>
            
            <h3>Ohne Pathologisierung</h3>
            <p>
                MBSR ist kein Therapieersatz, sondern eine Schulung grundlegender menschlicher Fähigkeiten. Ich begegne allen Teilnehmenden als grundsätzlich kompetenten Menschen, die ihre Selbstregulationsfähigkeiten stärken möchten – unabhängig davon, ob sie mit Stress, Schmerz oder anderen Herausforderungen zu tun haben.
            </p>
            
            <h3>Verkörpert und authentisch</h3>
            <p>
                Achtsamkeit kann man nicht unterrichten, ohne sie selbst zu leben. Ich teile die Praxis mit Ihnen aus eigener, langjähriger Erfahrung – nicht als perfekter Meditierender, sondern als jemand, der selbst täglich übt und dabei immer wieder Neues entdeckt. Im Japanischen gibt es für diese Haltung den Begriff Shō Shin (尚真) "Anfängergeist".
            </p>
        </section>

        <!-- Course Details -->
        <section>
            <h2>Kursinformationen</h2>
            
            <div class="details-box">
                <div class="detail-row">
                    <span class="detail-label">Dauer</span>
                    <span class="detail-value">8 Wochen + 1 Tag der Achtsamkeit</span>
                </div>
                       
                  
                
                <div class="detail-row">
                    <span class="detail-label">Wöchentliche Treffen</span>
                    <span class="detail-value">2,5 Stunden pro Woche</span>
                </div>
                
                <div class="detail-row">
                    <span class="detail-label">Tag der Achtsamkeit</span>
                    <span class="detail-value">Samstag, 11. April, 10:00 - 16:00</span>
                </div>
                
                <div class="detail-row">
                    <span class="detail-label">Gruppengröße</span>
                    <span class="detail-value">Max. 12 Teilnehmer</span>
                </div>
                
                <div class="detail-row">
                    <span class="detail-label">Nächster Kursbeginn</span>
                    <span class="detail-value"><strong>Mittwoch, 11. März 2026</strong></span>
                </div>
                 <div class="detail-row">
                    <span class="detail-label">Orientierungsabend</span>
                    <span class="detail-value">Mittwoch, 25. Februar 2026</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Kursgebühr</span>
                    <span class="detail-value"><strong>350 €</strong></span>
                </div>
                
                <div class="detail-row">
                    <span class="detail-label">Ort</span>
                    <span class="detail-value">ImPuls, Akazienweg 56A, 37083 Göttingen</span>
                </div>
            </div>            
       </section>

       
        <!-- Who is it for -->
        <section>
            <h2>Für wen ist MBSR geeignet?</h2>
            <p>
                Der Kurs richtet sich an Dich, wenn
            </p>
            <ul style="margin-left: 2rem; margin-bottom: 1.5rem;">
                <li>Du unter Stress, Erschöpfung oder Belastung leidest und etwas ändern möchtest</li>
                <li>Du Deine Beziehung zu Schmerz oder schwierigen Emotionen verändern möchtest</li>
                <li>Du achtsamer und verbundener leben möchtest</li>
                <li>Du einen wohlwollenden Umgang mit Herausforderungen entwickeln willst</li>
                <li>Bewusster mit Deinen Gedanken und Emotionen umgehen wollen</li>
                <li>Du mehr Präsenz und Lebensqualität im Alltag entwickeln möchtest</li>
            </ul>       
        </section>

         <section>
            <h2>Was erwartet Dich?</h2>
           
            <ul style="margin-left: 2rem; margin-bottom: 1.5rem;">
                <li>Ein kostenloser, unverbindlicher Orientierungsabend</li>
                <li>8 wöchentliche Gruppentreffen à 2,5 h</li>
                <li>Ein Achtsamkeitstag zur Vertiefung</li>
                <li>Achtsame, sanfte Körperübungen</li>
                <li>Geführte Meditationen (Sitzmeditation, Bodyscan,Gehmeditation)</li>
                <li>Informative Impulse zu Stress und Neurobiologie</li>
                <li>Austausch in einer unterstützenden Gruppe</li>
                <li>Kurshandbuch und Audiodateien für zu Hause</li>
                <li>Eine Praxis, die sich mit Dir in den Alltag hinein verlängert</li>
            </ul>
            
            <div class="highlight-box">
                <p><strong>Voraussetzung:</strong></p>
                <p>
                    Die Bereitschaft, sich auf einen 8-wöchigen Prozess einzulassen und täglich ca. 45 Minuten für die Übungspraxis zu Hause aufzubringen. MBSR ist kein Quick-Fix, sondern ein substanzieller Trainingsweg.
                </p>
            </div>
        </section>

        <!-- Downloadbereich Kursteilnehmer -->
        <section class="content">
            <div class="download-section">
                <h2>Materialien für Kursteilnehmer</h2>
                <!-- Anmeldung -->
                <div class="download-category">
                    <h3>📋 Anmeldung</h3>
                    <ul class="download-list">
                        <li><a href="downloads/oeffentlich/MBSR_Anmeldeformular_2025_3.pdf" target="_blank" class="download-link" style="text-decoration:none; display:flex; align-items:center; gap:0.75rem;">
                            <span class="download-icon">📄</span>
                            <div class="download-info">
                                <div class="download-title">Anmeldeformular MBSR 2025</div>
                                <div class="download-meta">PDF</div>
                            </div>
                        </a></li>
                    </ul>
                </div>

                <!-- Passwort-Zugang -->
                <div id="pw-zugang">
                    <div style="margin:2rem 0; padding:1.5rem; background:var(--cream-light); border-radius:12px; text-align:center;">
                        <p style="margin-bottom:1rem; color:var(--text-secondary);">Die folgenden Materialien sind nur für Kursteilnehmer zugänglich. Bitte geben Sie das Passwort ein, das Sie im Kurs erhalten haben.</p>
                        <div style="position:relative; max-width:300px; margin:0 auto 1rem;">
                            <input type="password" id="bereich-pw" placeholder="Passwort"
                                style="width:100%; padding:0.8rem 2.5rem 0.8rem 1rem; border:1px solid rgba(52,88,91,0.3); border-radius:8px; font-size:1rem; box-sizing:border-box;">
                            <span onclick="toggleBereichPw()" id="bereich-auge"
                                style="position:absolute; right:0.7rem; top:50%; transform:translateY(-50%); cursor:pointer; font-size:1.1rem; user-select:none;">👁️</span>
                        </div>
                        <div id="bereich-fehler" style="display:none; color:#c0392b; margin-bottom:1rem; font-size:0.9rem;">Falsches Passwort</div>
                        <button onclick="bereichEntsprerren()" style="padding:0.8rem 2rem; background:var(--petrol); color:white; border:none; border-radius:50px; cursor:pointer; font-size:0.95rem;">Zugang öffnen</button>
                    </div>
                </div>
                <!-- Geschuetzter Bereich -->
                <div id="geschuetzter-bereich" style="display:none;">
                <!-- Handbuch -->
                <div class="download-category">
                    <h3>📖 Handbuch</h3>
                    <ul class="download-list">
                        <?php
                        include_once __DIR__ . '/downloads/kurs/freigabe.php';
                        for ($w = 1; $w <= 8; $w++):
                            if (in_array($w, $freigeschaltet)):
                        ?>
                        <li><div class="download-link" onclick="downloadDatei('woche<?php echo $w; ?>.pdf', 'kurs')">
                            <span class="download-icon">📄</span>
                            <div class="download-info">
                                <div class="download-title">Woche <?php echo $w; ?></div>
                                <div class="download-meta">PDF</div>
                            </div>
                        </div></li>
                        <?php endif; endfor; ?>
                    </ul>
                </div>

                <!-- Audiodateien -->
                <div class="download-category">
                    <h3>🎧 Audiodateien</h3>
                    <ul class="download-list">
                        <li><div class="download-link" onclick="downloadDatei('bodyscan.mp3', 'kurs')">
                            <span class="download-icon">🎵</span>
                            <div class="download-info"><div class="download-title">Body Scan</div><div class="download-meta">MP3</div></div>
                        </div></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Passwort-Dialog -->
        <div id="pw-overlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:9999; align-items:center; justify-content:center;">
            <div style="background:white; padding:2.5rem; border-radius:12px; max-width:400px; width:90%; text-align:center;">
                <h3 style="margin-bottom:1rem; color:var(--text-primary);">Passwort erforderlich</h3>
                <p style="margin-bottom:1.5rem; color:var(--text-secondary); font-size:0.95rem;">Bitte geben Sie das Kurspasswort ein.</p>
                <div style="position:relative; width:100%; margin-bottom:1rem;">
                    <input type="password" id="pw-input" placeholder="Passwort"
                        style="width:100%; padding:0.8rem 2.5rem 0.8rem 1rem; border:1px solid rgba(52,88,91,0.3); border-radius:8px; font-size:1rem; box-sizing:border-box;">
                    <span onclick="togglePwSichtbar()" id="pw-auge"
                        style="position:absolute; right:0.7rem; top:50%; transform:translateY(-50%); cursor:pointer; font-size:1.1rem; user-select:none;">👁️</span>
                </div>
                <div id="pw-fehler" style="display:none; color:#c0392b; margin-bottom:1rem; font-size:0.9rem;">Falsches Passwort</div>
                <div style="display:flex; gap:1rem; justify-content:center;">
                    <button onclick="pwAbbrechen()" style="padding:0.8rem 1.5rem; border:1px solid var(--petrol); background:white; color:var(--petrol); border-radius:50px; cursor:pointer; font-size:0.95rem;">Abbrechen</button>
                    <button onclick="pwBestaetigen()" style="padding:0.8rem 1.5rem; background:var(--petrol); color:white; border:none; border-radius:50px; cursor:pointer; font-size:0.95rem;">Download</button>
                </div>
            </div>
        </div>

        <script>
        let aktiveDatei = null;
        let aktiverOrdner = null;

        // Bereich-Passwort beim Laden pruefen
        (function() {
            const pw = sessionStorage.getItem('kursPw');
            if (pw) {
                document.getElementById('pw-zugang').style.display = 'none';
                document.getElementById('geschuetzter-bereich').style.display = 'block';
            }
        })();

        function toggleBereichPw() {
            const inp = document.getElementById('bereich-pw');
            const auge = document.getElementById('bereich-auge');
            inp.type = inp.type === 'password' ? 'text' : 'password';
            auge.textContent = inp.type === 'password' ? '👁️' : '🙈';
        }

        async function bereichEntsprerren() {
            const pw = document.getElementById('bereich-pw').value;
            const formData = new FormData();
            formData.append('passwort', pw);
            const response = await fetch(
                'download.php?datei=freigabe.php&ordner=kurs',
                { method: 'POST', body: formData }
            );
            if (response.ok || response.status === 404) {
                sessionStorage.setItem('kursPw', pw);
                document.getElementById('pw-zugang').style.display = 'none';
                document.getElementById('geschuetzter-bereich').style.display = 'block';
            } else if (response.status === 401) {
                document.getElementById('bereich-fehler').style.display = 'block';
            }
        }

        document.getElementById('bereich-pw').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') bereichEntsprerren();
        });

        function togglePwSichtbar() {
            const inp = document.getElementById('pw-input');
            const auge = document.getElementById('pw-auge');
            if (inp.type === 'password') {
                inp.type = 'text';
                auge.textContent = '🙈';
            } else {
                inp.type = 'password';
                auge.textContent = '👁️';
            }
        }

        async function downloadDatei(datei, ordner) {
            const pw = sessionStorage.getItem('kursPw');
            if (!pw) return;
            const formData = new FormData();
            formData.append('passwort', pw);
            const response = await fetch(
                'download.php?datei=' + datei + '&ordner=' + ordner,
                { method: 'POST', body: formData }
            );
            if (response.ok) {
                const blob = await response.blob();
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = datei;
                a.click();
                window.URL.revokeObjectURL(url);
            } else {
                alert('Fehler beim Download.');
            }
        }

        function pwAbbrechen() {
            document.getElementById('pw-overlay').style.display = 'none';
        }

        async function pwBestaetigen() {
            const pw = document.getElementById('pw-input').value;
            const formData = new FormData();
            formData.append('passwort', pw);

            const response = await fetch(
                'download.php?datei=' + aktiveDatei + '&ordner=' + aktiverOrdner,
                { method: 'POST', body: formData }
            );

            if (response.ok) {
                const blob = await response.blob();
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = aktiveDatei;
                a.click();
                window.URL.revokeObjectURL(url);
                document.getElementById('pw-overlay').style.display = 'none';
            } else if (response.status === 401) {
                document.getElementById('pw-fehler').style.display = 'block';
            } else {
                alert('Fehler beim Download.');
            }
        }

        document.getElementById('pw-input').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') pwBestaetigen();
        });
        </script>

        <!-- CTA Section -->
        <div class="cta-section">
            <h2>Bereit für den nächsten Schritt?</h2>
            <p>Vereinbaren Sie ein unverbindliches Vorgespräch, in dem wir klären, ob MBSR das Richtige für Sie ist.</p>
            <a href="kontakt.php" class="cta-button">Jetzt Vorgespräch vereinbaren</a>            
            <p style="font-size: 0.95rem; margin-top: 2rem; opacity: 0.9;">
                Oder rufen Sie an: <strong>0163-6605226</strong>
            </p>
        </div>
    </div>

    <!-- Footer -->
<?php include 'includes/footer.php'; ?>
</body>
</html>
