<section>
    <div class="container full-w">
        <div class="row">
            <div class="col-md-12">
                <h2>Thông tin hữu ích</h2>
                <p>Cùng tìm hiểu thêm các bài viết hay và mới nhất liên quan đến các vấn đề bạn đang quan tâm tại đây nhé!!</p>
                <hr>
                <p>Hiển thị <b>180</b> trong số <b>180</b> bài viết</p>
            </div>
        </div>
    </div>
</section>
<section class="sec-product">
    <div class="container full-w"><br>
        <div class="row">
            <?php
            for ($i=0;$i<6;$i++){ 
                $styles=array(
                    0=>"background:#00A758 url(".img_path('bh.jpg').") no-repeat",
                    1=>"background-size:cover",
                    2=>"background-position-x:center"
                );
            ?>
            <div class="col-md-3">
                    <div class="item-blog" style="<?=implode(';',$styles)?>">
                            <div class="title">
                                <p>Bảo hiểm trọn đời <a style="float:right" href="<?=base_url('tin-tuc-detail')?>" class="readmore"><span class="fa fa-angle-right"></span>Xem thêm</a></p>  
                                <a href="<?=base_url('tin-tuc-detail')?>" style="display:block">
                                    <h3>Hành trình hạnh phúc</h3>
                                </a>
                            </div>
                            <div class="overlay">
                            </div>
                            <div class="des">Xây dựng kế hoạch tài chính trọn đời, linh hoạt bảo vệ trên mọi hành trình của cuộc sống</div>
                    </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>