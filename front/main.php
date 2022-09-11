<?php
if (!isset($_GET['b'])) {
    $pds=$prds->all($sh);
    $tp_b="全部商品";
    $tp_m="";
}else if (!isset($_GET['m'])) {
    $pds=$prds->all($sh," && `big`={$_GET['b']}");
    $tp_b=$type->find($_GET['b'])['name'];
    $tp_m="";
}else {
    $pds=$prds->all($sh," && `mid`={$_GET['m']}");
    $tp_b=$type->find($_GET['b'])['name'].">";
    $tp_m=$type->find($_GET['m'])['name'];
}
?>
<h3>
    <?=$tp_b;?><?=$tp_m;?>
</h3>
<div class="w100 h400 oy_s">
<table class="w80 mg">
<?php
foreach ($pds as $key => $pd) {
?>
<tr>
    <td class="pp ct">
        <a href="?do=detail&id=<?=$pd['id'];?>">
        <img src="./icon/<?=$pd['img'];?>" height="80px">
        </a>
    </td>
    <td>
        <div class="tt ct"><?=$pd['name'];?></div>
        <div class="pp">價錢:<?=$pd['price'];?> <a class="float_r" href="?do=buycart&id=<?=$pd['id'];?>&qt=1"><img src="./icon/0402.jpg"></a></div>
        <div class="pp">規格:<?=$pd['norm'];?></div>
        <div class="pp">簡介:<?=mb_substr($pd['intro'],0,20);?>...</div>
    </td>
</tr>
<?php
}
?>
</table>
</div>