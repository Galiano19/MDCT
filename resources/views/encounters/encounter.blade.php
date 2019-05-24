@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        {{$encounters->name}}<br>{{$usercount}}
        <div class="col-sm-5 monsters" id="monsters">

        </div>
        <div class="col-sm-5 characters" id="characters">
            <div class="row">
            @foreach ($charasinenc as $chara)
                {{$chara->name}}<br>
            @endforeach
            </div>
        </div>
        <div class="col-sm-2 log" id="log">

        </div>
    </div>
    <div class="row buttondiv">
    <button type="submit" class="btn btn-primary" id="createMon">
        Insert Monster
    </button>
    <button type="submit" class="btn btn-primary" id="rollIn">
        Roll Initiative
    </button>
    </div>
</div>
@endsection