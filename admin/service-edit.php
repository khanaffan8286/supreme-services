<?php
require_once __DIR__ . '/../config/db.php';
session_start();
if (!isset($_SESSION['admin_id'])) exit;

$isEditMode = isset($_GET['id']);
$editData = null;

if ($isEditMode) {
    $id = intval($_GET['id']);
    $stmt = $conn->prepare("SELECT * FROM seo_pages WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $editData = $stmt->get_result()->fetch_assoc();
}

// Load all for list mode
$result = $conn->query("SELECT * FROM seo_pages ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?= $isEditMode ? 'Edit SEO Page' : 'Manage SEO Pages' ?></title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
<style> body { font-family: 'Inter', sans-serif; } </style>
</head>

<body class="bg-gray-100 min-h-screen">

<div class="max-w-6xl mx-auto py-10">
    
<?php if (!$isEditMode): ?>
<!-- LIST MODE -->
    <div class="flex justify-between mb-6">
        <div>
            <h1 class="text-2xl font-semibold text-gray-800">Manage SEO Pages</h1>
            <p class="text-gray-500 text-sm">View and edit SEO metadata.</p>
        </div>
        <a href="service-add.php" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 text-sm">
            + Add New Page
        </a>
    </div>

    <div class="bg-white p-4 rounded-lg shadow mb-4">
        <input type="text" placeholder="Search..." oninput="filterTable(this.value)"
            class="w-full px-3 py-2 border rounded focus:ring focus:ring-blue-200">
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full text-sm">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-3 text-left">Slug</th>
                    <th class="px-4 py-3 text-left">Meta Title</th>
                    <th class="px-4 py-3 text-left">Updated</th>
                    <th class="px-4 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody id="seoTable">
                <?php while($row = $result->fetch_assoc()): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-3 font-medium"><?= $row['page_slug'] ?></td>
                    <td class="px-4 py-3"><?= $row['meta_title'] ?></td>
                    <td class="px-4 py-3 text-gray-500"><?= $row['updated_at'] ?></td>
                    <td class="px-4 py-3 text-center">
                        <a href="service-edit.php?id=<?= $row['id'] ?>" 
                           class="px-3 py-1 bg-blue-600 text-white rounded text-xs hover:bg-blue-700">
                           Edit
                        </a>
                        <a href="service-delete.php?id=<?= $row['id'] ?>" 
                           onclick="return confirm('Delete this entry?')"
                           class="px-3 py-1 bg-red-600 text-white rounded text-xs hover:bg-red-700">
                           Delete
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

<script>
function filterTable(s) {
    s = s.toLowerCase();
    document.querySelectorAll("#seoTable tr").forEach(r => {
        const text = r.innerText.toLowerCase();
        r.style.display = text.includes(s) ? "" : "none";
    });
}
</script>

<?php else: ?>
<!-- EDIT MODE -->
    <a href="service-edit.php" class="text-blue-600 text-sm underline mb-4 inline-block">← Back to list</a>

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-semibold mb-4">Edit SEO Page</h2>

        <?php if (!$editData): ?>
            <p class="text-red-600">Invalid ID.</p>
        <?php else: ?>
        <form method="post" action="service-update.php" class="space-y-4">
            <input type="hidden" name="id" value="<?= $editData['id'] ?>">

            <input name="page_slug" value="<?= $editData['page_slug'] ?>" 
                class="w-full border px-4 py-2 rounded" required>

            <input name="meta_title" value="<?= $editData['meta_title'] ?>"
                class="w-full border px-4 py-2 rounded">

            <textarea name="meta_description"
                class="w-full border px-4 py-2 rounded"><?= $editData['meta_description'] ?></textarea>

            <textarea name="meta_keywords"
                class="w-full border px-4 py-2 rounded"><?= $editData['meta_keywords'] ?></textarea>

            <input name="canonical_url" value="<?= $editData['canonical_url'] ?>"
                class="w-full border px-4 py-2 rounded">

            <select name="robots" class="w-full border px-4 py-2 rounded">
                <option <?= $editData['robots']=='index, follow'?'selected':'' ?>>index, follow</option>
                <option <?= $editData['robots']=='noindex, nofollow'?'selected':'' ?>>noindex, nofollow</option>
            </select>

            <button class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save Changes</button>
        </form>
        <?php endif; ?>
    </div>
<?php endif; ?>

</div>
</body>
</html>
