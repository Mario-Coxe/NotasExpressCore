<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'bi', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
