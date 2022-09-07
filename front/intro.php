<?php
$pd=$prds->find($_GET['id']);
?>
<h3 class="ct">
    <?=$pd['name'];?>
</h3>
<form action="?">
<div class="w100 h450 mg oy_s">
    <table class="w80 mg">
        <tr class="pp">
            <td class="w45">
                <img src="./icon/<?=$pd['img'];?>" height="120px">
            </td>
            <td class="w45">
                <div>分類:<?=$types->find($pd['big'])['name'].">".$types->find($pd['mid'])['name'];?></div>
                <div>編號:<?=$pd['no'];?></div>
                <div>價格:<?=$pd['price'];?></div>
                <div>詳細說明:<?=$pd['intro'];?></div>
                <div>庫存量:<?=$pd['qt'];?></div>
            </td>
        </tr>
    </table>
    <div class="ct tt">
        購買數量:
        <input type="hidden" name="do" value="buycart">
        <input type="hidden" name="id" value="<?=$pd['id'];?>">
        <input type="number" name="qt">
        <button type="submit"><img src="./icon/0402.jpg"></button>
    </div>
    <div class="ct">
        <button type="button" onclick="ff('main')">返回</button>
    </div>
</div>
</form>