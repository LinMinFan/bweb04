
<h3 class="ct">會員註冊</h3>
<table class="w80 mg">
    <tr>
        <td class="tt w45">姓名</td>
        <td class="pp w45">
            <input type="text" name="" id="name">
        </td>
    </tr>
    <tr>
        <td class="tt w45">帳號</td>
        <td class="pp w45">
            <input type="text" name="" id="acc"><button onclick="chk_acc('mem',$('#acc').val())">檢測帳號</button>
        </td>
    </tr>
    <tr>
        <td class="tt w45">密碼</td>
        <td class="pp w45">
            <input type="password" name="" id="pw">
        </td>
    </tr>
    <tr>
        <td class="tt w45">電話</td>
        <td class="pp w45">
            <input type="text" name="" id="tel">
        </td>
    </tr>
    <tr>
        <td class="tt w45">住址</td>
        <td class="pp w45">
            <input type="text" name="" id="addr">
        </td>
    </tr>
    <tr>
        <td class="tt w45">電子信箱</td>
        <td class="pp w45">
            <input type="text" name="" id="email">
        </td>
    </tr>
</table>
<div class="ct">
    <button onclick="res('mem')">註冊</button>
    <button onclick="reload()">重置</button>
</div>
<script>
function chk_acc(table,acc){
    if (acc=='admin' || acc=='') {
        alert('不可使用')
    }else{
        $.post("./api/chk_acc.php",{table,acc},(res)=>{
            alert(res)
        })
    }
}
function res(table){
    let name=$('#name').val();
    let acc=$('#acc').val();
    let pw=$('#pw').val();
    let tel=$('#tel').val();
    let addr=$('#addr').val();
    let email=$('#email').val();
    if (acc=='admin' || acc=='') {
        alert('不可使用')
    }else{
        $.post("./api/res.php",{table,name,acc,pw,tel,addr,email},(res)=>{
            alert(res);
            reload();
        })
    }
}
</script>