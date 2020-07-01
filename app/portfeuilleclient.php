<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class portfeuilleclient extends Model 
{
    protected $table = "portefeuilleclient";
    public $timestamps = false;
    protected $primaryKey = 'id_portefeuilleclient';
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_portefeuilleclient', 'solde', 'id_utilisateur'
    ];

    
}
