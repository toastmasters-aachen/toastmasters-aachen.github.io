<?php
require_once __DIR__ . '/../config/config.php';
require_once ROOT_PATH . '/includes/functions.php';

$page_title = t('Über uns | Toastmasters Aachen e. V.', 'About Us | Toastmasters Aachen e. V.');
$page_description = t(
    'Lerne den Aachener Toastmasters-Club kennen! Wir treffen uns in der historischen Digital Church und bieten eine dynamische, internationale und unterstützende Gemeinschaft.',
    'Get to know the Aachen Toastmasters club! We meet in the historic Digital Church and offer a dynamic, international, and supportive community.'
);

include ROOT_PATH . '/includes/header.php';
?>

<main class="site-main about-club-page">
    <!-- Club Intro Section -->
    <section class="club-intro-section" aria-label="<?php echo t('Über Toastmasters Aachen', 'About Toastmasters Aachen'); ?>">
        <span class="badge"><?php echo t('Der Aachener Club', 'The Aachen Club'); ?></span>
        <h1><?php echo t('Rhetorik im Herzen Aachens', 'Public Speaking in the Heart of Aachen'); ?></h1>
        <p class="lead-text">
            <?php echo t(
                'Seit vielen Jahren bieten die <strong>Toastmasters Aachen e. V.</strong> Studierenden, Forschern, Angestellten und Selbstständigen eine offene Plattform, um ihre Sprech- und Führungskompetenzen auf das nächste Level zu heben.',
                'For many years, <strong>Toastmasters Aachen e. V.</strong> has offered students, researchers, employees, and self-employed professionals an open platform to take their public speaking and leadership skills to the next level.'
            ); ?>
        </p>
    </section>

    <!-- Club Details Grid -->
    <section class="club-details-section" aria-label="<?php echo t('Details zu unserem Club', 'Details About Our Club'); ?>">
        <div class="details-grid">
            <div class="detail-card">
                <div class="detail-image-placeholder">
                    <i class="fas fa-church" aria-hidden="true"></i>
                    <img src="/assets/images/Einzigartige Location.jpg" alt="<?php echo t('Historischer Innenraum der Digital Church Aachen', 'Historic interior of the Digital Church Aachen'); ?>" class="detail-img" loading="lazy">
                </div>
                <div class="detail-card-content">
                    <h2><?php echo t('Einzigartige Location', 'Unique Location'); ?></h2>
                    <p><?php echo t(
                        'Wir treffen uns in der geschichtsträchtigen <strong>Digital Church Aachen</strong>. Die offene Kirchenatmosphäre kombiniert mit moderner Startup-Kultur bietet den perfekten Resonanzraum für starke Reden.',
                        'We meet in the historic <strong>Digital Church Aachen</strong>. The open church atmosphere combined with modern startup culture provides the perfect resonance space for powerful speeches.'
                    ); ?></p>
                </div>
            </div>
            <div class="detail-card">
                <div class="detail-image-placeholder">
                    <i class="fas fa-language" aria-hidden="true"></i>
                    <img src="/assets/images/Internationaler Austausch.jpg" alt="<?php echo t('Mitglieder unterhalten sich auf Deutsch und Englisch', 'Members talking in German and English'); ?>" class="detail-img" loading="lazy">
                </div>
                <div class="detail-card-content">
                    <h2><?php echo t('Internationaler Austausch', 'International Exchange'); ?></h2>
                    <p><?php echo t(
                        'Unsere Abende finden abwechselnd auf <strong>Deutsch und Englisch</strong> statt. Das macht uns zur perfekten Anlaufstelle für Menschen, die in einem internationalen Umfeld arbeiten oder studieren.',
                        'Our evenings take place alternating between <strong>German and English</strong>. This makes us the perfect place for people who study or work in an international environment.'
                    ); ?></p>
                </div>
            </div>
            <div class="detail-card">
                <div class="detail-image-placeholder">
                    <i class="fas fa-users" aria-hidden="true"></i>
                    <img src="/assets/images/Bunte Gemeinschaft.jpg" alt="<?php echo t('Die vielfältige und offene Toastmasters Aachen Gemeinschaft', 'The diverse and welcoming Toastmasters Aachen community'); ?>" class="detail-img" loading="lazy">
                </div>
                <div class="detail-card-content">
                    <h2><?php echo t('Bunte Gemeinschaft', 'Diverse Community'); ?></h2>
                    <p><?php echo t(
                        'Vom RWTH-Studenten über die FH-Professorin bis zum erfahrenen Manager – bei uns kommen Generationen und Disziplinen zusammen. Wir unterstützen uns gegenseitig und wachsen gemeinsam.',
                        'From RWTH students and FH professors to experienced managers – generations and disciplines come together here. We support each other and grow together.'
                    ); ?></p>
                </div>
            </div>
        </div>
    </section>
 
    <!-- Club Board / Vorstand Section -->
    <section class="board-section" aria-label="<?php echo t('Unser Vorstand', 'Our Club Board'); ?>">
        <div class="section-header">
            <h2><?php echo t('Das Gesicht hinter dem <span class="accent-color">Club</span>', 'The Faces Behind the <span class="accent-color">Club</span>'); ?></h2>
            <p><?php echo t('Unser Vorstand wird jährlich gewählt und leitet den Verein ehrenamtlich und mit vollem Herzblut:', 'Our board is elected annually and runs the association voluntarily with full dedication:'); ?></p>
        </div>
        <div class="board-group-photo-wrapper">
            <img src="/assets/images/Board Members/OfficerBoardGesamt.jpg" alt="<?php echo t('Gruppenfoto des Vorstands von Toastmasters Aachen in der Digital Church', 'Group photo of the Toastmasters Aachen board team at the Church'); ?>" class="board-group-photo" loading="lazy">
        </div>
        </div>

        <div class="board-intro-text">
            <h3><?php echo t('Lerne unsere Vorstandsmitglieder kennen', 'Meet Our Board Members'); ?></h3>
            <p><?php echo t('Jedes Vorstandsmitglied bringt individuelle Stärken ein, um unseren Clubabend Woche für Woche zu einem inspirierenden Erlebnis zu machen. Hier sind die Gesichter hinter den einzelnen Rollen:', 'Each board member contributes individual strengths to make our club evenings an inspiring experience week after week. Here are the faces behind the roles:'); ?></p>
        </div>

        <div class="board-grid">
            <div class="board-card">
                <div class="board-avatar-placeholder">
                    <i class="fas fa-user-tie" aria-hidden="true"></i>
                    <img src="/assets/images/Board Members/Ayoub_President.jpg" alt="<?php echo t('Ayoub – Präsident von Toastmasters Aachen', 'Ayoub – President of Toastmasters Aachen'); ?>" class="board-img" loading="lazy">
                </div>
                <h4>Ayoub</h4>
                <div class="board-title"><?php echo t('Präsident', 'President'); ?></div>
                <p class="board-role"><?php echo t('Club-Leitung & Strategie', 'Club Management & Strategy'); ?></p>
                <p><?php echo t(
                    'Verantwortlich für die allgemeine Ausrichtung des Clubs und die Repräsentanz nach außen.',
                    'Responsible for the overall direction of the club and representing us to the outside world.'
                ); ?></p>
            </div>
            <div class="board-card">
                <div class="board-avatar-placeholder">
                    <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    <img src="/assets/images/Board Members/Adnen_VPEducation.jpg" alt="<?php echo t('Adnen – Vizepräsident Weiterbildung von Toastmasters Aachen', 'Adnen – Vice President Education of Toastmasters Aachen'); ?>" class="board-img" loading="lazy">
                </div>
                <h4>Adnen</h4>
                <div class="board-title"><?php echo t('Vizepräsident Weiterbildung', 'Vice President Education'); ?></div>
                <p class="board-role"><?php echo t('Bildungsprogramm & Agenda', 'Education Program & Agenda'); ?></p>
                <p><?php echo t(
                    'Plant die Treffen, organisiert Redezeiten und unterstützt Mitglieder bei Pathways.',
                    'Plans meetings, organizes speaking slots, and supports members with the Pathways program.'
                ); ?></p>
            </div>
            <div class="board-card">
                <div class="board-avatar-placeholder">
                    <i class="fas fa-calculator" aria-hidden="true"></i>
                    <img src="/assets/images/Board Members/Sophia_Treasurer.jpg" alt="<?php echo t('Sophia – Schatzmeisterin von Toastmasters Aachen', 'Sophia – Treasurer of Toastmasters Aachen'); ?>" class="board-img" loading="lazy">
                </div>
                <h4>Sophia</h4>
                <div class="board-title"><?php echo t('Schatzmeisterin', 'Treasurer'); ?></div>
                <p class="board-role"><?php echo t('Finanzen & Beiträge', 'Finance & Fees'); ?></p>
                <p><?php echo t(
                    'Verantwortlich für die Beitragsverwaltung, Clubfinanzen und die finanzielle Gesundheit des Vereins.',
                    'Responsible for membership fee management, club finances, and the association\'s financial health.'
                ); ?></p>
            </div>
            <div class="board-card">
                <div class="board-avatar-placeholder">
                    <i class="fas fa-user-plus" aria-hidden="true"></i>
                    <img src="/assets/images/Board Members/Lev_VPMembership.jpg" alt="<?php echo t('Lev – Vizepräsident Mitgliedschaft von Toastmasters Aachen', 'Lev – Vice President Membership of Toastmasters Aachen'); ?>" class="board-img" loading="lazy">
                </div>
                <h4>Lev</h4>
                <div class="board-title"><?php echo t('Vizepräsident Mitgliedschaft', 'Vice President Membership'); ?></div>
                <p class="board-role"><?php echo t('Gästebetreuung & Onboarding', 'Guest Relations & Onboarding'); ?></p>
                <p><?php echo t(
                    'Der erste Ansprechpartner für Gäste. Begleitet dich von deinem ersten Besuch bis zum Beitritt.',
                    'The first point of contact for guests. Accompanies you from your first visit to official membership.'
                ); ?></p>
            </div>
            <div class="board-card">
                <div class="board-avatar-placeholder">
                    <i class="fas fa-bullhorn" aria-hidden="true"></i>
                    <img src="/assets/images/Board Members/Zisan_VPPR.jpg" alt="<?php echo t('Zisan – Vizepräsidentin Öffentlichkeitsarbeit von Toastmasters Aachen', 'Zisan – Vice President Public Relations of Toastmasters Aachen'); ?>" class="board-img" loading="lazy">
                </div>
                <h4>Zisan</h4>
                <div class="board-title"><?php echo t('Vizepräsidentin Öffentlichkeitsarbeit', 'Vice President Public Relations'); ?></div>
                <p class="board-role"><?php echo t('Marketing & Social Media', 'Marketing & Social Media'); ?></p>
                <p><?php echo t(
                    'Gestaltet unseren Außenauftritt, betreut die Social-Media-Kanäle und pflegt die Website.',
                    'Shapes our public image, manages social media channels, and maintains the website.'
                ); ?></p>
            </div>
            <div class="board-card">
                <div class="board-avatar-placeholder">
                    <i class="fas fa-file-alt" aria-hidden="true"></i>
                    <img src="/assets/images/Board Members/Sebastian_Secretary.jpg" alt="<?php echo t('Sebastian – Schriftführer von Toastmasters Aachen', 'Sebastian – Secretary of Toastmasters Aachen'); ?>" class="board-img" loading="lazy">
                </div>
                <h4>Sebastian</h4>
                <div class="board-title"><?php echo t('Schriftführer', 'Secretary'); ?></div>
                <p class="board-role"><?php echo t('Administration & Protokoll', 'Administration & Records'); ?></p>
                <p><?php echo t(
                    'Verantwortlich für Protokolle, offizielle Dokumente und den Informationsfluss im Club.',
                    'Responsible for minutes, official documents, and the club\'s information flow.'
                ); ?></p>
            </div>
            <div class="board-card">
                <div class="board-avatar-placeholder">
                    <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                    <img src="/assets/images/Board Members/Levi_SergeantAtArms.jpg" alt="<?php echo t('Levi – Saalmeister von Toastmasters Aachen', 'Levi – Sergeant at Arms of Toastmasters Aachen'); ?>" class="board-img" loading="lazy">
                </div>
                <h4>Levi</h4>
                <div class="board-title"><?php echo t('Saalmeister', 'Sergeant at Arms'); ?></div>
                <p class="board-role"><?php echo t('Logistik & Raumgestaltung', 'Logistics & Venue Setup'); ?></p>
                <p><?php echo t(
                    'Bereitet den Raum für Treffen vor, betreut die Technik und sorgt für einen reibungslosen Ablauf vor Ort.',
                    'Prepares the meeting room, manages technical equipment, and ensures smooth logistics.'
                ); ?></p>
            </div>
            <div class="board-card">
                <div class="board-avatar-placeholder">
                    <i class="fas fa-history" aria-hidden="true"></i>
                    <img src="/assets/images/Board Members/Julia_ImmediatePastPresident.jpg" alt="<?php echo t('Julia – Vorherige Präsidentin von Toastmasters Aachen', 'Julia – Immediate Past President of Toastmasters Aachen'); ?>" class="board-img" loading="lazy">
                </div>
                <h4>Julia</h4>
                <div class="board-title"><?php echo t('Vorherige Präsidentin', 'Immediate Past President'); ?></div>
                <p class="board-role"><?php echo t('Beratung & Wissenstransfer', 'Advisory & Knowledge Transfer'); ?></p>
                <p><?php echo t(
                    'Unterstützt den aktuellen Vorstand mit Erfahrungswerten und sichert die Kontinuität des Vereins.',
                    'Supports the current board with experience and ensures the continuity of the club.'
                ); ?></p>
            </div>
        </div>
    </section>
</main>

<?php
include ROOT_PATH . '/includes/footer.php';
?>
