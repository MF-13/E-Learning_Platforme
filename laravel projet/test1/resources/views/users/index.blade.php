<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index of users</title>
</head>
<body>
 <ul>  
    @foreach ($users as $user)
        <h1> <a href=" {{ route('user.show',['user'=> $user->id ])}} "> User id : {{ $user->id }}  </a> </h1>
        <li>{{ $user->nom_user  }}</li>
        <li>{{ $user->prenom_user  }}</li>
        <li>{{ $user->email_user  }}</li>

    @endforeach
 </ul>    
</body>
</html>