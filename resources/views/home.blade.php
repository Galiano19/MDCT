@extends('layouts.lobby')

@section('content')
<div class="container-fluid home">
    <a href="{{ action('CharacterController@indexCharacters') }}">
        <div class="row  characterbanner">
            <h2 class="charactertitle">CHARACTERS</h2>
            <div class="hr"></div>
            <p class="col">Create, and edit your characters</p>
            <p class="col">They have been waiting for you...</p>
            
        </div>
    </a> 
    <a href="{{ action('CampaignController@indexCampaigns') }}">
        <div class="row text-right campaignbanner">
            <h2 class="campaigntitle">CAMPAIGNS</h2>
            <div class="hr"></div>
            <p class="col">Create or join a campaign</p>
            <p class="col">Now it's the moment of the true action</p>
        </div>
    </a> 
    <div class="row">
</div>
@endsection
