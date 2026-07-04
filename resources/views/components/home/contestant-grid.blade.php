<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-black text-purple-900 mb-8 uppercase text-center">Featured Poets</h2>
        
        <div class="grid md:grid-cols-4 gap-6">
            @for ($i = 1; $i <= 4; $i++)
            <div class="relative group overflow-hidden bg-white shadow-md border-b-4 border-pink-600">
                <div class="aspect-square bg-gray-200 flex items-center justify-center">
                    <span class="text-gray-400 font-bold">Photo Placeholder</span>
                </div>
                <div class="p-4 text-center">
                    <h3 class="font-bold text-purple-900">Contestant Name</h3>
                    <p class="text-sm text-gray-500">North-{{ ['East', 'West', 'Central', 'Finalist'][$i-1] }}</p>
                </div>
                <!-- Overlay effect on hover -->
                <div class="absolute inset-0 bg-purple-900/90 opacity-0 group-hover:opacity-100 transition flex items-center justify-center p-4">
                    <p class="text-white text-sm italic">"Turning voice into power..."</p>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>