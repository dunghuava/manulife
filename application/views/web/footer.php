<br><br>
<?php include ('botchat.php') ?>
<?php include ('hotline.php') ?>

<style type="text/css">
    @media screen and (max-width: 990px) {
        .chinh_sach{
            text-align: left;
        }
    }
</style>
<footer class="app-footer font18">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="flex">
                    <span class="fa fa-phone"></span>
                    <span>Hotline</span>
                    <p>(+84) <?=$info[0]['phone']?></p>
                </div>
            </div>

            <div class="col-md-3 col-xs-6">
                <div class="flex">
                    <span class="fa fa-phone"></span>
                    <span>Khiếu nại, phản hồi</span>
                    <p>(+84) <?=$info[0]['phone']?></p>
                </div>
            </div>

            
            <div class="col-md-3 col-xs-6">
                <div class="flex">
                    <span class="fa fa-envelope"></span>
                    <span>Email</span>
                    <p><?=$info[0]['email']?></p>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="flex">
                    <span class="fa fa-address-card-o"></span>
                    <span>Địa chỉ</span>
                    <p><?=$info[0]['address']?></p>
                </div>
            </div>
            <!-- <div class="col-md-3 col-xs-6">
                <div class="flex">
                    <span class="fa fa-envelope"></span>
                    <span>Email</span>
                    <p>(+48) 0383868205</p>
                </div>
            </div> -->
        </div><hr>
        <div class="row">
            <div class="col-md-3">
                <div style="font-weight: bold;font-size: 30px">manucare.vn</div>
                
                <div style="font-weight: bold;font-size: 25px;margin-left: -14px" class="col-md-12">
                    <a href="<?=$info[0]['facebook']?>" style="color: white;"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="<?=$info[0]['youtube']?>" style="color: white;"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="<?=$info[0]['twitter']?>" style="color: white;"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="<?=$info[0]['instagram']?>" style="color: white;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="title-footer">Sản phẩm</div>
                <ul class="list-footer">
                    <?php
                        $list_product_footer = $this->Web_M->q("select * from db_product a inner join db_category b on a.product_category_id=b.cate_id order by rand() limit 4");
                        foreach ($list_product_footer as $product_footer) {
                    ?>
                            <li><a title="<?=$product_footer['product_title']?>" href="<?=base_url('san-pham/'.$product_footer['product_alias'].'-'.$product_footer['product_id'])?>.html"><?=$product_footer['product_title']?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-md-3">
                <div class="title-footer">Dịch vụ</div>
                <ul class="list-footer">
                    <?php
                        $list_service_footer = $this->Web_M->q("select * from db_post where post_active = 1 and post_type = 2  order by rand() limit 4");
                        foreach ($list_service_footer as $service_footer) {
                    ?>
                            <li><a title="<?=$service_footer['post_title']?>" href="<?=base_url('dich-vu/'.$service_footer['post_alias'].'-'.$service_footer['post_id'])?>.html"><?=$service_footer['post_title']?></a></li>
                    <?php } ?>
                    
                </ul>
            </div>
            <div class="col-md-3">
                <div class="title-footer">Kiến thức</div>
                <ul class="list-footer">
                    <?php
                        $list_post_footer = $this->Web_M->q("select * from db_post where post_active = 1 and post_type = 1  order by rand() limit 4");
                        foreach ($list_post_footer as $post_footer) {
                    ?>
                            <li><a title="<?=$post_footer['post_title']?>" href="<?=base_url('dich-vu/'.$post_footer['post_alias'].'-'.$post_footer['post_id'])?>.html"><?=$post_footer['post_title']?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div><hr>
        <div class="row">
            <div class="col-md-6">
                <div class="text-left">
                    <span>© <?=$info[0]['coppy_right']?></span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-right chinh_sach">
                    <span>Chính sách bảo mật, Điều khoản sử dụng, Phản hồi</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="hidden-md hidden-lg"><br><br><br></div>
<script src="<?=base_url('upload/js/app.js?v='.time())?>"></script>
<script src="<?=base_url()?>upload/js/sweetalert2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script type="text/javascript">
    $(function() {
    $('#btn_modal').on('click', function() {
      
      $('#form_pass').css("display","block");
      $($(this).data('modal')).modal({
        fadeDuration: 250
      });
      return false;
    });
  });

    // $(function() {
    // $('.container').on('click', '.btn_modal_contact', function() {

    //     console.log('aaaaa');
      
    //   $('#form_contact_modal').css("display","block");
    //   $($(this).data('modal')).modal({
    //     fadeDuration: 250
    //   });
    //   return false;
    // });
  // });
</script>
</body>
</html>