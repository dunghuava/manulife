<thead>
  <tr>
    <th colspan="3" style="text-align: center;">Tiềm năng <span>(<?=$count_steps_0 + $count_steps_1 + $count_steps_2?>)</span></th>
    <th colspan="3" style="text-align: center;">Tư vấn <span>(<?=$count_steps_3 + $count_steps_4 + $count_steps_5?>)</span></th>
    <th colspan="3" style="text-align: center;">Thực hiện giao dịch <span>(<?=$count_steps_6 + $count_steps_7 + $count_steps_8?>)</span></th>
    <th colspan="2" style="text-align: center;">Kết thúc giao dịch <span>(<?=$count_steps_8 + $count_steps_9?>)</span></th>
  </tr>

  <tr>
    <th>Tiềm hiểu thông tin <span>(<?=$count_steps_0?>)</span></th>
    <th>Nuôi dưỡng khách <span>(<?=$count_steps_1?>)</span></th>
    <th>Xác định có nhu cầu <span>(<?=$count_steps_2?>)</span></th>

    <th>Sẳn sàng chốt hẹn <span>(<?=$count_steps_3?>)</span></th>
    <th>Chờ gặp <span>(<?=$count_steps_4?>)</span></th>
    <th>Thương thảo <span>(<?=$count_steps_5?>)</span></th>

    <th>Thất bại <span>(<?=$count_steps_6?>)</span></th>
    <th>Thành công <span>(<?=$count_steps_7?>)</span></th>
    <th>Chăm sóc <span>(<?=$count_steps_8?>)</span></th>

    <th>Giao HD và trao quà <span>(<?=$count_steps_9?>)</span></th>
    <th>Có khả năng khai thác <span>(<?=$count_steps_10?>)</span></th>
  </tr>

</thead>
<tbody>

  <?php for ($i=0; $i <$max_item ; $i++) {?>

    <tr>
      <?php for ($j=0; $j <11 ; $j++) {

        $list_customer = $this->Customer_M->getSearchCustomer($customer_name,$insurance_name,$customer_phone,$commission_level,$arr_staff,$j);

        if (!empty($list_customer[$i])) {
          $date_update =date('Ymd') - date('Ymd', strtotime($list_customer[$i]['updated_at']));
          if ($date_update == 0) {
            $date_update = 'Hôm nay';
          }else{
            $date_update = $date_update.' ngày trước';
          }

          $info_staff = $this->Staff_M->find_row(['staff_id'=>$list_customer[$i]['staff_id']]);
          ?>
          <td>
            <div class="btn_modal" data-id="<?=$list_customer[$i]['customer_id']?>">
              <p><strong>Tên: </strong><?=$list_customer[$i]['customer_name']?></p>
              <p><strong>Nhu cầu: </strong><?=$list_customer[$i]['need']?></p>
              <p><strong>Hoa hồng: </strong><?=$list_customer[$i]['commission_level']?></p>
              <p><strong>Cập nhật: </strong><?=$date_update?></p>
              <p><strong>Ghi chú: </strong><?=mb_substr($list_customer[$i]['note'], 0, 18,"UTF-8").'[...]'?></p>
              <p><strong>Ngày tạo: </strong><?=date('d-m-Y', strtotime($list_customer[$i]['created_at']))?></p>
              <p><strong>Phụ trách: </strong><?=$info_staff['staff_name']?></p>
              <a class="a btn_modal" data-id="<?=$list_customer[$i]['customer_id']?>">[Xem chi tiết]</a>
              <br>
              <a class="a" onclick="onDelete(<?=$list_customer[$i]['customer_id']?>)" data-id="<?=$list_customer[$i]['customer_id']?>" style="color: red!important;margin-top: 10px">[xóa]</a>
            </div>
            <br>

            <p>
              <select onchange="setStt(this,'processing_steps',<?=$list_customer[$i]['customer_id']?>)" name="processing_steps" id="processing_steps" class="form-control" style="width: 200px;">
                <option <?php if ($list_customer[$i]['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                <option <?php if ($list_customer[$i]['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                <option <?php if ($list_customer[$i]['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                <option <?php if ($list_customer[$i]['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                <option <?php if ($list_customer[$i]['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                <option <?php if ($list_customer[$i]['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                <option <?php if ($list_customer[$i]['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                <option <?php if ($list_customer[$i]['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                <option <?php if ($list_customer[$i]['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                <option <?php if ($list_customer[$i]['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                <option <?php if ($list_customer[$i]['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
              </select>
            </p>
          </td>
        <?php }else{ echo '<td></td>';} } ?>
      </tr>
    <?php } ?>
  </tbody>