<?php

?>
<h3 class="ct">會員註冊</h3>
<table class="w80 mg">
    <tr>
        <td class="tt w40 ct">姓名</td>
        <td class="pp w50">
            <input type="text" name="" id="name">
        </td>
    </tr>
    <tr>
        <td class="tt w40 ct">帳號</td>
        <td class="pp w50">
            <input type="text" name="" id="acc">
            <button onclick="chk_acc($('#acc').val())">檢測帳號</button>
        </td>
    </tr>
    <tr>
        <td class="tt w40 ct">密碼</td>
        <td class="pp w50">
            <input type="password" name="" id="pw">
        </td>
    </tr>
    <tr>
        <td class="tt w40 ct">電話</td>
        <td class="pp w50">
            <input type="text" name="" id="tel">
        </td>
    </tr>
    <tr>
        <td class="tt w40 ct">住址</td>
        <td class="pp w50">
            <input type="text" name="" id="addr">
        </td>
    </tr>
    <tr>
        <td class="tt w40 ct">電子信箱</td>
        <td class="pp w50">
            <input type="text" name="" id="email">
        </td>
    </tr>
</table>
<div class="ct">
    <button onclick="res($('#name').val(),$('#acc').val(),$('#pw').val(),$('#tel').val(),$('#addr').val(),$('#email').val())">確認</button>
    <button onclick="reload()">重置</button>
</div>
