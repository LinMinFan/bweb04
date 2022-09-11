<h3 class="ct">會員管理</h3>
<table class="w80 mg">
   <tr class="tt">
    <td>姓名</td>
    <td>會員帳號</td>
    <td>註冊日期</td>
    <td>操作</td>
   </tr>
<?php
foreach ($mem->all() as $key => $mm) {
?>
<tr class="pp">
    <td><?=$mm['name'];?></td>
    <td><?=$mm['acc'];?></td>
    <td><?=$mm['date'];?></td>
    <td>
        <button onclick="bb('edit_mem&id=<?=$mm['id'];?>')">修改</button>
        <button onclick="del('mem',<?=$mm['id'];?>)">刪除</button>
    </td>
   </tr>
<?php
}
?>
</table>
