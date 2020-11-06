
<style type="text/css">
  th{
    white-space: nowrap;
  }

  td{
    white-space: nowrap;
  }

  .blocker {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    z-index: 999999999;
    padding: 20px;
    box-sizing: border-box;
    background-color: #000;
    background-color: rgba(0,0,0,0.75);
    text-align: center;
}

/*#details{
  top: 5%;
  vertical-align: middle;
  left: 0;
  right: 0;
  margin: auto;
  height: 90%;
}*/

.inline-flex label {
  min-width: 160px;
  text-align: left;
}

.inline-flex{
  padding: 0px 30px;
}


.pagination {
    position: relative;
    width: fit-content;
    margin: auto;
}

.pagination .btn_prev {
    text-align: center;
    float: left;
    margin: 5px 10px 0 0;
}

.pagination .btn_prev a {
    background: #dec617;
    width: 70px;
    padding: 5px 0;
    border-radius: 5px;
    text-align: center;
    float: left;
}

.pagination .last a,
.pagination .first a {
    padding-left: 10px !important;
    padding-right: 10px !important;
}

.pagination .page li.active a,
.pagination .page li:hover a,
.pagination .btn_prev.active a,
.pagination .btn_prev:hover a,
.pagination .btn_next.active a,
.pagination .btn_next:hover a {
    background: #2f714c;
}

.pagination a {
    text-decoration: none;
    font-weight: bold;
}

.pagination .btn_next {
    text-align: center;
    float: right;
}

.pagination .btn_next a {
    background: #dec617;
    display: block;
    width: 70px;
    padding: 5px 0;
    border-radius: 5px;
}

.pagination .page {
    float: left;
    max-width: 450px;
    margin: 0 5px 0 5px;
}

.pagination .page li {
    display: inline;
}

.pagination .page li a {
    background: #ccc;
    display: inline-block;
    width: 30px;
    text-align: center;
    padding: 5px 0 5px 0;
    border-radius: 5px;
    margin-left: 10px;
    color: white;
}

p {
    margin-bottom: 0rem;
}

</style>
<div class="container-fluid">
     <div class="row">
           <div class="col-md-12">
              <div class="col-md-12">
                <form id="search_customer" method="POST">
                  <div style="display:flex">
                      <span style="line-height: 30px;">Tên khách hàng : &nbsp;</span>
                      <input type="text" name="customer_name" id="customer_name" class="form-control" style="width: 200px;">
                      &nbsp;
                      &nbsp;
                      <span style="line-height: 30px;">Tên bảo hiểm : &nbsp;</span>
                      <input type="text" name="insurance_name" id="insurance_name" class="form-control" style="width: 200px;">
                      &nbsp;
                      &nbsp;
                      <span style="line-height: 30px;">Số điện thoại : &nbsp;</span>
                      <input type="text" name="customer_phone" id="customer_phone" class="form-control" style="width: 200px;">
                      &nbsp;
                      &nbsp;
                      <span style="line-height: 30px;">Mức hoa hồng : &nbsp;</span>
                      <input type="text" name="commission_level" id="commission_level" class="form-control" style="width: 200px;">
                  </div>
                  <br>
                </form>
              	<form method="post" style="overflow: auto;">
              		<table id="table_cus" class="table table-striped table-bordered">
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
              					<th>Có khả năng khai thác</th>
              				</tr>

              			</thead>
              			<tbody>
              				<?php foreach ($list_customer as $key => $val) {?>
              					<tr>
              						<?php for ($i=0; $i <11 ; $i++) {
              							if ($val['processing_steps'] == $i) {
              								$date_update =date('Ymd') - date('Ymd', strtotime($val['updated_at']));
              								if ($date_update == 0) {
              									$date_update = 'Hôm nay';
              								}else{
              									$date_update = $date_update.' ngày trước';
              								}
              						?>
              							<td>
              								<div class="btn_modal" data-id="<?=$val['customer_id']?>">
              									<p><strong>Tên: </strong><?=$val['customer_name']?></p>
              									<p><strong>Nhu cầu: </strong><?=$val['need']?></p>
              									<p><strong>Hoa hồng: </strong><?=$val['commission_level']?></p>
              									<p><strong>Cập nhật: </strong><?=$date_update?></p>
              									<p><strong>Ghi chú: </strong><?=$val['note']?></p>
              									<p><strong>Ngày tạo: </strong><?=date('d-m-Y', strtotime($val['created_at']))?></p>
              								</div>
                              <br>
              								
              								<p>
              									<select onchange="setStt(this,'processing_steps',<?=$val['customer_id']?>)" name="processing_steps" id="processing_steps" class="form-control" style="width: 200px;">
              										<option <?php if ($val['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
              										<option <?php if ($val['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
              										<option <?php if ($val['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
              										<option <?php if ($val['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
              										<option <?php if ($val['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
              										<option <?php if ($val['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
              										<option <?php if ($val['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
              										<option <?php if ($val['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
              										<option <?php if ($val['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
              										<option <?php if ($val['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
              										<option <?php if ($val['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
              									</select>
              								</p>
              							</td>
              						<?php }else{ echo '<td></td>';} } ?>
              					</tr>
              				<?php } ?>
              				
              			</tbody>
              		</table>
              	</form>

                <div class="pagination clearfix">
                  <ul class="page clearfix">
                    <?php
                    if (!empty($list_customer)) {
                      if($total_rows != 0 && $total_rows > 1){
                        echo "<li class='btn_prev'><span>Trang ".$offset."/".$total_rows."</span></li>";
                        echo $pagination;
                      }
                    }

                    ?>
                  </ul>
                </div>

              </div>
           </div>
     </div>


    <div id="div_bloker">
    <form id="details" method="post" class="" style="display: none;background: #fff;width: 800px;margin: 5% auto;">
   </form>
 </div>


</div>

<script>

  $('.container-fluid').on('click', '.btn_modal', function(){
    var customer_id = $(this).data('id');
    $.ajax({
      type: "post",
      url: "<?=base_url('admin/customer/loadDetails')?>",
      data: {'customer_id':customer_id},
      success: function (response) {
        // var obj = JSON.parse(response);
        $('#details').css("display","block");
        $('#div_bloker').attr("class","blocker");
        $('#details').html(response);
      }
    });
    
  });


  $('.container-fluid').on('click', '#save', function(){
    $.ajax({
      type: "post",
      url: "<?=base_url('admin/customer/updateDetails')?>",
      data: $('#details').serialize(),
      success: function (response) {
        $('#details').css("display","none");
        $('#div_bloker').attr("class","");
        $("#table_cus").load(" #table_cus");
      }
    });
    
  });

  $('.container-fluid').on('click', '#close', function(){
    $('#details').css("display","none");
    $('#div_bloker').attr("class","");
  });

  

    function onEdit(permission_id,permission_name,permission_value){
        $('#permission_id').val(permission_id);
        $('#permission_name').val(permission_name);
        $('#permission_value').val(permission_value);
    }

    function setStt(ckb,colset,customer_id){
        ckb = ckb.value;
        colset = colset.toString();
        $.ajax({
            type: "post",
            url: "<?=base_url('admin/customer/update')?>",
            data: {'customer_id':customer_id,[colset]:ckb},
            success: function (response) {
                $("#table_cus").load(" #table_cus");
            }
        });
    }


    function searchCustomer() {
      $.ajax({
        url: '<?=base_url()?>admin/customer/search/',
        data: $('#search_customer').serialize(),
        type: 'POST',
        success: function (data) {
          $('#table_cus').html(data);
        }
    });
    }


    $('#customer_name').keyup(function (e) { 
        searchCustomer();
    });

    $('#insurance_name').keyup(function (e) { 
        searchCustomer();
    });


    $('#commission_level').keyup(function (e) { 
        searchCustomer();
    });

    $('#customer_phone').keyup(function (e) { 
        searchCustomer();
    });


</script>