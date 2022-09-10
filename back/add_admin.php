<?php
?>
<h3 class="ct">新增管理帳號</h3>
<form action="./api/save.php?do=admin" method="post">
<table class="w80 mg">
    <tr>
        <td class="tt w35 ct">帳號</td>
        <td class="pp w50">
        <input type="text" name="acc" >
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">密碼</td>
        <td class="pp w50">
        <input type="password" name="pw" >
        </td>
    </tr>
    <tr>
        <td class="tt w35 ct">權限</td>
        <td class="pp w50">
            <div><input type="checkbox" name="pr[]" value="1">商品分類與管理</div>
            <div><input type="checkbox" name="pr[]" value="2">訂單管理</div>
            <div><input type="checkbox" name="pr[]" value="3">會員管理</div>
            <div><input type="checkbox" name="pr[]" value="4">頁尾版權管理</div>
            <div><input type="checkbox" name="pr[]" value="5">最新消息管理</div>
        </td>
    </tr>
    
</table>
<div class="ct">
    <input type="submit" value="新增">
    <input type="reset" value="重置">
</div>
</form>
<script>

</script>
