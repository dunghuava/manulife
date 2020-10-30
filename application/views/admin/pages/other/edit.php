<style type="text/css">
    .inline-flex label {
        min-width: 120px;
    }

    img{
        max-width: 200px;
    }
</style>
<div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8 inline-flex">
            <label for="">Hình ảnh</label>
            <input type="file" name="other_img" id="other_img" class="">
        </div>

        <?php if (!empty($info_other['other_img'])) {?>
            <div class="col-md-8 inline-flex" id="div_image">
                <label for=""></label>
                <img src="<?=base_url().'upload/images/'.$info_other['other_img']?>" onclick="onDelete()" title="Bấm vào đây để xóa" style="cursor: pointer;">
            </div>
        <?php } ?>


        <div class="col-md-8 inline-flex" >
            <label for="">Loại</label>
            <select name="other_category_id" id="other_category_id" class="form-control" required>
                <option value="0">Chọn làm danh mục cha</option>
                <?php 
                    foreach ($cate as $val){ 
                ?>
                        <option <?=$info_other['other_category_id']==$val['other_id'] ? 'selected':''?> value="<?=$val['other_id']?>"><?=$val['other_title']?></option>
                <?php } ?>
            </select>
        </div>
        <div class="col-md-8 inline-flex">
            <label for="">Tiêu đề</label>
            <input required type="text" name="other_title" id="other_title" class="form-control" value="<?=$info_other['other_title']?>">
        </div>

        <div class="col-md-8 inline-flex">
            <label for="">Liên kết (url)</label>
            <input type="text" name="other_url" id="other_url" class="form-control" value="<?=$info_other['other_url']?>">
        </div>

        <div class="col-md-8 inline-flex">
            <label for="">Mô tả</label>
            <textarea name="other_description" id="other_description" cols="30" rows="3" class="form-control"><?=$info_other['other_description']?></textarea>
        </div>   

        <div class="col-md-12 inline-flex">
            <label for="">Nội dung</label>
            <textarea name="other_content" id="other_content" cols="30" rows="5" class="form-control html_editor"><?=$info_other['other_content']?></textarea>
        </div> 

        <div class="col-md-8 inline-flex">
            <label for="">Hiển thị</label>
            <?php 
                if ($info_other['other_active'] == 1) {
                    $checked = 'checked';
                }else{
                    $checked = '';
                }
            ?>
            <input type="checkbox" name="other_active" id="other_active" value="1" style="margin-top: 12px;" <?=$checked?>>
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
    function onDelete(){
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
                $('#div_image').css("display","none");
                $('#post_img').attr("required","required");
            }
        });
    }
</script>
