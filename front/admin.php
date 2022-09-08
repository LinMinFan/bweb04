<?php
$x=rand(1,99);
$y=rand(1,99);
$_SESSION['code']=$x+$y;
?>
<div class="w100 h400 oy_s">
<table class="w80 mg">
<tr class="">
    <td class="ct tt w35">帳號</td>
    <td class="pp w45">
        <input type="text" name="" id="acc">
    </td>
</tr>
<tr class="">
    <td class="ct tt w35">密碼</td>
    <td class="pp w45">
        <input type="password" name="" id="pw">
    </td>
</tr>
<tr class="">
    <td class="ct tt w35">驗證碼</td>
    <td class="pp w45">
        <?="{$x}+{$y}=";?>
        <input type="text" name="" id="code">
    </td>
</tr>
</table>
<div class="ct">
    <button onclick="login('admin',$('#acc').val(),$('#pw').val(),$('#code').val())">確認</button>
</div>
</div>