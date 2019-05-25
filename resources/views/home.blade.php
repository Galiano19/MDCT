@extends('layouts.lobby')

@section('content')
<div class="container-fluid home">
    <a href="{{ action('CharacterController@indexCharacters') }}">
        <div class="row  characterbanner">
            <h2 class="charactertitle">CHARACTERS</h2>
            <div class="hr"></div>
            <span>Create, and edit your characters</span>
            <span>They have been waiting for you...</span>
        </div>
    </a> 
    <a href="{{ action('CampaignController@indexCampaigns') }}">
        <div class="row text-right campaignbanner">
            <h2 class="campaigntitle">CAMPAIGNS</h2>
            <div class="hr"></div>
            <span>Create or join a campaign<br>Now it's the moment of the true action</span>
        </div>
    </a> 
    <div class="row">
</div>
@endsection
