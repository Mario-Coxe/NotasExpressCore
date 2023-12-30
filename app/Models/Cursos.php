<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Professores;

class Cursos extends Model
{
    use HasFactory;

    
    protected $fillable = ['name', 'code', 'description', 'is_active' ];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function professor(): BelongsTo
    {
        return $this->belongsTo(Professores::class);
    }
}
