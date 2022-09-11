<?php
$mm=$mem->find($_GET['id']);
?>
<form action="./api/save.php?do=mem" method="post">
<h3 class="ct">編輯會員資料</h3>
<table class="w80 mg">
    <tr>
        <td class="tt">帳號</td>
        <td class="pp">
            <?=$mm['acc'];?>
        </td>
    </tr>
    <tr>
        <td class="tt">密碼</td>
        <td class="pp">
            <?=str_repeat("*",strlen($mm['pw']));?>
        </td>
    </tr>
    <tr>
        <td class="tt">累積交易金額</td>
        <td class="pp">
            <?=$orders->math('sum','total',['acc'=>$mm['acc']]);?>
        </td>
    </tr>
    <tr>
        <td class="tt">姓名</td>
        <td class="pp">
        <input type="text" name="name" value="<?=$mm['name'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt">電子信箱</td>
        <td class="pp">
        <input type="text" name="email" value="<?=$mm['email'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt">聯絡地址</td>
        <td class="pp">
        <input type="text" name="addr" value="<?=$mm['addr'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt">連絡電話</td>
        <td class="pp">
        <input type="text" name="tel" value="<?=$mm['tel'];?>">
        </td>
    </tr>
    <input type="hidden" name="id" value="<?=$mm['id'];?>">
</table>
<div class="ct">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
    <button type="button" onclick="bb('mem')">取消</button>
</div>
</form>
