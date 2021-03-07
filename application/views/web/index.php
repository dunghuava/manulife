<section class="sec-slider relative font18">
    <?php include ('slider.php') ?>
    <div id="form-absolute" class="absolute hidden-xs">
        <form class="form-group" action="<?=base_url('tim-kiem')?>" method="get">
            <input type="hidden" id="type" name="type" value="0">
            <div class="containers">
                <div class="form-inline">
                    <button class="btn_choose_type 0 clicked" onclick="typeCheck(0)" type="button">Nhân Thọ</button>
                    <button class="btn_choose_type 1" onclick="typeCheck(1)" type="button">Sức khỏe</button>
                    <button class="btn_choose_type 2" onclick="typeCheck(2)" type="button">Tiết kiệm</button>
                </div>
                <div class="form-inline relative" style="display: flex;">
                    <input type="search" class="form-control font18" name="input_search" id="input_search" placeholder="Nhập tên hoặc từ khóa (Ví dụ : Bảo hiểm nhân thọ)">
                    <button class="btn_search" type="submit"><span class="fa fa-search"></span></button>
                    <section id="livesearch" class="absolute">
                    </section>
                </div>
            </div>
        </form>
    </div>
</section>
<section class="sec-project font18">
    <div class="container">
        <h3 style="font-size:30px;margin-bottom:15px" class="main-title_">
            <a href="<?=base_url('danh-muc/du-an')?>"><b>Sản phẩm nổi bật</b></a>
        </h3>
        <div class="row">
            <?php foreach ($list_du_an as $key => $du_an) {
                $info_province_duan = $this->Province_M->find_row(['province_id'=>$du_an['project_province_id']]);
                $info_district_duan = $this->District_M->find_row(['district_id'=>$du_an['project_district_id']]);
                $info_ward_duan = $this->Ward_M->find_row(['ward_id'=>$du_an['project_ward_id']]);
                $info_status_duan = $this->Status_M->find_row(['id_status_project'=>$du_an['project_status']]);
            ?>
                <div class="col-md-4 col-xs-12">
                    <div class="item-project">
                        <a title="<?=$du_an['project_title']?>" href="<?=base_url('chi-tiet-du-an/'.$du_an['project_alias'].'-'.$du_an['project_id'])?>">
                            <div class="project-info scaleimg">
                                <img src="<?=resizeImg($du_an['project_img'],360,203,0)?>" alt="">
                                <div class="status font17 <?=$du_an['project_status']==3 ? 'sold_out':''?>">
                                    <span><?=$info_status_duan['status_project']?></span>
                                </div>
                            </div>
                            <div class="project-content">
                                <h3 class="title text-overflow"><?=$du_an['project_title']?></h3>
                                <p class="address"><?=$du_an['project_address']?></b></p></p>
                                <p class="price price-red">Giá bán: <?=$du_an['project_price']?></p>
                                <?php if ($du_an['project_price_lease']>0){ ?>
                                    <p class="price right price-red">Giá thuê: <?=$du_an['project_price_lease']?></p>
                                <?php } ?>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>

            <?php if (empty($list_du_an)) {?>
                <div class="text-center" style="color:red"><h4>Dữ liệu đang được cập nhật...</h4></div>
            <?php } ?>
            <div class="col-md-12"><a class="hplink" href="<?=base_url('tim-kiem?type=0')?>">Xem thêm dự án <span class="fa fa-angle-right"></span></a></div>
        </div>
    </div>
</section>
<section class="sec-khuvuc font18">
    <div class="container">
        <h3 style="font-size:30px;margin-bottom:15px" class="main-title_">
            <a href="<?=base_url('danh-muc/du-an')?>"><b>Sản phẩm theo danh mục</b></a>
        </h3>
        <div class="row">
            <div class="slick-khuvuc">

                <?php foreach ($duan_region as $key => $duan_re) {
                    $info_district_region = $this->District_M->find_row(['district_id'=>$duan_re['region_id_district']]);
                ?>
                    <div class="col-md-3">
                        <div class="item-khuvuc scaleimg">
                            <a href="<?=base_url('tim-kiem?type=0&district='.$duan_re['region_id_district'].'')?>">
                                <img src="<?=base_url('upload/images/'.$duan_re['region_img'].'')?>" alt="">
                               <div class="content">
                                    <p class="title"><?php echo $info_district_region['district_name'] ?></p>
                               </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="sec-project font18">
    <div class="container">
        <h3 style="font-size:30px;margin-bottom:15px" class="main-title_">
            <a href="<?=base_url('danh-muc/mua')?>"><b>Dịch vụ nổi bật</b></a>
        </h3>
        <div class="row">
            <?php
                $arr_project = $list_mua;
                $col = 4; include ('duan-item.php');
             ?>
            <div class="col-md-12"><a class="hplink" href="<?=base_url('tim-kiem?type=1')?>">Xem thêm nhà đất <span class="fa fa-angle-right"></span></a></div>
        </div>
    </div>
</section>

<section class="sec-chudautu font18">
    <div class="container">
        <h3 style="font-size:30px;margin-bottom:15px" class="main-title_">
            <a href="<?=base_url('danh-muc/danh-sach-chu-dau-tu')?>"><b>Thương hiệu bảo hiểm nổi bật</b></a>
        </h3>
        <p>Thông tin cơ bản và danh mục dự án của các chủ đầu tư bất động sản uy tín hiện nay</p>
        <div class="row">
            <?php foreach ($list_investor as $key => $investor) {?>
                <div class="col-md-2 col-xs-6">
                    <div class="item-chudautu">
                        <a title="<?=$investor['investor_title']?>" href="<?=base_url('chu-dau-tu/'.$investor['investor_alias'].'-'.$investor['investor_id'])?>">
                            <img src="<?=resizeImg($investor['investor_img'],150,90,2)?>" alt="<?=$investor['investor_title']?>">
                        </a>
                        
                    </div>
                </div>
            <?php } ?>
            <div class="col-md-12"><a class="hplink" href="<?=base_url('chu-dau-tu')?>">Xem thêm chủ đầu tư <span class="fa fa-angle-right"></span></a></div>
        </div>
    </div>
</section>
<section class="sec-tintuc font18">
    <div class="container">
        <h3 style="font-size:30px;margin-bottom:15px" class="main-title_">
            <a href="<?=base_url('danh-muc/tin-tuc')?>"><b>Kiến thức & Tin tức</b></a>
        </h3>
        <p>Tin tức mới nhất, phân tích xu hướng thị trường, cập nhật nhanh chóng và chính xác hàng ngày</p>
        <div class="row">
            <div class="col-md-6">
                <div class="item-news-big">
                    <a href="<?=base_url('bai-viet/'.$list_post[0]['post_alias'].'-'.$list_post[0]['post_id'])?>">
                       <div class="news-body scaleimg">
                            <img src="<?=resizeImg($list_post[0]['post_img'],555,319,0)?>" alt="">
                            <div class="news-content">
                                <h3 class="title"><?=$list_post[0]['post_title']?></h3>
                                <p><span class="fa fa-calendar">&nbsp;</span><?=date('d/m/Y',strtotime($list_post[0]['created_at']))?></p>
                            </div>
                       </div>
                    </a>
                </div>
                <br><a class="hplink" href="<?=base_url('danh-muc/tin-tuc')?>">Xem thêm bài viết <span class="fa fa-angle-right"></span></a>
            </div>
            <div class="col-md-6">
                <?php foreach ($list_post as $key => $post) {
                    if ($key>0) {
                ?>
                    <div class="item-news-small">
                        <a href="<?=base_url('bai-viet/'.$post['post_alias'].'-'.$post['post_id'])?>" style="display:inline-flex">
                            <div class="news-img">
                                <img src="<?=resizeImg($post['post_img'],145,96,0)?>" alt="">
                            </div>
                            <div class="news-title">
                                <h3 class="title font16"><?=$post['post_title']?></h3>
                                <p class="font14" style="font-size: 16px!important"><?=substr($post['post_introduce'],0,150)?>...</p>
                                <p class="datetime font16" style="font-size: 16px!important"><span class="fa fa-calendar">&nbsp;</span><?=date('d/m/Y',strtotime($post['created_at']))?></p>
                            </div>
                        </a>
                    </div>
                <?php } } ?>
            </div>
        </div>
    </div>
</section>
<section class="sec-khudancu font18">
    <div class="container">
        <h3 style="font-size:30px;margin-bottom:15px" class="main-title_">
            <a href="<?=base_url('khu-dan-cu')?>"><b>Những câu hỏi thường gặp</b></a>
        </h3>
        <p>Thông tin phân tích chi tiết, danh mục dự án và nhà đất đăng bán & cho thuê tại các khu vực nổi bật</p>
        <div class="row">
            <?php foreach ($list_residential as $key => $residential) {
                $info_province = $this->Province_M->find_row(['province_id'=>$residential['residential_province_id']]);
                $info_district = $this->District_M->find_row(['district_id'=>$residential['residential_district_id']]);
            ?>
                <div class="col-md-4">
                    <a href="<?=base_url('khu-dan-cu/'.$residential['residential_alias'].'-'.$residential['residential_id']) ?>" title="<?php echo $residential['residential_title'] ?>">
                        <div class="item-khudancu scaleimg">
                            <div class="cover-img">
                                <img src="<?=resizeImg($residential['residential_img'],420,220,0)?>" alt="">
                            </div>
                            <div class="content">
                                <br>
                                <h3 class="title"><?php echo $residential['residential_title'] ?></h3>
                                <hr>
                                <p class="address"><?php echo $info_district['district_name'].', '.$info_province['province_name'] ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
            <div class="col-md-12"><a class="hplink" href="<?=base_url('khu-dan-cu')?>">Xem thêm khu dân cư <span class="fa fa-angle-right"></span></a></div>
            
        </div>
    </div>
</section>


<script type="text/javascript">
    function typeCheck(type){
        $('.btn_choose_type').removeClass('clicked');
        $('.'+type).addClass('clicked');

        $('#type').val(type);
    }
</script>
