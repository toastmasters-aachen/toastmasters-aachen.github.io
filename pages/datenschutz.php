<?php
require_once __DIR__ . '/../config/config.php';
require_once ROOT_PATH . '/includes/functions.php';

$page_title = t('Datenschutzerklärung | Toastmasters Aachen', 'Privacy Policy | Toastmasters Aachen');
$page_description = t(
    'Datenschutzerklärung für die Website von Toastmasters Aachen e. V. gemäß DSGVO.',
    'Privacy Policy for the website of Toastmasters Aachen e. V. in accordance with GDPR.'
);

include ROOT_PATH . '/includes/header.php';
?>

<main class="site-main legal-page">
    <div class="legal-container" style="max-width: 800px; margin: 0 auto; padding: 40px 20px;">
        <span class="badge"><?php echo t('Rechtliches', 'Legal Info'); ?></span>
        <h1 style="font-size: 2.5rem; margin-bottom: 24px; color: var(--tm-navy-dark);"><?php echo t('Datenschutzerklärung', 'Privacy Policy'); ?></h1>
        
        <div class="legal-card" style="background: var(--tm-card-bg); border: 1px solid var(--tm-line); border-radius: var(--radius-md); padding: 40px; box-shadow: var(--shadow-soft); color: var(--tm-text); line-height: 1.7; font-size: 0.95rem;">
            
            <h2 style="font-size: 1.4rem; margin-top: 0; margin-bottom: 16px; color: var(--tm-navy-dark);"><?php echo t('1. Datenschutz auf einen Blick', '1. Privacy at a Glance'); ?></h2>
            <p>
                <?php echo t(
                    'Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen Daten passiert, wenn Sie diese Website besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie persönlich identifiziert werden können.',
                    'The following information provides a simple overview of what happens to your personal data when you visit this website. Personal data is any data that can be used to identify you personally.'
                ); ?>
            </p>

            <h3 style="font-size: 1.15rem; margin-top: 24px; margin-bottom: 12px; color: var(--tm-navy-dark);"><?php echo t('Datenerfassung auf dieser Website', 'Data collection on this website'); ?></h3>
            <p>
                <?php echo t(
                    'Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten können Sie dem Impressum dieser Website entnehmen. Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen (z. B. durch Eingabe in das Gästeregistrierungsformular). Andere Daten werden automatisch beim Besuch der Website durch unsere IT-Systeme erfasst (technische Daten wie z. B. Internetbrowser, Betriebssystem oder Uhrzeit des Seitenaufrufs).',
                    'The data processing on this website is carried out by the website operator. You can find their contact details in the imprint of this website. Your data is collected on the one hand by you communicating it to us (e.g. by entering it in the guest registration form). Other data is collected automatically when you visit the website by our IT systems (technical data such as Internet browser, operating system or time of page call).'
                ); ?>
            </p>

            <hr style="border: 0; border-top: 1px solid var(--tm-line); margin: 32px 0;">

            <h2 style="font-size: 1.4rem; margin-bottom: 16px; color: var(--tm-navy-dark);"><?php echo t('2. Verantwortlicher', '2. Controller'); ?></h2>
            <p>
                <?php echo t(
                    'Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:',
                    'The responsible party for data processing on this website is:'
                ); ?>
            </p>
            <p style="padding-left: 16px; border-left: 3px solid var(--tm-blue); margin-bottom: 24px;">
                <strong>Toastmasters Aachen e. V.</strong><br>
                Grachtstr. 29<br>
                52134 Herzogenrath<br><br>
                <strong>E-Mail:</strong> info@aachen-toastmasters.de
            </p>

            <hr style="border: 0; border-top: 1px solid var(--tm-line); margin: 32px 0;">

            <h2 style="font-size: 1.4rem; margin-bottom: 16px; color: var(--tm-navy-dark);"><?php echo t('3. Datenerfassung auf unserer Website', '3. Data Collection on Our Website'); ?></h2>
            
            <h3 style="font-size: 1.15rem; margin-top: 24px; margin-bottom: 12px; color: var(--tm-navy-dark);"><?php echo t('Server-Logfiles', 'Server Log Files'); ?></h3>
            <p>
                <?php echo t(
                    'Der Provider der Seiten erhebt und speichert automatisch Informationen in sogenannten Server-Log-Dateien, die Ihr Browser automatisch an uns übermittelt. Dies sind:',
                    'The provider of the pages automatically collects and stores information in so-called server log files, which your browser automatically transmits to us. These are:'
                ); ?>
            </p>
            <ul style="padding-left: 20px; margin-bottom: 16px;">
                <li><?php echo t('Browsertyp und Browserversion', 'Browser type and version'); ?></li>
                <li><?php echo t('Verwendetes Betriebssystem', 'Operating system used'); ?></li>
                <li><?php echo t('Referrer URL (die zuvor besuchte Seite)', 'Referrer URL (the previously visited page)'); ?></li>
                <li><?php echo t('Hostname des zugreifenden Rechners', 'Hostname of the accessing computer'); ?></li>
                <li><?php echo t('Uhrzeit der Serveranfrage', 'Time of the server request'); ?></li>
                <li><?php echo t('IP-Adresse', 'IP address'); ?></li>
            </ul>
            <p>
                <?php echo t(
                    'Eine Zusammenführung dieser Daten mit anderen Datenquellen wird nicht vorgenommen. Grundlage für die Datenverarbeitung ist Art. 6 Abs. 1 lit. f DSGVO (berechtigtes Interesse an der Gewährleistung der Betriebssicherheit und Störungsfreiheit).',
                    'This data is not merged with other data sources. The basis for data processing is Art. 6 Para. 1 lit. f GDPR (legitimate interest in ensuring operational safety and freedom from interference).'
                ); ?>
            </p>

            <h3 style="font-size: 1.15rem; margin-top: 24px; margin-bottom: 12px; color: var(--tm-navy-dark);"><?php echo t('Kontakt- und Gästeregistrierungsformular', 'Contact and Guest Registration Form'); ?></h3>
            <p>
                <?php echo t(
                    'Wenn Sie uns per Kontaktformular Anfragen oder Anmeldungen zukommen lassen, werden Ihre Angaben aus dem Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten (Name, E-Mail-Adresse, Wunschtermin sowie optionale Nachricht) zwecks Bearbeitung der Anfrage und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter.',
                    'If you send us inquiries or registrations via the contact form, your details from the inquiry form, including the contact details you provided there (name, email address, requested date and optional message), will be stored by us for the purpose of processing the inquiry and in the event of follow-up questions. We do not pass this data on without your consent.'
                ); ?>
            </p>
            <p>
                <?php echo t(
                    'Die Verarbeitung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. a DSGVO (Einwilligung) bzw. Art. 6 Abs. 1 lit. b DSGVO (Vertragserfüllung oder vorvertragliche Maßnahmen). Sie können diese Einwilligung jederzeit widerrufen. Dazu reicht eine formlose Mitteilung per E-Mail an uns.',
                    'The processing of this data is based on Art. 6 Para. 1 lit. a GDPR (consent) or Art. 6 Para. 1 lit. b GDPR (performance of a contract or pre-contractual measures). You can revoke this consent at any time. An informal email notification is sufficient.'
                ); ?>
            </p>

            <hr style="border: 0; border-top: 1px solid var(--tm-line); margin: 32px 0;">

            <h2 style="font-size: 1.4rem; margin-bottom: 16px; color: var(--tm-navy-dark);"><?php echo t('4. Soziale Medien und externe Verlinkungen', '4. Social Media and External Links'); ?></h2>
            <p>
                <?php echo t(
                    'Wir verlinken auf dieser Website auf Profile unseres Vereins auf folgenden Plattformen:',
                    'We link on this website to profiles of our association on the following platforms:'
                ); ?>
            </p>
            <ul style="padding-left: 20px; margin-bottom: 16px;">
                <li><strong>Meetup:</strong> Meetup Inc., 611 Broadway, Suite 377, New York, NY 10012, USA.</li>
                <li><strong>LinkedIn:</strong> LinkedIn Ireland Unlimited Company, Wilton Place, Dublin 2, Irland.</li>
                <li><strong>Instagram:</strong> Meta Platforms Ireland Limited, Merrion Road, Dublin 4, Irland.</li>
                <li><strong>Google Maps (Routenplaner):</strong> Google Ireland Limited, Gordon House, Barrow Street, Dublin 4, Irland.</li>
            </ul>
            <p>
                <?php echo t(
                    'Bei diesen Verlinkungen handelt es sich um einfache statische Hyperlinks, nicht um datenschutzrechtlich bedenkliche Social-Sharing-Plugins. Es werden beim reinen Besuch unserer Website keine Daten an diese Anbieter übertragen. Erst wenn Sie auf die jeweiligen Symbole klicken, werden Sie auf die Website des jeweiligen Dienstes weitergeleitet. Dort werden Ihre Daten gemäß den jeweiligen Datenschutzrichtlinien der Anbieter verarbeitet.',
                    'These links are simple static hyperlinks, not social sharing plugins that are critical for data protection. No data is transmitted to these providers when you simply visit our website. Only when you click on the respective icons will you be redirected to the website of the respective service. There, your data will be processed in accordance with the providers\' privacy policies.'
                ); ?>
            </p>

            <hr style="border: 0; border-top: 1px solid var(--tm-line); margin: 32px 0;">

            <h2 style="font-size: 1.4rem; margin-bottom: 16px; color: var(--tm-navy-dark);"><?php echo t('5. Ihre Rechte als betroffene Person', '5. Your Rights as a Data Subject'); ?></h2>
            <p>
                <?php echo t(
                    'Sie haben im Rahmen der geltenden gesetzlichen Bestimmungen jederzeit das Recht auf:',
                    'Within the scope of the applicable legal provisions, you have the right to:'
                ); ?>
            </p>
            <ul style="padding-left: 20px; margin-bottom: 16px;">
                <li><?php echo t('Auskunft über Ihre gespeicherten personenbezogenen Daten (Art. 15 DSGVO)', 'Information about your stored personal data (Art. 15 GDPR)'); ?></li>
                <li><?php echo t('Berichtigung unrichtiger Daten (Art. 16 DSGVO)', 'Correction of incorrect data (Art. 16 GDPR)'); ?></li>
                <li><?php echo t('Löschung Ihrer bei uns gespeicherten Daten (Art. 17 DSGVO)', 'Erasure of your data stored with us (Art. 17 GDPR)'); ?></li>
                <li><?php echo t('Einschränkung der Datenverarbeitung (Art. 18 DSGVO)', 'Restriction of data processing (Art. 18 GDPR)'); ?></li>
                <li><?php echo t('Datenübertragbarkeit (Art. 20 DSGVO)', 'Data portability (Art. 20 GDPR)'); ?></li>
                <li><?php echo t('Widerruf Ihrer erteilten Einwilligung (Art. 7 Abs. 3 DSGVO)', 'Withdrawal of consent granted (Art. 7 Para. 3 GDPR)'); ?></li>
            </ul>
            <p>
                <?php echo t(
                    'Wenden Sie sich hierzu oder bei weiteren Fragen zum Thema Datenschutz einfach per E-Mail an info@aachen-toastmasters.de. Des Weiteren steht Ihnen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu (Landesbeauftragte für Datenschutz und Informationsfreiheit Nordrhein-Westfalen).',
                    'To do this or if you have any further questions on the subject of data protection, simply contact us by email at info@aachen-toastmasters.de. Furthermore, you have a right to lodge a complaint with the competent supervisory authority (State Commissioner for Data Protection and Freedom of Information North Rhine-Westphalia).'
                ); ?>
            </p>

            <p style="margin-top: 32px; font-size: 0.85rem; color: var(--tm-muted); margin-bottom: 0;">
                Quelle: eRecht24
            </p>
        </div>
    </div>
</main>

<?php
include ROOT_PATH . '/includes/footer.php';
?>
