<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('user.store') }}" method="POST">
        
        {{-- c'est la methode /create dans le controller UserController --}}
        @csrf
           
        @include('users.form')
       

            <button type="submit" name="submit">envoyer</button>
        
    </form>

</body>
</html>