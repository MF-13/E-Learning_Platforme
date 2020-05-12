
@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/Style_NF.css") }}>
@endsection

@section('title')
    Afficher les utilisateurs
@endsection


@section('content')

    {{-- traitement pour afficher le user --}}



    <div class="container">
        <a href="{{ route('user.create') }}"><button>Ajouter un utilisateur</button></a>
        <ul class="list-group">  
            @foreach ($users as $user)
                <h1> <a href=" {{ route('user.show',['user'=> $user->id ])}} "> User id : {{ $user->id }}  </a> </h1>
                <li class="list-group-item">{{ $user->nom_user  }}</li>
                <li class="list-group-item">{{ $user->prenom_user  }}</li>
                <li class="list-group-item">{{ $user->email_user  }}</li>
                <a href="{{ route('user.edit' , ['user' => $user->id] ) }}" ><button class="btn btn-warning">editer</button></a>

                <form action="{{ route('user.destroy', ['user' => $user->id ]) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')

            
                    <button type="submit" name="submit" class="btn btn-danger" style="display: inline;">Delete</button>
                    
                </form>

            @endforeach
        </ul>   
    </div> 


@endsection