<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioLogin extends Model
{
    use HasFactory;

    protected $table = 'usuarios_login';

    public $timestamps = false;

    protected $fillable = [
        'usuario_id',
        'IP',
        'data_hora_login',
        'data_hora_logout',
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}