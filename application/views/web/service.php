<?php 
    $dvphobien = $this->Web_M->q("select * from db_post where post_active=1 and post_highlights=1 order by rand() limit 3");
?>
<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-3">
                <img src="<?=img_path('1582170661771.jpeg')?>" alt="">
            </div>
            <div class="col-md-9">
                <h1><?=$category['cate_title']?></h1>
                <hr>
                <h3>Các dịch vụ phổ biến</h3>
                <?php 
                    foreach ($dvphobien as $bv){
                        ?>
                            <div class="post_ser">
                                <a class="readmore" href="<?=base_url('post/'.$bv['post_alias'].'-'.$bv['post_id'])?>.html">
                                   <h5><?=$bv['post_title']?></h5>
                                    <span class="fa fa-angle-right"></span>Readmore
                                </a>
                                <hr style="margin:5px 0px;">
                            </div>
                        <?php
                    }
                ?>
                <?php 
                    $subdichvu = $this->Web_M->q("select * from db_category where cate_parent_id='".$category['cate_id']."' ");
                    if (!empty($subdichvu))
                    {
                ?>
                <div class="row"><br>
                    <?php foreach ($subdichvu as $item){ ?>
                    <div class="col-md-4">
                        <a href="<?=base_url('service/'.$item['cate_alias'].'-'.$item['cate_id'])?>.html">
                            <div class="item-product" style="display:flex;height: 140px;">
                                <img src="<?=img_path('se_05.svg')?>" alt="">
                                <div class="des"><?=$item['cate_title']?></div>
                            </div>
                        </a>
                    </div>
                    <?php 
                        }
                    }else{
                        include ('empty.php');
                    } 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ('form-contact.php') ?>