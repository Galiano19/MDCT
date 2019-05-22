@extends('layouts.lobby')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="panel-heading text-justify">CHARACTERS</div>
    </div>
    <div class="row justify-content-center">
        <p class="fancy nickname"><span>{{Auth::user()->nick}}</span></p>
    </div>
</div>
<div class="container">
    <div class="row justify-content-around ">
        <button type="button" class="btn btn-dark btn-lg buttonselect"><a href="{{ action('CharacterController@getCharacters') }}">My Characters</a></button>
        <button type="button" class="btn btn-dark btn-lg buttonselect"><a href="{{ action('CharacterController@createCharacters') }}">Create Characters</a></button>
    </div>
</div>
@endsection