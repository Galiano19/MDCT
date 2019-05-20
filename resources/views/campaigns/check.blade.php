@extends('layouts.app')

@section('content')
<div class="container">
Campaign Name: {{$campaign->name}}<br>
Campaign Code: {{$campaign->code}}<br>
    <div class="row">
        
        USERS: <br>
        @foreach ($users as $user)
            <div class="md-12">
                <div class="col-sm-12">{{ $user->nick }}</div>
            </div>
        @endforeach
        <div class="md-12">
        <a href="">Create Encounter</a>
        </div>
    </div>
</div>
@endsection
