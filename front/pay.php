<?php
$user=$mem->find(['acc'=>$_SESSION['mem']]);

?>
<h3 class="ct">填寫資料</h3>
<form action="./api/save.php?do=orders" method="post">
<table class="w80 mg">
    <tr>
        <td class="tt w35 ct">登入帳號</td>
        <td class="pp w50">
        <?=$user['acc'];?>
            <input type="hidden" name="acc" value="<?=$user['acc'];?>">
            <input type="hidden" name="date" value="<?=$today;?>">
            <input type="hidden" name="no" value="<?=date("Ymd").date("His");?>">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">姓名</td>
        <td class="pp w50">
            <input type="text" name="name" value="<?=$user['name'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">電子信箱</td>
        <td class="pp w50">
            <input type="text" name="email" value="<?=$user['email'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">住址</td>
        <td class="pp w50">
            <input type="text" name="addr" value="<?=$user['addr'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">電話</td>
        <td class="pp w50">
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
    <input type="hidden" name="total" value="<?=$sum;?>">
</table>
<div class="w80 mg ct tt">
    總價:<?=$sum;?>
</div>
<div class="ct">
   <input type="submit" value="確認送出">
   <button type="button" onclick="ff('buycart')">返回修改訂單</button>
</div>
</form>

