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
        {{-- normalement il faut utiliser @csrf mais il ne s affiche pas ici --}}
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            <label for="nom_user">nom</label>
            <input type="text" name="nom_user" id="nom_user">
        </div>
        <div>
            <label for="prenom_user">prenom</label>
            <input type="text" name="prenom_user" id="prenom_user">
        </div>
        <div>
            <label for="date_naiss_user">date naissance</label>
            <input type="text" name="date_naiss_user" id="date_naiss_user">
        </div>
        <div>
            <label for="num_tele_user">num telephone</label>
            <input type="text" name="num_tele_user" id="num_tele_user">
        </div>
        <div>
            <label for="filiere_user">filiere</label>
            <input type="text" name="filiere_user" id="filiere_user">
        </div>
        <div>
            <label for="email_user">email</label>
            <input type="text" name="email_user" id="email_user">
        </div>
        <div>
            <label for="mdps_user">mdps</label>
            <input type="text" name="mdps_user" id="mdps_user">
        </div>
        <div>
            <label for="adresse_user">adresse</label>
            <input type="text" name="adresse_user" id="adresse_user">
        </div>
        <div>
            <label for="type_user">type</label>
            <input type="text" name="type_user" id="type_user">
        </div>
            <button type="submit" name="submit">envoyer</button>
        
    </form>


</body>
</html>