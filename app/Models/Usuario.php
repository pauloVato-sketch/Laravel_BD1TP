<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    //protected $primaryKey = 'Login';
    protected $primaryKey = 'ID';

    //public $incrementing = false;
    // protected $keyType = 'string';
    protected $fillable = ['Nome', 'Login', 'Senha', 'Tipo'];
    protected $hidden = ['Senha', 'remember_token'];
    protected $table = "Usuarios";
    

}
