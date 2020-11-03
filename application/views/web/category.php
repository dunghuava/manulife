<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-3">
                <img src="<?=img_path('cate.jpeg')?>" alt="">
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="margin-top:5px" class="text-uppercase">SẢN PHẨM BẢO HIỂM NHÂN THỌ</h1>
                        <hr>
                    </div>
                </div>
                <?php for ($i=0;$i<4;$i++){ ?>
                    <div class="row item-category">
                        <div class="col-md-3">
                            <h3 class="name">Bảo hiểm Nhân thọ</h3>
                        </div>
                        <div class="col-md-3">
                            <div class="title">
                                <p><a class="readmore" href=""><span class="fa fa-angle-right"></span>Bảo hiểm trọn đời</a></p>
                                <p><a class="readmore" href=""><span class="fa fa-angle-right"></span>Bảo hiểm theo năm</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="desc">
                                <p>Quẳng gánh lo đi và vui sống” không chỉ đơn thuần là tựa một cuốn sách nổi tiếng của Dale Carnegie, đó chính là món quà quý giá Manulife mong muốn mang đến cho bạn và những người thân yêu. Bảo hiểm nhân thọ là giải pháp toàn diện giúp bạn an tâm tận hưởng trọn vẹn cuộc sống, không còn phải lo lắng về gánh nặng tài chính trước những biến cố bất ngờ xảy ra</p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php include ('sec-muctieu.php') ?>
<?php include ('form-contact.php') ?>
