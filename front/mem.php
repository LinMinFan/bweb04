<?php
$x=rand(1,99);
$y=rand(1,99);
$_SESSION['code']=$x+$y;
?>
<h3 class="">第一次購物</h3>
<a href="?do=res"><img src="./icon/0413.jpg" alt=""></a>
<h3>會員登入</h3>
<table class="w80 mg">
    <tr>
        <td class="tt w30">帳號</td>
        <td class="pp w50">
            <input type="text" name="" id="acc">
        </td>
    </tr>
    <tr>
        <td class="tt w30">密碼</td>
        <td class="pp w50">
            <input type="password" name="" id="pw">
        </td>
    </tr>
    <tr>
        <td class="tt w30">驗證碼</td>
        <td class="pp w50">
            <?="{$x}+{$y}=";?>
            <input type="text" name="" id="code">
        </td>
    </tr>
</table>
<div class="ct">
    <button onclick="login('mem',$('#acc').val(),$('#pw').val(),$('#code').val())">確認</button>
</div>
<script>
    function login(table,acc,pw,code){
        $.post("./api/login.php",{table,acc,pw,code},(res)=>{
            if (res==1) {
                alert("對不起，您輸入的驗證碼有誤\n請您重新登入");
            }else if (res==2) {
                alert("帳號或密碼錯誤");
            }else{
                if (table=='admin') {
                    bb('admin');
                }else{
                    ff('main');
                }
            }
        })
    }
</script>