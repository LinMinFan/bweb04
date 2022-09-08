<?php

?>
<h3 class="ct">會員註冊</h3>
<form action="./api/save.php?do=mem" method="post">
<div class="w100 h400 oy_s">
<table class="w80 mg">
<tr class="">
    <td class="ct tt w35">姓名</td>
    <td class="pp w45">
        <input type="text" name="name" value="">
    </td>
</tr>
<tr class="">
    <td class="ct tt w35">帳號</td>
    <td class="pp w45">
        <input type="text" name="acc" id="acc"> <button type="button" onclick="chk_acc($('#acc').val())">檢查帳號</button>
    </td>
</tr>
<tr class="">
    <td class="ct tt w35">密碼</td>
    <td class="pp w45">
        <input type="password" name="pw" value="">
    </td>
</tr>
<tr class="">
    <td class="ct tt w35">電話</td>
    <td class="pp w45">
        <input type="text" name="tel" value="">
    </td>
</tr>
<tr class="">
    <td class="ct tt w35">住址</td>
    <td class="pp w45">
        <input type="text" name="addr" value="">
    </td>
</tr>
<tr class="">
    <td class="ct tt w35">電子信箱</td>
    <td class="pp w45">
        <input type="text" name="email" value="">
    </td>
</tr>
</table>
<div class="ct">
    <input type="submit" value="註冊">
    <input type="reset" value="重置">
</div>
</div>
</form>