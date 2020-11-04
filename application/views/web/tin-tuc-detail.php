<?php 
    $bvlienquan = $this->Web_M->q("select * from db_post where post_category_id='".$post['post_category_id']."' and post_active=1 order by rand() limit 5");
?>
<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-9">
                <h2><?=$post['post_title']?></h2>
                <hr>
                <?php include ('shares.php') ?>
                <div class="des font16_all">
                    <p><b><?=$post['post_description']?></b></p>
                </div>
                <div class="content font16_all">
                    <?=$post['post_content']?>
                </div>
            </div>
            <div class="col-md-3">
                <h3>BÀI VIẾT LIÊN QUAN</h3>
                <?php foreach ($bvlienquan as $bv){ ?>
                    <div class="item-tin">
                        <p><b><?=$bv['post_title']?></b></p>
                        <p><?=$bv['post_description']?></p>
                        <a class="readmore" href="<?=base_url('post/'.$bv['post_alias'].'-'.$bv['post_id'])?>.html">
                            <span class="fa fa-angle-right"></span>Xem thêm
                        </a><hr>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php include ('form-contact.php') ?>

