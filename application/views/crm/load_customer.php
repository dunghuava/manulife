<style type="text/css">
    .aa:hover, .aa:focus, .aa:active {
        background: #eeeeee!important;
    }

    .aa {
        background: #eeeeee!important;
        box-shadow: 0 2px 10px rgb(238 238 238)!important;
        color: black!important;
        width: 30px;
    }

    .dropdown-trig-sgn .dropdown-menu li .menu_con {
        padding: 2px 20px;
    }

    select{
        border: 1px solid #ced4da;
        border-radius: .25rem;
    }
</style>

<?php if ($key == 1) {?>
        <input type="hidden" name="key" id="key" value="1">
    	<div class="animation-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Tiềm hiểu thông tin</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        <input type="hidden" class="area" value="0">
                        <?php foreach ($list_customer_0 as $value_0) {
                                $date_update =(strtotime(date('Ymd')) - strtotime($value_0['updated_at'])) / (60 * 60 * 24);
                                 if ($date_update <= 0) {
                                    $date_update = 'Hôm nay';
                                }else{
                                    $date_update = round($date_update).' Ngày trước';
                                }
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$value_0['staff_id']]);

                                if(strlen($value_0['commission_level']) > 20){
                                    $commission_level =  mb_substr($value_0['commission_level'], 0, 20,"UTF-8").'[...]';
                                }else{
                                    $commission_level = $value_0['commission_level'];
                                }

                                if(strlen($value_0['note']) > 40){
                                    $note =  mb_substr($value_0['note'], 0, 40,"UTF-8").'[...]';
                                }else{
                                    $note = $value_0['note'].'[...]';
                                }

                        ?>

                        <div class="animation-img mg-b-15 box" data-customer="<?=$value_0['customer_id']?>" style="height: 125px;background: #eee;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Họ tên">
                                    <?= $value_0['customer_name'] ?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                    <div class="dropdown-trig-sgn" style="float: right;" title="Chi tiết">
                                        <button class="btn triger-zoomIn waves-effect select aa" data-toggle="dropdown" aria-expanded="false" style="margin-right: 0px;"><i class="notika-icon notika-menu"></i></button>
                                        <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="margin-top: -5px;left: -10%;min-width: 118px;">
                                            <li onclick="setSteps(6,'processing_steps',<?=$value_0['customer_id']?>)"><a href="#" class="menu_con">Thất bại</a></li>
                                            <li><a href="#" class="menu_con">Sửa nhanh</a></li>
                                            <li onclick="onDelete(<?=$value_0['customer_id']?>)"><a href="#" class="menu_con">Xóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Ngày tạo">
                                    <?=date('d-m-Y', strtotime($value_0['created_at']))?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Hoa hồng">
                                    <?=$commission_level?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;" title="Ghi chú">
                                <?=$note?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;" title="">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;width: 45px;" title="Nhân viên"><img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" style="margin-top: -6px;border-radius: 50%;width: 30px;height: 30px"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;width: 95px" title="Thời gian tương tác"><?=$date_update?></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;" title="Di chuyển">
                                    <select onchange="setStt(this,'processing_steps',<?=$value_0['customer_id']?>)" name="processing_steps" id="processing_steps">
                                        <option <?php if ($value_0['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                        <option <?php if ($value_0['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                        <option <?php if ($value_0['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                        <option <?php if ($value_0['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                        <option <?php if ($value_0['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                        <option <?php if ($value_0['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                        <option <?php if ($value_0['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                        <option <?php if ($value_0['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                        <option <?php if ($value_0['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                        <option <?php if ($value_0['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                        <option <?php if ($value_0['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Nuôi dưỡng khách hàng</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        <input type="hidden" class="area" value="1">
                        <?php foreach ($list_customer_1 as $value_1) {
                                $date_update =(strtotime(date('Ymd')) - strtotime($value_1['updated_at'])) / (60 * 60 * 24);
                                 if ($date_update <= 0) {
                                    $date_update = 'Hôm nay';
                                }else{
                                    $date_update = round($date_update).' Ngày trước';
                                }
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$value_1['staff_id']]);

                                if(strlen($value_1['commission_level']) > 20){
                                    $commission_level =  mb_substr($value_1['commission_level'], 0, 20,"UTF-8").'[...]';
                                }else{
                                    $commission_level = $value_1['commission_level'];
                                }

                                if(strlen($value_1['note']) > 40){
                                    $note =  mb_substr($value_1['note'], 0, 40,"UTF-8").'[...]';
                                }else{
                                    $note = $value_1['note'].'[...]';
                                }
                        ?>

                        <div class="animation-img mg-b-15 box" data-customer="<?=$value_1['customer_id']?>" style="height: 125px;background: #eee;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Họ tên">
                                    <?= $value_1['customer_name'] ?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                    <div class="dropdown-trig-sgn" style="float: right;" title="Chi tiết">
                                        <button class="btn triger-zoomIn waves-effect select aa" data-toggle="dropdown" aria-expanded="false" style="margin-right: 0px;"><i class="notika-icon notika-menu"></i></button>
                                        <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="margin-top: -5px;left: -10%;min-width: 118px;">
                                            <li onclick="setSteps(6,'processing_steps',<?=$value_1['customer_id']?>)"><a href="#" class="menu_con">Thất bại</a></li>
                                            <li><a href="#" class="menu_con">Sửa nhanh</a></li>
                                            <li onclick="onDelete(<?=$value_1['customer_id']?>)"><a href="#" class="menu_con">Xóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Ngày tạo">
                                    <?=date('d-m-Y', strtotime($value_1['created_at']))?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Hoa hồng">
                                    <?=$commission_level?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;" title="Ghi chú">
                                <?=$note?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;" title="">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;width: 45px;" title="Nhân viên"><img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" style="margin-top: -6px;border-radius: 50%;width: 30px;height: 30px"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;width: 95px;" title="Thời gian tương tác"><?=$date_update?></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;" title="Di chuyển">
                                    <select onchange="setStt(this,'processing_steps',<?=$value_1['customer_id']?>)" name="processing_steps" id="processing_steps">
                                        <option <?php if ($value_1['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                        <option <?php if ($value_1['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                        <option <?php if ($value_1['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                        <option <?php if ($value_1['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                        <option <?php if ($value_1['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                        <option <?php if ($value_1['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                        <option <?php if ($value_1['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                        <option <?php if ($value_1['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                        <option <?php if ($value_1['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                        <option <?php if ($value_1['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                        <option <?php if ($value_1['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Xác định có nhu cầu</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        <input type="hidden" class="area" value="2">
                        <?php foreach ($list_customer_2 as $value_2) {
                                $date_update =(strtotime(date('Ymd')) - strtotime($value_2['updated_at'])) / (60 * 60 * 24);
                                 if ($date_update <= 0) {
                                    $date_update = 'Hôm nay';
                                }else{
                                    $date_update = round($date_update).' Ngày trước';
                                }
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$value_2['staff_id']]);

                                if(strlen($value_2['commission_level']) > 20){
                                    $commission_level =  mb_substr($value_2['commission_level'], 0, 20,"UTF-8").'[...]';
                                }else{
                                    $commission_level = $value_2['commission_level'];
                                }

                                if(strlen($value_2['note']) > 40){
                                    $note =  mb_substr($value_2['note'], 0, 40,"UTF-8").'[...]';
                                }else{
                                    $note = $value_2['note'].'[...]';
                                }
                        ?>

                        <div class="animation-img mg-b-15 box" data-customer="<?=$value_2['customer_id']?>" style="height: 125px;background: #eee;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Họ tên">
                                    <?= $value_2['customer_name'] ?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                    <div class="dropdown-trig-sgn" style="float: right;" title="Chi tiết">
                                        <button class="btn triger-zoomIn waves-effect select aa" data-toggle="dropdown" aria-expanded="false" style="margin-right: 0px;"><i class="notika-icon notika-menu"></i></button>
                                        <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="margin-top: -5px;left: -10%;min-width: 118px;">
                                            <li onclick="setSteps(6,'processing_steps',<?=$value_2['customer_id']?>)"><a href="#" class="menu_con">Thất bại</a></li>
                                            <li><a href="#" class="menu_con">Sửa nhanh</a></li>
                                            <li onclick="onDelete(<?=$value_2['customer_id']?>)"><a href="#" class="menu_con">Xóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Ngày tạo">
                                    <?=date('d-m-Y', strtotime($value_2['created_at']))?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Hoa hồng">
                                    <?=$commission_level?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;" title="Ghi chú">
                                <?=$note?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;" title="">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;width: 45px;" title="Nhân viên"><img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" style="margin-top: -6px;border-radius: 50%;width: 30px;height: 30px"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;width: 95px" title="Thời gian tương tác"><?=$date_update?></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;" title="Di chuyển">
                                    <select onchange="setStt(this,'processing_steps',<?=$value_2['customer_id']?>)" name="processing_steps" id="processing_steps">
                                        <option <?php if ($value_2['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                        <option <?php if ($value_2['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                        <option <?php if ($value_2['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                        <option <?php if ($value_2['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                        <option <?php if ($value_2['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                        <option <?php if ($value_2['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                        <option <?php if ($value_2['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                        <option <?php if ($value_2['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                        <option <?php if ($value_2['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                        <option <?php if ($value_2['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                        <option <?php if ($value_2['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    	</div>
    <?php }else if ($key == 2) {?>
        <input type="hidden" name="key" id="key" value="2">
    	<div class="animation-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Sẳn sàng chốt hẹn</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        <input type="hidden" class="area" value="3">
                        <?php foreach ($list_customer_3 as $value_3) {
                                $date_update =(strtotime(date('Ymd')) - strtotime($value_3['updated_at'])) / (60 * 60 * 24);
                                 if ($date_update <= 0) {
                                    $date_update = 'Hôm nay';
                                }else{
                                    $date_update = round($date_update).' Ngày trước';
                                }
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$value_3['staff_id']]);

                                if(strlen($value_3['commission_level']) > 20){
                                    $commission_level =  mb_substr($value_3['commission_level'], 0, 20,"UTF-8").'[...]';
                                }else{
                                    $commission_level = $value_3['commission_level'];
                                }

                                if(strlen($value_3['note']) > 40){
                                    $note =  mb_substr($value_3['note'], 0, 40,"UTF-8").'[...]';
                                }else{
                                    $note = $value_3['note'].'[...]';
                                }
                        ?>

                        <div class="animation-img mg-b-15 box" data-customer="<?=$value_3['customer_id']?>" style="height: 125px;background: #eee;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Họ tên">
                                    <?= $value_3['customer_name'] ?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                    <div class="dropdown-trig-sgn" style="float: right;" title="Chi tiết">
                                        <button class="btn triger-zoomIn waves-effect select aa" data-toggle="dropdown" aria-expanded="false" style="margin-right: 0px;"><i class="notika-icon notika-menu"></i></button>
                                        <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="margin-top: -5px;left: -10%;min-width: 118px;">
                                            <li onclick="setSteps(6,'processing_steps',<?=$value_3['customer_id']?>)"><a href="#" class="menu_con">Thất bại</a></li>
                                            <li><a href="#" class="menu_con">Sửa nhanh</a></li>
                                            <li onclick="onDelete(<?=$value_3['customer_id']?>)"><a href="#" class="menu_con">Xóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Ngày tạo">
                                    <?=date('d-m-Y', strtotime($value_3['created_at']))?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Hoa hồng">
                                    <?=$commission_level?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;" title="Ghi chú">
                                <?=$note?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;" title="">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;width: 45px;" title="Nhân viên"><img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" style="margin-top: -6px;border-radius: 50%;width: 30px;height: 30px"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;width: 95px" title="Thời gian tương tác"><?=$date_update?></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;" title="Di chuyển">
                                    <select onchange="setStt(this,'processing_steps',<?=$value_3['customer_id']?>)" name="processing_steps" id="processing_steps">
                                        <option <?php if ($value_3['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                        <option <?php if ($value_3['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                        <option <?php if ($value_3['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                        <option <?php if ($value_3['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                        <option <?php if ($value_3['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                        <option <?php if ($value_3['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                        <option <?php if ($value_3['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                        <option <?php if ($value_3['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                        <option <?php if ($value_3['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                        <option <?php if ($value_3['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                        <option <?php if ($value_3['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Chờ gặp</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        <input type="hidden" class="area" value="4">
                        <?php foreach ($list_customer_4 as $value_4) {
                                $date_update =(strtotime(date('Ymd')) - strtotime($value_4['updated_at'])) / (60 * 60 * 24);
                                 if ($date_update <= 0) {
                                    $date_update = 'Hôm nay';
                                }else{
                                    $date_update = round($date_update).' Ngày trước';
                                }
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$value_4['staff_id']]);

                                if(strlen($value_4['commission_level']) > 20){
                                    $commission_level =  mb_substr($value_4['commission_level'], 0, 20,"UTF-8").'[...]';
                                }else{
                                    $commission_level = $value_4['commission_level'];
                                }

                                if(strlen($value_4['note']) > 40){
                                    $note =  mb_substr($value_4['note'], 0, 40,"UTF-8").'[...]';
                                }else{
                                    $note = $value_4['note'].'[...]';
                                }

                        ?>

                        <div class="animation-img mg-b-15 box" data-customer="<?=$value_4['customer_id']?>" style="height: 125px;background: #eee;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Họ tên">
                                    <?= $value_4['customer_name'] ?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                    <div class="dropdown-trig-sgn" style="float: right;" title="Chi tiết">
                                        <button class="btn triger-zoomIn waves-effect select aa" data-toggle="dropdown" aria-expanded="false" style="margin-right: 0px;"><i class="notika-icon notika-menu"></i></button>
                                        <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="margin-top: -5px;left: -10%;min-width: 118px;">
                                            <li onclick="setSteps(6,'processing_steps',<?=$value_4['customer_id']?>)"><a href="#" class="menu_con">Thất bại</a></li>
                                            <li><a href="#" class="menu_con">Sửa nhanh</a></li>
                                            <li onclick="onDelete(<?=$value_4['customer_id']?>)"><a href="#" class="menu_con">Xóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Ngày tạo">
                                    <?=date('d-m-Y', strtotime($value_4['created_at']))?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Hoa hồng">
                                    <?=$commission_level?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;" title="Ghi chú">
                                <?=$note?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;" title="">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;width: 45px;" title="Nhân viên"><img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" style="margin-top: -6px;border-radius: 50%;width: 30px;height: 30px"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;width: 95px" title="Thời gian tương tác"><?=$date_update?></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;" title="Di chuyển">
                                    <select onchange="setStt(this,'processing_steps',<?=$value_4['customer_id']?>)" name="processing_steps" id="processing_steps">
                                        <option <?php if ($value_4['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                        <option <?php if ($value_4['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                        <option <?php if ($value_4['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                        <option <?php if ($value_4['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                        <option <?php if ($value_4['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                        <option <?php if ($value_4['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                        <option <?php if ($value_4['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                        <option <?php if ($value_4['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                        <option <?php if ($value_4['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                        <option <?php if ($value_4['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                        <option <?php if ($value_4['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Thương thảo</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        <input type="hidden" class="area" value="5">
                        <?php foreach ($list_customer_5 as $value_5) {
                                $date_update =(strtotime(date('Ymd')) - strtotime($value_5['updated_at'])) / (60 * 60 * 24);
                                 if ($date_update <= 0) {
                                    $date_update = 'Hôm nay';
                                }else{
                                    $date_update = round($date_update).' Ngày trước';
                                }
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$value_5['staff_id']]);

                                if(strlen($value_5['commission_level']) > 20){
                                    $commission_level =  mb_substr($value_5['commission_level'], 0, 20,"UTF-8").'[...]';
                                }else{
                                    $commission_level = $value_5['commission_level'];
                                }

                                if(strlen($value_5['note']) > 40){
                                    $note =  mb_substr($value_5['note'], 0, 40,"UTF-8").'[...]';
                                }else{
                                    $note = $value_5['note'].'[...]';
                                }
                        ?>

                        <div class="animation-img mg-b-15 box" data-customer="<?=$value_5['customer_id']?>" style="height: 125px;background: #eee;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Họ tên">
                                    <?= $value_5['customer_name'] ?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                    <div class="dropdown-trig-sgn" style="float: right;" title="Chi tiết">
                                        <button class="btn triger-zoomIn waves-effect select aa" data-toggle="dropdown" aria-expanded="false" style="margin-right: 0px;"><i class="notika-icon notika-menu"></i></button>
                                        <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="margin-top: -5px;left: -10%;min-width: 118px;">
                                            <li onclick="setSteps(6,'processing_steps',<?=$value_5['customer_id']?>)"><a href="#" class="menu_con">Thất bại</a></li>
                                            <li><a href="#" class="menu_con">Sửa nhanh</a></li>
                                            <li onclick="onDelete(<?=$value_5['customer_id']?>)"><a href="#" class="menu_con">Xóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Ngày tạo">
                                    <?=date('d-m-Y', strtotime($value_5['created_at']))?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Hoa hồng">
                                    <?=$commission_level?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;" title="Ghi chú">
                                <?=$note?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;" title="">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;width: 45px;" title="Nhân viên"><img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" style="margin-top: -6px;border-radius: 50%;width: 30px;height: 30px"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;width: 95px" title="Thời gian tương tác"><?=$date_update?></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;" title="Di chuyển">
                                    <select onchange="setStt(this,'processing_steps',<?=$value_5['customer_id']?>)" name="processing_steps" id="processing_steps">
                                        <option <?php if ($value_5['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                        <option <?php if ($value_5['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                        <option <?php if ($value_5['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                        <option <?php if ($value_5['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                        <option <?php if ($value_5['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                        <option <?php if ($value_5['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                        <option <?php if ($value_5['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                        <option <?php if ($value_5['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                        <option <?php if ($value_5['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                        <option <?php if ($value_5['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                        <option <?php if ($value_5['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    	</div>
    <?php }else if ($key ==3) {?>
        <input type="hidden" name="key" id="key" value="3">
    	<div class="animation-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Thất bại</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        <input type="hidden" class="area" value="6">
                        <?php foreach ($list_customer_6 as $value_6) {
                                $date_update =(strtotime(date('Ymd')) - strtotime($value_6['updated_at'])) / (60 * 60 * 24);
                                if ($date_update <= 0) {
                                    $date_update = 'Hôm nay';
                                }else{
                                    $date_update = round($date_update).' Ngày trước';
                                }
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$value_6['staff_id']]);

                                if(strlen($value_6['commission_level']) > 20){
                                    $commission_level =  mb_substr($value_6['commission_level'], 0, 20,"UTF-8").'[...]';
                                }else{
                                    $commission_level = $value_6['commission_level'];
                                }

                                if(strlen($value_6['note']) > 40){
                                    $note =  mb_substr($value_6['note'], 0, 40,"UTF-8").'[...]';
                                }else{
                                    $note = $value_6['note'].'[...]';
                                }
                        ?>

                        <div class="animation-img mg-b-15 box" data-customer="<?=$value_6['customer_id']?>" style="height: 125px;background: #eee;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Họ tên">
                                    <?= $value_6['customer_name'] ?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                    <div class="dropdown-trig-sgn" style="float: right;" title="Chi tiết">
                                        <button class="btn triger-zoomIn waves-effect select aa" data-toggle="dropdown" aria-expanded="false" style="margin-right: 0px;"><i class="notika-icon notika-menu"></i></button>
                                        <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="margin-top: -5px;left: -10%;min-width: 118px;">
                                            <li onclick="setSteps(6,'processing_steps',<?=$value_6['customer_id']?>)"><a href="#" class="menu_con">Thất bại</a></li>
                                            <li><a href="#" class="menu_con">Sửa nhanh</a></li>
                                            <li onclick="onDelete(<?=$value_6['customer_id']?>)"><a href="#" class="menu_con">Xóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Ngày tạo">
                                    <?=date('d-m-Y', strtotime($value_6['created_at']))?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Hoa hồng">
                                    <?=$commission_level?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;" title="Ghi chú">
                                <?=$note?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;" title="">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;width: 45px;" title="Nhân viên"><img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" style="margin-top: -6px;border-radius: 50%;width: 30px;height: 30px"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;width: 95px" title="Thời gian tương tác"><?=$date_update?></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;" title="Di chuyển">
                                    <select onchange="setStt(this,'processing_steps',<?=$value_6['customer_id']?>)" name="processing_steps" id="processing_steps">
                                        <option <?php if ($value_6['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                        <option <?php if ($value_6['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                        <option <?php if ($value_6['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                        <option <?php if ($value_6['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                        <option <?php if ($value_6['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                        <option <?php if ($value_6['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                        <option <?php if ($value_6['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                        <option <?php if ($value_6['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                        <option <?php if ($value_6['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                        <option <?php if ($value_6['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                        <option <?php if ($value_6['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Thành công</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        <input type="hidden" class="area" value="7">
                        <?php foreach ($list_customer_7 as $value_7) {
                                $date_update =(strtotime(date('Ymd')) - strtotime($value_7['updated_at'])) / (60 * 60 * 24);
                                 if ($date_update <= 0) {
                                    $date_update = 'Hôm nay';
                                }else{
                                    $date_update = round($date_update).' Ngày trước';
                                }
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$value_7['staff_id']]);

                                if(strlen($value_7['commission_level']) > 20){
                                    $commission_level =  mb_substr($value_7['commission_level'], 0, 20,"UTF-8").'[...]';
                                }else{
                                    $commission_level = $value_7['commission_level'];
                                }

                                if(strlen($value_7['note']) > 40){
                                    $note =  mb_substr($value_7['note'], 0, 40,"UTF-8").'[...]';
                                }else{
                                    $note = $value_7['note'].'[...]';
                                }
                        ?>

                        <div class="animation-img mg-b-15 box" data-customer="<?=$value_7['customer_id']?>" style="height: 125px;background: #eee;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Họ tên">
                                    <?= $value_7['customer_name'] ?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                    <div class="dropdown-trig-sgn" style="float: right;" title="Chi tiết">
                                        <button class="btn triger-zoomIn waves-effect select aa" data-toggle="dropdown" aria-expanded="false" style="margin-right: 0px;"><i class="notika-icon notika-menu"></i></button>
                                        <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="margin-top: -5px;left: -10%;min-width: 118px;">
                                            <li onclick="setSteps(6,'processing_steps',<?=$value_7['customer_id']?>)"><a href="#" class="menu_con">Thất bại</a></li>
                                            <li><a href="#" class="menu_con">Sửa nhanh</a></li>
                                            <li onclick="onDelete(<?=$value_7['customer_id']?>)"><a href="#" class="menu_con">Xóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Ngày tạo">
                                    <?=date('d-m-Y', strtotime($value_7['created_at']))?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Hoa hồng">
                                    <?=$commission_level?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;" title="Ghi chú">
                                <?=$note?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;" title="">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;width: 45px;" title="Nhân viên"><img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" style="margin-top: -6px;border-radius: 50%;width: 30px;height: 30px"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;width: 95px" title="Thời gian tương tác"><?=$date_update?></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;" title="Di chuyển">
                                    <select onchange="setStt(this,'processing_steps',<?=$value_7['customer_id']?>)" name="processing_steps" id="processing_steps">
                                        <option <?php if ($value_7['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                        <option <?php if ($value_7['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                        <option <?php if ($value_7['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                        <option <?php if ($value_7['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                        <option <?php if ($value_7['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                        <option <?php if ($value_7['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                        <option <?php if ($value_7['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                        <option <?php if ($value_7['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                        <option <?php if ($value_7['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                        <option <?php if ($value_7['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                        <option <?php if ($value_7['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Chăm sóc</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        <input type="hidden" class="area" value="8">
                        <?php foreach ($list_customer_8 as $value_8) {
                                $date_update =(strtotime(date('Ymd')) - strtotime($value_8['updated_at'])) / (60 * 60 * 24);
                                 if ($date_update <= 0) {
                                    $date_update = 'Hôm nay';
                                }else{
                                    $date_update = round($date_update).' Ngày trước';
                                }
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$value_8['staff_id']]);

                                if(strlen($value_8['commission_level']) > 20){
                                    $commission_level =  mb_substr($value_8['commission_level'], 0, 20,"UTF-8").'[...]';
                                }else{
                                    $commission_level = $value_8['commission_level'];
                                }

                                if(strlen($value_8['note']) > 40){
                                    $note =  mb_substr($value_8['note'], 0, 40,"UTF-8").'[...]';
                                }else{
                                    $note = $value_8['note'].'[...]';
                                }
                        ?>

                        <div class="animation-img mg-b-15 box" data-customer="<?=$value_8['customer_id']?>" style="height: 125px;background: #eee;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Họ tên">
                                    <?= $value_8['customer_name'] ?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                    <div class="dropdown-trig-sgn" style="float: right;" title="Chi tiết">
                                        <button class="btn triger-zoomIn waves-effect select aa" data-toggle="dropdown" aria-expanded="false" style="margin-right: 0px;"><i class="notika-icon notika-menu"></i></button>
                                        <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="margin-top: -5px;left: -10%;min-width: 118px;">
                                            <li onclick="setSteps(6,'processing_steps',<?=$value_8['customer_id']?>)"><a href="#" class="menu_con">Thất bại</a></li>
                                            <li><a href="#" class="menu_con">Sửa nhanh</a></li>
                                            <li onclick="onDelete(<?=$value_8['customer_id']?>)"><a href="#" class="menu_con">Xóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Ngày tạo">
                                    <?=date('d-m-Y', strtotime($value_8['created_at']))?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Hoa hồng">
                                    <?=$commission_level?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;" title="Ghi chú">
                                <?=$note?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;" title="">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;width: 45px;" title="Nhân viên"><img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" style="margin-top: -6px;border-radius: 50%;width: 30px;height: 30px"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;width: 95px" title="Thời gian tương tác"><?=$date_update?></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;" title="Di chuyển">
                                    <select onchange="setStt(this,'processing_steps',<?=$value_8['customer_id']?>)" name="processing_steps" id="processing_steps">
                                        <option <?php if ($value_8['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                        <option <?php if ($value_8['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                        <option <?php if ($value_8['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                        <option <?php if ($value_8['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                        <option <?php if ($value_8['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                        <option <?php if ($value_8['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                        <option <?php if ($value_8['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                        <option <?php if ($value_8['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                        <option <?php if ($value_8['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                        <option <?php if ($value_8['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                        <option <?php if ($value_8['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    	</div>
    <?php }else if ($key == 4) {?>
        <input type="hidden" name="key" id="key" value="4">
    	<div class="animation-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Giao HD và trao quà</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        <input type="hidden" class="area" value="9">
                        <?php foreach ($list_customer_9 as $value_9) {
                                $date_update =(strtotime(date('Ymd')) - strtotime($value_9['updated_at'])) / (60 * 60 * 24);
                                if ($date_update <= 0) {
                                    $date_update = 'Hôm nay';
                                }else{
                                    $date_update = $date_update.' ngày trước';
                                }
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$value_9['staff_id']]);

                                if(strlen($value_9['commission_level']) > 20){
                                    $commission_level =  mb_substr($value_9['commission_level'], 0, 20,"UTF-8").'[...]';
                                }else{
                                    $commission_level = $value_9['commission_level'];
                                }

                                if(strlen($value_9['note']) > 40){
                                    $note =  mb_substr($value_9['note'], 0, 40,"UTF-8").'[...]';
                                }else{
                                    $note = $value_9['note'].'[...]';
                                }
                        ?>

                        <div class="animation-img mg-b-15 box" data-customer="<?=$value_9['customer_id']?>" style="height: 125px;background: #eee;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Họ tên">
                                    <?= $value_9['customer_name'] ?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                    <div class="dropdown-trig-sgn" style="float: right;" title="Chi tiết">
                                        <button class="btn triger-zoomIn waves-effect select aa" data-toggle="dropdown" aria-expanded="false" style="margin-right: 0px;"><i class="notika-icon notika-menu"></i></button>
                                        <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="margin-top: -5px;left: -10%;min-width: 118px;">
                                            <li onclick="setSteps(6,'processing_steps',<?=$value_9['customer_id']?>)"><a href="#" class="menu_con">Thất bại</a></li>
                                            <li><a href="#" class="menu_con">Sửa nhanh</a></li>
                                            <li onclick="onDelete(<?=$value_9['customer_id']?>)"><a href="#" class="menu_con">Xóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Ngày tạo">
                                    <?=date('d-m-Y', strtotime($value_9['created_at']))?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Hoa hồng">
                                    <?=$commission_level?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;" title="Ghi chú">
                                <?=$note?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;" title="">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;width: 45px;" title="Nhân viên"><img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" style="margin-top: -6px;border-radius: 50%;width: 30px;height: 30px"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;width: 95px" title="Thời gian tương tác"><?=round($date_update).' ngày trước'?></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;" title="Di chuyển">
                                    <select onchange="setStt(this,'processing_steps',<?=$value_9['customer_id']?>)" name="processing_steps" id="processing_steps">
                                        <option <?php if ($value_9['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                        <option <?php if ($value_9['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                        <option <?php if ($value_9['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                        <option <?php if ($value_9['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                        <option <?php if ($value_9['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                        <option <?php if ($value_9['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                        <option <?php if ($value_9['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                        <option <?php if ($value_9['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                        <option <?php if ($value_9['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                        <option <?php if ($value_9['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                        <option <?php if ($value_9['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Có khả năng khai thác</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        <input type="hidden" class="area" value="10">
                        <?php foreach ($list_customer_10 as $value_10) {
                                $date_update =(strtotime(date('Ymd')) - strtotime($value_10['updated_at'])) / (60 * 60 * 24);
                                 if ($date_update <= 0) {
                                    $date_update = 'Hôm nay';
                                }else{
                                    $date_update = round($date_update).' Ngày trước';
                                }
                                $info_staff = $this->Staff_M->find_row(['staff_id'=>$value_10['staff_id']]);

                                if(strlen($value_10['commission_level']) > 20){
                                    $commission_level =  mb_substr($value_10['commission_level'], 0, 20,"UTF-8").'[...]';
                                }else{
                                    $commission_level = $value_10['commission_level'];
                                }

                                if(strlen($value_10['note']) > 40){
                                    $note =  mb_substr($value_10['note'], 0, 40,"UTF-8").'[...]';
                                }else{
                                    $note = $value_10['note'].'[...]';
                                }
                        ?>

                        <div class="animation-img mg-b-15 box" data-customer="<?=$value_10['customer_id']?>" style="height: 125px;background: #eee;">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Họ tên">
                                    <?= $value_10['customer_name'] ?>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px">
                                    <div class="dropdown-trig-sgn" style="float: right;" title="Chi tiết">
                                        <button class="btn triger-zoomIn waves-effect select aa" data-toggle="dropdown" aria-expanded="false" style="margin-right: 0px;"><i class="notika-icon notika-menu"></i></button>
                                        <ul class="dropdown-menu triger-zoomIn-dp animated zoomIn" style="margin-top: -5px;left: -10%;min-width: 118px;">
                                            <li onclick="setSteps(6,'processing_steps',<?=$value_10['customer_id']?>)"><a href="#" class="menu_con">Thất bại</a></li>
                                            <li><a href="#" class="menu_con">Sửa nhanh</a></li>
                                            <li onclick="onDelete(<?=$value_10['customer_id']?>)"><a href="#" class="menu_con">Xóa</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Ngày tạo">
                                    <?=date('d-m-Y', strtotime($value_10['created_at']))?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 5px 5px;" title="Hoa hồng">
                                    <?=$commission_level?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;" title="Ghi chú">
                                <?=$note?>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;" title="">
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 5px;width: 45px;" title="Nhân viên"><img src="<?=base_url().'upload/images/'.$info_staff['staff_img']?>" style="margin-top: -6px;border-radius: 50%;width: 30px;height: 30px"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;width: 95px" title="Thời gian tương tác"><?=$date_update?></div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-left: 0px;padding-right: 0px;padding: 5px 0px;" title="Di chuyển">
                                    <select onchange="setStt(this,'processing_steps',<?=$value_10['customer_id']?>)" name="processing_steps" id="processing_steps">
                                        <option <?php if ($value_10['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                        <option <?php if ($value_10['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                        <option <?php if ($value_10['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                        <option <?php if ($value_10['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                        <option <?php if ($value_10['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                        <option <?php if ($value_10['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                        <option <?php if ($value_10['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                        <option <?php if ($value_10['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                        <option <?php if ($value_10['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                        <option <?php if ($value_10['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                        <option <?php if ($value_10['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                    </select>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="">
                    <div class="animation-single-int">
                        <div class="animation-ctn-hd" style="margin-bottom: -20px;">
                            <h2>Xác định có nhu cầu</h2> 
                        </div>
                    </div>
                    <div class="animation-single-int scrollbar style-scroll drag-area" style="height: 100vh;">
                        
                        <div class="animation-img mg-b-15 box" style="height: 100px;background: #eee;">
                            
                        </div>

                        <div class="animation-img mg-b-15 box" style="height: 100px;background: #eee;">
                            
                        </div>
                        
                    </div>
                </div> -->
            </div>
        </div>
    	</div>
    <?php } ?>

    <script type="text/javascript">

        

    	$( ".box" ).draggable({
            scope: 'demoBox',
            revertDuration: 100,
            start: function( event, ui ) {
                //Reset
                $( ".drag-area" ).removeClass("scrollbar");
                $( ".box" ).draggable( "option", "revert", true );
                // $(".select").removeClass("scrollbar");

                // updateCounterStatus();
               
            }
        });

    $( ".drag-area" ).droppable({
        scope: 'demoBox',
        drop: function( event, ui ) {
            var area = $(this).find(".area").val();

            var box = $(ui.draggable).attr('data-customer');  

            $( ".box" ).draggable( "option", "revert", false );
            
            setSteps(area,'processing_steps',box)
     
            //Realign item
            $(ui.draggable).detach().css({top: 0,left: 0}).appendTo(this);
            $( ".drag-area" ).addClass("scrollbar");
        }
    });

    // function updateCounterStatus() {
    //   console.log('aaaaa');
    // }
    </script>