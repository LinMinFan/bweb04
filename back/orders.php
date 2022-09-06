<?php
$ords=$orders->all();
?>
<h3 class="ct">訂單管理</h3>
<div id="orders">
<table class="w80 mg">
    <tr>
        <td class="tt ct">訂單編號</td>
        <td class="tt ct">金額</td>
        <td class="tt ct">會員帳號</td>
        <td class="tt ct">姓名</td>
        <td class="tt ct">下單時間</td>
        <td class="tt ct">操作</td>
    </tr>
    <?php
    foreach ($ords as $key => $ord) {
        ?>
        <tr>
            <td class="pp ct ord_no"><?=$ord['no'];?></td>
            <td class="pp ct"><?=$ord['total'];?></td>
            <td class="pp ct"><?=$ord['acc'];?></td>
            <td class="pp ct"><?=$ord['name'];?></td>
            <td class="pp ct"><?=$ord['date'];?></td>
            <td class="pp ct"><button onclick="del('orders',<?=$ord['id'];?>)">刪除</button></td>
        </tr>
        <?php
    }
    ?>
</table>
</div>
<div id="detail" class="dpn"></div>
<script>
    $('.ord_no').on('click',function(){
        let no=$(this).text();
        $('#orders').hide();
        $('#detail').show();
        $('#detail').load("./back/detail.php",{no},()=>{
            
        });
    })
</script>