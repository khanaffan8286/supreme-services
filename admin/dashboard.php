<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!doctype html>
<html>
<head>
<title>Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

<!-- Navbar -->
<div class="bg-white shadow px-6 py-4 flex justify-between">
    <h1 class="text-xl font-bold">Admin Dashboard</h1>
    <a href="logout.php" class="text-red-600 font-semibold">Logout</a>
</div>

<!-- Content -->
<div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">

    <a href="service-add.php" class="bg-white p-6 rounded shadow hover:shadow-lg">
        <h3 class="font-semibold text-lg">Add SEO Page</h3>
        <p class="text-gray-500">Create new service / page SEO</p>
    </a>

    <a href="service-edit.php" class="bg-white p-6 rounded shadow hover:shadow-lg">
        <h3 class="font-semibold text-lg">Edit SEO Pages</h3>
        <p class="text-gray-500">Update meta & canonical URLs</p>
    </a>

</div>

</body>
</html>
