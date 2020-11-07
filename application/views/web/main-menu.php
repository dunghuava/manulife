<?php 
    $menu = $this->Web_M->q("select cate_img,cate_id,cate_title,cate_alias,cate_module_id from db_category where cate_parent_id=0 and cate_is_menu=1 and cate_active=1 order by cate_id,cate_stt asc");
?>
<div id="main-menu" class="<?=isMobile() ? 'is_mobile':''?>">
    <ul class="main-menu">
        <li>
            <a href="<?=base_url()?>"><span class="fa fa-home"></span><br><span>Trang chủ</span></a>
        </li>
        <?php 
            foreach ($menu as $mn){ 
            $submenu = $this->Web_M->q("select cate_id,cate_title,cate_alias,cate_module_id from db_category where cate_parent_id='".$mn['cate_id']."' and cate_active=1 order by cate_id,cate_stt asc");
        ?>
            <li class="<?=count($submenu)>0 ? 'parent':''?>">
                <a href="<?=base_url($mn['cate_alias'])?>.html">
                    <img src="<?=resizeImg($mn['cate_img'],25,25,2)?>"/><br><?=$mn['cate_title']?>
                </a>
                <?php 
                    if(count($submenu)>0)
                    {
                ?>
                    <ul class="sub-menu" style="overflow: auto">
                        <li><?=$mn['cate_title']?></li>
                        <?php foreach ($submenu as $sub){ 
                            if ($sub['cate_module_id'] == 3) {
                        ?>
                            <li><a href="<?=base_url('service/'.$sub['cate_alias'].'-'.$sub['cate_id'])?>.html"><?=$sub['cate_title']?></a></li>
                        <?php }else{ ?>
                            <li><a href="<?=base_url($sub['cate_alias'])?>.html"><?=$sub['cate_title']?></a></li>
                        <?php } } ?>
                    </ul>
                <?php 
                    } 
                ?>
            </li>
        <?php } ?>
    </ul>
</div>

<script>
    $('#main-menu.is_mobile ul li.parent').click(function(e){
        $(this).find('.sub-menu').toggle();
    });
</script>