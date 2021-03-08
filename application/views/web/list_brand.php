<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title">Danh sách các thương hiệu</h3>
                <hr>
                <p>Hiển thị tất cả <b><?=count($list_brands)?></b> thương hiệu</p>
            </div>
        </div>
    </div>
</section>
<section class="sec-tintuc-list font18">
    <div class="container">
        <div class="row">
            <?php
                foreach ($list_brands as $brands){ ?>
                <div class="col-md-4">
                    <div class="item-tin-list">
                        <a title="<?=$brands['other_title']?>" href="<?=base_url('thuong-hieu-'.$brands['other_id'])?>.html" style="text-decoration:none">
                            <div class="cover-img scaleimg">
                                <img title="<?=$brands['other_title']?>" alt="<?=$brands['other_title']?>" src="<?=resizeImg($brands['other_img'],360,240,0)?>" alt="">
                            </div>
                            <div class="content">
                                <h3 style="font-weight: bold;font-size: 18px;" class="title text-overflow"><?=$brands['other_title']?></h3>
                                <p class="text-overflow"><?=$brands['other_description']?></p>
                            </div>
                        </a>
                    </div><br>
                </div>
            <?php } if (empty($list_brands)){ ?>
                <div class="text-center" style="color:red"><h4>Dữ liệu đang được cập nhật...</h4></div>
            <?php } ?>
        </div>
    </div>
</section>