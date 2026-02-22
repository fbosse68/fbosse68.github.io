<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>Kontakt - Dr. Florian Bosse Göttingen</title>
    <meta name="description" content="Kontakt zu Dr. Florian Bosse - Schmerztherapie & Achtsamkeit in Göttingen. Telefon, E-Mail, Terminvereinbarung.">
    <!-- Google Site Verification -->
    <meta name="google-site-verification" content="2ikfE-aLvrJ4-44RcKuoOutv7_RC3mczA9YnfP-s9ck">
    <meta name="author" content="Dr. Florian Bosse">
    <meta name="robots" content="index, follow">
    
    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="styles.css">
    
    <style>
        /* ===== KONTAKT-SPEZIFISCHE STYLES ===== */
        
        /* Navigation → styles.css */

        /* Main Container */
        .contact-container {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 4rem;
        }

        /* Contact Info Section */
        .contact-info-section {
            background: white;
            padding: 3rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(52, 88, 91, 0.08);
            height: fit-content;
        }

        .contact-info-section h1 {
            font-family: 'Crimson Pro', sans-serif;
            font-size: 2.5rem;
            color: var(--petrol);
            margin-bottom: 1.5rem;
            font-weight: 400;
        }

        .contact-info-section p {
            color: var(--text-secondary);
            margin-bottom: 2rem;
            line-height: 1.8;
        }

        .info-item {
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid rgba(52, 88, 91, 0.1);
        }

        .info-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .info-item h3 {
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--petrol);
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .info-item a {
            color: var(--text-primary);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .info-item a:hover {
            color: var(--petrol);
        }

        /* Form Section */
        .form-section {
            background: white;
            padding: 3rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(52, 88, 91, 0.08);
        }

        .form-section h2 {
            font-family: 'Crimson Pro', sans-serif;
            font-size: 2rem;
            color: var(--petrol);
            margin-bottom: 0.5rem;
            font-weight: 400;
        }

        .form-description {
            color: var(--text-secondary);
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-primary);
            font-weight: 500;
            font-size: 0.95rem;
        }

        label .required {
            color: var(--petrol);
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 0.9rem 1.2rem;
            border: 1.5px solid #E1E8E8;
            border-radius: 8px;
            font-family: 'DM Sans', sans-serif;
            font-size: 1rem;
            color: var(--text-primary);
            transition: all 0.3s ease;
            background: var(--cream);
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            outline: none;
            border-color: var(--petrol);
            background: white;
            box-shadow: 0 0 0 3px rgba(52, 88, 91, 0.1);
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        .submit-button {
            background: var(--petrol);
            color: white;
            border: none;
            padding: 1rem 3rem;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'DM Sans', sans-serif;
            margin-top: 1rem;
        }

        .submit-button:hover {
            background: var(--petrol-dark);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(52, 88, 91, 0.3);
        }

        .submit-button:active {
            transform: translateY(0);
        }

        /* Success Message */
        .success-message {
            background: #D4EDDA;
            color: #155724;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            border-left: 4px solid #28A745;
            display: none;
        }

        /* Footer */
        footer {
            background: var(--petrol-dark);
            color: white;
            padding: 3rem 2rem 2rem;
            margin-top: 6rem;
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            font-family: 'Crimson Pro', serif;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            font-weight: 400;
        }

        .footer-section p,
        .footer-section a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            line-height: 1.8;
            display: block;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }

        .footer-section a:hover {
            color: white;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .contact-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .contact-info-section h1 {
                font-size: 2rem;
            }

            .form-section h2 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
<?php include 'includes/nav.php'; ?>

    <!-- Main Container -->
    <div class="contact-container">
        <!-- Contact Info -->
        <div class="contact-info-section">
            <h1>Kontakt</h1>
            <p>Ich freue mich über Ihre Nachricht. Ob Frage, Terminwunsch oder einfach Interesse an meinem Ansatz – schreiben Sie mir gerne.</p>
            
            <div class="info-item">
                <h2>Kontaktdaten:</h2>
                <h3>E-Mail</h3>
                 <a href="mailto:dr.florianbosse@posteo.de" target="_blank">dr.florianbosse@posteo.de</a> 
            </div>
             <div class="info-item">
                <h3>Telefon:</h3>
                 <p>0163-6605226</p>
            </div>
           
            
            <div class="info-item">
                <h3>Erreichbarkeit</h3>
                <p>
                    Auf eine E-Mail antworte ich in der Regel innerhalb von 24-48 Stunden.<br>
                    Für dringende Anliegen versuchen Sie mich gerne telefonisch zu kontaktieren.<br>
                    
                   
                </p>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="form-section">
            <h2>Nachricht senden</h2>
            <p class="form-description">Nutzen Sie gerne dieses Formular für Ihre Anfrage.</p>
            
            <div id="successMessage" class="success-message">
                Vielen Dank für Ihre Nachricht! Ich melde mich zeitnah bei Ihnen.
            </div>
            
            <form id="contactForm" action="https://drbosse.de/mail.php" method="POST">
                <div class="form-group">
                    <label for="name">Name <span class="required">*</span></label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">E-Mail <span class="required">*</span></label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Nachricht <span class="required">*</span></label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                
                <!-- Spam-Schutz Honeypot (unsichtbar für Benutzer) -->  
               <!-- <input type="text" name="website" value="" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true"> -->  
                <input type="text" name="website" value="" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true" aria-label="Nicht ausfüllen">
                
                <button type="submit" class="submit-button">Nachricht senden</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
<?php include 'includes/footer.php'; ?>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script>
    // Form submission handling - Strato VPS PHP Mailer
    const successMessage = document.getElementById('successMessage');
    
    // Status aus URL auslesen (nach Weiterleitung von mail.php)
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');
    
    if (status === 'ok' && successMessage) {
        successMessage.style.display = 'block';
        successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
    
    if (status === 'fehler') {
        const form = document.getElementById('contactForm');
        if (form) {
            const fehler = document.createElement('div');
            fehler.style.cssText = 'color: #c0392b; background: #fde8e8; padding: 1rem; border-radius: 8px; margin-bottom: 1rem;';
            fehler.textContent = 'Es ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut oder schreiben Sie direkt an info@drbosse.de';
            form.insertBefore(fehler, form.firstChild);
        }
    }
    </script>
</body>
</html>