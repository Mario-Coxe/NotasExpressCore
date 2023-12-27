<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

<<<<<<< HEAD
=======
    public function alunos(): HasMany
    {
        return $this->hasMany(Aluno::class);
    }



    public function disciplinas(): HasMany
    {
        return $this->hasMany(Aluno::class);
    }

    public function encarregados(): HasMany
    {
        return $this->hasMany(Encarregado::class);
    }

    
    public function trimestres(): HasMany
    {
        return $this->hasMany(Trimestre::class);
    }

    public function anos(): HasMany
    {
        return $this->hasMany(Anos::class);
    }



>>>>>>> e387ce99708f1bdc4654ea94becbb73cf2bff147
    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
