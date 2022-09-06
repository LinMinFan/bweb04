<?php
$mm=$mem->find($_GET['id']);
?>
<h3 class="ct">編輯會員資料</h3>
<form action="./api/save.php?do=mem" method="post">
<table class="w80 mg">
    <tr>
        <td class="tt w45">帳號</td>
        <td class="pp w45"><?=$mm['acc'];?></td>
        <input type="hidden" name="id" value="<?=$mm['id'];?>">
    </tr>
    <tr>
        <td class="tt w45">密碼</td>
        <td class="pp w45"><?=str_repeat("*",strlen($mm['pw']));?></td>
    </tr>
    <tr>
        <td class="tt w45">累積交易金額</td>
        <td class="pp w45"><?=$orders->math('sum','total',['acc'=>$mm['acc']]);?></td>
    </tr>
    <tr>
        <td class="tt w45">姓名</td>
        <td class="pp w45">
            <input type="text" name="name" value="<?=$mm['name'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w45">電子信箱</td>
        <td class="pp w45">
        <input type="text" name="email" value="<?=$mm['email'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w45">地址</td>
        <td class="pp w45">
        <input type="text" name="addr" value="<?=$mm['addr'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w45">電話</td>
        <td class="pp w45">
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
