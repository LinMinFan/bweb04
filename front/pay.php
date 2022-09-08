<?php
$user=$mem->find(['acc'=>$_SESSION['mem']]);

?>
<form action="./api/save.php?do=orders" method="post">
<h3 class="ct">
 填寫資料
</h3>
<div class="w100 h400 oy_s">
<table class="w80 mg">
    <tr class="">
        <td class="ct tt w35">登入帳號</td>
        <td class="pp w45">
        <?=$user['acc'];?>
            <input type="hidden" name="acc" value="<?=$user['acc'];?>">
        </td>
    </tr>
    <tr class="">
        <td class="ct tt w35">姓名</td>
        <td class="pp w45">
            <input type="text" name="name" value="<?=$user['name'];?>">
        </td>
    </tr>
    <tr class="">
        <td class="ct tt w35">電子信箱</td>
        <td class="pp w45">
            <input type="text" name="email" value="<?=$user['email'];?>">
        </td>
    </tr>
    <tr class="">
        <td class="ct tt w35">聯絡地址</td>
        <td class="pp w45">
            <input type="text" name="addr" value="<?=$user['addr'];?>">
        </td>
    </tr>
<tr class="">
    <td class="ct tt w35">聯絡電話</td>
    <td class="pp w45">
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
        <td>小計</td>
    </tr>
<?php
    $sum=0;
    foreach ($_SESSION['cart'] as $id => $qt) {
    ?>
    <tr class="pp">
        <td><?=$prds->find($id)['name'];?></td>
        <td><?=$prds->find($id)['no'];?></td>
        <td><?=$qt;?></td>
        <td><?=$prds->find($id)['price'];?></td>
        <td><?=$prds->find($id)['price']*$qt;?></td>
    </tr>
    <?php
    $sum+=$prds->find($id)['price']*$qt;
    }
?>
</table>
<div class="w80 tt ct mg">
    總價:<?=$sum;?>
    <input type="hidden" name="total" value="<?=$sum;?>">
    <input type="hidden" name="date" value="<?=$today;?>">
    <input type="hidden" name="no" value="<?=date("Ymd".date("His"));?>">
</div>
<div class="ct">
    <input type="submit" value="確定送出">
    <button type="button" onclick="ff('buycart')">返回修改訂單</button>
</div>
</div>
</form>
