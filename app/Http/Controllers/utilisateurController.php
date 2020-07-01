<?php

namespace App\Http\Controllers;
use Laravel\Lumen\Routing\Controller; 
use App\utilisateur;
use Illuminate\Http\Request;

class utilisateurController extends Controller
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
    public function showAllutilisateur(){
        return response()->json(utilisateur::all());

    }

    public function login(Request $request) {

        $credentials = $request->input('credentials');
        $email = $credentials['email'];
        $password = $credentials['pwd'];

        $loginok = false;
        $count = utilisateur::where('email', $email)
        ->where('password', $password)
        ->count();

        if ($count == 1) {
            $loginok = true;
        }

        $arr = array(
            "status" => $loginok,
            "msg" =>"vous netes pas client"
        );
        return $arr;
    }

    public function register(Request $request){
        $utilisateur_q = $request->input('utilisateur');
        //$email = $utilisateur['email'];
        //$password = $utilisateur['pwd'];
        //$nom = $utilisateur['nom'];
        //$prenom = $utilisateur['prenom'];

        $utilisateur = new utilisateur;
        $utilisateur->email = $utilisateur_q['email'] ;
        $utilisateur->password = $utilisateur_q['password'];
        $utilisateur->nom = $utilisateur_q['nom'];
        $utilisateur->prenom = $utilisateur_q['prenom'];

        $saved = $utilisateur->save();

        $arr = array(
            "status" => $saved,
            "msg" =>""
        );
        return $arr;


    }

    public function detailuser(Request $request) {

        $email = $request->input('email');

        $utilisateur = utilisateur::where('email', $email)->first();

        

        
        return response()->json($utilisateur);
    }

    public function userprojets(Request $request) {

        $email = $request->input('email');

        $projets = utilisateur::where('email', $email)->first()->projets;
        
        return response()->json($projets);
    }

    public function paiement(Request $request){
        $montant = $request->input('montant');
        $id_utilisateur = $request->input('id_utilisateur');
        $id_projet = $request->input('id_projet');

        $utilisateur_portfeuille = utilisateur::find($id_utilisateur)->portfeuille;

        return response()->json($utilisateur_portfeuille);

    }

    //
}
