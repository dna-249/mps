<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    // Define the relationship to the User
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Only include fields that are in your table
    protected $fillable = [
        'user_id', 'full_name', 'stage_name', 'age', 'gender', 'gender_other', 
        'state_origin', 'state_residence', 'lga', 'phone', 'whatsapp', 
        'education', 'career_path', 'zone', 'travel_willing', 'lang', 
        'reason', 'bio', 'portrait_path', 'video_path', 
        'past_performance_links', 'agree_rules', 'consent_promotions', 
        'agree_property', 'medical_info', 'referral', 'agree_judges'
    ];
    
    // Tell Laravel to automatically cast the JSON column
    protected $casts = [
        'lang' => 'array',
    ];
}