<?php
$x=rand(1,99);
$y=rand(1,99);
$_SESSION['code']=$x+$y;
?>

<table class="w80 mg">
    <tr>
        <td class="tt w40">帳號</td>
        <td class="pp w50">
            <input type="text" name="" id="acc">
        </td>
    </tr>
    <tr>
        <td class="tt w40">密碼</td>
        <td class="pp w50">
            <input type="password" name="" id="pw">
        </td>
    </tr>
    <tr>
        <td class="tt w40">驗證碼</td>
        <td class="pp w50">
            <?="{$x}+{$y}=";?>
            <input type="text" name="" id="code">
        </td>
    </tr>
</table>
<div class="ct">
<button onclick="login('admin',$('#acc').val(),$('#pw').val(),$('#code').val())">確認</button>
</div>