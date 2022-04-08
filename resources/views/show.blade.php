@extends('welcome')
@section('content')
<div>
    <style>
        #global{
            background-image: url("{{ asset('/images/'.$user['0']->photo) }}");
        }
    </style>
    <div style="display:flex" class="col-xs-12">
        <div id="global">
                <div id="logo">
                    <img id="logo1" src="{{ asset('/images/'.$user['0']->logo) }}" style="width:150PX; height:150px;">
                </div>
                <div id="contenu" style="position:absolute;">
                    <p>{{$user["0"]->nom}}</p>
                    <p>{{$user["0"]->prenom}}</p>
                    <p>{{$user["0"]->telephone}}</p>
                    <p>{{$user["0"]->email}}</p>
                </div>
        </div>

        <div style="margin:auto; text-align:center" class="col-xs-12">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Logo
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p> Taille Logo :</p>
                            <button class="button btn" id="tailleLogo"> + </button>
                            <button class="button btn" id="tailleLogo1"> - </button>
                            <p> Positionner description : </p>
                            <button class="button btn" onclick="placeLogo('left')">Gauche</button>
                            <button class="button btn" onclick="placeLogo('center')">Centré</button>
                            <button class="button btn" onclick="placeLogo('right')">Droite</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Texte
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <p> Positionner description : </p>
                            <button class="button btn" onclick="changePlace('left')">Gauche</button>
                            <button class="button btn" onclick="changePlace('center')">Centré</button>
                            <button class="button btn" onclick="changePlace('right')">Droite</button>
                            <br>
                            <button class="button btn" id="positionHaut" style="margin-top: 10px">↑</button>
                            <br>
                            <button class="button btn" id="positionGauche" style="margin-right: 35px">←</button>
                            <button class="button btn" id="positionDroite">→</button>
                            <br>
                            <button class="button btn" id="positionBas">↓</button>

                            <p> Taille du texte : </p>
                            <button class="button btn" id="btn"> + </button>
                            <button class="button btn" id="btn1"> - </button>

                            <p> Changer la police : </p>
                            <select id="select-font" class="form-control">
                                <option>Roboto</option>
                                <option>Oswald</option>
                                <option>Merriweather</option>
                                <option>PT Sans</option>
                                <option>Zilla Slab</option>
                            </select>
                            <input type="color" id="couleurTexte" value="#ff0000">
                            <label for="couleurTexte">Couleur Texte</label>
                            <br>
                            <input type="checkbox" id="cadre" value="gray">
                            <label for="cadre">Cadre</label>
                        </div>
                    </div>
                </div>
            </div>
            <button id="cmd">Télécharger Carte visite</button>
            <br>
            <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>
        </div>
    </div>
    <br>
</div>
@endsection