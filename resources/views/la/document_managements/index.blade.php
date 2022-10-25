@extends('la.layouts.app')
<style type="text/css">
    .btn-success {
        color: #fff;
        background-color: #398439;
        border-color: #255625;
    }

    .btn-success {
        background-color: #398439;
        border-color: #398439;
    }

    .btn-success:hover,
    .btn-success:active,
    .btn-success.hover {
        background-color: #008d4c;
    }

    .btn-success {
        background-color: #10cfbd;
        border-color: #0eb7a7;
        margin-right: 5px;
    }
</style>

@section('contentheader_title', 'Document Managements')
@section('contentheader_description', 'Document Managements listing')
@section('section', 'Document Managements')
@section('sub_section', 'Listing')
@section('htmlheader_title', 'Document Managements Listing')

@section('headerElems')
    @la_access('Document_Managements', 'create')
        <button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Document
            Management</button>
    @endla_access
@endsection

@section('main-content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="box box-success">
        <!--<div class="box-header"></div>-->
        <div class="box-body">
            <table id="example1" class="table table-bordered">
                <thead>
                    {{-- <tr class="success">
                        @foreach ($listing_cols as $col)
                            <th>{{ $module->fields[$col]['label'] or ucfirst($col) }}</th>
                        @endforeach
                        @if ($show_actions)
                            <th>Actions</th>
                        @endif
                    </tr> --}}
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

    @la_access('Document_Managements', 'create')
        <div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add New Document Management</h4>
                    </div>
                    {!! Form::open(['action' => 'LA\Document_ManagementsController@store', 'id' => 'document_management-add-form']) !!}
                    <div class="modal-body">
                        <div class="box-body">
                            {{-- @la_form($module) --}}
                            {{-- <label class="control-label col-md-2"> User Name </label> --}}
                            {{-- <div class="col-md-4"> --}}
                            <label class="control-label">User Name </label>
                            <input class="form-control" placeholder="Enter User Name" data-rule-maxlength="256"
                                data-rule-unique="true" field_id="55" adminroute="admin" row_id="0" name="ab" id="ab"
                                type="text" value="">    
                                     
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        {!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endla_access

@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/datatables/datatables.min.css') }}" />
@endpush

@push('scripts')
    <script src="{{ asset('la-assets/plugins/datatables/datatables.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url(config('laraadmin.adminRoute') . '/document_management_dt_ajax') }}",
                language: {
                    lengthMenu: "_MENU_",
                    search: "_INPUT_",
                    searchPlaceholder: "Search"
                },
                @if ($show_actions)
                    columnDefs: [{
                        orderable: false,
                        targets: [-1]
                    }],
                @endif
            });
            $("#document_management-add-form").validate({

            });
        });
    </script>
    {{-- <script type="text/javascript">
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    </script> --}}
@endpush
