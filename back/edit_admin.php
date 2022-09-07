<?php
$ad=$admin->find($_GET['id']);
$pr=unserialize($ad['pr']);
?>
<h3 class="ct">修改管理員權限</h3>
<form action="./api/save.php?do=admin" method="post">
<table class="w80 mg">
    <tr>
        <td class="tt">帳號</td>
        <td class="pp">
            <input type="text" name="acc" value="<?=$ad['acc'];?>">
            <input type="hidden" name="id" value="<?=$ad['id'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp">
            <input type="password" name="pw" value="<?=$ad['pw'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt">權限</td>
        <td class="pp">
            <?php
            for ($i=1; $i <= 5 ; $i++) { 
                ?>
                    <div><input type="checkbox" name="pr[]" value="<?=$i;?>" <?=(in_array($i,$pr))?"checked":"";?>><?=$pr_text[$i];?></div>
                <?php
            }
            ?>
        </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="修改">
    <input type="reset" value="重置">
</div>
</form>