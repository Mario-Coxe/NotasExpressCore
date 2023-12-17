<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserLogin extends Model
{
    use HasFactory;

    protected $table = 'user_login';
    
    protected $fillable = ['team_id', 'telefone', 'password', 'type_user', 'is_active'];


    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
