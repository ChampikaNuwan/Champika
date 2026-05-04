<?php
// admin/manage-projects.php
require_once '../db_config.php';
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Projects | Champika Nuwan</title>
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
                    <a href="manage-projects.php" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl bg-brand-500 text-white font-bold transition-all shadow-md shadow-brand-500/20">
                        <i class="fas fa-layer-group w-5 text-lg"></i> Projects
                    </a>
                </nav>
                <p class="text-xs font-bold text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4 mt-8">System</p>
                <nav class="space-y-2">
                    <a href="settings.php" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl hover:bg-gray-100 dark:hover:bg-dark-bg text-gray-600 dark:text-gray-400 font-bold transition-all group">
                        <i class="fas fa-sliders-h w-5 text-lg group-hover:text-brand-500 transition-colors"></i> Settings
                    </a>
                </nav>
            </div>
        </aside>
        
        <main class="flex-1 flex flex-col overflow-hidden relative bg-gray-50 dark:bg-dark-bg">
            <header class="h-24 bg-white/70 dark:bg-dark-bg/70 backdrop-blur-xl border-b border-gray-200 dark:border-dark-border flex items-center justify-between px-10 z-10 sticky top-0">
                <div><h2 class="text-3xl font-black">Manage Projects</h2></div>
                <button class="px-6 py-3 bg-brand-500 hover:bg-brand-400 text-white font-bold rounded-xl transition-all shadow-lg shadow-brand-500/20 flex items-center gap-2 hover:-translate-y-0.5">
                    <i class="fas fa-plus"></i> Add New
                </button>
            </header>
            <div class="flex-1 overflow-y-auto p-10">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                    <?php for($i=1; $i<=6; $i++): ?>
                    <div class="bg-white dark:bg-dark-card rounded-[2rem] overflow-hidden border border-gray-100 dark:border-dark-border shadow-sm group hover:shadow-xl hover:border-brand-500/30 transition-all duration-300">
                        <div class="h-56 bg-gray-200 dark:bg-gray-800 relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=400&auto=format&fit=crop&sig=<?php echo $i; ?>" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gray-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-4">
                                <button class="w-12 h-12 rounded-full bg-white text-gray-900 hover:text-brand-500 flex items-center justify-center font-bold shadow-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300"><i class="fas fa-pen"></i></button>
                                <button class="w-12 h-12 rounded-full bg-red-500 text-white hover:bg-red-600 flex items-center justify-center font-bold shadow-lg transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                        <div class="p-8">
                            <span class="text-brand-500 text-xs font-bold tracking-widest uppercase mb-2 block">Web App</span>
                            <h4 class="text-2xl font-black mb-3">Project Title <?php echo $i; ?></h4>
                            <p class="text-gray-500 dark:text-gray-400 font-medium leading-relaxed">A brief, elegant description of the project goes here. Designed using modern architecture.</p>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
