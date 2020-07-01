<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class utilisateur extends Model 
{
    protected $table = "utilisateur";
    public $timestamps = false;
    protected $primaryKey = 'id_utilisateur';

    protected $fillable = [
        'password','email', 'nom', 'prenom','type'
    ];

    public function projets()
    {
        return $this->hasMany('App\projet', 'porteur_projet', 'id_utilisateur');
    }

    public function portfeuille(){
        return $this->hasOne('App\portfeuilleclient','id_utilisateur');
    }

    
}
