<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class portfeuilleprojet extends Model 
{

    protected $table = "portfeuilleprojet";
    public $timestamps = false;
    protected $primaryKey = 'id_portefeuilleprojet';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_portefeuilleprojet', 'solde',
    ];

    public function portfeuille(){
        return $this->hasOne('App\portfeuilleprojet','id_projet');
    }

  
}
