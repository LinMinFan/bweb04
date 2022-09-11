<?php

?>
<h3 class="ct">編輯頁尾版權區</h3>
<form action="./api/save.php?do=bot" method="post">
<table class="w80 mg">
    <tr class="">
        <td class="tt ct w30">頁尾宣告內容</td>
        <td class="pp w50">
            <input type="text" name="bot" value="<?=$bot->find(1)['bot'];?>">
            <input type="hidden" name="id" value="1">
        </td>
    </tr>
    
</table>
<div class="ct">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
</div>
</form>