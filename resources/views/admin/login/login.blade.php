<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
        <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
        <meta name="author" content="PIXINVENT">
        <title>Login with Background Color - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
            + Bitcoin Dashboard
        </title>
        <link rel="apple-touch-icon" href="{{url('')}}/assets/admin/app-assets/images/ico/apple-icon-120.png">
        <link rel="shortcut icon" type="image/x-icon" href="{{url('')}}/assets/admin/app-assets/images/ico/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
            rel="stylesheet">
        <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
            rel="stylesheet">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/css/vendors.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/vendors/css/forms/icheck/icheck.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/vendors/css/forms/icheck/custom.css">
        <!-- END VENDOR CSS-->
        <!-- BEGIN MODERN CSS-->
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/css/app.css">
        <!-- END MODERN CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/css/core/menu/menu-types/vertical-content-menu.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/css/core/colors/palette-gradient.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/app-assets/css/pages/login-register.css">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/assets/css/style.css">
        <!-- END Custom CSS-->
    </head>
    <body class="vertical-layout vertical-content-menu 1-column  bg-cyan bg-lighten-2 menu-expanded blank-page blank-page"
        data-open="click" data-menu="vertical-content-menu" data-col="1-column">
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <div class="app-content content">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <section class="flexbox-container">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <div class="col-md-4 col-10 box-shadow-2 p-0">
                                <div class="card border-grey border-lighten-3 m-0">
                                    <div class="card-header border-0">
                                        <div class="card-title text-center">
                                            <div class="p-1">
                                                <img src="{{url('')}}/assets/admin/app-assets/images/logo/logo-dark.png" alt="branding logo">
                                            </div>
                                        </div>
                                        <!-- <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                            <span>Easily Using</span>
                                        </h6> -->
                                    </div>
                                    <div class="card-content">
                                        <!-- <div class="card-body pt-0 text-center">
                                            <a href="#" class="btn btn-social mb-1 mr-1 btn-outline-facebook">
                                            <span class="la la-facebook"></span>
                                            <span class="px-1">facebook</span>
                                            </a>
                                            <a href="#" class="btn btn-social mb-1 mr-1 btn-outline-google">
                                            <span class="la la-google-plus font-medium-4"></span>
                                            <span class="px-1">google</span>
                                            </a>
                                        </div> -->
                                        <!-- <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2">
                                            <span>OR Using Account Details</span>
                                        </p> -->
                                        <div class="card-body pt-0">
                                            <form class="form-horizontal" action="{{route('postLoginAdmin')}}" method="POST">
                                                @csrf
                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="user-name">Tên Đăng Nhập</label>
                                                    <input name="txtUsername" type="text" class="form-control" id="user-name" placeholder="Tên Đăng Nhập Của Bạn">
                                                </fieldset>
                                                <fieldset class="form-group floating-label-form-group mb-1">
                                                    <label for="user-password">Mật Khẩu</label>
                                                    <input name="txtPassword" type="password" class="form-control" id="user-password" placeholder="Mật Khẩu Của Bạn">
                                                </fieldset>
                                                <div class="form-group row">
                                                    <div class="col-md-6 col-12 text-center text-sm-left">
                                                        <fieldset>
                                                            <input name="remember" type="checkbox" id="remember-me" class="chk-remember">
                                                            <label for="remember-me"> Ghi Nhớ Đăng Nhập</label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Quên Mật Khẩu?</a></div>
                                                </div>
                                                <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Đăng Nhập</button>
                                            </form>
                                        </div>
                                        <!-- <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                                            <span>New to Modern ?</span>
                                        </p>
                                        <div class="card-body">
                                            <a href="register-with-bg.html" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> Register</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- ////////////////////////////////////////////////////////////////////////////-->
        <!-- BEGIN VENDOR JS-->
        <script src="{{url('')}}/assets/admin/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="{{url('')}}/assets/admin/app-assets/vendors/js/ui/headroom.min.js" type="text/javascript"></script>
        <script src="{{url('')}}/assets/admin/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN MODERN JS-->
        <script src="{{url('')}}/assets/admin/app-assets/js/core/app-menu.js" type="text/javascript"></script>
        <script src="{{url('')}}/assets/admin/app-assets/js/core/app.js" type="text/javascript"></script>
        <!-- END MODERN JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="{{url('')}}/assets/admin/app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
    </body>
</html>