<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Citoyen extends Authenticatable
{
     protected $fillable = ['CIN', 'nom', 'prenom', 'adress', 'password'];
     protected $table = 'citoyens';
     

}
