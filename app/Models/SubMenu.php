<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;

    protected $table = 'sub_menus';

    protected $fillable = [
        'nome_menu',
        'locale',
        'posicao',
        'link',
        'ordem_menu',
        'ativo',
    ];

    public function submenus(){
        return $this->belongsToMany('App\Models\MenuSite');
    }
}
