@extends('welcome')
@section('content')
    <div class="container mt-5 col-lg-8">

        <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

        <form  method="post" action="{{ action('App\Http\Controllers\ProjetController@index') }}" enctype="multipart/form-data">

        @csrf
        <div class="form-group">
                <label>Entreprise :</label>
                <input type="text"  name="entreprise" class="form-control">
            </div>

            <div class="form-group">
                <label>Nom :</label>
                <input type="text"  name="nom" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Prénom :</label>
                <input type="text"  name="prenom" class="form-control">
            </div>

            <div class="form-group">
                <label>Téléphone :</label>
                <input type="tel"  name="telephone" class="form-control">
            </div>

            <div class="form-group">
                <label>Email :</label>
                <input type="email"  name="email" class="form-control">
            </div>

            <div class="form-group">
                <label>Url :</label>
                <input type="url"  name="url"  class="form-control">
            </div>

            <div class="form-group">
                <label>Logo :</label>
                <input type="file" name="logo" accept="image/png, image/jpeg">
            </div>

            <div class="form-group">
                <label>Photo :</label>
                <input type="file" name="photo" accept="image/png, image/jpeg">
            </div>



            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
    @endsection
