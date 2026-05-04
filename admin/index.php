<?php
// admin/index.php
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Champika Nuwan</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: { sans: ['Outfit', 'sans-serif'] },
                    colors: {
                        brand: { 400: '#2dd4bf', 500: '#14b8a6' },
                        dark: { bg: '#0a0a0c', card: '#121418', border: '#1f2229' }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 dark:bg-dark-bg text-gray-900 dark:text-gray-100 font-sans antialiased">
    
    <div class="flex h-screen overflow-hidden">
        
        <!-- Sidebar -->
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
                    <a href="index.php" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl bg-brand-500 text-white font-bold transition-all shadow-md shadow-brand-500/20">
                        <i class="fas fa-chart-pie w-5 text-lg"></i> Overview
                    </a>
                    <a href="#" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl hover:bg-gray-100 dark:hover:bg-dark-bg text-gray-600 dark:text-gray-400 font-bold transition-all group">
                        <i class="fas fa-layer-group w-5 text-lg group-hover:text-brand-500 transition-colors"></i> Projects
                    </a>
                    <a href="#" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl hover:bg-gray-100 dark:hover:bg-dark-bg text-gray-600 dark:text-gray-400 font-bold transition-all group">
                        <i class="fas fa-envelope-open-text w-5 text-lg group-hover:text-brand-500 transition-colors"></i> Messages
                        <span class="ml-auto bg-brand-500 text-white text-xs px-2 py-1 rounded-full">3</span>
                    </a>
                </nav>

                <p class="text-xs font-bold text-gray-400 dark:text-gray-500 uppercase tracking-widest mb-4 mt-8">System</p>
                <nav class="space-y-2">
                    <a href="#" class="flex items-center gap-4 px-4 py-3.5 rounded-2xl hover:bg-gray-100 dark:hover:bg-dark-bg text-gray-600 dark:text-gray-400 font-bold transition-all group">
                        <i class="fas fa-sliders-h w-5 text-lg group-hover:text-brand-500 transition-colors"></i> Settings
                    </a>
                </nav>
            </div>
            
            <div class="mt-auto p-6 border-t border-gray-200 dark:border-dark-border">
                <a href="../index.php" class="flex items-center justify-center gap-3 w-full px-4 py-3.5 rounded-2xl bg-red-50 dark:bg-red-500/10 hover:bg-red-100 dark:hover:bg-red-500/20 text-red-600 dark:text-red-400 font-bold transition-colors">
                    <i class="fas fa-sign-out-alt"></i> Secure Logout
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col overflow-hidden relative bg-gray-50 dark:bg-dark-bg">
            <!-- Header -->
            <header class="h-24 bg-white/70 dark:bg-dark-bg/70 backdrop-blur-xl border-b border-gray-200 dark:border-dark-border flex items-center justify-between px-10 z-10 sticky top-0">
                <div>
                    <h2 class="text-3xl font-black">Dashboard</h2>
                    <p class="text-sm font-medium text-gray-500 mt-1">Welcome back, Champika.</p>
                </div>
                <div class="flex items-center gap-6">
                    <button class="w-12 h-12 rounded-full bg-white dark:bg-dark-card border border-gray-200 dark:border-dark-border flex items-center justify-center text-gray-500 hover:text-brand-500 transition-colors shadow-sm relative">
                        <i class="fas fa-bell text-lg"></i>
                        <span class="absolute top-3 right-3 w-2.5 h-2.5 bg-red-500 rounded-full border-2 border-white dark:border-dark-card"></span>
                    </button>
                    <div class="flex items-center gap-3 pl-6 border-l border-gray-200 dark:border-dark-border">
                        <div class="text-right hidden sm:block">
                            <p class="text-sm font-bold">Champika Nuwan</p>
                            <p class="text-xs font-medium text-gray-500">Super Admin</p>
                        </div>
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-gray-700 to-gray-900 border-2 border-brand-500 overflow-hidden shadow-md">
                            <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=100&auto=format&fit=crop" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </header>

            <!-- Content -->
            <div class="flex-1 overflow-y-auto p-10">
                
                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
                    <?php 
                    $stats = [
                        ['title' => 'Total Views', 'val' => '124.5K', 'icon' => 'fa-eye', 'color' => 'brand'],
                        ['title' => 'Live Projects', 'val' => '24', 'icon' => 'fa-rocket', 'color' => 'blue'],
                        ['title' => 'Inquiries', 'val' => '12', 'icon' => 'fa-envelope', 'color' => 'purple'],
                        ['title' => 'Uptime', 'val' => '99.9%', 'icon' => 'fa-server', 'color' => 'green']
                    ];
                    foreach($stats as $stat):
                    ?>
                    <div class="bg-white dark:bg-dark-card rounded-[2rem] p-6 border border-gray-100 dark:border-dark-border shadow-sm hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-<?php echo $stat['color']; ?>-500/10 text-<?php echo $stat['color']; ?>-500 flex items-center justify-center text-2xl">
                                <i class="fas <?php echo $stat['icon']; ?>"></i>
                            </div>
                            <span class="text-green-500 text-sm font-bold flex items-center gap-1 bg-green-500/10 px-2 py-1 rounded-lg">+12%</span>
                        </div>
                        <h4 class="text-gray-500 dark:text-gray-400 text-sm font-bold uppercase tracking-wider mb-1"><?php echo $stat['title']; ?></h4>
                        <p class="text-4xl font-black text-gray-900 dark:text-white"><?php echo $stat['val']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Recent Projects Table Area -->
                <div class="bg-white dark:bg-dark-card rounded-[2.5rem] border border-gray-100 dark:border-dark-border shadow-sm overflow-hidden">
                    <div class="p-8 border-b border-gray-100 dark:border-dark-border flex flex-col sm:flex-row justify-between items-center gap-4">
                        <div>
                            <h3 class="text-2xl font-black">Active Projects</h3>
                            <p class="text-gray-500 font-medium mt-1">Manage your portfolio items currently live.</p>
                        </div>
                        <button class="px-6 py-3 bg-brand-500 hover:bg-brand-400 text-white font-bold rounded-xl transition-all shadow-lg shadow-brand-500/20 flex items-center gap-2">
                            <i class="fas fa-plus"></i> New Project
                        </button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50 dark:bg-dark-bg/50 text-gray-400 dark:text-gray-500 text-xs font-bold uppercase tracking-widest">
                                    <th class="px-8 py-5">Project Information</th>
                                    <th class="px-8 py-5">Stack</th>
                                    <th class="px-8 py-5">Status</th>
                                    <th class="px-8 py-5 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 dark:divide-dark-border">
                                <?php for($i=1; $i<=4; $i++): ?>
                                <tr class="hover:bg-gray-50 dark:hover:bg-dark-bg/50 transition-colors group">
                                    <td class="px-8 py-5">
                                        <div class="flex items-center gap-4">
                                            <div class="w-14 h-14 rounded-xl bg-gray-200 dark:bg-gray-700 overflow-hidden shadow-sm">
                                                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=100&auto=format&fit=crop&sig=<?php echo $i; ?>" class="w-full h-full object-cover">
                                            </div>
                                            <div>
                                                <p class="font-black text-lg text-gray-900 dark:text-white">Enterprise Platform <?php echo $i; ?></p>
                                                <p class="text-sm font-medium text-gray-500">Updated 2 days ago</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-5">
                                        <div class="flex gap-2">
                                            <span class="w-8 h-8 rounded-lg bg-gray-100 dark:bg-dark-bg border border-gray-200 dark:border-dark-border flex items-center justify-center text-sm" title="React"><i class="fab fa-react text-blue-500"></i></span>
                                            <span class="w-8 h-8 rounded-lg bg-gray-100 dark:bg-dark-bg border border-gray-200 dark:border-dark-border flex items-center justify-center text-sm" title="Node"><i class="fab fa-node-js text-green-500"></i></span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-5">
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-green-500/10 text-green-500 text-xs font-bold rounded-lg border border-green-500/20">
                                            <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Live
                                        </span>
                                    </td>
                                    <td class="px-8 py-5 text-right">
                                        <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <button class="w-10 h-10 rounded-xl bg-white dark:bg-dark-bg border border-gray-200 dark:border-dark-border text-gray-500 hover:text-brand-500 hover:border-brand-500 transition-all"><i class="fas fa-edit"></i></button>
                                            <button class="w-10 h-10 rounded-xl bg-white dark:bg-dark-bg border border-gray-200 dark:border-dark-border text-gray-500 hover:text-red-500 hover:border-red-500 transition-all"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
</html>
