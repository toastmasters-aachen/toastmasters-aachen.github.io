<?php
require_once __DIR__ . '/../config/config.php';
require_once ROOT_PATH . '/includes/functions.php';

$page_title = '404 | ' . SITE_NAME;
$page_description = 'Die angefragte Seite wurde nicht gefunden.';
include ROOT_PATH . '/includes/header.php';
?>
<main class="site-main">
    <section class="placeholder-section" aria-labelledby="page-heading">
        <p class="placeholder-label">404</p>
        <h1 id="page-heading">Seite nicht gefunden</h1>
        <p class="placeholder-intro">Die angefragte Adresse existiert in dieser Blanko-Vorlage noch nicht.</p>
        <p><a class="button-link" href="/">Zur Startseite</a></p>
    </section>
</main>
<?php include ROOT_PATH . '/includes/footer.php'; ?>
