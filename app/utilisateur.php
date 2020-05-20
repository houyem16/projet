<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class utilisateur extends Model 
{
    protected $table = "utilisateur";

    protected $fillable = [
        'password','email', 'nom', 'prenom','type'
    ];

    
}
