<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSuperior extends Model
{
    use HasFactory;

    protected $table = 'menu_site';

    protected $fillable = [
        'locale',
        'nome_menu',
        'posicao',
        'ativo',
    ];
}