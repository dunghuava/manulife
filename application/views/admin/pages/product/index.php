
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
                    
                
            <table class="datatable table table-striped table-bordered">
                <thead>
                    <tr>
                       <!--  <th style="width: 5%">
                            <input type="checkbox" name="" value="">
                        </th>
                        <th style="width: 10%">Số thứ tự</th> -->
                        <th>Loại danh mục</th>
                        <th>Sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Nổi bậc</th>
                        <th>Hiển thị</th>
                        <th style="width: 11%">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($list_product as $item){ 
                        $info_category = $this->Category_M->find_row(['cate_id' => $item['product_category_id']]);
                    ?>
                        <tr>
                            <!--  <td>
                                 <input type="checkbox" name="" value="">
                             </td> -->

                             <td><?=$info_category['cate_title']?></td>
                             <td><?=$item['product_title']?></td>
                             <td><img src="<?=resizeImg($item['product_img'],50,50,0)?>" style="max-height: 90px;"></td>
                             <td><input onchange="setCkb(this,'product_highlights',<?=$item['product_id']?>)" type="checkbox" <?=$item['product_highlights']==1 ? 'checked':''?>></td>
                             <td><input onchange="setCkb(this,'product_active',<?=$item['product_id']?>)" type="checkbox" <?=$item['product_active']==1 ? 'checked':''?> ></td>
                              <!-- <td>
                                <?php  
                                  if ($item['post_user_id'] == 0) {
                                      echo "Admin";
                                  }else{
                                      $info_user = $this->Account_M->find_row(['user_id'=>$item['post_user_id']]);
                                      echo $info_user['user_fullname'];
                                  }
                                ?>
                             </td> -->
                             <td style="white-space: nowrap;">

                                <a href="<?=base_url().'admin/product/edit/'.$item['product_id']?>">
                                    <button type="button" class="btn btn-default">
                                        <span class="fa fa-eye"></span>
                                    </button>
                                </a>
                               
                                 
                                 <button onclick="onDelete(<?=$item['product_id']?>)" type="button" class="btn btn-default">
                                     <span class="fa fa-trash"></span>
                                 </button>
                             </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            </form>
              </div>
           </div>
     </div>
</div>

<script>
    function setCkb(ckb,colset,product_id){
        ckb = ckb.checked;
        ckb = ckb==true ? 1:0;
        colset = colset.toString();
        $.ajax({
            type: "post",
            url: "<?=base_url('admin/product/update')?>",
            data: {'product_id':product_id,[colset]:ckb},
            success: function (response) {
                
            }
        });
    }

    function onDelete(product_id){
        var product_id = product_id;
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
                    url: "<?=base_url('admin/product/destroy')?>",
                    data: {'product_id':product_id},
                    success: function (response) {
                        location.reload();
                    }
                });
            }
        });
    }
</script>