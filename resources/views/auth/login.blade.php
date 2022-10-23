<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title> TMSS | Login </title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">



<link media="all" type="text/css" rel="stylesheet" href="https://tmss.honeycombhr.org/ict_doc/assets/global/plugins/font-awesome/css/font-awesome.min.css">

<link media="all" type="text/css" rel="stylesheet" href="https://tmss.honeycombhr.org/ict_doc/assets/global/plugins/bootstrap/css/bootstrap.min.css">

<link media="all" type="text/css" rel="stylesheet" href="https://tmss.honeycombhr.org/ict_doc/assets/admin/pages/css/login-soft.css">
<link media="all" type="text/css" rel="stylesheet" href="https://tmss.honeycombhr.org/ict_doc/assets/global/css/components.css">

<link media="all" type="text/css" rel="stylesheet" href="https://tmss.honeycombhr.org/ict_doc/assets/admin/layout/css/layout.css">

<link media="all" type="text/css" rel="stylesheet" href="https://tmss.honeycombhr.org/ict_doc/assets/admin/layout/css/themes/darkblue.css">




<!-- END STYLES -->
 <style type="text/css">
    .login .content {
    background: url(http://tmss.honeycombhr.org/ict_doc/assets/admin/pages/img/bg-white-lock.png) repeat;
    width: 360px;
    margin: 0 auto;
    margin-bottom: 0px;
    padding: 30px;
    padding-top: 20px;
    padding-bottom: 55px;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    -ms-border-radius: 7px;
    -o-border-radius: 7px;
    border-radius: 7px;
}
a {
    text-shadow: none;
    color: #000000;
}

.login .logo {
    margin: 60px auto 20px auto;
    padding: 15px;
    text-align: center;
    margin-top: -35px;
}
</style>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
  <a href="{{ url('/home') }}">
      <img src="https://tmss.honeycombhr.org/ict_doc/assets/admin/layout/img/logo-big.png" class="logo-default" height="214px" width="430px" alt="Logo">
  </a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
<div class="login-box-body">
<h3 class="form-title">Login to your account</h3>
    <form action="{{ url('/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
      <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
      <label class="control-label visible-ie8 visible-ie9">Email</label>
      <div class="input-icon">
        <i class="fa fa-user"></i>
        <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="email">
      </div>
    </div>
     
        <div class="input-icon">
        <i class="fa fa-lock"></i>
        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password">
      </div>
    <br>  
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
             <!--  <input type="submit" name=""> -->
             <!--    <button type="submit" class="btn btn-primary btn-block btn-flat">Login <i class="m-icon-swapright m-icon-white"></i></button> -->
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login <i class="m-icon-swapright m-icon-white"></i></button>
                              <!-- <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button> -->

            </div><!-- /.col -->
        </div>
    </form>

    <!--
<div class="social-auth-links text-center">
    <p>- OR -</p>
    <a href="http://localhost/lara-admin/public/auth/github" class="btn btn-block btn-social btn-github btn-flat"><i class="fa fa-github"></i> Sign in using Github</a>
    <a href="http://localhost/lara-admin/public/auth/facebook" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
    <a href="http://localhost/lara-admin/public/auth/twitter" class="btn btn-block btn-social btn-twitter btn-flat"><i class="fa fa-twitter"></i> Sign in using Twitter</a>
    <a href="http://localhost/lara-admin/public/auth/google" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
</div>
-->
  @include('auth.partials.social_login')

    <p style="float: left;margin-top: 15px;"><a href="{{ url('/password/reset') }}">I forgot my password</a> </p>
    
   <!--<p style="    text-align: center; float: right;font-size: 17px;">or<br> <a href="{{ url('/register_form') }}" class="text-center">Registration</a></p>-->

</div>
  
  
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
  TMSS ICT 2018 &copy; CREATIVE LAB  <a href="https://www.tmss-ict.com">Powered By TMSS ICT</a>
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="http://tmss.honeycombhr.org/ict_doc/assets/global/plugins/respond.min.js"></script>

<script src="http://tmss.honeycombhr.org/ict_doc/assets/global/plugins/excanvas.min.js"></script>

<![endif]-->
<script src="https://tmss.honeycombhr.org/ict_doc/assets/global/plugins/jquery.min.js"></script>

<script src="https://tmss.honeycombhr.org/ict_doc/assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="https://tmss.honeycombhr.org/ict_doc/assets/global/plugins/backstretch/jquery.backstretch.min.js"></script>

<script src="https://tmss.honeycombhr.org/ict_doc/assets/global/scripts/metronic.js"></script>

<script src="https://tmss.honeycombhr.org/ict_doc/assets/admin/layout/scripts/demo.js"></script>


<!-- END PAGE LEVEL SCRIPTS -->

<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  
       // init background slide images
       $.backstretch([
      "http://tmss.honeycombhr.org/ict_doc/assets/admin/pages/media/bg/1.jpg",
      "http://tmss.honeycombhr.org/ict_doc/assets/admin/pages/media/bg/2.jpg",
      "http://tmss.honeycombhr.org/ict_doc/assets/admin/pages/media/bg/3.jpg",
      "http://tmss.honeycombhr.org/ict_doc/assets/admin/pages/media/bg/4.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
});
</script>




<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
