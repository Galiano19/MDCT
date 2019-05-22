@extends('layouts.lobby')

@section('content')
<div class="joinCampaign">
    <div class="container">
        <div class="row justify-content-center">
            <div class="panel-heading text-justify">JOIN A CAMPAIGN</div>
        </div> 
    </div>
    <div class="container">
        <form method="POST" action="{{ action('CampaignController@joinCampaign') }}">
            {{ csrf_field() }}

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row  mt-4">
                <label for="">Campaign Code:</label>
                <input class="form-control" type="text" name="code" id="code">
            </div>
            <div class="row mt-4">
                <button type="submit" class="btn btn-dark btn-lg">Join a Campaign</button>
            </div>
        </form>
        <div class="container">
            <div class="row justify-content-center mb-4" style="margin-bottom:2em;">
                <a  class="btn btn-dark btn-lg buttonselect" href="{{action('CampaignController@indexCampaigns')}}" role="button">
                    BACK
                </a>
            </div>
        </div>
    </div>
</div>
@endsection