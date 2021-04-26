<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function hasAnyRole($roles){
        return null !== $this->roles()->whereIn('nome', $roles)->fisrt();
    }

    public function hasRole($role){
        return null !== $this->roles()->where('nome', $role)->fisrt();
    }
}