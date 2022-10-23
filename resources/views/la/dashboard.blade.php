@extends('la.layouts.app')

@section('htmlheader_title') Dashboard @endsection
@section('contentheader_title') Dashboard @endsection
@section('contentheader_description') Organisation Overview @endsection

@section('main-content')
<style type="text/css">
  .bg-green, .callout.callout-success, .alert-success, .label-success, .modal-success .modal-body {
    background-color: #00a65a !important;
}
  
</style>
<!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
              
          <div class="row">
             @foreach( $total_documents as $total_document )
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-th"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Document</span>
                        <span class="info-box-number">{{$total_document->total}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            @endforeach
             @foreach( $thismonth as $thismonth )
            <div class="col-md-4 col-sm-4 col-xs-4">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">New Document This Month</span>
                    <span class="info-box-number">{{$thismonth->total}}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
         @endforeach
       
             @foreach( $documents as $document )  

               <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="info-box">
                      <span class="info-box-icon bg-green"><i class="fa fa-th"></i></span>

                      <div class="info-box-content">
                          <span class="info-box-text">Total {{$document->project_title_name}}</span>
                          <span class="info-box-number">{{$document->total}}</span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                <!-- /.info-box -->
              </div>
          
 @endforeach
      
          </div>
          <!-- /.row -->


        </section><!-- /.content -->
@endsection

@push('styles')
<!-- Morris chart -->
<link rel="stylesheet" href="{{ asset('la-assets/plugins/morris/morris.css') }}">
<!-- jvectormap -->
<link rel="stylesheet" href="{{ asset('la-assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
<!-- Date Picker -->
<link rel="stylesheet" href="{{ asset('la-assets/plugins/datepicker/datepicker3.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('la-assets/plugins/daterangepicker/daterangepicker-bs3.css') }}">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="{{ asset('la-assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endpush


@push('scripts')
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('la-assets/plugins/morris/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('la-assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('la-assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('la-assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('la-assets/plugins/knob/jquery.knob.js') }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ asset('la-assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('la-assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('la-assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('la-assets/plugins/fastclick/fastclick.js') }}"></script>
<!-- dashboard -->
<script src="{{ asset('la-assets/js/pages/dashboard.js') }}"></script>
@endpush

@push('scripts')
<script>
(function($) {
	$('body').pgNotification({
		style: 'circle',
		title: 'Docu Vue Says :) ',
		message: "Welcome To Document Management System",
		position: "top-right",
		timeout: 0,
		type: "success",
		thumbnail: '<img width="40" height="40" style="display: inline-block;" src="{{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email, 'default') }}" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">'
	}).show();
})(window.jQuery);
</script>
@endpush