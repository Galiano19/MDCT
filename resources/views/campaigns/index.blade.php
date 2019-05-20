@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="md-12">
            <div class="col-sm-4">Name</div>
            <div class="col-sm-5">Desciption</div>
            <div class="col-sm-3">Modify</div>
        </div>
        @foreach ($campaigns as $campaign)
            <div class="md-12">
                <div class="col-sm-4">{{ $campaign->name }}</div>
                <div class="col-sm-5">{{ $campaign->description }} </div>
                
                <div class="col-sm-3"><a href="{{action('CampaignController@checkCampaign',['campid' =>  $campaign->campaign_id])}}">Check</a><br></div>
            </div>
        @endforeach
        <div class="md-12">
        <a href="{{ action('CampaignController@createCampaigns') }}">Create Campaign</a><br>
        <a href="{{ action('CampaignController@prejoinCampaign') }}">Join a Campaign</a>
        </div>
    </div>
</div>
@endsection
