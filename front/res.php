<?php

?>
<form action="./api/save.php?do=mem" method="post">
<h3 class="ct">會員註冊</h3>
<table class="w80 mg">
    <tr>
        <td class="tt w40">姓名</td>
        <td class="pp w50">
            <input type="text" name="name" id="">
        </td>
    </tr>
    <tr>
        <td class="tt w40">帳號</td>
        <td class="pp w50">
            <input type="text" name="acc" id="acc">
            <button type="button" onclick="chk_acc($('#acc').val())">檢測帳號</button>
        </td>
    </tr>
    <tr>
        <td class="tt w40">密碼</td>
        <td class="pp w50">
            <input type="password" name="pw" id="">
        </td>
    </tr>
    <tr>
        <td class="tt w40">電話</td>
        <td class="pp w50">
            <input type="text" name="tel" id="">
        </td>
    </tr>
    <tr>
        <td class="tt w40">住址</td>
        <td class="pp w50">
            <input type="text" name="addr" id="">
        </td>
    </tr>
    <tr>
        <td class="tt w40">電子信箱</td>
        <td class="pp w50">
            <input type="text" name="email" id="">
            <input type="hidden" name="date" value="<?=$today;?>">
        </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="註冊">
    <input type="reset" value="重置">
</div>
</form>