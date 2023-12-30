<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tarefas extends Model
{
    use HasFactory;

    protected $table = 'tarefas';

    protected $fillable = ['description', 'due_date', 'is_active'];

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
