<style type="text/css">
    .item-project .project-content {
        border: 0px solid #dcdcdc;
    }
</style>
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
<?php
    $list_product = $this->Web_M->q("select * from db_product a inner join db_category b on a.product_category_id=b.cate_id order by rand() limit 6");
?>
<section class="sec-project font18">
    <div class="container">
        <h3 style="font-size:30px;margin-bottom:15px" class="main-title_">
            <a href="<?=base_url('san-pham.html')?>"><b>Sản phẩm nổi bật</b></a>
        </h3>
        <div class="row">
            <?php foreach ($list_product as $key => $product) {
                
            ?>
                <div class="col-md-4 col-xs-12">
                    <div class="item-project">
                        <a title="<?=$product['product_title']?>" href="<?=base_url('san-pham/'.$product['product_alias'].'-'.$product['product_id'])?>.html">
                            <div class="project-info scaleimg">
                                <img src="<?=resizeImg($product['product_img'],360,203,0)?>" alt="">
                            </div>
                            <div class="project-content">
                                <h3 class="title text-overflow"><?=$product['product_title']?></h3>
                                <p class="address"><?=$product['product_description']?></b></p></p>
                                
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>

            <?php if (empty($list_product)) {?>
                <div class="text-center" style="color:red"><h4>Dữ liệu đang được cập nhật...</h4></div>
            <?php } ?>
            <div class="col-md-12"><a class="hplink" href="<?=base_url('san-pham.html')?>">Xem thêm sản phẩm <span class="fa fa-angle-right"></span></a></div>
        </div>
    </div>
</section>

<?php
    $list_category = $this->Web_M->q("select * from db_category where cate_parent_id = 1  order by rand() limit 4");
?>

<section class="sec-khuvuc font18">
    <div class="container">
        <h3 style="font-size:30px;margin-bottom:15px" class="main-title_">
            <a href="<?=base_url('san-pham')?>"><b>Sản phẩm theo danh mục</b></a>
        </h3>
        <div class="row">
            <div class="slick-khuvuc">

                <?php foreach ($list_category as $key => $category) {
                ?>
                    <div class="col-md-3">
                        <div class="item-khuvuc scaleimg">
                            <a href="<?=base_url($category['cate_alias'])?>.html">
                                <img src="<?=resizeImg($category['cate_img'],263,150,0)?>" alt="">
                               <div class="content">
                                    <p class="title"><?php echo $category['cate_title'] ?></p>
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
            <a href="<?=base_url('dich-vu.html')?>"><b>Dịch vụ nổi bật</b></a>
        </h3>
        <div class="row">
            <?php foreach ($list_service as $key => $service) {
                
            ?>
                <div class="col-md-4 col-xs-12">
                    <div class="item-project">
                        <a title="<?=$service['post_title']?>" href="<?=base_url('dich-vu/'.$service['post_alias'].'-'.$service['post_id'])?>.html">
                            <div class="project-info scaleimg">
                                <img src="<?=resizeImg($service['post_img'],360,203,0)?>" alt="">
                            </div>
                            <div class="project-content">
                                <h3 class="title text-overflow"><?=$service['post_title']?></h3>
                                <p class="address"><?=$service['post_description']?></b></p></p>
                                
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>

            <?php if (empty($list_service)) {?>
                <div class="text-center" style="color:red"><h4>Dữ liệu đang được cập nhật...</h4></div>
            <?php } ?>
            <div class="col-md-12"><a class="hplink" href="<?=base_url('dich-vu.html')?>">Xem thêm dịch vụ <span class="fa fa-angle-right"></span></a></div>
        </div>
    </div>
</section>


<section class="sec-tintuc font18">
    <div class="container">
        <h3 style="font-size:30px;margin-bottom:15px" class="main-title_">
            <a href="<?=base_url('kien-thuc.html')?>"><b>Kiến thức & Tin tức</b></a>
        </h3>
        <p>Kiến thức & Tin tức mới nhất, cập nhật nhanh chóng và chính xác hàng ngày</p>
        <div class="row">
            <div class="col-md-6">
                <div class="item-news-big">
                    <a href="<?=base_url('bai-viet/'.$list_post[0]['post_alias'].'-'.$list_post[0]['post_id'])?>.html">
                       <div class="news-body scaleimg">
                            <img src="<?=resizeImg($list_post[0]['post_img'],555,319,0)?>" alt="">
                            <div class="news-content">
                                <h3 class="title"><?=$list_post[0]['post_title']?></h3>
                                <p><span class="fa fa-calendar">&nbsp;</span><?=date('d/m/Y',strtotime($list_post[0]['created_at']))?></p>
                            </div>
                       </div>
                    </a>
                </div>
                <br><a class="hplink" href="<?=base_url('kien-thuc.html')?>">Xem thêm bài viết <span class="fa fa-angle-right"></span></a>
            </div>
            <div class="col-md-6">
                <?php foreach ($list_post as $key => $post) {
                    if ($key>0) {
                ?>
                    <div class="item-news-small">
                        <a href="<?=base_url('bai-viet/'.$post['post_alias'].'-'.$post['post_id'])?>.html" style="display:inline-flex">
                            <div class="news-img">
                                <img src="<?=resizeImg($post['post_img'],145,96,0)?>" alt="">
                            </div>
                            <div class="news-title">
                                <h3 class="title font16"><?=$post['post_title']?></h3>
                                <p class="font14" style="font-size: 16px!important"><?=substr($post['post_description'],0,150)?>...</p>
                                <p class="datetime font16" style="font-size: 16px!important"><span class="fa fa-calendar">&nbsp;</span><?=date('d/m/Y',strtotime($post['created_at']))?></p>
                            </div>
                        </a>
                    </div>
                <?php } } ?>
            </div>
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
            <?php foreach ($list_brands as $key => $brands) {?>
                <div class="col-md-2 col-xs-6">
                    <div class="item-chudautu">
                        <a title="<?=$brands['other_title']?>">
                            <img src="<?=resizeImg($brands['other_img'],165,121,0)?>" alt="<?=$brands['other_title']?>">
                        </a>
                        
                    </div>
                </div>
            <?php } ?>
            <!-- <div class="col-md-12"><a class="hplink" href="<?=base_url('chu-dau-tu')?>">Xem thêm các thương hiệu <span class="fa fa-angle-right"></span></a></div> -->
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
