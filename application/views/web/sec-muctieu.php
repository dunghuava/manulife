<?php 
    $muctieu = $this->Web_M->q("select * from db_other where other_category_id=24");
?>
<section class="sec-muctieu">
    <div class="container full-w">
        <div class="row">
            <div class="col-md-3">
                <p>Mục tiêu trong tương lai của bạn là gì ?</p>
                <a class="readmore" href="" style="color: white!important"><span class="fa fa-angle-right"></span>Xem thêm</a>
            </div>
            <div class="col-md-9">
                <div class="cusselect">
                    <span>Tôi muốn&nbsp;</span><span class="selectbox" style="border-bottom: 1px dashed #fff !important;">Bảo vệ cả nhà, an tâm vui sống</span>
                    <div class="option">
                        <?php foreach ($muctieu as $item){ ?>
                            <li><a target="_blank" href="<?=$item['other_url']?>"><?=$item['other_title']?></a></li>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>