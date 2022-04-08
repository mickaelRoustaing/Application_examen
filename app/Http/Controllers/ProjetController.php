<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
class ProjetController extends Controller
{
  public function index()
  {
    return view('form-inscription');
  }
  
  public function store(Request $request)
  {
  $this->validate($request,[
      'entreprise' => 'required',
      'nom'=> 'required',
      'prenom'=>'required',
      'telephone' => 'required',
      'email' => 'required',
      'url' => 'required',
      'logo' => 'required',
      'photo' => 'required',
  ]);
   
    $imageName = time() . '.' . $request->file('photo')->Extension();
    $request->file('photo')->move(public_path('images'), $imageName);

    $logo = $request->entreprise . '.' . $request->file('logo')->Extension();
    $request->file('logo')->move(public_path('images'), $logo);

    Etudiant::create([
      'entreprise' => $request->entreprise,
      'nom' => $request->nom,
      'prenom' => $request->prenom,
      'telephone' => $request->telephone,
      'email' => $request->email,
      'url' => $request->url,
      'logo' => $logo,
      'photo' => $imageName,
    ]);
  
    return back()->with('success', 'Les données ont été enregistrées avec succès.');
  }
  public function edit($id)
  {
    $membre = Etudiant::find($id);
    return view('edit', compact('membre'));
  }

  public function update(Request $request,$id)
  {
    $champrequi = $request->validate([
      'nom'=> 'required',
      'prenom'=>'required',
      'telephone' => 'required',
      'email' => 'required',
      'url' => 'required',
    ]);
    Etudiant::whereId($id)->update($champrequi);
    return back()->with('success','champ bien modifier');
  }

  public function destroy($id){

    $membre = Etudiant::find($id);
    $membre->delete();
    return back()->with('success', 'Utilisateur supprimer avec succèss');;
  }

  public function show($nom)
  {
    $user=Etudiant::where('nom', $nom)->get();
        return view('show',['user'=>$user]);
  }

}
