@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as {{Auth::user()->nick}}!<br>
                    <a href="{{ action('CharacterController@indexCharacters') }}">Characters</a><br>
                    <a href="{{ url('/campaigns/') }}">Campaigns</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
