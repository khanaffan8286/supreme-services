<?php
require_once __DIR__ . '/config/db.php';

/**
 * Get slug safely
 */
$slug = $_GET['slug'] ?? 'home';
$slug = trim($slug, '/');
$slug = urldecode($slug);

/**
 * Default SEO (home & fallback)
 */
$seo = [
    'meta_title' => 'Supreme Service – Appliance Repair',
    'meta_description' => 'Professional washing machine, refrigerator & microwave repair services.',
    'meta_keywords' => '',
    'robots' => 'index, follow',

    'og_title' => 'Supreme Service – Appliance Repair',
    'og_description' => 'Expert appliance repair services near you.',
    'og_image' => 'https://www.supremeservice.in/assets/img/og.jpg',
    'og_type' => 'website',

    'twitter_title' => 'Supreme Service – Appliance Repair',
    'twitter_description' => 'Fast & reliable appliance repair services.',
    'twitter_image' => 'https://www.supremeservice.in/assets/img/og.jpg'
];

/**
 * 🔥 ALWAYS try DB lookup for SEO slugs
 */
if ($slug !== 'home') {
    $stmt = $conn->prepare(
        "SELECT * FROM seo_pages WHERE page_slug = ? LIMIT 1"
    );
    $stmt->bind_param("s", $slug);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $dbSeo = $result->fetch_assoc();

        // Merge DB values safely
        foreach ($seo as $key => $value) {
            if (!empty($dbSeo[$key])) {
                $seo[$key] = $dbSeo[$key];
            }
        }
    }
}

/**
 * ✅ Correct canonical (NO .php ever)
 */
$canonical = ($slug === 'home')
    ? 'https://www.supremeservice.in/'
    : 'https://www.supremeservice.in/' . $slug;
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= htmlspecialchars($seo['meta_title']) ?></title>

<meta name="description" content="<?= htmlspecialchars($seo['meta_description']) ?>">
<meta name="keywords" content="<?= htmlspecialchars($seo['meta_keywords']) ?>">
<meta name="robots" content="<?= htmlspecialchars($seo['robots']) ?>">

<link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">

<!-- Open Graph -->
<meta property="og:title" content="<?= htmlspecialchars($seo['og_title']) ?>">
<meta property="og:description" content="<?= htmlspecialchars($seo['og_description']) ?>">
<meta property="og:image" content="<?= htmlspecialchars($seo['og_image']) ?>">
<meta property="og:type" content="<?= htmlspecialchars($seo['og_type']) ?>">
<meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($seo['twitter_title']) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($seo['twitter_description']) ?>">
<meta name="twitter:image" content="<?= htmlspecialchars($seo['twitter_image']) ?>">

<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/favicon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon.png">
<meta name="theme-color" content="#ffffff">

<!-- CSS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
