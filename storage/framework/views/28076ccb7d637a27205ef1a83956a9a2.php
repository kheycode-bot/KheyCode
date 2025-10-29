<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KheyCode - Digital Solutions</title>
    <meta name="description" content="KheyCode delivers cutting-edge web development, mobile apps, AI solutions, and cybersecurity services. Experts in Laravel, Flutter, Python, and modern technologies.">
    <meta name="keywords" content="web development, app development, AI solutions, cybersecurity, Laravel, Flutter, Python, KheyCode">
    <meta name="author" content="KheyCode">
    
    <!-- Open Graph / Social Media Meta Tags -->
    <meta property="og:title" content="KheyCode | Digital Solutions for Your Business">
    <meta property="og:description" content="Professional web, app, AI, and cybersecurity development services">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kheycode.com">
    <meta property="og:image" content="https://kheycode.com/images/og-image.jpg">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://kheycode.com">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
   
    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollToPlugin.min.js"></script>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    
    <style>
        /* Aircraft animations - same as portfolio page */
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
        
        /* WhatsApp button animation */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        #whatsapp-chat a {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body class="font-sans bg-midnight-blue text-white">
    <!-- Navigation -->
    <nav id="main-nav" class="fixed top-0 left-0 w-full py-4 px-8 z-50 bg-midnight-blue/90 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="#home" class="text-2xl font-bold text-white">
                Khey<span class="text-teal">Code</span>
            </a>
            <div class="hidden md:flex space-x-6">
                <a href="#home" class="nav-link">Home</a>
                <a href="#services" class="nav-link">Services</a>
                <a href="#portfolio" class="nav-link">Portfolio</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>
            <button id="mobile-menu-button" class="md:hidden text-2xl text-white">
                ☰
            </button>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-800 mt-2 py-2 rounded-lg">
            <a href="#home" class="block px-4 py-2 text-white hover:bg-gray-700">Home</a>
            <a href="#services" class="block px-4 py-2 text-white hover:bg-gray-700">Services</a>
            <a href="#portfolio" class="block px-4 py-2 text-white hover:bg-gray-700">Portfolio</a>
            <a href="#about" class="block px-4 py-2 text-white hover:bg-gray-700">About</a>
            <a href="#contact" class="block px-4 py-2 text-white hover:bg-gray-700">Contact</a>
        </div>
    </nav>

    <main class="pt-20">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html><?php /**PATH C:\xampp\htdocs\KheyCode\resources\views/layouts/app.blade.php ENDPATH**/ ?>