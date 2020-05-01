<<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <ul>  
            @foreach ($users as $user)
                <h1> <a href=" {{ route('user.show',['user'=> $user->id ])}} "> User id : {{ $user->id }}  </a> </h1>
                <li>{{ $user->nom_user  }}</li>
                <li>{{ $user->prenom_user  }}</li>
                <li>{{ $user->email_user  }}</li>
                <a href="{{ route('user.edit' , ['user' => $user->id] ) }}">editer</a>
            @endforeach
        </ul>   
    </div> 
</body>
</html>