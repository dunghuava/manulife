<div class="">
        <div class="container">
            <div class="row" style="margin-top: 25px;">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="font-weight: bold;font-size: 20px;">
                    Thêm khách hàng
                </div>
                <!-- <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="text-align: right;">
                    <button class="btn notika-btn-deeppurple btn-reco-mg btn-button-mg waves-effect" style="background: #54c391;color: white;">Danh sách khách hàng</button>
                </div> -->
            </div>
        </div>
    </div>

<div class="form-element-area" style="margin-top: 25px;">
        <div class="container">
            <form action="" id="edit_customer" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Thông tin khách hàng</h2>
                            <!-- <p>Text Inputs with different sizes by height(<code>.input-sm, .input-lg</code>) and column.</p> -->
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input type="text" class="form-control" name="customer_name" id="customer_name" value="<?=$info_customer['customer_name']?>" required="">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Năm sinh</label>
                                    <input type="text" name="customer_birth" id="customer_birth" value="<?=$info_customer['customer_birth']?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" name="customer_phone" id="customer_phone" value="<?=$info_customer['customer_phone']?>" class="form-control" placeholder="">
                                </div>
                            </div>
                        
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" name="customer_email" id="customer_email" value="<?=$info_customer['customer_email']?>" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Địa chỉ</label>
                                    <input type="text" name="customer_address" id="customer_address" value="<?=$info_customer['customer_address']?>" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Nghề nghiệp</label>
                                    <input type="text" name="job" id="job" class="form-control" value="<?=$info_customer['job']?>" placeholder="">
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Sở thích</label>
                                    <input type="text" name="interests" id="interests" value="<?=$info_customer['interests']?>" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Tình trạng hôn nhân</label>
                                    <select name="marriage" id="marriage" class="form-control">
                                        <option value=""></option>
                                        <option <?php if ($info_customer['marriage'] == 0) echo "selected";?> value="0">Độc thân</option>
                                        <option <?php if ($info_customer['marriage'] == 1) echo "selected";?> value="1">Đã có gia đình</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Nhu cầu</label>
                                    <textarea name="need" id="need" cols="30" rows="3" class="form-control"><?=$info_customer['need']?></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Mức hợp đồng</label>
                                    <textarea name="commission_level" id="commission_level" cols="30" rows="3" class="form-control"><?=$info_customer['commission_level']?></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Ghi chú</label>
                                    <textarea name="note" id="note" cols="30" rows="3" class="form-control"><?=$info_customer['note']?></textarea>
                                </div>
                            </div>

                        
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Đã có bảo hiểm chưa</label>
                                    <select name="insurance" id="insurance" class="form-control">
                                        <option value=""></option>
                                        <option <?php if ($info_customer['insurance'] == 0) echo "selected";?> value="0">Chưa có</option>
                                        <option <?php if ($info_customer['insurance'] == 1) echo "selected";?> value="1">Đã có</option>
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Số lượng HD tham gia</label>
                                    <input type="text" name="amount_insurance" id="amount_insurance" value="<?=$info_customer['amount_insurance']?>" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                
                                <div class="form-group">
                                    <label for="">Tham gia bảo hiểm nào</label>
                                    <textarea name="insurance_name" id="insurance_name" cols="30" rows="3" class="form-control"><?=$info_customer['insurance_name']?></textarea>
                                </div>
                            
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                
                              <div class="form-group">
                                    <label for="">Nguồn</label>
                                    <textarea name="source" id="source" cols="30" rows="3" class="form-control"><?=$info_customer['source']?></textarea>
                                </div>
                            
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                
                              <div class="form-group">
                                    <label for="">Thông tin người thân</label>
                                    <textarea name="info_relatives" id="info_relatives" cols="30" rows="3" class="form-control"><?=$info_customer['info_relatives']?></textarea>
                                </div>
                            
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                
                              <div class="form-group">
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
                            
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                
                              <div class="form-group">
                                    <label for="">Nhân viên phụ trách</label>
                                    <select name="staff_id" id="staff_id" class="form-control" required="">
                                        <option value="">Chọn nhận viên phụ trách</option>
                                        <option value="<?=$staff_infor['staff_id']?>" <?php if ($info_customer['staff_id'] == $staff_infor['staff_id']) echo "selected";?>><?=$staff_infor['staff_name']?></option>
                                        <?php foreach ($list_staff as $key => $staff) {?>
                                            <option value="<?=$staff['staff_id']?>" <?php if ($info_customer['staff_id'] == $staff['staff_id']) echo "selected";?>><?=$staff['staff_name']?></option>
                                        <?php } ?>
                                        
                                    </select>
                                </div>
                            
                            </div>

                           <input type="hidden" name="customer_id" id="customer_id" value="<?=$info_customer['customer_id']?>">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                    <label for=""></label>
                                    <a href="<?=base_url('crm')?>" title="">
                                        <button type="button" class="btn btn-danger">
                                            <span class="fa fa-arrow-left"></span>
                                            Trở về
                                        </button>
                                    </a>
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
            
        </div>
    </div>

    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020 <a href="https://colorlib.com">manucare.vn</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?=base_url()?>crm_manucare/js/counterup/waypoints.min.js"></script>
    <script src="<?=base_url()?>crm_manucare/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?=base_url()?>crm_manucare/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>crm_manucare/js/flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>crm_manucare/js/flot/flot-active.js"></script>
    <!-- knob JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/knob/jquery.knob.js"></script>
    <script src="<?=base_url()?>crm_manucare/js/knob/jquery.appear.js"></script>
    <script src="<?=base_url()?>crm_manucare/js/knob/knob-active.js"></script>
    <!--  wave JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/wave/waves.min.js"></script>
    <script src="<?=base_url()?>crm_manucare/js/wave/wave-active.js"></script>
    <!--  animation JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/animation/animation-active.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/chat/jquery.chat.js"></script>
    <!--  todo JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?=base_url()?>crm_manucare/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
   <!--  <script src="<?=base_url()?>crm_manucare/js/tawk-chat.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="<?=base_url()?>plugins/sweetalert2/sweetalert2.css">
    <script src="<?=base_url()?>upload/js/sweetalert2.js"></script>

    <script type="text/javascript">
    $('#edit_customer').submit(function (event) {
        event.preventDefault(); 
        $.ajax({
        type: "POST",
        url: "<?=base_url()?>crm/customer/updateCustomerAjax",
        data: $('#edit_customer').serialize(),
        success: function(data)
          {
            const toast = swal.mixin({
              toast: true,
              position: 'center',
              showConfirmButton: false,
              timer: 2500
            });
            toast({
              type: 'success',
              title: 'Đã sửa.',
            });
            setTimeout("window.location.replace('<?= base_url().'crm'; ?>');",2500);
            
          }   
        });
     
        
    });
    </script>
</body>

</html>