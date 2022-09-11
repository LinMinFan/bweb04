<?php
$user=$mem->find(['acc'=>$_SESSION['mem']]);
?>

<h3 class="ct">填寫資料</h3>
<form action="./api/save.php?do=orders" method="post">
<table class="w80 mg">
    <tr>
        <td class="tt">登入帳號</td>
        <td class="pp">
            <?=$user['acc'];?>
            <input type="hidden" name="acc" value="<?=$user['acc'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt">姓名</td>
        <td class="pp">
            <input type="text" name="name" value="<?=$user['name'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt">電子信箱</td>
        <td class="pp">
            <input type="text" name="email" value="<?=$user['email'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt">聯絡地址</td>
        <td class="pp">
            <input type="text" name="addr" value="<?=$user['addr'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt">連絡電話</td>
        <td class="pp">
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
if (isset($_SESSION['cart'])) {
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
}
?>
</table>
<div class="tt ct w80 mg">
    總價:<?=$sum;?>
    <input type="hidden" name="total" value="<?=$sum;?>">
</div>
<div class="ct">
    <input type="submit" value="確定送出">
    <button type="button" onclick="ff('buycart')">返回修改訂單</button>
</div>
</form>
<script>

</script>