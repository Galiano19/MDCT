@extends('layouts.lobby')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">MDCT
                
                </div>
                <p class="fancy nickname"><span>{{Auth::user()->nick}}</span></p>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <div class="hexagondiv">
                                    
                                </div>
                            </div>
                            <div class="col-sm">
                            </div>
                        </div>
                    </div>
                    <a href="{{ action('CharacterController@indexCharacters') }}">Characters</a><br>
                    <a href="{{ action('CampaignController@indexCampaigns') }}">Campaigns</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
