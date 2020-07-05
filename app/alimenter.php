<?php

namespace App;

//use Illuminate\Auth\Authenticatable;
//use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
//use Laravel\Lumen\Auth\Authorizable;
// Cdtp@2020 mysql
class alimenter extends Model 
{
    protected $table = "alimenter";
    public $timestamps = false;
    protected $primaryKey = 'id';

    
    protected $fillable = [
        'id', 'id_portefeuilleclient','montant','date'
    ];
//`id_virer``id_portefeuilleclient``id_portefeuilleprojet``montant``dateVirement`
   

    
}
