<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;
    protected $table = 'movimentacoes';
    protected $fillable = [
        'titulo',
        'tipo',
        'status',
        'valor',
        'data_movimentacao'
    ];

    protected $dates = [
        'data_movimentacao'
    ];

    public function getValorAttribute()
    {
        return number_format($this->attributes['valor'], 2, ',' , '.');
    }

    public function getTipoDesc()
    {
        $tipo = '';
        if($this->attributes['tipo'] == 'ENT') {
            $tipo = 'ENTRADA';
        } else {
            $tipo = 'SAÍDA';
        }

        return $tipo;
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
}
