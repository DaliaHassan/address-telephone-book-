
@extends( 'layouts.dashboard.app' )

@section( 'title' )
    Clients
@stop

@section( 'content' )
    <div class="pull-right">
        <ul class="list-inline">
            <li><a href="{!! route( 'dashboard.clients.create' ) !!}" class="btn blue"><i aria-hidden="true" class="fa fa-file-o"> </i>New Client</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-list"></i>Clients list</div>
                </div>
                <div class="portlet-body">
                    <div>
                        <table class="table table-striped table-hover" id="clients-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Telephone</th>
                                <th>Address</th>
                                <th>action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footerscripts')

    <script type="text/javascript">
        requirejs([
            'jquery',
            'dataTables'
        ], function ($, DataTable) {
            'use strict';
            $('#clients-table').DataTable({
                processing: true,
                serverSide: true,
//                bFilter: false,
                ajax: '{!! route('ajax.clients.index') !!}',
                    columns: [
                { data: 'id' },
                { data: 'name'},
                { data: 'telephone'},
                { data: 'address'},

                {
                    data: null,
                    "searchable": true,
                    "orderable": true,
                    render: function( data, type, row ) {
                        return  '<a href="' + data.edit + '" class="btn blue btn-xs">Edit</a>' +
                                '<form method="POST" action="' + data.delete + '">' +
                                '<input name="_method" type="hidden" value="delete">' +
                                '{!! Form::token() !!}' +
                                '<input class="btn btn-danger btn-xs" type="submit" value="Delete">' +
                                '</form>' + '<a href="' + data.show + '" class="btn blue btn-xs">Show Details</a>';


                    }
                }
            ]
        });
        });
    </script>
@stop
