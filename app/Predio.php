<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Predio extends Model
{
    protected $fillable = ['nome_predio', 'descricao', 'endereco', 'complemento', 'numero' , 'bairro', 'cep','url_google_maps', 'imgpredio_nome', 'data_nasc'];

}