<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class CarteVisite extends Controller
{
    public function index(){
        $posts=Etudiant::all();
        return view('carte-visite', ['posts'=>$posts]);
    }

}
