
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

.a{
    color: #007bff!important;
    text-decoration: none!important;
    background-color: transparent!important;
    cursor: pointer!important;
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
                        <th colspan="3" style="text-align: center;">Tiềm năng <span>(<?=$count_steps_0 + $count_steps_1 + $count_steps_2?>)</span></th>
                        <th colspan="3" style="text-align: center;">Tư vấn <span>(<?=$count_steps_3 + $count_steps_4 + $count_steps_5?>)</span></th>
                        <th colspan="3" style="text-align: center;">Thực hiện giao dịch <span>(<?=$count_steps_6 + $count_steps_7 + $count_steps_8?>)</span></th>
                        <th colspan="2" style="text-align: center;">Kết thúc giao dịch <span>(<?=$count_steps_8 + $count_steps_9?>)</span></th>
                      </tr>

                      <tr>
                        <th>Tiềm hiểu thông tin <span>(<?=$count_steps_0?>)</span></th>
                        <th>Nuôi dưỡng khách <span>(<?=$count_steps_1?>)</span></th>
                        <th>Xác định có nhu cầu <span>(<?=$count_steps_2?>)</span></th>

                        <th>Sẳn sàng chốt hẹn <span>(<?=$count_steps_3?>)</span></th>
                        <th>Chờ gặp <span>(<?=$count_steps_4?>)</span></th>
                        <th>Thương thảo <span>(<?=$count_steps_5?>)</span></th>

                        <th>Thất bại <span>(<?=$count_steps_6?>)</span></th>
                        <th>Thành công <span>(<?=$count_steps_7?>)</span></th>
                        <th>Chăm sóc <span>(<?=$count_steps_8?>)</span></th>

                        <th>Giao HD và trao quà <span>(<?=$count_steps_9?>)</span></th>
                        <th>Có khả năng khai thác <span>(<?=$count_steps_10?>)</span></th>
                      </tr>

                    </thead>
                    <tbody>

                      <?php for ($i=0; $i <$max_item ; $i++) {?>

                        <tr>
                          <?php for ($j=0; $j <11 ; $j++) {

                            $list_customer = $this->Customer_M->listCustomerbyStaff('',$j);

                            if (!empty($list_customer[$i])) {
                              $date_update =date('Ymd') - date('Ymd', strtotime($list_customer[$i]['updated_at']));
                              if ($date_update == 0) {
                                $date_update = 'Hôm nay';
                              }else{
                                $date_update = $date_update.' ngày trước';
                              }

                              if ($list_customer[$i]['staff_id'] == 0) {
                                $staff_name = 'Admin';
                              }else{
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$list_customer[$i]['staff_id']]);
                                $staff_name = $info_staff['staff_name'];
                              }
                              
                          ?>
                          <td>
                              <div data-id="<?=$list_customer[$i]['customer_id']?>">
                                <p><strong>Tên: </strong><?=$list_customer[$i]['customer_name']?></p>
                                <p><strong>Nhu cầu: </strong><?=$list_customer[$i]['need']?></p>
                                <p><strong>Hoa hồng: </strong><?=$list_customer[$i]['commission_level']?></p>
                                <p><strong>Cập nhật: </strong><?=$date_update?></p>
                                <p><strong>Ghi chú: </strong><?=mb_substr($list_customer[$i]['note'], 0, 18,"UTF-8").'[...]'?></p>
                                <p><strong>Ngày tạo: </strong><?=date('d-m-Y', strtotime($list_customer[$i]['created_at']))?></p>
                                <p><strong>Phụ trách: </strong><?=$staff_name?></p>
                                <!-- <a class="a btn_modal" data-id="<?=$list_customer[$i]['customer_id']?>">[Xem chi tiết]</a> -->

                                <a class="a" href="<?=base_url().'admin/customer/edit/'.$list_customer[$i]['customer_id']?>">[Xem chi tiết]</a>
                                <br>
                                <a class="a" onclick="onDelete(<?=$list_customer[$i]['customer_id']?>)" data-id="<?=$list_customer[$i]['customer_id']?>" style="color: red!important;margin-top: 10px">[xóa]</a>

                                
                              </div>
                              <br>
                              
                              <p>
                                <select onchange="setStt(this,'processing_steps',<?=$list_customer[$i]['customer_id']?>)" name="processing_steps" id="processing_steps" class="form-control" style="width: 200px;">
                                  <option <?php if ($list_customer[$i]['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                  <option <?php if ($list_customer[$i]['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                  <option <?php if ($list_customer[$i]['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                  <option <?php if ($list_customer[$i]['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                  <option <?php if ($list_customer[$i]['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                  <option <?php if ($list_customer[$i]['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                  <option <?php if ($list_customer[$i]['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                  <option <?php if ($list_customer[$i]['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                  <option <?php if ($list_customer[$i]['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                  <option <?php if ($list_customer[$i]['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                  <option <?php if ($list_customer[$i]['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
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


    function onDelete(customer_id){
        var customer_idcustomer_id = customer_id;
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
                    url: "<?=base_url('admin/customer/destroy')?>",
                    data: {'customer_id':customer_id},
                    success: function (response) {
                        location.reload();
                    }
                });
            }
        });
    }


</script>