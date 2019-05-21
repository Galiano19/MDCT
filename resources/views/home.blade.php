@extends('layouts.lobby')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">MDCT</div>
                <p class="fancy nickname"><span>{{Auth::user()->nick}}</span></p>
                </div>
            </div>
        </div>
        <div class="row selectorrow">
            <div class="col-md-6 selectbtn" align="center">
                <a href="{{ action('CharacterController@indexCharacters') }}">
                    <img src="{{ asset('images/home/charactersbtn.jpg') }}" alt="">
                </a>                       
            </div>
            <div class="col-md-6 selectbtn" align="center">
                <a href="{{ action('CampaignController@indexCampaigns') }}"><img src="{{ asset('images/home/campaignsbtn.jpg') }}" alt=""></a>
            </div>
        </div>
                
        </div>
    </div>
</div>
@endsection
