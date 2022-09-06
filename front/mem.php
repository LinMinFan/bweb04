<?php
$x=rand(1,99);
$y=rand(1,99);
$_SESSION['code']=($x+$y);
?>
<h3>第一次購物</h3>
<a href="?do=res">
    <img src="./icon/0413.jpg" alt="">
</a>
<h3>會員登入</h3>
<table class="w80 mg">
    <tr>
        <td class="w30 tt">帳號</td>
        <td class="w60 pp">
            <input type="text" name="" id="acc">
        </td>
    </tr>
    <tr>
        <td class="w30 tt">密碼</td>
        <td class="w60 pp">
            <input type="password" name="" id="pw">
        </td>
    </tr>
    <tr>
        <td class="w30 tt">驗證碼</td>
        <td class="w60 pp">
            <?="{$x}+{$y}=";?>
            <input type="text" name="" id="code">
        </td>
    </tr>
</table>
<div class="ct">
    <button onclick="login('mem',$('#acc').val(),$('#pw').val(),$('#code').val())">確認</button>
</div>
