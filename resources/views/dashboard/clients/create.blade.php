@extends('layouts.dashboard.app')

@section('title')
    New Client
@stop

@section('content')

    <div class="portlet light">
        <div class="portlet-body">
            {!! Form::open(['route' => 'dashboard.clients.store', 'class' => 'form-horizontal', 'files' => 'true']) !!}
            @include('dashboard.clients._form')
            <div class="row">
                <div class="col-md-9">
                    <p class="text-right">
                        <button class="btn btn-success">Create</button>
                        <a href="{!! route( 'dashboard.clients.index' ) !!}" class="btn btn-danger">Cancel</a>
                    </p>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
