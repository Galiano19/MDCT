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
    <div class="d-flex flex-wrap justify-content-around " style="margin-top:5%;">

        @foreach ($characters as $character)
        <div class="card charactercard" style="width: 18rem;">
            <div class="card-body ">
                <h5 class="card-title">{{ $character->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $character->class }}</h6>
                <div class="row justify-content-around">
                    <p class="card-text">LEVEL: {{ $character->level }}</p>
                    <a href="{{ action('CharacterController@modifyCharacters',['charid' => $character->id]) }}" class="card-link">MODIFY</a>
                </div>            
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container">
    <div class="row align-items-stretch justify-content-end" style="margin-bottom:2em;">
        <a  class="btn btn-dark btn-lg buttonselect" href="{{ action('CharacterController@indexCharacters') }}" role="button">
            BACK
        </a>
    </div>
</div>
@endsection
