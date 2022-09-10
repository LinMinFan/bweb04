<?php
include "../base.php";
$do=$_GET['do'];

switch ($do) {
    case 'mem':
        if (!isset($_POST['id'])) {
            $_POST['date']=$today;
            $$do->save($_POST);
            to("../index.php?do=$do");
        }
        $$do->save($_POST);
        to("../back.php?do=$do");
        break;
    case 'admin':
        $_POST['pr']=serialize($_POST['pr']);
        $$do->save($_POST);
        to("../back.php?do=$do");
        break;
    case 'bot':
        $_POST['id']=1;
        $$do->save($_POST);
        to("../back.php?do=$do");
        break;
    case 'orders':
        $_POST['no']=date("Ymd").date("His");
        $_POST['date']=$today;
        $_POST['prds']=serialize($_SESSION['cart']);
        unset($_SESSION['cart']);
        $$do->save($_POST);
        ?>
        <script>
            alert("訂購成功\n感謝您的選購");
            location.href="../index.php?do=main";
        </script>
        <?php
        break;
    
    default:
        
        break;
}

