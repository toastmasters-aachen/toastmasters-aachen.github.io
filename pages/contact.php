<?php
require_once __DIR__ . '/../config/config.php';
require_once ROOT_PATH . '/includes/functions.php';

$next_meeting = get_next_meeting_info();

$page_title = t('Kontakt & Vorbeikommen | Toastmasters Aachen', 'Contact & Visit Us | Toastmasters Aachen');
$page_description = t(
    'Du möchtest Toastmasters Aachen als Gast besuchen? Trage dich hier ein, kontaktiere uns bei Fragen und finde den Weg in die Digital Church Aachen.',
    'Would you like to visit Toastmasters Aachen as a guest? Register here, contact us with questions, and find directions to the Digital Church Aachen.'
);

$success_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $visit_date = trim($_POST['visit_date'] ?? '');
    
    if (!empty($name) && !empty($email)) {
        $success_message = t(
            "Vielen Dank, <strong>" . e($name) . "</strong>! Wir haben deine Anmeldung für den <strong>" . e($visit_date) . "</strong> erhalten. Unser Gästebetreuer wird sich in Kürze per E-Mail bei dir melden. Wir freuen uns auf dich!",
            "Thank you, <strong>" . e($name) . "</strong>! We have received your registration for <strong>" . e($visit_date) . "</strong>. Our VP Membership will contact you shortly by email. We look forward to meeting you!"
        );
    }
}

include ROOT_PATH . '/includes/header.php';
?>

<main class="site-main contact-page">
    <section class="page-intro-section" aria-label="<?php echo t('Kontakt aufnehmen', 'Get in Touch'); ?>">
        <span class="badge"><?php echo t('Besuche uns', 'Visit Us'); ?></span>
        <h1><?php echo t('Komm als Gast vorbei', 'Come by as a Guest'); ?></h1>
        <p class="lead-text">
            <?php echo t(
                'Wir freuen uns auf dich! Toastmasters lebt vom persönlichen Austausch. Hier findest du alle Details für deinen Besuch.',
                'We look forward to meeting you! Toastmasters thrives on personal connection. Here you\'ll find all the details for your visit.'
            ); ?>
        </p>
    </section>

    <!-- 1. Prominent CTA Banner: Just Drop By -->
    <section class="contact-hero-banner" aria-label="CTA">
        <div class="banner-badge">
            <i class="fas fa-bolt" aria-hidden="true"></i>
            <span><?php echo t('KEINE ANMELDUNG NÖTIG', 'NO REGISTRATION REQUIRED'); ?></span>
        </div>
        <div class="banner-body">
            <h2><?php echo t('Komm einfach spontan vorbei!', 'Just drop by spontaneously!'); ?></h2>
            <p>
                <?php echo t(
                    'Du kannst an jedem Dienstagabend um 19:00 Uhr einfach als Gast bei uns reinschnuppern – ganz ohne Anmeldung, Kosten oder Vorbereitung. Du musst vor Ort auch nicht sprechen, wenn du nicht möchtest. Setz dich einfach dazu und schau es dir an!',
                    'You can simply drop by as a guest on any Tuesday evening at 7:00 PM – completely without registration, costs, or preparation. You don\'t have to speak if you don\'t want to. Just sit back and enjoy the evening!'
                ); ?>
            </p>
            <div class="banner-next-meeting" style="margin-top: 15px; padding-top: 15px; border-top: 1px dashed rgba(119, 36, 50, 0.2); font-weight: 700; color: var(--tm-maroon); display: flex; align-items: center; gap: 8px;">
                <i class="far fa-calendar-check" aria-hidden="true" style="font-size: 1.1rem;"></i>
                <span>
                    <?php echo t(
                        'Nächstes Treffen: ' . $next_meeting['date_de'] . ' um 19:00 Uhr (Sprache: ' . $next_meeting['language_de'] . ')',
                        'Next meeting: ' . $next_meeting['date_en'] . ' at 7:00 PM (Language: ' . $next_meeting['language_en'] . ')'
                    ); ?>
                </span>
            </div>
        </div>
    </section>

    <!-- 2. So findest du uns (Horizontal Grid) -->
    <section class="directions-section" aria-label="<?php echo t('Wegbeschreibung und Treffzeiten', 'Directions and Meeting Times'); ?>">
        <h2 class="section-title-center"><?php echo t('So findest du uns', 'How to Find Us'); ?></h2>
        <div class="horizontal-directions-grid">
            <!-- Col 1: Wo -->
            <div class="direction-col">
                <div class="col-icon-box"><i class="fas fa-church" aria-hidden="true"></i></div>
                <h3><?php echo t('Ort & Treffpunkt', 'Location & Venue'); ?></h3>
                <p>
                    <strong>Digital Church Aachen</strong><br>
                    Jülicher Str. 72a, 52070 Aachen
                </p>
                <a href="https://maps.google.com/?q=Digital+Church+Aachen+Juelicher+Str+72a" target="_blank" rel="noopener" class="btn btn-secondary btn-sm">
                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i> <?php echo t('Route planen', 'Get Directions'); ?>
                </a>
            </div>

            <!-- Col 2: Wann -->
            <div class="direction-col">
                <div class="col-icon-box"><i class="far fa-clock" aria-hidden="true"></i></div>
                <h3><?php echo t('Uhrzeit & Sprache', 'Time & Language'); ?></h3>
                <p>
                    <strong><?php echo t('Jeden Dienstag um 19:00 Uhr', 'Every Tuesday at 7:00 PM'); ?></strong><br>
                    <?php echo t('Einlass ab 18:45 Uhr. Wir wechseln wöchentlich zwischen Deutsch und Englisch.', 'Doors open at 6:45 PM. We alternate weekly between German and English.'); ?>
                </p>
                <div class="next-lang-badge" style="margin-top: auto; font-weight: 700; color: var(--tm-maroon); font-size: 0.9rem; display: flex; align-items: center; gap: 6px;">
                    <i class="fas fa-info-circle" aria-hidden="true"></i> 
                    <span>
                        <?php echo t(
                            'Nächstes Treffen: ' . $next_meeting['language_de'],
                            'Next meeting: ' . $next_meeting['language_en']
                        ); ?>
                    </span>
                </div>
            </div>

            <!-- Col 3: Wie -->
            <div class="direction-col">
                <div class="col-icon-box"><i class="fas fa-route" aria-hidden="true"></i></div>
                <h3><?php echo t('Anreise-Tipps', 'How to get here'); ?></h3>
                <ul class="clean-list">
                    <li><i class="fas fa-bus" aria-hidden="true"></i> <strong><?php echo t('Bus:', 'Bus:'); ?></strong> <?php echo t('Haltestelle „Ludwig Forum“ (direkt gegenüber).', 'Stop "Ludwig Forum" (directly opposite).'); ?></li>
                    <li><i class="fas fa-car" aria-hidden="true"></i> <strong><?php echo t('Auto:', 'Car:'); ?></strong> <?php echo t('Jülicher Straße oder Parkplatz Ludwig Forum.', 'Jülicher Straße or Ludwig Forum parking.'); ?></li>
                    <li><i class="fas fa-bicycle" aria-hidden="true"></i> <strong><?php echo t('Rad:', 'Bike:'); ?></strong> <?php echo t('Fahrradständer direkt vor dem Eingang.', 'Bike racks right in front of the entrance.'); ?></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 3. Formular (Streamlined & Horizontal Oriented) -->
    <section class="form-section" aria-label="<?php echo t('Gast-Anmeldung & Fragen', 'Guest Registration & Questions'); ?>">
        <div class="form-section-header">
            <h2><?php echo t('Doch lieber kurz anmelden oder Frage stellen?', 'Prefer to register in advance or ask a question?'); ?></h2>
            <p><?php echo t('Die Teilnahme als Gast ist komplett kostenlos. Nutze dieses Formular, wenn du uns ankündigen möchtest oder Fragen hast.', 'Attending as a guest is completely free. Use this form to announce your visit or ask a question.'); ?></p>
        </div>

        <?php if (!empty($success_message)): ?>
            <div class="success-alert" role="alert">
                <div class="alert-icon"><i class="fas fa-check-circle" aria-hidden="true"></i></div>
                <p><?php echo $success_message; ?></p>
            </div>
        <?php else: ?>
            <form action="/kontakt" method="POST" class="streamlined-horizontal-form" id="guest-form">
                <div class="form-fields-row">
                    <div class="form-group">
                        <label for="contact-name"><?php echo t('Dein Name *', 'Your Name *'); ?></label>
                        <input type="text" id="contact-name" name="name" placeholder="<?php echo t('z. B. Marie Aachen', 'e.g. Marie Aachen'); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="contact-email"><?php echo t('Deine E-Mail-Adresse *', 'Your Email Address *'); ?></label>
                        <input type="email" id="contact-email" name="email" placeholder="<?php echo t('z. B. marie@example.de', 'e.g. marie@example.com'); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="contact-date"><?php echo t('Termin / Anliegen *', 'Date / Subject *'); ?></label>
                        <select id="contact-date" name="visit_date" required>
                            <option value="Dienstag, 16.06. (Englisch)"><?php echo t('Dienstag, 16.06. um 19:00 (Englisch)', 'Tuesday, 16.06. at 7:00 PM (English)'); ?></option>
                            <option value="Dienstag, 23.06. (Deutsch)"><?php echo t('Dienstag, 23.06. um 19:00 (Deutsch)', 'Tuesday, 23.06. at 7:00 PM (German)'); ?></option>
                            <option value="Dienstag, 30.06. (Englisch)"><?php echo t('Dienstag, 30.06. um 19:00 (Englisch)', 'Tuesday, 30.06. at 7:00 PM (English)'); ?></option>
                            <option value="Generelle Frage / Anderer Termin"><?php echo t('Generelle Frage / Anderer Termin', 'General query / Other date'); ?></option>
                        </select>
                    </div>
                </div>

                <div class="form-group textarea-group">
                    <label for="contact-message"><?php echo t('Deine Nachricht oder Fragen (optional)', 'Your message or questions (optional)'); ?></label>
                    <textarea id="contact-message" name="message" rows="3" placeholder="<?php echo t('z. B. Ich möchte meine Redeangst überwinden und freue mich auf das Treffen...', 'e.g. I want to overcome my stage fright and look forward to the meeting...'); ?>"></textarea>
                </div>

                <div class="form-submit-row">
                    <button type="submit" class="btn btn-primary" id="submit-contact-btn"><?php echo t('Nachricht abschicken', 'Send Message'); ?></button>
                    <small class="form-privacy-note"><?php echo t('Mit Absenden dieses Formulars stimmst du zu, dass wir deine Daten zur Kontaktaufnahme bzgl. deines Clubbesuchs verwenden dürfen.', 'By submitting this form, you agree that we may use your data to contact you regarding your club visit.'); ?></small>
                </div>
            </form>
        <?php endif; ?>

        <!-- Direct Channels (Subtle Footer of Form section) -->
        <div class="direct-channels-minimal">
            <p><?php echo t('Oder direkt über andere Kanäle kontaktieren:', 'Or contact us directly via other channels:'); ?></p>
            <div class="channels-row">
                <a href="mailto:info@aachen-toastmasters.de" class="channel-pill">
                    <i class="far fa-envelope" aria-hidden="true"></i> <span>info@aachen-toastmasters.de</span>
                </a>
                <a href="https://www.meetup.com/de-DE/toastmasters-aachen/" target="_blank" rel="noopener" class="channel-pill">
                    <i class="fab fa-meetup" aria-hidden="true"></i> <span>Meetup</span>
                </a>
                <a href="https://www.linkedin.com/company/toastmasters-aachen" target="_blank" rel="noopener" class="channel-pill">
                    <i class="fab fa-linkedin-in" aria-hidden="true"></i> <span>LinkedIn</span>
                </a>
                <a href="https://www.instagram.com/toastmasters.aachen/" target="_blank" rel="noopener" class="channel-pill">
                    <i class="fab fa-instagram" aria-hidden="true"></i> <span>Instagram</span>
                </a>
            </div>
        </div>
    </section>
</main>

<?php
include ROOT_PATH . '/includes/footer.php';
?>
