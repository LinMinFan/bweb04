<?php
if ($b==0){
    $pds=$prds->all($sh);
}else if($m==0){
    $pds=$prds->all($sh," && `big`=$b");
}else{
    $pds=$prds->all($sh," && `big`=$b && `mid`=$m");
}
?>
<h3>
    <span><?=($b==0)?"全部商品":$type->find($b)['name'].">";?></span>
    <span><?=($m==0)?"":$type->find($m)['name'];?></span>
</h3>
<div class="w100 h400 oy_s">
    <?php
   foreach ($pds as $key => $prd) {
    ?>
    <table class="w80 mg">
        <tr>
            <td class="w30 pp">
                <a href="?do=detail&id=<?=$prd['id'];?>">
                <img src="./icon/<?=$prd['img'];?>" height="80px">
                </a>
            </td>
            <td class="w60">
                <div class="tt ct"><?=$prd['name'];?></div>
                <div class="pp"><?=$prd['price'];?><a href="?do=buycart&id=<?=$prd['id'];?>&qt=1" class="float_r"><img src="./icon/0402.jpg" alt=""></a> </div>
                <div class="pp"><?=$prd['norm'];?></div>
                <div class="pp"><?=$prd['intro'];?></div>
            </td>
        </tr>
    </table>
    <?php
}
    ?>
</div>
