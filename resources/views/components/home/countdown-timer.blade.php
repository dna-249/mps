<section class="py-12 bg-purple-900 text-white text-center">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="text-2xl font-bold mb-6 uppercase tracking-widest text-pink-500">Applications Closing In</h2>
        
        <div id="countdown" class="grid grid-cols-4 gap-4 text-center">
            <div class="bg-purple-800 p-4 rounded"><span id="days" class="text-4xl font-black block">00</span><span class="text-xs">Days</span></div>
            <div class="bg-purple-800 p-4 rounded"><span id="hours" class="text-4xl font-black block">00</span><span class="text-xs">Hours</span></div>
            <div class="bg-purple-800 p-4 rounded"><span id="minutes" class="text-4xl font-black block">00</span><span class="text-xs">Mins</span></div>
            <div class="bg-purple-800 p-4 rounded"><span id="seconds" class="text-4xl font-black block">00</span><span class="text-xs">Secs</span></div>
        </div>
    </div>
</section>

<script>
    const deadline = new Date("July 10, 2026 23:59:59").getTime();
    
    const timer = setInterval(function() {
        const now = new Date().getTime();
        const distance = deadline - now;

        document.getElementById("days").innerText = Math.floor(distance / (1000 * 60 * 60 * 24));
        document.getElementById("hours").innerText = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        document.getElementById("minutes").innerText = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        document.getElementById("seconds").innerText = Math.floor((distance % (1000 * 60)) / 1000);

        if (distance < 0) {
            clearInterval(timer);
            document.getElementById("countdown").innerHTML = "<h3 class='text-2xl font-bold'>Applications Closed</h3>";
        }
    }, 1000);
</script>