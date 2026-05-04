<?php
// projects.php
require_once 'includes/header.php';
?>

<div class="pt-32 pb-20 bg-gray-50 dark:bg-dark-bg min-h-screen relative overflow-hidden">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand-500/5 rounded-full blur-3xl pointer-events-none z-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="mb-16 text-center gsap-fade-up">
            <h1 class="text-5xl md:text-6xl font-black mb-6">All <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-blue-500">Works.</span></h1>
            <p class="text-gray-600 dark:text-gray-400 text-lg max-w-2xl mx-auto font-medium">Explore my complete portfolio of web applications, platforms, and interactive experiences.</p>
        </div>

        <!-- Filter Categories -->
        <div class="flex flex-wrap justify-center gap-4 mb-16 gsap-fade-up" style="animation-delay: 0.1s;">
            <button class="px-8 py-3 rounded-full bg-brand-500 text-white font-bold text-sm shadow-xl shadow-brand-500/25 transition-transform hover:-translate-y-0.5">All Projects</button>
            <button class="px-8 py-3 rounded-full bg-white dark:bg-dark-card border border-gray-200 dark:border-dark-border text-gray-600 dark:text-gray-400 font-bold text-sm hover:border-brand-500 dark:hover:border-brand-500 hover:text-brand-500 dark:hover:text-brand-500 transition-all hover:shadow-lg hover:-translate-y-0.5">Web Apps</button>
            <button class="px-8 py-3 rounded-full bg-white dark:bg-dark-card border border-gray-200 dark:border-dark-border text-gray-600 dark:text-gray-400 font-bold text-sm hover:border-brand-500 dark:hover:border-brand-500 hover:text-brand-500 dark:hover:text-brand-500 transition-all hover:shadow-lg hover:-translate-y-0.5">UI/UX Design</button>
            <button class="px-8 py-3 rounded-full bg-white dark:bg-dark-card border border-gray-200 dark:border-dark-border text-gray-600 dark:text-gray-400 font-bold text-sm hover:border-brand-500 dark:hover:border-brand-500 hover:text-brand-500 dark:hover:text-brand-500 transition-all hover:shadow-lg hover:-translate-y-0.5">Backend</button>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $projectNames = ['Swarna Advertising', 'STEM Cave', 'E-Commerce Plus', 'Analytics Dashboard', 'Social Network API', 'Portfolio V1'];
            for($i=0; $i<6; $i++): 
            ?>
            <a href="#" class="group block relative rounded-3xl overflow-hidden aspect-video gsap-fade-up shadow-xl bg-gray-100 dark:bg-dark-card border border-gray-200 dark:border-dark-border/50" style="animation-delay: <?php echo ($i*0.1); ?>s;">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent z-10 opacity-80 group-hover:opacity-95 transition-opacity duration-500"></div>
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600&auto=format&fit=crop&sig=<?php echo $i; ?>" alt="Project <?php echo $i; ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-1000">
                
                <div class="absolute top-4 right-4 z-20 w-10 h-10 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500 transform group-hover:rotate-45">
                    <i class="fas fa-arrow-up"></i>
                </div>

                <div class="absolute bottom-0 left-0 right-0 p-6 z-20 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <span class="text-brand-400 text-xs font-bold tracking-widest uppercase mb-2 block">Case Study</span>
                    <h4 class="text-2xl font-black text-white"><?php echo $projectNames[$i]; ?></h4>
                </div>
            </a>
            <?php endfor; ?>
        </div>
        
        <div class="mt-16 text-center gsap-fade-up">
            <button class="px-8 py-4 rounded-full border-2 border-gray-200 dark:border-dark-border text-gray-600 dark:text-gray-400 font-bold hover:border-brand-500 hover:text-brand-500 transition-colors">
                Load More Projects <i class="fas fa-sync-alt ml-2"></i>
            </button>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
