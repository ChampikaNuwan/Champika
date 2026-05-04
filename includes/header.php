<?php
// includes/header.php
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Champika Nuwan | Portfolio</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0fdfa',
                            100: '#ccfbf1',
                            400: '#2dd4bf',
                            500: '#14b8a6',
                            900: '#134e4a',
                        },
                        dark: {
                            bg: '#0a0a0c', /* Deep premium dark */
                            card: '#121418',
                            border: '#1f2229',
                        }
                    }
                }
            }
        }
    </script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-gray-50 dark:bg-dark-bg text-gray-900 dark:text-gray-100 transition-colors duration-300 font-sans antialiased overflow-x-hidden selection:bg-brand-500/30">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 transition-all duration-300 backdrop-blur-xl bg-white/70 dark:bg-dark-bg/70 border-b border-gray-200 dark:border-dark-border" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-brand-400 to-brand-500 flex items-center justify-center text-white font-black text-xl shadow-lg shadow-brand-500/30 group-hover:scale-105 transition-transform duration-300">
                        C
                    </div>
                    <span class="font-black text-xl tracking-wide hidden sm:block bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-gray-600 dark:from-white dark:to-gray-400">Champika</span>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#about" class="text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-brand-500 dark:hover:text-brand-400 transition-colors">About</a>
                    <a href="#skills" class="text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-brand-500 dark:hover:text-brand-400 transition-colors">Skills</a>
                    <a href="#projects" class="text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-brand-500 dark:hover:text-brand-400 transition-colors">Projects</a>
                    <a href="#contact" class="text-sm font-semibold text-gray-600 dark:text-gray-300 hover:text-brand-500 dark:hover:text-brand-400 transition-colors">Contact</a>
                    
                    <!-- Theme Toggle -->
                    <button id="theme-toggle" class="p-2.5 rounded-full bg-gray-100 dark:bg-dark-card hover:bg-gray-200 dark:hover:bg-dark-border transition-colors border border-transparent dark:border-dark-border">
                        <i class="fas fa-moon dark:hidden text-gray-600"></i>
                        <i class="fas fa-sun hidden dark:block text-yellow-400"></i>
                    </button>
                    
                    <!-- Login Button -->
                    <a href="admin/login.php" class="px-6 py-2.5 rounded-full bg-brand-500 hover:bg-brand-400 text-white text-sm font-bold transition-all shadow-lg shadow-brand-500/25 hover:shadow-brand-500/40 hover:-translate-y-0.5">
                        Admin Login
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center gap-4">
                    <button id="theme-toggle-mobile" class="p-2.5 rounded-full bg-gray-100 dark:bg-dark-card hover:bg-gray-200 dark:hover:bg-dark-border transition-colors">
                        <i class="fas fa-moon dark:hidden text-gray-600"></i>
                        <i class="fas fa-sun hidden dark:block text-yellow-400"></i>
                    </button>
                    <button id="mobile-menu-btn" class="text-2xl text-gray-900 dark:text-white focus:outline-none p-2">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white dark:bg-dark-bg border-b border-gray-200 dark:border-dark-border absolute w-full backdrop-blur-xl">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="#about" class="block px-4 py-3 rounded-xl text-base font-medium hover:bg-gray-50 dark:hover:bg-dark-card transition-colors">About</a>
                <a href="#skills" class="block px-4 py-3 rounded-xl text-base font-medium hover:bg-gray-50 dark:hover:bg-dark-card transition-colors">Skills</a>
                <a href="#projects" class="block px-4 py-3 rounded-xl text-base font-medium hover:bg-gray-50 dark:hover:bg-dark-card transition-colors">Projects</a>
                <a href="#contact" class="block px-4 py-3 rounded-xl text-base font-medium hover:bg-gray-50 dark:hover:bg-dark-card transition-colors">Contact</a>
                <a href="admin/login.php" class="block px-4 py-3 rounded-xl text-base font-bold text-brand-500 bg-brand-500/10 mt-4">Admin Login</a>
            </div>
        </div>
    </nav>
