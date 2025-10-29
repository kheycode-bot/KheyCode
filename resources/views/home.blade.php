@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-midnight-blue">
    <!-- Particle Background -->
    <div id="particles-js" class="absolute inset-0 z-10"></div>
    
    <!-- 50 Aircraft Animations -->
    <div class="absolute inset-0 z-1 overflow-hidden">
        <!-- Aircraft 1-20 -->
        <div class="aircraft aircraft-1" style="--animation: flyRight; --duration: 25s; --delay: 0s; --size: 60px; --start-y: 15%; --end-y: 5%;"></div>
        <div class="aircraft aircraft-2" style="--animation: flyRight; --duration: 30s; --delay: 8s; --size: 80px; --start-y: 25%; --end-y: 35%;"></div>
        <div class="aircraft aircraft-3" style="--animation: flyLeft; --duration: 28s; --delay: 3s; --size: 70px; --start-y: 30%; --end-y: 20%;"></div>
        <div class="aircraft aircraft-4" style="--animation: flyLeft; --duration: 32s; --delay: 12s; --size: 50px; --start-y: 80%; --end-y: 70%;"></div>
        <div class="aircraft aircraft-5" style="--animation: flyDiagonalDown; --duration: 35s; --delay: 5s; --size: 80px;"></div>
        <div class="aircraft aircraft-6" style="--animation: flyDiagonalUp; --duration: 40s; --delay: 15s; --size: 90px;"></div>
        <div class="aircraft aircraft-7" style="--animation: flyCurveRight; --duration: 45s; --delay: 2s; --size: 65px;"></div>
        <div class="aircraft aircraft-8" style="--animation: flyCurveLeft; --duration: 38s; --delay: 10s; --size: 75px;"></div>
        <div class="aircraft aircraft-9" style="--animation: flyRight; --duration: 27s; --delay: 7s; --size: 55px; --start-y: 65%; --end-y: 55%;"></div>
        <div class="aircraft aircraft-10" style="--animation: flyLeft; --duration: 33s; --delay: 18s; --size: 85px; --start-y: 45%; --end-y: 55%;"></div>
        <div class="aircraft aircraft-11" style="--animation: flyDiagonalDown; --duration: 42s; --delay: 9s; --size: 70px;"></div>
        <div class="aircraft aircraft-12" style="--animation: flyDiagonalUp; --duration: 37s; --delay: 22s; --size: 60px;"></div>
        <div class="aircraft aircraft-13" style="--animation: flyLeft; --duration: 33s; --delay: 18s; --size: 85px; --start-y: 45%; --end-y: 55%;"></div>
        <div class="aircraft aircraft-14" style="--animation: flyCurveLeft; --duration: 38s; --delay: 10s; --size: 75px;"></div>
        <div class="aircraft aircraft-15" style="--animation: flyLeft; --duration: 28s; --delay: 3s; --size: 70px; --start-y: 30%; --end-y: 20%;"></div>
        <div class="aircraft aircraft-16" style="--animation: flyDiagonalDown; --duration: 42s; --delay: 9s; --size: 70px;"></div>
        <div class="aircraft aircraft-17" style="--animation: flyRight; --duration: 25s; --delay: 0s; --size: 60px; --start-y: 15%; --end-y: 5%;"></div>
        <div class="aircraft aircraft-18" style="--animation: flyLeft; --duration: 28s; --delay: 3s; --size: 70px; --start-y: 30%; --end-y: 20%;"></div>
        <div class="aircraft aircraft-19" style="--animation: flyDiagonalDown; --duration: 42s; --delay: 9s; --size: 70px;"></div>
        <div class="aircraft aircraft-20" style="--animation: flyCurveRight; --duration: 45s; --delay: 2s; --size: 65px;"></div>
        
        <!-- Aircraft 21-50 -->
        <div class="aircraft aircraft-21" style="--animation: flyRight; --duration: 26s; --delay: 1s; --size: 62px; --start-y: 18%; --end-y: 8%;"></div>
        <div class="aircraft aircraft-22" style="--animation: flyLeft; --duration: 31s; --delay: 4s; --size: 72px; --start-y: 40%; --end-y: 30%;"></div>
        <div class="aircraft aircraft-23" style="--animation: flyDiagonalDown; --duration: 34s; --delay: 6s; --size: 58px;"></div>
        <div class="aircraft aircraft-24" style="--animation: flyDiagonalUp; --duration: 39s; --delay: 16s; --size: 82px;"></div>
        <div class="aircraft aircraft-25" style="--animation: flyCurveRight; --duration: 44s; --delay: 3s; --size: 68px;"></div>
        <div class="aircraft aircraft-26" style="--animation: flyCurveLeft; --duration: 37s; --delay: 11s; --size: 77px;"></div>
        <div class="aircraft aircraft-27" style="--animation: flyRight; --duration: 29s; --delay: 8s; --size: 53px; --start-y: 60%; --end-y: 50%;"></div>
        <div class="aircraft aircraft-28" style="--animation: flyLeft; --duration: 34s; --delay: 19s; --size: 88px; --start-y: 48%; --end-y: 58%;"></div>
        <div class="aircraft aircraft-29" style="--animation: flyDiagonalDown; --duration: 41s; --delay: 10s; --size: 73px;"></div>
        <div class="aircraft aircraft-30" style="--animation: flyDiagonalUp; --duration: 36s; --delay: 23s; --size: 63px;"></div>
        <div class="aircraft aircraft-31" style="--animation: flyLeft; --duration: 32s; --delay: 17s; --size: 87px; --start-y: 42%; --end-y: 52%;"></div>
        <div class="aircraft aircraft-32" style="--animation: flyCurveLeft; --duration: 39s; --delay: 9s; --size: 74px;"></div>
        <div class="aircraft aircraft-33" style="--animation: flyLeft; --duration: 27s; --delay: 4s; --size: 69px; --start-y: 35%; --end-y: 25%;"></div>
        <div class="aircraft aircraft-34" style="--animation: flyDiagonalDown; --duration: 43s; --delay: 8s; --size: 71px;"></div>
        <div class="aircraft aircraft-35" style="--animation: flyRight; --duration: 24s; --delay: 1s; --size: 61px; --start-y: 17%; --end-y: 7%;"></div>
        <div class="aircraft aircraft-36" style="--animation: flyLeft; --duration: 29s; --delay: 5s; --size: 66px; --start-y: 38%; --end-y: 28%;"></div>
        <div class="aircraft aircraft-37" style="--animation: flyDiagonalDown; --duration: 40s; --delay: 12s; --size: 79px;"></div>
        <div class="aircraft aircraft-38" style="--animation: flyCurveRight; --duration: 46s; --delay: 1s; --size: 64px;"></div>
        <div class="aircraft aircraft-39" style="--animation: flyLeft; --duration: 30s; --delay: 14s; --size: 52px; --start-y: 75%; --end-y: 65%;"></div>
        <div class="aircraft aircraft-40" style="--animation: flyDiagonalUp; --duration: 38s; --delay: 20s; --size: 83px;"></div>
        <div class="aircraft aircraft-41" style="--animation: flyRight; --duration: 27s; --delay: 6s; --size: 57px; --start-y: 22%; --end-y: 12%;"></div>
        <div class="aircraft aircraft-42" style="--animation: flyLeft; --duration: 33s; --delay: 15s; --size: 78px; --start-y: 47%; --end-y: 37%;"></div>
        <div class="aircraft aircraft-43" style="--animation: flyDiagonalDown; --duration: 41s; --delay: 7s; --size: 67px;"></div>
        <div class="aircraft aircraft-44" style="--animation: flyCurveLeft; --duration: 35s; --delay: 13s; --size: 76px;"></div>
        <div class="aircraft aircraft-45" style="--animation: flyRight; --duration: 28s; --delay: 9s; --size: 54px; --start-y: 63%; --end-y: 53%;"></div>
        <div class="aircraft aircraft-46" style="--animation: flyLeft; --duration: 31s; --delay: 16s; --size: 84px; --start-y: 43%; --end-y: 33%;"></div>
        <div class="aircraft aircraft-47" style="--animation: flyDiagonalUp; --duration: 37s; --delay: 21s; --size: 59px;"></div>
        <div class="aircraft aircraft-48" style="--animation: flyRight; --duration: 26s; --delay: 2s; --size: 63px; --start-y: 19%; --end-y: 9%;"></div>
        <div class="aircraft aircraft-49" style="--animation: flyCurveRight; --duration: 43s; --delay: 4s; --size: 69px;"></div>
        <div class="aircraft aircraft-50" style="--animation: flyLeft; --duration: 34s; --delay: 17s; --size: 86px; --start-y: 46%; --end-y: 36%;"></div>
    </div>

    <!-- Animated Gradient Background -->
    <div class="absolute inset-0 overflow-hidden z-0">
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-midnight-blue via-[#0F1B2D] to-[#0a1424] opacity-95"></div>
    <div class="absolute top-1/4 left-1/4 w-64 h-64 rounded-full bg-teal/20 blur-3xl animate-float-slow"></div>
    <div class="absolute bottom-1/3 right-1/3 w-80 h-80 rounded-full bg-teal/25 blur-3xl animate-float-fast"></div>
    <div class="absolute top-1/3 right-1/4 w-96 h-96 rounded-full bg-white/10 blur-3xl animate-float-medium"></div>
</div>

    <!-- Main Content -->
   <div class="relative z-50 text-center px-6 w-full max-w-7xl mx-auto">
        <!-- Animated Title with Glitch Effect -->
        <div class="overflow-hidden mb-8">
            <h1 class="text-6xl md:text-8xl font-bold glitch" data-text="KheyCode">
                <span class="block text-teal">KheyCode</span>
            </h1>
        </div>
        
        <!-- Animated Subtitle with Typewriter Effect -->
        <p class="text-xl md:text-3xl mb-12 text-silver max-w-2xl mx-auto typewriter">
            Pioneering Digital Solutions in Dubai
        </p>
        
         <!-- Animated Button with Hover Effect -->
  <div class="relative inline-block group" style="z-index: 1000;">
    <!-- Glow effect (behind button) -->
    <div class="mt-10 absolute -inset-1 bg-teal-500 rounded-full blur-lg opacity-75 group-hover:opacity-100 transition-all duration-300"></div>
    
    <!-- Main button -->
    <a href="#portfolio" 
       class="mt-10 relative z-10 block px-10 py-4 text-lg font-semibold text-white rounded-full bg-gradient-to-r from-teal-500 to-teal-600 border-2 border-teal-300 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5">
       <span class="relative z-20">View Our Work</span>
       <svg class="w-5 h-5 ml-2 inline-block relative z-20 transition-all duration-300 group-hover:translate-x-2" 
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
       </svg>
    </a>
</div>
</div>
</section>


<!-- Services Section -->
<section id="services" class="py-20 px-6 bg-midnight-blue">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold mb-4 text-center text-white">Our Services</h2>
        <div class="w-24 h-1 bg-teal mx-auto mb-16"></div>
        
        <div class="flex flex-col gap-16">
            <!-- Web Development (Left Entry) -->
            <div class="service-card opacity-0 -translate-x-20">
                <div class="flex flex-col md:flex-row gap-8 items-center bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300">
                    <div class="md:w-1/3 overflow-hidden rounded-xl shadow-lg">
                        <img src="{{ asset('images/web1.jpg') }}" 
                             alt="Web Development" 
                             class="w-full h-48 md:h-64 object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="md:w-2/3">
                        <div class="w-12 h-12 bg-teal/20 rounded-lg flex items-center justify-center mb-4 text-xl">🌐</div>
                        <h3 class="text-2xl font-bold mb-2 text-white">Web Development</h3>
                        <p class="text-silver">Custom, responsive websites and web applications with modern technologies.</p>
                        <a href="#contact" class="mt-4 px-6 py-2 bg-teal/20 text-teal rounded-lg hover:bg-teal/30 transition-all inline-block">
    Learn More
</a>
                        </button>
                    </div>
                </div>
            </div>

            <!-- App Development (Right Entry) -->
            <div class="service-card opacity-0 translate-x-20">
                <div class="flex flex-col md:flex-row-reverse gap-8 items-center bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300">
                    <div class="md:w-1/3 overflow-hidden rounded-xl shadow-lg">
                        <img src="{{ asset('images/app.png') }}" 
                             alt="App Development" 
                             class="w-full h-48 md:h-64 object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="md:w-2/3">
                        <div class="w-12 h-12 bg-teal/20 rounded-lg flex items-center justify-center mb-4 text-xl">📱</div>
                        <h3 class="text-2xl font-bold mb-2 text-white">App Development</h3>
                        <p class="text-silver">Native and cross-platform mobile applications for iOS and Android.</p>
                        <a href="#contact" class="mt-4 px-6 py-2 bg-teal/20 text-teal rounded-lg hover:bg-teal/30 transition-all inline-block">
    Learn More
</a>
                    </div>
                </div>
            </div>

            <!-- AI (Left Entry) -->
            <div class="service-card opacity-0 -translate-x-20">
                <div class="flex flex-col md:flex-row gap-8 items-center bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300">
                    <div class="md:w-1/3 overflow-hidden rounded-xl shadow-lg">
                        <img src="{{ asset('images/ai.jpg') }}" 
                             alt="Artificial Intelligence" 
                             class="w-full h-48 md:h-64 object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="md:w-2/3">
                        <div class="w-12 h-12 bg-teal/20 rounded-lg flex items-center justify-center mb-4 text-xl">🤖</div>
                        <h3 class="text-2xl font-bold mb-2 text-white">Artificial Intelligence</h3>
                        <p class="text-silver">AI-powered solutions for automation, predictions, and data analysis.</p>
                        <a href="#contact" class="mt-4 px-6 py-2 bg-teal/20 text-teal rounded-lg hover:bg-teal/30 transition-all inline-block">
    Learn More
</a>
                    </div>
                </div>
            </div>

            <!-- Cyber Security (Right Entry) -->
            <div class="service-card opacity-0 translate-x-20">
                <div class="flex flex-col md:flex-row-reverse gap-8 items-center bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300">
                    <div class="md:w-1/3 overflow-hidden rounded-xl shadow-lg">
                        <img src="{{ asset('images/cyber.jpg') }}" 
                             alt="Cyber Security" 
                             class="w-full h-48 md:h-64 object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="md:w-2/3">
                        <div class="w-12 h-12 bg-teal/20 rounded-lg flex items-center justify-center mb-4 text-xl">🔒</div>
                        <h3 class="text-2xl font-bold mb-2 text-white">Cyber Security</h3>
                        <p class="text-silver">Comprehensive security solutions to protect your digital assets.</p>
                        <a href="#contact" class="mt-4 px-6 py-2 bg-teal/20 text-teal rounded-lg hover:bg-teal/30 transition-all inline-block">
    Learn More
</a>
                    </div>
                </div>
            </div>

            <!-- Graphic Design (Left Entry) -->
            <div class="service-card opacity-0 -translate-x-20">
                <div class="flex flex-col md:flex-row gap-8 items-center bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 hover:bg-white/10 transition-all duration-300">
                    <div class="md:w-1/3 overflow-hidden rounded-xl shadow-lg">
                        <img src="{{ asset('images/graphic.jpg') }}" 
                             alt="Graphic Design" 
                             class="w-full h-48 md:h-64 object-cover transition-transform duration-500 hover:scale-105">
                    </div>
                    <div class="md:w-2/3">
                        <div class="w-12 h-12 bg-teal/20 rounded-lg flex items-center justify-center mb-4 text-xl">🎨</div>
                        <h3 class="text-2xl font-bold mb-2 text-white">Graphic Design</h3>
                        <p class="text-silver">Stunning visual designs for branding, marketing, and user interfaces.</p>
                        <a href="#contact" class="mt-4 px-6 py-2 bg-teal/20 text-teal rounded-lg hover:bg-teal/30 transition-all inline-block">
                Learn More
            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Homepage Portfolio Section -->
<section id="portfolio" class="py-20 px-6 bg-midnight-blue">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4 text-white">Our Portfolio</h2>
            <div class="w-24 h-1 bg-teal mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Web Development Card -->
            <div class="portfolio-card group">
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 group-hover:border-teal/50 transition-all duration-300 h-full flex flex-col">
                    <div class="overflow-hidden rounded-lg mb-6 flex-grow">
                        <img src="{{ asset('images/web-project1.png') }}" 
                             alt="Web Development" 
                             class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="text-center">
                        <span class="inline-block px-4 py-1 bg-teal/20 text-teal rounded-full text-sm font-medium mb-3">Web Development</span>
                        <h3 class="text-xl font-bold mb-4 text-white">E-Commerce Solution</h3>
                        <div class="flex justify-center">
                            <a href="/portfolio#web" class="inline-flex items-center px-6 py-3 bg-teal/20 text-teal rounded-lg hover:bg-teal/30 transition-all">
                                View More Projects
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- App Development Card -->
            <div class="portfolio-card group">
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 group-hover:border-teal/50 transition-all duration-300 h-full flex flex-col">
                    <div class="overflow-hidden rounded-lg mb-6 flex-grow">
                        <img src="{{ asset('images/app-project1.png') }}" 
                             alt="App Development" 
                             class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="text-center">
                        <span class="inline-block px-4 py-1 bg-teal/20 text-teal rounded-full text-sm font-medium mb-3">App Development</span>
                        <h3 class="text-xl font-bold mb-4 text-white">Property Wise</h3>
                        <div class="flex justify-center">
                            <a href="/portfolio#app" class="inline-flex items-center px-6 py-3 bg-teal/20 text-teal rounded-lg hover:bg-teal/30 transition-all">
                                View More Projects
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 px-6 bg-midnight-blue">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4 text-white">About Us</h2>
            <div class="w-24 h-1 bg-teal mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="about-content">
                <h3 class="text-2xl font-bold mb-4 text-teal">Who We Are</h3>
                <p class="text-silver mb-6">
                    KheyCode is a leading digital solutions provider based in Dubai, specializing in web development, 
                    mobile applications, AI solutions, and cybersecurity. Founded in 2020, we've been at the forefront 
                    of digital innovation in the region.
                </p>
                
                <h3 class="text-2xl font-bold mb-4 text-teal">Our Mission</h3>
                <p class="text-silver mb-6">
                    To empower businesses with cutting-edge technology solutions that drive growth, efficiency, 
                    and competitive advantage in the digital landscape.
                </p>
                
                <div class="stats grid grid-cols-2 gap-4">
                    <div class="stat-item bg-white/5 p-6 rounded-xl border border-white/10">
                        <div class="text-4xl font-bold text-teal mb-2">20+</div>
                        <div class="text-silver">Projects Completed</div>
                    </div>
                    
                    <div class="stat-item bg-white/5 p-6 rounded-xl border border-white/10">
                        <div class="text-4xl font-bold text-teal mb-2">4+</div>
                        <div class="text-silver">Years Experience</div>
                    </div>
                </div>
            </div>
            
            <div class="about-image relative">
                <div class="relative overflow-hidden rounded-2xl shadow-2xl">
                    <img src="{{ asset('images/logo.png') }}" alt="KheyCode Team" class="w-full h-auto object-cover transition-transform duration-500 hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent flex items-end p-8">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 px-6 bg-midnight-blue">
    <div class="max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4 text-white">Get In Touch</h2>
            <div class="w-24 h-1 bg-teal mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="contact-form bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10">
                <h3 class="text-2xl font-bold mb-6 text-white">Send Us a Message</h3>
                
              <form id="contactForm" method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
            @csrf
                    <div class="form-group">
                        <label for="name" class="block text-silver mb-2">Your Name</label>
                        <input type="text" id="name" name="name" 
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-teal focus:border-transparent transition-all duration-300" 
                               placeholder="Enter your name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="block text-silver mb-2">Email Address</label>
                        <input type="email" id="email" name="email" 
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-teal focus:border-transparent transition-all duration-300" 
                               placeholder="Enter your email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" class="block text-silver mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" 
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-teal focus:border-transparent transition-all duration-300" 
                               placeholder="Project Inquiry">
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="block text-silver mb-2">Your Message</label>
                        <textarea id="message" name="message" rows="5" 
                                  class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-teal focus:border-transparent transition-all duration-300" 
                                  placeholder="Tell us about your project..." required></textarea>
                    </div>
                    
                    <button type="submit" 
                            class="w-full px-6 py-4 bg-gradient-to-r from-teal-500 to-teal-600 text-white font-semibold rounded-lg hover:from-teal-600 hover:to-teal-700 transition-all duration-300 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="contact-info">
                <h3 class="text-2xl font-bold mb-6 text-white">Contact Information</h3>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-teal/20 p-3 rounded-lg text-teal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-white mb-1">Our Location</h4>
                            <p class="text-silver">Al Ain, Abu Dhabi, UAE</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-teal/20 p-3 rounded-lg text-teal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-white mb-1">Email Us</h4>
                            <p class="text-silver">kheycode@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex-shrink-0 bg-teal/20 p-3 rounded-lg text-teal">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-semibold text-white mb-1">Call Us</h4>
                            <p class="text-silver">+971 50 870 8902</p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-10">
                    <h4 class="text-xl font-bold mb-4 text-white">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="social-icon bg-white/10 hover:bg-teal/20 transition-all duration-300 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/khey.code/" class="social-icon bg-white/10 hover:bg-teal/20 transition-all duration-300 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://x.com/CodeKhey" class="social-icon bg-white/10 hover:bg-teal/20 transition-all duration-300 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/108629724/admin/dashboard/" class="social-icon bg-white/10 hover:bg-teal/20 transition-all duration-300 p-3 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WhatsApp Chat Button -->
<div id="whatsapp-chat" class="fixed bottom-6 right-6 z-50">
    <a href="https://wa.me/971508708902" target="_blank" class="block bg-green-500 hover:bg-green-600 text-white rounded-full p-4 shadow-lg transition-all duration-300 transform hover:scale-110">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="currentColor">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.479 5.092 1.479h.005c4.708 0 8.541-3.833 8.544-8.541v-.001c0-2.137-.833-4.146-2.348-5.658-1.516-1.513-3.521-2.348-5.658-2.348-4.708 0-8.539 3.833-8.542 8.543-.001 2.137.833 4.146 2.347 5.656l-.003.003zm1.517-5.453c-.074-.123-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
        </svg>
    </a>
</div>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="footer-col">
                <h3 class="text-xl font-bold mb-4 text-teal">KheyCode</h3>
                <p class="text-silver mb-4">
                    Pioneering digital solutions in Dubai with cutting-edge technology and innovative approaches.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-silver hover:text-teal transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/khey.code/" class="text-silver hover:text-teal transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="https://x.com/CodeKhey" class="text-silver hover:text-teal transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/108629724/admin/dashboard/" class="text-silver hover:text-teal transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="footer-col">
                <h4 class="text-lg font-semibold mb-4 text-white">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#home" class="text-silver hover:text-teal transition-colors duration-300">Home</a></li>
                    <li><a href="#services" class="text-silver hover:text-teal transition-colors duration-300">Services</a></li>
                    <li><a href="#portfolio" class="text-silver hover:text-teal transition-colors duration-300">Portfolio</a></li>
                    <li><a href="#about" class="text-silver hover:text-teal transition-colors duration-300">About Us</a></li>
                    <li><a href="#contact" class="text-silver hover:text-teal transition-colors duration-300">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h4 class="text-lg font-semibold mb-4 text-white">Services</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-silver hover:text-teal transition-colors duration-300">Web Development</a></li>
                    <li><a href="#" class="text-silver hover:text-teal transition-colors duration-300">App Development</a></li>
                    <li><a href="#" class="text-silver hover:text-teal transition-colors duration-300">AI Solutions</a></li>
                    <li><a href="#" class="text-silver hover:text-teal transition-colors duration-300">Cyber Security</a></li>
                    <li><a href="#" class="text-silver hover:text-teal transition-colors duration-300">Graphic Design</a></li>
                </ul>
            </div>
            
            <div class="footer-col">
                <h4 class="text-lg font-semibold mb-4 text-white">Contact Info</h4>
                <ul class="space-y-2">
                    <li class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-teal" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                        </svg>
                        <span class="text-silver">Al Ain, Abu-Dhabi, UAE</span>
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-teal" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <span class="text-silver">+971 50 8708902</span>
                    </li>
                    <li class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-teal" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <span class="text-silver">kheycode@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-800 mt-12 pt-8 text-center text-silver">
            <p>&copy; 2023 KheyCode. All rights reserved.</p>
        </div>
    </div>
</footer>
@endsection
