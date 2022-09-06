<?php
include "../base.php";
$ord=$orders->find(['no'=>$_POST['no']]);
$pds=unserialize($ord['prds']);
?>
<h3 class="ct">訂單編號 <span class="red"><?=$ord['no'];?></span> 的詳細資料</h3>
<table class="w80 mg">
    <tr>
        <td class="tt">會員帳號</td>
        <td class="pp"><?=$ord['acc'];?></td>
    </tr>
    <tr>
        <td class="tt">姓名</td>
        <td class="pp"><?=$ord['name'];?></td>
    </tr>
    <tr>
        <td class="tt">電子信箱</td>
        <td class="pp"><?=$ord['email'];?></td>
    </tr>
    <tr>
        <td class="tt">聯絡地址</td>
        <td class="pp"><?=$ord['addr'];?></td>
    </tr>
    <tr>
        <td class="tt">聯絡電話</td>
        <td class="pp"><?=$ord['tel'];?></td>
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
        ?>
        <tr class="pp">
            <td><?=$prds->find($id)['name'];?></td>
            <td><?=$prds->find($id)['no'];?></td>
            <td><?=$qt;?></td>
            <td><?=$prds->find($id)['price'];?></td>
            <td><?=($prds->find($id)['price'])*$qt;?></td>
        </tr>
        <?php
        $sum+=($prds->find($id)['price'])*$qt;
    }
    ?>
</table>
<div class="w80 mg tt ct">
    總價:<?=$sum;?>
</div>
<div class="ct">
    <button onclick="bb('do=orders')">返回</button>
</div>
