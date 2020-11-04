<?php 
   $subcate = $this->Web_M->q("select * from db_category where cate_active=1 and cate_parent_id='".$category['cate_id']."'");
?>
<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-3">
                <img src="<?=img_path('cate.jpeg')?>" alt="">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="margin-top:5px" class="text-uppercase"><?=$category['cate_title']?></h1>
                        <hr>
                    </div>
                </div>
                <?php 
                    foreach ($subcate as $cate){
                    $products = $this->Web_M->q("select * from db_product where product_category_id='".$cate['cate_id']."' and product_active=1 order by rand() limit 4");
                ?>
                    <div class="row item-category">
                        <div class="col-md-3">
                            <h3 class="name"><?=$cate['cate_title']?></h3>
                        </div>
                        <?php if (!empty($products)){ ?>
                            <div class="col-md-3">
                                <div class="title">
                                    <?php 
                                        foreach ($products as $prd)
                                        {
                                    ?>
                                        <p><a class="readmore font16_all" href="<?=base_url('product/'.$prd['product_alias'].'-'.$prd['product_id'])?>.html"><span class="fa fa-angle-right"></span><?=$prd['product_title']?></a></p>
                                    <?php 
                                        } 
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="desc font16_all">
                                    <p><?=$cate['cate_description']?></p>
                                     <hr>
                                </div>
                            </div>
                        <?php }else{ ?>
                        <div class="col-md-9">
                            <div class="desc font16_all">
                                <p><?=$cate['cate_description']?></p>
                                <hr>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                <?php 
                    }
                    if (empty($subcate)){
                        include('empty.php');
                    }
                ?>
            </div>
        </div>
    </div>
</section>

<?php include ('sec-muctieu.php') ?>
<?php include ('form-contact.php') ?>
