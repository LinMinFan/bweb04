function reload(){
    location.reload();
}
function del(table,id){
    $.post("./api/del.php",{table,id},()=>{
        reload();
    })
}
function sh(table,id,sh){
    $.post("./api/sh.php",{table,id,sh},()=>{
        reload();
    })
}
function ff(url){
    location.href="./index.php?"+url;
}
function bb(url){
    location.href="./back.php?"+url;
}
function login(table,acc,pw,code){
    $.post("./api/login.php",{table,acc,pw,code},(res)=>{
        if (res==1) {
            alert("對不起，您輸入的驗證碼有誤\r請您重新登入")
            reload();
        }else if(res==2){
            alert("帳號或密碼錯誤");
            reload();
        }else{
            if (table=='admin') {
                bb("do=admin");
            }else{
                ff("do=main");
            }
        }
    })
}
function logout(table){
    $.post("./api/logout.php",{table},()=>{
        ff("do="+table);
    })
}
function chk_acc(acc){
    if (acc=='admin' || acc=='') {
        alert('不可使用');
    }else {
        $.post("./api/chk_acc.php",{acc},(res)=>{
            alert(res);
        })
    }
}
function res(name,acc,pw,tel,addr,email){
    $.post("./api/res.php",{name,acc,pw,tel,addr,email},(res)=>{
        alert(res);
        reload();
    })
}
$(document).ready(function(e) {
    $(".mainmu").mouseover(
		function()
		{
			$(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function ()
		{
			$(this).children(".mw").hide()
		}
	)
});