<div id="main-menu">
    <ul class="main-menu">
        <li>
            <a href=""><span class="fa fa-home"></span><br>Trang chủ</a>
        </li>
        <li class="parent">
            <a href=""><span class="fa fa-calculator"></span><br>Sản phẩm</a>
            <ul class="sub-menu">
               <li>Manulife</li>
               <?php for ($i=0;$i<15;$i++){ ?>
                <li><a href="">Submenu 01</a></li>
               <?php } ?>
            </ul>
        </li>
        <li class="parent">
            <a href=""><span class="fa fa-cogs"></span><br>Dịch vụ</a>
            <ul class="sub-menu">
               <li>Manulife</li>
               <?php for ($i=0;$i<15;$i++){ ?>
                <li><a href="">Submenu 02</a></li>
               <?php } ?>
            </ul>
        </li>
        <li>
            <a href="<?=base_url('tin-tuc-detail')?>"><span class="fa fa-book"></span><br>Kiên thức</a>
        </li>
        <li class="parent">
            <a href=""><span class="fa fa-youtube"></span><br>Movie</a>
            <ul class="sub-menu">
               <li>Manulife</li>
               <?php for ($i=0;$i<15;$i++){ ?>
                <li><a href="">Submenu 03</a></li>
               <?php } ?>
            </ul>
        </li>
        <li>
            <a href="<?=base_url('about-us')?>"><span class="fa fa-info"></span><br>Về chúng tôi</a>
        </li>
        <li>
            <a href="<?=base_url('contact')?>"><span class="fa fa-phone"></span><br>Liên hệ</a>
        </li>
    </ul>
</div>