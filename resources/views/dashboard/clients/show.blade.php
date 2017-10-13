@extends('layouts.dashboard.app')

@section('title')
    Client Details
@stop

@section('content')
    <div class="portlet light">
        <div class="portlet-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Client Name</label>
                        <div class="col-md-9">
                            <p>{{$client->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Client Phone</label>
                        <div class="col-md-9">
                            <p>{{$client->telephone}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Address</label>
                        <div class="col-md-9">
                            <p>{{$client->address}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <p class="text-right">
                            <a href="{!! route( 'dashboard.clients.index' ) !!}" class="btn btn-success">Back</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
