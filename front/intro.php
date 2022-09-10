<?php
$pd=$prds->find($_GET['id']);
?>
<h3 class="ct"><?=$pd['name'];?></h3>
<div class="w100 h400 ">
<table class="w80 mg">
<tr>
    <td class="w45 pp ct">
            <img src="./icon/<?=$pd['img'];?>" height="150px">
    </td>
    <td class="w45 ">
        <div class="pp">
            分類:<?=$types->find($pd['big'])['name'].">".$types->find($pd['mid'])['name'];?>
        </div>
        <div class="pp">編號:<?=$pd['no'];?></div>
        <div class="pp">價格:<?=$pd['price'];?> </div>
        <div class="pp">詳細說明:<?=$pd['intro'];?>...</div>
        <div class="pp">庫存量:<?=$pd['qt'];?>...</div>
    </td>
</tr>
</table>
<div class="w80 mg tt ct">
    購買數量 <input type="number" name="" id="num">
    <a href="javascript:pay(<?=$pd['id'];?>)"><img src="./icon/0402.jpg" alt=""></a>
</div>
<div class="ct">
    <button onclick="ff('main')">返回</button>
</div>
</div>
<script>
    function pay(id){
        let qt=$('#num').val();
        ff(`buycart&id=${id}&qt=${qt}`);
    }
</script>
