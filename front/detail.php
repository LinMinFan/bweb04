<?php
$id=$_GET['id'];
$prd=$prds->find($id);
?>
<h3 class="ct">
<?$prd['name'];?>
</h3>
<form action="?" method="get">
<div class="w100 h400 oy_s">
<table class="w80 mg">
        <tr>
            <td class="w45 pp">
                <img src="./icon/<?=$prd['img'];?>" height="100px">
                </a>
            </td>
            <td class="w45">
                <div class="pp">分類:<?=$type->find($prd['big'])['name'];?>><?=$type->find($prd['mid'])['name'];?></div>
                <div class="pp">編號:<?=$prd['no'];?></div>
                <div class="pp">價格:<?=$prd['price'];?></div>
                <div class="pp">詳細說明:<?=$prd['intro'];?></div>
                <div class="pp">庫存量:<?=$prd['qt'];?></div>
            </td>
        </tr>
    </table>
    <div class="ct">
        購買數量
        <input type="hidden" name="do" value="buycart">
        <input type="hidden" name="id" value="<?=$id;?>">
        <input type="number" name="qt">
        <button type="submit"><img src="./icon/0402.jpg" alt=""></button>
    </div>
    <div class="ct">
        <button type="button" onclick="ff('main')">返回</button>
    </div>
</div>
</form>
