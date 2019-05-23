@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                

                <div class="panel-body">
                    <form method="POST" action="{{ action('EncounterController@insertCharacter',['encid' =>  $encid]) }}">

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

                    Select a Character:<select name="name">
                                        @foreach ($characters as $character)
                                            <option value="{{$character->id}}">{{$character->name}}</option>   
                                        @endforeach     
                    </select><br>

                    <button type="submit" class="btn btn-primary">
                        Create Encounter
                    </button>

                    </form>

                    <a href="{{action('CampaignController@indexCampaigns')}}">Go Back</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection