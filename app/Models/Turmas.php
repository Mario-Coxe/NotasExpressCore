<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Turmas extends Model
{
    use HasFactory;

    protected $table = 'turmas';

    protected $fillable = ['name', 'is_active'];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
