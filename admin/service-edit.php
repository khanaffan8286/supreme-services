<?php
require_once __DIR__ . '/../config/db.php';
session_start();
if (!isset($_SESSION['admin_id'])) exit;

$result = $conn->query("SELECT * FROM seo_pages ORDER BY id DESC");
?>

<!doctype html>
<html>
<head>
<title>Edit SEO Pages</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-8">

<div class="max-w-5xl mx-auto bg-white p-6 rounded shadow">
<h2 class="text-xl font-bold mb-4">SEO Pages</h2>

<table class="w-full border">
<tr class="bg-gray-200">
<th class="p-2">Slug</th>
<th class="p-2">Title</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr class="border-t">
<td class="p-2"><?= $row['page_slug'] ?></td>
<td class="p-2"><?= $row['meta_title'] ?></td>
</tr>
<?php endwhile; ?>

</table>
</div>

</body>
</html>
