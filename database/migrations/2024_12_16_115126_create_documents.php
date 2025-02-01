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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('matric')->nullable();
            $table->string('inter')->nullable(); 
            $table->string('diploma')->nullable();
            $table->string('specialization')->nullable();
            $table->string('pnc')->nullable();
            $table->string('experience')->nullable();
            $table->string('other')->nullable();
            $table->string('domicile')->nullable();
            $table->string('prc')->nullable();
            $table->string('cnic')->nullable();
            $table->string('fcnic')->nullable();
            $table->string('passport')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};