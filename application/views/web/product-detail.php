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
    .quote{
        font-size:40px;
        margin-right: 10px;
    }
    .item-ql{
        padding: 5px;
        border: 1px solid #dcdcdc;
        cursor: pointer;
        text-align: center;
        transition:all 0.3s;
    }
    .item-ql:hover{
        border: 1px solid #0D6F4B;
    }
</style>
<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-9">
                <h1><?=$product['product_title']?></h1>
                <hr>
                <?php 
                    $sstyles=array(
                        0=>"background:#00A758 url(".img_path($product['product_img']).") no-repeat",
                    );
                ?>
                <div class="row" style="height:155px;background:#00A758;color:#fff">
                    <div class="col-md-7" style="<?=implode(';',$sstyles)?>;height:100%">
                    </div>
                    <div class="col-md-5">
                        <h3><div class="quote fa fa-quote-left"></div><?=$product['product_description']?></h3>
                    </div>
                </div>
                <p></p>
                <div class="font16_all"><p><?=$product['product_content']?></p></div>
                <hr>
                <!-- quyen loi -->
                <?php  
                    include ('shares.php');
                    $benefir = $product['product_benefits'];
                    if (!empty($benefir))
                    {
                        $qlhapdan = $this->Web_M->q("select * from db_other where other_id in($benefir) ");
                ?>
                <h3><b>Quyền lợi hấp dẫn</b></h3>
                <div class="row">
                    <?php foreach ($qlhapdan as $ql){ ?>
                        <div class="col-md-4">
                            <div class="item-ql">
                                <img src="<?=img_path($ql['other_img'])?>" alt="">
                                <h4><?=$ql['other_title']?></4>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
                <!-- quyen loi -->
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
            <div class="col-md-3">
                <?php include ('form-seller.php') ?>
            </div>
        </div>
    </div>
</section>