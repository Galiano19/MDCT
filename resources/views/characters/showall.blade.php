@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="md-12">
            <div class="col-sm-2">Class</div>
            <div class="col-sm-5">Name</div>
            <div class="col-sm-2">Level</div>
            <div class="col-sm-3">Modify</div>
        </div>
        @foreach ($characters as $character)
            <div class="md-12">
                <div class="col-sm-2">{{ $character->class }}</div>
                <div class="col-sm-5">{{ $character->name }}</div>
                <div class="col-sm-2">{{ $character->level }}</div>
                <div class="col-sm-3"><a href="{{ action('CharacterController@modifyCharacters',['charid' => $character->id]) }}">Modify</a><br></div>
            </div>
        @endforeach
    </div>
</div>
@endsection
