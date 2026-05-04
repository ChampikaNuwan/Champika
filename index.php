<?php
// index.php
require_once 'includes/header.php';
?>

<!-- Hero Section with Three.js Background -->
<section id="hero" class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
    <!-- Three.js Canvas Container -->
    <div id="canvas-container" class="absolute inset-0 z-0 opacity-50 dark:opacity-70 mix-blend-screen"></div>
    
    <!-- Hero Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center mt-10">
        <div class="inline-flex items-center gap-2 mb-6 px-5 py-2 rounded-full border border-brand-500/30 bg-brand-500/10 text-brand-500 text-sm font-bold backdrop-blur-md gsap-fade-up">
            <span class="relative flex h-3 w-3">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-400 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-3 w-3 bg-brand-500"></span>
            </span>
            Available for new opportunities
        </div>
        
        <h1 class="text-6xl md:text-8xl lg:text-[7rem] font-black mb-6 tracking-tighter leading-[1.1] gsap-fade-up text-gray-900 dark:text-white" style="animation-delay: 0.1s;">
            Creative <br />
            <span class="text-gradient">Engineer.</span>
        </h1>
        
        <p class="mt-4 text-lg md:text-2xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto mb-12 gsap-fade-up font-medium" style="animation-delay: 0.2s;">
            I build premium, high-performance web experiences bridging the gap between cutting-edge engineering and immersive design.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-5 gsap-fade-up" style="animation-delay: 0.3s;">
            <a href="#projects" class="px-10 py-4 rounded-full bg-brand-500 hover:bg-brand-400 text-white font-bold transition-all duration-300 shadow-xl shadow-brand-500/30 hover:shadow-brand-500/50 hover:-translate-y-1 flex items-center justify-center gap-2">
                Explore Work <i class="fas fa-arrow-right"></i>
            </a>
            <a href="#contact" class="px-10 py-4 rounded-full border border-gray-300 dark:border-dark-border hover:border-brand-500 dark:hover:border-brand-500 font-bold transition-all duration-300 hover:text-brand-500 bg-white/50 dark:bg-dark-bg/50 backdrop-blur-md flex items-center justify-center">
                Contact Me
            </a>
        </div>
    </div>

    <!-- Decorative Elements -->
    <div class="absolute top-1/4 -left-20 w-72 h-72 bg-brand-500 rounded-full mix-blend-multiply filter blur-[128px] opacity-20 animate-float z-0"></div>
    <div class="absolute bottom-1/4 -right-20 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-[128px] opacity-20 animate-float z-0" style="animation-delay: 2s;"></div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-2 z-10 gsap-fade-up" style="animation-delay: 0.5s;">
        <span class="text-xs font-bold text-gray-400 tracking-widest uppercase">Scroll</span>
        <div class="w-[30px] h-[50px] rounded-full border-2 border-gray-300 dark:border-gray-700 flex justify-center p-1">
            <div class="w-1.5 h-3 bg-brand-500 rounded-full animate-bounce"></div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-32 bg-white dark:bg-dark-card relative border-y border-gray-100 dark:border-dark-border/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div class="gsap-slide-right relative order-2 lg:order-1">
                <div class="relative w-full aspect-[4/5] rounded-3xl overflow-hidden shadow-2xl group">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent z-10 opacity-60 group-hover:opacity-40 transition-opacity duration-500"></div>
                    <!-- Real Professional Portrait Placeholder -->
                    <img src="https://images.unsplash.com/photo-1556157382-97eda2d62296?q=80&w=1000&auto=format&fit=crop" alt="Champika Nuwan" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    <div class="absolute bottom-8 left-8 z-20">
                        <div class="bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl flex items-center gap-4">
                            <div class="w-12 h-12 bg-brand-500 rounded-full flex items-center justify-center text-white text-xl">
                                <i class="fas fa-code"></i>
                            </div>
                            <div>
                                <p class="text-white font-bold">Champika Nuwan</p>
                                <p class="text-gray-300 text-sm">Full-Stack Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Decorative pattern behind image -->
                <div class="absolute -z-10 -bottom-10 -left-10 w-full h-full border-2 border-brand-500/20 rounded-3xl"></div>
            </div>
            
            <div class="gsap-slide-left order-1 lg:order-2">
                <div class="inline-flex items-center gap-2 mb-4">
                    <span class="w-8 h-1 bg-brand-500 rounded-full"></span>
                    <h2 class="text-sm font-bold text-brand-500 uppercase tracking-widest">The Architect</h2>
                </div>
                <h3 class="text-4xl md:text-5xl font-black mb-8 leading-tight">Crafting digital <br /> <span class="text-gray-400 dark:text-gray-500">masterpieces.</span></h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6 text-lg leading-relaxed font-medium">
                    I specialize in building robust web applications that not only function flawlessly but also deliver an exceptional, visually stunning user experience.
                </p>
                <p class="text-gray-600 dark:text-gray-400 mb-10 text-lg leading-relaxed font-medium">
                    With a deep understanding of Vanilla PHP, modern JS frameworks, and database architecture via Supabase, I deliver end-to-end solutions tailored to scale.
                </p>
                
                <div class="grid grid-cols-2 gap-8">
                    <div class="p-6 rounded-2xl bg-gray-50 dark:bg-dark-bg border border-gray-100 dark:border-dark-border">
                        <h4 class="text-5xl font-black text-brand-500 mb-2 font-mono">5+</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-bold uppercase tracking-wide">Years Experience</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-gray-50 dark:bg-dark-bg border border-gray-100 dark:border-dark-border">
                        <h4 class="text-5xl font-black text-brand-500 mb-2 font-mono">50+</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-400 font-bold uppercase tracking-wide">Projects Done</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-32 relative overflow-hidden bg-gray-50 dark:bg-dark-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20 gsap-fade-up">
            <div class="inline-flex items-center gap-2 mb-4 justify-center">
                <span class="w-8 h-1 bg-brand-500 rounded-full"></span>
                <h2 class="text-sm font-bold text-brand-500 uppercase tracking-widest">My Arsenal</h2>
                <span class="w-8 h-1 bg-brand-500 rounded-full"></span>
            </div>
            <h3 class="text-4xl md:text-5xl font-black">Technical Proficiency</h3>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $skills = [
                ['name' => 'Frontend Magic', 'icon' => 'fa-laptop-code', 'desc' => 'HTML5, Tailwind CSS, Vanilla JS, GSAP, Three.js'],
                ['name' => 'Backend Core', 'icon' => 'fa-server', 'desc' => 'Vanilla PHP, API Architecture, Secure Routing'],
                ['name' => 'Database', 'icon' => 'fa-database', 'desc' => 'Supabase, PostgreSQL, Real-time integrations'],
                ['name' => 'UI/UX Design', 'icon' => 'fa-pen-nib', 'desc' => 'Figma, Wireframing, High-fidelity Prototyping']
            ];
            foreach($skills as $index => $skill):
            ?>
            <div class="group p-8 rounded-3xl bg-white dark:bg-dark-card border border-gray-100 dark:border-dark-border hover:border-brand-500/50 hover:shadow-2xl hover:shadow-brand-500/10 transition-all duration-500 transform hover:-translate-y-2 gsap-fade-up" style="animation-delay: <?php echo $index * 0.1; ?>s;">
                <div class="w-16 h-16 rounded-2xl bg-gray-50 dark:bg-dark-bg flex items-center justify-center text-gray-400 dark:text-gray-500 text-3xl mb-8 group-hover:bg-brand-500 group-hover:text-white transition-all duration-500 shadow-inner">
                    <i class="fas <?php echo $skill['icon']; ?>"></i>
                </div>
                <h4 class="text-xl font-black mb-3 text-gray-900 dark:text-white"><?php echo $skill['name']; ?></h4>
                <p class="text-gray-600 dark:text-gray-400 font-medium leading-relaxed"><?php echo $skill['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section id="projects" class="py-32 bg-white dark:bg-dark-card border-y border-gray-100 dark:border-dark-border/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-6 gsap-fade-up">
            <div>
                <div class="inline-flex items-center gap-2 mb-4">
                    <span class="w-8 h-1 bg-brand-500 rounded-full"></span>
                    <h2 class="text-sm font-bold text-brand-500 uppercase tracking-widest">Portfolio</h2>
                </div>
                <h3 class="text-4xl md:text-5xl font-black">Featured Works</h3>
            </div>
            <a href="projects.php" class="inline-flex items-center gap-3 px-6 py-3 rounded-full border border-gray-200 dark:border-dark-border font-bold hover:bg-gray-50 dark:hover:bg-dark-bg transition-colors">
                View All Archives <i class="fas fa-arrow-right text-brand-500"></i>
            </a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Project 1 -->
            <a href="#" class="group block relative rounded-3xl overflow-hidden aspect-[4/3] gsap-fade-up shadow-2xl">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent z-10 opacity-80 group-hover:opacity-90 transition-opacity duration-500"></div>
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1000&auto=format&fit=crop" alt="Project 1" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000">
                
                <div class="absolute top-6 left-6 z-20 flex gap-2">
                    <span class="px-4 py-1.5 bg-white/10 backdrop-blur-md rounded-full text-white text-xs font-bold border border-white/20">PHP</span>
                    <span class="px-4 py-1.5 bg-brand-500/20 backdrop-blur-md rounded-full text-brand-300 text-xs font-bold border border-brand-500/30">Supabase</span>
                </div>
                
                <div class="absolute bottom-0 left-0 right-0 p-8 z-20 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <span class="text-brand-400 text-sm font-bold tracking-widest uppercase mb-3 block">Web Platform</span>
                    <h4 class="text-3xl font-black text-white mb-2">Swarna Advertising</h4>
                    <p class="text-gray-300 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 font-medium">A complete real-time ad management dashboard.</p>
                </div>
            </a>
            
            <!-- Project 2 -->
            <a href="#" class="group block relative rounded-3xl overflow-hidden aspect-[4/3] gsap-fade-up shadow-2xl" style="animation-delay: 0.2s;">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40 to-transparent z-10 opacity-80 group-hover:opacity-90 transition-opacity duration-500"></div>
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000&auto=format&fit=crop" alt="Project 2" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000">
                
                <div class="absolute top-6 left-6 z-20 flex gap-2">
                    <span class="px-4 py-1.5 bg-white/10 backdrop-blur-md rounded-full text-white text-xs font-bold border border-white/20">Three.js</span>
                    <span class="px-4 py-1.5 bg-brand-500/20 backdrop-blur-md rounded-full text-brand-300 text-xs font-bold border border-brand-500/30">GSAP</span>
                </div>
                
                <div class="absolute bottom-0 left-0 right-0 p-8 z-20 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                    <span class="text-brand-400 text-sm font-bold tracking-widest uppercase mb-3 block">Educational Hub</span>
                    <h4 class="text-3xl font-black text-white mb-2">STEM Cave</h4>
                    <p class="text-gray-300 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100 font-medium">Immersive 3D educational platform UI/UX.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-32 relative overflow-hidden bg-gray-50 dark:bg-dark-bg">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-brand-500/5 rounded-full blur-3xl z-0 pointer-events-none"></div>
    
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 mb-4 justify-center gsap-fade-up">
                <span class="w-8 h-1 bg-brand-500 rounded-full"></span>
                <h2 class="text-sm font-bold text-brand-500 uppercase tracking-widest">Get In Touch</h2>
                <span class="w-8 h-1 bg-brand-500 rounded-full"></span>
            </div>
            <h3 class="text-5xl md:text-6xl font-black mb-6 gsap-fade-up">Let's build something <br/> <span class="text-gradient">amazing.</span></h3>
        </div>
        
        <div class="bg-white dark:bg-dark-card p-8 md:p-14 rounded-[2.5rem] shadow-2xl border border-gray-100 dark:border-dark-border gsap-fade-up">
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-3">Your Name</label>
                        <input type="text" class="w-full bg-gray-50 dark:bg-dark-bg border border-gray-200 dark:border-dark-border rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all font-medium" placeholder="John Doe">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-3">Email Address</label>
                        <input type="email" class="w-full bg-gray-50 dark:bg-dark-bg border border-gray-200 dark:border-dark-border rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all font-medium" placeholder="john@example.com">
                    </div>
                </div>
                <div class="mb-8">
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-3">Message</label>
                    <textarea rows="5" class="w-full bg-gray-50 dark:bg-dark-bg border border-gray-200 dark:border-dark-border rounded-2xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-brand-500 focus:border-transparent transition-all resize-none font-medium" placeholder="Tell me about your project..."></textarea>
                </div>
                <button type="button" class="w-full bg-brand-500 hover:bg-brand-400 text-white font-bold py-5 rounded-2xl transition-all shadow-xl shadow-brand-500/25 hover:shadow-brand-500/40 text-lg flex justify-center items-center gap-2">
                    Send Message <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
