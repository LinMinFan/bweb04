<h3 class="ct">
會員管理
</h3>
<div class="w100 h400 oy_s">
<table class="w80 mg">
<tr class="tt">
    <td class="ct tt">姓名</td>
    <td class="ct tt">會員帳號</td>
    <td class="ct tt">註冊日期</td>
    <td class="ct tt">操作</td>
</tr>
<?php
foreach ($mem->all() as $key => $mm) {
    ?>
    <tr class="pp">
    <td class="ct tt"><?=$mm['name'];?></td>
    <td class="ct tt"><?=$mm['acc'];?></td>
    <td class="ct tt"><?=$mm['date'];?></td>
    <td class="ct tt">
        <button onclick="bb('edit_mem&id=<?=$mm['id'];?>')">修改</button>
        <button onclick="del('mem',<?=$mm['id'];?>)">刪除</button>
    </td>
</tr>
    <?php
}
?>
</table>
</div>
