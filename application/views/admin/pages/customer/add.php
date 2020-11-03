<style type="text/css">
	.inline-flex label {
    	min-width: 160px;
	}
</style>
<div class="container-fluid">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col-md-8 inline-flex">
            <label for="">Họ tên</label>
            <input type="text" name="customer_name" id="customer_name" class="form-control" required>
        </div>

        <div class="col-md-8 inline-flex">
            <label for="">Năm sinh</label>
            <select name="customer_birth" id="customer_birth" class="form-control" required>
                <option value=""></option>
                <?php for ($i=1970; $i <2020 ; $i++) { 
                	echo '<option value="'.$i.'">'.$i.'</option>';
                } ?>
            </select>
        </div>

        <div class="col-md-8 inline-flex">
            <label for="">Số điện thoại</label>
            <input type="text" name="customer_phone" id="customer_phone" class="form-control" placeholder="" required>
        </div>   

        <div class="col-md-8 inline-flex">
            <label for="">Email</label>
            <input type="text" name="customer_email" id="customer_email" class="form-control" placeholder="" required>
        </div> 

        <div class="col-md-8 inline-flex">
            <label for="">Địa chỉ</label>
            <input type="text" name="customer_address" id="customer_address" class="form-control" placeholder="">
        </div> 

        <div class="col-md-8 inline-flex">
            <label for="">Nhu cầu</label>
            <textarea name="need" id="need" cols="30" rows="3" class="form-control"></textarea>
        </div>  



        <div class="col-md-8 inline-flex">
            <label for="">Mức hợp đồng</label>
            <textarea name="commission_level" id="commission_level" cols="30" rows="3" class="form-control"></textarea>
        </div>  
        <div class="col-md-8 inline-flex">
            <label for="">Nghề nghiệp</label>
            <textarea name="job" id="job" cols="30" rows="3" class="form-control"></textarea>
        </div>  
        <div class="col-md-8 inline-flex">
            <label for="">Sở thích</label>
            <textarea name="interests" id="interests" cols="30" rows="3" class="form-control"></textarea>
        </div>  
        <div class="col-md-8 inline-flex">
            <label for="">Ghi chú</label>
            <textarea name="note" id="note" cols="30" rows="3" class="form-control"></textarea>
        </div>  
        <div class="col-md-8 inline-flex">
            <label for="">Đã có bảo hiểm chưa</label>
            <select name="insurance" id="insurance" class="form-control">
                <option value=""></option>
                <option value="0">Chưa có</option>
                <option value="1">Đã có</option>
                
            </select>
        </div>  
        <div class="col-md-8 inline-flex">
            <label for="">Nguồn</label>
            <textarea name="source" id="source" cols="30" rows="3" class="form-control"></textarea>
        </div>  
        <div class="col-md-8 inline-flex">
            <label for="">Tình trạng hôn nhân</label>
            <select name="marriage" id="marriage" class="form-control">
                <option value=""></option>
                <option value="0">Độc thân</option>
                <option value="1">Đã có gia đình</option>
            </select>
        </div>  

        <div class="col-md-8 inline-flex">
            <label for="">Thông tin người thân</label>
            <textarea name="info_relatives" id="info_relatives" cols="30" rows="3" class="form-control"></textarea>
        </div>  

        <div class="col-md-8 inline-flex">
            <label for="">Số lượng HD tham gia</label>
            <input type="text" name="amount_insurance" id="amount_insurance" class="form-control" placeholder="">
        </div>  

        <div class="col-md-8 inline-flex">
            <label for="">Tham gia bảo hiểm nào</label>
            <textarea name="insurance_name" id="insurance_name" cols="30" rows="3" class="form-control"></textarea>
        </div>  

        <div class="col-md-8 inline-flex">
            <label for="">Tiến độ</label>
            <select name="processing_steps" id="processing_steps" class="form-control">
                <option value="0">Tiềm hiểu thông tin</option>
                <option value="1">Nuôi dưỡng khách</option>
                <option value="2">Xác định có nhu cầu</option>
                <option value="3">Sẳn sàng chốt hẹn</option>
                <option value="4">Chờ gặp</option>
                <option value="5">Thương thảo</option>
                <option value="6">Thất bại</option>
                <option value="7">Thành công</option>
                <option value="8">Chăm sóc</option>
                <option value="9">Giao HD và trao quà</option>
                <option value="10">Có khả năng khai thác</option>
            </select>
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