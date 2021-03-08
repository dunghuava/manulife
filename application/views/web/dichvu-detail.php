<?php 
    $dvlienquan = $this->Web_M->q("select * from db_post where post_id<>'".$post['post_id']."' and post_category_id='".$post['post_category_id']."' and post_active=1 order by rand() limit 5");
?>
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
                <h3 class="post-title"><?=$post['post_title']?></h3>
                <hr style="margin:5px 0px">
                <div style="margin-left: -5px;"><?php include ('shares.php') ?></div>
                <img src="<?=resizeImg($post['post_img'],750,355,0)?>" alt="">
                <div class="post-content">
                    <p>
                        <span><?=$post['post_content']?></span>
                    </p>
                    <hr>
                    <!-- <div class="text-left">
                        <p><span class="fa fa-edit"></span>&nbsp;Nguồn: <?=$post['post_author']?></p>
                    </div> -->
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 55px;">
                <div class="item-blog">
                    <div class="title-blog">
                        <span class="fa fa-bars"></span><h3>Cùng chuyên mục</h3>
                    </div>
                    <div class="blog-content">
                        <div class="blog-larger">
                            <a href="<?=base_url('dich-vu/'.$dvlienquan[0]['post_alias'].'-'.$dvlienquan[0]['post_id'])?>">
                                <img src="<?=resizeImg($dvlienquan[0]['post_img'],338,160,0)?>" alt="">
                                <p style="height: 43px" class="title font17"><?=$dvlienquan[0]['post_title']?></p>
                            </a>
                        </div>
                        <br>
                        <?php foreach ($dvlienquan as $key => $dv) {
                            if ($key>0) {
                        ?>
                        <div class="blog-small">
                            <a href="<?=base_url('dich-vu/'.$dv['post_alias'].'-'.$dv['post_id'])?>" style="display:inline-flex">
                                <img src="<?=resizeImg($dv['post_img'],100,65,0)?>" alt="">
                                <p class="title font16"><?=$dv['post_title']?></p>
                             </a>
                        </div>
                        <?php } } ?>
                    </div>
                    <?php 
                        if (empty($dvlienquan)){
                            include ('empty.php');
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ('form-contact.php') ?>

