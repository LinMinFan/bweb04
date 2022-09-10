<?php
if (!empty($_GET['id']) && !empty($_GET['qt'])) {
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}
if (!isset($_SESSION['mem'])) {
    to("?do=mem");
}
?>
<h3 class="ct"><?=$_SESSION['mem'];?>的購物車</h3>
<div class="w100 h400 ">
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
    <td><?=$prds->find($id)['price']*$qt;?></td>
    <td>
        <a href="javascript:del_cart(<?=$id;?>)"> <img src="./icon/0415.jpg" alt=""></a>
    </td>
</tr>
<?php
}
}
?>
</table>
<div class="w80 mg ct">
    <a href="?do=main"><img src="./icon/0411.jpg"></a>
    <a href="?do=pay"><img src="./icon/0412.jpg"></a>
</div>
</div>
<script>
    function del_cart(id){
        $.post("./api/del_cart.php",{id},()=>{
            ff('buycart');
        })
    }
</script>

