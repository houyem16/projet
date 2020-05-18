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

    //
}
