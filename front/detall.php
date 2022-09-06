<?php
$id=$_GET['id'];
$prd=$prds->find($id);
?>
<div class="w80 mg">
<h3 class="ct">
<?=$prd['name'];?>
</h3>
<form action="?" method="get">
<table class="w100">
    <tr class="pp">
        <td>
            <img src="./img/<?=$prd['img'];?>" height="100px">
        </td>
        <td>
            <div>分類:<?=$type->find($prd['big'])['name'];?>><?=$type->find($prd['mid'])['name'];?></div>
            <div>編號:<?=$prd['no'];?></div>
            <div>價格:<?=$prd['price'];?></div>
            <div>詳細說明:<?=$prd['intro'];?></div>
            <div>庫存量:<?=$prd['qt'];?></div>
        </td>
    </tr>
</table>
<div class="tt ct">
    購買數量:
    <input type="hidden" name="do" value="buycart">
    <input type="hidden" name="id" value="<?=$prd['id'];?>">
    <input type="number" name="qt">
    <button type="submit"><img src="./icon/0402.jpg"></button>
</div>
</form>
<div class="ct"><button type="button" onclick="ff('main')">返回</button></div>
</div>