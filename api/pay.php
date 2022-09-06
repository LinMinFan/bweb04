<?php
include "../base.php";
$_POST['no']=date("Ymd").date("His");
$_POST['prds']=serialize($_SESSION['cart']);
unset($_SESSION['cart']);
$_POST['date']=$today;
$orders->save($_POST);
?>
<script>
    alert("訂購成功\r感謝您的選購");
    location.href="../index.php";
</script>