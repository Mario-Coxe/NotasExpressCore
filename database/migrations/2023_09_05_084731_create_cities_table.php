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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2023_09_05_084731_create_cities_table.php
            $table->foreignId('state_id')->constrained()->cascadeOnDelete();
            $table->string('name');
=======
            $table->string('trimestre')->unique();
            $table->foreignId('team_id')->constrained()->cascadeOnDelete();
>>>>>>> e387ce99708f1bdc4654ea94becbb73cf2bff147:database/migrations/2023_12_02_163613_create_trimestres_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
