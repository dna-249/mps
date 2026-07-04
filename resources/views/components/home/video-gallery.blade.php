<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-black text-purple-900 mb-12 uppercase text-center tracking-tighter">The Gallery of Voices</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="video-container group relative aspect-video bg-black rounded-lg overflow-hidden shadow-lg border-2 border-transparent hover:border-pink-600 transition" data-video-id="JwDK_JjqESY">
                <div class="video-placeholder absolute inset-0 cursor-pointer">
                    <img src="/img/thumbnail-1.jpg" alt="Video" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <button class="w-16 h-16 bg-white/20 backdrop-blur rounded-full flex items-center justify-center text-white border-2 border-white hover:bg-pink-600 transition">
                            <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </button>
                    </div>
                </div>
                <div class="video-iframe-wrapper w-full h-full hidden"></div>
            </div>

            <div class="video-container group relative aspect-video bg-black rounded-lg overflow-hidden shadow-lg border-2 border-transparent hover:border-pink-600 transition" data-video-id="YOUR_VIDEO_ID_2">
                <div class="video-placeholder absolute inset-0 cursor-pointer">
                    <img src="/img/thumbnail-2.jpg" alt="Video" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <button class="w-16 h-16 bg-white/20 backdrop-blur rounded-full flex items-center justify-center text-white border-2 border-white hover:bg-pink-600 transition">
                            <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </button>
                    </div>
                </div>
                <div class="video-iframe-wrapper w-full h-full hidden"></div>
            </div>

            <div class="video-container group relative aspect-video bg-black rounded-lg overflow-hidden shadow-lg border-2 border-transparent hover:border-pink-600 transition" data-video-id="YOUR_VIDEO_ID_3">
                <div class="video-placeholder absolute inset-0 cursor-pointer">
                    <img src="/img/thumbnail-1.jpg" alt="Video" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <button class="w-16 h-16 bg-white/20 backdrop-blur rounded-full flex items-center justify-center text-white border-2 border-white hover:bg-pink-600 transition">
                            <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                        </button>
                    </div>
                </div>
                <div class="video-iframe-wrapper w-full h-full hidden"></div>
            </div>
        </div>
    </div>
</section>
<script>
document.querySelectorAll('.video-container').forEach(container => {
    container.addEventListener('click', function() {
        const videoId = this.getAttribute('data-video-id');
        const wrapper = this.querySelector('.video-iframe-wrapper');
        const placeholder = this.querySelector('.video-placeholder');
        
        // Inject the iframe
        wrapper.innerHTML = `
            <iframe 
                class="w-full h-full" 
                src="https://www.youtube.com/embed/${videoId}?autoplay=1" 
                frameborder="0" 
                allow="autoplay; encrypted-media; picture-in-picture" 
                allowfullscreen>
            </iframe>
        `;
        
        // Hide placeholder, show iframe
        placeholder.style.display = 'none';
        wrapper.classList.remove('hidden');
    });
});
</script>