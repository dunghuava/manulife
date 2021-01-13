<div class="">
        <div class="container">
            <div class="row" style="margin-top: 80px;">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="font-weight: bold;font-size: 20px;">
                    Danh sách nhân viên
                </div>
                <!-- <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="text-align: right;">
                    <button class="btn notika-btn-deeppurple btn-reco-mg btn-button-mg waves-effect" style="background: #54c391;color: white;">Danh sách khách hàng</button>
                </div> -->
            </div>
        </div>
    </div>

<div class="form-element-area" style="margin-top: 25px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <a href="<?=base_url('crm/staff/add')?>" title="">
                        		<button class="btn notika-btn-deeppurple btn-reco-mg btn-button-mg waves-effect" style="background: #54c391;color: white;">Thêm nhân viên</button>
                    		</a>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            	<div class="table-responsive">
                            		<table id="data-table-basic" class="table table-striped">
                            			<thead>
                            				<tr>
                            					<th>Họ tên</th>
                            					<th>Hình ảnh</th>
                            					<th>Chức danh</th>
                            					<th>Số điện thoại</th>
                            					<th style="width: 11%">Thao tác</th>
                            				</tr>
                            			</thead>
                            			<tbody>
                            				<?php foreach ($list_staff as $item){ ?>
                            					<tr>
                            						<td><?=$item['staff_name']?></td>
                            						<td><img src="<?=resizeImg($item['staff_img'],50,50,0)?>" style="max-height: 90px;"></td>
                            						<td><?=$item['staff_position']?></td>
                            						<td><?=$item['staff_phone']?></td>
                            						<td>
                            							<a href="<?=base_url().'crm/staff/edit/'.$item['staff_id']?>">
                            								<button type="button" class="btn btn-default">
                            									<span class="fa fa-eye"></span>
                            								</button>
                            							</a>

                            							<?php if ($item['staff_id'] != 1)  {?>
                            								<button onclick="onDelete(<?=$item['staff_id']?>)" type="button" class="btn btn-default">
                            									<span class="fa fa-trash"></span>
                            								</button>
                            							<?php } ?>
                            						</td>
                            					</tr>
                            				<?php } ?>

                            				<?php if (empty($list_staff)) {
                            					echo "<tr><td colspan='5' style='color:red;text-align: center;'>Dữ liệu rỗng</td></tr>";
                            				} ?>
                            			</tbody>
                            		</table>
                            	</div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- <div class="footer-copyright-area" style="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2020 <a href="https://colorlib.com">manucare.vn</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
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
    <!-- <script src="<?=base_url()?>crm_manucare/js/data-table/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>crm_manucare/js/data-table/data-table-act.js"></script> -->
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
    function onDelete(staff_id){
        var staff_id = staff_id;
        Swal.fire({
            title: 'Bạn có muốn xóa mục này?',
            text: "Dữ liệu đã xóa sẽ không thể phục hồi",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Hủy',
            confirmButtonText: 'Xóa'
            }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?=base_url('crm/staff/destroy')?>",
                    data: {'staff_id':staff_id},
                    success: function (response) {
                        location.reload();
                    }
                });
            }
        });
    }
    </script>
</body>

</html>

