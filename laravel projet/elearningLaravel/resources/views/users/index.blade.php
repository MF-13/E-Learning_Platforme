<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset("css/bootstrap.css") }}>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index of users</title>
</head>
<body>
    <div class="status">
        {{-- Traitement pour ajouter la partie de alert de succes ou de  error --}}
        @if(session()->has('status'))
           <p class="alert alert-succes">{{ session()->get('status') }}</p>
        @endif
      
    </div>
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
            
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
                    {{ method_field('DELETE') }}
            
                        <button type="submit" name="submit" class="btn btn-danger" style="display: inline;">Delete</button>
                    
                </form>

            @endforeach
        </ul>   
    </div> 
</body>
</html>