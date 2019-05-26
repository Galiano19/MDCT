@extends('layouts.lobby')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
        <a href="{{ action('CharacterController@getCharacters') }}"><button type="button" class="btn btn-dark btn-lg buttonselect">My Characters</button></a>
        </div>
        <div class="col-md-6 text-center">
            <button type="button" class="btn btn-dark btn-lg buttonselect"><a href="{{ action('CharacterController@createCharacters') }}">Create Characters</a></button>
        </div>
    </div>
</div>
@endsection