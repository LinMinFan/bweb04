<?php
if (!empty($_GET['error'])) {
    ?>
    <script>
        alert('<?=$_GET['error'];?>')
    </script>
    <?php
}
?>
<div class="ct">
    <button onclick="bb('add_adm')">新增管理員</button>
</div>
<table class="w80 mg">
    <tr class="tt">
        <td>帳號</td>
        <td>密碼</td>
        <td>管理</td>
    </tr>
    <?php
    foreach ($admin->all() as $key => $adm) {
        if ($adm['acc']=='admin') {
            ?>
            <tr class="pp">
                <td><?=$adm['acc'];?></td>
                <td><?=str_repeat("*",strlen($adm['pw']));?></td>
                <td>此帳號為最高權限</td>
            </tr>
            <?php
        }else{
            ?>
            <tr class="pp">
                <td><?=$adm['acc'];?></td>
                <td><?=str_repeat("*",strlen($adm['pw']));?></td>
                <td>
                    <button onclick="bb('edit_adm&id=<?=$adm['id'];?>')">修改</button>
                    <button onclick="del('admin',<?=$adm['id'];?>)">刪除</button>
                </td>
            </tr>
            <?php
        }
    }
    ?>
</table>