@extends('layouts.lobby')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="panel-heading text-justify">CAMPAIGNS</div>
    </div>
    <div class="row justify-content-center">        
        <p class="fancy nickname"><span>{{Auth::user()->nick}}</span></p>
        </div>
    </div> 
</div>
<div class="container">
    <div class="row justify-content-around">
        <a class="btn btn-dark btn-lg" href="{{ action('CampaignController@createCampaigns') }}">Create Campaign</a><br>
        <a class="btn btn-dark btn-lg" href="{{ action('CampaignController@prejoinCampaign') }}">Join a Campaign</a>
    </div>
</div>
<div class="container">
    <div class="d-flex flex-wrap justify-content-around " style="margin-top:5%;">

        @foreach ($campaigns as $campaign)
        <div class="card charactercard" style="width: 18rem;">
            <div class="card-body ">
                <h5 class="card-title">{{ $campaign->name }}</h5>
                <div class="row justify-content-around">
                    <p class="card-text">{{ $campaign->description }}</p>
                    <a href="{{action('CampaignController@checkCampaign',['campid' =>  $campaign->campaign_id])}}" class="card-link">CHECK</a>
                </div>            
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


