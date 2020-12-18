
<style type="text/css">
  th{
    white-space: nowrap;
  }
</style>
<div class="container-fluid">
     <div class="row">
           <div class="col-md-12">
              <div class="col-md-12">
                <form method="post">
                    <a href="<?=base_url('admin/other/add')?>">[Thêm mới]</a>
                    <br>
                    <br>
                    <div style="display:flex">
                        <span>Filter : &nbsp;</span>
                        <select class="form-control" onchange="mfilter(this.value)" style="width: 200px;">
                            <option value="0">Tìm kiếm theo loại</option>
                            <?php 
                            $list_cate = $this->Other_M->all(['other_category_id'=>0]);
                            foreach ($list_cate as $key => $val) 
                            {
                                ?>
                                <option <?=$filter==$val['other_id'] ? 'selected':''?> value="<?=$val['other_id']?>"><?=$val['other_title']?></option>
                            <?php } ?>
                        </select><br>
                    </div><hr>
                    
                
            <table class="datatable table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="width:50px">STT</th>
                        <th>Tiêu đề</th>
                        <th>Loại</th>
                        <th>Hình ảnh</th>
                        <th>Hiển thị</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($list_content as $key => $val){ 
                        $sub = $this->Other_M->all(['other_category_id'=>$val['other_id']]);
                    ?>
                        <tr>
                            <!--  <td>
                                 <input type="checkbox" name="" value="">
                             </td> -->

                            <td>
                                <?=$key?>
                            </td> 
                            <td>
                                <b><?=$val['other_title']?></b>
                            </td>

                            <td>
                                <?=$val['other_category_id']==0 ? '--':''?>
                            </td>

                            <td>
                                <?php if (!empty($val['other_img'])){ ?>
                                    <img src="<?=resizeImg($val['other_img'],50,50,0)?>" alt="">
                                <?php } ?>
                            </td>

                            <td>
                                <input onchange="setCkb(this,'other_active',<?=$val['other_id']?>)" type="checkbox" <?=$val['other_active']==1 ? 'checked':''?> >
                            </td>


                            <td style="white-space: nowrap;">

                                <a href="<?=base_url().'admin/other/edit/'.$val['other_id']?>">
                                    <button type="button" class="btn btn-default">
                                        <span class="fa fa-eye"></span>
                                    </button>
                                </a>
                               
                                 
                                <button disabled onclick="onDelete(<?=$val['other_id']?>)" class="btn btn-default">
                                    <span class="fa fa-lock"></span>
                                </button>
                            </td>
                        </tr>
                    <?php
                        if (count($sub)>0) {
                            foreach ($sub as $val2){
                    ?>
                        <tr>
                            <td></td>
                            <td>
                                |___&nbsp;<?=$val2['other_title']?>
                            </td>
                            <td>
                                [<?=$this->Other_M->find_row(['other_id'=>$val2['other_category_id']])['other_title']?>]
                            </td>

                            <td>
                                <?php if (!empty($val2['other_img'])){ ?>
                                    <img src="<?=resizeImg($val2['other_img'],100,90,0)?>" alt="">
                                <?php } ?>
                            </td>

                            <td>
                                <input onchange="setCkb(this,'other_active',<?=$val2['other_id']?>)" type="checkbox" <?=$val2['other_active']==1 ? 'checked':''?> >
                            </td>


                            <td style="white-space: nowrap;">

                                <a href="<?=base_url().'admin/other/edit/'.$val2['other_id']?>">
                                    <button type="button" class="btn btn-default">
                                        <span class="fa fa-eye"></span>
                                    </button>
                                </a>


                                <button onclick="onDelete(<?=$val2['other_id']?>)" type="button" class="btn btn-default">
                                    <span class="fa fa-trash"></span>
                                </button>
                            </td>
                        </tr>
                    <?php } } } ?>
                </tbody>
            </table>
            </form>
              </div>
           </div>
     </div>
</div>

<script>

    function mfilter(value){
        location.href='<?=base_url('admin/other?filter=')?>'+value;
    }

    function setCkb(ckb,colset,other_id){
        ckb = ckb.checked;
        ckb = ckb==true ? 1:0;
        colset = colset.toString();
        $.ajax({
            type: "post",
            url: "<?=base_url('admin/other/update')?>",
            data: {'other_id':other_id,[colset]:ckb},
            success: function (response) {
                
            }
        });
    }

    function onDelete(other_id){
        var other_id = other_id;
        // console.log(post_id);
        Swal.fire({
            title: 'Bạn có muốn xóa mục này?',
            text: "Dữ liệu đã xóa sẽ không thể phục hồi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Hủy',
            confirmButtonText: 'Xóa'
            // cancelButtonText: 'Hủy',
            }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?=base_url('admin/other/destroy')?>",
                    data: {'other_id':other_id},
                    success: function (response) {
                        location.reload();
                    }
                });
            }
        });
    }
</script>