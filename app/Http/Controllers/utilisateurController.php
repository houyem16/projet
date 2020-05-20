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

    //
}
