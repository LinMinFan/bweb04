<?php
$ad=$admin->find($_GET['id']);
?>
<form action="./api/save.php?do=admin" method="post">
<h3 class="ct">
修改管理員權限
</h3>
<div class="w100 h400 oy_s">
<table class="w80 mg">
<tr class="">
    <td class="ct tt">帳號</td>
    <td class="pp">
        <input type="text" name="acc" value="<?=$ad['acc'];?>">
        <input type="hidden" name="id" value="<?=$ad['id'];?>">
    </td>
</tr>
<tr class="">
    <td class="ct tt">密碼</td>
    <td class="pp">
        <input type="password" name="pw" value="<?=$ad['pw'];?>">
    </td>
</tr>
<tr class="">
    <td class="ct tt">權限</td>
    <td class="pp">
        <div><input type="checkbox" name="pr[]" value="1" <?=(in_array(1,unserialize($ad['pr'])))?"checked":"";?>>商品分類與管理</div>
        <div><input type="checkbox" name="pr[]" value="2" <?=(in_array(2,unserialize($ad['pr'])))?"checked":"";?>>訂單管理</div>
        <div><input type="checkbox" name="pr[]" value="3" <?=(in_array(3,unserialize($ad['pr'])))?"checked":"";?>>會員管理</div>
        <div><input type="checkbox" name="pr[]" value="4" <?=(in_array(4,unserialize($ad['pr'])))?"checked":"";?>>頁尾版權管理</div>
        <div><input type="checkbox" name="pr[]" value="5" <?=(in_array(5,unserialize($ad['pr'])))?"checked":"";?>>最新消息管理</div>
    </td>
</tr>

</table>
<div class="ct">
    <input type="submit" value="修改">
    <input type="reset" value="重置">
</div>
</div>
</form>
