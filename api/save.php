<?php
include "../base.php";
$do=$_GET['do'];
switch ($do) {
    case 'orders':
        $_POST['prds']=serialize($_SESSION['cart']);
        $$do->save($_POST);
        unset($_SESSION['cart']);
        ?>
        <script>
            alert("訂購成功\r感謝您的選購");
            location.href="../index.php?do=main";
        </script>
        <?php
        break;
    case 'admin':
        $_POST['pr']=serialize($_POST['pr']);
        $$do->save($_POST);
        to("../back.php?do=$do");
        break;
    case 'bot':
        $$do->save($_POST);
        to("../back.php?do=$do");
        break;
    case 'types':
        $$do->save($_POST);
        to("../back.php?do=$do");
        break;
    case 'mem':
        $$do->save($_POST);
        if (isset($_POST['id'])) {
            to("../back.php?do=$do");
        }else{
            to("../index.php?do=$do");
        }
        break;
    
    default:
        $$do->save($_POST);
        to("../index.php?do=$do");
        break;
}
