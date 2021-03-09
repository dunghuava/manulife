
<br>
<style>
    div img{
        max-width:100%;
    }
</style>
<section class="sec-post-detail font18">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="post-title"><?=$info_brand['other_title']?></h3>
                <hr style="margin:5px 0px">
                <div><?php include ('shares.php') ?></div>
                <img src="<?=resizeImg($info_brand['other_img'],750,355,0)?>" alt="">
                <div class="post-content">
                    <p>
                        <br>
                        <span><?=$info_brand['other_description']?></span>
                        <span><?=$info_brand['other_content']?></span>
                    </p>
                </div>
            </div>

           
        </div>
        </div>
    </div>
</section>

<?php include ('form-contact.php') ?>

