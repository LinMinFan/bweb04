<?php

?>
<h3 class="ct">訂單管理</h3>
<table class="w80 mg">
    <tr class="tt">
        <td class="">訂單編號</td>
        <td class="">金額</td>
        <td class="">會員帳號</td>
        <td class="">姓名</td>
        <td class="">下單時間</td>
        <td class="">操作</td>
    </tr>
<?php
foreach ($orders->all() as $key => $ord) {
?>
<tr class="pp">
        <td class="">
            <a href="?do=detail&id=<?=$ord['id'];?>"><?=$ord['no'];?></a>
        </td>
        <td class=""><?=$ord['total'];?></td>
        <td class=""><?=$ord['acc'];?></td>
        <td class=""><?=$ord['name'];?></td>
        <td class=""><?=$ord['date'];?></td>
        <td class="">
            <button onclick="del('orders',<?=$ord['id'];?>)">刪除</button>
        </td>
    </tr>
<?php
}
?>
</table>
