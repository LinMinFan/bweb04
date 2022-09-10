<?php
$me=$mem->find($_GET['id'])
?>
<h3 class="ct">會員註冊</h3>
<form action="./api/save.php?do=mem" method="post">
<table class="w80 mg">
    <tr>
        <td class="tt w35 ct">帳號</td>
        <td class="pp w50">
        <?=$me['acc'];?>
        <input type="hidden" name="acc" value="<?=$me['acc'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">密碼</td>
        <td class="pp w50">
        <?=str_repeat("*",strlen($me['pw']));?>
        <input type="hidden" name="pw" value="<?=$me['pw'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">累積交易金額</td>
        <td class="pp w50">
            <?=$orders->math('sum','total',['acc'=>$me['acc']]);?>
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">姓名</td>
        <td class="pp w50">
            <input type="text" name="name" value="<?=$me['name'];?>">
            <input type="hidden" name="id" value="<?=$me['id'];?>">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">電子信箱</td>
        <td class="pp w50">
            <input type="text" name="email" value="<?=$me['email'];?>" >
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">住址</td>
        <td class="pp w50">
            <input type="password" name="addr" value="<?=$me['addr'];?>" >
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">電話</td>
        <td class="pp w50">
            <input type="text" name="tel" value="<?=$me['tel'];?>" >
        </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
    <button type="button" onclick="bb('mem')">取消</button>
</div>
</form>
<script>

</script>
