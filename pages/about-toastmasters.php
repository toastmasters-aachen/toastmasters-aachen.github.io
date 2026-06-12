<?php
require_once __DIR__ . '/../config/config.php';
require_once ROOT_PATH . '/includes/functions.php';

$page_title = t('Über Toastmasters | Das weltweite Lernkonzept', 'About Toastmasters | The Global Learning Concept');
$page_description = t(
    'Erfahre, wie das erprobte Ausbildungsprinzip von Toastmasters International funktioniert: Learning-by-doing, strukturierte Lernpfade (Pathways) und wertschätzendes Feedback.',
    'Learn how the proven educational concept of Toastmasters International works: learning by doing, structured paths (Pathways), and supportive evaluation.'
);

include ROOT_PATH . '/includes/header.php';
?>

<main class="site-main about-toastmasters-page">
    <section class="page-intro-section" aria-label="<?php echo t('Das Toastmasters Konzept', 'The Toastmasters Concept'); ?>">
        <span class="badge"><?php echo t('Das Ausbildungsprinzip', 'The Education Principle'); ?></span>
        <h1><?php echo t('Wie funktioniert Toastmasters?', 'How does Toastmasters work?'); ?></h1>
        <p class="lead-text">
            <?php echo t(
                'Seit über 100 Jahren hilft Toastmasters International Menschen dabei, bessere Redner und Führungskräfte zu werden. Das Geheimnis? Es gibt keinen Frontalunterricht. Wir lernen durch aktives Tun in einer geschützten, wertfreien Gemeinschaft.',
                'For over 100 years, Toastmasters International has been helping people become better speakers and leaders. The secret? There is no frontal teaching. We learn by active doing in a safe, non-judgmental community.'
            ); ?>
        </p>
    </section>

    <!-- The 3 Pillars -->
    <section class="pillars-section" aria-label="<?php echo t('Die drei Säulen des Erfolgs', 'The Three Pillars of Success'); ?>">
        <div class="pillars-grid">
            <div class="pillar-card">
                <div class="pillar-num">01</div>
                <h3><?php echo t('Learning by Doing', 'Learning by Doing'); ?></h3>
                <p><?php echo t(
                    'Jedes Mitglied übernimmt aktive Rollen an den Clubabenden – vom Halten vorbereiteter Reden über spontane Kurzreden bis hin zur Moderation des Abends. Du lernst Reden nur, indem du redest.',
                    'Every member takes on active roles at the club meetings – from giving prepared speeches and impromptu talks to hosting the evening. You only learn speaking by speaking.'
                ); ?></p>
            </div>
            <div class="pillar-card">
                <div class="pillar-num">02</div>
                <h3><?php echo t('Wertschätzendes Feedback', 'Supportive Feedback'); ?></h3>
                <p><?php echo t(
                    'Für jede gehaltene Rede erhältst du ein qualifiziertes, konstruktives Feedback von einem zugewiesenen Bewertungsredner. Du erfährst präzise, was hervorragend war und wo du dich verbessern kannst.',
                    'For every speech you deliver, you receive constructive and structured feedback from an assigned evaluator. You learn exactly what was great and where you can grow.'
                ); ?></p>
            </div>
            <div class="pillar-card">
                <div class="pillar-num">03</div>
                <h3><?php echo t('Der strukturierte Pfad', 'The Structured Path'); ?></h3>
                <p><?php echo t(
                    'Das Online-Lernprogramm „Pathways“ leitet dich Schritt für Schritt durch verschiedene Kommunikations- und Führungsthemen. Du entscheidest, worauf du dich fokussieren willst.',
                    'The online learning program "Pathways" guides you step-by-step through various communication and leadership paths. You choose what to focus on.'
                ); ?></p>
            </div>
        </div>
    </section>

    <!-- Anatomy of a Meeting -->
    <section class="anatomy-section" aria-label="<?php echo t('Ablauf eines Clubabends', 'Flow of a Club Meeting'); ?>">
        <div class="section-header">
            <h2><?php echo t('Die Anatomie eines <span class="accent-color">Clubabends</span>', 'The Anatomy of a <span class="accent-color">Club Meeting</span>'); ?></h2>
            <p><?php echo t('Jeder unserer wöchentlichen Abende folgt einer strukturierten, abwechslungsreichen Agenda:', 'Each of our weekly meetings follows a structured, diversified agenda:'); ?></p>
        </div>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-marker">1</div>
                <div class="timeline-content">
                    <h3><?php echo t('Teil 1: Die vorbereiteten Reden', 'Part 1: Prepared Speeches'); ?></h3>
                    <p>
                        <?php echo t(
                            'Zwei bis drei Mitglieder halten vorbereitete Reden, die sie im Rahmen ihrer Pathways-Projekte ausgearbeitet haben (Dauer: meist 5 bis 7 Minuten). Die Themen sind völlig frei wählbar – von packenden Urlaubsgeschichten bis hin zu wissenschaftlichen RWTH-Vorträgen.',
                            'Two to three members give prepared speeches based on their projects from the Pathways program (duration: usually 5 to 7 minutes). Topics are entirely open – from exciting holiday stories to scientific RWTH presentations.'
                        ); ?>
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker">2</div>
                <div class="timeline-content">
                    <h3><?php echo t('Teil 2: Die Stegreifreden (Spontanität)', 'Part 2: Table Topics (Impromptu)'); ?></h3>
                    <p>
                        <?php echo t(
                            'Der spannendste und lustigste Teil! Unser Stegreifreden-Master stellt spontane Fragen oder Begriffe in den Raum. Mitglieder (und mutige Gäste!) haben 1 bis 2 Minuten Zeit, eine strukturierte, unterhaltsame Antwort aus dem Stegreif zu formulieren. Das ultimative Schlagfertigkeitstraining!',
                            'The most exciting and fun part! Our Table Topics Master poses spontaneous questions or topics. Members (and brave guests!) have 1 to 2 minutes to formulate a structured, entertaining response. The ultimate training for quick thinking!'
                        ); ?>
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker">3</div>
                <div class="timeline-content">
                    <h3><?php echo t('Teil 3: Das Feedback & die Berichte', 'Part 3: Evaluation & Reports'); ?></h3>
                    <p>
                        <?php echo t(
                            'Keiner geht nach Hause, ohne etwas gelernt zu haben. Die Bewertungsredner geben ihr Feedback. Der „Füllwort-Zähler“ berichtet über unnötige „Ähms“, der Zeitnehmer über die Einhaltung der Sprechzeiten und der Grammatiker über sprachliche Highlights und Fehler.',
                            'No one goes home without having learned something. Speech evaluators share their feedback. The Ah-Counter reports on unnecessary filler words, the Timer checks time limit compliance, and the Grammarian highlights language successes and slips.'
                        ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pathways Educational Program -->
    <section class="pathways-section" aria-label="<?php echo t('Das Pathways Weiterbildungsprogramm', 'The Pathways Educational Program'); ?>">
        <div class="pathways-content">
            <h2><?php echo t('Dein persönlicher Lehrplan: <span class="highlight-text">Pathways</span>', 'Your Personal Curriculum: <span class="highlight-text">Pathways</span>'); ?></h2>
            <p>
                <?php echo t(
                    'Mit deinem Beitritt erhältst du Zugriff auf das interaktive Pathways-Ausbildungsprogramm. Du kannst aus <strong>6 verschiedenen Bildungspfaden</strong> wählen, die genau auf deine Lebens- und Karriereziele abgestimmt sind.',
                    'Upon joining, you gain access to the interactive Pathways education program. You can choose from <strong>6 different education paths</strong>, custom-tailored to your career and life goals.'
                ); ?> 
            </p>
            <p>
                <?php echo t(
                    'Jeder Pfad besteht aus 5 Levels, die dich stufenweise vom Anfänger zum Meister deiner Disziplin führen. Das sind die 6 offiziellen Pfade:',
                    'Each path consists of 5 levels, guiding you step-by-step from beginner to mastery. These are the 6 official paths:'
                ); ?>
            </p>
            <ul class="pathways-list">
                <li>
                    <div class="path-title-col">
                        <i class="fas fa-check-circle" aria-hidden="true"></i>
                        <span>
                            <strong>Presentation Mastery</strong>
                            <small class="path-translation"><?php echo t('Präsentations-Meisterschaft', ''); ?></small>
                        </span>
                    </div>
                    <div class="path-desc-col">
                        <?php echo t('Fokus auf Körpersprache, Redeschreiben und Storytelling.', 'Focus on body language, speech writing, and storytelling.'); ?>
                    </div>
                </li>
                <li>
                    <div class="path-title-col">
                        <i class="fas fa-check-circle" aria-hidden="true"></i>
                        <span>
                            <strong>Dynamic Leadership</strong>
                            <small class="path-translation"><?php echo t('Dynamische Führung', ''); ?></small>
                        </span>
                    </div>
                    <div class="path-desc-col">
                        <?php echo t('Fokus auf strategische Führung, Konfliktlösung und Change Management.', 'Focus on strategic leadership, conflict resolution, and change management.'); ?>
                    </div>
                </li>
                <li>
                    <div class="path-title-col">
                        <i class="fas fa-check-circle" aria-hidden="true"></i>
                        <span>
                            <strong>Persuasive Influence</strong>
                            <small class="path-translation"><?php echo t('Überzeugender Einfluss', ''); ?></small>
                        </span>
                    </div>
                    <div class="path-desc-col">
                        <?php echo t('Fokus auf Verhandlungsgeschick, überzeugende Rhetorik und Konfliktbewältigung.', 'Focus on negotiation skills, persuasive rhetoric, and conflict management.'); ?>
                    </div>
                </li>
                <li>
                    <div class="path-title-col">
                        <i class="fas fa-check-circle" aria-hidden="true"></i>
                        <span>
                            <strong>Motivational Strategies</strong>
                            <small class="path-translation"><?php echo t('Motivations-Strategien', ''); ?></small>
                        </span>
                    </div>
                    <div class="path-desc-col">
                        <?php echo t('Fokus auf emotionale Intelligenz, Team-Building und Motivationstechniken.', 'Focus on emotional intelligence, team building, and motivation techniques.'); ?>
                    </div>
                </li>
                <li>
                    <div class="path-title-col">
                        <i class="fas fa-check-circle" aria-hidden="true"></i>
                        <span>
                            <strong>Visionary Communication</strong>
                            <small class="path-translation"><?php echo t('Visionäre Kommunikation', ''); ?></small>
                        </span>
                    </div>
                    <div class="path-desc-col">
                        <?php echo t('Fokus auf strategische Kommunikation, Visionsentwicklung und innovative Lösungen.', 'Focus on strategic communication, visionary development, and innovative solutions.'); ?>
                    </div>
                </li>
                <li>
                    <div class="path-title-col">
                        <i class="fas fa-check-circle" aria-hidden="true"></i>
                        <span>
                            <strong>Engaging Humor</strong>
                            <small class="path-translation"><?php echo t('Mitreißender Humor', ''); ?></small>
                        </span>
                    </div>
                    <div class="path-desc-col">
                        <?php echo t('Fokus auf Humor als Redemittel, Spontanität und Publikumsmagnetismus.', 'Focus on humor as a speaking tool, spontaneity, and audience magnetism.'); ?>
                    </div>
                </li>
            </ul>
        </div>
        <div class="pathways-badge-visual">
            <div class="pathways-card">
                <i class="fas fa-graduation-cap" aria-hidden="true"></i>
                <h4><?php echo t('Professionelle Zertifikate', 'Professional Certificates'); ?></h4>
                <p><?php echo t(
                    'Jedes abgeschlossene Level und jeder fertige Pfad wird mit international anerkannten Zertifikaten belohnt – ideal für deinen Lebenslauf!',
                    'Every completed level and path is awarded with internationally recognized certificates – perfect for your CV!'
                ); ?></p>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-banner" aria-label="<?php echo t('Jetzt ausprobieren', 'Try it now'); ?>">
        <h2><?php echo t('Bereit, den ersten Schritt zu machen?', 'Ready to take the first step?'); ?></h2>
        <p><?php echo t('Lass dich nicht von deinen Zweifeln ausbremsen. Jeder Spitzenredner hat einmal klein angefangen.', 'Don\'t let doubts hold you back. Every great speaker started small.'); ?></p>
        <div class="cta-actions">
            <a href="/kontakt" class="btn btn-primary"><?php echo t('Frage stellen', 'Ask a Question'); ?></a>
            <a href="/ueber-uns" class="btn btn-secondary"><?php echo t('Über unseren Aachener Club', 'About our Aachen Club'); ?></a>
        </div>
    </section>
</main>

<?php
include ROOT_PATH . '/includes/footer.php';
?>
