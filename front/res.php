<?php

?>
<h3 class="ct">會員註冊</h3>
<form action="./api/save.php?do=mem" method="post">
<table class="w80 mg">
    <tr class="">
        <td class="tt ct w30">姓名</td>
        <td class="pp w50">
        <input type="text" name="name" id="">
        </td>
    </tr>
    <tr class="">
        <td class="tt ct w30">帳號</td>
        <td class="pp w50">
        <input type="text" name="acc" id="acc">
        <button type="button" onclick="chk_acc($('#acc').val())">檢測帳號</button>
        </td>
    </tr>
    <tr class="">
        <td class="tt ct w30">密碼</td>
        <td class="pp w50">
        <input type="text" name="pw" id="">
        </td>
    </tr>
    <tr class="">
        <td class="tt ct w30">電話</td>
        <td class="pp w50">
        <input type="text" name="tel" id="">
        </td>
    </tr>
    <tr class="">
        <td class="tt ct w30">住址</td>
        <td class="pp w50">
        <input type="password" name="addr" id="">
        </td>
    </tr>
    <tr class="">
        <td class="tt ct w30">電子信箱</td>
        <td class="pp w50">
        <input type="text" name="email" id="">
        </td>
    </tr>
</table>
<div class="ct">
    <input type="submit" value="註冊">
    <input type="reset" value="重置">
</div>
</form>
<script>
    function chk_acc(acc){
        if (acc=="admin" || acc=="") {
            alert("不可使用");
        }else{
            $.post("./api/chk_acc.php",{acc},(res)=>{
                alert(res);
            })
        }
    }
</script>