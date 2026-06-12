<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/functions.php';

$currentPath = current_path();
$page_title = $page_title ?? DEFAULT_PAGE_TITLE;
$page_description = $page_description ?? DEFAULT_PAGE_DESCRIPTION;
$canonicalUrl = site_url($currentPath);
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($page_title); ?></title>
    <meta name="description" content="<?php echo e($page_description); ?>">
    <link rel="canonical" href="<?php echo e($canonicalUrl); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e($canonicalUrl); ?>">
    <meta property="og:title" content="<?php echo e($page_title); ?>">
    <meta property="og:description" content="<?php echo e($page_description); ?>">
    <meta property="og:site_name" content="<?php echo e(SITE_NAME); ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo e($page_title); ?>">
    <meta name="twitter:description" content="<?php echo e($page_description); ?>">
    <link rel="preload" href="/assets/fonts/montserrat.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css?v=1.2">
</head>

<body>
    <div class="top-announcement-bar">
        <div class="announcement-content">
            <span><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Digital Church Aachen</span>
            <span class="separator">|</span>
            <span><i class="far fa-clock" aria-hidden="true"></i> <?php echo t('Jeden Dienstag um 19:00 Uhr', 'Every Tuesday at 7:00 PM'); ?></span>
            <span class="separator">|</span>
            <span class="next-meeting-badge">
                <i class="fas fa-calendar-check" aria-hidden="true"></i> 
                <?php echo t('Nächstes Treffen: Dienstag, 16. Juni (Englisch)', 'Next Meeting: Tuesday, June 16th (English)'); ?>
            </span>
        </div>
    </div>
    <header class="site-header">
        <a class="site-brand" href="<?php echo e(site_url('/' . (get_lang() === 'en' ? '?lang=en' : '?lang=de'))); ?>" aria-label="<?php echo e(SITE_NAME); ?>">
            <img src="/assets/images/Logo.png" alt="Toastmasters International Logo" class="brand-logo-img">
            <span>
                <strong>Toastmasters Aachen e. V.</strong>
                <small><?php echo t('Dein Rhetorik-Club in Aachen', 'Your Public Speaking Club in Aachen'); ?></small>
            </span>
        </a>

        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav">
            <i class="fas fa-bars" aria-hidden="true"></i> <?php echo t('Menü', 'Menu'); ?>
        </button>

        <nav id="site-nav" class="site-nav" aria-label="<?php echo t('Hauptnavigation', 'Main Navigation'); ?>">
            <?php foreach (nav_items() as $href => $label): ?>
                <a href="<?php echo e($href); ?>" <?php echo $currentPath === $href ? 'aria-current="page"' : ''; ?>>
                    <?php echo e($label); ?>
                </a>
            <?php endforeach; ?>
            
            <?php
            $currentLang = get_lang();
            $deUrl = $currentPath . '?lang=de';
            $enUrl = $currentPath . '?lang=en';
            ?>
            <div class="lang-switcher">
                <a href="<?php echo $deUrl; ?>" class="lang-btn <?php echo $currentLang === 'de' ? 'active' : ''; ?>" aria-label="Deutsch">DE</a>
                <span class="lang-separator">|</span>
                <a href="<?php echo $enUrl; ?>" class="lang-btn <?php echo $currentLang === 'en' ? 'active' : ''; ?>" aria-label="English">EN</a>
            </div>
        </nav>
    </header>
