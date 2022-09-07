<?php
$data=[];
if (empty($_GET['b'])) {
    $data=$prds->all($sh);
    $b_name="全部商品";
    $m_name="";
}else if(empty($_GET['m'])){
    $data=$prds->all(['big'=>$_GET['b']]);
    $b_name=$types->find($_GET['b'])['name'];
    $m_name="";
}else{
    $data=$prds->all(['big'=>$_GET['b'],'mid'=>$_GET['m']]);
    $b_name=$types->find($_GET['b'])['name'];
    $m_name=$types->find($_GET['m'])['name'];
}
?>
<h3>
    <?=$b_name;?>><?=$m_name;?>
</h3>
<div class="w100 h450 mg oy_s">
    <?php
    foreach ($data as $key => $pd) {
        ?>
        <table class="w80 mg">
            <tr>
                <td class="w45 pp">
                    <a href="?do=intro&id=<?=$pd['id'];?>">
                    <img src="./icon/<?=$pd['img'];?>" height="80px">
                    </a>
                </td>
                <td class="w45">
                    <div class="tt ct"><?=$pd['name'];?></div>
                    <div class="pp">價錢:<?=$pd['price'];?> <a class="float_r" href="?do=buycart&id=<?=$pd['id'];?>&qt=1"><img src="./icon/0402.jpg" alt=""></a></div>
                    <div class="pp">規格:<?=$pd['norm'];?></div>
                    <div class="pp">簡介:<?=$pd['intro'];?></div>
                </td>
            </tr>
        </table>
        <?php
    }
    ?>
</div>