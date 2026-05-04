// assets/js/main.js

document.addEventListener('DOMContentLoaded', () => {
    // --- Theme Toggle Logic ---
    const html = document.documentElement;
    const themeToggles = [document.getElementById('theme-toggle'), document.getElementById('theme-toggle-mobile')];
    
    // Check local storage or system preference
    if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        html.classList.add('dark');
    } else {
        html.classList.remove('dark');
    }

    themeToggles.forEach(btn => {
        if(!btn) return;
        btn.addEventListener('click', () => {
            html.classList.toggle('dark');
            if (html.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
                if(window.updateThreeJSColor) window.updateThreeJSColor(true);
            } else {
                localStorage.setItem('theme', 'light');
                if(window.updateThreeJSColor) window.updateThreeJSColor(false);
            }
        });
    });

    // --- Mobile Menu Logic ---
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            const icon = mobileMenuBtn.querySelector('i');
            if(mobileMenu.classList.contains('hidden')) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            }
        });
    }

    // --- GSAP Animations ---
    if(typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Fade Up Elements
        gsap.utils.toArray('.gsap-fade-up').forEach(element => {
            gsap.fromTo(element, 
                { y: 60, opacity: 0, autoAlpha: 0 },
                {
                    scrollTrigger: {
                        trigger: element,
                        start: "top 85%",
                        toggleActions: "play none none reverse"
                    },
                    y: 0,
                    opacity: 1,
                    autoAlpha: 1,
                    duration: 1,
                    ease: "power3.out"
                }
            );
        });

        // Slide Right Elements
        gsap.utils.toArray('.gsap-slide-right').forEach(element => {
            gsap.fromTo(element, 
                { x: -60, opacity: 0, autoAlpha: 0 },
                {
                    scrollTrigger: {
                        trigger: element,
                        start: "top 85%",
                        toggleActions: "play none none reverse"
                    },
                    x: 0,
                    opacity: 1,
                    autoAlpha: 1,
                    duration: 1,
                    ease: "power3.out"
                }
            );
        });

        // Slide Left Elements
        gsap.utils.toArray('.gsap-slide-left').forEach(element => {
            gsap.fromTo(element, 
                { x: 60, opacity: 0, autoAlpha: 0 },
                {
                    scrollTrigger: {
                        trigger: element,
                        start: "top 85%",
                        toggleActions: "play none none reverse"
                    },
                    x: 0,
                    opacity: 1,
                    autoAlpha: 1,
                    duration: 1,
                    ease: "power3.out"
                }
            );
        });
    }

    // --- Three.js Background Animation ---
    const container = document.getElementById('canvas-container');
    if (container && typeof THREE !== 'undefined') {
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        
        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2)); // optimize for high dpi
        container.appendChild(renderer.domElement);

        // Create Particles network
        const particlesGeometry = new THREE.BufferGeometry();
        const particlesCount = 800; // Reduced for premium look
        const posArray = new Float32Array(particlesCount * 3);

        for(let i = 0; i < particlesCount * 3; i++) {
            posArray[i] = (Math.random() - 0.5) * 10;
        }

        particlesGeometry.setAttribute('position', new THREE.BufferAttribute(posArray, 3));

        // Initial Theme Check
        const isDark = html.classList.contains('dark');
        const getParticleColor = (dark) => dark ? 0x14b8a6 : 0x0a0a0c; // brand-500 or dark

        // Custom particle texture (round)
        const canvas = document.createElement('canvas');
        canvas.width = 16;
        canvas.height = 16;
        const context = canvas.getContext('2d');
        const gradient = context.createRadialGradient(8, 8, 0, 8, 8, 8);
        gradient.addColorStop(0, 'rgba(255,255,255,1)');
        gradient.addColorStop(1, 'rgba(255,255,255,0)');
        context.fillStyle = gradient;
        context.fillRect(0, 0, 16, 16);
        const texture = new THREE.CanvasTexture(canvas);

        const material = new THREE.PointsMaterial({
            size: 0.04,
            color: getParticleColor(isDark),
            transparent: true,
            opacity: isDark ? 0.8 : 0.2,
            blending: isDark ? THREE.AdditiveBlending : THREE.NormalBlending,
            map: texture,
            depthWrite: false
        });

        const particlesMesh = new THREE.Points(particlesGeometry, material);
        scene.add(particlesMesh);

        camera.position.z = 3;

        // Mouse Interaction
        let mouseX = 0;
        let mouseY = 0;
        let targetX = 0;
        let targetY = 0;
        
        document.addEventListener('mousemove', (event) => {
            mouseX = (event.clientX / window.innerWidth) - 0.5;
            mouseY = (event.clientY / window.innerHeight) - 0.5;
        });

        // Animation Loop
        const clock = new THREE.Clock();

        const animate = () => {
            requestAnimationFrame(animate);
            const elapsedTime = clock.getElapsedTime();

            targetX = mouseX * 0.5;
            targetY = mouseY * 0.5;

            // Smooth mouse follow
            particlesMesh.rotation.y += 0.05 * (targetX - particlesMesh.rotation.y);
            particlesMesh.rotation.x += 0.05 * (targetY - particlesMesh.rotation.x);
            
            // Auto rotation
            particlesMesh.rotation.z += 0.001;

            // Wave effect on particles
            const positions = particlesMesh.geometry.attributes.position.array;
            for(let i = 0; i < particlesCount; i++) {
                const i3 = i * 3;
                const x = particlesGeometry.attributes.position.array[i3];
                // Math.sin(elapsedTime + x) gives a wave effect
                // We just want a tiny jiggle
            }

            renderer.render(scene, camera);
        };

        animate();

        // Resize Handler
        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

        // Expose update color function to theme toggle
        window.updateThreeJSColor = (isDarkTheme) => {
            material.color.setHex(getParticleColor(isDarkTheme));
            material.blending = isDarkTheme ? THREE.AdditiveBlending : THREE.NormalBlending;
            material.opacity = isDarkTheme ? 0.8 : 0.2;
        };
    }
});
