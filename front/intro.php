<?php
$pd=$prds->find($_GET['id']);
?>
<h3 class="ct">
    <?=$pd['name'];?>
</h3>
<div class="w100 h400 oy_s">
<table class="w80 mg">
<tr>
        <td class="pp ct">
            <img src="./icon/<?=$pd['img'];?>" height="100px">
        </td>
        <td class="">
            <div class="pp">分類:<?=$types->find($pd['big'])['name'].">".$types->find($pd['mid'])['name']?></div>
            <div class="pp">編號:<?=$pd['no'];?></div>
            <div class="pp">價格:<?=$pd['price'];?></div>
            <div class="pp">詳細說明:<?=$pd['intro'];?></div>
            <div class="pp">庫存量:<?=$pd['qt'];?></div>
        </td>
    </tr>
</table>
<div class="w80 mg tt ct">
    購買數量
    <input type="number" name="" id="qt">
    <a href="javascript:buycart(<?=$pd['qt'];?>,$('#qt').val())"><img src="./icon/0402.jpg" alt=""></a>
</div>
<div class="ct">
    <button onclick="ff('main')">返回</button>
</div>
</div>
<script>
    function buycart(id,qt){
        ff('buycart&id='+id+"&qt="+qt);
    }
</script>