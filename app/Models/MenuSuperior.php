<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSuperior extends Model
{
    use HasFactory;

    protected $table = 'menu_superior';

    protected $fillable = [
        'locale',
        'nome_menu',
    ];
}