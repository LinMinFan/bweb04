<?php
include "../base.php";
$do=$_GET['do'];
switch ($do) {
    case 'mem':
        if (isset($_POST['id'])) {
            $$do->save($_POST);
            to("../back.php?do=$do");
            }else{
                $_POST['date']=$today;
                $$do->save($_POST);
                to("../index.php?do=$do");
        }
        break;
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
        $_POST['id']=1;
        $$do->save($_POST);
        to("../back.php?do=$do");
        break;
    case 'types':
        $$do->save($_POST);
        to("../back.php?do=$do");
        break;
    
    default:
        
        break;
}