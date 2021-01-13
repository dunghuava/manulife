<style type="text/css">
    img{
        max-width: 200px;
    }
</style>

<div class="">
        <div class="container">
            <div class="row" style="margin-top: 80px;">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="font-weight: bold;font-size: 20px;">
                    Thêm nhân viên
                </div>
                <!-- <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="text-align: right;">
                    <button class="btn notika-btn-deeppurple btn-reco-mg btn-button-mg waves-effect" style="background: #54c391;color: white;">Danh sách khách hàng</button>
                </div> -->
            </div>
        </div>
    </div>

<div class="form-element-area" style="margin-top: 25px;height: 100vh">
        <div class="container">
            <form action="" id="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Thông tin nhân viên</h2>
                            <!-- <p>Text Inputs with different sizes by height(<code>.input-sm, .input-lg</code>) and column.</p> -->
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Hình ảnh</label>
                                    <input type="file" name="staff_img" id="staff_img" class="" required="">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Họ tên</label>
                                    <input id="staff_name" value="" type="text" name="staff_name" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Chức danh</label>
                                    <input id="staff_position" value="" type="text" name="staff_position" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input id="staff_phone" value="" type="text" name="staff_phone" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Subdomain</label>
                                    <input id="subdomain" value="" type="text" name="subdomain" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Email đăng nhập</label>
                                    <input id="staff_email" value="" type="email" name="staff_email" class="form-control" required>
                                    <span id="result" style="color: red;margin-left: 5px;"></span>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Mật khẩu mới</label>
                                    <input id="staff_password" value="" type="text" name="staff_password" class="form-control" placeholder="">
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for=""></label>
                                    <a href="<?=base_url('crm/staff')?>" title="">
                                        <button type="button" class="btn btn-danger">
                                            <span class="fa fa-arrow-left"></span>
                                            Trở về
                                        </button>
                                    </a>
                                    <button id="btn_save" type="submit" class="btn btn-primary">Lưu</button>
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

    <?php if ($this->session->flashdata('reponse')) { ?>
        <script >
            const toast = swal.mixin({
                toast: true,
                position: 'center',
                showConfirmButton: false,
                timer: 2500
            });
            toast({
                type: 'success',
                title: '<?=$this->session->flashdata('reponse')['message']?>',
            });
        </script>
    <?php } ?>


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
            var staff_id = '';
          e.preventDefault();
            $.ajax({
              url:"<?php echo base_url() ?>crm/staff/check_staff_username",
              type:"POST",
              data:{staff_email:staff_email,staff_id:staff_id},
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
</body>

</html>