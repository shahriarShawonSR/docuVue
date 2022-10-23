@extends('web.app')
@section('title','DocVue')
@section('content')
<!--------------HEADER AREA END----------------->
<style type="text/css">
.login-single-info textarea{
      margin-top: 0px;
    margin-bottom: 0px;
    height: 53px;
    font-size: 12px;
    padding: 7px;
    }
    .btn-success {
    color: #fff;
    background-color: #050707;
    border-color: #050707;
}
.btn-success:hover {
       color: #fff;
    background-color: #ed5322;
    border-color: #ed5322
}
    input::placeholder{
    font-size: 12px;
    }
    .login-area .login-info-area .login-info-main-content .login-info .login-single-info .login-single-input input#password {
    font-size: 32px;
    line-height: 24px !important;
    color: #000;
}
.bg_price {
    width: 100%;
    height: 500px;
    background: rgba(0, 0, 0, 0.9) 50% top;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.pricing-headline-bg {
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    height: 500px;
    background: url({{URL::asset('la-assets/web/images/company_reports.png')}} ) no-repeat 50% top;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.bg_price {
    width: 100%;
    height: 300px;
    background: rgba(0, 0, 0, 0.56) 50% top;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
  .bg_color {
    width: 100%;
    height: 300px;
    background: rgba(0, 0, 0, 0.3) 50% top;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>

<div class="headline-bg pricing-headline-bg"style="height: 300px">
        <div class="bg_price"></div>
    </div>

    <section class="faq section has-bg-color" style="margin-top: 350px">
        <div class="container">
            <h2 class="title text-center" style="padding-top:30px;">Register for 30 day FREE trial with all plans!
</h2>
 <div class="container">
 <br>
 <br>
    <section class="login-area">
        <div class="container">
             
            @if (count($errors) > 0)
            <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
                <div class="row login-info-area justify-content-md-center">
                    
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-12">
                                <!--<div class="login-box-title">-->
                                <!--    <h4><img src="{{URL::asset('la-assets/web/images/doc-vue.png')}}" alt=""></h4>-->
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="login-info-main-content">
                            <div class="row">
                                <div class="col-md-12">
                                     @if(Session::has('flash_message'))
                            <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
               @endif
                                    <div class="login-Heading">
                                        <h4 class="login-title">Register Here</h4>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="login-details">
                                        <div class="company-image">
                                            <img src="{{URL::asset('la-assets/web/images/doc-vue.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ url('/Branch_registration') }}" method="post">
                                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="login-info">
                                        <div class="login-single-info">
                                            <label for="Username">Company Name</label>
                                            <div class="login-single-input">
                                               {{Form::text('name','',['id'=>'email','class'=>'form-control login username-field' ,'required','autofocus', 'placeholder'=>"Company Name"])}}
                                               <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            </div>
                                        </div>
                                        <div class="login-single-info">
                                            <label for="Username">Email</label>
                                            <div class="login-single-input">
                                                {{Form::text('email','',['id'=>'email','class'=>'form-control login username-field' ,'required','autofocus', 'placeholder'=>"Email"])}}
                                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                            </div>
                                        </div>
                                        <div class="login-single-info">
                                            <label for="Password">Password</label>
                                            <div class="login-single-input">
                                                <input id="password" type="password" class="form-control login password-field" name="password" placeholder="***" required autocapitalize="off">
                                              
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                            </div>
                                        </div>
                                        <div class="login-single-info">
                                            <label for="Password">Confirmation Password </label>
                                            <div class="login-single-input">
                                                 <input id="password" type="password" class="form-control login password-field" name="password_confirmation" placeholder="***" required autocapitalize="off">
                                                 <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                                
                                            </div>
                                        </div>
                                          <div class="login-single-info">
                                            <label for="Password">Contact Number</label>
                                            <div class="login-single-input">
                                                 <input id="contact" class="form-control login password-field" required placeholder="+880-000-111-222" name="contact" type="tel">
                                            </div>
                                        </div>
                                        <div class="login-button-area">
                                            <input type="submit" value="Register Now" class="eku_login-btn button btn btn-success btn-large">
                                           
                                        </div>
                                         {{Form::close()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div style="margin-bottom: 20px;"></div>
</div>
<br>
<br>
<br>
</div>
<br>
<br>
<br>

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>

@endsection


