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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2023_09_05_084713_create_countries_table.php
            $table->string('name');
            $table->char('code');
            $table->char('phonecode');
=======
            $table->string('ano')->unique();
            $table->foreignId('team_id')->constrained()->cascadeOnDelete();
>>>>>>> e387ce99708f1bdc4654ea94becbb73cf2bff147:database/migrations/2023_12_02_164033_create_anos_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
