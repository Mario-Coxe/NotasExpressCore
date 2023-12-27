<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD:app/Models/Department.php
use Illuminate\Database\Eloquent\Relations\HasMany;
=======
use Illuminate\Support\Facades\Hash;
use App\Models\UserLogin;
>>>>>>> e387ce99708f1bdc4654ea94becbb73cf2bff147:app/Models/Aluno.php

class Department extends Model
{
    use HasFactory;

<<<<<<< HEAD:app/Models/Department.php
    protected $fillable = [
        'name', ' team_id'
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
=======
    protected $fillable = ['nome', 'bi', 'telefone', 'password', 'foto', 'status'];
>>>>>>> e387ce99708f1bdc4654ea94becbb73cf2bff147:app/Models/Aluno.php

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }


    protected static function boot()
    {
        parent::boot();

        static::created(function ($aluno) {
            // Crie um registro correspondente na tabela user_app
            $userLogin = new UserLogin([
                'team_id' => $aluno->team_id,
                'telefone' => $aluno->telefone,
                'password' => Hash::make($aluno->password),
                'is_active' => $aluno->status,
                'type_user' => 'aluno', // Defina o type_user como 'aluno'
            ]);
            $userLogin->save();
        });
    }
}
