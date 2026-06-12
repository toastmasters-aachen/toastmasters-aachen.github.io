<?php
/**
 * Shared helper functions for the blank starter website.
 */

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function current_path(): string
{
    $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $path = rtrim($path, '/');
    return $path === '' ? '/' : $path;
}

function site_url(string $path = ''): string
{
    $path = '/' . ltrim($path, '/');
    return SITE_URL . ($path === '/' ? '/' : $path);
}

function asset_url(string $path): string
{
    return '/' . ltrim($path, '/');
}

function get_lang(): string
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_GET['lang'])) {
        $lang = strtolower($_GET['lang']);
        if (in_array($lang, ['de', 'en'], true)) {
            $_SESSION['lang'] = $lang;
        }
    }
    return $_SESSION['lang'] ?? 'de';
}

function t(string $de, string $en): string
{
    return get_lang() === 'en' ? $en : $de;
}

function nav_items(): array
{
    return get_lang() === 'en' ? [
        '/' => 'Home',
        '/ueber-toastmasters' => 'About Toastmasters',
        '/ueber-uns' => 'About us',
        '/mitglied-werden' => 'Become a Member',
        '/kontakt' => 'Contact',
    ] : [
        '/' => 'Home',
        '/ueber-toastmasters' => 'Über Toastmasters',
        '/ueber-uns' => 'Über uns',
        '/mitglied-werden' => 'Mitglied werden',
        '/kontakt' => 'Kontakt',
    ];
}

function render_placeholder_page(array $page): void
{
    $title = $page['title'] ?? 'Blanko-Seite';
    $label = $page['label'] ?? $title;
    $heading = $page['heading'] ?? 'Hi, hier koennte deine Seite sein.';
    $intro = $page['intro'] ?? 'Diese Route ist vorbereitet. Ersetze diesen Platzhalter spaeter durch echte Inhalte, Bilder und ein eigenes Layout.';
    $route = $page['route'] ?? current_path();
    $page_title = $title . ' | ' . SITE_NAME;
    $page_description = $page['description'] ?? DEFAULT_PAGE_DESCRIPTION;

    include ROOT_PATH . '/includes/header.php';
    ?>
    <main class="site-main">
        <section class="placeholder-section" aria-labelledby="page-heading">
            <p class="placeholder-label"><?php echo e($label); ?></p>
            <h1 id="page-heading"><?php echo e($heading); ?></h1>
            <p class="placeholder-intro"><?php echo e($intro); ?></p>
            <div class="placeholder-meta" aria-label="Vorbereitete Route">
                <span>Route</span>
                <code><?php echo e($route); ?></code>
            </div>
        </section>
    </main>
    <?php
    include ROOT_PATH . '/includes/footer.php';
}

function get_next_meeting_info(): array
{
    $cache_file = ROOT_PATH . '/config/meetup_cache.json';
    $cache_time = 3600; // 1 hour
    $title = '';
    
    // Check cache
    if (file_exists($cache_file) && (time() - filemtime($cache_file)) < $cache_time) {
        $cached_data = json_decode(file_get_contents($cache_file), true);
        if (isset($cached_data['title'])) {
            $title = $cached_data['title'];
        }
    }
    
    // Fetch if cache invalid or empty
    if (empty($title)) {
        $url = 'https://www.meetup.com/de-DE/toastmasters-aachen/events/rss/';
        $options = [
            'http' => [
                'header' => "User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36\r\n",
                'timeout' => 5
            ]
        ];
        $context = stream_context_create($options);
        $xml_content = @file_get_contents($url, false, $context);
        
        if ($xml_content) {
            $rss = @simplexml_load_string($xml_content);
            if ($rss && isset($rss->channel->item[0])) {
                $title = (string)$rss->channel->item[0]->title;
                // Write to cache
                @file_put_contents($cache_file, json_encode(['title' => $title, 'timestamp' => time()]));
            }
        }
    }
    
    // Fallback if title is still empty
    if (empty($title)) {
        // Fallback alternating logic based on current week number
        $week_num = (int)date('W');
        $title = ($week_num % 2 === 0) ? 'Toastmasters Aachen - Deutscher Abend' : 'Toastmasters Aachen - English Meeting';
    }
    
    // Determine language based on title
    $is_english = (stripos($title, 'English') !== false);
    
    // Determine date of the next meeting
    // Meetings are on Tuesdays at 19:00 (Europe/Berlin timezone)
    $timezone = new DateTimeZone('Europe/Berlin');
    $now = new DateTime('now', $timezone);
    $meeting_date = clone $now;
    
    // If today is Tuesday and it's before 19:00, the meeting is today
    if ($now->format('N') == 2 && $now->format('H') < 19) {
        $meeting_date->setTime(19, 0, 0);
    } else {
        $meeting_date->modify('next Tuesday')->setTime(19, 0, 0);
    }
    
    // Format the date nicely in German and English
    $day = $meeting_date->format('j');
    $month_num = (int)$meeting_date->format('n');
    
    $months_de = ['', 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];
    $months_en = ['', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    
    $date_de = 'Dienstag, ' . $day . '. ' . $months_de[$month_num];
    
    // English ordinal suffix
    if (!in_array(($day % 100), [11, 12, 13])) {
        switch ($day % 10) {
            case 1:  $suffix = 'st'; break;
            case 2:  $suffix = 'nd'; break;
            case 3:  $suffix = 'rd'; break;
            default: $suffix = 'th'; break;
        }
    } else {
        $suffix = 'th';
    }
    $date_en = 'Tuesday, ' . $months_en[$month_num] . ' ' . $day . $suffix;
    
    return [
        'title' => $title,
        'is_english' => $is_english,
        'language_de' => $is_english ? 'Englisch' : 'Deutsch',
        'language_en' => $is_english ? 'English' : 'German',
        'date_de' => $date_de,
        'date_en' => $date_en,
        'time' => '19:00',
    ];
}
