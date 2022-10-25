@extends('la.layouts.app')

@section('contentheader_title')
    <a href="{{ url(config('laraadmin.adminRoute') . '/document_managements') }}">Document Management</a> :
@endsection
@section('contentheader_description', $document_management->$view_col)
@section('section', 'Document Managements')
@section('section_url', url(config('laraadmin.adminRoute') . '/document_managements'))
@section('sub_section', 'Edit')

@section('htmlheader_title', 'Document Managements Edit : ' . $document_management->$view_col)

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

    <div class="box">
        <div class="box-header">

        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    {!! Form::model($document_management, [
                        'route' => [config('laraadmin.adminRoute') . '.document_managements.update', $document_management->id],
                        'method' => 'PUT',
                        'id' => 'document_management-edit-form',
                    ]) !!}
                    {{-- @la_form($module) --}}
                    {{-- {{ dd($module) }} --}}
                    <label for="name">User Name</label><br />
                    <input type="text" id="ab" class="form-control" name="ab" placeholder="Enter User Name"
                        value="{{ $module->row['ab'] }}">
                    <br>
                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-success']) !!} <button class="btn btn-default pull-right"><a
                                href="{{ url(config('laraadmin.adminRoute') . '/document_managements') }}">Cancel</a></button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(function() {
            $("#document_management-edit-form").validate({

            });
        });
    </script>
@endpush
