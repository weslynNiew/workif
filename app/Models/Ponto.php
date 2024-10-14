<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Ponto extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'latitude',
        'longitude'
    ];

    protected $casts = [
        'expired_at' => 'datetime'
    ];


    public function usuario()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    // Scope para o período da manhã (7:00 - 12:00)
    public function scopePeriodoUm($query)
    {
        return $query->where('periodo', 1);
    }

    // Scope para o período da tarde (13:00 - 18:30)
    public function scopePeriodoDois($query)
    {
        return $query->where('periodo', 2);
    }

    // Scope para o período da noite (18:30 - 00:00)
    public function scopePeriodoTres($query)
    {
        return $query->where('periodo', 3);
    }

    public function getTotalHorasAttribute()
    {
        if ($this->saida && $this->created_at) {
            // Converte os timestamps para objetos Carbon
            $criadoEm = Carbon::parse($this->created_at);
            $saidaEm = Carbon::parse($this->saida);

            // Calcula a diferença de horas e minutos
            $totalMinutos = $saidaEm->diffInMinutes($criadoEm);

            return $totalMinutos;
        }

        return null; // Caso não haja 'saida' ou 'created_at'
    }


}
