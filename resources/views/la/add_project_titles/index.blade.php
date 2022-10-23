@extends("la.layouts.app")

@section("contentheader_title", "Add Project Titles")
@section("contentheader_description", "Add Project Titles listing")
@section("section", "Add Project Titles")
@section("sub_section", "Listing")
@section("htmlheader_title", "Add Project Titles Listing")

@section("headerElems")
@la_access("Add_Project_Titles", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Add Project Title</button> 
@endla_access
@endsection

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

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table id="example1" class="table table-bordered">
		<thead>
		<tr class="success">
			@foreach( $listing_cols as $col )
			<th>{{ $module->fields[$col]['label'] or ucfirst($col) }}</th>
			@endforeach
			@if($show_actions)
			<th>Actions</th>
			@endif
		</tr>
		</thead>
		<tbody>
			
		</tbody>
		</table>
	</div>
</div>

@la_access("Add_Project_Titles", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Add Project Title</h4>
			</div>
			{!! Form::open(['action' => 'LA\Add_Project_TitlesController@store', 'id' => 'add_project_title-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                   <div class="box-body">
                    <div class="form-group">
                    	<!-- <label for="enty_by">enty by* :</label> -->
                    	<input class="form-control" placeholder="Enter enty by" required="1" name="enty_by" type="hidden" value="{{Auth::user()->id}}" aria-required="true">
                    </div>
                    <div class="form-group">
                    	<label for="project_title_name">Project Title Name* :</label>
                    	<input class="form-control" placeholder="Enter Project Title Name" data-rule-maxlength="256" required="1" name="project_title_name" type="text" value="" aria-required="true">
                    </div>					
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				{!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endla_access

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/datatables/datatables.min.css') }}"/>
@endpush

@push('scripts')
<script src="{{ asset('la-assets/plugins/datatables/datatables.min.js') }}"></script>
<script>
$(function () {
	$("#example1").DataTable({
		processing: true,
        serverSide: true,
        ajax: "{{ url(config('laraadmin.adminRoute') . '/add_project_title_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
	});
	$("#add_project_title-add-form").validate({
		
	});
});
</script>
@endpush
