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
<section class="font18">
    <div class="container full-w">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title"><?=$product['product_title']?></h3>
                <br>
                <?php 
                if (!empty($product['product_banner'])) {
                ?>
                <div class="col-md-12" style="padding-bottom: 20px;padding-top: 10px;background:#2f714b;color:#fff">
                    <h3>
                        <div class="quote fa fa-quote-left"></div><?=$product['product_description']?>
                    </h3>
                </div>
                <?php 
                    }
                ?>
            </div>
            <div class="col-md-9">
                <br>
                <?php include ('shares.php'); ?>
                <p></p>
                <div class="font18"><p><?=$product['product_content']?></p></div>
                <!-- <hr> -->
                <!-- quyen loi -->
                <?php  
                    
                    $benefir = $product['product_benefits'];
                    if (!empty($benefir))
                    {
                        $qlhapdan = $this->Web_M->q("select * from db_other where other_id in($benefir) ");
                ?>
                <h3><b>Quyền lợi hấp dẫn</b></h3>
                
                <div class="row" style="margin-left: 0px;">
                    <?php foreach ($qlhapdan as $ql){ ?>
                        
                        <span style="background: #dedede;" class="btn btn-default"><?=$ql['other_title']?></span>
                    <?php } ?>
                </div>
                <?php } ?>
                <!-- quyen loi -->
                <h3><b>Sản phẩm liên quan</b></h3>
                <div class="row">
                    <?php
                    $splienquan = $this->Web_M->q("select a.*,b.cate_title from db_product a left join db_category b on a.product_category_id=b.cate_id where product_id<>'".$product['product_id']."' and product_active=1 order by product_id desc");
                    foreach ($splienquan as $splq){ 
                    ?>
                    <div class="col-md-4 col-xs-12">
                        <div class="item-project">
                            <a title="<?=$splq['product_title']?>" href="<?=base_url('san-pham/'.$splq['product_alias'].'-'.$splq['product_id'])?>.html">
                                <div class="project-info scaleimg">
                                    <img src="<?=resizeImg($splq['product_img'],360,203,0)?>" alt="">
                                </div>
                                <div class="project-content">
                                    <h3 class="title text-overflow"><?=$splq['product_title']?></h3>
                                    <p class="address"><?=$splq['product_description']?></b></p></p>

                                </div>
                            </a>
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