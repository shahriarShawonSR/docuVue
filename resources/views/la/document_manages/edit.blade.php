@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/document_manages') }}">Document Manage</a> :
@endsection
@section("contentheader_description", $document_manage->$view_col)
@section("section", "Document Manages")
@section("section_url", url(config('laraadmin.adminRoute') . '/document_manages'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Document Manages Edit : ".$document_manage->$view_col)

@section("main-content")

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
				{!! Form::model($document_manage, ['route' => [config('laraadmin.adminRoute') . '.document_manages.update', $document_manage->id ], 'method'=>'PUT', 'id' => 'document_manage-edit-form']) !!}
					{{-- @la_form($module) --}}
					
					{{--
					@la_input($module, 'sarok_no')
					@la_input($module, 'project_title')
					@la_input($module, 'others')
					@la_input($module, 'project_sub_title')
					@la_input($module, 'issue_date')
					@la_input($module, 'image')
					@la_input($module, 'order_description')
					@la_input($module, 'title')
					@la_input($module, 'enty_by')
					--}}
					<label for = "name">Memo No</label><br/>
                    <input type = "text" id = "name" class = "form-control" name = "name" placeholder = "Enter Department Name" value = "{{ $module->row['sarok_no'] }}">
					<label for = "name">Document Title</label><br/>
                    <input type = "text" id = "name" class = "form-control" name = "name" placeholder = "Enter Department Name" value = "{{ $module->row['project_title'] }}">
					<label for = "name">Others</label><br/>
                    <input type = "text" id = "name" class = "form-control" name = "name" placeholder = "Enter Department Name" value = "{{ $module->row['others'] }}">
					<label for = "name">Document Sub-Title</label><br/>
                    <input type = "text" id = "name" class = "form-control" name = "name" placeholder = "Enter Department Name" value = "{{ $module->row['project_sub_title'] }}">
					<label for = "name">Issue Date</label><br/>
                    <input type = "text" id = "name" class = "form-control" name = "name" placeholder = "Enter Department Name" value = "{{ $module->row['issue_date'] }}">
					<label for = "name">Immage</label><br/>
                    <input type = "text" id = "name" class = "form-control" name = "name" placeholder = "Enter Department Name" value = "{{ $module->row['image'] }}">
					<label for = "name">Document Description</label><br/>
                    <input type = "text" id = "name" class = "form-control" name = "name" placeholder = "Enter Department Name" value = "{{ $module->row['order_description'] }}">
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/document_manages') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#document_manage-edit-form").validate({
		
	});
});
</script>
@endpush
