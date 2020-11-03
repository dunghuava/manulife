<br><br>
<?php include ('botchat.php') ?>
<?php include ('hotline.php') ?>
<?php 
    $textFooter = $this->Web_M->q("select * from db_other where other_id=2");
    $menuFooter = $this->Web_M->q("select * from db_other where other_id in (8,9,10,11)");
?>
<footer id="footer">
    <div class="container full-w">
        <div class="row">
            <?php 
                foreach ($menuFooter as $menu)
                {
                $sub = $this->Web_M->q("select * from db_other where other_category_id = '".$menu['other_id']."'");
            ?>
            <div class="col-md-3">
                <h3 class="title-footer"><?=$menu['other_title']?></h3>
                <ul>
                    <?php foreach ($sub as $item){ ?>
                        <li><a target="_blank" href="<?=$item['other_url']?>"><?=$item['other_title']?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <?php 
                } 
            ?>
        </div>
    </div>
    <div class="line-break"></div>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-6">
                <a href="">Điều khoản sử dụng</a>
                <a href="">Chính sách bảo mật thông tin</a>
            </div>
            <div class="col-md-6">
                <div class="link-icon">
                    <a href=""><span class="fa fa-facebook"></span></a>
                </div>
                <div class="link-icon">
                    <a href=""><span class="fa fa-youtube"></span></a>
                </div>
                <div class="link-icon">
                    <a href=""><span class="fa fa-google"></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="line-break"></div>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-3">
                <h4>Manulife</h4>
            </div>
            <div class="col-md-9">
                <p>
                    <?=$textFooter[0]['other_content']?>
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="hidden-md hidden-lg"><br><br><br></div>
<script src="<?=base_url('upload/js/app.js?v='.time())?>"></script>
<script src="<?=base_url()?>upload/js/sweetalert2.js"></script>

</body>
</html>