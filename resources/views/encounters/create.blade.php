@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                

                <div class="panel-body">
                    <form method="POST" action="{{ action('EncounterController@store',['campid' =>  $campid]) }}">

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

                    Encounter Name:<input type="text" name="name" id="name"><br>

                    Show Saving Throws:<select name="opt_st">
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                    </select><br>
                    
                    Show Player's HP:<select name="opt_hp">
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                    </select><br>

                    Show Monster Trackign HP:<select name="opt_tracking">
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
                    </select><br>
                    
                    Show Player's Abilities:<select name="opt_abilities">
                                            <option value="0">Yes</option>
                                            <option value="1">No</option>
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