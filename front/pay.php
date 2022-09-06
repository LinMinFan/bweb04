<?php
$user=$mem->find(['acc'=>$_SESSION['mem']]);
?>
<h3 class="ct">填寫資料</h3>
<form action="./api/pay.php" method="post">
<table class="w80 mg">
  <tr>
    <td class="tt w30">登入帳號</td>
    <td class="pp w60">
    <?=$user['acc'];?>
    <input type="hidden" name="acc" value="<?=$user['acc'];?>">
    </td>
  </tr>
  <tr>
    <td class="tt w30">姓名</td>
    <td class="pp w60">
        <input type="text" name="name" value="<?=$user['name'];?>">
    </td>
  </tr>
  <tr>
    <td class="tt w30">電子信箱</td>
    <td class="pp w60">
    <input type="text" name="email" value="<?=$user['email'];?>">
    </td>
  </tr>
  <tr>
    <td class="tt w30">聯絡地址</td>
    <td class="pp w60">
    <input type="text" name="addr" value="<?=$user['addr'];?>">
    </td>
  </tr>
  <tr>
    <td class="tt w30">聯絡電話</td>
    <td class="pp w60">
    <input type="text" name="tel" value="<?=$user['tel'];?>">
    </td>
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
    $sum=0;
  foreach ($_SESSION['cart'] as $id => $num) {
    ?>
    <tr class="pp">
      <td></td>
      <td><?=$prds->find($id)['no'];?></td>
      <td><?=$num;?></td>
      <td><?=$prds->find($id)['price'];?></td>
      <td><?=($prds->find($id)['price'])*($num);?></td>
    </tr>
    <?php
    $sum+=($prds->find($id)['price'])*($num);
  }
  ?>
</table>
<div class="w80 mg ct tt">
總價:<input type="text" name="total" value="<?=$sum;?>" readonly>
</div>
<div class="ct">
  <input type="submit" value="確認送出">
  <button type="button" onclick="ff('buycart')">返回修改訂單</button>
</div>
</form>
