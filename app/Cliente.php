<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['razao_social', 'nome_fantasia', 'cnpj', 'telefone', 'celular',
    'email', 'endereco', 'complemento', 'numero' , 'bairro', 'cep', 'data_nasc'];

}