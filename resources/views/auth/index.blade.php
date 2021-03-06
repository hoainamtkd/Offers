
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Westilo - Bootstrap Responsive Admin Template</title>
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/font-awesome.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/material-design-iconic-font.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/bootstrap.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/animate.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/layout.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/components.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/widgets.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/plugins.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/pages.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/bootstrap-extend.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/common.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('public/admin/css/responsive.css')}}">
</head>
<body class="login-page">
<!--Page Container Start Here-->
<section class="login-container boxed-login">
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
<div class="login-form-container">
    <form action="" method="post" class="j-forms" id="forms-login" novalidate>

        <div class="login-form-header">
            <div class="logo">
                <a href="index.html" title="Admin Template"><img src="{{asset('public/admin/images/logo-dark.png')}}" alt="logo"></a>
            </div>
        </div>
        <div class="login-form-content">



            <!-- start login -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="login">
                        <i class="zmdi zmdi-account"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="text" id="login" name="login" placeholder="Username / Email">
                </div>
            </div>
            <!-- end login -->

            <!-- start password -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="password">
                        <i class="zmdi zmdi-key"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="password" id="password" name="password" placeholder="Password">
						<span class="hint">
							<a href="#" class="link">Forgot password?</a>
						</span>
                </div>
            </div>
            <!-- end password -->


            <!-- start keep logged -->
            <div class="unit">
                <label class="checkbox">
                    <input type="checkbox" name="logged" value="true" checked="">
                    <i></i>
                    Keep me logged in
                </label>
            </div>
            <!-- end keep logged -->

            <!-- start response from server -->
            <div class="response"></div>
            <!-- end response from server -->



        </div>
        <div class="login-form-footer">
            <button type="submit" class="btn-block btn btn-primary">Sign in</button>
        </div>

    </form>
</div>
</div>
</div>
<!--Footer Start Here -->
<footer class="login-page-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                <div class="footer-content">
                    <span class="footer-meta">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="http://themeforest.net/user/westilian">westilian</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End Here -->
</section>
<!--Page Container End Here-->
<script src="{{asset('public/admin/js/lib/jquery.js')}}"></script>
<script src="{{asset('public/admin/js/lib/jquery-migrate.js')}}"></script>
<script src="{{asset('public/admin/js/lib/bootstrap.js')}}"></script>
<script src="{{asset('public/admin/js/lib/jRespond.js')}}"></script>
<script src="{{asset('public/admin/js/lib/hammerjs.js')}}"></script>
<script src="{{asset('public/admin/js/lib/jquery.hammer.js')}}"></script>
<script src="{{asset('public/admin/js/lib/smoothscroll.js')}}"></script>
<script src="{{asset('public/admin/js/lib/smart-resize.js')}}"></script>

<script src="{{asset('public/admin/js/lib/jquery.validate.js')}}"></script>
<script src="{{asset('public/admin/js/lib/jquery.form.js')}}"></script>
<script src="{{asset('public/admin/js/lib/j-forms.js')}}"></script>
<script src="{{asset('public/admin/js/lib/login-validation.js')}}"></script>
</body>
</html>