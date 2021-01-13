<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CRM | Manucare.vn</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>crm_manucare/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/owl.theme.css">
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/animate.css">
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/animation/animation-custom.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/notika-custom-icon.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>crm_manucare/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/vendor/modernizr-2.8.3.min.js"></script>
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
            width: 5px;
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
            left: 56%;
        }

    </style>
</head>

<?php 
  function appSay(){
    $hour = date('H');
    $sayText ='';
    if ($hour>=0 && $hour <5){
      $sayText='Chào buổi tối';
    }else if ($hour>=5 && $hour<12){
      $sayText='Chào buổi sáng';
    }else if ($hour>=12 && $hour<=19){
      $sayText='Chào buổi chiều';
    }else if ($hour>=19 && $hour<=23){
      $sayText='Chào buổi tối';
    }
    return '<span class="app_say">'.$sayText.'</span>';
  }

?>

<body>
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="<?=base_url('crm/')?>" style="color: white;font-weight: bold;font-size: 20px;"><?=appSay().' '.$staff_infor['staff_name']?></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="header-top-menu" style="text-align: right;">
                        <div class="dropdown-trig-sgn" style="margin-top: 11px">
                            <button class="btn triger-zoomIn waves-effect" data-toggle="dropdown" aria-expanded="false">Quản lí Khách hàng</button>
                            <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="width: 232px;">
                               <li><a href="<?=base_url('crm/')?>">Danh sách khách hàng</a></li>
                                <li><a href="<?=base_url('crm/customer/add')?>">Thêm khách hàng</a></li>
                            </ul>
                        </div>

                        <div class="dropdown-trig-sgn" style="margin-top: 11px">
                            <button class="btn triger-zoomIn waves-effect" data-toggle="dropdown" aria-expanded="false">Account</button>
                            <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="width: 232px;">
                                <li><a href="#">Thông tin cá nhân</a></li>
                                <li><a href="#">Đổi mật khẩu</a></li>
                                <li><a href="<?=base_url('crm/logout')?>">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>