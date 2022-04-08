@extends('welcome')
@section('content')
<table class="table table-hover">
                        
    {{csrf_field()}}
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Téléphone</th>
            <th scope="col" class="d-none d-sm-block" >Url</th>
            <th scope="col">Logo</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $name)
        <tr data-href="{{route('show',$name->nom)}}">
            <th >{{$name->nom}}</th>
            <td>{{$name->prenom}}</td>
            <td>{{$name->telephone}}</td>
            <td class="d-none d-sm-block">{{$name->url}}</td>
            <td><img id="logo1" src="{{ asset('/images/'.$name->logo) }}" style="width:50PX; height:50px;"></td>
            <td style="display:flex">
                <form action="{{route('form-inscription.edit',$name->id) }}" >
                    <button class="btn btn-warning" type="submit">Modifier</button>
                </form>
                <form action="{{route('form-inscription.destroy', $name->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" >Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
        @if(Session::has('success'))
                            <div class="alert alert-success">
                                    {{Session::get('success')}}
                                </div>
                        @endif
    </tbody>
</table>

<script>
$('tr[data-href]').on("click", function() {
    document.location = $(this).data('href');
});
    
</script>

@endsection