@extends('layouts.app')

@section('title', 'MPS Media Poetry Challenge 2026 | Arewa Edition')

@section('content')
    <div class="swiper full-slider h-[70vh] w-full bg-mps-gradient text-white">
        <div class="swiper-wrapper">
            <div class="swiper-slide flex flex-col items-center justify-center text-center p-6">
                <h1 class="text-6xl md:text-8xl font-black tracking-tighter">AREWA EDITION</h1>
                <p class="text-2xl mt-4 font-light">The Poetry Challenge 2026</p>
                <div class="mt-8 bg-white text-purple-900 px-10 py-4 font-bold uppercase shadow-xl transform hover:scale-105 transition">
                    Deadline: July 10, 2026
                </div>
                <a href="/apply" class="mt-6 bg-pink-600 hover:bg-pink-700 px-10 py-4 rounded-lg font-bold text-lg transition">Apply Now</a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

    

    <div class="py-12 bg-white border-b">
        <div class="max-w-6xl mx-auto px-6">
            <p class="text-center text-sm font-bold text-gray-400 mb-8 uppercase tracking-widest">Proudly Supported By</p>
            <div class="swiper sponsor-slider">
                <div class="swiper-wrapper items-center">
                    <div class="swiper-slide text-center font-bold text-gray-600 grayscale hover:grayscale-0">NG EAGLE</div>
                    <div class="swiper-slide text-center font-bold text-gray-600 grayscale hover:grayscale-0">AUDA-NEPAD</div>
                    <div class="swiper-slide text-center font-bold text-gray-600 grayscale hover:grayscale-0">KATSINA GOV</div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-16 grid grid-cols-2 md:grid-cols-4 gap-8 text-center bg-gray-50">
        @foreach([['5,000+', 'Poets Empowered'], ['12', 'States Reached'], ['100k+', 'Total Views'], ['₦700k', 'Prize Money']] as $stat)
            <div>
                <div class="text-4xl font-black text-mps-gradient">{{ $stat[0] }}</div>
                <p class="font-bold text-gray-600 uppercase text-sm mt-2">{{ $stat[1] }}</p>
            </div>
        @endforeach
    </section>

    <x-home.manifesto />
    <x-home.video-gallery />
    <x-home.faq-accordion />

    <div class="fixed bottom-0 w-full bg-white border-t border-purple-200 p-4 flex justify-between items-center z-50 shadow-2xl">
        <div class="font-bold text-purple-900 hidden md:block">AREWA EDITION 2026</div>
        <a href="/apply" class="mps-gradient text-white px-8 py-3 rounded font-bold uppercase hover:opacity-90 transition">Submit Application</a>
    </div>

    <script>
        new Swiper('.full-slider', { loop: true, pagination: { el: '.swiper-pagination' }, autoplay: { delay: 5000 } });
        new Swiper('.sponsor-slider', { 
            slidesPerView: 3, 
            autoplay: { delay: 2000 },
            breakpoints: { 768: { slidesPerView: 5 } } 
        });
    </script>
@endsection