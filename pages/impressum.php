<?php
require_once __DIR__ . '/../config/config.php';
require_once ROOT_PATH . '/includes/functions.php';

$page_title = t('Impressum | Toastmasters Aachen', 'Imprint | Toastmasters Aachen');
$page_description = t(
    'Impressum und Anbieterkennzeichnung von Toastmasters Aachen e. V.',
    'Imprint and provider identification of Toastmasters Aachen e. V.'
);

include ROOT_PATH . '/includes/header.php';
?>

<main class="site-main legal-page">
    <div class="legal-container" style="max-width: 800px; margin: 0 auto; padding: 40px 20px;">
        <span class="badge"><?php echo t('Rechtliches', 'Legal Info'); ?></span>
        <h1 style="font-size: 2.5rem; margin-bottom: 24px; color: var(--tm-navy-dark);"><?php echo t('Impressum', 'Imprint'); ?></h1>
        
        <div class="legal-card" style="background: var(--tm-card-bg); border: 1px solid var(--tm-line); border-radius: var(--radius-md); padding: 40px; box-shadow: var(--shadow-soft); color: var(--tm-text); line-height: 1.7;">
            
            <h2 style="font-size: 1.5rem; margin-top: 0; margin-bottom: 16px; color: var(--tm-navy-dark);"><?php echo t('Angaben gemäß § 5 TMG', 'Information in accordance with § 5 TMG'); ?></h2>
            <p style="margin-bottom: 24px;">
                <strong>Toastmasters Aachen e. V.</strong><br>
                Grachtstr. 29<br>
                52134 Herzogenrath
            </p>

            <p style="margin-bottom: 24px;">
                <strong><?php echo t('Vereinsregister:', 'Register of Associations:'); ?></strong> VR 5558<br>
                <strong><?php echo t('Registergericht:', 'Register Court:'); ?></strong> Amtsgericht Aachen
            </p>

            <p style="margin-bottom: 24px;">
                <strong><?php echo t('Vertreten durch:', 'Represented by:'); ?></strong> Yuliya Kobuk
            </p>

            <hr style="border: 0; border-top: 1px solid var(--tm-line); margin: 32px 0;">

            <h2 style="font-size: 1.5rem; margin-bottom: 16px; color: var(--tm-navy-dark);"><?php echo t('Kontakt', 'Contact'); ?></h2>
            <p style="margin-bottom: 24px;">
                <strong>E-Mail:</strong> <a href="mailto:info@aachen-toastmasters.de" style="color: var(--tm-blue); text-decoration: underline; font-weight: 700;">info@aachen-toastmasters.de</a>
            </p>

            <hr style="border: 0; border-top: 1px solid var(--tm-line); margin: 32px 0;">

            <h2 style="font-size: 1.5rem; margin-bottom: 16px; color: var(--tm-navy-dark);"><?php echo t('Redaktionell verantwortlich', 'Person responsible for editorial content'); ?></h2>
            <p style="margin-bottom: 24px;">
                Yuliya Kobuk<br>
                Grachtstr. 29<br>
                52134 Herzogenrath
            </p>

            <hr style="border: 0; border-top: 1px solid var(--tm-line); margin: 32px 0;">

            <h2 style="font-size: 1.5rem; margin-bottom: 16px; color: var(--tm-navy-dark);"><?php echo t('Verbraucherstreitbeilegung/Universalschlichtungsstelle', 'Consumer dispute resolution/Universal arbitration board'); ?></h2>
            <p style="margin-bottom: 0;">
                <?php echo t(
                    'Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.',
                    'We are not willing or obliged to participate in dispute resolution proceedings before a consumer arbitration board.'
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
