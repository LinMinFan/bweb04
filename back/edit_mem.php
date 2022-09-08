<?php
$user=$mem->find($_GET['id']);
?>
<form action="./api/save.php?do=mem" method="post">
<h3 class="ct">
 編輯會員資料
</h3>
<div class="w100 h400 oy_s">
<table class="w80 mg">
    <tr class="">
        <td class="ct tt w35">會員帳號</td>
        <td class="pp w45">
        <?=$user['acc'];?>
        <input type="hidden" name="id" value="<?=$user['id'];?>">
        </td>
    </tr>
    <tr class="">
        <td class="ct tt w35">密碼</td>
        <td class="pp w45">
        <?=str_repeat("*",strlen($user['pw']));?>
        </td>
    </tr>
    <tr class="">
        <td class="ct tt w35">累積交易金額</td>
        <td class="pp w45">
        <?=$orders->math('sum','total',['acc'=>$user['acc']]);?>
        </td>
    </tr>
    <tr class="">
        <td class="ct tt w35">姓名</td>
        <td class="pp w45">
        <input type="text" name="name" value="<?=$user['name'];?>">
        </td>
    </tr>
    <tr class="">
        <td class="ct tt w35">電子信箱</td>
        <td class="pp w45">
        <input type="text" name="email" value="<?=$user['email'];?>">
        </td>
    </tr>
    <tr class="">
        <td class="ct tt w35">地址</td>
        <td class="pp w45">
        <input type="text" name="addr" value="<?=$user['addr'];?>">
        </td>
    </tr>
<tr class="">
    <td class="ct tt w35">電話</td>
    <td class="pp w45">
    <input type="text" name="tel" value="<?=$user['tel'];?>">
    </td>
</tr>
</table>
<div class="ct">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
    <button type="button" onclick="bb('mem')">取消</button>
</div>
</div>
</form>
