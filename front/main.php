<?php
if (empty($_GET['b'])) {
    $pds=$prds->all($sh);
}else if (empty($_GET['m'])) {
    $pds=$prds->all($sh," && `big`={$_GET['b']}");
}else{
    $pds=$prds->all($sh," && `big`={$_GET['b']} && `mid`={$_GET['m']}");
}
$tb=(empty($_GET['b']))?"全部商品":$types->find($_GET['b'])['name'];
$tm=(empty($_GET['m']))?"":$types->find($_GET['m'])['name'];
?>
<h3>
    <?=$tb;?>><?=$tm;?>
</h3>
<div class="w100 h400 oy_s">
    <table class="w80 mg">
    <?php
    foreach ($pds as $key => $pd) {
        ?>
        <tr>
            <td class="pp">
                <a href="?do=intro&id=<?=$pd['id'];?>">
                    <img src="./icon/<?=$pd['img'];?>" height="80px">
                </a>
            </td>
            <td>
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