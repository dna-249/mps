<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPS Media Poetry Challenge 2026 | Arewa Edition</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        mps: { dark: '#4a044e', accent: '#db2777' }
                    }
                }
            }
        }
    </script>
</head>
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
<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Professional Header -->
    <header class="relative bg-mps-dark py-20 overflow-hidden">
        <div class="max-w-5xl mx-auto px-6 text-center relative z-10">
            <span class="text-pink-400 font-bold uppercase tracking-[0.2em] text-sm">Millennium Prime Solutions Presents</span>
            <h1 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tighter mt-4 mb-6">MPS Poetry Challenge 2026</h1>
            <p class="text-xl text-slate-200 italic font-light">"Where Words Become Change: The Arewa Edition"</p>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="max-w-5xl mx-auto mt-16 px-6 pb-20">
        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-2xl border-t-8 border-mps-accent">
            
            <article class="prose lg:prose-lg max-w-none prose-headings:text-mps-dark prose-strong:text-mps-dark">
                
                <h2 class="text-3xl font-black">About the Challenge</h2>
                <p>The <strong>MPS Media Poetry Challenge 2026 – Arewa Edition</strong> stands as the premier spoken-word competition in Northern Nigeria. Designed by Millennium Prime Solutions, this initiative serves to discover, nurture, and provide a global stage for talented young voices across the North-West, North-East, and North-Central zones.</p>
                
                <h2 class="text-3xl font-black">Our Strategic Vision</h2>
                <p>MPS Media provides a sophisticated platform for storytellers to drive societal transformation through positive cultural expression. Through elite coaching, mentorship, and extensive national media exposure, we empower participants to reshape the narrative of Arewa.</p>

                <h3 class="text-xl font-bold text-mps-dark">Core Thematic Pillars</h3>
                <div class="grid md:grid-cols-2 gap-x-8 gap-y-2">
                    <p>• Youth Empowerment & Education</p>
                    <p>• Peace, Unity & Social Harmony</p>
                    <p>• Cultural Heritage & Identity</p>
                    <p>• Governance & Accountability</p>
                </div>

                <h2 class="text-3xl font-black mt-8">Why Choose MPS?</h2>
                <p>Choosing to participate with MPS Media ensures your work receives professional attention:</p>
                <ul class="space-y-2">
                    <li><strong>Prestigious Exposure:</strong> Visibility before millions via television and digital channels.</li>
                    <li><strong>Expert Mentorship:</strong> Direct access to respected creative arts professionals.</li>
                    <li><strong>Professional Growth:</strong> Opportunities to compete for meaningful awards and national recognition.</li>
                </ul>

                <h2 class="text-3xl font-black mt-8">Participation Requirements</h2>
                <p>Our screening panel evaluates entries based on technical quality, narrative strength, and adherence to thematic standards. Candidates must be at least 10 years old.</p>

                <!-- Call to Action -->
                <div class="bg-slate-900 text-white p-10 rounded-2xl text-center mt-12">
                    <h3 class="text-2xl font-black mb-2">Portal Status: Open</h3>
                    <p class="mb-6 opacity-90">Applications are accepted until <strong>Friday, 10th July 2026</strong>.</p>
                    <a href="/login" class="inline-block bg-mps-accent px-10 py-4 rounded-lg font-bold hover:bg-pink-500 transition shadow-lg uppercase tracking-widest text-sm">Register Today</a>
                </div>
            </article>
        </div>
    </main>

    <footer class="text-center py-10 text-slate-500 text-xs uppercase tracking-widest">
        <p>&copy; 2026 Millennium Prime Solutions. All Rights Reserved.</p>
    </footer>

</body>
</html>