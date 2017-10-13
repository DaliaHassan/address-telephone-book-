
@extends('layouts.dashboard.app')

@section('title')
    Edit Client
@stop

@section('content')
    <div class="portlet light">
        <div class="portlet-body">
            {!! Form::model($client, ['method' => 'PATCH', 'route' => ['dashboard.clients.update', $client->id], 'class' => 'form-horizontal', 'files' => 'true']) !!}
            @include('dashboard.clients._form')
            <div class="row">
                <div class="col-md-9">
                    <p class="text-right">
                        <button class="btn btn-success">Edit</button>
                        <a href="{!! route( 'dashboard.clients.index' ) !!}" class="btn btn-danger">Cancel</a>
                    </p>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection