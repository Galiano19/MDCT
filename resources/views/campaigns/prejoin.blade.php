@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
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

                    Campaign Code:<input type="text" name="code" id="code"><br>

                    <button type="submit" class="btn btn-primary">
                        Join Campaign
                    </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection