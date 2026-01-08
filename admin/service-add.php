<?php
require_once __DIR__ . '/../config/db.php';
session_start();
if (!isset($_SESSION['admin_id'])) exit;

$id = $_GET['id'] ?? 0;
$stmt = $conn->prepare("SELECT * FROM seo_pages WHERE id=?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();

if (!$data) {
    die("Page not found");
}

if ($_POST) {
    $stmt = $conn->prepare("
        UPDATE seo_pages SET 
            page_slug=?, meta_title=?, meta_description=?, meta_keywords=?, canonical_url=?, robots=?, updated_at=NOW()
        WHERE id=?
    ");

    $stmt->bind_param(
        "ssssssi",
        $_POST['page_slug'],
        $_POST['meta_title'],
        $_POST['meta_description'],
        $_POST['meta_keywords'],
        $_POST['canonical_url'],
        $_POST['robots'],
        $id
    );

    $stmt->execute();
    header("Location: service-manage.php");
}
?>

<!doctype html>
<html>
<head>
<title>Edit SEO Page</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">

<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
<h2 class="text-xl font-bold mb-4">Edit SEO Page</h2>

<form method="post" class="space-y-4">

<input name="page_slug" value="<?= $data['page_slug'] ?>" placeholder="Slug"
 class="w-full border px-4 py-2 rounded" required>

<input name="meta_title" value="<?= $data['meta_title'] ?>" placeholder="Meta Title"
 class="w-full border px-4 py-2 rounded">

<textarea name="meta_description" placeholder="Meta Description" class="w-full border px-4 py-2 rounded"><?= $data['meta_description'] ?></textarea>

<textarea name="meta_keywords" placeholder="Meta Keywords" class="w-full border px-4 py-2 rounded"><?= $data['meta_keywords'] ?></textarea>

<input name="canonical_url" value="<?= $data['canonical_url'] ?>" placeholder="Canonical URL"
 class="w-full border px-4 py-2 rounded">

<select name="robots" class="w-full border px-4 py-2 rounded">
    <option <?= $data['robots']=='index, follow'?'selected':'' ?>>index, follow</option>
    <option <?= $data['robots']=='noindex, nofollow'?'selected':'' ?>>noindex, nofollow</option>
</select>

<button class="bg-blue-600 text-white px-6 py-2 rounded">
Update
</button>

</form>
</div>

</body>
</html>
