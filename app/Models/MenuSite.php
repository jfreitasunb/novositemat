<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSite extends Model
{
    use HasFactory;

    protected $table = 'menus_site';

    protected $fillable = [
        'nome_menu',
        'locale',
        'posicao',
        'link',
        'ordem_menu',
        'dropdown',
        'ativo',
    ];
}