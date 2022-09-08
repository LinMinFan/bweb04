<?php
$ad=$admin->find($_GET['id']);
$pr=unserialize($ad['pr']);
?>
<h3 class="ct">新增管理帳號</h3>
<form action="./api/save.php?do=admin" method="post">
<table class="w80 mg">
    <tr>
        <td class="tt w35 ct">帳號</td>
        <td class="pp w50">
            <input type="text" name="acc" value="<?=$ad['acc'];?>">
            <input type="hidden" name="id" value="<?=$ad['id'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">密碼</td>
        <td class="pp w50">
            <input type="password" name="pw" value="<?=$ad['pw'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">密碼</td>
        <td class="pp w50">
            <div><input type="checkbox" name="pr[]" value="1" <?=(in_array(1,$pr))?"checked":"";?>>商品分類與管理</div>
            <div><input type="checkbox" name="pr[]" value="2" <?=(in_array(2,$pr))?"checked":"";?>>訂單管理</div>
            <div><input type="checkbox" name="pr[]" value="3" <?=(in_array(3,$pr))?"checked":"";?>>會員管理</div>
            <div><input type="checkbox" name="pr[]" value="4" <?=(in_array(4,$pr))?"checked":"";?>>頁尾版權管理</div>
            <div><input type="checkbox" name="pr[]" value="5" <?=(in_array(5,$pr))?"checked":"";?>>最新消息管理</div>
        </td>
    </tr>
</table>
<div class="ct">
   <input type="submit" value="修改">
   <input type="reset" value="重置">
</div>
</form>

