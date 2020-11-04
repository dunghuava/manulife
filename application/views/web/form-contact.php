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
                    <div class="row">
                        <div class="col-md-6">
                            <input placeholder="Họ và tên" type="text" class="form-control custom">
                            <span class="error_log">(*) Vui lòng điền vào trường này</span>
                        </div>
                        <div class="col-md-6">
                            <input placeholder="Email" type="text" class="form-control custom">
                            <span class="error_log">(*) Vui lòng điền vào trường này</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <select name="" id="" class="form-control custom">
                                <option value="0">Mã quốc gia</option>
                                <option value="+84">+84</option>
                                <option value="+85">+85</option>
                                <option value="+86">+86</option>
                                <option value="+87">+87</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input placeholder="Số điện thoại" type="text" class="form-control custom">
                            <span class="error_log">(*) Vui lòng điền vào trường này</span>
                        </div>
                        <div class="col-md-6">
                             <select name="" id="" class="form-control custom">
                                <option value="0">Tỉnh / Thành phố</option>
                                <option value="+84">Việt nam</option>
                                <option value="+85">Malaisia</option>
                                <option value="+86">Indonesa</option>
                                <option value="+87">Philipin</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div style="display:flex">
                                <input type="checkbox" name="ckb" id="ckb">&nbsp;
                                <label for="ckb" style="padding-top: 8px;">
                                    <div>Tôi đã đọc và đồng ý với <a style="color:#00A758" href=""><i>Chính sách bảo mật</i></a>  của Manulife</div>
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
    var invalid = false;
    $('#form-contact input').mouseout(function () { 
        if ($(this).val().trim()==''){
            $(this).parent('div').find('span').show();
            invalid=false;
        }else{
            $(this).parent('div').find('span').hide(); 
            invalid=true;
        }
    });
    $('#form-contact').submit(function (e) { 
        if (!invalid){
            $('#form-contact input').trigger('mouseout');
            return false;
        }
        if ($('#ckb').is(':checked')){
            $.ajax({
                type: "post",
                url: "url",
                data: "data",
                success: function (response) {
                    
                }
            });
        }else{
            alert('Vui lòng đồng ý với chính sách bảo mật của chúng tôi để hoàn tất');
        }
        return false;
    });
</script>