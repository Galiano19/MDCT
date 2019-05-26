@extends('layouts.lobby')

@section('content')
<div class="container-fluid fullpage">
    <div class="row boxcontent">
        @foreach ($characters as $character)
            <a href="{{ action('CharacterController@modifyCharacters',['charid' => $character->id]) }}">
                <div class="container-fluid charactercard">
                    <div class="row text-center">
                        <p class="charactertitle">{{ $character->name }}</p>
                    </div>
                    <div class="row text-center">
                        <div class="hr"></div>
                    </div>
                    <div class="row text-center">
                    <p>LEVEL: {{ $character->level }}</p>
                    </div>

                </div>
            </a>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-6 text-center" >
        <a href="{{ action('CharacterController@indexCharacters') }} "><button type="button" class="btn btn-dark btn-lg buttonselect" style="color:#2e2e2d!important;">BACK</button></a>
        </div>
    </div>
</div>

@endsection
