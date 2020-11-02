<?php 
    $slides = $this->Web_M->q("select other_img,other_url,other_id from db_other where other_category_id=3 and other_active=1");
?>
<div id="silder">
    <div class="main-slide">
        <?php foreach($slides as $sl){ ?>
            <div class="silde-item">
                <a target="_blank" href="<?=$sl['other_url']?>">
                    <img src="<?=resizeImg($sl['other_img'],955,545,0)?>" alt="slick">
                </a>
            </div>
        <?php } ?>
    </div>
</div>