<h3 class="ct">
編輯頁尾版權區
</h3>
<form action="./api/save.php?do=bot" method="post">
<div class="w100 h400 oy_s">
<table class="w80 mg">
<tr class="">
    <td class="ct tt">頁尾宣告內容</td>
    <td class="pp">
    <input type="text" name="bot" value="<?=$bot->find(1)['bot'];?>">
    </td>
</tr>

</table>
<div class="ct">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
</div>
</div>
</form>