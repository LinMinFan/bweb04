<?php
$x=rand(1,99);
$y=rand(1,99);
$_SESSION['check']=$x+$y;
?>
<h3>管理登入</h3>
<table class="w80 mg">
    <tr>
        <td class="tt w45">帳號</td>
        <td class="pp w45">
            <input type="text" name="" id="acc">
        </td>
    </tr>
    <tr>
        <td class="tt w45">密碼</td>
        <td class="pp w45">
            <input type="password" name="" id="pw">
        </td>
    </tr>
    <tr>
        <td class="tt w45">驗證碼</td>
        <td class="pp w45">
            <span><?="{$x}+{$y}=";?></span><input type="text" name="" id="check">
        </td>
    </tr>
</table>
<div class="ct"><button onclick="login('admin',$('#acc').val(),$('#pw').val(),$('#check').val())">確認</button></div>
<script>
    function login(table,acc,pw,check){
        $.post("./api/login.php",{table,acc,pw,check},(res)=>{
            if (res==1) {
                alert("對不起，您輸入的驗證碼有誤\r請您重新登入");
            }else if(res==2){
                alert("帳號或密碼錯誤");
            }else if(res==3){
                switch (table) {
                    case 'mem':
                        ff('main');
                        break;
                    case 'admin':
                        bb('admin');
                        break;
                
                    default:
                        break;
                }
            }
        })
    }
</script>

