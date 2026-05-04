<?php
// includes/footer.php
?>
    <footer class="bg-white dark:bg-[#0a0a0c] border-t border-gray-200 dark:border-dark-border py-12 mt-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-brand-500/5 dark:bg-brand-500/5 pointer-events-none"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-brand-500 flex items-center justify-center text-white font-black shadow-lg shadow-brand-500/20">
                        C
                    </div>
                    <span class="font-black text-xl">Champika Nuwan</span>
                </div>
                
                <div class="flex space-x-6">
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-dark-card flex items-center justify-center text-gray-600 dark:text-gray-400 hover:text-white hover:bg-brand-500 dark:hover:bg-brand-500 hover:shadow-lg hover:shadow-brand-500/30 transition-all duration-300 transform hover:-translate-y-1"><i class="fab fa-github"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-dark-card flex items-center justify-center text-gray-600 dark:text-gray-400 hover:text-white hover:bg-[#0077b5] dark:hover:bg-[#0077b5] hover:shadow-lg hover:shadow-[#0077b5]/30 transition-all duration-300 transform hover:-translate-y-1"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-dark-card flex items-center justify-center text-gray-600 dark:text-gray-400 hover:text-white hover:bg-brand-500 dark:hover:bg-brand-500 hover:shadow-lg hover:shadow-brand-500/30 transition-all duration-300 transform hover:-translate-y-1"><i class="fas fa-globe"></i></a>
                </div>
            </div>
            <div class="text-center text-gray-500 dark:text-gray-500 text-sm font-medium mt-10">
                &copy; <?php echo date('Y'); ?> Champika Nuwan. Engineered with passion.
            </div>
        </div>
    </footer>

    <!-- Three.js (CDN) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <!-- GSAP (CDN) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <!-- Supabase JS Client -->
    <script src="https://cdn.jsdelivr.net/npm/@supabase/supabase-js@2"></script>
    
    <!-- Custom Scripts -->
    <script src="assets/js/main.js"></script>
</body>
</html>
