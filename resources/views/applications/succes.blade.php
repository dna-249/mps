<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MPS Media Poetry Challenge</title>
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
<body class="bg-slate-50 text-slate-800 antialiased min-h-screen flex flex-col">

    <nav class="bg-white border-b-2 border-purple-800 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-21 items-center">
                <a href="/" class="flex items-center">
                    <span class="font-black text-xl text-purple-900">MPS MEDIA</span>
                </a>
                <div class="space-x-8 font-bold uppercase text-sm">
                    <a href="/" class="hover:text-pink-600">Home</a>
                    <a href="{{ route('dashboard') }}" class="hover:text-pink-600">Dashboard</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
    
<div class="max-w-xl mx-auto mt-20 px-6 text-center">
    <div class="bg-white p-10 rounded-2xl shadow-xl border-t-8 border-green-500">
        <div class="mx-auto w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mb-6">
            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
            </svg>
        </div>

        <h1 class="text-3xl font-black text-slate-900 mb-4">Application Received!</h1>
        <p class="text-slate-600 mb-8">
            Thank you for participating in the 2026 MPS Media Poetry Challenge. 
            Our team is currently reviewing your submission. You will receive 
            updates regarding your status via your registered phone number or email.
        </p>

        <div class="space-y-4">
            <a href="{{ route('dashboard') }}" class="block w-full bg-purple-900 text-white py-3 rounded-lg font-bold hover:bg-pink-600 transition">
                Go to Dashboard
            </a>
            <a href="/" class="text-slate-500 underline text-sm hover:text-purple-900">Return Home</a>
        </div>
    </div>
</div>

    </main>

    <footer class="text-center py-10 text-slate-500 text-xs uppercase tracking-widest">
        <p>&copy; 2026 Millennium Prime Solutions. All Rights Reserved.</p>
    </footer>

</body>
</html>