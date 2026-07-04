<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contestant Dashboard | MPS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans">

    <nav class="bg-white border-b border-slate-200 py-4 px-6 sticky top-0 z-10">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <span class="font-black text-purple-900 tracking-tighter text-xl">MPS DASHBOARD</span>
            <a href="/" class="text-sm font-bold text-slate-400 hover:text-purple-900">RETURN HOME</a>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-6 py-10">
        @if(isset($application) && $application->status === 'needs_update')
            <div class="mb-8 bg-red-600 text-white p-6 rounded-3xl shadow-xl border-l-8 border-red-900 animate-pulse">
                <h2 class="font-black text-xl">⚠️ Action Required</h2>
                <p>Your submission was flagged. Please review and re-upload your media file.</p>
            </div>
        @endif

        <div class="grid lg:grid-cols-12 gap-8">
            
            <div class="lg:col-span-8 space-y-8">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <h3 class="font-black text-slate-400 mb-8 uppercase text-xs tracking-widest">Application Journey</h3>
                    <div class="flex items-center justify-between relative">
                        <div class="absolute top-4 left-0 w-full h-0.5 bg-slate-100 -z-0"></div>
                        @foreach(['Submitted', 'Reviewing', 'Auditioning', 'Results'] as $step)
                            <div class="flex flex-col items-center relative z-10">
                                <div class="w-8 h-8 rounded-full {{ $loop->index <= 1 ? 'bg-green-500' : 'bg-slate-200' }} flex items-center justify-center text-white mb-2 font-bold shadow-lg">✓</div>
                                <span class="text-xs font-bold text-slate-600">{{ $step }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-slate-100">
                    <h3 class="font-black text-purple-900 mb-4 text-lg">Your Submission</h3>
                    <p class="text-slate-600 leading-relaxed mb-6 italic bg-slate-50 p-4 rounded-xl">"{{ $application->bio ?? 'No bio provided' }}"</p>
                    <a href="{{ isset($application) ? asset('storage/'.$application->video_path) : '#' }}" 
                       class="inline-block bg-purple-900 text-white px-6 py-3 rounded-xl font-bold hover:bg-pink-600 transition">
                       Download Your Video
                    </a>
                </div>
            </div>

            <div class="lg:col-span-4 space-y-6">
                <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="w-14 h-14 bg-purple-900 rounded-full flex items-center justify-center text-white font-black text-xl">
                            {{ substr(auth()->user()->name, 0, 1) }}
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900">{{ auth()->user()->name }}</h4>
                            <p class="text-xs text-slate-400">{{ auth()->user()->email }}</p>
                        </div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-center text-sm text-red-500 font-bold hover:bg-red-50 py-2 rounded-lg transition">Log Out</button>
                    </form>
                </div>

                <div class="bg-white p-6 rounded-2xl border border-slate-200">
    <h3 class="font-black mb-4 text-purple-900">Submission Preview</h3>
    <a href="{{ route('application.view') }}" class="text-purple-900 underline font-bold mt-4 block">View Full Application Details</a>
</div>

                <div class="bg-white p-8 rounded-3xl shadow-sm text-center border border-slate-100">
                    <h4 class="font-bold text-slate-400 text-xs uppercase tracking-widest mb-2">Profile Completeness</h4>
                    <div class="text-6xl font-black text-pink-600">{{ $completionScore ?? 0 }}%</div>
                </div>

                <div class="bg-slate-900 text-white p-8 rounded-3xl text-center shadow-2xl">
                    <h4 class="text-slate-400 text-xs uppercase font-bold tracking-widest">Next Stage In</h4>
                    <div id="countdown" class="text-4xl font-black mt-2 text-transparent bg-clip-text bg-gradient-to-r from-pink-400 to-purple-400">Loading...</div>
                </div>
            </div>

        </div>
    </main>

    <script>
        const targetDate = new Date("2026-07-20T09:00:00").getTime();
        setInterval(function() {
            const now = new Date().getTime();
            const distance = targetDate - now;
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            document.getElementById("countdown").innerHTML = `${days}d ${hours}h ${minutes}m`;
        }, 1000);
    </script>
</body>
</html>