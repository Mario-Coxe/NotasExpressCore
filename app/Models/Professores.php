<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Professores extends Model
{
    use HasFactory;

    protected $table = 'professores';
    
    protected $fillable = ['name', 'address', 'email', 'phone_number', 'password', 'photo', 'is_active', 'bi'];


    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

}
