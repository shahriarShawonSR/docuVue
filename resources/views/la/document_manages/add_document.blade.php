@extends('la.layouts.app')

@section('htmlheader_title')
	Document Manage View
@endsection

@section('main-content')
<div id="page-content" class="profile2">
		<section class="content">
			{!! Form::open(['action' => 'LA\Document_ManagesController@store', 'id' => 'document_manage-add-form']) !!}
        <div class="panel panel-default" charset="UTF-8">
            <div class="panel-heading">
                <strong>Document Manage Info</strong>
            </div>
            <div class="panel-body">
                <h4 class="text-success"></h4>  

                <div class="form-group row" charset="UTF-8">                    
                    <div class="col-md-12">
                        <label class="col-md-2 control-label"> Memo No </label>
                        <div class="col-md-4">
                        	<input class="form-control" placeholder="Enter enty by" required="1" name="enty_by" type="hidden" value="{{Auth::user()->id}}" aria-required="true">
                            <!-- <input type="text" class="form-control" name="sarokNo" value="" required="required" tabindex="1"> -->
                            <input class="form-control" placeholder="Enter Memo No" data-rule-maxlength="256" required="1" name="sarok_no" type="text" value="" aria-required="true">
                        </div>                        
                         <label class="col-md-2 control-label" charset="UTF-8"> Document Title </label>
                         <div class="col-md-4" charset="UTF-8">
                            <input class="form-control" placeholder="Enter Document Title" data-rule-maxlength="256" name="project_title" type="text" value="">
                        </div>
                        {{-- <div class="col-md-4" charset="UTF-8">
                        <select class="form-control" name="project_title" value="" required="required" tabindex="2">
						  <option value=" ">-- Select --</option>
							  @foreach( $module as $col )
							   <option value="{{$col->id}}">{{$col->project_title_name}}</option>					
				    		  @endforeach
                        </select>
                        </div>--}}                       
                    </div>
                </div>            
               
                <div class="form-group row">                    
                    <div class="col-md-12">                        
                        <label class="control-label col-md-2"> Others </label>
                        <div class="col-md-4">                          
                            <!-- <input type="text" class="form-control" name="orderNo" value="" tabindex="3">                                                         -->
                            <input class="form-control" placeholder="Enter Others" data-rule-maxlength="256" data-rule-unique="true" field_id="55" adminroute="admin" row_id="0" name="others" type="text" value="">
                        </div>

                        <label class="col-md-2 control-label" charset="UTF-8"> Document-Sub-title </label>
                        <div class="col-md-4" charset="UTF-8">
                            <!-- <input type="text" class="form-control" name="bookNo" value="" tabindex="4"> -->
                            <input class="form-control" placeholder="Enter Document-Sub-title" data-rule-maxlength="256" name="project_sub_title" type="text" value="">
                        </div>
                    </div>
                </div>

                <div class="form-group row">                    
                    <div class="col-md-12">                      
                        <label class="control-label col-md-2"> Issue Date </label>                        
                        <div class="col-md-4">
                            <!-- <input type="text" class="form-control datepicker" data-date-format="dd/mm/yyyy" name="issue_date" value="" data-provide="datepicker" required="required" aria-required="true" tabindex="5">    -->

                            <div class="input-group date"><input class="form-control valid" placeholder="Enter Issue Date" required="1" name="issue_date" type="text" value="" aria-required="true" aria-invalid="false"><span class="input-group-addon"><span class="fa fa-calendar"></span></span></div>                                                     
                            <!-- <input class="form-control" placeholder="Enter Issue Date" required="1" name="issue_date" type="text" value="" aria-required="true"> -->
                        </div>

                    </div>
                </div>

                <hr>            
                <strong> Additional Details </strong>
                <hr>

                <div class="form-group row">
                    <label class="control-label col-md-2">Image </label>
                    <div class="col-md-8">
                    	
                    	<input class="form-control" placeholder="Enter Image" required="1" name="image" type="hidden" value="0" aria-required="true"><a class="btn btn-default btn_upload_file" file_type="file" selecter="image">Upload <i class="fa fa-cloud-upload"></i></a>
							<a  style="margin-left: 354px;" class="uploaded_file hide" target="_blank"><i class="fa fa-file-o"></i><i title="Remove File" class="fa fa-times"></i></a>
						<!-- 	<input class="form-control" placeholder="Enter Image" required="1" name="image" type="hidden" value="0" aria-required="true">
                        <input type="file" class="form-control" name="image" onchange="loadFile(event)" tabindex="60"> -->                       
                        <!-- <input class="form-control" placeholder="Enter Image" required="1" name="image" type="hidden" value="0" aria-required="true"> -->
                    </div>
                 <!--    <div class="col-md-4">
                        <img id="blah" src="http://honeycombhr.org/ict_doc/assets/docs_management/default.png" class="img-thumbnail" width="304" height="236">
                    </div> -->
                </div>

                <div class="form-group row">
                    <label class="col-md-2 control-label"> Document Description </label>
                    <div class="col-md-10">
                        <!-- <textarea class="form-control" name="orderDescription" rows="10" tabindex="7"></textarea> -->
                        <textarea class="form-control" placeholder="Enter order description" cols="30" rows="10" name="order_description"></textarea>
                    </div>
                </div>                

            </div>
            <div class="panel-footer">
                <input type="submit" class="btn btn-info" value="Save Document" tabindex="8"> 
            </div>
        </div>
			{!! Form::close() !!}
</section>
</div>
@endsection
