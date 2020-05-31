
@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/Style_NF.css") }}>
@endsection

@section('title')
    EDIT USER
@endsection


@section('content')
    
    <form action="{{ route('user.update', ['user' => $user->id ]) }}" method="POST">
        @csrf
        @method('PUT')
        
        @include('users.form')

            <button type="submit" name="submit">Update</button>
        
    </form>

@endsection