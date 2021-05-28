<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucional extends Model
{
    use HasFactory;

    protected $table = 'institucional';

    protected $fillable = [
        'usuario_id',
        'locale',
        'institucional',
    ];
}
