<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://unpkg.com/@heroicons/vue@v2.1.2/24/outline/index.umd.js"></script>
<style>
    body { font-family: 'Inter', sans-serif; }
</style>
</head>

<body class="bg-gray-100 flex min-h-screen">

<!-- SIDEBAR -->
<aside class="w-68 bg-white/80 backdrop-blur-md border-r shadow-sm hidden md:flex flex-col">
    <div class="px-6 py-5 border-b">
        <h1 class="text-lg font-bold text-gray-900">Admin Panel</h1>
        <p class="text-xs text-gray-500">Supreme Services</p>
    </div>

    <nav class="flex-1 px-4 py-5 space-y-1">
        <a href="dashboard" class="flex items-center gap-3 px-4 py-2.5 rounded text-white bg-blue-600 font-medium shadow-sm">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M3 12l9-9 9 9M4 10v10a1 1 0 001 1h6m8-11v10a1 1 0 01-1 1h-6m-6 0h6" />
            </svg>
            Dashboard
        </a>
        <a href="service-add" class="flex items-center gap-3 px-4 py-2.5 rounded hover:bg-gray-200 text-gray-700 font-medium">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 4v16m8-8H4" />
            </svg>
            Add SEO Page
        </a>
        <a href="service-manage" class="flex items-center gap-3 px-4 py-2.5 rounded hover:bg-gray-200 text-gray-700 font-medium">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M11 5H6a2 2 0 00-2 2v10a2 2 0 002 2h11a2 2 0 002-2v-5" />
                <path d="M18.5 2.5l3 3L12 15l-4 1 1-4 9.5-9.5z" />
            </svg>
            Manage SEO Pages
        </a>
        <a href="logout" class="flex items-center gap-3 px-4 py-2.5 rounded hover:bg-red-100 text-red-600 font-semibold">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M15 12H3m12 0l-4-4m4 4l-4 4m4-4h6" />
            </svg>
            Logout
        </a>
    </nav>
</aside>

<!-- MAIN SECTION -->
<div class="flex-1 flex flex-col">

    <!-- TOP BAR -->
    <header class="bg-white shadow-sm border-b px-6 py-4 flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
        <span class="text-sm bg-gray-200 text-gray-700 px-3 py-1 rounded">Admin Active</span>
    </header>

    <!-- PAGE CONTENT -->
    <main class="p-6">

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

            <div class="p-5 bg-white rounded-xl shadow hover:shadow-md transition border flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Total Pages</p>
                    <h3 class="text-2xl font-bold text-gray-800">42</h3>
                </div>
                <div class="p-3 bg-blue-100 rounded-xl">
                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 10h16M10 14h10M10 18h10" />
                        <path d="M6 14h.01M6 18h.01" />
                    </svg>
                </div>
            </div>

            <div class="p-5 bg-white rounded-xl shadow hover:shadow-md transition border flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">SEO Optimized</p>
                    <h3 class="text-2xl font-bold text-gray-800">18</h3>
                </div>
                <div class="p-3 bg-green-100 rounded-xl">
                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </div>

            <div class="p-5 bg-white rounded-xl shadow hover:shadow-md transition border flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">Pending Edits</p>
                    <h3 class="text-2xl font-bold text-gray-800">6</h3>
                </div>
                <div class="p-3 bg-yellow-100 rounded-xl">
                    <svg class="w-7 h-7 text-yellow-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 9v4m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z" />
                    </svg>
                </div>
            </div>

        </div>

        <!-- Action Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <a href="service-add" class="p-6 bg-white rounded-xl shadow-md border hover:border-blue-500 hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-gray-800">Add New SEO Page</h3>
                <p class="text-gray-500 mt-1">Create new SEO optimized service or location page.</p>
            </a>

            <a href="service-edit" class="p-6 bg-white rounded-xl shadow-md border hover:border-blue-500 hover:shadow-lg transition">
                <h3 class="text-xl font-semibold text-gray-800">Manage Existing Pages</h3>
                <p class="text-gray-500 mt-1">Update meta tags, canonical URLs, etc.</p>
            </a>
        </div>

    </main>

</div>

</body>
</html>
