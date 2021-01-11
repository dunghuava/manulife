<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Animations | Notika - Notika Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>crm/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>crm/css/owl.theme.css">
    <link rel="stylesheet" href="<?=base_url()?>crm/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>crm/css/animation/animation-custom.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/vendor/modernizr-2.8.3.min.js"></script>
    <style type="text/css">
        .scrollbar
        {


            background: #fff;
            overflow-y: auto;

        }

        .style-scroll::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.1);
            background-color: #F5F5F5;
            border-radius: 10px;
        }
        
        .style-scroll::-webkit-scrollbar
        {
            width: 7px;
            background-color: #F5F5F5;
        }
        
        .style-scroll::-webkit-scrollbar-thumb
        {
            border-radius: 10px;
            background-color: #FFF;
            background-image: -webkit-gradient(linear,
             40% 0%,
             75% 84%,
             from(#00c292),
             to(#00c292),
             color-stop(.6,#00c292))
        }

        .box {
            z-index: 2;
        }

        .dropdown-trig-sgn .dropdown-menu.triger-zoomIn-dp {
            left: 60%;
        }

    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#" style="color: white;font-weight: bold;font-size: 20px;">Chào buổi sáng Trương Thuận</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="header-top-menu" style="text-align: right;">
                        <div class="dropdown-trig-sgn" style="margin-top: 11px">
                            <button class="btn triger-zoomIn waves-effect" data-toggle="dropdown" aria-expanded="false">Chọn nhân viên</button>
                            <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="width: 210px;">
                                <li><a href="#">staff 1</a></li>
                                <li><a href="#">staff 2</a></li>
                                <li><a href="#">staff 3</a></li>
                            </ul>
                        </div>

                        <div class="dropdown-trig-sgn" style="margin-top: 11px">
                            <button class="btn triger-zoomIn waves-effect" data-toggle="dropdown" aria-expanded="false">Account</button>
                            <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="width: 210px;">
                                <li><a href="#">Thông tin cá nhân</a></li>
                                <li><a href="#">Đổi mật khẩu</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <!-- <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard One</a></li>
                                        <li><a href="index-2.html">Dashboard Two</a></li>
                                        <li><a href="index-3.html">Dashboard Three</a></li>
                                        <li><a href="index-4.html">Dashboard Four</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="inbox.html">Inbox</a></li>
                                        <li><a href="view-email.html">View Email</a></li>
                                        <li><a href="compose-email.html">Compose Email</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="animations.html">Animations</a></li>
                                        <li><a href="google-map.html">Google Map</a></li>
                                        <li><a href="data-map.html">Data Maps</a></li>
                                        <li><a href="code-editor.html">Code Editor</a></li>
                                        <li><a href="image-cropper.html">Images Cropper</a></li>
                                        <li><a href="wizard.html">Wizard</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="flot-charts.html">Flot Charts</a></li>
                                        <li><a href="bar-charts.html">Bar Charts</a></li>
                                        <li><a href="line-charts.html">Line Charts</a></li>
                                        <li><a href="area-charts.html">Area Charts</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                                    <ul id="demodepart" class="collapse dropdown-header-top">
                                        <li><a href="normal-table.html">Normal Table</a></li>
                                        <li><a href="data-table.html">Data Table</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                                    <ul id="demo" class="collapse dropdown-header-top">
                                        <li><a href="form-elements.html">Form Elements</a></li>
                                        <li><a href="form-components.html">Form Components</a></li>
                                        <li><a href="form-examples.html">Form Examples</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                        <li><a href="notification.html">Notifications</a>
                                        </li>
                                        <li><a href="alert.html">Alerts</a>
                                        </li>
                                        <li><a href="modals.html">Modals</a>
                                        </li>
                                        <li><a href="buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="tabs.html">Tabs</a>
                                        </li>
                                        <li><a href="accordion.html">Accordion</a>
                                        </li>
                                        <li><a href="dialog.html">Dialogs</a>
                                        </li>
                                        <li><a href="popovers.html">Popovers</a>
                                        </li>
                                        <li><a href="tooltips.html">Tooltips</a>
                                        </li>
                                        <li><a href="dropdown.html">Dropdowns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="contact.html">Contact</a>
                                        </li>
                                        <li><a href="invoice.html">Invoice</a>
                                        </li>
                                        <li><a href="typography.html">Typography</a>
                                        </li>
                                        <li><a href="color.html">Color</a>
                                        </li>
                                        <li><a href="login-register.html">Login Register</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

     <div class="">
        <div class="container">
            <div class="row" style="margin-top: 15px;">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="font-weight: bold;font-size: 20px;">
                    Khách hàng của tôi
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="text-align: right;">
                    <button class="btn btn-default btn-icon-notika waves-effect" style="background: #54c391;color: white;"><i class="notika-icon notika-search"></i> Tìm kiếm</button>
                    <button class="btn btn-default btn-icon-notika waves-effect" style="background: #54c391;color: white;"><i class="notika-icon notika-search"></i> Sắp xếp</button>
                    <button class="btn notika-btn-deeppurple btn-reco-mg btn-button-mg waves-effect" style="background: #54c391;color: white;">Thêm khách hàng</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li style="width: 25%" class="li_active active 1" data-id="1"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Tiềm Năng</a>
                        </li>
                        <li style="width: 25%" class="li_active 2" data-id="2"><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Tư Vấn</a>
                        </li>
                        <li style="width: 25%" class="li_active 3" data-id="3"><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Thực Hiện Giao Dịch</a>
                        </li>
                        <li style="width: 25%" class="li_active 4" data-id="4"><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Kết Thúc Giao Dịch</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Animateions area start-->

    <div id="load_data"></div>
    
    <!-- Animateions area End-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="<?=base_url()?>crm/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?=base_url()?>crm/js/counterup/waypoints.min.js"></script>
    <script src="<?=base_url()?>crm/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?=base_url()?>crm/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>crm/js/flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>crm/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/knob/jquery.knob.js"></script>
    <script src="<?=base_url()?>crm/js/knob/jquery.appear.js"></script>
    <script src="<?=base_url()?>crm/js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/wave/waves.min.js"></script>
    <script src="<?=base_url()?>crm/js/wave/wave-active.js"></script>
    <!--  animation JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/animation/animation-active.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="<?=base_url()?>crm/js/tawk-chat.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    

    <script type="text/javascript">
         // $( ".dropdown-menu" ).hide();

    var key = 1;
        $( ".li_active" ).removeClass("active");
        $( "."+ key).addClass("active");

        $.ajax({
            type: "POST",
            url: "<?=base_url()?>crm/customer/loadCustomer",
            data: {key:key},
            success: function(data)
            {
                $("#load_data").html(data);
                // $("#class_gumi_"+ID).attr('required','required');
                // $("#class_ban_"+ID).attr('required','required');
            }
        });


    $('.container').on('click', '.li_active', function(){
        var key = $(this).data('id');
        $( ".li_active" ).removeClass("active");
        $( "."+ key).addClass("active");

        $.ajax({
            type: "POST",
            url: "<?=base_url()?>crm/customer/loadCustomer",
            data: {key:key},
            success: function(data)
            {
                $("#load_data").html(data);
                // $("#class_gumi_"+ID).attr('required','required');
                // $("#class_ban_"+ID).attr('required','required');
            }
        });

    });

    </script>
</body>

</html>