<section class="py-10 bg-white border-y border-purple-100 overflow-hidden">
    <h2 class="text-center text-sm font-bold text-gray-400 uppercase tracking-widest mb-6">Hall of Fame & Alumni</h2>
    
    <div class="flex overflow-hidden">
        <div class="flex animate-marquee whitespace-nowrap space-x-16 items-center">
            @foreach(['2025 Winner: Aisha Bello', '2024 Winner: Ibrahim Musa', '2023 Winner: Fatima Ahmed', '2022 Winner: Yusuf Danjuma', '2021 Winner: Zainab Musa'] as $name)
                <span class="text-xl font-black text-purple-900 uppercase">
                    {{ $name }}
                </span>
                <span class="text-pink-600 font-bold">•</span>
            @endforeach
        </div>
    </div>
</section>

<style>
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    .animate-marquee {
        animation: marquee 20s linear infinite;
    }
</style>