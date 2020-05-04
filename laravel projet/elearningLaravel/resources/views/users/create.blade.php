 @extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/Style_NF.css") }}>
@endsection

@section('title')
    ADD NEW USER
@endsection


@section('content')
    <form action="{{ route('user.store') }}" method="POST">
        
        {{-- c'est la methode /create dans le controller UserController --}}
        @csrf
           
        @include('users.form')
       

            <button type="submit" name="submit">envoyer</button>
        
    </form>
@endsection  