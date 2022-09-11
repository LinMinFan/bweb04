<?php
$pd=$prds->find($_GET['id']);
?>
<h3 class="ct">
    <?=$pd['name'];?>
</h3>
<div class="w100 h400">
<table class="w80 mg">

<tr>
    <td class="pp ct">
        <img src="./icon/<?=$pd['img'];?>" height="120px">
    </td>
    <td>
        <div class="pp">分類:<?=$type->find($pd['big'])['name'].">".$type->find($pd['mid'])['name'];?></div>
        <div class="pp">編號:<?=$pd['no'];?></div>
        <div class="pp">價格:<?=$pd['price'];?></div>
        <div class="pp">詳細說明:<?=$pd['intro'];?>...</div>
        <div class="pp">庫存量:<?=$pd['qt'];?></div>
    </td>
</tr>

</table>
<div class="w80 mg ct tt">
    購買數量
    <input type="number" name="" id="qt">
    <a href="javascript:buy(<?=$pd['id'];?>,$('#qt').val())"><img src="./icon/0402.jpg"></a>
</div>
</div>
<script>
    function buy(id,qt){
        ff("buycart&id="+id+"&qt="+qt);
    }
</script>