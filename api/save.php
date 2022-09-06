<?php
include "../base.php";
$do=$_GET['do'];
switch ($do) {
    case 'admin':
        $_POST['pr']=serialize($_POST['pr']);
        $$do->save($_POST);
        to("../back.php?do={$do}");
        break;
    case 'bot':
    case 'mem':
        $$do->save($_POST);
        to("../back.php?do={$do}");
        break;
    case 'orders':
        $$do->save($_POST);
        unset($_SESSION['cart']);
        ?>
        <script>
            alert("訂購成功\r感謝您的選購");
            location.href="../index.php?do=main";
        </script>
        <?php
        break;
    
    default:
        
        break;
}

