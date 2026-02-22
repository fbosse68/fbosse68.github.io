<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medien - Dr. Florian Bosse Göttingen</title>
    <meta name="description" content="Videos und Medien von Dr. Florian Bosse zu Schmerztherapie, MBSR und Achtsamkeit.">
    <meta name="author" content="Dr. Florian Bosse">
    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="fonts.css">
    <link rel="stylesheet" href="styles.css">

    <style>
        /* ===== MEDIEN-SPEZIFISCHE STYLES ===== */
        .hero {
            min-height: 40vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8rem 2rem 4rem;
            background: linear-gradient(to bottom, var(--off-white) 0%, var(--cream-light) 100%);
        }
        .hero-content {
            max-width: 800px;
            text-align: center;
        }
        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 3.5rem);
            line-height: 1.15;
            margin-bottom: 1.5rem;
            color: var(--text-primary);
        }
        .hero p {
            font-size: clamp(1rem, 2vw, 1.15rem);
            color: var(--text-secondary);
            max-width: 650px;
            margin: 0 auto;
            font-weight: 300;
        }
        .medien-content {
            max-width: 1100px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }
        .medien-kategorie {
            margin-bottom: 5rem;
        }
        .medien-kategorie h2 {
            font-size: 2rem;
            color: var(--text-primary);
            margin-bottom: 2.5rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(52, 88, 91, 0.15);
        }
        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }
        .video-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(52, 88, 91, 0.08);
            border: 1px solid rgba(52, 88, 91, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .video-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(52, 88, 91, 0.15);
        }
        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        .video-info {
            padding: 1.5rem;
        }
        .video-info h3 {
            font-size: 1.2rem;
            color: var(--text-primary);
            margin-bottom: 0.5rem;
            font-weight: 400;
        }
        .video-info p {
            font-size: 0.9rem;
            color: var(--text-secondary);
            line-height: 1.6;
            font-weight: 300;
        }
        @media (max-width: 768px) {
            .video-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
<?php include 'includes/nav.php'; ?>

    <section class="hero">
        <div class="hero-content">
            <h1>Medien</h1>
            <p>Videos zu Schmerztherapie, Achtsamkeit und integrativer Medizin</p>
        </div>
    </section>

    <div class="medien-content">

        <div class="medien-kategorie">
            <h2>Schmerztherapie</h2>
            <div class="video-grid">

                <div class="video-card">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/H108AQGrc_4"
                            title="Über mich und diesen Kanal"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="video-info">
                        <h3>Über mich und diesen Kanal</h3>
                        <p>Eine Einführung in meine Arbeit als Schmerztherapeut und die Themen dieses Kanals.</p>
                    </div>
                </div>

                <div class="video-card">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/Ps05HlvvM64"
                            title="Was ist Schmerz? - Teil 1"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="video-info">
                        <h3>Was ist Schmerz? – Teil 1</h3>
                        <p>Grundlagen des Schmerzgeschehens – neurobiologisch erklärt.</p>
                    </div>
                </div>

                <div class="video-card">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/6dDSvGVfmjo"
                            title="Was ist Schmerz? - Teil 2"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="video-info">
                        <h3>Was ist Schmerz? – Teil 2</h3>
                        <p>Vertiefung: Chronischer Schmerz und seine neurobiologischen Hintergründe.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
