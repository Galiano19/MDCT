@extends('layouts.lobby')

@section('content')
<div class="container" style="margin-top: 4%;margin-bottom: 8%;">
    <div class="row" >
        <div class="col-md-6 text-center">
        <a href="{{ action('CampaignController@createCampaigns') }}"><button type="button" class="btn btn-dark btn-lg buttonselect">Create Campaign</button></a>
        </div>
        <div class="col-md-6 text-center">
            <button type="button" class="btn btn-dark btn-lg buttonselect"><a href="{{ action('CampaignController@prejoinCampaign') }}">Join a Campaign</a></button>
        </div>
    </div>
</div>
<div class="container"style="margin-bottom: 4%;">
    <div class="row boxcontent">
        @foreach ($campaigns as $campaign)
            <a href="{{action('CampaignController@checkCampaign',['campid' =>  $campaign->campaign_id])}}">
                <div class="container-fluid charactercard">
                    <div class="row text-center">
                        <p class="charactertitle">{{ $campaign->name }}</p>
                    </div>
                    <div class="row text-center">
                        <div class="hr"></div>
                    </div>
                    <div class="row text-center">
                    <p>LEVEL: {{ $campaign->description }}</p>
                    </div>

                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection


