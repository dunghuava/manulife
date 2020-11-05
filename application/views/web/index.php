<?php 
    $bvnoibat = $this->Web_M->q("select a.post_id,a.post_title,a.post_img,a.post_alias from db_post a order by post_id desc limit 5");
?>
<section class="sec-slide">
    <div class="container full-w">
        <div class="row">
            <div class="col-md-9 pd0">
                <?php  include ('slider.php') ?>
            </div>
            <div class="col-md-3">
                <?php 
                    foreach ($bvnoibat as $bv)
                    {
                ?>
                    <div class="post">
                        <a class="readmore" href="<?=base_url('post/'.$bv['post_alias'].'-'.$bv['post_id'])?>.html">
                            <h4><?=$bv['post_title']?></h4>
                            <p><?=$bv['post_description']?></p>
                            <br>
                            <span class="fa fa-angle-right"></span>Readmore
                        </a>
                    </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php include('sec-muctieu.php') ?>

<?php
    $list_product = $this->Web_M->q("select * from db_product a inner join db_category b on a.product_category_id=b.cate_id order by rand() limit 3");
?>
<section class="sec-product">
    <div class="container full-w"><br>
        <div class="row">
            <div class="col-md-3">
                <h3 class="product-title">Sản phẩm tiêu biểu</h3><br>
                <a href="" class="readmore">
                    <span class="fa fa-angle-right"></span>Xem thêm
                </a>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($list_product as $key => $item) { ?>
                    <div class="col-md-4">
                            <div class="item-product">
                                <p><?=$item['cate_title']?> <a style="float:right" href="" class="readmore"><span class="fa fa-angle-right"></span>Xem thêm</a></p>  
                                <h3><?=$item['product_title']?></h3>
                                <br>
                                <img src="<?=img_path('se_05.svg')?>" alt="">
                                <br><br>
                                <div class="des"><?=$item['product_description']?></div>
                            </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    // thay where post_type=2 de lay dich vu
    $list_post = $this->Web_M->q("select a.post_id,a.post_title,b.cate_title,a.post_img,a.post_alias from db_post a inner join db_category b on a.post_category_id=b.cate_id where a.post_type=1 order by rand() limit 6");
?>
<section class="sec-product">
    <div class="container full-w"><br>
        <div class="row">
            <div class="col-md-3">
                <h3 class="product-title">Các bài viết</h3><br>
                <a href="" class="readmore">
                    <span class="fa fa-angle-right"></span>Xem thêm
                </a>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php
                    foreach ($list_post as $item){ 
                        $styles=array(
                            0=>"background:#00A758 url(".img_path($item['post_img']).") no-repeat",
                            1=>"background-size:cover",
                            2=>"background-position-x:center"
                        );
                    ?>
                        <div class="col-md-4">
                                <div class="item-product has-bg" style="<?=implode(';',$styles)?>">
                                    <div class="title">
                                        <p><?=$item['cate_title']?> <a style="float:right" href="<?=base_url('post/'.$item['post_alias'].'-'.$item['post_id'])?>.html" class="readmore"><span class="fa fa-angle-right"></span>Xem thêm</a></p>  
                                        <h3>
                                            <a href="<?=base_url('post/'.$item['post_alias'].'-'.$item['post_id'])?>.html">
                                                <?=$item['post_title']?>
                                            </a>
                                        </h3>

                                    </div>
                                    <div class="overlay"></div>
                                    <div class="des"><?=$item['post_description']?></div>
                                </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    $dichvu = $this->Web_M->q("select * from db_category where cate_parent_id=7 order by rand() limit 3");
?>
<section class="sec-product">
    <div class="container full-w"><br>
        <div class="row">
            <div class="col-md-3">
                <h3 class="product-title">Dịch vụ hỗ trợ khách hàng</h3><br>
                <a href="" class="readmore">
                    <span class="fa fa-angle-right"></span>Xem thêm
                </a>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($dichvu as $item){ ?>
                    <div class="col-md-4">
                        <a href="<?=base_url($item['cate_alias'])?>.html">
                            <div class="item-product" style="display:flex;height: 115px;overflow: hidden;">
                                <img src="<?=img_path('se_05.svg')?>" alt="" style="margin-right: 20px;">
                                <div class="des"><?=$item['cate_title']?></div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>