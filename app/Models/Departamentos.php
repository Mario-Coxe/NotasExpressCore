<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_active'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

}
