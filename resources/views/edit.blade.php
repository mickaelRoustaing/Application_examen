@extends('welcome')
@section('content')
<div class="container mt-5 col-lg-8">
    
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
    <form method="post" action="{{ route('form-inscription.update',$membre->id )}}" enctype="multipart/form-data">

        @csrf
        @method('PATCH')

        <div class="form-group">
            <label>Entreprise :</label>
            <input type="text" name="entreprise" class="form-control" value="{{$membre->entreprise}}">
        </div>

        <div class="form-group">
            <label>Nom :</label>
            <input type="text" name="nom" class="form-control" value="{{$membre->nom}}">
        </div>

        <div class="form-group">
            <label>Prénom :</label>
            <input type="text" name="prenom" class="form-control" value="{{$membre->prenom}}">
        </div>

        <div class="form-group">
            <label>Téléphone :</label>
            <input type="tel" name="telephone" class="form-control" value="{{$membre->telephone}}">
        </div>

        <div class="form-group">
            <label>Email :</label>
            <input type="email" name="email" class="form-control" value="{{$membre->email}}">
        </div>

        <div class="form-group">
            <label>Url :</label>
            <input type="url" name="url" class="form-control" value="{{$membre->url}}">
        </div>

        <div class="form-group">
            <label>Logo :</label>
            <input type="file" name="logo" accept="image/png, image/jpeg">
        </div>

        <div class="form-group">
            <label>Photo :</label>
            <input type="file" name="photo" accept="image/png, image/jpeg">
        </div>

        <input type="submit" name="send" value="Modifier" class="btn btn-dark btn-block">
    </form>
</div>
@endsection