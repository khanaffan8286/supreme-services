<?php
require_once __DIR__ . '/../config/db.php';
session_start();

$error = '';

if ($_POST) {
    $stmt = $conn->prepare("SELECT * FROM admin_users WHERE email=? AND status=1");
    $stmt->bind_param("s", $_POST['email']);
    $stmt->execute();
    $admin = $stmt->get_result()->fetch_assoc();

    if ($admin && password_verify($_POST['password'], $admin['password'])) {
        $_SESSION['admin_id'] = $admin['id'];
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid email or password";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Login</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center">

<div class="w-full max-w-md bg-white shadow-xl rounded-lg p-8">
    <h2 class="text-2xl font-bold text-center text-gray-800">Admin Login</h2>
    <p class="text-center text-gray-500 mb-6">Supreme Services</p>

    <?php if ($error): ?>
        <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
            <?= $error ?>
        </div>
    <?php endif; ?>

    <form method="post" class="space-y-4">
        <input type="email" name="email" placeholder="Email"
            class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-200" required>

        <input type="password" name="password" placeholder="Password"
            class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-200" required>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
            Login
        </button>
    </form>
</div>

</body>
</html>
