<?php
require_once 'config/db.php';

$slug = $_GET['slug'] ?? 'home';

$seo = [
    'meta_title' => 'Supreme Service – Appliance Repair',
    'meta_description' => 'Professional appliance repair service',
    'meta_keywords' => '',
    'h1_title' => 'Home Appliance Repair'
];

$stmt = $conn->prepare("SELECT * FROM service_pages WHERE slug = ?");
$stmt->bind_param("s", $slug);
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows > 0) {
    $seo = $res->fetch_assoc();
}
?>
<!doctype html>
<html lang="en">
<head>
    <title><?= htmlspecialchars($seo['meta_title']) ?></title>

    <meta name="description" content="<?= htmlspecialchars($seo['meta_description']) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($seo['meta_keywords']) ?>">
    <meta name="robots" content="index, follow">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($seo['meta_title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($seo['meta_description']) ?>">
    <meta property="og:url" content="https://www.example.com/<?= $slug ?>">

    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
