<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller 
{
    public function create()
    {
        $qualifications = ['SSCE', 'OND', 'NCE', 'HND', 'B.Sc/B.A', 'Master\'s', 'PhD', 'None'];
        $states = ["Abia","Adamawa","AkwaIbom","Anambra","Bauchi","Bayelsa","Benue","Borno","Cross River","Delta","Ebonyi","Edo","Ekiti","Rivers","Enugu","FCT","Gombe","Imo","Jigawa","Kaduna","Kano","Katsina","Kebbi","Kogi","Kwara","Lagos","Nasarawa","Niger","Ogun","Ondo","Osun","Oyo","Plateau","Sokoto","Taraba","Yobe","Zamfara"];
        
        return view('apply', compact('qualifications', 'states'));
    }

    public function show()
{
    $application = auth()->user()->application;

    if (!$application) {
        return redirect()->route('applications.create')->with('error', 'No application found. Please apply first.');
    }

    return view('applications.view', compact('application'));
}

    public function store(Request $request) 
    {
        // 1. Validation including all fields from sections A, B, and C
        $validated = $request->validate([
            'full_name'       => 'required|string|max:255',
            'stage_name'      => 'nullable|string|max:255',
            'age'             => 'required|integer|min:10',
            'gender'          => 'required|string',
            'state_origin'    => 'required|string',
            'state_residence' => 'required|string',
            'lga'             => 'required|string',
            'phone'           => 'required|string',
            'whatsapp'        => 'required|string',
            'education'       => 'required|string',
            'career_path'     => 'required|string',
            'zone'            => 'required|string',
            'travel_willing'  => 'required|string',
            'lang'            => 'required|array',
            'reason'          => 'required|string',
            'bio'             => 'required|string|max:100',
            'portrait_photo'  => 'required|image|mimes:jpeg,png|max:10240',
            'performance_video' => 'required|mimes:mp4,mov|max:51200',
            'past_performance_links' => 'nullable|string',
            'agree_rules'     => 'required|string',
            'consent_promotions' => 'required|string',
            'agree_property'  => 'required|string',
            'medical_info'    => 'required|string',
            'referral'        => 'required|string',
            'agree_judges'    => 'required|string',
        ]);

        // 2. Process file uploads
        $photoPath = $request->file('portrait_photo')->store('portraits', 'public');
        $videoPath = $request->file('performance_video')->store('videos', 'public');

        // 3. Create application record
        Application::create([
            'user_id'                => Auth::id(),
            'full_name'              => $request->full_name,
            'stage_name'             => $request->stage_name,
            'age'                    => $request->age,
            'gender'                 => $request->gender,
            'state_origin'           => $request->state_origin,
            'state_residence'        => $request->state_residence,
            'lga'                    => $request->lga,
            'phone'                  => $request->phone,
            'whatsapp'               => $request->whatsapp,
            'education'              => $request->education,
            'career_path'            => $request->career_path,
            'zone'                   => $request->zone,
            'travel_willing'         => $request->travel_willing,
             'lang' => $request->lang, 
            'reason'                 => $request->reason,
            'bio'                    => $request->bio,
            'portrait_path'          => $photoPath,
            'video_path'             => $videoPath,
            'past_performance_links' => $request->past_performance_links,
            'agree_rules'            => $request->agree_rules,
            'consent_promotions'     => $request->consent_promotions,
            'agree_property'         => $request->agree_property,
            'medical_info'           => $request->medical_info,
            'referral'               => $request->referral,
            'agree_judges'           => $request->agree_judges,
        ]);

       return redirect()->route('applications.success')->with('success', 'Application submitted!');   }
}