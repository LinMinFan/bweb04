<?php

?>
<h3 class="ct">會員管理</h3>
<table class="w80 mg">
    <tr>
        <td class="tt ct">姓名</td>
        <td class="tt ct">會員帳號</td>
        <td class="tt ct">註冊日期</td>
        <td class="tt ct">操作</td>
    </tr>
    <?php
    foreach ($mem->all() as $key => $mm) {
        ?>
        <tr>
            <td class="pp"><?=$mm['name'];?></td>
            <td class="pp"><?=$mm['acc'];?></td>
            <td class="pp"><?=$mm['date'];?></td>
            <td class="pp">
                <button onclick="bb('do=edit_mem&id=<?=$mm['id'];?>')">修改</button>
                <button onclick="del('mem',<?=$mm['id'];?>)">刪除</button>
            </td>
        </tr>
        <?php
    }
    ?>
</table>

