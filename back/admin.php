<?php

?>
<h3 class="ct">
    <button onclick="bb('add_admin')">新增管理員</button>
</h3>
<div class="w100 h400 oy_s">
<table class="w80 mg">
<tr class="tt">
    <td class="ct">帳號</td>
    <td class="ct">密碼</td>
    <td class="ct">管理</td>
</tr>
<?php
foreach ($admin->all() as $key => $ad) {
    if ($ad['acc']=='admin') {
        ?>
        <tr class="pp">
    <td class="ct"><?=$ad['acc'];?></td>
    <td class="ct"><?=str_repeat("*",strlen($ad['pw']));?></td>
    <td class="ct">此帳號為最高權限</td>
</tr>
        <?php
    }else{
        ?>
<tr class="pp">
    <td class="ct"><?=$ad['acc'];?></td>
    <td class="ct"><?=str_repeat("*",strlen($ad['pw']));?></td>
    <td class="ct">
        <button onclick="bb('edit_admin&id=<?=$ad['id'];?>')">修改</button>
        <button onclick="del('admin',<?=$ad['id'];?>)">刪除</button>
    </td>
</tr>
        <?php
    }
}
?>
</table>
<div class="ct">
    <button onclick="ff('main')">返回</button>
</div>
</div>
