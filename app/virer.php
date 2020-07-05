<?php

namespace App;

//use Illuminate\Auth\Authenticatable;
//use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
//use Laravel\Lumen\Auth\Authorizable;
// Cdtp@2020 mysql
class virer extends Model 
{
    protected $table = "virer";
    public $timestamps = false;
    protected $primaryKey = 'id_virer';

    
    protected $fillable = [
        'id_virer', 'id_portefeuilleclient','id_portefeuilleprojet','montant','dateVirement'
    ];
//`id_virer``id_portefeuilleclient``id_portefeuilleprojet``montant``dateVirement`
   

    
}
