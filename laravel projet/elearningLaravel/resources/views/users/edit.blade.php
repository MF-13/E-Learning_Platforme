
@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/Style_NF.css") }}>
@endsection

@section('title')
    EDIT USER
@endsection


@section('content')
    
    <form action="{{ route('user.update', ['user' => $user->id ]) }}" method="POST">

        {{-- c'est la methode /create dans le controller UserController --}}

       
        @csrf
        @method('PUT')
        
        @include('users.form')

            <button type="submit" name="submit">Update</button>
        
    </form>

@endsection