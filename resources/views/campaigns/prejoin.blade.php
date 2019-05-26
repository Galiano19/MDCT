@extends('layouts.lobby')

@section('content')
<div class="joinCampaign">
    
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
            <div class="row justify-content-center text-center">
                <button type="submit" class="btn btn-dark btn-lg buttonselect mt-4" >Join a Campaign</button>
            </div>
        </div>
    </form>
    <div class="container">
        <div class="row justify-content-center text-center" style="margin-bottom:2em;margin-top:4%;">
            <a  class="btn btn-dark btn-lg buttonselect" href="{{ action('CampaignController@indexCampaigns') }}" style="color:#2e2e2d!important;" role="button">
                BACK
            </a>
        </div>
    </div>
</div>
@endsection