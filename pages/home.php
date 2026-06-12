<?php
require_once __DIR__ . '/../config/config.php';
require_once ROOT_PATH . '/includes/functions.php';

$next_meeting = get_next_meeting_info();

$page_title = t('Toastmasters Aachen e. V. | Rhetorik & Führung', 'Toastmasters Aachen e. V. | Public Speaking & Leadership');
$page_description = t(
    'Überwinde deine Redeangst, lerne überzeugend zu präsentieren und trainiere Schlagfertigkeit bei den Toastmasters Aachen. Jeden Dienstag um 19:00 Uhr in der Digital Church.',
    'Overcome stage fright, learn to present convincingly, and train your impromptu speaking at Toastmasters Aachen. Every Tuesday at 7:00 PM in the Digital Church.'
);

include ROOT_PATH . '/includes/header.php';
?>

<main class="site-main home-page">
    <!-- Hero Section -->
    <section class="hero-section" aria-label="<?php echo t('Willkommen bei Toastmasters Aachen', 'Welcome to Toastmasters Aachen'); ?>">
        <div class="hero-content">
            <span class="badge">Toastmasters Aachen e. V.</span>
            <h1><?php echo t('Verwandle deine Redeangst in <span class="highlight-text">Souveränität</span>', 'Transform your stage fright into <span class="highlight-text">confidence</span>'); ?></h1>
            <p class="hero-sub">
                <?php echo t(
                    'Ob RWTH-Präsentation, wichtiges Kundengespräch oder spontane Frage vom Chef – bei uns lernst du, in jeder Situation selbstbewusst, strukturiert und überzeugend zu sprechen.',
                    'Whether it\'s an RWTH presentation, an important business meeting, or an unexpected question from your boss – with us you will learn to speak self-confidently, structured, and persuasively in any situation.'
                ); ?>
            </p>
            <div class="hero-actions">
                <a href="#treffen" class="btn btn-primary" id="cta-visit-btn"><?php echo t('Treffen besuchen', 'Visit a Meeting'); ?></a>
                <a href="/ueber-toastmasters" class="btn btn-secondary" id="cta-concept-btn"><?php echo t('Das Konzept kennenlernen', 'Explore the Concept'); ?></a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="visual-card-image">
                <img src="/assets/images/Titelfoto.jpg" alt="Toastmasters Aachen Clubabend in der Digital Church" class="hero-main-img">
            </div>
        </div>
    </section>

    <!-- Pain Points Triggers with Flip Cards -->
    <section class="pain-points-section" aria-label="<?php echo t('Typische Herausforderungen beim Reden', 'Typical Public Speaking Challenges'); ?>">
        <div class="section-header">
            <h2><?php echo t('Kommt dir das <span class="accent-color">bekannt vor</span>?', 'Does this <span class="accent-color">sound familiar</span>?'); ?></h2>
            <p>
                <?php echo t(
                    'Rhetorik ist kein angeborenes Talent. Es ist ein Muskel – und die meisten Menschen spüren diese typischen Schmerzen:',
                    'Public speaking is not an innate talent. It is a muscle – and most people experience these typical pain points:'
                ); ?>
            </p>
        </div>
        
        <div class="pain-grid">
            <!-- Card 1: Lampenfieber -->
            <div class="flip-card" role="button" tabindex="0" aria-label="<?php echo t('Karte drehen: Das Herzklopfen-Gewitter', 'Flip Card: The Racing Heartbeat'); ?>">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="flip-icon" aria-hidden="true"><i class="fas fa-sync-alt"></i></div>
                        <div class="pain-icon"><i class="fas fa-heartbeat" aria-hidden="true"></i></div>
                        <h3><?php echo t('Das Herzklopfen-Gewitter', 'The Racing Heartbeat'); ?></h3>
                        <p><?php echo t(
                            'Du stehst auf. Alle Augen starren dich an. Plötzlich wird dein Mund trocken wie Wüstensand, deine Stimme zittert und dein vorbereiteter Text löst sich im Nichts auf.',
                            'You stand up. All eyes are on you. Suddenly your mouth becomes dry as desert sand, your voice trembles, and your prepared speech vanishes into thin air.'
                        ); ?></p>
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-icon" aria-hidden="true"><i class="fas fa-sync-alt"></i></div>
                        <div class="pain-icon"><i class="fas fa-shield-alt" aria-hidden="true"></i></div>
                        <h3><?php echo t('Wie wir dir helfen:', 'How we help you:'); ?></h3>
                        <p><?php echo t(
                            'Bei Toastmasters Aachen übst du im geschützten Raum. Fehler sind erwünscht. Schritt für Schritt verwandelst du dein Lampenfieber in positive Ausstrahlung.',
                            'At Toastmasters Aachen, you practice in a safe space. Mistakes are welcome. Step by step, you transform your stage fright into positive presence.'
                        ); ?></p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Redestruktur -->
            <div class="flip-card" role="button" tabindex="0" aria-label="<?php echo t('Karte drehen: Der verlorene rote Faden', 'Flip Card: The Lost Red Thread'); ?>">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="flip-icon" aria-hidden="true"><i class="fas fa-sync-alt"></i></div>
                        <div class="pain-icon"><i class="fas fa-project-diagram" aria-hidden="true"></i></div>
                        <h3><?php echo t('Der verlorene rote Faden', 'The Lost Red Thread'); ?></h3>
                        <p><?php echo t(
                            'Du hast stundenlang recherchiert. Aber beim Sprechen verlierst du dich im Detail-Dschungel. Am Ende siehst du gähnende Gesichter und merkst: Keiner hat dich verstanden.',
                            'You spent hours researching. But when speaking, you get lost in a jungle of details. In the end, you see yawning faces and realize: no one understood your core message.'
                        ); ?></p>
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-icon" aria-hidden="true"><i class="fas fa-sync-alt"></i></div>
                        <div class="pain-icon"><i class="fas fa-bullseye" aria-hidden="true"></i></div>
                        <h3><?php echo t('Wie wir dir helfen:', 'How we help you:'); ?></h3>
                        <p><?php echo t(
                            'Unser Ausbildungsprogramm schult dich, Reden auf den Punkt zu strukturieren (5-7 Min) und Kernbotschaften mit fesselndem Storytelling zu vermitteln.',
                            'Our educational program trains you to structure speeches to the point (5-7 min) and deliver core messages using compelling storytelling.'
                        ); ?></p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Schlagfertigkeit -->
            <div class="flip-card" role="button" tabindex="0" aria-label="<?php echo t('Karte drehen: Der Einfrier-Schock', 'Flip Card: The Freeze-Shock'); ?>">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="flip-icon" aria-hidden="true"><i class="fas fa-sync-alt"></i></div>
                        <div class="pain-icon"><i class="fas fa-snowflake" aria-hidden="true"></i></div>
                        <h3><?php echo t('Der Einfrier-Schock', 'The Freeze-Shock'); ?></h3>
                        <p><?php echo t(
                            'Ein Kollege oder Chef stellt dir in großer Runde eine spontane Frage. Du frierst ein, stammelst eine Ausrede und ärgerst dich noch Stunden später über deine verpasste Antwort.',
                            'A colleague or boss asks you a spontaneous question in a large meeting. You freeze, mumble an excuse, and keep cursing yourself hours later about your missed response.'
                        ); ?></p>
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-icon" aria-hidden="true"><i class="fas fa-sync-alt"></i></div>
                        <div class="pain-icon"><i class="fas fa-bolt" aria-hidden="true"></i></div>
                        <h3><?php echo t('Wie wir dir helfen:', 'How we help you:'); ?></h3>
                        <p><?php echo t(
                            'An jedem Clubabend trainieren wir Stegreifreden. Du lernst, innerhalb von Sekunden eine strukturierte Antwort zu geben und ruhig zu bleiben.',
                            'At every club meeting, we train impromptu speaking. You learn to deliver a structured answer within seconds and stay perfectly calm.'
                        ); ?></p>
                    </div>
                </div>
            </div>

            <!-- Card 4: Sprache -->
            <div class="flip-card" role="button" tabindex="0" aria-label="<?php echo t('Karte drehen: Die englische Blockade', 'Flip Card: The English Blockade'); ?>">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="flip-icon" aria-hidden="true"><i class="fas fa-sync-alt"></i></div>
                        <div class="pain-icon"><i class="fas fa-globe-americas" aria-hidden="true"></i></div>
                        <h3><?php echo t('Die englische Blockade', 'The English Blockade'); ?></h3>
                        <p><?php echo t(
                            'Auf Deutsch bist du brillant. Aber sobald das Meeting ins Englische wechselt, schrumpft dein aktiver Wortschatz auf Schulniveau. Du wirkst inkompetent, obwohl du ein Experte bist.',
                            'In German you are brilliant. But as soon as the meeting shifts to English, your active vocabulary shrinks to school level. You look incompetent, even though you are an expert.'
                        ); ?></p>
                    </div>
                    <div class="flip-card-back">
                        <div class="flip-icon" aria-hidden="true"><i class="fas fa-sync-alt"></i></div>
                        <div class="pain-icon"><i class="fas fa-comments" aria-hidden="true"></i></div>
                        <h3><?php echo t('Wie wir dir helfen:', 'How we help you:'); ?></h3>
                        <p><?php echo t(
                            'Durch unser zweisprachiges Umfeld (Deutsch/Englisch) verliert die Fremdsprache ihren Schrecken. Du gewinnst echte Rede-Routine für Alltag und Beruf.',
                            'Through our bilingual environment (German/English), speaking in a foreign language loses its fear factor. You gain real speaking routine for daily and business life.'
                        ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Compact 3D Cards Carousel Section -->
    <section class="gallery-carousel-section" aria-label="<?php echo t('Bildergalerie', 'Image Gallery'); ?>">
        <div class="section-header">
            <h2><?php echo t('Eindrücke aus dem <span class="accent-color">Club-Leben</span>', 'Impressions of <span class="accent-color">Club Life</span>'); ?></h2>
            <p><?php echo t('Erlebe die besondere Stimmung vor Ort – in der einzigartigen Digital Church und bei unseren wöchentlichen Reden. Klicke auf das aktive Bild zur Vergrößerung.', 'Experience the unique atmosphere on site – in the unique Digital Church and during our weekly speeches. Click the active image to enlarge.'); ?></p>
        </div>

        <div class="cards-carousel-container">
            <button class="carousel-nav-btn prev-btn" aria-label="<?php echo t('Vorheriges Bild', 'Previous image'); ?>"><i class="fas fa-chevron-left" aria-hidden="true"></i></button>
            
            <div class="cards-carousel-track">
                <!-- Slide 1 -->
                <div class="cards-carousel-item active" data-index="0" role="button" tabindex="0" aria-label="<?php echo t('Bild vergrößern: Erlebe die Gemeinschaft', 'Enlarge Image: Experience the Community'); ?>">
                    <img src="/assets/images/Galerie.jpg" alt="<?php echo t('Aachener Toastmasters Gemeinschaft', 'Aachen Toastmasters Community'); ?>">
                    <div class="carousel-item-caption">
                        <h3><?php echo t('Gemeinsam wachsen', 'Grow Together'); ?></h3>
                        <p><?php echo t('Bei uns unterstützt jeder jeden. Herkunft, Alter oder Beruf spielen keine Rolle – Respekt und Zusammenhalt stehen an erster Stelle.', 'Everyone supports each other. Background, age, or profession do not matter – respect and support are our top priorities.'); ?></p>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="cards-carousel-item next" data-index="1" role="button" tabindex="0" aria-label="<?php echo t('Bild vergrößern: Die Digital Church', 'Enlarge Image: The Digital Church'); ?>">
                    <img src="/assets/images/Church 2.jpg" alt="Digital Church Aachen">
                    <div class="carousel-item-caption">
                        <h3><?php echo t('Unsere Bühne für deinen Erfolg', 'Our Stage for Your Success'); ?></h3>
                        <p><?php echo t('In der inspirierenden Digital Church Aachen schaffen wir den optimalen Rahmen, damit du über dich hinauswachsen kannst.', 'In the inspiring Digital Church Aachen, we provide the perfect environment for you to exceed your limits.'); ?></p>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="cards-carousel-item" data-index="2" role="button" tabindex="0" aria-label="<?php echo t('Bild vergrößern: Spontane Stegreifreden', 'Enlarge Image: Impromptu Speaking'); ?>">
                    <img src="/assets/images/Galerie 4.jpg" alt="<?php echo t('Stegreifreden bei Toastmasters', 'Table Topics at Toastmasters'); ?>">
                    <div class="carousel-item-caption">
                        <h3><?php echo t('Mut zur Spontaneität', 'Embrace Spontaneity'); ?></h3>
                        <p><?php echo t('Bei den Stegreifreden lernen wir, ohne Vorbereitung strukturiert und überzeugend zu antworten – mit Spaß und gegenseitigem Vertrauen.', 'In impromptu speaking, we learn to answer in a structured and convincing way without preparation – with fun and mutual trust.'); ?></p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="cards-carousel-item prev" data-index="3" role="button" tabindex="0" aria-label="<?php echo t('Bild vergrößern: Vorbereitete Reden', 'Enlarge Image: Prepared Speeches'); ?>">
                    <img src="/assets/images/Galerie 3.jpg" alt="<?php echo t('Mitglied hält vorbereitete Rede', 'Member delivering prepared speech'); ?>">
                    <div class="carousel-item-caption">
                        <h3><?php echo t('Wertschätzung & Feedback', 'Support & Feedback'); ?></h3>
                        <p><?php echo t('Exzellenz entsteht durch Praxis. Nach jeder Rede erhältst du konstruktives, ehrliches Feedback, das dich im Alltag weiterbringt.', 'Excellence comes through practice. After every speech, you receive constructive, honest feedback that helps you grow in daily life.'); ?></p>
                    </div>
                </div>
            </div>

            <button class="carousel-nav-btn next-btn" aria-label="<?php echo t('Nächstes Bild', 'Next image'); ?>"><i class="fas fa-chevron-right" aria-hidden="true"></i></button>
        </div>

        <div class="carousel-dots">
            <span class="carousel-dot active" data-index="0" role="button" aria-label="<?php echo t('Folie 1 anzeigen', 'Show slide 1'); ?>"></span>
            <span class="carousel-dot" data-index="1" role="button" aria-label="<?php echo t('Folie 2 anzeigen', 'Show slide 2'); ?>"></span>
            <span class="carousel-dot" data-index="2" role="button" aria-label="<?php echo t('Folie 3 anzeigen', 'Show slide 3'); ?>"></span>
            <span class="carousel-dot" data-index="3" role="button" aria-label="<?php echo t('Folie 4 anzeigen', 'Show slide 4'); ?>"></span>
        </div>
    </section>

    <!-- 3-Step Onboarding Guide Section (Repositioned & rewritten to address speaking anxiety & new activities) -->
    <section class="steps-section" aria-label="<?php echo t('Dein Weg zu uns', 'Your Path to Us'); ?>">
        <div class="section-header">
            <h2><?php echo t('In <span class="accent-color">3 einfachen Schritten</span> zu souveränem Auftreten', 'Your path to confidence in <span class="accent-color">3 simple steps</span>'); ?></h2>
            <p><?php echo t('Wir begleiten dich auf deinem Weg – vom ersten neugierigen Zuhören im Publikum bis zum selbstbewussten Auftritt auf unserer Bühne. Ohne jeden Druck:', 'We support you on your journey – from listening in the audience to standing confidently on stage. Completely without pressure:'); ?></p>
        </div>
        
        <div class="steps-container">
            <!-- Step 1 -->
            <div class="step-item">
                <div class="step-number">01</div>
                <h3><?php echo t('Einfach reinschnuppern', 'Just Drop In'); ?></h3>
                <p><?php echo t('Komm ganz unverbindlich als Gast vorbei. Du sitszt entspannt im Publikum, lauschst den Beiträgen und spürst die warme Atmosphäre. Ohne Sprechzwang, ohne Kosten, ohne Vorbereitung.', 'Simply visit us as a guest without any obligation. You sit relaxed in the audience, listen to the speeches, and feel the warm atmosphere. No pressure to speak, no costs, no preparation.'); ?></p>
            </div>
            
            <!-- Step 2 -->
            <div class="step-item">
                <div class="step-number">02</div>
                <h3><?php echo t('Die Herausforderung wagen', 'Embrace the Challenge'); ?></h3>
                <p><?php echo t('Wenn es dir gefällt und du dich weiterentwickeln möchtest, werde Teil unseres Clubs. Gemeinsam stellen wir uns neuen Herausforderungen, überwinden Redeangst und haben jede Menge Spaß.', 'If you like it and want to grow personally, become part of our club. Together we tackle new challenges, overcome stage fright, and have a lot of fun.'); ?></p>
            </div>
            
            <!-- Step 3 -->
            <div class="step-item">
                <div class="step-number">03</div>
                <h3><?php echo t('Über dich hinauswachsen', 'Grow step-by-step'); ?></h3>
                <p><?php echo t('Übernimm kleine Rollen im Meeting, halte deine ersten Kurzreden und wachse durch wertschätzendes Feedback. Du wirst staunen, wie schnell deine Nervosität schwindet und echter Freude am Reden weicht!', 'Take on small roles in the meeting, give your first talks, and grow with supportive feedback. You will be amazed at how quickly your nervousness fades and turns into real joy of speaking!'); ?></p>
            </div>
        </div>
    </section>

    <!-- Weekly Meeting info -->
    <section id="treffen" class="meeting-section" aria-label="<?php echo t('Wöchentliche Treffen von Toastmasters Aachen', 'Weekly Meetings of Toastmasters Aachen'); ?>">
        <div class="meeting-card">
            <div class="meeting-info">
                <span class="badge accent"><?php echo t('Nächstes Treffen', 'Next Meeting'); ?></span>
                <h2><?php echo t('Komm einfach als Gast vorbei!', 'Just come by as a guest!'); ?></h2>
                <p>
                    <?php echo t(
                        'Jeden Dienstagabend treffen wir uns um 19:00 Uhr. Du brauchst dich nicht anzumelden, keine Rede vorzubereiten und musst als Gast auch nicht vor anderen sprechen (außer du willst es ausprobieren!). Komm einfach an, triff nette Menschen und lerne uns kennen.',
                        'Every Tuesday evening we meet at 7:00 PM. You don\'t need to register, prepare a speech, or speak in front of others as a guest (unless you want to try!). Just arrive, meet friendly people, and get to know us.'
                    ); ?>
                </p>
                <div class="meeting-meta-grid">
                    <div class="meta-item">
                        <div class="meta-icon"><i class="far fa-calendar-alt" aria-hidden="true"></i></div>
                        <div>
                            <strong><?php echo t('Jeden Dienstag', 'Every Tuesday'); ?></strong>
                            <span><?php echo t('Um 19:00 Uhr', 'At 7:00 PM'); ?></span>
                        </div>
                    </div>
                    <div class="meta-item">
                        <div class="meta-icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
                        <div>
                            <strong>Digital Church Aachen</strong>
                            <span>Jülicher Str. 72a, 52070 Aachen</span>
                        </div>
                    </div>
                    <div class="meta-item">
                        <div class="meta-icon"><i class="fas fa-language" aria-hidden="true"></i></div>
                        <div>
                            <strong><?php echo t('Deutsch & Englisch', 'German & English'); ?></strong>
                            <span><?php echo t('Im wöchentlichen Wechsel', 'Alternating weekly'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="next-event-alert">
                    <p>
                        <i class="fas fa-info-circle" aria-hidden="true"></i> 
                        <strong><?php echo t('Nächster Termin:', 'Next Event:'); ?></strong> 
                        <?php echo t(
                            $next_meeting['date_de'] . ' um 19:00 Uhr (Sprache: ' . $next_meeting['language_de'] . ')',
                            $next_meeting['date_en'] . ' at 7:00 PM (Language: ' . $next_meeting['language_en'] . ')'
                        ); ?>
                    </p>
                </div>
            </div>
            <div class="meeting-cta-wrapper">
                <h3><?php echo t('Gast-Vorteile auf einen Blick', 'Guest Benefits at a Glance'); ?></h3>
                <ul class="benefit-list">
                    <li><i class="fas fa-check" aria-hidden="true"></i> <?php echo t('Kostenlose Teilnahme als Gast', 'Free attendance as a guest'); ?></li>
                    <li><i class="fas fa-check" aria-hidden="true"></i> <?php echo t('Keine Verpflichtung zu sprechen', 'No obligation to speak'); ?></li>
                    <li><i class="fas fa-check" aria-hidden="true"></i> <?php echo t('Herzliche & unterstützende Atmosphäre', 'Warm & supportive atmosphere'); ?></li>
                    <li><i class="fas fa-check" aria-hidden="true"></i> <?php echo t('Erste handfeste Tipps zum Mitnehmen', 'First practical tips to take home'); ?></li>
                </ul>
                <a href="/kontakt" class="btn btn-primary btn-block"><?php echo t('Schildere uns deine Fragen', 'Ask us your questions'); ?></a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" aria-label="<?php echo t('Häufig gestellte Fragen', 'Frequently Asked Questions'); ?>">
        <div class="section-header">
            <h2><?php echo t('Noch <span class="accent-color">unsicher</span>?', 'Still <span class="accent-color">unsure</span>?'); ?></h2>
            <p><?php echo t('Keine Sorge, das fragen sich fast alle Gäste vor ihrem ersten Besuch. Hier sind die Antworten:', 'Don\'t worry, almost all guests ask themselves these questions before their first visit. Here are the answers:'); ?></p>
        </div>

        <div class="faq-container">
            <!-- FAQ 1 -->
            <div class="faq-item">
                <details>
                    <summary>
                        <span><?php echo t('Muss ich als Gast sofort vor allen sprechen?', 'Do I have to speak in front of everyone as a guest right away?'); ?></span>
                        <span class="faq-icon-toggle"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                    </summary>
                    <div class="faq-content">
                        <p><?php echo t(
                            'Nein, absolut nicht! Als Gast kannst du dich entspannt zurücklehnen, zuhören und den Abend genießen. Es gibt zwar eine spontane Fragerunde („Stegreifreden“), aber dort rufen wir Gäste nur auf, wenn sie vorher signalisiert haben, dass sie es ausprobieren möchten.',
                            'No, absolutely not! As a guest, you can sit back, listen, and enjoy the evening. While we do have a spontaneous table topics round, guests are only called upon if they have indicated beforehand that they would like to try.'
                        ); ?></p>
                    </div>
                </details>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item">
                <details>
                    <summary>
                        <span><?php echo t('Kostet der Besuch als Gast etwas?', 'Does it cost anything to visit as a guest?'); ?></span>
                        <span class="faq-icon-toggle"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                    </summary>
                    <div class="faq-content">
                        <p><?php echo t(
                            'Nein. Der Besuch als Gast ist bei uns komplett kostenlos und unverbindlich. Du kannst uns bis zu dreimal als Gast besuchen, um den Club und die Atmosphäre kennenzulernen, bevor du dich für eine Mitgliedschaft entscheidest.',
                            'No. Visiting as a guest is completely free of charge and obligation. You can visit us up to three times as a guest to get to know the club and the atmosphere before deciding on membership.'
                        ); ?></p>
                    </div>
                </details>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item">
                <details>
                    <summary>
                        <span><?php echo t('In welcher Sprache finden die Treffen statt?', 'In which language do the meetings take place?'); ?></span>
                        <span class="faq-icon-toggle"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                    </summary>
                    <div class="faq-content">
                        <p><?php echo t(
                            'Unsere Treffen finden im wöchentlichen Wechsel auf Deutsch und Englisch statt. In der Navigation oder im Kontaktformular siehst du, welche Sprache am nächsten Dienstag an der Reihe ist. Das ist die perfekte Gelegenheit, deine Sprachpraxis in beiden Sprachen zu trainieren!',
                            'Our meetings alternate weekly between German and English. You can see which language is next in the navigation or contact form. This is the perfect opportunity to practice your speaking skills in both languages!'
                        ); ?></p>
                    </div>
                </details>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item">
                <details>
                    <summary>
                        <span><?php echo t('Muss ich mich vorher anmelden oder kann ich einfach vorbeikommen?', 'Do I need to sign up in advance or can I just show up?'); ?></span>
                        <span class="faq-icon-toggle"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                    </summary>
                    <div class="faq-content">
                        <p><?php echo t(
                            'Du kannst jederzeit einfach spontan dienstags um 19:00 Uhr vorbeikommen. Du brauchst dich nicht zwingend anzumelden. Wenn du uns jedoch eine kurze Nachricht über das Kontaktformular schickst, können wir uns darauf einstellen und dich direkt am Eingang in Empfang nehmen.',
                            'You can simply drop by on any Tuesday at 7:00 PM. You don\'t strictly need to register. However, if you send us a quick message via the contact form, we can prepare and welcome you right at the entrance.'
                        ); ?></p>
                    </div>
                </details>
            </div>
        </div>
    </section>
</main>

<?php
include ROOT_PATH . '/includes/footer.php';
?>
