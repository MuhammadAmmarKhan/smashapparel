<?php
$is_live = (strpos($_SERVER['HTTP_HOST'], 'smashapparel.com.au') !== false || strpos($_SERVER['HTTP_HOST'], 'smashapparel.com.au') !== false);
if ($is_live):
    // Add production tracking scripts here (e.g. Google Tag Manager / Analytics)
endif;

$no_index_pages = [
        'sitemap.php', 'process-grant.php', 'process-form.php', 'config.php',
        'header.php', 'footer.php', '404.php', '403.php', '410.php',
        '500.php', '503.php', 'services-bkp.php'
];
$current_filename = basename($_SERVER['PHP_SELF']);
$is_private = in_array($current_filename, $no_index_pages);

// Build Canonical URL dynamically
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$canonical_url = $protocol . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?');
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
    (function () {
        const savedTheme = localStorage.getItem('theme');
        const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const theme = savedTheme ? savedTheme : (systemPrefersDark ? 'dark' : 'light');
        document.documentElement.setAttribute('data-bs-theme', theme);
    })();
</script>
<title><?php echo htmlspecialchars($page_title ?? 'Smash Apparel'); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($page_description ?? ''); ?>">
<meta name="keywords" content="<?php echo htmlspecialchars($page_keywords ?? ''); ?>">
<meta name="author" content="Smart Servix">
<meta name="theme-color" content="red">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="Smash Apparel">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Basic&family=BenchNine:wght@300;400;700&family=Boldonse&family=Libre+Barcode+128+Text&family=Oswald:wght@200..700&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://kit.fontawesome.com" crossorigin>
<link rel="preconnect" href="https://ka-f.fontawesome.com" crossorigin>
<link href="<?php echo asset('css/bootstrap.min.css'); ?>" rel="preload" onload='this.onload=null,this.rel="stylesheet"'
      as="style">
<noscript>
    <link href="<?php echo asset('css/bootstrap.min.css'); ?>" rel="stylesheet">
</noscript>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
<link href="<?php echo asset('css/override.css'); ?>" rel="stylesheet">
<script crossorigin="anonymous" defer src="https://kit.fontawesome.com/0b217c8a25.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
