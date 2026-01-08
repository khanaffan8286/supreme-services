<?php
require_once __DIR__ . '/../config/db.php';

/* SECURITY SESSION CONFIG - MUST COME BEFORE session_start() */
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_only_cookies', 1);
    ini_set('session.cookie_secure', 0); // set to 1 on live HTTPS
    session_start();
}

/* SECURITY: If already logged in, redirect */
if (isset($_SESSION['admin_id'])) {
    header("Location: dashboard");
    exit;
}

/* Basic Rate Limiting */
$ip = $_SERVER['REMOTE_ADDR'];
$maxAttempts = 5;
$lockMinutes = 10;

if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = [];
}

/* Clear old attempts */
$_SESSION['login_attempts'] = array_filter($_SESSION['login_attempts'], function ($time) use ($lockMinutes) {
    return $time > time() - ($lockMinutes * 60);
});

/* If exceeded attempts */
if (count($_SESSION['login_attempts']) >= $maxAttempts) {
    die("<div style='padding:20px; font-family:Arial; color:red;'>
        Too many failed attempts. Try again after $lockMinutes minutes.
    </div>");
}

$error = '';

/* Handle login */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, email, password FROM admin_users WHERE email=? AND status=1 LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $admin = $stmt->get_result()->fetch_assoc();

    if ($admin && password_verify($password, $admin['password'])) {
        session_regenerate_id(true);
        $_SESSION['admin_id'] = $admin['id'];
        unset($_SESSION['login_attempts']);
        header("Location: dashboard");
        exit;
    } else {
        $_SESSION['login_attempts'][] = time();
        $error = "Invalid credentials";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Login | Supreme Services</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 min-h-screen flex items-center justify-center font-inter">

<div class="w-full max-w-md bg-white/10 backdrop-blur-lg shadow-2xl rounded-2xl p-8 border border-white/20">
    
    <div class="text-center mb-6">
        <img src="../assets/img/logo.png" alt="Logo" class="w-20 mx-auto mb-2">
        <h2 class="text-3xl font-bold text-white">Admin Portal</h2>
        <p class="text-gray-300">Supreme Services</p>
    </div>

    <?php if ($error): ?>
        <div class="bg-red-600/20 text-red-300 px-4 py-3 rounded-lg mb-4 border border-red-500/30 text-sm">
            <?= $error ?>
        </div>
    <?php endif; ?>

    <form method="post" class="space-y-5">
        <div>
            <label class="text-gray-200 text-sm block mb-1">Email</label>
            <input type="email" name="email" placeholder="admin@example.com"
                   class="w-full px-4 py-3 rounded-lg bg-gray-900/50 border border-gray-700 text-gray-200 placeholder-gray-400 focus:ring-2 focus:ring-blue-500 outline-none"
                   required>
        </div>

        <div class="relative">
    <input type="password" name="password" id="passwordInput"
        placeholder="Password"
        class="w-full px-4 py-3 rounded-lg bg-gray-900/50 border border-gray-700 text-gray-200 placeholder-gray-400 focus:ring-2 focus:ring-blue-500 outline-none"
        required>

    <button type="button" id="togglePassword"
        class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-gray-700">
        <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
        </svg>
    </button>
</div>


        <button type="submit"
            class="w-full py-3 rounded-lg bg-blue-600 hover:bg-blue-700 transition text-white font-semibold shadow-lg shadow-blue-600/30">
            Login Securely
        </button>
    </form>
</div>

</body>
</html>


<script>
document.getElementById("togglePassword").addEventListener("click", function() {
    const passInput = document.getElementById("passwordInput");
    const eye = document.getElementById("eyeIcon");

    if (passInput.type === "password") {
        passInput.type = "text";
        eye.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.054 10.054 0 012.041-3.362M6.343 6.343A10.05 10.05 0 0112 5c4.477 0 8.268 2.943 9.542 7a10.07 10.07 0 01-4.132 5.411M9.88 9.88A3 3 0 0114.12 14.12M3 3l18 18"/>
        `;
    } else {
        passInput.type = "password";
        eye.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
        `;
    }
});
</script>
