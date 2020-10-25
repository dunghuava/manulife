<section class="sec-slide">
    <div class="container full-w">
        <div class="row">
            <div class="col-md-9 pd0">
                <?php  include ('slider.php') ?>
            </div>
            <div class="col-md-3">
                <div class="post">
                    <a class="readmore" href="">
                        <h3>eClaims</h3>
                        <p>Yêu cầu bồi thường bảo hiểm nay thật đơn giản!</p>
                        <br>
                        <span class="fa fa-angle-right"></span>Readmore
                    </a>
                </div>
                <div class="post">
                    <a class="readmore" href="">
                        <h3>eClaims</h3>
                        <p>Yêu cầu bồi thường bảo hiểm nay thật đơn giản!</p>
                        <br>
                        <span class="fa fa-angle-right"></span>Readmore
                    </a>
                </div>
                <div class="post">
                    <a class="readmore" href="">
                        <h3>eClaims</h3>
                        <p>Yêu cầu bồi thường bảo hiểm nay thật đơn giản!</p>
                        <br>
                        <span class="fa fa-angle-right"></span>Readmore
                    </a>
                </div>
                <div class="post">
                    <a class="readmore" href="">
                        <h3>eClaims</h3>
                        <p>Yêu cầu bồi thường bảo hiểm nay thật đơn giản!</p>
                        <br>
                        <span class="fa fa-angle-right"></span>Readmore
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-muctieu">
    <div class="container full-w">
        <div class="row">
            <div class="col-md-3">
                <p>Mục tiêu trong tương lai của bạn là gì ?</p>
                <a class="readmore" href=""><span class="fa fa-angle-right"></span>Xem thêm</a>
            </div>
            <div class="col-md-9">
                <div class="cusselect">
                    <span>Tôi muốn&nbsp;</span><span class="selectbox">Bảo vệ cả nhà, an tâm vui sống</span>
                    <div class="option">
                        <li><a href="">Option 01</a></li>
                        <li><a href="">Option 02</a></li>
                        <li><a href="">Option 03</a></li>
                        <li><a href="">Option 04</a></li>
                        <li><a href="">Option 05</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-product">
    <div class="container full-w"><br>
        <div class="row">
            <div class="col-md-3">
                <h3 class="product-title">Sản phẩm tiêu biểu</h3><br>
                <a href="" class="readmore">
                    <span class="fa fa-angle-right"></span>Xem thêm
                </a>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php for ($i=0;$i<3;$i++){ ?>
                    <div class="col-md-4">
                            <div class="item-product">
                                <p>Bảo hiểm trọn đời <a style="float:right" href="" class="readmore"><span class="fa fa-angle-right"></span>Xem thêm</a></p>  
                                <h3>Hành trình hạnh phúc</h3>
                                <br>
                                <img src="<?=img_path('se_05.svg')?>" alt="">
                                <br><br>
                                <div class="des">Xây dựng kế hoạch tài chính trọn đời, linh hoạt bảo vệ trên mọi hành trình của cuộc sống</div>
                            </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-product">
    <div class="container full-w"><br>
        <div class="row">
            <div class="col-md-3">
                <h3 class="product-title">Manulife Việt Nam</h3><br>
                <a href="" class="readmore">
                    <span class="fa fa-angle-right"></span>Xem thêm
                </a>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php
                    for ($i=0;$i<6;$i++){ 
                        $styles=array(
                            0=>"background:#00A758 url(".img_path('bhxh.jpg').") no-repeat",
                            1=>"background-size:cover",
                            2=>"background-position-x:center"
                        );
                    ?>
                    <div class="col-md-4">
                            <div class="item-product has-bg" style="<?=implode(';',$styles)?>">
                                <p>Bảo hiểm trọn đời <a style="float:right" href="" class="readmore"><span class="fa fa-angle-right"></span>Xem thêm</a></p>  
                                <h3>Hành trình hạnh phúc</h3>
                                <div class="overlay"></div>
                                <div class="des">Xây dựng kế hoạch tài chính trọn đời, linh hoạt bảo vệ trên mọi hành trình của cuộc sống</div>
                            </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-product">
    <div class="container full-w"><br>
        <div class="row">
            <div class="col-md-3">
                <h3 class="product-title">Dịch vụ hỗ trợ khách hàng</h3><br>
                <a href="" class="readmore">
                    <span class="fa fa-angle-right"></span>Xem thêm
                </a>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php for ($i=0;$i<3;$i++){ ?>
                    <div class="col-md-4">
                        <div class="item-product" style="display:flex">
                            <img src="<?=img_path('se_05.svg')?>" alt="">
                            <div class="des">Các kênh đóng bảo hiểm</div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>