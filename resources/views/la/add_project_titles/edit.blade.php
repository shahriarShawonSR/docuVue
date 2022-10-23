@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/add_project_titles') }}">Add Project Title</a> :
@endsection
@section("contentheader_description", $add_project_title->$view_col)
@section("section", "Add Project Titles")
@section("section_url", url(config('laraadmin.adminRoute') . '/add_project_titles'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Add Project Titles Edit : ".$add_project_title->$view_col)

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
				{!! Form::model($add_project_title, ['route' => [config('laraadmin.adminRoute') . '.add_project_titles.update', $add_project_title->id ], 'method'=>'PUT', 'id' => 'add_project_title-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'enty_by')
					@la_input($module, 'project_title_name')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/add_project_titles') }}">Cancel</a></button>
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
	$("#add_project_title-edit-form").validate({
		
	});
});
</script>
@endpush
