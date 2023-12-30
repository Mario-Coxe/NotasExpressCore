<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Horarios extends Model
{
    use HasFactory;

    protected $table = 'horarios';

    protected $fillable = ['day_of_week', 'start_time', 'end_time', 'is_active'];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
