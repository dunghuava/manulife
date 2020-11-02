<style type="text/css">
	.inline-flex label {
    	min-width: 120px;
	}
    .select2-selection__choice{
        color: black!important;
    }
</style>
<div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8 inline-flex">
            <label for="">Hình ảnh</label>
            <input required type="file" name="product_img" id="product_img" class="">
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
            <input onkeyup="addText(this,'#product_alias')" required type="text" name="product_title" id="product_title" class="form-control">
        </div>

        <div class="col-md-8 inline-flex">
            <label for="">Đường dẫn</label>
            <input type="text" name="product_alias" id="product_alias" class="form-control" placeholder="Tạo đường dẫn tự động">
        </div>

        <div class="col-md-8 inline-flex">
            <label for="">Mô tả</label>
            <textarea name="product_description" id="product_description" cols="30" rows="3" class="form-control"></textarea>
        </div>   

        <div class="col-md-12 inline-flex">
            <label for="">Nội dung</label>
            <textarea name="product_content" id="product_content" cols="30" rows="5" class="form-control html_editor"></textarea>
        </div> 


        <div class="col-md-8 inline-flex">
            <label for="">Quyền lợi hấp dẫn</label>
            <select name="product_benefits[]" id="product_benefits" class="form-control select2" multiple="multiple">
                <?php foreach ($list_benefits as $benefits) {
                    echo '<option value="'.$benefits['other_id'].'">'.$benefits['other_title'].'</option>';
                } ?>
            </select>
        </div>


        <div class="col-md-8 inline-flex">
            <label for="">Keyword (SEO)</label>
            <textarea name="product_keyword" id="product_keyword" cols="30" rows="3" class="form-control"></textarea>
        </div>  

        <!-- <div class="col-md-8 inline-flex">
            <label for="">Description (SEO)</label>
            <textarea name="post_description" id="post_description" cols="30" rows="3" class="form-control"></textarea>
        </div>  
 -->
        <div class="col-md-8 inline-flex">
            <label for="">Hiển thị</label>
            <input type="checkbox" name="product_active" id="product_active" value="1" style="margin-top: 12px;" checked>
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
    function addText(e,target){
        var val = make_alias(e.value);
        $(target).val(val);
    }

  //   function clear_form_elements() {
  //   $('#add_post').find('input:text').attr('value','');
  //   $('#add_post').find('select > option').removeAttr('selected');
  // }
</script>