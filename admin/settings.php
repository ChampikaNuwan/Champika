<?php
// admin/settings.php
require_once '../db_config.php';
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Champika Nuwan</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class', theme: { extend: { fontFamily: { sans: ['Outfit', 'sans-serif'] }, colors: { brand: { 400: '#2dd4bf', 500: '#14b8a6' }, dark: { bg: '#0a0a0c', card: '#121418', border: '#1f2229' } } } } }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 dark:bg-dark-bg text-gray-900 dark:text-gray-100 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        <aside class="w-72 bg-white dark:bg-dark-card border-r border-gray-200 dark:border-dark-border flex flex-col hidden md:flex">
            <div class="h-24 flex items-center px-8 border-b border-gray-200 dark:border-dark-border">
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-400 to-brand-500 flex items-center justify-center text-white font-black text-xl shadow-lg shadow-brand-500/30">C</div>
                    <span class="font-black text-xl tracking-wide">Workspace</span>
                </div>
            </div>
            <div class="px-8 py-6">
                <p class="text-xs font-bold text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4">Main Menu</p>
                <nav class="space-y-2">
                    <a href="index.php" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl hover:bg-gray-100 dark:hover:bg-dark-bg text-gray-600 dark:text-gray-400 font-bold transition-all group">
                        <i class="fas fa-chart-pie w-5 text-lg group-hover:text-brand-500 transition-colors"></i> Overview
                    </a>
                    <a href="manage-projects.php" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl hover:bg-gray-100 dark:hover:bg-dark-bg text-gray-600 dark:text-gray-400 font-bold transition-all group">
                        <i class="fas fa-layer-group w-5 text-lg group-hover:text-brand-500 transition-colors"></i> Projects
                    </a>
                </nav>
                <p class="text-xs font-bold text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4 mt-8">System</p>
                <nav class="space-y-2">
                    <a href="settings.php" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl bg-brand-500 text-white font-bold transition-all shadow-md shadow-brand-500/20">
                        <i class="fas fa-sliders-h w-5 text-lg"></i> Settings
                    </a>
                </nav>
            </div>
        </aside>
        
        <main class="flex-1 flex flex-col overflow-hidden relative bg-gray-50 dark:bg-dark-bg">
            <header class="h-24 bg-white/70 dark:bg-dark-bg/70 backdrop-blur-xl border-b border-gray-200 dark:border-dark-border flex items-center justify-between px-10 z-10 sticky top-0">
                <div>
                    <h2 class="text-3xl font-black">Settings</h2>
                </div>
            </header>
            <div class="flex-1 overflow-y-auto p-10">
                <div class="max-w-3xl bg-white dark:bg-dark-card rounded-[2.5rem] border border-gray-100 dark:border-dark-border p-10 shadow-sm">
                    <h3 class="text-2xl font-black mb-8">Site Configuration</h3>
                    <form>
                        <div class="mb-6">
                            <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Brand Name</label>
                            <input type="text" class="w-full bg-gray-50 dark:bg-dark-bg border border-gray-200 dark:border-dark-border rounded-xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-brand-500 font-medium" value="Champika Nuwan">
                        </div>
                        <div class="mb-6">
                            <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Primary Color (Hex)</label>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-xl bg-brand-500 shadow-inner"></div>
                                <input type="text" class="flex-1 bg-gray-50 dark:bg-dark-bg border border-gray-200 dark:border-dark-border rounded-xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-brand-500 font-medium" value="#14b8a6">
                            </div>
                        </div>
                        <div class="mb-8">
                            <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Hero Description</label>
                            <textarea rows="4" class="w-full bg-gray-50 dark:bg-dark-bg border border-gray-200 dark:border-dark-border rounded-xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-brand-500 font-medium">I build premium, high-performance web experiences bridging the gap between cutting-edge engineering and immersive design.</textarea>
                        </div>
                        <button type="button" class="bg-brand-500 hover:bg-brand-400 text-white font-bold py-4 px-10 rounded-xl transition-all shadow-lg shadow-brand-500/25 flex items-center justify-center gap-2">
                            Save Changes <i class="fas fa-check"></i>
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
