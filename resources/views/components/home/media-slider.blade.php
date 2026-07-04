<section class="py-16 bg-white" x-data="{ 
    active: 0, 
    slides: ['/1782990191773.jpg', '/1782990203217.jpg'] 
}">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl mtfont-black text-purple-900 mb-8 uppercase text-center">Media</h2>
        
        <!-- Slider Container: Outer Frame -->
        <div class="relative overflow-hidden w-full bg-gray-900 ">
            
            <!-- Moving Strip -->
            <div class="flex h-full w-full transition-transform duration-700 ease-in-out"
                 :style="'transform: translateX(-' + (active * 100) + '%)'">
                
                <template x-for="(img, index) in slides" :key="index">
                    <div class="min-w-full h-full">
                        <img :src="img" alt="Gallery" class="w-full h-full object-cover">
                    </div>
                </template>
            </div>

            <!-- Arrows -->
            <button @click="active = (active === 0) ? slides.length - 1 : active - 1" 
                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-pink-600 p-2 rounded-full text-white backdrop-blur z-20">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            
            <button @click="active = (active === slides.length - 1) ? 0 : active + 1" 
                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-pink-600 p-2 rounded-full text-white backdrop-blur z-20">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>
</section>