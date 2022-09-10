<?php
if (!isset($_GET['b'])) {
    $pds=$prds->all($sh);
    $tb_text="全部商品";
    $tm_text="";
}else if (!isset($_GET['m'])){
    $pds=$prds->all($sh," && `big`={$_GET['b']}");
    $tb_text=$types->find($_GET['b'])['name'];
    $tm_text="";
}else{
    $pds=$prds->all($sh," && `big`={$_GET['b']} && `mid`={$_GET['m']}");
    $tb_text=$types->find($_GET['b'])['name'].">";
    $tm_text=$types->find($_GET['m'])['name'];
}

?>
<h3><?=$tb_text;?><?=$tm_text;?></h3>
<div class="w100 h400 oy_s">
<table class="w80 mg">
<?php
foreach ($pds as $key => $pd) {
?>
<tr>
    <td class="w45 pp ct">
        <a href="?do=intro&id=<?=$pd['id'];?>">
            <img src="./icon/<?=$pd['img'];?>" height="80px">
        </a>
    </td>
    <td class="w45 ">
        <div class="tt ct">
            <?=$pd['name'];?>
        </div>
        <div class="pp">價錢:<?=$pd['price'];?> <a href="?do=buycart&id=<?=$pd['id'];?>&qt=1" class="float_r"> <img src="./icon/0402.jpg" alt=""></a></div>
        <div class="pp">規格:<?=$pd['norm'];?></div>
        <div class="pp">簡介:<?=mb_substr($pd['intro'],0,20);?>...</div>
    </td>
</tr>
<?php
}
?>
</table>
</div>
