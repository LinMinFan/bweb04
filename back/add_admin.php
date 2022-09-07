<h3 class="ct">新增管理帳號</h3>
<form action="./api/save.php?do=admin" method="post">
<table class="w80 mg">
    <tr>
        <td class="tt">帳號</td>
        <td class="pp">
            <input type="text" name="acc" id="">
        </td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp">
            <input type="password" name="pw" id="">
        </td>
    </tr>
    <tr>
        <td class="tt">權限</td>
        <td class="pp">
            <?php
            for ($i=1; $i <= 5 ; $i++) { 
                ?>
                    <div><input type="checkbox" name="pr[]" value="<?=$i;?>"><?=$pr_text[$i];?></div>
                <?php
            }
            ?>
        </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
</div>
</form>