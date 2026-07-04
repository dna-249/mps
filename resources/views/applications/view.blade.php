<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Submission | MPS Media</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen">

    <div class="max-w-4xl mx-auto py-10 px-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-black text-slate-900">Your Submission</h1>
            <a href="{{ route('dashboard') }}" class="text-slate-500 hover:text-purple-900 font-bold transition">
                &larr; Back to Dashboard
            </a>
        </div>

        <!-- Main Card -->
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100 space-y-10">
            
            <!-- Personal Info -->
            <section>
                <h2 class="text-xs font-black text-purple-900 uppercase tracking-widest mb-6 border-b border-slate-100 pb-2">
                    Personal Information
                </h2>
                <div class="grid grid-cols-2 gap-8 text-sm">
                    <div>
                        <p class="text-slate-400 font-bold mb-1">Full Name</p>
                        <p class="font-bold text-slate-800 text-lg">{{ $application->full_name ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <p class="text-slate-400 font-bold mb-1">Age</p>
                        <p class="font-bold text-slate-800 text-lg">{{ $application->age ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <p class="text-slate-400 font-bold mb-1">Gender</p>
                        <p class="font-bold text-slate-800 text-lg">{{ $application->gender ?? 'N/A' }}</p>
                    </div>
                    <div>
                        <p class="text-slate-400 font-bold mb-1">State of Origin</p>
                        <p class="font-bold text-slate-800 text-lg">{{ $application->state_origin ?? 'N/A' }}</p>
                    </div>
                </div>
            </section>

            <!-- Portfolio & Bio -->
            <section>
                <h2 class="text-xs font-black text-purple-900 uppercase tracking-widest mb-6 border-b border-slate-100 pb-2">
                    Portfolio & Biography
                </h2>
                <div class="space-y-6">
                    <div>
                        <p class="text-slate-400 font-bold mb-2">Biography</p>
                        <div class="bg-slate-50 p-6 rounded-2xl text-slate-700 leading-relaxed">
                            {{ $application->bio ?? 'No biography provided.' }}
                        </div>
                    </div>
                    
                    <div class="flex gap-6 pt-4">
                        @if(!empty($application->portrait_path))
                            <a href="{{ asset('storage/'.$application->portrait_path) }}" target="_blank" 
                               class="bg-purple-100 text-purple-900 px-5 py-2 rounded-xl font-bold hover:bg-purple-200 transition">
                               View Photo
                            </a>
                        @endif
                        
                        @if(!empty($application->video_path))
                            <a href="{{ asset('storage/'.$application->video_path) }}" target="_blank" 
                               class="bg-pink-600 text-white px-5 py-2 rounded-xl font-bold hover:bg-pink-700 transition">
                               View Video Entry
                            </a>
                        @endif
                    </div>
                </div>
            </section>
        </div>
    </div>

</body>
</html>