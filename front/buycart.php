<?php
if (isset($_GET['id']) && isset($_GET['qt'])) {
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}
if (!isset($_SESSION['mem'])) {
    to("?do=mem");
}
?>
<h3 class="ct">
    <?=$_SESSION['mem'];?>的購物車
</h3>
<form action="?" method="get">
<div class="w100 h400 oy_s">
<table class="w80 mg">
        <tr class="tt">
            <td>編號</td>
            <td>商品名稱</td>
            <td>數量</td>
            <td>庫存量</td>
            <td>單價</td>
            <td>小計</td>
            <td>刪除</td>
        </tr>
        <?php
        if (!empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $id => $qt) {
                ?>
                <tr class="pp">
                    <td><?=$prds->find($id)['no'];?></td>
                    <td><?=$prds->find($id)['name'];?></td>
                    <td><?=$qt;?></td>
                    <td><?=$prds->find($id)['qt'];?></td>
                    <td><?=$prds->find($id)['price'];?></td>
                    <td><?=($prds->find($id)['price'])*$qt;?></td>
                    <td>
                        <button onclick="del_session(<?=$id;?>)"><img src="./icon/0415.jpg" alt=""></button>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
    <div class="ct">
        <a href="?do=main"><img src="./icon/0411.jpg" alt=""></a>
        <a href="?do=pay"><img src="./icon/0412.jpg" alt=""></a>
    </div>
 
</div>
</form>
<script>
    function del_session(id){
        $.post("./api/del_session.php",{id},()=>{
            ff("do=buycart");
        })
    }
</script>
