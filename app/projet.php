<?php

namespace App;

//use Illuminate\Auth\Authenticatable;
//use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
//use Laravel\Lumen\Auth\Authorizable;
// Cdtp@2020 mysql
class projet extends Model 
{
    protected $table = "projet";

    
    protected $fillable = [
        'id_projet', 'titre_projet','description','budget_prevu	','somme_collectee','resume','date_fin_prevu','somme_min',
        'id_categorie','id_adresse','porteur_projet','porté'
    ];

    
}
