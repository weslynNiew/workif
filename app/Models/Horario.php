<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{

    protected $table = 'horarios';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'entrada_1',
        'saida_1',
        'entrada_2',
        'saida_2',
        'entrada_3',
        'saida_3',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
