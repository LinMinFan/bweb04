<?php
if (!empty($_GET['id'])) {
    $_SESSION['cart'][$_GET['id']]=$_GET['qt'];
}
if (!isset($_SESSION['mem'])) {
?>
<script>
    ff('mem');
</script>
<?php
}
?>
<h3 class="ct"><?=$_SESSION['mem'];?>的購物車</h3>
    <table class="w80 mg">
    <tr class="tt">
        <td>編號</td>
        <td>商品名稱</td>
        <td>數量</td>
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
            <td><?=$prds->find($id)['price'];?></td>
            <td>
            <?=$prds->find($id)['price']*$qt;?>
            </td>
            <td>
                <button type="button" onclick="unsetbuy(<?=$id;?>)"><img src="./icon/0415.jpg" alt=""></button>
            </td>
        </tr>
        <?php
    }
}
?>
</table>
    <div class="ct">
        <button onclick="ff('main')"><img src="./icon/0411.jpg" alt=""></button>
        <button onclick="ff('pay')"><img src="./icon/0412.jpg" alt=""></button>
    </div>
