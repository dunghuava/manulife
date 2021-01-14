<style type="text/css">
    .inline-flex label {
        min-width: 140px!important;
    }
</style>
<div class="container-fluid">
	<form action="" method="post" enctype="multipart/form-data">
	 <div class="row">
     	<div class="col-md-12">
              <div class="col-md-6 inline-flex">
                <label for="">Hình ảnh</label>
                <input required type="file" name="staff_img" id="staff_img" class="">
              </div>
             <div class="col-md-6 inline-flex">
             	    <label for="">Họ tên</label>
     		        <input id="staff_name" value="" type="text" name="staff_name" class="form-control" required>
             </div>

             <div class="col-md-6 inline-flex">
                    <label for="">Chức danh</label>
                    <input id="staff_position" value="" type="text" name="staff_position" class="form-control" required>
             </div>

             <div class="col-md-6 inline-flex">
                    <label for="">Số điện thoại</label>
                    <input id="staff_phone" value="" type="text" name="staff_phone" class="form-control" required>
             </div>

             <div class="col-md-6 inline-flex">
                    <label for="">Subdomain</label>
                    <input id="subdomain" value="" type="text" name="subdomain" class="form-control">
             </div>

             <div class="col-md-12 inline-flex">
                    <label for="">Email đăng nhập</label>
                    <input id="staff_email" value="" type="email" name="staff_email" class="form-control col-md-4" required>
                    <span id="result" style="color: red;margin-left: 5px;"></span>
             </div>

             <div class="col-md-12 inline-flex">
                    <label for="">Mật khẩu</label>
                    <input id="staff_password" value="" type="text" name="staff_password" class="form-control col-md-4" required>
             </div>


             <!-- <div class="col-md-6 inline-flex">
                    <label for="">Nhân viên phụ trách</label>
                    <select name="staff_curator" id="staff_curator" class="form-control" required>
                        <option value=""></option>
                        <option value="0">Admin</option>
                    </select>
             </div> -->


             <!-- <div class="col-md-6 inline-flex">
             	  <label for="">Hiển thị</label>
                <input type="checkbox" name="staff_active" id="staff_active" value="1" style="margin-top: 12px;" checked>
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

<script type="text/javascript">

    $("#btn_save").on('click', function() {
        var text = $('#result').html();
        if (text !='') {
          return false;
        }
    });

     $(document).ready(function(){
        $("#staff_email").keyup( function(e){
            var staff_email = $("#staff_email").val();
          e.preventDefault();
            $.ajax({
              url:"<?php echo base_url() ?>admin/staff/check_staff_username",
              type:"POST",
              data:{staff_email:staff_email,staff_id:''},
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