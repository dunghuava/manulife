<style type="text/css">
	.inline-flex label {
    	min-width: 160px;
	}
</style>
<div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8 inline-flex">
    <label for="">Họ tên</label>
    <input type="text" name="customer_name" id="customer_name" class="form-control" value="<?=$info_customer['customer_name']?>" required>
</div>

<div class="col-md-8 inline-flex">
    <label for="">Năm sinh</label>
    <input type="text" name="customer_birth" id="customer_birth" value="<?=$info_customer['customer_birth']?>" class="form-control">
</div>

<div class="col-md-8 inline-flex">
    <label for="">Số điện thoại</label>
    <input type="text" name="customer_phone" id="customer_phone" class="form-control" placeholder="" value="<?=$info_customer['customer_phone']?>">
</div>   

<div class="col-md-8 inline-flex">
    <label for="">Email</label>
    <input type="text" name="customer_email" id="customer_email" class="form-control" placeholder="" value="<?=$info_customer['customer_email']?>">
</div> 

<div class="col-md-8 inline-flex">
    <label for="">Địa chỉ</label>
    <input type="text" name="customer_address" id="customer_address" class="form-control" value="<?=$info_customer['customer_address']?>" placeholder="">
</div> 

<div class="col-md-8 inline-flex">
    <label for="">Nhu cầu</label>
    <textarea name="need" id="need" cols="30" rows="3" class="form-control"><?=$info_customer['need']?></textarea>
</div>  



<div class="col-md-8 inline-flex">
    <label for="">Mức hợp đồng</label>
    <textarea name="commission_level" id="commission_level" cols="30" rows="3" class="form-control"><?=$info_customer['commission_level']?></textarea>
</div>  
<div class="col-md-8 inline-flex">
    <label for="">Nghề nghiệp</label>
    <textarea name="job" id="job" cols="30" rows="3" class="form-control"><?=$info_customer['job']?></textarea>
</div>  
<div class="col-md-8 inline-flex">
    <label for="">Sở thích</label>
    <textarea name="interests" id="interests" cols="30" rows="3" class="form-control"><?=$info_customer['interests']?></textarea>
</div>  
<div class="col-md-8 inline-flex">
    <label for="">Ghi chú</label>
    <textarea name="note" id="note" cols="30" rows="3" class="form-control"><?=$info_customer['note']?></textarea>
</div>  
<div class="col-md-8 inline-flex">
    <label for="">Đã có bảo hiểm chưa</label>
    <select name="insurance" id="insurance" class="form-control">
        <option value=""></option>
        <option <?php if ($info_customer['insurance'] == 0) echo "selected";?> value="0">Chưa có</option>
        <option <?php if ($info_customer['insurance'] == 1) echo "selected";?> value="1">Đã có</option>

    </select>
</div>  
<div class="col-md-8 inline-flex">
    <label for="">Nguồn</label>
    <textarea name="source" id="source" cols="30" rows="3" class="form-control"><?=$info_customer['source']?></textarea>
</div>  
<div class="col-md-8 inline-flex">
    <label for="">Tình trạng hôn nhân</label>
    <select name="marriage" id="marriage" class="form-control">
        <option value=""></option>
        <option <?php if ($info_customer['marriage'] == 0) echo "selected";?> value="0">Độc thân</option>
        <option <?php if ($info_customer['marriage'] == 1) echo "selected";?> value="1">Đã có gia đình</option>
    </select>
</div>  

<div class="col-md-8 inline-flex">
    <label for="">Thông tin người thân</label>
    <textarea name="info_relatives" id="info_relatives" cols="30" rows="3" class="form-control"><?=$info_customer['info_relatives']?></textarea>
</div>  

<div class="col-md-8 inline-flex">
    <label for="">Số lượng HD tham gia</label>
    <input type="text" name="amount_insurance" id="amount_insurance" class="form-control" value="<?=$info_customer['amount_insurance']?>" placeholder="">
</div>  

<div class="col-md-8 inline-flex">
    <label for="">Tham gia bảo hiểm nào</label>
    <textarea name="insurance_name" id="insurance_name" cols="30" rows="3" class="form-control"><?=$info_customer['insurance_name']?></textarea>
</div>  

<div class="col-md-8 inline-flex">
    <label for="">Tiến độ</label>
    <select name="processing_steps" id="processing_steps" class="form-control">
        <option <?php if ($info_customer['processing_steps'] == 0) echo "selected";?> value="0">Tiềm hiểu thông tin</option>
        <option <?php if ($info_customer['processing_steps'] == 1) echo "selected";?> value="1">Nuôi dưỡng khách</option>
        <option <?php if ($info_customer['processing_steps'] == 2) echo "selected";?> value="2">Xác định có nhu cầu</option>
        <option <?php if ($info_customer['processing_steps'] == 3) echo "selected";?> value="3">Sẳn sàng chốt hẹn</option>
        <option <?php if ($info_customer['processing_steps'] == 4) echo "selected";?> value="4">Chờ gặp</option>
        <option <?php if ($info_customer['processing_steps'] == 5) echo "selected";?> value="5">Thương thảo</option>
        <option <?php if ($info_customer['processing_steps'] == 6) echo "selected";?> value="6">Thất bại</option>
        <option <?php if ($info_customer['processing_steps'] == 7) echo "selected";?> value="7">Thành công</option>
        <option <?php if ($info_customer['processing_steps'] == 8) echo "selected";?> value="8">Chăm sóc</option>
        <option <?php if ($info_customer['processing_steps'] == 9) echo "selected";?> value="9">Giao HD và trao quà</option>
        <option <?php if ($info_customer['processing_steps'] == 10) echo "selected";?> value="10">Có khả năng khai thác</option>
    </select>
</div>  

<div class="col-md-8 inline-flex">
    <label for="">Nhân viên phụ trách</label>
    <select name="staff_id" id="staff_id" class="form-control" required="">
        <option value="">Chọn nhận viên phụ trách</option>
        <option value="<?=$staff_infor['staff_id']?>" <?php if ($info_customer['staff_id'] == $staff_infor['staff_id']) echo "selected";?>><?=$staff_infor['staff_name']?></option>
        <?php foreach ($list_staff as $key => $staff) {?>
            <option value="<?=$staff['staff_id']?>" <?php if ($info_customer['staff_id'] == $staff['staff_id']) echo "selected";?>><?=$staff['staff_name']?></option>
        <?php } ?>

    </select>
</div>  

<br>
<br>
<div class="col-md-6 inline-flex" style="padding-bottom: 10px">
    <label for=""></label>
    <a href="<?=base_url('staff/customer')?>" title="">
	    <button type="button" class="btn btn-danger">
	    	<span class="fa fa-arrow-left"></span>
	    	Trở về
	    </button>
    </a>
    <button type="submit" id="save" class="btn btn-primary">Lưu</button>
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