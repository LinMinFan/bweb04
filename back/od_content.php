<?php
include "../base.php";
$od_content=$orders->find(['no'=>$_POST['no']]);
?>
<h3 class="ct">訂單編號<span style="color:red"><?=$od_content['no'];?></span>的詳細資料</h3>
<table class="w80 mg">
  <tr>
    <td class="tt w30">會員帳號</td>
    <td class="pp w60"><?=$od_content['acc'];?></td>
  </tr>
  <tr>
    <td class="tt w30">姓名</td>
    <td class="pp w60"><?=$od_content['name'];?></td>
  </tr>
  <tr>
    <td class="tt w30">電子信箱</td>
    <td class="pp w60"><?=$od_content['email'];?></td>
  </tr>
  <tr>
    <td class="tt w30">聯絡地址</td>
    <td class="pp w60"><?=$od_content['addr'];?></td>
  </tr>
  <tr>
    <td class="tt w30">聯絡電話</td>
    <td class="pp w60"><?=$od_content['tel'];?></td>
  </tr>
</table>
<table class="w80 mg">
  <tr class="tt">
    <td>商品名稱</td>
    <td>編號</td>
    <td>數量</td>
    <td>單價</td>
    <td>小記</td>
  </tr>
  <?php

  foreach (unserialize($od_content['prds']) as $id => $num) {
    ?>
    <tr class="pp">
      <td><?=$prds->find($id)['name'];?></td>
      <td><?=$prds->find($id)['no'];?></td>
      <td><?=$num;?></td>
      <td><?=$prds->find($id)['price'];?></td>
      <td><?=($prds->find($id)['price'])*($num);?></td>
    </tr>
    <?php
  }
  ?>
</table>
<div class="w80 mg ct tt">
  總價:<?=$od_content['total'];?>
</div>
<div class="ct">
  <button onclick="$('#od_content').hide(),$('#orders').show()">返回</button>
</div>
<script>
  
</script>