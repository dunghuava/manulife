<style>
    .plsubtn{
        width:25px;
        height:25px;
        line-height:25px;
        background:#019E4D;
        text-align:center;
        border-radius:50%;
        color:#fff;
        font-size: 14px;
        margin-right: 10px;
    }
    .item-blog{
        height:350px;
    }
</style>
<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-3">
                <img src="<?=img_path($product['product_img'])?>" alt="">
            </div>
            <div class="col-md-9">
                <h1><?=$product['product_title']?></h1>
                <hr>
                <h3><b><?=$product['product_description']?></b></h3>
                <p><?=$product['product_content']?></p>
                <hr>
                <?php  include ('shares.php') ?>
                <br>
                <h3><b>Sản phẩm liên quan</b></h3>
                <div class="row">
                    <?php
                    $splienquan = $this->Web_M->q("select a.*,b.cate_title from db_product a left join db_category b on a.product_category_id=b.cate_id where product_category_id='".$product['product_category_id']."' and product_id<>'".$product['product_id']."' and product_active=1 order by product_id desc");
                    foreach ($splienquan as $bv){ 
                        $styles=array(
                            0=>"background:#00A758 url(".img_path($bv['product_img']).") no-repeat",
                            1=>"background-size:cover",
                            2=>"background-position-x:center"
                        );
                    ?>
                    <div class="col-md-4">
                        <div class="item-blog" style="<?=implode(';',$styles)?>">
                            <div class="title">
                                <p><?=$bv['product_title']?> <a style="float:right" href="<?=base_url('product/'.$bv['product_alias'].'-'.$bv['product_id'])?>.html" class="readmore"><span class="fa fa-angle-right"></span>Xem thêm</a></p>  
                                <a href="<?=base_url('product/'.$bv['product_alias'].'-'.$bv['product_id'])?>.html" style="display:block">
                                    <h3><?=$bv['product_title']?></h3>
                                </a>
                            </div>
                            <div class="overlay">
                            </div>
                            <div class="des"><?=$bv['product_description']?></div>
                        </div>
                    </div>
                    <?php 
                        }
                        if (empty($splienquan)){
                            include ('empty.php');
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ('form-contact.php') ?>