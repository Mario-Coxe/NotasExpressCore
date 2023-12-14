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
        Schema::create('encarregados', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('bi', 20)->unique();
            $table->string('telefone', 13)->unique();
            $table->string('password', 20);
            $table->string('foto', 100)->default('default.jpg');
            $table->boolean('status')->default(false);
            $table->foreignId('aluno_id')->constrained('alunos');
            $table->foreignId('team_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encarregados');
    }
};
