<?php

namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller; 
use App\projet;
use Illuminate\Http\Request;

class projetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAllprojet(){
        return response()->json(projet::all());

    }

    public function ajouterp(Request $request){
        $projet_q = $request->input('projet');

        $projet=new projet;
        $projet->titre_projet = $projet_q['titre'] ;
        $projet->resume = $projet_q['resume'];
        $projet->porté = $projet_q['inlineRadioOptions'];
        $projet->somme_min = $projet_q['inlineRadioOptions1'];
        $projet->budget_prevu = $projet_q['sommeprevu'];
        $projet->description = $projet_q['description'];
        $projet->date_fin_prevu = $projet_q['date_fin_prevu'];
        $saved = $projet->save();

        $arr = array(
            "status" => $saved,
            "msg" =>""
        );
        return $arr;


    }

    //
}
