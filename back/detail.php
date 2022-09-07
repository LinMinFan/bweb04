<?php
include "../base.php";
$ord=$orders->find(['no'=>$_POST['no']]);
$pds=unserialize($ord['prds']);
?>
<h3 class="ct">訂單編號 <span class="red"><?=$ord['no'];?></span> 的詳細資料</h3>
<table class="w80 mg">
    <tr>
        <td class="tt w40">會員帳號</td>
        <td class="pp w50">
        <?=$ord['acc'];?>
        </td>
    </tr>
    <tr>
        <td class="tt w40">姓名</td>
        <td class="pp w50">
        <?=$ord['name'];?>
        </td>
    </tr>
    <tr>
        <td class="tt w40">電子信箱</td>
        <td class="pp w50">
        <?=$ord['email'];?>
        </td>
    </tr>
    <tr>
        <td class="tt w40">聯絡地址</td>
        <td class="pp w50">
        <?=$ord['addr'];?>
        </td>
    </tr>
    <tr>
        <td class="tt w40">聯絡電話</td>
        <td class="pp w50">
        <?=$ord['tel'];?>
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
    foreach ($pds as $id => $qt) {
        $sum+=$prds->find($id)['price']*$qt;
        ?>
        <tr class="pp">
            <td><?=$prds->find($id)['name'];?></td>
            <td><?=$prds->find($id)['no'];?></td>
            <td><?=$qt;?></td>
            <td><?=$prds->find($id)['price'];?></td>
            <td>
            <?=$prds->find($id)['price']*$qt;?>
            </td>
        </tr>
        <?php
    }
?>
</table>
<div class="ct w80 mg tt">
    總價:<?=$ord['total'];?>
</div>
<div class="ct">
    <button type="button" onclick="bb('orders')">返回</button>
</div>
