<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trimestres extends Model
{
    use HasFactory;
    protected $table = 'trimestres';

    protected $fillable = ['name', 'start_date', 'end_date', 'is_active'];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

}
