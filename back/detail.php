<?php
include "../base.php";
$user=$orders->find(['no'=>$_POST['no']]);
$pds=unserialize($user['prds']);
?>
<h3 class="ct">訂單編號 <span class="red"><?=$user['no'];?></span>的詳細資料</h3>
<table class="w80 mg">
    <tr>
        <td class="tt w35 ct">登入帳號</td>
        <td class="pp w50">
        <?=$user['acc'];?>
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">姓名</td>
        <td class="pp w50">
        <?=$user['name'];?>
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">電子信箱</td>
        <td class="pp w50">
        <?=$user['email'];?>
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">住址</td>
        <td class="pp w50">
        <?=$user['addr'];?>
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">電話</td>
        <td class="pp w50">
        <?=$user['tel'];?>
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
    foreach ($pds as $id => $qt) {
    ?>
    <tr class="pp">
    <td><?=$prds->find($id)['name'];?></td>
    <td><?=$prds->find($id)['no'];?></td>
    <td><?=$qt;?></td>
    <td><?=$prds->find($id)['price'];?></td>
    <td><?=$prds->find($id)['price']*$qt;?></td>
    </tr>
    <?php
    }
    ?>
</table>
<div class="w80 mg ct tt">
    總價:<?=$user['total'];?>
</div>
<div class="ct">
   <button type="button" onclick="bb('orders')">返回</button>
</div>

