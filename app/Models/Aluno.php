<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Aluno extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'bi', 'telefone', 'password', 'foto', 'status'];
    
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
