<h3 class="ct">編輯頁尾版權區</h3>
<form action="./api/save.php?do=<?=$do;?>" method="POST">
<table class="w80 mg">
<tr>
    <td class="tt">頁尾宣告內容</td>
    <td class="pp">
        <input type="text" name="bot" value="<?=$bot->find(1)['bot'];?>" style="width: 180px;">
        <input type="hidden" name="id" value="1">
    </td>
</tr>
</table>
<div class="ct">
    <input type="submit" value="編輯">
    <input type="reset" value="重置">
</div>
</form>