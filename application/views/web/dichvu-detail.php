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
</style>
<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-3">
                <img src="<?=img_path('1582170661771.jpeg')?>" alt="">
            </div>
            <div class="col-md-9">
                <h1><?=$category['cate_title']?></h1>
                <hr>
                <img src="<?=img_path($category['cate_img'])?>" alt="">

                <div class="row">
                    <?php 
                        foreach ($service as $sv)
                        {
                    ?>
                        <div class="col-md-12">
                            <div id="accordian_<?=$sv['post_id']?>" role="tablist" aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="section_h_<?=$sv['post_id']?>">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" data-parent="#accordian_<?=$sv['post_id']?>" href="#sectioncontent_<?=$sv['post_id']?>" aria-expanded="true" aria-controls="#sectioncontent_<?=$sv['post_id']?>">
                                               <p style="font-size:20px"><span class="plsubtn fa fa-plus"></span><?=$sv['post_title']?></p>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="sectioncontent_<?=$sv['post_id']?>" class="collapse" role="tabpanel" aria-labelledby="section_h_<?=$sv['post_id']?>">
                                        <div class="card-body">
                                            <p><b><?=$sv['post_description']?></b></p>
                                            <hr style="margin:5px 0px;">
                                            <p><?=$sv['post_content']?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                        } 
                        if (empty($service)){
                            include ('empty.php');
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ('form-contact.php') ?>