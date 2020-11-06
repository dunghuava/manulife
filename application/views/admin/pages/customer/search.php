<thead>
   <tr>
         <th colspan="3" style="text-align: center;">Tiềm năng</th>
         <th colspan="3" style="text-align: center;">Tư vấn</th>
         <th colspan="3" style="text-align: center;">Thực hiện giao dịch</th>
         <th colspan="2" style="text-align: center;">Kết thúc giao dịch</th>
  </tr>

  <tr>
         <th>Tiềm hiểu thông tin</th>
         <th>Nuôi dưỡng khách</th>
         <th>Xác định có nhu cầu</th>

         <th>Sẳn sàng chốt hẹn</th>
         <th>Chờ gặp</th>
         <th>Thương thảo</th>

         <th>Thất bại</th>
         <th>Thành công</th>
         <th>Chăm sóc</th>

         <th>Giao HD và trao quà</th>
         <th>Có khả năng khai thác</th>
  </tr>

</thead>
<tbody>
   <?php foreach ($list_customer as $key => $val) {?>
         <tr>
               <?php for ($i=0; $i <11 ; $i++) {
                     if ($val['processing_steps'] == $i) {
                           $date_update =date('Ymd') - date('Ymd', strtotime($val['updated_at']));
                           if ($date_update == 0) {
                                 $date_update = 'Hôm nay';
                          }else{
                                 $date_update = $date_update.' ngày trước';
                          }
                          ?>
                          <td>
                           <div class="btn_modal" data-id="<?=$val['customer_id']?>">
                                 <p><strong>Tên: </strong><?=$val['customer_name']?></p>
                                 <p><strong>Nhu cầu: </strong><?=$val['need']?></p>
                                 <p><strong>Hoa hồng: </strong><?=$val['commission_level']?></p>
                                 <p><strong>Cập nhật: </strong><?=$date_update?></p>
                                 <p><strong>Ghi chú: </strong><?=$val['note']?></p>
                                 <p><strong>Ngày tạo: </strong><?=date('d-m-Y', strtotime($val['created_at']))?></p>
                          </div>
                          <br>
                          
                          <p>
                                 <select onchange="setStt(this,'processing_steps',<?=$val['customer_id']?>)" name="processing_steps" id="processing_steps" class="form-control" style="width: 200px;">
                                       <option <?php if ($val['processing_steps'] == 0) echo "selected"; ?> value="0">Tiềm hiểu thông tin</option>
                                       <option <?php if ($val['processing_steps'] == 1) echo "selected"; ?> value="1">Nuôi dưỡng khách</option>
                                       <option <?php if ($val['processing_steps'] == 2) echo "selected"; ?> value="2">Xác định có nhu cầu</option>
                                       <option <?php if ($val['processing_steps'] == 3) echo "selected"; ?> value="3">Sẳn sàng chốt hẹn</option>
                                       <option <?php if ($val['processing_steps'] == 4) echo "selected"; ?> value="4">Chờ gặp</option>
                                       <option <?php if ($val['processing_steps'] == 5) echo "selected"; ?> value="5">Thương thảo</option>
                                       <option <?php if ($val['processing_steps'] == 6) echo "selected"; ?> value="6">Thất bại</option>
                                       <option <?php if ($val['processing_steps'] == 7) echo "selected"; ?> value="7">Thành công</option>
                                       <option <?php if ($val['processing_steps'] == 8) echo "selected"; ?> value="8">Chăm sóc</option>
                                       <option <?php if ($val['processing_steps'] == 9) echo "selected"; ?> value="9">Giao HD và trao quà</option>
                                       <option <?php if ($val['processing_steps'] == 10) echo "selected"; ?> value="10">Có khả năng khai thác</option>
                                </select>
                         </p>
                  </td>
           <?php }else{ echo '<td></td>';} } ?>
    </tr>
<?php } ?>

</tbody>