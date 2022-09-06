<?php
$type_b=$_GET['b']??"";
$type_m=$_GET['m']??"";
if ($type_b=='') {
    $pds=$prds->all($sh);
}else if($type_m==''){
    $pds=$prds->all($sh," && `big`=$type_b");
}else{
    $pds=$prds->all($sh," && `big`=$type_b && `mid`=$type_m");
}
?>
<div class="w100 h400 oy_s">
<h3>
    <span id="big_t">
    <?=($type_b=='')?"全部商品":$type->find($type_b)['name'].">";?>
    </span>
    <span id="mid_t">
    <?=($type_m=='')?"":$type->find($type_m)['name'];?>
    </span>
</h3>
<table class="w80 mg">
    <?php
    foreach ($pds as $key => $pd) {
        ?>
        <tr>
            <td class="pp">
                <a href="?do=detall&id=<?=$pd['id'];?>"><img src="./img/<?=$pd['img'];?>" height="80px"></a>
            </td>
            <td>
                <div class="tt ct"><?=$pd['name'];?></div>
                <div class="pp">價錢:<?=$pd['price'];?><a href="?do=buycart&id=<?=$pd['id'];?>" class="float_r"><img src="./icon/0402.jpg"></a> </div>
                <div class="pp">規格:<?=$pd['norm'];?></div>
                <div class="pp">簡介:<?=$pd['intro'];?></div>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</div>