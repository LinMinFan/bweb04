<?php
include "../base.php";
$user=$orders->find(['no'=>$_POST['no']]);
?>
<h3 class="ct">
 訂單編號 <span class="red"><?=$user['no'];?></span>的詳細資料
</h3>
<div class="w100 h400 oy_s">
<table class="w80 mg">
    <tr class="">
        <td class="ct tt w35">會員帳號</td>
        <td class="pp w45">
        <?=$user['acc'];?>
        </td>
    </tr>
    <tr class="">
        <td class="ct tt w35">姓名</td>
        <td class="pp w45">
        <?=$user['name'];?>
        </td>
    </tr>
    <tr class="">
        <td class="ct tt w35">電子信箱</td>
        <td class="pp w45">
        <?=$user['email'];?>
        </td>
    </tr>
    <tr class="">
        <td class="ct tt w35">聯絡地址</td>
        <td class="pp w45">
        <?=$user['addr'];?>
        </td>
    </tr>
<tr class="">
    <td class="ct tt w35">聯絡電話</td>
    <td class="pp w45">
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
    $sum=0;
    foreach (unserialize($user['prds']) as $id => $qt) {
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
    
</div>
<div class="ct">
    <button type="button" onclick="bb('orders')">返回</button>
</div>
</div>
