<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | MPS Media Poetry Challenge 2026</title>
    <!-- Assuming Tailwind CSS is configured via Vite/Mix -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
<body class="bg-slate-50">

    <div class="min-h-screen flex flex-col justify-center py-16 px-6">
        <div class="max-w-md w-full mx-auto">
            
            <!-- Logo Centered at the Top -->
            <div class="flex justify-center mb-8">
                <a href="/">
                    <img src="{{ asset('logo.jpg') }}" alt="MPS Media Logo" class="h-50 w-auto shadow-sm rounded-lg">
                </a>
            </div>

            <!-- Registration Form Card -->
            <div class="bg-white p-8 md:p-10 rounded-2xl shadow-2xl border-t-8 border-purple-900">
                <h1 class="text-3xl font-black text-purple-900 mb-2 text-center tracking-tight">Create Your Account</h1>
                <p class="text-gray-600 mb-8 text-sm text-center">Join the movement. Start your application to the 2026 Arewa Edition.</p>

                <!-- Validation Error Display -->
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 text-red-700 rounded-lg text-sm">
                        <ul class="list-disc pl-5">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('register') }}" method="POST" class="space-y-5">
                    @csrf
                    
                    <div>
                        <label for="name" class="block text-xs font-bold uppercase tracking-wider mb-1 text-gray-500">Full Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full bg-gray-50 border border-gray-200 p-3 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition" required>
                    </div>

                    <div>
                        <label for="email" class="block text-xs font-bold uppercase tracking-wider mb-1 text-gray-500">Email Address</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full bg-gray-50 border border-gray-200 p-3 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition" required>
                    </div>

                    <div>
                        <label for="password" class="block text-xs font-bold uppercase tracking-wider mb-1 text-gray-500">Password</label>
                        <input type="password" name="password" id="password" class="w-full bg-gray-50 border border-gray-200 p-3 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition" required>
                    </div>

                    <button type="submit" class="w-full bg-purple-900 text-white py-4 rounded-lg font-bold hover:bg-pink-600 transition shadow-lg mt-2 uppercase tracking-widest text-sm">
                        Register Account
                    </button>
                </form>

                <div class="mt-8 border-t pt-6 text-center text-sm text-gray-500">
                    Already part of the movement? 
                    <a href="{{ route('login') }}" class="text-pink-600 font-bold hover:underline">Log in here</a>
                </div>
            </div>

            <p class="text-center text-gray-400 text-xs mt-8">
                &copy; {{ date('Y') }} Millennium Prime Solutions. All Rights Reserved.
            </p>
        </div>
    </div>

</body>
</html>