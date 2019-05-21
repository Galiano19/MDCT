@extends('layouts.app')

@section('content')
<div class="container">
Campaign Name: {{$campaign->name}}<br>
Campaign Code: {{$campaign->code}}<br>
Campaign Code: {{$campaign->description}}<br>

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
                    <div class="col-sm-6"><a href="">Create Encounter</a></div>
                @else
                    
                @endif
            <div class="md-12">
                
            </div>
        @endforeach

        
        </div>
    </div>
</div>
@endsection
