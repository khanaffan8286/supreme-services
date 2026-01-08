<?php
require_once __DIR__ . '/../config/db.php';
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}

$result = $conn->query("SELECT id, page_slug, meta_title, canonical_url, robots, updated_at FROM seo_pages ORDER BY id DESC");
?>

<!doctype html>
<html>
<head>
<title>Manage SEO Pages</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

<!-- Nav -->
<div class="bg-white shadow px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold">SEO Pages Management</h1>
    <div class="space-x-4">
        <a href="dashboard" class="text-gray-600 font-medium">Dashboard</a>
        <a href="logout" class="text-red-600 font-semibold">Logout</a>
    </div>
</div>

<div class="p-8">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-2xl font-semibold">Manage Existing Pages</h2>
            <p class="text-gray-500">Update meta tags, canonical URLs, etc.</p>
        </div>
        <a href="service-add" class="bg-blue-600 text-white px-5 py-2 rounded shadow hover:bg-blue-700">
            + Add New Page
        </a>
    </div>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow overflow-x-auto">
        <table class="min-w-full border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left text-sm text-gray-700">
                    <th class="px-4 py-3 border-b">Slug</th>
                    <th class="px-4 py-3 border-b">Meta Title</th>
                    <th class="px-4 py-3 border-b">Canonical</th>
                    <th class="px-4 py-3 border-b">Robots</th>
                    <th class="px-4 py-3 border-b">Updated</th>
                    <th class="px-4 py-3 border-b text-center">Actions</th>
                </tr>
            </thead>
            <tbody>

            <?php if ($result->num_rows === 0): ?>
                <tr>
                    <td colspan="6" class="text-center py-6 text-gray-500">No pages found</td>
                </tr>
            <?php endif; ?>

            <?php while($row = $result->fetch_assoc()): ?>
                <tr class="border-b text-sm">
                    <td class="px-4 py-3"><?= htmlspecialchars($row['page_slug']) ?></td>
                    <td class="px-4 py-3 truncate max-w-xs"><?= htmlspecialchars($row['meta_title']) ?></td>
                    <td class="px-4 py-3 truncate max-w-xs text-blue-600"><?= htmlspecialchars($row['canonical_url']) ?></td>
                    <td class="px-4 py-3 text-gray-700"><?= htmlspecialchars($row['robots']) ?></td>
                    <td class="px-4 py-3 text-gray-500"><?= $row['updated_at'] ?></td>
                    <td class="px-4 py-3 text-center space-x-3">
                        <a href="service-edit?id=<?= $row['id'] ?>" class="text-blue-600 font-medium hover:underline">Edit</a>
                        <a href="service-delete?id=<?= $row['id'] ?>" onclick="return confirm('Delete this page?')" class="text-red-600 font-medium hover:underline">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>

            </tbody>
        </table>
    </div>

</div>

</body>
</html>
