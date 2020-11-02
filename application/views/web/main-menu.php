<?php 
    $menu = $this->Web_M->q("select cate_id,cate_title,cate_alias from db_category where cate_parent_id=0 and cate_is_menu=1 and cate_active=1 order by cate_id,cate_stt asc");
?>
<div id="main-menu">
    <ul class="main-menu">
        <li>
            <a href="<?=base_url()?>"><span class="fa fa-home"></span><br>Trang chủ</a>
        </li>
        <?php 
            foreach ($menu as $mn){ 
            $submenu = $this->Web_M->q("select cate_id,cate_title,cate_alias from db_category where cate_parent_id='".$mn['cate_id']."' and cate_active=1 order by cate_id,cate_stt asc");
        ?>
            <li class="parent">
                <a href="<?=base_url($mn['cate_alias'])?>.html"><span class="fa fa-calculator"></span><br><?=$mn['cate_title']?></a>
                <?php 
                    if(count($submenu)>0)
                    {
                ?>
                    <ul class="sub-menu">
                        <li><?=$mn['cate_title']?></li>
                        <?php foreach ($submenu as $sub){ ?>
                            <li><a href="<?=base_url($sub['cate_alias'])?>.html"><?=$sub['cate_title']?></a></li>
                        <?php } ?>
                    </ul>
                <?php 
                    } 
                ?>
            </li>
        <?php } ?>
    </ul>
</div>