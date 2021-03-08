<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title"><?=$category['cate_title']?></h3>
                <hr>
                <p>Hiển thị tất cả <b><?=count($list_post)?></b> bài viết</p>
            </div>
        </div>
    </div>
</section>
<section class="sec-tintuc-list font18">
    <div class="container">
        <div class="row">
            <?php
                foreach ($list_post as $post){ ?>
                <div class="col-md-4">
                    <div class="item-tin-list">
                        <a title="<?=$post['post_title']?>" href="<?=base_url('bai-viet/'.$post['post_alias'].'-'.$post['post_id'])?>.html" style="text-decoration:none">
                            <div class="cover-img scaleimg">
                                <img title="<?=$post['post_title']?>" alt="<?=$post['post_title']?>" src="<?=resizeImg($post['post_img'],360,240,0)?>" alt="">
                            </div>
                            <div class="content">
                                <h3 style="font-weight: bold;font-size: 18px;" class="title text-overflow"><?=$post['post_title']?></h3>
                                <p><span class="fa fa-calendar">&nbsp;</span><?=date('d/m/Y',strtotime($post['created_at']))?></p>
                                <p class="text-overflow"><?=$post['post_description']?></p>
                            </div>
                        </a>
                    </div><br>
                </div>
            <?php } if (empty($list_post)){ ?>
                <div class="text-center" style="color:red"><h4>Dữ liệu đang được cập nhật...</h4></div>
            <?php } ?>
        </div>
    </div>
</section>