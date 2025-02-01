<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('health_certificate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
             // Section A
            $table->string('nameHealth')->nullable();
            $table->string('daysHealth')->nullable();
            $table->string('monthsHealth')->nullable();
            $table->string('yearsHealth')->nullable();
            $table->string('heightHealth')->nullable();
            $table->string('weightHealth')->nullable();
            $table->string('presentAddressHealth')->nullable();
            
            // Section B
            $table->string('smokeHealth')->nullable();
            $table->string('medicineHealth')->nullable();
            $table->string('allergyHealth')->nullable();
            
            // Disease History
            $table->string('epilepsyHealth')->nullable();
            $table->string('bpHealth')->nullable();
            $table->string('psychiatricHealth')->nullable();
            $table->string('heartHealth')->nullable();
            $table->string('hepatitisHealth')->nullable();
            $table->string('disabilityHealth')->nullable();
            
            // Section C - Vaccination History
            $table->string('measlesHealth')->nullable();
            $table->string('mumpsHealth')->nullable();
            $table->string('rubellaHealth')->nullable();
            $table->string('tetanusHealth')->nullable();
            $table->string('pertussisHealth')->nullable();
            $table->string('coughHealth')->nullable();
            $table->string('hepbHealth')->nullable();
            
            // Booster Details
            $table->string('boosterHealth')->nullable();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_certificate');
    }
};