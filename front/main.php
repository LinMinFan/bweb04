<?php
if (!isset($_GET['b'])) {
    $pds=$prds->all($sh);
    $textB="全部商品";
    $textM="";
}else if (!isset($_GET['m'])) {
    $pds=$prds->all($sh," && `big`={$_GET['b']}");
    $textB=$type->find($_GET['b'])['name'];
    $textM=""; 
}else{
    $pds=$prds->all($sh," && `mid`={$_GET['m']}");
    $textB=$type->find($_GET['b'])['name'].">";
    $textM=$type->find($_GET['m'])['name']; 
}
?>
<h3><?=$textB;?><?=$textM;?></h3>
<div class="w100 h400 oy_s">
<table class="w80 mg">
<?php
foreach ($pds as $key => $pd) {
?>
<tr>
    <td class="pp">
        <a href="?do=intro&id=<?=$pd['id'];?>"><img src="./icon/<?=$pd['img'];?>" height="80px"></a>
    </td>
    <td>
        <div class="tt ct"><?=$pd['name'];?></div>
        <div class="pp">價錢:<?=$pd['price'];?> <a href="?do=buycart&id=<?=$pd['id'];?>&qt=1" class="float_r"><img src="./icon/0402.jpg" alt=""></a></div>
        <div class="pp">規格:<?=$pd['norm'];?></div>
        <div class="pp">簡介:<?=mb_substr($pd['intro'],0,20);?>...</div>
    </td>
</tr>
<?php
}
?>
</table>
</div>