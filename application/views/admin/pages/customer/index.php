
<style type="text/css">
  th{
    white-space: nowrap;
  }

  td{
    white-space: nowrap;
  }
</style>
<div class="container-fluid">
     <div class="row">
           <div class="col-md-12">
              <div class="col-md-12">
              	<form method="post" style="overflow: auto;">
              		<table class="table table-striped table-bordered">
              			<thead>
              				<tr>
              					<th colspan="3" style="text-align: center;">Tiềm năng</th>
              					<th colspan="3" style="text-align: center;">Tư vấn</th>
              					<th colspan="3" style="text-align: center;">Thực hiện giao dịch</th>
              					<th colspan="2" style="text-align: center;">Kết thúc giao dịch</th>
              				</tr>

              				<tr>
              					<th>Tiềm hiểu thông tin</th>
              					<th>Nuôi dưỡng khách</th>
              					<th>Xác định có nhu cầu</th>

              					<th>Sẳn sàng chốt hẹn</th>
              					<th>Chờ gặp</th>
              					<th>Thương thảo</th>

              					<th>Thất bại</th>
              					<th>Thành công</th>
              					<th>Chăm sóc</th>

              					<th>Giao HD và trao quà</th>
              					<th>Có khả năng khai thác thêm HD</th>
              				</tr>

              			</thead>
              			<tbody>
              				<?php foreach ($list_customer as $key => $val) {?>
              					<tr>
              						<?php for ($i=0; $i <11 ; $i++) {
              							if ($val['processing_steps'] == $i) {
              						?>
              							<td>
              								<p>Tên</p>
              								<p>Nhu cầu</p>
              								<p>Mức hợp đồng hoa hồng</p>
              								<p>Lần cuối tương tác</p>
              								<p>note</p>
              								<p>ngày nhận</p>
              								<p>Tiếp theo</p>
              							</td>
              						<?php }else{ echo '<td></td>';} } ?>
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
    function onEdit(permission_id,permission_name,permission_value){
        $('#permission_id').val(permission_id);
        $('#permission_name').val(permission_name);
        $('#permission_value').val(permission_value);
    }

    function setCkb(ckb,colset,post_id){
        ckb = ckb.checked;
        ckb = ckb==true ? 1:0;
        colset = colset.toString();
        $.ajax({
            type: "post",
            url: "<?=base_url('admin/post/update')?>",
            data: {'post_id':post_id,[colset]:ckb},
            success: function (response) {
                
            }
        });
    }

    function onDelete(post_id){
        var post_id = post_id;
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
                    url: "<?=base_url('admin/post/destroy')?>",
                    data: {'post_id':post_id},
                    success: function (response) {
                        location.reload();
                    }
                });
            }
        });
    }
</script>