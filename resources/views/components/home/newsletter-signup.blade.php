<section class="py-16 bg-purple-900 text-white">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-black mb-4 uppercase">Stay Informed</h2>
        <p class="text-purple-200 mb-8">Get the latest updates on regional audition dates, training tips, and 2026 challenge news delivered to your inbox.</p>
        
        <form action="/subscribe" method="POST" class="flex flex-col md:flex-row gap-4 justify-center">
            @csrf
            <input 
                type="email" 
                name="email" 
                placeholder="Enter your email address" 
                required 
                class="px-6 py-4 rounded-lg text-purple-900 w-full md:w-80 focus:ring-2 focus:ring-pink-500 outline-none"
            >
            <button 
                type="submit" 
                class="bg-pink-600 hover:bg-pink-700 transition px-8 py-4 rounded-lg font-bold uppercase tracking-widest"
            >
                Subscribe
            </button>
        </form>
        <p class="mt-4 text-xs text-purple-400">No spam, just the power of the spoken word.</p>
    </div>
</section>