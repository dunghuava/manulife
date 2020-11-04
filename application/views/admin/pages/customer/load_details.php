
<h2 style="padding: 15px">Thông tin chi tiết</h2>
<div class="col-md-12 inline-flex">
    <label for="">Họ tên</label>
    <input type="text" name="customer_name" id="customer_name" class="form-control" value="<?=$info_customer['customer_name']?>" required>
</div>

<div class="col-md-12 inline-flex">
    <label for="">Năm sinh</label>
    <select name="customer_birth" id="customer_birth" class="form-control" required>
        <option value=""></option>
        <?php for ($i=1970; $i <2020 ; $i++) { 
            if ($i == $info_customer['customer_birth']) {
                $select_birth = 'selected';
            }else{
                $select_birth = '';
            }
           echo '<option value="'.$i.'" '.$select_birth.'>'.$i.'</option>';
       } ?>
   </select>
</div>

<div class="col-md-12 inline-flex">
    <label for="">Số điện thoại</label>
    <input type="text" name="customer_phone" id="customer_phone" class="form-control" placeholder="" value="<?=$info_customer['customer_phone']?>" required>
</div>   

<div class="col-md-12 inline-flex">
    <label for="">Email</label>
    <input type="text" name="customer_email" id="customer_email" class="form-control" placeholder="" value="<?=$info_customer['customer_email']?>" required>
</div> 

<div class="col-md-12 inline-flex">
    <label for="">Địa chỉ</label>
    <input type="text" name="customer_address" id="customer_address" class="form-control" value="<?=$info_customer['customer_address']?>" placeholder="">
</div> 

<div class="col-md-12 inline-flex">
    <label for="">Nhu cầu</label>
    <textarea name="need" id="need" cols="30" rows="3" class="form-control"><?=$info_customer['need']?></textarea>
</div>  



<div class="col-md-12 inline-flex">
    <label for="">Mức hợp đồng</label>
    <textarea name="commission_level" id="commission_level" cols="30" rows="3" class="form-control"><?=$info_customer['commission_level']?></textarea>
</div>  
<div class="col-md-12 inline-flex">
    <label for="">Nghề nghiệp</label>
    <textarea name="job" id="job" cols="30" rows="3" class="form-control"><?=$info_customer['job']?></textarea>
</div>  
<div class="col-md-12 inline-flex">
    <label for="">Sở thích</label>
    <textarea name="interests" id="interests" cols="30" rows="3" class="form-control"><?=$info_customer['interests']?></textarea>
</div>  
<div class="col-md-12 inline-flex">
    <label for="">Ghi chú</label>
    <textarea name="note" id="note" cols="30" rows="3" class="form-control"><?=$info_customer['note']?></textarea>
</div>  
<div class="col-md-12 inline-flex">
    <label for="">Đã có bảo hiểm chưa</label>
    <select name="insurance" id="insurance" class="form-control">
        <option value=""></option>
        <option <?php if ($info_customer['insurance'] == 0) echo "selected";?> value="0">Chưa có</option>
        <option <?php if ($info_customer['insurance'] == 1) echo "selected";?> value="1">Đã có</option>

    </select>
</div>  
<div class="col-md-12 inline-flex">
    <label for="">Nguồn</label>
    <textarea name="source" id="source" cols="30" rows="3" class="form-control"><?=$info_customer['source']?></textarea>
</div>  
<div class="col-md-12 inline-flex">
    <label for="">Tình trạng hôn nhân</label>
    <select name="marriage" id="marriage" class="form-control">
        <option value=""></option>
        <option <?php if ($info_customer['marriage'] == 0) echo "selected";?> value="0">Độc thân</option>
        <option <?php if ($info_customer['marriage'] == 1) echo "selected";?> value="1">Đã có gia đình</option>
    </select>
</div>  

<div class="col-md-12 inline-flex">
    <label for="">Thông tin người thân</label>
    <textarea name="info_relatives" id="info_relatives" cols="30" rows="3" class="form-control"><?=$info_customer['info_relatives']?></textarea>
</div>  

<div class="col-md-12 inline-flex">
    <label for="">Số lượng HD tham gia</label>
    <input type="text" name="amount_insurance" id="amount_insurance" class="form-control" value="<?=$info_customer['amount_insurance']?>" placeholder="">
</div>  

<div class="col-md-12 inline-flex">
    <label for="">Tham gia bảo hiểm nào</label>
    <textarea name="insurance_name" id="insurance_name" cols="30" rows="3" class="form-control"><?=$info_customer['insurance_name']?></textarea>
</div>  

<div class="col-md-12 inline-flex">
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

<br>
<br>
<input type="hidden" name="customer_id" id="customer_id" value="<?=$info_customer['customer_id']?>">
<div class="col-md-12 inline-flex" style="padding-bottom: 10px">
    <label for=""></label>
    <button type="button" id="close" class="btn btn-danger">Đóng</button>
    <button type="button" id="save" class="btn btn-primary">Lưu</button>
</div>

