<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Calendarios extends Model
{
    use HasFactory;

    protected $table = 'calendarios';

    protected $fillable = ['theme', 'description', 'is_active'];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
