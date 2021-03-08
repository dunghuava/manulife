<section class="">
    <div class="container full-w">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title"><?=$category['cate_title']?></h3>
                <hr>
                <p>Hiển thị tất cả <b><?=count($list_product)?></b> sản phẩm</p>
            </div>
        </div>
    </div>
</section>
<section class="sec-tintuc-list font18">
    <div class="container">
        
        <div class="row">
            <?php
                foreach ($list_product as $product){ ?>
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
            <?php } if (empty($list_product)){ ?>
                <div class="text-center" style="color:red"><h4>Dữ liệu đang được cập nhật...</h4></div>
            <?php } ?>
        </div>
    </div>
</section>