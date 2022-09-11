<h3 class="ct">訂單管理</h3>
<table class="w80 mg">
    <tr class="tt">
        <td>訂單編號</td>
        <td>金額</td>
        <td>會員帳號</td>
        <td>姓名</td>
        <td>下單時間</td>
        <td>操作</td>
    </tr>
<?php
foreach ($orders->all() as $key => $ord) {
?>
<tr class="pp">
        <td><a href="?do=detail&id=<?=$ord['id'];?>"><?=$ord['no'];?></a></td>
        <td><?=$ord['total'];?></td>
        <td><?=$ord['acc'];?></td>
        <td><?=$ord['name'];?></td>
        <td><?=$ord['date'];?></td>
        <td>
            <button onclick="del('orders',<?=$ord['id'];?>)">刪除</button>
        </td>
    </tr>
<?php
}
?>
</table>

