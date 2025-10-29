<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore KheyCode's portfolio of web, app, AI, and cybersecurity projects. See our work in Laravel, Flutter, Python, and more.">
    <title>KheyCode - Portfolio</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- GSAP for smooth scrolling -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>
    <style>
        /* Custom animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
        
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Card hover effects */
        .portfolio-item { transition: all 0.3s ease; }
        .portfolio-card-inner:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }
        
        /* Active filter button */
        .filter-btn.active {
            box-shadow: 0 4px 15px rgba(46, 196, 182, 0.3);
        }
        
        /* Aircraft animations - 12 planes with 6 different flight paths */
        @keyframes flyRight {
            0% { transform: translateX(-100px) translateY(var(--start-y)) rotate(-5deg); }
            100% { transform: translateX(calc(100vw + 100px)) translateY(var(--end-y)) rotate(5deg); }
        }
        
        @keyframes flyLeft {
            0% { transform: translateX(calc(100vw + 100px)) translateY(var(--start-y)) rotate(185deg); }
            100% { transform: translateX(-100px) translateY(var(--end-y)) rotate(175deg); }
        }
        
        @keyframes flyDiagonalDown {
            0% { transform: translateX(-100px) translateY(-100px) rotate(-45deg); }
            100% { transform: translateX(calc(100vw + 100px)) translateY(calc(100vh + 100px)) rotate(-35deg); }
        }
        
        @keyframes flyDiagonalUp {
            0% { transform: translateX(calc(100vw + 100px)) translateY(calc(100vh + 100px)) rotate(225deg); }
            100% { transform: translateX(-100px) translateY(-100px) rotate(215deg); }
        }
        
        @keyframes flyCurveRight {
            0% { transform: translateX(-100px) translateY(20vh) rotate(-10deg); }
            50% { transform: translateX(50vw) translateY(10vh) rotate(0deg); }
            100% { transform: translateX(calc(100vw + 100px)) translateY(30vh) rotate(10deg); }
        }
        
        @keyframes flyCurveLeft {
            0% { transform: translateX(calc(100vw + 100px)) translateY(70vh) rotate(190deg); }
            50% { transform: translateX(50vw) translateY(80vh) rotate(180deg); }
            100% { transform: translateX(-100px) translateY(60vh) rotate(170deg); }
        }
        
        .aircraft {
            position: absolute;
            width: var(--size);
            height: calc(var(--size) * 0.4);
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23ffffff' opacity='0.1'%3E%3Cpath d='M22 16.21v-1.895L14 8V4a2 2 0 0 0-4 0v4l-8 6.315v1.895l8-2.526V18l-2 2v1h6v-1l-2-2v-4.316l8 2.526z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-size: contain;
            z-index: 1;
            animation: var(--animation) var(--duration) linear infinite;
            animation-delay: var(--delay);
        }
        
        /* Aircraft fleet */
        .aircraft-1 { --animation: flyRight; --duration: 25s; --delay: 0s; --size: 60px; --start-y: 15%; --end-y: 5%; }
        .aircraft-2 { --animation: flyRight; --duration: 30s; --delay: 8s; --size: 80px; --start-y: 25%; --end-y: 35%; }
        .aircraft-3 { --animation: flyLeft; --duration: 28s; --delay: 3s; --size: 70px; --start-y: 30%; --end-y: 20%; }
        .aircraft-4 { --animation: flyLeft; --duration: 32s; --delay: 12s; --size: 50px; --start-y: 80%; --end-y: 70%; }
        .aircraft-5 { --animation: flyDiagonalDown; --duration: 35s; --delay: 5s; --size: 80px; }
        .aircraft-6 { --animation: flyDiagonalUp; --duration: 40s; --delay: 15s; --size: 90px; }
        .aircraft-7 { --animation: flyCurveRight; --duration: 45s; --delay: 2s; --size: 65px; }
        .aircraft-8 { --animation: flyCurveLeft; --duration: 38s; --delay: 10s; --size: 75px; }
        .aircraft-9 { --animation: flyRight; --duration: 27s; --delay: 7s; --size: 55px; --start-y: 65%; --end-y: 55%; }
        .aircraft-10 { --animation: flyLeft; --duration: 33s; --delay: 18s; --size: 85px; --start-y: 45%; --end-y: 55%; }
        .aircraft-11 { --animation: flyDiagonalDown; --duration: 42s; --delay: 9s; --size: 70px; }
        .aircraft-12 { --animation: flyDiagonalUp; --duration: 37s; --delay: 22s; --size: 60px; }
        .aircraft-13 { --animation: flyLeft; --duration: 33s; --delay: 18s; --size: 85px; --start-y: 45%; --end-y: 55%; }
        .aircraft-14 { --animation: flyCurveLeft; --duration: 38s; --delay: 10s; --size: 75px; }
        .aircraft-15 { --animation: flyLeft; --duration: 28s; --delay: 3s; --size: 70px; --start-y: 30%; --end-y: 20%; }
        .aircraft-16 { --animation: flyDiagonalDown; --duration: 42s; --delay: 9s; --size: 70px; }
        .aircraft-17 { --animation: flyRight; --duration: 25s; --delay: 0s; --size: 60px; --start-y: 15%; --end-y: 5%; }
        .aircraft-18 { --animation: flyLeft; --duration: 28s; --delay: 3s; --size: 70px; --start-y: 30%; --end-y: 20%; }
        .aircraft-19 { --animation: flyDiagonalDown; --duration: 42s; --delay: 9s; --size: 70px; }
        .aircraft-20 { --animation: flyCurveRight; --duration: 45s; --delay: 2s; --size: 65px; }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">
    <!-- Navigation -->
    <nav id="main-nav" class="fixed top-0 left-0 w-full py-4 px-8 z-50 bg-gray-900/90 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-white">
                Khey<span class="text-teal-400">Code</span>
            </a>
            <div class="hidden md:flex space-x-6">
                <a href="/" class="px-3 py-2 text-white hover:text-teal-400 transition-colors">Back to Homepage</a>
            </div>
            <button id="mobile-menu-button" class="md:hidden text-2xl text-white">
                ☰
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-800 mt-2 py-2 rounded-lg">
            <a href="/" class="block px-4 py-2 text-white hover:bg-gray-700">Back to Homepage</a>
        </div>
    </nav>

    <!-- Portfolio Section -->
    <section id="portfolio" class="relative py-20 px-6 min-h-screen bg-gray-900 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-950"></div>
            <!-- 20 Aircraft Animations -->
            <div class="aircraft aircraft-1"></div>
            <div class="aircraft aircraft-2"></div>
            <div class="aircraft aircraft-3"></div>
            <div class="aircraft aircraft-4"></div>
            <div class="aircraft aircraft-5"></div>
            <div class="aircraft aircraft-6"></div>
            <div class="aircraft aircraft-7"></div>
            <div class="aircraft aircraft-8"></div>
            <div class="aircraft aircraft-9"></div>
            <div class="aircraft aircraft-10"></div>
            <div class="aircraft aircraft-11"></div>
            <div class="aircraft aircraft-12"></div>
            <div class="aircraft aircraft-13"></div>
            <div class="aircraft aircraft-14"></div>
            <div class="aircraft aircraft-15"></div>
            <div class="aircraft aircraft-16"></div>
            <div class="aircraft aircraft-17"></div>
            <div class="aircraft aircraft-18"></div>
            <div class="aircraft aircraft-19"></div>
            <div class="aircraft aircraft-20"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <!-- Portfolio Header -->
            <div class="text-center mb-16 pt-16">
                <h1 class="text-5xl font-bold mb-4 text-white">Our Projects</h1>
                <div class="w-32 h-1 bg-teal-400 mx-auto mb-10"></div>
                
                <!-- Filter Navigation - Added Cybersecurity button -->
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <button type="button" data-category="all" class="filter-btn active px-6 py-3 rounded-full bg-teal-400/20 text-teal-400 border border-teal-400 transition-all hover:bg-teal-400/30">All Projects</button>
                    <button type="button" data-category="web" class="filter-btn px-6 py-3 rounded-full bg-white/5 text-white border border-white/10 transition-all hover:bg-white/10">Web Development</button>
                    <button type="button" data-category="app" class="filter-btn px-6 py-3 rounded-full bg-white/5 text-white border border-white/10 transition-all hover:bg-white/10">App Development</button>
                    <button type="button" data-category="ai" class="filter-btn px-6 py-3 rounded-full bg-white/5 text-white border border-white/10 transition-all hover:bg-white/10">AI/ML Solutions</button>
                     <button type="button" data-category="cyber" class="filter-btn px-6 py-3 rounded-full bg-white/5 text-white border border-white/10 transition-all hover:bg-white/10">Cybersecurity</button>
                    <button type="button" data-category="design" class="filter-btn px-6 py-3 rounded-full bg-white/5 text-white border border-white/10 transition-all hover:bg-white/10">Graphic Design</button>
                   
                </div>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Web Project 1 -->
                <div class="portfolio-item web" data-category="web">
                    <div class="portfolio-card-inner group bg-white/5 backdrop-blur-sm rounded-xl overflow-hidden border border-white/10 hover:border-teal-400/50 transition-all duration-300 h-full flex flex-col">
                        <div class="overflow-hidden h-64 relative">
                           <img src="{{ asset('images/web-project1.png') }}"  
                                 alt="E-Commerce Platform" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <a href="https://example.com/ecommerce" target="_blank" class="inline-flex items-center px-4 py-2 bg-teal-400 text-white rounded-lg hover:bg-teal-500 transition-all">
                                    View Project
                                </a>
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-white">E-Commerce Platform</h3>
                                <span class="px-3 py-1 bg-teal-400/20 text-teal-400 text-xs rounded-full">Web</span>
                            </div>
                            <p class="text-gray-300 mb-4">Complete online store with payment integration and inventory management.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Laravel</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Javascript</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Tailwind CSS</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs">HTML/CSS</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- App Project 1 -->
                <div class="portfolio-item app" data-category="app">
                    <div class="portfolio-card-inner group bg-white/5 backdrop-blur-sm rounded-xl overflow-hidden border border-white/10 hover:border-teal-400/50 transition-all duration-300 h-full flex flex-col">
                        <div class="overflow-hidden h-64 relative">
                           <img src="{{ asset('images/app-project1.png') }}"  
                                 alt="Fitness Tracker" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <a href="https://apps.apple.com/pk/app/property-wise/id6748263664" target="_blank" class="inline-flex items-center px-4 py-2 bg-teal-400 text-white rounded-lg hover:bg-teal-500 transition-all">
                                    View Project
                                </a>
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-white">Property Wise</h3>
                                <span class="px-3 py-1 bg-teal-400/20 text-teal-400 text-xs rounded-full">App</span>
                            </div>
                            <p class="text-gray-300 mb-4">Discover, review, and explore properties with real insights from real users. Find your perfect place with Property Review – the smarter way to rent or buy.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Flutter</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Firebase</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AI Project 1 -->
                <div class="portfolio-item ai" data-category="ai">
                    <div class="portfolio-card-inner group bg-white/5 backdrop-blur-sm rounded-xl overflow-hidden border border-white/10 hover:border-teal-400/50 transition-all duration-300 h-full flex flex-col">
                        <div class="overflow-hidden h-64 relative">
                             <img src="{{ asset('images/ml-project1.png') }}" 
                                 alt="AI Chatbot" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <a href="https://github.com/kheycode-bot/Movie-Recommendation-System-Content-Based-.git" target="_blank" class="inline-flex items-center px-4 py-2 bg-teal-400 text-white rounded-lg hover:bg-teal-500 transition-all">
                                    View Project
                                </a>
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-white">Movie Recommendation System</h3>
                                <span class="px-3 py-1 bg-teal-400/20 text-teal-400 text-xs rounded-full">AI/ML</span>
                            </div>
                            <p class="text-gray-300 mb-4">Streamlit-based movie recommender using content filtering and cosine similarity, enhanced with real-time poster fetching via TMDB API.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Python</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs">TMDB</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Streamlit</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Design Project 1 -->
                <div class="portfolio-item design" data-category="design">
                    <div class="portfolio-card-inner group bg-white/5 backdrop-blur-sm rounded-xl overflow-hidden border border-white/10 hover:border-teal-400/50 transition-all duration-300 h-full flex flex-col">
                        <div class="overflow-hidden h-64 relative">
                           <img src="{{ asset('images/logo.png') }}" 
                                 alt="Brand Identity" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                <a href="https://example.com/branding" target="_blank" class="inline-flex items-center px-4 py-2 bg-teal-400 text-white rounded-lg hover:bg-teal-500 transition-all">
                                    View Project
                                </a>
                            </div>
                        </div>
                        <div class="p-6 flex-grow">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-xl font-bold text-white">KheyCode</h3>
                                <span class="px-3 py-1 bg-teal-400/20 text-teal-400 text-xs rounded-full">Design</span>
                            </div>
                            <p class="text-gray-300 mb-4">Complete brand identity including logo, colors, and typography.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Illustrator</span>
                                <span class="px-3 py-1 bg-white/10 rounded-full text-xs">Photoshop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                const filterValue = this.dataset.category;
                
                // Filter items
                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.dataset.category === filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
            });
        });
    });
    </script>
</body>
</html>