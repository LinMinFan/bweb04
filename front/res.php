<?php

?>
<h3 class="ct">會員註冊</h3>
<form action="./api/save.php?do=mem" method="post">
<table class="w80 mg">
    <tr>
        <td class="tt w35 ct">姓名</td>
        <td class="pp w50">
            <input type="text" name="name" id="">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">帳號</td>
        <td class="pp w50">
            <input type="text" name="acc" id="acc">
            <button type="button" onclick="chk_acc($('#acc').val())">檢測帳號</button>
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">密碼</td>
        <td class="pp w50">
            <input type="password" name="pw" id="">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">電話</td>
        <td class="pp w50">
            <input type="text" name="tel" id="">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">住址</td>
        <td class="pp w50">
            <input type="password" name="addr" id="">
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">電子信箱</td>
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
        $.post('./api/chk_acc.php',{acc},(res)=>{
           if (acc=='admin' || acc=="") {
                alert("不可使用");
           }else{
            alert(res);
           }
        })
    }
</script>
