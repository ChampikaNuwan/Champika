<?php
// admin/login.php
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Champika Nuwan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    <style>
        body { background-color: #0a0a0c; }
    </style>
</head>
<body class="text-gray-100 font-sans antialiased min-h-screen flex items-center justify-center relative overflow-hidden">
    
    <!-- Background Glow -->
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-brand-500/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="w-full max-w-md p-6 relative z-10">
        <div class="text-center mb-10">
            <div class="w-20 h-20 rounded-3xl bg-gradient-to-br from-brand-400 to-brand-500 flex items-center justify-center text-white font-black text-4xl shadow-2xl shadow-brand-500/40 mx-auto mb-6">
                C
            </div>
            <h1 class="text-4xl font-black text-white">System Access</h1>
            <p class="text-gray-400 mt-3 font-medium text-lg">Secure authentication required.</p>
        </div>

        <div class="bg-dark-card/80 backdrop-blur-xl border border-white/5 rounded-[2rem] p-8 sm:p-10 shadow-2xl">
            <form action="index.php" method="GET">
                <div class="mb-6">
                    <label class="block text-sm font-bold text-gray-300 mb-2">Identifier</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-500">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <input type="email" class="w-full bg-dark-bg/50 border border-dark-border rounded-2xl pl-12 pr-4 py-4 focus:outline-none focus:ring-2 focus:ring-brand-500 text-white font-medium transition-all" placeholder="admin@champika.dev" required>
                    </div>
                </div>
                <div class="mb-8">
                    <div class="flex justify-between items-center mb-2">
                        <label class="block text-sm font-bold text-gray-300">Security Key</label>
                        <a href="#" class="text-xs font-bold text-brand-500 hover:text-brand-400">Forgot?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-500">
                            <i class="fas fa-lock"></i>
                        </div>
                        <input type="password" class="w-full bg-dark-bg/50 border border-dark-border rounded-2xl pl-12 pr-4 py-4 focus:outline-none focus:ring-2 focus:ring-brand-500 text-white font-medium transition-all" placeholder="••••••••" required>
                    </div>
                </div>
                <button type="submit" class="w-full bg-brand-500 hover:bg-brand-400 text-white font-bold py-4 rounded-2xl transition-all shadow-xl shadow-brand-500/25 flex items-center justify-center gap-2 hover:-translate-y-0.5 text-lg">
                    Authenticate <i class="fas fa-fingerprint"></i>
                </button>
            </form>
            <div class="mt-8 text-center">
                <a href="../index.php" class="text-sm font-bold text-gray-500 hover:text-white transition-colors flex items-center justify-center gap-2">
                    <i class="fas fa-arrow-left"></i> Return to Portal
                </a>
            </div>
        </div>
    </div>

</body>
</html>
