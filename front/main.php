<?php
if (empty($_GET['b'])) {
    $pds=$prds->all($sh);
    $tb="全部商品";
    $tm="";
}else if (empty($_GET['m'])) {
    $pds=$prds->all($sh," && `big`={$_GET['b']}");
    $tb=$types->find($_GET['b'])['name'];
    $tm="";
}else{
    $pds=$prds->all($sh," && `mid`={$_GET['m']}");
    $tb=$types->find($_GET['b'])['name'].">";
    $tm=$types->find($_GET['m'])['name'];
}
?>
<h3>
    <span><?=$tb;?></span>
    <span><?=$tm;?></span>
</h3>
<div class="w100 h400 oy_s">
<table class="w80 mg">
<?php
foreach ($pds as $key => $pd) {
    ?>
    <tr>
        <td class="pp ct">
            <a href="?do=intro&id=<?=$pd['id'];?>">
            <img src="./icon/<?=$pd['img'];?>" height="80px">
            </a>
        </td>
        <td class="">
            <div class="tt ct"><?=$pd['name'];?></div>
            <div class="pp">價錢:<?=$pd['price'];?> <a class="float_r" href="?do=buycart&id=<?=$pd['id'];?>&qt=1"><img src="./icon/0402.jpg" alt=""></a></div>
            <div class="pp">規格:<?=$pd['norm'];?></div>
            <div class="pp">簡介:<?=mb_substr($pd['intro'],0,20);?>...</div>
        </td>
    </tr>
    <?php
}
?>
</table>
</div>