<?php
require_once __DIR__ . '/../config/db.php';
session_start();
if (!isset($_SESSION['admin_id'])) exit;

if ($_POST) {
    $stmt = $conn->prepare("
        INSERT INTO seo_pages
        (page_slug, meta_title, meta_description, meta_keywords, canonical_url, robots)
        VALUES (?,?,?,?,?,?)
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
}
?>

<!doctype html>
<html>
<head>
<title>Add SEO Page</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">

<div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">
<h2 class="text-xl font-bold mb-4">Add SEO Page</h2>

<form method="post" class="space-y-4">

<input name="page_slug" placeholder="Slug (example: service)"
 class="w-full border px-4 py-2 rounded" required>

<input name="meta_title" placeholder="Meta Title"
 class="w-full border px-4 py-2 rounded">

<textarea name="meta_description" placeholder="Meta Description"
 class="w-full border px-4 py-2 rounded"></textarea>

<textarea name="meta_keywords" placeholder="Meta Keywords"
 class="w-full border px-4 py-2 rounded"></textarea>

<input name="canonical_url" placeholder="Canonical URL"
 class="w-full border px-4 py-2 rounded">

<select name="robots" class="w-full border px-4 py-2 rounded">
    <option value="index, follow">Index, Follow</option>
    <option value="noindex, nofollow">Noindex, Nofollow</option>
</select>

<button class="bg-blue-600 text-white px-6 py-2 rounded">
Save
</button>

</form>
</div>

</body>
</html>
