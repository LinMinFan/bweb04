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
    location.href="./index.php?do="+url;
}
function bb(url){
    location.href="./back.php?do="+url;
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