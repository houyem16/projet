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


        $arr = array(
            "status" => false,
            "msg" => $credentials['email']
        );
        return $arr;
    }

    //
}
