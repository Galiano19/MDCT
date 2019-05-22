@extends('layouts.app')

@section('content')
<div class="container">
Campaign Name: {{$campaign->name}}<br>
Campaign Code: {{$campaign->code}}<br>
Campaign Description: {{$campaign->description}}<br>

    <div class="row">
        
        USERS: <br>
        @foreach ($users as $user)
            <div class="md-12">
                <div class="col-sm-6">{{ $user->nick }}</div>
                
                @if ($user->role == 0)
                    <div class="col-sm-6">Dungeon Master</div>
                @else
                    <div class="col-sm-6">Player</div>
                @endif
            </div>
        @endforeach
        <div class="md-12">

        @foreach ($roleuser as $role)
                @if ($role->role == 0)
                    <div class="col-sm-12"><a href="{{ action('EncounterController@createEncounter',['campid' =>  $campaign->id]) }}">Create Encounter</a></div>
                @else
                    
                @endif
            <div class="md-12">
                
            </div>
        @endforeach 
         
        </div>
        
        <div class="md-12">
            <div class="col-sm-6">Name</div>
            <div class="col-sm-6">Enter Encounter</div>
            @foreach ($encounters as $encounter)
                        <div class="col-sm-6">{{$encounter->name}}</div>
                        <div class="col-sm-6"><a href="{{action('EncounterController@enterEncounter',['encid' =>  $encounter->id])}}">Enter</a></div>
                <div class="md-12">
                    
                </div>
            @endforeach 
        </div>
       
        
    </div>
</div>
@endsection
