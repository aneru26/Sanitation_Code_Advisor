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
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('register_id');
            $table->foreign('register_id')->references('id')->on('registers');
            $table->unsignedBigInteger('user_id'); // Assuming you have a customers table
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('sanitary_permit');
            $table->string('health_certificate');
            $table->string('storage_protection');
            $table->string('construction_premises');
            $table->string('maintenance_premises');
            $table->string('toilet_provison');
            $table->string('hand_facilities');
            $table->string('water_supply');
            $table->string('liquid_waste');
            $table->string('wholesomeness_food');
            $table->string('protection_food');
            $table->string('vermin_control');
            $table->string('cleanliness_tideness');
            $table->string('personal_cleanliness');
            $table->string('housekeeping_management');
            $table->string('condition_appliance');
            $table->string('cleanliness_appliance');
            $table->string('disease_control');
            $table->string('disposal_garbage');
            $table->string('misellaneous_training');
            $table->integer('percentage')->nullable();
            $table->tinyInteger('is_delete')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};
