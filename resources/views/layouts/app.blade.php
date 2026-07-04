<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MPS Media Poetry Challenge - Empowering voices in Arewa and beyond.">
    <title>@yield('title', 'MPS Media Poetry Challenge')</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-900 antialiased font-sans">

    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:p-4 focus:bg-pink-600 focus:text-white z-50">
        Skip to main content
         
    </a>

   <nav class="bg-white border-b-2 border-purple-800 shadow-sm sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-21 items-center">
            <!-- Logo -->
             <a href="/" class="flex items-center">
                <img src="{{ asset('/logo.jpg') }}" alt=" " class="h-20 w-auto">
            </a>
            <div class="font-extrabold text-2xl tracking-tighter text-purple-900 cursor-pointer">
                <a href="/">MPS MEDIA</a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8 font-bold uppercase text-sm items-center">
                <a href="/" class="hover:text-pink-600 transition">Home</a>
                <a href="/challenges" class="hover:text-pink-600 transition">Challenges</a>
                <a href="/academy" class="hover:text-pink-600 transition">Academy</a>
                <a href="/apply" class="bg-gradient-to-r from-purple-800 to-pink-600 text-white px-6 py-2 rounded shadow-lg hover:opacity-90 transition">Apply Now</a>
            </div>

            <!-- Mobile Toggle Button -->
            <div class="md:hidden">
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen" 
                    class="text-purple-900 hover:text-pink-600 focus:outline-none p-2"
                    aria-label="Toggle menu"
                >
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (Hidden until clicked) -->
    <div 
        x-show="mobileMenuOpen" 
        x-cloak
        @click.away="mobileMenuOpen = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        class="md:hidden bg-white border-t border-purple-100 absolute w-full shadow-xl p-6 space-y-6 font-bold uppercase text-sm text-center"
    >
        <a href="/" class="block hover:text-pink-600 transition">Home</a>
        <a href="/challenges" class="block hover:text-pink-600 transition">Challenges</a>
        <a href="/academy" class="block hover:text-pink-600 transition">Academy</a>
        <a href="/apply" class="block bg-gradient-to-r from-purple-800 to-pink-600 text-white py-3 rounded-lg shadow-lg">Apply Now</a>
    </div>
</nav>
    <main id="main-content" class="min-h-screen">
       <div id="main-content">
        <!-- Hero & Foundation -->
        <x-home.utility-bar />
        <x-home.hero-section />
        <x-home.media-slider />
        
        <!-- Urgent Deadline Notice (July 10, 2026) -->
        


        <x-home.featured-performance />
        <x-home.contestant-grid />
        <x-home.sponsor-slider />
        <x-home.hall-of-fame-marquee />

        <div class="bg-red-600 text-white text-center py-4 font-bold tracking-widest uppercase animate-pulse">
            ⏳ Applications closing July 10, 2026 — Apply Now!
        </div>
        
        <x-home.countdown-timer />
        <x-home.stats-counter />

        <!-- Community & Engagement -->
        <x-home.manifesto />
        <x-home.blog-latest />
        <x-home.video-gallery />

        <!-- Functionality & Experience -->
        <x-home.faq-accordion />
        <x-home.judge-profiles />
        <x-home.how-to-apply-steps />

        <!-- Trust & Professionalism -->
        <x-home.newsletter-signup />

        <x-home.transparency-rules />
        <x-home.testimonial-carousel />
        <x-home.interactive-map />
    </div>
    </main>
  
     @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>