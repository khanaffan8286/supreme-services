<?php
require_once '../config/db.php';
if (!isset($_SESSION['admin_id'])) exit;

$result = $conn->query("SELECT * FROM seo_pages ORDER BY updated_at DESC");
?>

<h2>SEO Pages</h2>
<a href="service-add.php">➕ Add New Page</a>
<table border="1" cellpadding="10">
<tr>
    <th>Slug</th>
    <th>Title</th>
    <th>Action</th>
</tr>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['page_slug'] ?></td>
    <td><?= $row['meta_title'] ?></td>
    <td>
        <a href="service-edit.php?id=<?= $row['id'] ?>">Edit</a>
    </td>
</tr>
<?php endwhile; ?>
</table>

<a href="logout.php">Logout</a>
