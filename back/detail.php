<?php
$user=$orders->find($_GET['id']);
$pds=unserialize($user['prds']);
?>
<h3 class="ct">訂單編號 <span class="red"><?=$user['no'];?></span>的詳細資料</h3>
<div class="w100 h400 ">
<table class="w80 mg">
    <tr>
        <td class="tt w35 ct">會員帳號</td>
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
        <td class="tt w35 ct">聯絡地址</td>
        <td class="pp w50">
        <?=$user['addr'];?>
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">聯絡電話</td>
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
<div class="w80 tt mg ct">
    總價:<?=$sum;?>
</div>
<div class="w80 mg ct">
    <button type="button" onclick="bb('orders')">返回</button>
</div>
</div>
<script>

</script>

