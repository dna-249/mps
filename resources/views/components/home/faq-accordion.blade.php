<section class="py-16 bg-white">
    <div class="max-w-3xl mx-auto px-6" x-data="{ active: null }">
        <h2 class="text-3xl font-black text-purple-900 mb-8 uppercase text-center">Frequently Asked Questions</h2>
        
        <div class="space-y-4">
            <!-- Question 1 -->
            <div class="border border-purple-100 rounded-lg">
                <button @click="active = (active === 1 ? null : 1)" class="w-full p-6 text-left font-bold text-purple-900 flex justify-between items-center">
                    Who is eligible to participate?
                    <span x-text="active === 1 ? '-' : '+'"></span>
                </button>
                <div x-show="active === 1" class="px-6 pb-6 text-gray-600">
                    The Arewa Poetry Challenge is open to all residents of Northern Nigeria who are passionate about spoken word and literary expression.
                </div>
            </div>

            <!-- Question 2 -->
            <div class="border border-purple-100 rounded-lg">
                <button @click="active = (active === 2 ? null : 2)" class="w-full p-6 text-left font-bold text-purple-900 flex justify-between items-center">
                    When is the application deadline?
                    <span x-text="active === 2 ? '-' : '+'"></span>
                </button>
                <div x-show="active === 2" class="px-6 pb-6 text-gray-600">
                    All applications for the 2026 edition must be submitted no later than July 10, 2026.
                </div>
            </div>

            <!-- Question 3 -->
            <div class="border border-purple-100 rounded-lg">
                <button @click="active = (active === 3 ? null : 3)" class="w-full p-6 text-left font-bold text-purple-900 flex justify-between items-center">
                    How do I register for the Academy?
                    <span x-text="active === 3 ? '-' : '+'"></span>
                </button>
                <div x-show="active === 3" class="px-6 pb-6 text-gray-600">
                    You can register for the Poetry Academy Cohort 2 via our official Paystack link found on the homepage.
                </div>
            </div>
        </div>
    </div>
</section>