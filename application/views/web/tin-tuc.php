<?php 
    $kienthuc = $this->Web_M->q("select a.*,b.cate_title from db_post a left join db_category b on a.post_category_id=b.cate_id where a.post_category_id='".$category['cate_id']."' and a.post_type=1 and a.post_active=1");
?>
<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-12">
                <h2>Thông tin hữu ích</h2>
                <p><?=$category['cate_description']?></p>
                <hr>
                <p>Hiển thị tất cả <b><?=count($kienthuc)?></b> bài viết</p>
            </div>
        </div>
    </div>
</section>
<section class="sec-product">
    <div class="container full-w"><br>
        <div class="row">
            <?php
            foreach ($kienthuc as $bv){ 
                $styles=array(
                    0=>"background:#00A758 url(".img_path($bv['post_img']).") no-repeat",
                    1=>"background-size:cover",
                    2=>"background-position-x:center"
                );
            ?>
            <div class="col-md-3">
                    <div class="item-blog" style="<?=implode(';',$styles)?>">
                            <div class="title">
                                <p><?=$bv['cate_title']?> <a style="float:right" href="<?=base_url('post/'.$bv['post_alias'].'-'.$bv['post_id'])?>.html" class="readmore"><span class="fa fa-angle-right"></span>Xem thêm</a></p>  
                                <a href="<?=base_url('post/'.$bv['post_alias'].'-'.$bv['post_id'])?>.html" style="display:block">
                                    <h3><?=$bv['post_title']?></h3>
                                </a>
                            </div>
                            <div class="overlay">
                            </div>
                            <div class="des"><?=$bv['post_description']?></div>
                    </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>