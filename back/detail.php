<?php
$user=$orders->find($_GET['id']);
$pds=unserialize($user['prds']);
?>

<h3 class="ct">訂單編號 <span class="red"><?=$user['no'];?></span> 的詳細資料</h3>
<table class="w80 mg">
    <tr>
        <td class="tt">登入帳號</td>
        <td class="pp">
            <?=$user['acc'];?>
        </td>
    </tr>
    <tr>
        <td class="tt">姓名</td>
        <td class="pp">
        <?=$user['name'];?>
        </td>
    </tr>
    <tr>
        <td class="tt">電子信箱</td>
        <td class="pp">
        <?=$user['email'];?>
        </td>
    </tr>
    <tr>
        <td class="tt">聯絡地址</td>
        <td class="pp">
        <?=$user['addr'];?>
        </td>
    </tr>
    <tr>
        <td class="tt">連絡電話</td>
        <td class="pp">
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
        $sum+=$prds->find($id)['price']*$qt;
    }
?>
</table>
<div class="tt ct w80 mg">
    總價:<?=$sum;?>
</div>
<div class="ct">
    <button onclick="bb('orders')">返回</button>
</div>

