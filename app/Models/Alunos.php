<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Alunos extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'class_id', 'bi', 'is_active', 'sex', 'address', 'email', 'phone_number', 'password', 'photo'];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function turmas(): BelongsTo
    {
        return $this->belongsTo(Turmas::class, "class_id");
    }
}