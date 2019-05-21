@extends('layouts.lobby')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="panel-heading text-justify">MDCT</div>
        <p class="fancy nickname"><span>{{Auth::user()->nick}}</span></p>
    </div>
</div>
<div class="container">
    <div class="row selectorrow">
        <div class="col-md-6 selectbtn" align="center">
            <a href="{{ action('CharacterController@indexCharacters') }}">
                <img src="{{ asset('images/home/charactersbtn.jpg') }}" alt="">
            </a>                       
        </div>
        <div class="col-md-6 selectbtn" align="center">
            <a href="{{ url('/campaigns/') }}"><img src="{{ asset('images/home/campaignsbtn.jpg') }}" alt=""></a>
        </div>
    </div>
</div>
@endsection
