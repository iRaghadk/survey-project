<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pre_measure_responses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('gender');
            $table->string('phone');
            $table->string('qualification');
            $table->string('specialization');
            $table->string('job_status');
            $table->unsignedTinyInteger('scale_cv');
            $table->unsignedTinyInteger('scale_search');
            $table->unsignedTinyInteger('scale_communication');
            $table->unsignedTinyInteger('scale_interview');
            $table->unsignedTinyInteger('scale_market');
            $table->unsignedTinyInteger('scale_skills');
            $table->string('had_job');
            $table->string('tamkeen');
            $table->string('linkedin');
            $table->text('expected_result');
            $table->timestamps();
        });
    }
 
    public function down(): void
    {
        Schema::dropIfExists('pre_measure_responses');
    }
};