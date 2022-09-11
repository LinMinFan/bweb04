<h3 class="ct">
    <button onclick="bb('add_admin')">新增管理員</button>
</h3>
<table class="w80 mg">
    <tr class="tt">
        <td>帳號</td>
        <td>密碼</td>
        <td>管理</td>
    </tr>
<?php
foreach ($admin->all() as $key => $ad) {
    if ($ad['acc']=='admin') {
        ?>
<tr class="pp">
        <td><?=$ad['acc'];?></td>
        <td><?=str_repeat("*",strlen($ad['pw']));?></td>
        <td>
            此帳號為最高權限
        </td>
    </tr>
        <?php
    }else{
        ?>
<tr class="pp">
        <td><?=$ad['acc'];?></td>
        <td><?=str_repeat("*",strlen($ad['pw']));?></td>
        <td>
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