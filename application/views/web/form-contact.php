<?php 
    $formcontact = $this->Web_M->q("select * from db_other where other_id=1");
?>
<section class="sec-form-contact">
    <div class="container full-w">
        <div class="row">
            <div class="col-md-3">
                <h3>Hãy liên hệ với chúng tôi để được hỗ trợ tốt nhất</h3>
                <?=$formcontact[0]['other_content']?>
            </div>
            <div class="col-md-9">
                <form id="form-contact" action="" method="post" class="form-group">
                    <input type="hidden" id="contact_title" name="contact_title" class="form-control custom" value="Giải đáp thắc mắc" >
                    <input type="hidden" id="contact_to_staff" name="contact_to_staff" class="form-control custom" value="1" >
                    <div class="row">
                        <div class="col-md-6">
                            <input placeholder="Họ và tên" type="text" id="contact_name" name="contact_name" class="form-control custom" required="" >
                        </div>
                        <div class="col-md-6">
                            <input placeholder="Email" type="email" id="contact_email" name="contact_email" class="form-control custom" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <input placeholder="Địa chỉ" type="text" id="contact_address" name="contact_address" class="form-control custom">
                        </div>
                        <div class="col-md-3">
                            <input placeholder="Số điện thoại" type="text" id="contact_phone" name="contact_phone" class="form-control custom" required="">
                        </div>
                        <div class="col-md-6">
                            <input placeholder="Nhu cầu liên hệ" type="text" id="contact_info" name="contact_info" class="form-control custom" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div style="display:flex">
                                <input type="checkbox" name="ckb" id="ckb" required="">&nbsp;
                                <label for="ckb" style="padding-top: 8px;">
                                    <div>Tôi đã đọc và đồng ý với <a style="color:#00A758" href="">Chính sách bảo mật</a>  của Manulife</div>
                                </label> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <button type="submit" class="btn btn-danger">Gửi thông tin</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $('#form-contact').submit(function(event){  
        event.preventDefault();  

        $.ajax({  
            url:"<?=base_url()?>web/addContact",  
            method:"POST",  
            data:$('#form-contact').serialize(),  
            success: function (data) {
                const toast = swal.mixin({
                    toast: true,
                    position: 'center',
                    showConfirmButton: false,
                    timer: 2500
                });

                toast({
                    type: 'success',
                    title: 'Thông tin đã được gửi',
                });

                $('#form-contact').find('#contact_name').val('');
                $('#form-contact').find('#contact_phone').val('');
                $('#form-contact').find('#contact_email').val('');
                $('#form-contact').find('#contact_address').val('');
                $('#form-contact').find('#contact_info').val('');
                $('#form-contact').find('#ckb').removeAttr("checked");
            }
        });  

    });
</script>