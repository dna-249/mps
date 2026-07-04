<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            
            // Section A
            $table->string('full_name');
            $table->string('stage_name')->nullable();
            $table->integer('age');
            $table->string('gender');
            $table->string('state_origin');
            $table->string('state_residence');
            $table->string('lga');
            $table->string('phone');
            $table->string('whatsapp');
            $table->string('education');
            $table->string('career_path');
            
            // Section B
            $table->string('zone');
            $table->string('travel_willing');
            $table->json('lang');
            $table->text('reason');
            $table->string('bio', 100);
            $table->string('portrait_path');
            $table->string('video_path');
            $table->text('past_performance_links')->nullable();
            
            // Section C
            $table->string('agree_rules');
            $table->string('consent_promotions');
            $table->string('agree_property');
            $table->text('medical_info');
            $table->string('referral');
            $table->string('agree_judges');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};