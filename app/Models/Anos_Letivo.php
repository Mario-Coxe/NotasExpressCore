<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anos_Letivo extends Model
{

    use HasFactory;
    protected $table = 'anos_letivos';
    
    protected $fillable = ['name', 'start_date', 'end_date', 'is_active'];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }

}
