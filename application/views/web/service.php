<?php 
    $service = $this->Web_M->q("select * from db_post where post_active=1 and post_type=2 order by rand()");
?>
<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title"><?=$category['cate_title']?></h3>
                <hr>
                <p>Hiển thị tất cả <b><?=count($list_service)?></b> dịch vụ</p>
            </div>
        </div>
    </div>
</section>
<section class="sec-tintuc-list font18">
    <div class="container">
        <div class="row">
            <?php
                foreach ($list_service as $service){ ?>
                <div class="col-md-4">
                    <div class="item-tin-list">
                        <a title="<?=$service['post_title']?>" href="<?=base_url('dich-vu/'.$service['post_alias'].'-'.$service['post_id'])?>.html" style="text-decoration:none">
                            <div class="cover-img scaleimg">
                                <img title="<?=$service['post_title']?>" alt="<?=$service['post_title']?>" src="<?=resizeImg($service['post_img'],360,240,0)?>" alt="">
                            </div>
                            <div class="content">
                                <h3 style="font-weight: bold;font-size: 18px;" class="title text-overflow"><?=$service['post_title']?></h3>
                                <p><span class="fa fa-calendar">&nbsp;</span><?=date('d/m/Y',strtotime($service['created_at']))?></p>
                                <p class="text-overflow"><?=$service['post_introduce']?></p>
                            </div>
                        </a>
                    </div><br>
                </div>
            <?php } if (empty($list_service)){ ?>
                <div class="text-center" style="color:red"><h4>Dữ liệu đang được cập nhật...</h4></div>
            <?php } ?>
        </div>
    </div>
</section>