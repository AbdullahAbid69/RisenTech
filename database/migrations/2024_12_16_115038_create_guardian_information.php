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
        Schema::create('guardian_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('nameGuardian');
            $table->string('occupationGuardian');
            $table->string('DesignationGuardian');
            $table->string('photoUploadGuardian');
            $table->string('placeofworkGuardian');
            $table->string('NameOfOrganizationGuardian');
            $table->string('OfficeAddressGuardian');
            $table->string('PresentResidentialAddressGuardian');
            $table->string('EmailAddressGuardian');
            $table->string('OfficeNumberGuardian');
            $table->string('MobileNumberGuardian');
            $table->string('OtherNumberGuardian');
            $table->decimal('AnnualIncomeGuardian', 12, 2);
            $table->string('NationalityGuardian');
            $table->string('cnicGuardian');
            $table->enum('ReligionGuardian', ['Muslim', 'NonMuslim']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardian_information');
    }
};