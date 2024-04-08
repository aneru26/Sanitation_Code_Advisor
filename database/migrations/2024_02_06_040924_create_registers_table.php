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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_establishment');
            $table->string('address');
            $table->string('owner_lastname');
            $table->string('owner_firstname');
            $table->string('cp_number');
            $table->integer('number_of_personel')->nullable();
            $table->string('occupancy_classification');
            $table->integer('created_by')->nullable();
            $table->tinyInteger('is_delete')->default(0)->comment('0:not deleted, 1: deleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
