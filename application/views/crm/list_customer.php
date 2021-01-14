    <div class="">
        <div class="container">
            <div class="row" style="margin-top: 80px;">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="font-weight: bold;font-size: 20px;">
                    Khách hàng của tôi
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="text-align: right;">
                    <button class="btn btn-default btn-icon-notika waves-effect" data-toggle="modal" data-target="#search" style="background: #54c391;color: white;"><i class="notika-icon notika-search"></i> Tìm kiếm</button>
                    <button class="btn btn-default btn-icon-notika waves-effect" data-toggle="modal" data-target="#sort" style="background: #54c391;color: white;"><i class="notika-icon notika-up-arrow"></i> Sắp xếp</button>
                    <a href="<?=base_url('crm/customer/add')?>" title="">
                        <button class="btn notika-btn-deeppurple btn-reco-mg btn-button-mg waves-effect" style="background: #54c391;color: white;">Thêm khách hàng</button>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="search" role="dialog">
        <div class="modal-dialog modals-default">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h2 style="text-align: center;">Tìm kiếm</h2>
                    <hr>
                    <div class="row">
                        <input type="hidden" name="searched" id="searched" value="0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                
                              <div class="form-group">
                                    <label for="">Nhân viên phụ trách</label>
                                    <select name="staff_id" id="staff_id" class="form-control" required="">
                                        <option value=""></option>
                                        <option value="<?=$staff_infor['staff_id']?>"><?=$staff_infor['staff_name']?></option>
                                        <?php foreach ($list_staff as $key => $staff) {?>
                                            <option value="<?=$staff['staff_id']?>"><?=$staff['staff_name']?></option>
                                        <?php } ?>
                                        
                                    </select>
                                </div>
                            
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label>Họ tên</label>
                                    <input type="text" class="form-control" name="customer_name" id="customer_name">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" name="customer_phone" id="customer_phone" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Sở thích</label>
                                    <input id="interests" value="" type="text" name="interests" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Nghề nghiệp</label>
                                    <input id="job" value="" type="text" name="job" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Nguồn</label>
                                    <input id="source" value="" type="text" name="source" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Đã có bảo hiểm</label>
                                    <select name="insurance" id="insurance" class="form-control">
                                        <option value=""></option>
                                        <option value="0">Chưa có</option>
                                        <option value="1">Đã có</option>
                                    </select>
                                </div>
                            </div>

                            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <label for="">Ghi chú</label>
                                    <textarea name="note" id="note" cols="30" rows="3" class="form-control"></textarea>
                                </div>
                            </div> -->

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="btn_search">Tìm kiếm</button>
                    <button type="button" class="btn btn-default" id="btn_close_search" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="sort" role="dialog">
        <div class="modal-dialog modals-default">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h2 style="text-align: center;">Sắp xếp</h2>
                    <hr>
                    <div class="row">
                        <input type="hidden" name="sorted" id="sorted" value="0">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="" style="width: 95px;">Tương tác</label>
                                <input type="radio" name="key_sort" value="updated_at" style="vertical-align: middle;" checked="">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="" style="width: 95px;">Hoa hồng</label>
                                <input type="radio" name="key_sort" value="commission_level" style="vertical-align: middle;">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="" style="width: 95px;">Ngày tạo</label>
                                <input type="radio" name="key_sort" value="created_at" style="vertical-align: middle;">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="" style="width: 95px;">Loại sắp xếp</label>
                                <select name="type_sort" id="type_sort" class="form-control">
                                    <option value="asc">Tăng dần</option>
                                    <option value="desc">Giảm dần</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="btn_sort">Sắp xếp</button>
                    <button type="button" class="btn btn-default" id="btn_close_sort" data-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li style="width: 25%" class="li_active active 1" data-id="1"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Tiềm Năng</a>
                        </li>
                        <li style="width: 25%" class="li_active 2" data-id="2"><a data-toggle="tab" href="#mailbox"><i class="notika-icon notika-mail"></i> Tư Vấn</a>
                        </li>
                        <li style="width: 25%" class="li_active 3" data-id="3"><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Thực Hiện Giao Dịch</a>
                        </li>
                        <li style="width: 25%" class="li_active 4" data-id="4"><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Kết Thúc Giao Dịch</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Main Menu area End-->
    <!-- Animateions area start-->

    <div id="load_data"></div>
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020 <a href="http://manucare.vn">manucare.vn</a>.</p>
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
    <script src="<?=base_url()?>plugins/sweetalert2/sweetalert2.js"></script>
    <script src="<?=base_url()?>upload/js/sweetalert2.js"></script>

   <script type="text/javascript">

    active_steps(1);
    function active_steps(key) {
        $( ".li_active" ).removeClass("active");
        $( "."+ key).addClass("active");

        /*search*/
        var searched =  $('#searched').val();
        if (searched == 1) {
            var staff_id = $('#staff_id').val();
            var customer_name = $('#customer_name').val();
            var customer_phone = $('#customer_phone').val();
            var job = $('#job').val();
            var source = $('#source').val();
            var insurance = $('#insurance').val();
        }else{
            var staff_id = '';
            var customer_name = '';
            var customer_phone = '';
            var job = '';
            var source = '';
            var insurance = '';
        }
        

        /*sort*/
        var sorted =  $('#sorted').val();
        if (sorted == 1) {
            var key_sort = $('input[name="key_sort"]:checked').val();
            var type_sort = $('#type_sort').val();
        }else{
            var key_sort = '';
            var type_sort = '';
        }

        console.log(customer_name);

        $.ajax({
            type: "POST",
            url: "<?=base_url()?>crm/customer/loadCustomer",
            data: {
                key:key,
                staff_id:staff_id,
                customer_name:customer_name,
                customer_phone:customer_phone,
                job:job,
                source:source,
                insurance:insurance,
                key_sort:key_sort,
                type_sort:type_sort,
            },
            success: function(data)
            {
                $("#load_data").html(data);
            }
        });
    }


    $('.modal').on('click', '#btn_search', function(){
       var key = $('#key').val();
        $('#searched').val(1);
        document.getElementById('btn_close_search').click();  
        active_steps(key);

    });

    $('.modal').on('click', '#btn_sort', function(){
        var key = $('#key').val();
        $('#sorted').val(1);
        document.getElementById('btn_close_sort').click();  
        active_steps(key);

    });
      
        


    $('.container').on('click', '.li_active', function(){
        var key = $(this).data('id');
        $( ".li_active" ).removeClass("active");
        $( "."+ key).addClass("active");

        active_steps(key);

    });

    function setStt(ckb,colset,customer_id){
        ckb = ckb.value;
        colset = colset.toString();
        var key = $('#key').val();
        $.ajax({
            type: "post",
            url: "<?=base_url('crm/customer/update')?>",
            data: {'customer_id':customer_id,[colset]:ckb},
            success: function (response) {
                const toast = swal.mixin({
                    toast: true,
                    position: 'center',
                    showConfirmButton: false,
                    timer: 2500
                });
                toast({
                  type: 'success',
                  title: 'Đã cập nhật.',
                });

                active_steps(key);
            }
        });
    }

    function setSteps(ckb,colset,customer_id) {
        colset = colset.toString();
        var key = $('#key').val();
        $.ajax({
            type: "post",
            url: "<?=base_url('crm/customer/update')?>",
            data: {'customer_id':customer_id,[colset]:ckb},
            success: function (response) {
                const toast = swal.mixin({
                    toast: true,
                    position: 'center',
                    showConfirmButton: false,
                    timer: 2500
                });
                toast({
                  type: 'success',
                  title: 'Đã cập nhật.',
                });
                active_steps(key);
            }
        });
    }

    function onDelete(customer_id){
        var key = $('#key').val();
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
                    url: "<?=base_url('crm/customer/destroy')?>",
                    data: {'customer_id':customer_id},
                    success: function (response) {
                        const toast = swal.mixin({
                            toast: true,
                            position: 'center',
                            showConfirmButton: false,
                            timer: 2500
                        });
                        toast({
                          type: 'success',
                          title: 'Đã xóa.',
                        });

                        active_steps(key);
                    }
                });
            }
        });
    }

   </script>
</body>

</html>