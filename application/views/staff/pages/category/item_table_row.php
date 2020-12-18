<tr>
    <td>
        <input type="text" onkeyup="setStt(this,'cate_stt',<?=$val['cate_id']?>)" value="<?=$val['cate_stt']?>" class="form-control text-center">
    </td>
    <td><a style="color:#000" href="<?=base_url('admin/category/edit/'.$val['cate_id'])?>"><?=$str.' '.$val['cate_title']?></a></td>
    <td class="text-center">
        <?php if (!empty($val['cate_img'])){ ?>
            <img onclick="onDeleteImg(<?=$val['cate_id']?>,'<?=$val['cate_img']?>')" src="<?=resizeImg($val['cate_img'],50,50,0)?>" alt="">
        <?php } ?>
    </td>
    <td>
        <?php 
            $module = $this->Module_M->all(['module_id'=>$val['cate_module_id']]);
            echo $module[0]['module_title'];
        ?>
    </td>
    <td class="text-center">
        <input onchange="setCkb(this,'cate_is_menu',<?=$val['cate_id']?>)" type="checkbox" <?=$val['cate_is_menu']==1 ? 'checked':''?> >
    </td>
    <td class="text-center">
        <input onchange="setCkb(this,'cate_active',<?=$val['cate_id']?>)" type="checkbox" <?=$val['cate_active']==1 ? 'checked':''?> >
    </td>
    <td>
        <a href="<?=base_url('admin/category/edit/'.$val['cate_id'])?>">
            <button class="btn btn-default">
                    <span class="fa fa-eye"></span>
            </button>
        </a>
        <button disabled onclick="onDelete(<?=$val['cate_id']?>)" class="btn btn-default">
            <span class="fa fa-lock"></span>
        </button>
    </td>
</tr>