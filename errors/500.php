<?php
require_once __DIR__ . '/../config/config.php';
require_once ROOT_PATH . '/includes/functions.php';

http_response_code(500);
$page_title = '500 | ' . SITE_NAME;
$page_description = 'Es ist ein Serverfehler aufgetreten.';
include ROOT_PATH . '/includes/header.php';
?>
<main class="site-main">
    <section class="placeholder-section" aria-labelledby="page-heading">
        <p class="placeholder-label">500</p>
        <h1 id="page-heading">Serverfehler</h1>
        <p class="placeholder-intro">Etwas ist schiefgelaufen. Pruefe die Serverlogs und die PHP-Konfiguration.</p>
        <p><a class="button-link" href="/">Zur Startseite</a></p>
    </section>
</main>
<?php include ROOT_PATH . '/includes/footer.php'; ?>
