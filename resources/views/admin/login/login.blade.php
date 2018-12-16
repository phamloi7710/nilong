<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login V2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="{{url('')}}/assets/admin/login/images/icons/favicon.ico"/>
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/login/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/login/fonts/iconic/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/login/vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/login/vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/login/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/login/vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/login/vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/login/css/util.css">
        <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/login/css/main.css">
        <!-- notifications CSS
            ============================================ -->
        <link rel="stylesheet" href="{{url('')}}/assets/admin/system/css/Lobibox.min.css">
        <link rel="stylesheet" href="{{url('')}}/assets/admin/system/css/notifications.css">
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" action="{{route('postLoginAdmin')}}" method="POST">
                        @csrf
                        <span class="login100-form-title p-b-26">
                        Welcome
                        </span>
                        <span class="login100-form-title p-b-48">
                        <i class="zmdi zmdi-font"></i>
                        </span>
                        <div class="wrap-input100 validate-input" data-validate = "Nhập tên đăng nhập">
                            <input class="input100" type="text" name="txtUsername">
                            <span class="focus-input100" data-placeholder="Tên Đăng Nhập"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Nhập mật khẩu">
                            <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="txtPassword">
                            <span class="focus-input100" data-placeholder="Mật Khẩu"></span>
                        </div>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn" type="submit">
                                Đăng Nhập
                                </button>
                            </div>
                        </div>
                        <div class="text-center p-t-115">
                            <span class="txt1">
                            Quên Mật Khẩu?
                            </span>
                            <a class="txt2" href="#">
                            Bấm Vào Đây
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="dropDownSelect1"></div>
        <script src="{{url('')}}/assets/admin/login/vendor/jquery/jquery-3.2.1.min.js"></script>
        <script src="{{url('')}}/assets/admin/login/vendor/animsition/js/animsition.min.js"></script>
        <script src="{{url('')}}/assets/admin/login/vendor/bootstrap/js/popper.js"></script>
        <script src="{{url('')}}/assets/admin/login/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{url('')}}/assets/admin/login/vendor/select2/select2.min.js"></script>
        <script src="{{url('')}}/assets/admin/login/vendor/daterangepicker/moment.min.js"></script>
        <script src="{{url('')}}/assets/admin/login/vendor/daterangepicker/daterangepicker.js"></script>
        <script src="{{url('')}}/assets/admin/login/vendor/countdowntime/countdowntime.js"></script>
        <script src="{{url('')}}/assets/admin/system/js/Lobibox.js"></script>
        <script src="{{url('')}}/assets/admin/system/js/notification-active.js"></script>
        <script src="{{url('')}}/assets/admin/login/js/main.js"></script>
        @include('admin.general.notify')
    </body>
</html>