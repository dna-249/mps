<section class="py-16 bg-purple-50">
    <div class="max-w-4xl mx-auto px-6" x-data="{ active: 0, testimonials: [
        { name: 'Aisha Bello', role: '2025 Winner', text: 'Winning this challenge changed my life. It gave me the platform to share my voice with the world.' },
        { name: 'Ibrahim Musa', role: '2024 Finalist', text: 'The mentorship I received during the Arewa Poetry Challenge was beyond my expectations.' },
        { name: 'Fatima Ahmed', role: '2025 Participant', text: 'The most well-organized literary competition in the North. A must-join for every aspiring poet.' }
    ]}">
        <h2 class="text-3xl font-black text-purple-900 mb-12 uppercase text-center">Voices of Experience</h2>
        
        <div class="relative min-h-[200px]">
            <template x-for="(testimonial, index) in testimonials" :key="index">
                <div x-show="active === index" 
                     x-transition:enter="transition ease-out duration-500"
                     x-transition:enter-start="opacity-0 transform translate-x-4"
                     x-transition:enter-end="opacity-100 transform translate-x-0"
                     class="text-center">
                    <p class="text-xl md:text-2xl italic text-purple-900 mb-6 font-serif">
                        "<span x-text="testimonial.text"></span>"
                    </p>
                    <h4 class="font-black text-pink-600 uppercase tracking-widest" x-text="testimonial.name"></h4>
                    <p class="text-sm font-bold text-gray-500" x-text="testimonial.role"></p>
                </div>
            </template>
        </div>

        <!-- Navigation Dots -->
        <div class="flex justify-center gap-2 mt-8">
            <template x-for="(_, index) in testimonials" :key="index">
                <button @click="active = index" 
                        :class="active === index ? 'bg-pink-600' : 'bg-gray-300'" 
                        class="w-3 h-3 rounded-full transition"></button>
            </template>
        </div>
    </div>
</section>