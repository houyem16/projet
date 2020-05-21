<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class utilisateur extends Model 
{
    protected $table = "utilisateur";
    public $timestamps = false;

    protected $fillable = [
        'password','email', 'nom', 'prenom','type'
    ];

    
}
