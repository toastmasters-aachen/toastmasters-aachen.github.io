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
                    <img src="/assets/images/Einzigartige Location.jpg" alt="Digital Church Aachen" class="detail-img">
                </div>
                <div class="detail-card-content">
                    <h3><?php echo t('Einzigartige Location', 'Unique Location'); ?></h3>
                    <p><?php echo t(
                        'Wir treffen uns in der geschichtsträchtigen <strong>Digital Church Aachen</strong>. Die offene Kirchenatmosphäre kombiniert mit moderner Startup-Kultur bietet den perfekten Resonanzraum für starke Reden.',
                        'We meet in the historic <strong>Digital Church Aachen</strong>. The open church atmosphere combined with modern startup culture provides the perfect resonance space for powerful speeches.'
                    ); ?></p>
                </div>
            </div>
            <div class="detail-card">
                <div class="detail-image-placeholder">
                    <i class="fas fa-language" aria-hidden="true"></i>
                    <img src="/assets/images/Internationaler Austausch.jpg" alt="Internationaler Austausch" class="detail-img">
                </div>
                <div class="detail-card-content">
                    <h3><?php echo t('Internationaler Austausch', 'International Exchange'); ?></h3>
                    <p><?php echo t(
                        'Unsere Abende finden abwechselnd auf **Deutsch und Englisch** statt. Das macht uns zur perfekten Anlaufstelle für Menschen, die in einem internationalen Umfeld arbeiten oder studieren.',
                        'Our evenings take place alternating between **German and English**. This makes us the perfect place for people who study or work in an international environment.'
                    ); ?></p>
                </div>
            </div>
            <div class="detail-card">
                <div class="detail-image-placeholder">
                    <i class="fas fa-users" aria-hidden="true"></i>
                    <img src="/assets/images/Bunte Gemeinschaft.jpg" alt="Bunte Gemeinschaft" class="detail-img">
                </div>
                <div class="detail-card-content">
                    <h3><?php echo t('Bunte Gemeinschaft', 'Diverse Community'); ?></h3>
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
        <div class="board-grid">
            <div class="board-card">
                <div class="board-avatar-placeholder">
                    <i class="fas fa-user-tie" aria-hidden="true"></i>
                    <img src="/assets/images/Präsident.jpg" alt="President" class="board-img">
                </div>
                <h4><?php echo t('Präsident/in', 'President'); ?></h4>
                <p class="board-role"><?php echo t('Club-Leitung & Strategie', 'Club Management & Strategy'); ?></p>
                <p><?php echo t(
                    'Verantwortlich für die allgemeine Ausrichtung des Clubs und die Repräsentanz nach außen.',
                    'Responsible for the overall direction of the club and representing us to the outside world.'
                ); ?></p>
            </div>
            <div class="board-card">
                <div class="board-avatar-placeholder">
                    <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                    <img src="/assets/images/VPEducation.jpg" alt="VP Education" class="board-img">
                </div>
                <h4><?php echo t('Vizepräsident/in Weiterbildung', 'VP Education'); ?></h4>
                <p class="board-role"><?php echo t('Bildungsprogramm & Agenda', 'Education Program & Agenda'); ?></p>
                <p><?php echo t(
                    'Plant die Treffen, organisiert Redezeiten und unterstützt Mitglieder bei Pathways.',
                    'Plans meetings, organizes speaking slots, and supports members with the Pathways program.'
                ); ?></p>
            </div>
            <div class="board-card">
                <div class="board-avatar-placeholder">
                    <i class="fas fa-user-plus" aria-hidden="true"></i>
                    <img src="/assets/images/VPMembership.jpg" alt="VP Membership" class="board-img">
                </div>
                <h4><?php echo t('Vizepräsident/in Mitgliedschaft', 'VP Membership'); ?></h4>
                <p class="board-role"><?php echo t('Gästebetreuung & Onboarding', 'Guest Relations & Onboarding'); ?></p>
                <p><?php echo t(
                    'Der erste Ansprechpartner für Gäste. Begleitet dich von deinem ersten Besuch bis zum Beitritt.',
                    'The first point of contact for guests. Accompanies you from your first visit to official membership.'
                ); ?></p>
            </div>
        </div>
    </section>
</main>

<?php
include ROOT_PATH . '/includes/footer.php';
?>
