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
        $projet->portee = $projet_q['portee'];
        $projet->somme_min = $projet_q['somme_min'];
        $projet->budget_prevu = $projet_q['budget_prevu'];
        $projet->description = $projet_q['description'];
        $projet->date_fin_prevu = $projet_q['date_fin_prevu'];
        $projet->image_url = $projet_q['image_url'];
        $saved = $projet->save();

        $arr = array(
            "status" => $saved,
            "msg" =>""
        );
        return $arr;


    }

    public function showprojet(Request $request, $id) {
        $projet = projet::find($id);
        $owner = $projet->utilisateur;
        $projet->owner = $owner;
        return response()->json($projet);
    }

    public function uploadimage(Request $request) {
        $arr = array(
            "status" => false,
            "msg" =>""
        );
        
        if ($request->hasFile('image')) {
            $original_filename = $request->file('image')->getClientOriginalName();
            $original_filename_arr = explode('.', $original_filename);
            $file_ext = end($original_filename_arr);
            $destination_path = './images/';
            $image = 'U-' . time() . '.' . $file_ext;

            if ($request->file('image')->move($destination_path, $image)) {
                $arr['status'] = true;
                $arr['msg'] = $image;
            } else {
                //return 'Cannot upload file';
            }
        } else {
           // return 'File not found';
        }

        return $arr;
    }

    //
}
