<?php
require_once __DIR__ . '/../config/config.php';
require_once ROOT_PATH . '/includes/functions.php';

$page_title = t('Mitglied werden | Toastmasters Aachen', 'Become a Member | Toastmasters Aachen');
$page_description = t(
    'Werde Mitglied bei den Toastmasters Aachen und erhalte Zugang zu Pathways, Mentoring und regelmäßiger Sprechpraxis.',
    'Become a member of Toastmasters Aachen and get access to Pathways, mentoring, and regular speaking practice.'
);

include ROOT_PATH . '/includes/header.php';
?>

<main class="site-main membership-page">
    <!-- Intro Sektion -->
    <section class="page-intro-section" aria-label="<?php echo t('Mitgliedschaft Übersicht', 'Membership Overview'); ?>">
        <span class="badge"><?php echo t('Mach den nächsten Schritt', 'Take the next step'); ?></span>
        <h1><?php echo t('Werde Mitglied bei Toastmasters', 'Become a Toastmasters Member'); ?></h1>
        <p class="lead-text">
            <?php echo t(
                'Die Mitgliedschaft ist grundsätzlich allen volljährigen Interessentinnen und Interessenten offen. Investiere in deine Kommunikations- und Führungsfähigkeiten in einer unterstützenden, praxisnahen Gemeinschaft.',
                'Membership is open to anyone over the age of 18. Invest in your communication and leadership skills in a supportive, hands-on community.'
            ); ?>
        </p>
    </section>

    <!-- Info-Vergleich: Gäste vs. Mitglieder -->
    <section class="comparison-section" aria-label="<?php echo t('Gäste vs. Mitglieder Vergleich', 'Guests vs. Members Comparison'); ?>">
        <div class="comparison-container">
            <div class="comparison-header">
                <h2><?php echo t('Gäste vs. Mitglieder – Was ist der Unterschied?', 'Guests vs. Members – What is the difference?'); ?></h2>
                <p><?php echo t('Als Gast kannst du jederzeit kostenlos schnuppern. Erst als Mitglied genießt du das volle Ausbildungsprogramm:', 'As a guest, you can drop by for free anytime. As a member, you get access to the full training program:'); ?></p>
            </div>
            
            <!-- Accessible Table / Grid instead of just a raw image -->
            <div class="comparison-table-wrapper">
                <table class="comparison-table">
                    <thead>
                        <tr>
                            <th><?php echo t('Aktivität / Vorteil', 'Activity / Benefit'); ?></th>
                            <th class="col-guests"><?php echo t('Gäste', 'Guests'); ?></th>
                            <th class="col-members"><?php echo t('Mitglieder', 'Members'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong><?php echo t('Treffen besuchen', 'Attend Meetings'); ?></strong></td>
                            <td><span class="status-yes"><i class="fas fa-check"></i> <?php echo t('Ja (kostenlos)', 'Yes (free)'); ?></span></td>
                            <td><span class="status-yes"><i class="fas fa-check"></i> <?php echo t('Ja', 'Yes'); ?></span></td>
                        </tr>
                        <tr>
                            <td><strong><?php echo t('Stegreifreden (Spontanreden)', 'Table Topics (Impromptu)'); ?></strong></td>
                            <td><span class="status-yes"><i class="fas fa-check"></i> <?php echo t('Ja (freiwillig)', 'Yes (optional)'); ?></span></td>
                            <td><span class="status-yes"><i class="fas fa-check"></i> <?php echo t('Ja', 'Yes'); ?></span></td>
                        </tr>
                        <tr>
                            <td><strong><?php echo t('Vorbereitete Reden halten', 'Deliver Prepared Speeches'); ?></strong></td>
                            <td><span class="status-no"><i class="fas fa-times"></i> <?php echo t('Nein', 'No'); ?></span></td>
                            <td><span class="status-yes"><i class="fas fa-check"></i> <?php echo t('Ja', 'Yes'); ?></span></td>
                        </tr>
                        <tr>
                            <td><strong><?php echo t('Pathways Lernportal (Ausbildung)', 'Pathways Portal (Education)'); ?></strong></td>
                            <td><span class="status-no"><i class="fas fa-times"></i> <?php echo t('Nein', 'No'); ?></span></td>
                            <td><span class="status-yes"><i class="fas fa-check"></i> <?php echo t('Ja (inklusive)', 'Yes (included)'); ?></span></td>
                        </tr>
                        <tr>
                            <td><strong><?php echo t('Persönliches Mentoring', 'Personal Mentoring'); ?></strong></td>
                            <td><span class="status-no"><i class="fas fa-times"></i> <?php echo t('Nein', 'No'); ?></span></td>
                            <td><span class="status-yes"><i class="fas fa-check"></i> <?php echo t('Ja (kostenlos)', 'Yes (free)'); ?></span></td>
                        </tr>
                        <tr>
                            <td><strong><?php echo t('Wertschätzendes Feedback & Rollen', 'Evaluations & Meeting Roles'); ?></strong></td>
                            <td><span class="status-no"><i class="fas fa-times"></i> <?php echo t('Nein', 'No'); ?></span></td>
                            <td><span class="status-yes"><i class="fas fa-check"></i> <?php echo t('Ja', 'Yes'); ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Downloads Bereich -->
    <section class="downloads-section" aria-label="<?php echo t('Mitgliedsantrag Downloads', 'Membership Application Downloads'); ?>">
        <div class="downloads-header">
            <h2><?php echo t('So wirst du Mitglied', 'How to Join'); ?></h2>
            <p><?php echo t('Fülle einfach das passende Mitgliedschaftsformular aus und schicke es per E-Mail an unsere Gästebetreuung oder bringe es zum nächsten Treffen mit.', 'Simply fill out the membership form and send it by email to our VP Membership or bring it with you to the next meeting.'); ?></p>
        </div>

        <div class="download-grid">
            <!-- German Card -->
            <div class="download-card">
                <div class="card-lang-badge">DE</div>
                <div class="card-icon"><i class="far fa-file-pdf"></i></div>
                <h3><?php echo t('Mitgliedschaftsformular', 'Membership Form'); ?></h3>
                <p class="card-desc"><?php echo t('Deutsches Anmeldeformular im PDF-Format. Ausfüllen, unterschreiben und einscannen.', 'German registration form in PDF format. Fill out, sign, and scan.'); ?></p>
                <div class="card-meta">Format: PDF &bull; Sprache: Deutsch</div>
                <a href="/downloads/AC_TM_mitgliedsantrag_DE.pdf" class="btn btn-primary btn-block" download>
                    <i class="fas fa-download"></i> <?php echo t('Herunterladen (DE)', 'Download (DE)'); ?>
                </a>
            </div>

            <!-- English Card -->
            <div class="download-card">
                <div class="card-lang-badge">EN</div>
                <div class="card-icon"><i class="far fa-file-pdf"></i></div>
                <h3><?php echo t('Membership Form', 'Membership Form'); ?></h3>
                <p class="card-desc"><?php echo t('English registration form in PDF format. Fill out, sign, and scan.', 'English registration form in PDF format. Fill out, sign, and scan.'); ?></p>
                <div class="card-meta">Format: PDF &bull; Language: English</div>
                <a href="/downloads/AC_TM_mitgliedsantrag_EN.pdf" class="btn btn-primary btn-block" download>
                    <i class="fas fa-download"></i> <?php echo t('Download (EN)', 'Download (EN)'); ?>
                </a>
            </div>
        </div>

        <!-- Submit notice -->
        <div class="submit-notice-box">
            <i class="far fa-envelope-open"></i>
            <div>
                <h4><?php echo t('Wohin mit dem ausgefüllten Antrag?', 'Where to send the completed application?'); ?></h4>
                <p><?php echo t(
                    'Sende das eingescannte Formular einfach bequem per E-Mail an: <a href="mailto:aachen.toastmasters@gmail.com">aachen.toastmasters@gmail.com</a>. Alternativ kannst du den Antrag auch ausgedruckt bei einem unserer Clubabende an den Vorstand übergeben.',
                    'Simply send the scanned form by email to: <a href="mailto:aachen.toastmasters@gmail.com">aachen.toastmasters@gmail.com</a>. Alternatively, you can hand the printed application to the board during one of our club meetings.'
                ); ?></p>
            </div>
        </div>
    </section>

    <!-- Vorteile der Mitgliedschaft -->
    <section class="benefits-section" aria-label="<?php echo t('Deine Mitgliedsvorteile', 'Your Member Benefits'); ?>">
        <h2 class="section-title-center"><?php echo t('Das erwartet dich als Mitglied', 'What Awaits You as a Member'); ?></h2>
        <div class="benefits-grid">
            <div class="benefit-card-small">
                <i class="fas fa-road"></i>
                <h3><?php echo t('Ausbildungsprogramm „Pathways“', '“Pathways” Education Program'); ?></h3>
                <p><?php echo t('Zugriff auf das strukturierte E-Learning-Portal von Toastmasters International mit 11 verschiedenen Entwicklungspfaden.', 'Access to the structured e-learning portal of Toastmasters International featuring 11 different development paths.'); ?></p>
            </div>
            <div class="benefit-card-small">
                <i class="fas fa-hands-helping"></i>
                <h3><?php echo t('Persönliches Mentoring', 'Personal Mentoring'); ?></h3>
                <p><?php echo t('Ein erfahrener Toastmaster steht dir als Mentor kostenlos zur Seite, um dir den Einstieg zu erleichtern und Feedback zu geben.', 'An experienced Toastmaster will be by your side as a free mentor to help you get started and provide feedback.'); ?></p>
            </div>
            <div class="benefit-card-small">
                <i class="fas fa-microphone-alt"></i>
                <h3><?php echo t('Regelmäßige Rede-Routine', 'Regular Speaking Routine'); ?></h3>
                <p><?php echo t('Sichere dir feste Sprechplätze für vorbereitete Präsentationen und lerne, unter realen Bedingungen vor Publikum zu überzeugen.', 'Secure speaking slots for prepared presentations and learn to connect with audiences under real conditions.'); ?></p>
            </div>
            <div class="benefit-card-small">
                <i class="fas fa-ribbon"></i>
                <h3><?php echo t('Offizielle Zertifikate', 'Official Certificates'); ?></h3>
                <p><?php echo t('Erhalte international anerkannte Zertifikate und Nachweise über deine erlernten Fähigkeiten für deinen Lebenslauf.', 'Receive internationally recognized certificates and credentials highlighting your learned skills for your CV.'); ?></p>
            </div>
        </div>
    </section>

    <!-- Transparenz-Hinweis zu Kosten -->
    <section class="fees-section" aria-label="<?php echo t('Beitrag & Gebühren', 'Fees & Costs'); ?>">
        <div class="fees-card">
            <i class="fas fa-info-circle"></i>
            <div>
                <h3><?php echo t('Transparenzhinweis zu den Clubbeiträgen', 'Transparency Notice on Club Fees'); ?></h3>
                <p><?php echo t(
                    'Als gemeinnütziger e. V. arbeiten wir ehrenamtlich und ohne Gewinnabsicht. Die Mitgliedsbeiträge decken die Raummiete für die Digital Church sowie die Lizenzgebühren an Toastmasters International. Die genauen, aktuellen Konditionen (Halbjahresbeitrag + einmalige Aufnahmegebühr für Neumitglieder) teilen wir dir gerne bei deinem Besuch vor Ort mit. Schnuppern als Gast ist und bleibt natürlich dauerhaft kostenlos!',
                    'As a non-profit association, we operate voluntarily and without commercial intent. Membership fees cover the venue rental for the Digital Church and licensing fees to Toastmasters International. We will gladly share the exact details (semi-annual fee + one-time registration fee for new members) during your visit. Attending as a guest is and remains completely free!'
                ); ?></p>
            </div>
        </div>
    </section>
</main>

<?php
include ROOT_PATH . '/includes/footer.php';
?>
