<style type="text/css">
    .inline-flex label {
        min-width: 120px;
    }
</style>
<div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8 inline-flex">
            <label for="">Hình ảnh</label>
            <input type="file" name="other_img" id="other_img" class="">
        </div>

        <div class="col-md-8 inline-flex" >
            <label for="">Loại</label>
            <select name="other_category_id" id="other_category_id" class="form-control" required>
                <option value="0">Chọn làm danh mục cha</option>
                <?php 
                    foreach ($cate as $val){ 
                ?>
                        <option value="<?=$val['other_id']?>"><?=$val['other_title']?></option>
                <?php } ?>
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
            <input required type="text" name="other_title" id="other_title" class="form-control">
        </div>

        <div class="col-md-8 inline-flex">
            <label for="">Liên kết (url)</label>
            <input type="text" name="other_url" id="other_url" class="form-control">
        </div>

        <div class="col-md-8 inline-flex">
            <label for="">Mô tả</label>
            <textarea name="other_description" id="other_description" cols="30" rows="3" class="form-control"></textarea>
        </div>   

        <div class="col-md-12 inline-flex">
            <label for="">Nội dung</label>
            <textarea name="other_content" id="other_content" cols="30" rows="5" class="form-control html_editor"></textarea>
        </div> 

        <div class="col-md-8 inline-flex">
            <label for="">Hiển thị</label>
            <input type="checkbox" name="other_active" id="other_active" value="1" style="margin-top: 12px;" checked>
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
