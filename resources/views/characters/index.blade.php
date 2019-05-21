@extends('layouts.lobby')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CHARACTERS</div>
                </div>
            </div>
        </div>
    <div class="">
        <div class="row">
        <button type="button" class="btn btn-dark"><a href="{{ action('CharacterController@getCharacters') }}">My Characters</a></button>
        <button type="button" class="btn btn-dark"><a href="{{ action('CharacterController@createCharacters') }}">Create Characters</a></button>
        </div>
    </div>
</div>
@endsection