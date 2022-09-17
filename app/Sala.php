<?php
namespace App;

use Illuminate\Database\Eloquent\Model; 

class Sala extends Model
{
    protected $fillable = ['nome_predio', 'imgpredio_nome', 'descricao', 'tipagem_sala', 'idtipagem_salas'];
}
