<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply | MPS Media Poetry Challenge 2026</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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


         // In Controller:
$qualifications = ['SSCE', 'OND', 'NCE', 'HND', 'B.Sc/B.A', 'Master\'s', 'PhD', 'None'];

// In Blade:
    </script>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <!-- Navigation included from your template -->
    <nav class="bg-white border-b-2 border-purple-800 shadow-sm sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-21 items-center">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('/logo.jpg') }}" alt="Logo" class="h-20 w-auto">
                </a>
                <div class="font-extrabold text-2xl tracking-tighter text-purple-900"><a href="/">MPS MEDIA</a></div>
                <div class="hidden md:flex space-x-8 font-bold uppercase text-sm items-center">
                    <a href="/" class="hover:text-pink-600 transition">Home</a>
                    <a href="/apply" class="bg-gradient-to-r from-purple-800 to-pink-600 text-white px-6 py-2 rounded shadow-lg">Apply Now</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Application Form Area -->
    <main class="max-w-3xl mx-auto mt-16 px-6 pb-20">
        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-2xl border-t-8 border-mps-accent">
            <h1 class="text-3xl font-black text-mps-dark mb-2">Submit Your Application</h1>
            <p class="text-slate-600 mb-8">Fill in the details below to complete your entry for the Arewa Edition. Please ensure your video link is accessible.</p>

            <form action="/apply" method="POST" enctype="multipart/form-data" class="space-y-8">
    @csrf

    <!-- Section A: Personal Information -->
    <div class="bg-white p-6 rounded-xl border border-gray-200">
        <h2 class="text-xl font-black text-purple-900 mb-6 border-b pb-2">A. Personal Information</h2>
        
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-bold text-gray-700">Full Name of the Contestant (First, Middle, Last) *</label>
                <input type="text" name="full_name" class="w-full border-gray-300 rounded-lg p-3" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700">Stage Name of the Contestant (Your Mic/Poetic Name)</label>
                <input type="text" name="stage_name" class="w-full border-gray-300 rounded-lg p-3">
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700">Age *</label>
                <input type="number" name="age" min="10" class="w-full border-gray-300 rounded-lg p-3" required>
            </div>
            
            <!-- Gender Selection -->
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">Gender *</label>
                <div class="space-y-2">
                    <label><input type="radio" name="gender" value="male" required> Male</label><br>
                    <label><input type="radio" name="gender" value="female"> Female</label><br>
                    <label><input type="radio" name="gender" value="other"> Other: <input type="text" name="gender_other" class="border-b border-gray-400"></label>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                        <div>
    <label class="block text-sm font-bold text-gray-700">State of Origin *</label>
    <select name="state_origin" class="w-full border-gray-300 rounded-lg p-3" required>
        <option value="">Choose State</option>
        @foreach($states as $state)
            <option value="{{ $state }}">{{ $state }}</option>
        @endforeach
    </select>
</div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700">State of Residence *</label>
                            <select name="state_residence" class="state-select w-full border-gray-300 rounded-lg p-3" onchange="selectLGA(this)" required>
                                <option value="">Choose State</option>
                                @foreach($states as $state)
                                    <option value="{{ $state }}">{{ $state }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700">LGA *</label>
                        <select name="lga" id="lga" class="w-full border-gray-300 rounded-lg p-3" required>
                            <option value="">Select State first...</option>
                        </select>
                    </div>

                   

            <div>
                <label class="block text-sm font-bold text-gray-700">Phone Number *</label>
                <input type="tel" name="phone" class="w-full border-gray-300 rounded-lg p-3" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700">Whatsapp Number *</label>
                <input type="tel" name="whatsapp" class="w-full border-gray-300 rounded-lg p-3" required>
            </div>
             <div>
                        <label class="block text-sm font-bold text-gray-700">Education *</label>
                        <select name="education" class="w-full border-gray-300 rounded-lg p-3" required>
                            <option value="">Choose Qualification</option>
                            @foreach($qualifications as $edu)
                                <option value="{{ $edu }}">{{ $edu }}</option>
                            @endforeach
                        </select>
                    </div>
            <div>
                <label class="block text-sm font-bold text-gray-700">Current School/Occupation/Career Path *</label>
                <input type="text" name="career_path" class="w-full border-gray-300 rounded-lg p-3" required>
            </div>
        </div>
    </div>

    <!-- Section B: Competition Details -->
    <div class="bg-white p-6 rounded-xl border border-gray-200">
        <h2 class="text-xl font-black text-purple-900 mb-6 border-b pb-2">B. Competition Details</h2>
        
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-bold text-gray-700">Which Zone are you going to compete in? *</label>
                <div class="space-y-2">
                    <label><input type="radio" name="zone" value="North-East" required> North-East</label><br>
                    <label><input type="radio" name="zone" value="North-West"> North-West</label><br>
                    <label><input type="radio" name="zone" value="North-Central"> North-Central</label>
                </div>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700">Are you willing to travel to the hosting state in your zone? *</label>
                <div class="space-y-2">
                    <label><input type="radio" name="travel_willing" value="yes" required> Yes</label><br>
                    <label><input type="radio" name="travel_willing" value="no"> No</label>
                </div>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700">Preferred Language for Poetry Performance *</label>
                <div class="space-y-2">
                    <label><input type="checkbox" name="lang[]" value="English"> English</label><br>
                    <label><input type="checkbox" name="lang[]" value="Hausa"> Hausa</label><br>
                    <label><input type="checkbox" name="lang[]" value="Arabic"> Arabic</label>
                </div>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700">Why do you want to participate in this competition? *</label>
                <textarea name="reason" class="w-full border-gray-300 rounded-lg p-3" required></textarea>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700">Brief Biography (Max 100 words) *</label>
                <textarea name="bio" class="w-full border-gray-300 rounded-lg p-3" maxlength="100" required></textarea>
            </div>
            

            <div>
            <label class="block text-sm font-bold text-gray-700">Upload a High-Quality Portrait Photo (for banners & profiles) *</label>
            <p class="text-xs text-gray-500 italic">JPEG/PNG, max 10 MB. Upload 1 supported file.</p>
            <input type="file" name="portrait_photo" accept="image/jpeg,image/png" class="w-full p-3 border rounded-lg" required>
        </div>

        <!-- Poetry Video -->
        <div>
            <label class="block text-sm font-bold text-gray-700">Upload a Sample Video of Your Poetry Performance (max 50 MB) *</label>
            <p class="text-xs text-gray-500 italic">MP4/MOV. Upload 1 supported file.</p>
            <input type="file" name="performance_video" accept="video/mp4,video/quicktime" class="w-full p-3 border rounded-lg" required>
        </div>

        <!-- Optional Links -->
        <div>
            <label class="block text-sm font-bold text-gray-700">Optional: Provide at least two (2) links to your past performances (YouTube, Instagram, Facebook, etc.)</label>
            <textarea name="past_performance_links" class="w-full border-gray-300 rounded-lg p-3" placeholder="Paste your links here..."></textarea>
        </div>
        </div>
    </div>



    <div class="bg-white p-6 rounded-xl border border-gray-200">
        <h2 class="text-xl font-black text-purple-900 mb-6 border-b pb-2">C. Declaration & Consent</h2>
        <div class="space-y-6">
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">1. Do you agree to abide by the rules, thematic areas, and language policy? *</label>
                <input type="radio" name="agree_rules" value="yes" required> Yes
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">2. Consent for Use of Your Photo, Video & Performances for Promotions *</label>
                <input type="radio" name="consent_promotions" value="yes" required> Yes
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">3. Agree that all videos from your performances are exclusive property of MPS? *</label>
                <input type="radio" name="agree_property" value="yes" required> Yes
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">4. Do you have any medical condition requiring special attention? *</label>
                <textarea name="medical_info" class="w-full border-gray-300 rounded-lg p-3" required></textarea>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">5. How did you hear about this competition? *</label>
                <input type="text" name="referral" class="w-full border-gray-300 rounded-lg p-3" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-gray-700 mb-2">6. Do you agree to be bound by the decision of the judges? *</label>
                <input type="radio" name="agree_judges" value="yes" required> Yes
            </div>
        </div>
    </div>


    <button type="submit" class="w-full bg-purple-900 text-white p-4 rounded-lg font-black hover:bg-pink-600 transition">
        Submit Final Application
    </button>
</form>
        </div>
    </main>

    <footer class="text-center py-10 text-slate-500 text-xs uppercase tracking-widest">
        <p>&copy; 2026 Millennium Prime Solutions. All Rights Reserved.</p>
    </footer>
    <script>
    // Laravel-friendly implementation
    async function selectLGA(target) {
        const state = target.value;
        const lgaSelect = document.getElementById("lga");
        
        // Clear current options
        lgaSelect.innerHTML = '<option value="">Select LGA</option>';
        
        if (!state) return;

        try {
            const res = await fetch(`https://nga-states-lga.onrender.com/?state=${encodeURIComponent(state)}`);
            const data = await res.json();

            data.forEach(lga => {
                const option = document.createElement("option");
                option.value = lga;
                option.text = lga;
                lgaSelect.add(option);
            });
        } catch (error) {
            console.error("Error fetching LGAs:", error);
        }
    }

    // Fetch states on mount
    document.addEventListener('DOMContentLoaded', async () => {
        const stateSelect = document.getElementById("state");
        try {
            const res = await fetch('https://nga-states-lga.onrender.com/fetch');
            const data = await res.json();
            data.forEach(state => {
                const option = document.createElement("option");
                option.value = state;
                option.text = state;
                stateSelect.add(option);
            });
        } catch (error) {
            console.error("Error fetching states:", error);
        }
    });
</script>

</body>
</html>