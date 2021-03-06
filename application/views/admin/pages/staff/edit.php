<style type="text/css">
  img{
    max-width: 200px;
  }

  .inline-flex label {
        min-width: 140px!important;
    }
</style>
<div class="container-fluid">
	<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="staff_id" id="staff_id" value="<?php echo $info_staff['staff_id'] ?>">
	 <div class="row">
     	<div class="col-md-12">

              <div class="col-md-6 inline-flex">
                <label for="">Hình ảnh</label>
                <input type="file" name="staff_img" id="staff_img" class="">
              </div>

              <div class="col-md-6 inline-flex" id="div_image">
                  <label for=""></label>
                  <img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" onclick="onDelete()" title="Bấm vào đây để xóa" style="cursor: pointer;">
              </div>
             <div class="col-md-6 inline-flex">
             	    <label for="">Họ tên</label>
     		        <input id="staff_name" value="<?php echo $info_staff['staff_name'] ?>" type="text" name="staff_name" class="form-control" required>
             </div>

             <div class="col-md-6 inline-flex">
                    <label for="">Chức danh</label>
                    <input id="staff_position" value="<?php echo $info_staff['staff_position'] ?>" type="text" name="staff_position" class="form-control" required>
             </div>

             <div class="col-md-6 inline-flex">
                    <label for="">Số điện thoại</label>
                    <input id="staff_phone" value="<?php echo $info_staff['staff_phone'] ?>" type="text" name="staff_phone" class="form-control" required>
             </div>

             <div class="col-md-6 inline-flex">
                    <label for="">Subdomain</label>
                    <input id="subdomain" value="<?php echo $info_staff['subdomain'] ?>" type="text" name="subdomain" class="form-control">
             </div>

             <div class="col-md-12 inline-flex">
                    <label for="">Email đăng nhập</label>
                    <input id="staff_email" value="<?php echo $info_staff['staff_email'] ?>" type="email" name="staff_email" class="form-control col-md-4" required>
                    <span id="result" style="color: red;margin-left: 5px;"></span>
             </div>

             <div class="col-md-12 inline-flex">
                    <label for="">Mật khẩu mới</label>
                    <input id="staff_password" value="" type="text" name="staff_password" class="form-control col-md-4">
             </div>

             <!-- <div class="col-md-6 inline-flex">
                <label for="">Hiển thị</label>
                <?php 
                  if ($info_staff['staff_active'] == 1) {
                    $checked = 'checked';
                  }else{
                    $checked = '';
                  } 
                ?>
                <input type="checkbox" name="staff_active" id="staff_active" value="1" style="margin-top: 12px;" <?php echo $checked ?>>
             </div> -->

             <div class="col-md-6 inline-flex">
             	    <label for=""></label>
             	    <a href="<?=base_url('admin/staff')?>" title="">
	     		        <button type="button" class="btn btn-danger">
	     		        	<span class="fa fa-arrow-left"></span>
	     		        	Trở về
	     		        </button>
             	    </a>
     		        <button type="submit" id="btn_save" name="btn_save" style="margin-left: 10px" class="btn btn-success">
     		        	<span class="fa fa-save"></span>
     		        	Lưu lại
     		        </button>
             </div>
     	</div>
     </div>
	 </form> 
</div>

<script>

    function onDelete(cate_id){
        var cate_id = cate_id;
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
              $('#staff_img').attr("required","required");
            }
        });
        }


  $("#btn_save").on('click', function() {
        var text = $('#result').html();
        if (text !='') {
          return false;
        }
    });

     $(document).ready(function(){
        $("#staff_email").keyup( function(e){
            var staff_email = $("#staff_email").val();
            var staff_id = $("#staff_id").val();
          e.preventDefault();
            $.ajax({
              url:"<?php echo base_url() ?>admin/staff/check_staff_username",
              type:"POST",
              data:{staff_email:staff_email,staff_id:staff_id},
              success: function(data){
              if (data=='exist') {
                $('#result').html('Email đăng nhập đã tồn tại. Vui lòng chọn email khác.');
              }else{
                $('#result').html('');
              }
              
              },
              error: function(){
              alert("Error"); 
              }
            });
          
        });
      });
</script>