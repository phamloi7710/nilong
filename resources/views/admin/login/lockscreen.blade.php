
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>
    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Lockscreen page 3 </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{url('')}}/assets/admin/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{url('')}}/assets/admin/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{url('')}}/assets/admin/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="{{url('')}}/assets/admin/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="{{url('')}}/assets/admin/images/icons/favicon.png">



    <link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/bootstrap/css/bootstrap.css">


<!-- HELPERS -->

<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/badges.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/forms.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/images.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/menus.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/tables.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/elements/timeline.css">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/icons/spinnericon/spinnericon.css">


<!-- WIDGETS -->

<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/accordion-ui/accordion.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/calendar/calendar.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/carousel/carousel.css">

<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/charts/justgage/justgage.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/charts/morris/morris.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/charts/piegage/piegage.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/charts/xcharts/xcharts.css">

<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/chosen/chosen.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/colorpicker/colorpicker.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/datatable/datatable.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/datepicker/datepicker.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/datepicker-ui/datepicker.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/dialog/dialog.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/dropdown/dropdown.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/dropzone/dropzone.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/file-input/fileinput.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/input-switch/inputswitch.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/input-switch/inputswitch-alt.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/ionrangeslider/ionrangeslider.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/jcrop/jcrop.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/jgrowl-notifications/jgrowl.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/loading-bar/loadingbar.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/maps/vector-maps/vectormaps.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/markdown/markdown.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/modal/modal.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/multi-select/multiselect.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/multi-upload/fileupload.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/nestable/nestable.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/noty-notifications/noty.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/popover/popover.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/pretty-photo/prettyphoto.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/progressbar/progressbar.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/range-slider/rangeslider.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/slidebars/slidebars.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/slider-ui/slider.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/summernote-wysiwyg/summernote-wysiwyg.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/tabs-ui/tabs.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/theme-switcher/themeswitcher.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/timepicker/timepicker.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/tocify/tocify.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/tooltip/tooltip.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/touchspin/touchspin.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/uniform/uniform.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/wizard/wizard.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/widgets/xeditable/xeditable.css">

<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="{{url('')}}/assets/admin/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="{{url('')}}/assets/admin/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="{{url('')}}/assets/admin/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="{{url('')}}/assets/admin/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="{{url('')}}/assets/admin/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="{{url('')}}/assets/admin/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="{{url('')}}/assets/admin/js-core/transition.js"></script>-->
    <script type="text/javascript" src="{{url('')}}/assets/admin/js-core/modernizr.js"></script>
    <script type="text/javascript" src="{{url('')}}/assets/admin/js-core/jquery-cookie.js"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>
<body>
<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<style type="text/css">
    html,body {
        height: 100%;
    }
    body {
        background: #fff;
        overflow: hidden;
    }
</style>

<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/wow/wow.js"></script>
<script type="text/javascript">
    /* WOW animations */

    wow = new WOW({
        animateClass: 'animated',
        offset: 100
    });
    wow.init();
</script>

<img src="{{url('')}}/assets/admin/image-resources/blurred-bg/blurred-bg-9.jpg" class="login-img wow fadeIn" alt="">

<div class="center-vertical">
    <div class="center-content row">
        <div class="col-md-4 col-sm-5 col-xs-11 col-lg-3 center-margin ">
            <div class="content-box wow bounceInDown modal-content pad20A clearfix row">
                <div class="col-md-3">
                    <img src="{{url('')}}/assets/admin/image-resources/gravatar.jpg" alt="" class="img-bordered border-gray radius-all-4 img-full">
                </div>
                <div class="col-md-9">
                    <div class="meta-box text-left">
                        <h3 class="meta-heading font-size-16">Alex Rosenberg</h3>
                        <h4 class="meta-subheading font-size-13 font-gray">Ultimate backend programmer</h4>
                        <div class="divider"></div>
                        <form action="" class="form-inline pad10T" method="">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" placeholder="Password" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button"><i class="glyph-icon icon-unlock-alt"></i></button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- WIDGETS -->

<script type="text/javascript" src="{{url('')}}/assets/admin/bootstrap/js/bootstrap.js"></script>

<!-- Bootstrap Dropdown -->

<!-- <script type="text/javascript" src="{{url('')}}/assets/admin/widgets/dropdown/dropdown.js"></script> -->

<!-- Bootstrap Tooltip -->

<!-- <script type="text/javascript" src="{{url('')}}/assets/admin/widgets/tooltip/tooltip.js"></script> -->

<!-- Bootstrap Popover -->

<!-- <script type="text/javascript" src="{{url('')}}/assets/admin/widgets/popover/popover.js"></script> -->

<!-- Bootstrap Progress Bar -->

<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/progressbar/progressbar.js"></script>

<!-- Bootstrap Buttons -->

<!-- <script type="text/javascript" src="{{url('')}}/assets/admin/widgets/button/button.js"></script> -->

<!-- Bootstrap Collapse -->

<!-- <script type="text/javascript" src="{{url('')}}/assets/admin/widgets/collapse/collapse.js"></script> -->

<!-- Superclick -->

<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/superclick/superclick.js"></script>

<!-- Input switch alternate -->

<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/input-switch/inputswitch-alt.js"></script>

<!-- Slim scroll -->

<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/slimscroll/slimscroll.js"></script>

<!-- Slidebars -->

<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/slidebars/slidebars.js"></script>
<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/slidebars/slidebars-demo.js"></script>

<!-- PieGage -->

<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/charts/piegage/piegage.js"></script>
<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/charts/piegage/piegage-demo.js"></script>

<!-- Screenfull -->

<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/screenfull/screenfull.js"></script>

<!-- Content box -->

<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/content-box/contentbox.js"></script>

<!-- Overlay -->

<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/overlay/overlay.js"></script>

<!-- Widgets init for demo -->

<script type="text/javascript" src="{{url('')}}/assets/admin/js-init/widgets-init.js"></script>

<!-- Theme layout -->

<script type="text/javascript" src="{{url('')}}/assets/admin/themes/admin/layout.js"></script>

<!-- Theme switcher -->

<script type="text/javascript" src="{{url('')}}/assets/admin/widgets/theme-switcher/themeswitcher.js"></script>

</body>
</html>