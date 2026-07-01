<?php
require_once __DIR__ . '/../config/config.php';
require_once ROOT_PATH . '/includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toastmasters Aachen Flyer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <style>
        :root {
            /* Brand Colors */
            --tm-blue: #004165;
            --tm-maroon: #772432;
            --tm-gray: #A9B2B1;
            --tm-yellow: #F2DF74;
            --tm-navy-dark: #00253B;
            --tm-bg-cream: #FAF8F5;
            --tm-text: #1e293b;
            --tm-muted: #475569;
        }

        /* Scaling System: 1rem corresponds exactly to 1mm in print.
           On screen, 1rem is scaled to 11.81px so A6 (105mm x 148.5mm) matches 1240px x 1754px. */
        html {
            font-size: 11.8095px;
        }

        @media print {
            html {
                font-size: 1mm !important;
            }
            @page {
                size: 105mm 148.5mm;
                margin: 0;
            }
            body {
                background-color: var(--tm-bg-cream) !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            width: 105rem;
            height: 148.5rem;
            font-family: 'Inter', sans-serif;
            color: var(--tm-text);
            background-color: var(--tm-bg-cream);
            padding: 6.8rem 6rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        /* Header Layout */
        .flyer-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .brand-info h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3.9rem;
            font-weight: 800;
            color: var(--tm-navy-dark);
            letter-spacing: -0.02em;
            margin-bottom: 0.7rem;
        }

        .brand-info p {
            font-size: 1.7rem;
            color: var(--tm-muted);
            font-weight: 500;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .brand-logo img {
            height: 10.2rem;
            width: auto;
        }

        /* Sole Upper Hook Slogan */
        .main-slogan {
            margin-top: 3.4rem;
            margin-bottom: 1.7rem;
            font-family: 'Montserrat', sans-serif;
            font-size: 3.2rem;
            font-weight: 700;
            color: var(--tm-maroon);
            text-align: center;
            line-height: 1.2;
            letter-spacing: -0.01em;
        }

        /* Edge-to-Edge Banner Container */
        .banner-container {
            width: calc(100% + 12rem);
            margin-left: -6rem;
            height: 52.5rem;
            overflow: hidden;
            position: relative;
        }

        .banner-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 2%;
        }

        /* 3 Key Messages - Negative Space */
        .key-messages {
            list-style: none;
            padding: 3.4rem 0.8rem;
            display: flex;
            flex-direction: column;
            gap: 2.0rem;
        }

        .key-messages li {
            font-size: 2.2rem;
            line-height: 1.4;
            color: var(--tm-navy-dark);
            display: flex;
            align-items: flex-start;
            gap: 1.7rem;
            font-weight: 500;
        }

        .key-messages li i {
            color: var(--tm-maroon);
            font-size: 2.4rem;
            margin-top: 0.34rem;
        }

        /* Address & Time Box - Stretched Full Width */
        .info-box {
            width: 100%;
            border: 0.25rem solid var(--tm-blue);
            background-color: #ffffff;
            border-radius: 1.0rem;
            padding: 2.5rem 3.4rem;
            box-shadow: 0 0.34rem 1.7rem rgba(0, 0, 0, 0.02);
            display: flex;
            flex-direction: column;
            gap: 1.35rem;
        }

        .info-row {
            display: flex;
            align-items: center;
            font-size: 2.0rem;
            color: var(--tm-navy-dark);
            font-weight: 600;
        }

        .info-row i {
            color: var(--tm-blue);
            font-size: 2.4rem;
            width: 4.2rem;
            flex-shrink: 0;
        }

        .info-row span {
            line-height: 1.2;
        }

        /* Target Audience & Free Entrance Badge */
        .meta-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 1.7rem 0.8rem;
            border-bottom: 0.17rem solid var(--tm-gray);
        }

        .target-audience {
            font-size: 1.85rem;
            color: var(--tm-muted);
            max-width: 68rem;
            line-height: 1.4;
            font-weight: 500;
        }

        .target-audience strong {
            color: var(--tm-navy-dark);
            font-weight: 700;
        }

        .free-badge {
            background-color: var(--tm-yellow);
            color: var(--tm-navy-dark);
            font-family: 'Montserrat', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            padding: 1.0rem 2.0rem;
            border-radius: 2.55rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            box-shadow: 0 0.34rem 0.85rem rgba(242, 223, 116, 0.3);
            white-space: nowrap;
        }

        /* Footer Section */
        .flyer-footer {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            width: 100%;
            padding-top: 0.85rem;
        }

        .cta-container {
            flex: 1;
            padding-right: 3.4rem;
        }

        .cta-container h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 3.4rem;
            font-weight: 800;
            color: var(--tm-maroon);
            margin-bottom: 1.0rem;
            line-height: 1.2;
        }

        .cta-container p {
            font-size: 1.85rem;
            color: var(--tm-muted);
            line-height: 1.4;
        }

        .qrs-container {
            display: flex;
            gap: 3.4rem;
        }

        .qr-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.0rem;
        }

        .qr-card img {
            width: 14.4rem;
            height: 14.4rem;
            background-color: #ffffff;
            padding: 0.7rem;
            border-radius: 0.7rem;
            box-shadow: 0 0.34rem 1.27rem rgba(0, 0, 0, 0.05);
        }

        .qr-card span {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--tm-navy-dark);
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <div class="flyer-header">
        <div class="brand-info">
            <h1>Toastmasters Aachen e.V.</h1>
            <p>Your public speaking club in Aachen</p>
        </div>
        <div class="brand-logo">
            <img src="/assets/images/Logo.png" alt="Toastmasters International Logo">
        </div>
    </div>

    <!-- Strong Slogan Hook -->
    <div class="main-slogan">
        Build confidence in public speaking.
    </div>

    <!-- Edge-to-Edge Banner Image -->
    <div class="banner-container">
        <img src="/assets/images/Titelfoto.jpg" alt="Toastmasters Aachen Club Group Photo">
    </div>

    <!-- 3 Key Bullet Messages -->
    <ul class="key-messages">
        <li>
            <i class="fas fa-check-circle" aria-hidden="true"></i>
            <span>Improve presentation and structured communication skills.</span>
        </li>
        <li>
            <i class="fas fa-check-circle" aria-hidden="true"></i>
            <span>Develop leadership skills in a safe learning space.</span>
        </li>
        <li>
            <i class="fas fa-check-circle" aria-hidden="true"></i>
            <span>Give & receive feedback in a supportive learning environment.</span>
        </li>
    </ul>

    <!-- Time & Location Information -->
    <div class="info-box">
        <div class="info-row">
            <i class="far fa-clock" aria-hidden="true"></i>
            <span>Meetings: Every Tuesday, 7:00 PM – 9:00 PM. Alternating German / English.</span>
        </div>
        <div class="info-row">
            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
            <span>Location: Digital Church, Jülicher Straße 72a, 52070 Aachen</span>
        </div>
    </div>

    <!-- Target Audience & Cost Badge -->
    <div class="meta-container">
        <div class="target-audience">
            <strong>Meetings are open to anyone.</strong> Students, professionals, and anyone interested in personal development are warmly welcome.
        </div>
        <div class="free-badge">
            Just drop by!
        </div>
    </div>

    <!-- Footer Call to Action & QR Codes -->
    <div class="flyer-footer">
        <div class="cta-container">
            <h2>Join us as a guest!</h2>
            <p>Visit our club website for meeting updates or scan the location code to find us.</p>
        </div>
        <div class="qrs-container">
            <div class="qr-card">
                <span>Website</span>
                <img src="/assets/images/qr_website.png" alt="QR Code to Website">
            </div>
            <div class="qr-card">
                <span>Location</span>
                <img src="/assets/images/qr_maps.png" alt="QR Code to Google Maps Location">
            </div>
        </div>
    </div>

</body>
</html>
