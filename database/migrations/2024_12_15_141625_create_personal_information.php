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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('program')->nullable();
            $table->string('email')->nullable();
            $table->string('Mobile')->nullable();
            $table->string('Nameofapplicant')->nullable();
            $table->string('FatherName')->nullable();
            $table->string('Nationality')->nullable();
            $table->string('dob')->nullable();
            $table->string('cnic')->nullable();
            $table->string('HomeAddress')->nullable();
            $table->string('photoUpload')->nullable();
            $table->string('JobStatus')->nullable();
            $table->string('Religion')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Marital')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information');
    }
};