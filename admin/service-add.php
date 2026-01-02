<?php
require_once '../config/db.php';
if (!isset($_SESSION['admin_id'])) exit;

if ($_POST) {
    $stmt = $conn->prepare("
        INSERT INTO seo_pages 
        (page_slug, meta_title, meta_description, meta_keywords, canonical_url, robots)
        VALUES (?, ?, ?, ?, ?, ?)
    ");

    $stmt->bind_param(
        "ssssss",
        $_POST['page_slug'],
        $_POST['meta_title'],
        $_POST['meta_description'],
        $_POST['meta_keywords'],
        $_POST['canonical_url'],
        $_POST['robots']
    );
    $stmt->execute();

    header("Location: dashboard.php");
    exit;
}
?>

<form method="post">
    <h2>Add SEO Page</h2>

    <input name="page_slug" placeholder="washing-machine-repair-navi-mumbai" required>
    <input name="meta_title" placeholder="Meta Title" required>
    <textarea name="meta_description" placeholder="Meta Description"></textarea>
    <textarea name="meta_keywords" placeholder="Meta Keywords"></textarea>
    <input name="canonical_url" placeholder="https://example.com/slug">
    <input name="robots" value="index, follow">

    <button type="submit">Save</button>
</form>
