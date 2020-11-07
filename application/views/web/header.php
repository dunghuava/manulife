<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(!empty($seo['title'])) echo $seo['title']?></title>
    <!-- -->
    <meta name="description" content="<?php if(!empty($seo['description'])) echo $seo['description']?>" />
    <!-- google -->
    <meta itemprop="name" content="<?php if(!empty($seo['title'])) echo $seo['title']?>">
    <meta itemprop="description" content="<?php if(!empty($seo['description'])) echo $seo['description']?>">
    <meta itemprop="image" content="<?php if(!empty($seo['image'])) echo resizeImg($seo['image'],600,600,0)?>">
    <!-- facebook -->
    <meta property="og:title" content="<?php if(!empty($seo['title'])) echo $seo['title']?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?=fullAddress() ?>" />
    <meta property="og:image" content="<?php if(!empty($seo['image'])) echo resizeImg($seo['image'],600,600,0)?>" />
    <meta property="og:description" content="<?php if(!empty($seo['description'])) echo $seo['description']?>" />


    <base id="base_url" href="<?=base_url()?>">
    <link rel="stylesheet" href="<?=base_url('upload/slick/slick.css')?>">
    <link rel="stylesheet" href="<?=base_url('upload/slick/slick-theme.css')?>">
    <link rel="stylesheet" href="<?=base_url('upload/bootstrap/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?=base_url('upload/font-awesome/css/font-awesome.css')?>">
    <link rel="stylesheet" href="<?=base_url('upload/css/app.css?v='.time())?>">
    <link rel="stylesheet" href="<?=base_url('upload/css/reponsive.css?v='.time())?>">
    <script src="<?=base_url('upload/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('upload/bootstrap/js/bootstrap.js')?>"></script>
    <script src="<?=base_url('upload/slick/slick.min.js')?>"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>

<style type="text/css">
    #main-menu ul li .sub-menu {
        width: 300px;
    }

    #main-menu ul li .sub-menu li {
        border-bottom: 1px solid #ededed;
        min-height: 70px;
        padding: 10px 10px;
    }
    hr{margin:5px 0px}
</style>
<body>
<header class="app-header">
   <div class="desktop-menu">
        <?php include ('main-menu.php') ?>
   </div>
    <div id="main-nav">
        <div class="container full-w">
            <div class="row">
                <div class="col-md-9 col-xs-5">
                    <span class="app-name">
                        <a class="hidden-md hidden-lg" style="color:#fff" href="<?=base_url()?>">Manucare</a>
                        <a class="hidden-xs" style="color:#000" href="<?=base_url()?>">Manucare</a>
                    </span>
                </div>
                <div class="col-md-3 col-xs-7">
                    <div class="text-right hidden-xs">
                        <a href="<?=base_url('lien-he')?>.html">
                            <button class="btn btn-default">
                                <span class="fa fa-info"></span>&nbsp;Liên hệ
                            </button>
                        </a>
                        <button class="btn btn-default">
                            <span class="fa fa-user"></span>&nbsp;Đăng nhập
                        </button>
                    </div>
                    <div class="hidden-lg text-right nav_icon_mb">
                        <a href=""><span class="fa fa-user"></span></a>
                        <a href="javascript:$('#main-menu').toggleClass('opened')"><span class="fa fa-bars"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="backtotop"></div>
<div id="page-break"></div>
<script>
window.onscroll = function() {
    addSticky()
};
    var navbar = document.getElementById("main-nav");
    var sticky = (navbar.offsetTop+50);
    function addSticky() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
        if (window.pageYOffset >200){
            $('#backtotop').show();
        }else{
            $('#backtotop').hide();
        }
    }
</script>
