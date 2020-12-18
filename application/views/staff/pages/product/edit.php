<style type="text/css">
	.inline-flex label {
    	min-width: 120px;
	}
	img{
		max-width: 200px;
	}

    .select2-selection__choice{
        color: black!important;
    }
</style>
<div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8 inline-flex">
            <label for="">Ảnh đại diện</label>
            <input type="file" name="product_img" id="product_img" class="">
            
        </div>

        <div class="col-md-8 inline-flex" id="div_image">
            <label for=""></label>
            <img src="<?=base_url().'upload/images/'.$info_product['product_img']?>" onclick="onDelete(1)" title="Bấm vào đây để xóa" style="cursor: pointer;">
            	
            

        </div>


        <div class="col-md-8 inline-flex">
            <label for="">Banner</label>
            <input type="file" name="product_banner" id="product_banner" class="">
            
        </div>

        <div class="col-md-8 inline-flex" id="div_banner">
            <label for=""></label>
            <img src="<?=base_url().'upload/images/'.$info_product['product_banner']?>" onclick="onDelete(2)" title="Bấm vào đây để xóa" style="cursor: pointer;">
                
            

        </div>


        <div class="col-md-8 inline-flex" >
            <label for="">Loại sản phẩm</label>
            <select name="product_category_id" id="product_category_id" class="form-control" required>
            	<option value="">chọn loại sản phẩm</option>
            	<?php echo $list_category;?>
            </select>
        </div>
        <!-- <div class="col-md-8 inline-flex">
            <label for="">Module</label>
            <select name="cate_module_id" id="cate_module_id" class="form-control">
                <option value="0">Chọn module hiển thị</option>
                <?php foreach ($arr_module as $value){ ?>
                    <option value="<?=$value['module_id']?>"><?=$value['module_title']?></option>
                <?php } ?>
            </select>
        </div> -->
        <div class="col-md-8 inline-flex">
            <label for="">Tiêu đề</label>
            <input onkeyup="addText(this,'#product_alias')" required type="text" name="product_title" id="product_title" value="<?php echo $info_product['product_title'] ?>" class="form-control">
        </div>

        <div class="col-md-8 inline-flex">
            <label for="">Đường dẫn</label>
            <input type="text" name="product_alias" id="product_alias" value="<?php echo $info_product['product_alias'] ?>" class="form-control" placeholder="Tạo đường dẫn tự động">
        </div>

        <div class="col-md-8 inline-flex">
            <label for="">Mô tả</label>
            <textarea name="product_description" id="product_description" cols="30" rows="3" class="form-control"><?php echo $info_product['product_description'] ?></textarea>
        </div>   

        <div class="col-md-12 inline-flex">
            <label for="">Nội dung</label>
            <textarea name="product_content" id="product_content" cols="30" rows="5" class="form-control html_editor"><?php echo $info_product['product_content'] ?></textarea>
        </div> 

        <div class="col-md-8 inline-flex">
            <label for="">Quyền lợi hấp dẫn</label>
            <select name="product_benefits[]" id="product_benefits" class="form-control select2" multiple="multiple">
                <?php foreach ($list_benefits as $benefits) {
                    $product_benefits = explode(',', $info_product['product_benefits']);
                ?>
                    <option value="<?php echo $benefits['other_id'] ?>" <?php foreach ($product_benefits as $pr_ben) {if($benefits['other_id'] == $pr_ben) echo "selected='selected'";} ?>><?php echo $benefits['other_title'] ?></option>
                <?php } ?>
            </select>
        </div>


        <div class="col-md-8 inline-flex">
            <label for="">Keyword (SEO)</label>
            <textarea name="product_keyword" id="product_keyword" cols="30" rows="3" class="form-control"><?php echo $info_product['product_keyword'] ?></textarea>
        </div>  

        
        <div class="col-md-8 inline-flex">
            <label for="">Hiển thị</label>
            <?php if ($info_product['product_active'] == 1) {
            		$checked = 'checked';
            	}else{
            		$checked = '';
            	} 
            ?>
            <input type="checkbox" name="product_active" id="product_active" value="1" style="margin-top: 12px;" <?php echo $checked; ?>>
        </div> 

        <br>
        <br>
        <div class="col-md-6 inline-flex">
            <label for=""></label>
            <button type="reset" class="btn btn-danger">Nhập lại</button>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </form>
    <br><br>
</div>

<script>

    $('#product_category_id').val(<?=$info_product['product_category_id']?>);
    function addText(e,target){
        var val = make_alias(e.value);
        $(target).val(val);
    }

    function onDelete(key){
        Swal.fire({
            title: 'Bạn có muốn xóa mục này?',
            text: "Dữ liệu đã xóa sẽ không thể phục hồi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Hủy',
            confirmButtonText: 'Xóa'
            }).then((result) => {
            if (result.value) {
                if (key == 1) {
                    $('#div_image').css("display","none");
                    $('#product_img').attr("required","required");
                }else{
                    $('#div_banner').css("display","none");
                    $('#product_banner').attr("required","required");
                }
            	
            }
        });
        }

  //   function clear_form_elements() {
  //   $('#add_post').find('input:text').attr('value','');
  //   $('#add_post').find('select > option').removeAttr('selected');
  // }
</script>