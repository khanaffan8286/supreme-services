<?php
require_once '../config/db.php';
if (!isset($_SESSION['admin_id'])) exit;

$id = $_GET['id'];
$page = $conn->query("SELECT * FROM seo_pages WHERE id=$id")->fetch_assoc();

if ($_POST) {
    $stmt = $conn->prepare("
        UPDATE seo_pages SET
        meta_title=?,
        meta_description=?,
        meta_keywords=?,
        canonical_url=?,
        robots=?
        WHERE id=?
    ");

    $stmt->bind_param(
        "sssssi",
        $_POST['meta_title'],
        $_POST['meta_description'],
        $_POST['meta_keywords'],
        $_POST['canonical_url'],
        $_POST['robots'],
        $id
    );
    $stmt->execute();

    header("Location: dashboard.php");
    exit;
}
?>

<form method="post">
    <h2>Edit SEO: <?= $page['page_slug'] ?></h2>

    <input name="meta_title" value="<?= htmlspecialchars($page['meta_title']) ?>">
    <textarea name="meta_description"><?= htmlspecialchars($page['meta_description']) ?></textarea>
    <textarea name="meta_keywords"><?= htmlspecialchars($page['meta_keywords']) ?></textarea>
    <input name="canonical_url" value="<?= $page['canonical_url'] ?>">
    <input name="robots" value="<?= $page['robots'] ?>">

    <button type="submit">Update</button>
</form>
