<?php
$mm=$mem->find($_GET['id']);
?>
<h3 class="ct">會員管理</h3>
<form action="./api/save.php?do=mem" method="post">
<table class="w80 mg">
    <tr class="">
        <td class="tt ct w30">帳號</td>
        <td class="pp w50">
        <?=$mm['acc'];?>
        <input type="hidden" name="acc" value="<?=$mm['acc'];?>">
        <input type="hidden" name="id" value="<?=$mm['id'];?>">
        </td>
    </tr>
    <tr class="">
        <td class="tt ct w30">密碼</td>
        <td class="pp w50">
        <?=str_repeat("*",strlen($mm['pw']));?>
        <input type="hidden" name="pw" value="<?=$mm['pw'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt">累積交易金額</td>
        <td class="pp">
            <?=$orders->math('sum','total',['acc'=>$mm['acc']]);?>
        </td>
    </tr>
    <tr class="">
        <td class="tt ct w30">姓名</td>
        <td class="pp w50">
        <input type="text" name="name" value="<?=$mm['name'];?>">
        </td>
    </tr>
    <tr class="">
        <td class="tt ct w30">電子信箱</td>
        <td class="pp w50">
        <input type="text" name="email" value="<?=$mm['email'];?>">
        </td>
    </tr>
    <tr class="">
        <td class="tt ct w30">住址</td>
        <td class="pp w50">
            <input type="password" name="addr" value="<?=$mm['addr'];?>">
        </td>
    </tr>
    <tr class="">
        <td class="tt ct w30">電話</td>
        <td class="pp w50">
        <input type="text" name="tel" value="<?=$mm['tel'];?>">
        </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
    <button type="button" onclick="bb('mem')">取消</button>
</div>
</form>