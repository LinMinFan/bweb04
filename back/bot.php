<?php

?>
<h3 class="ct">編輯頁尾版權區</h3>
<form action="./api/save.php?do=bot" method="post">
<table class="w80 mg">
    <tr>
        <td class="tt w35 ct">頁尾宣告內容</td>
        <td class="pp w50">
            <input type="text" name="bot" value="<?=$bot->find(1)['bot'];?>">
        </td>
    </tr>
</table>
<div class="ct">
   <input type="submit" value="編輯">
   <input type="reset" value="重置">
</div>
</form>

