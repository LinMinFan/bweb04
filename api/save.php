<?php
include "../base.php";
$do=$_GET['do'];

switch ($do) {
    case 'mem':
        if (isset($_POST['id'])) {
            $$do->save($_POST);
            to("../back.php?do={$do}");
        }else{
            $_POST['date']=$today;
            $$do->save($_POST);
            to("../index.php?do={$do}");
        }
        break;
    case 'admin':
        $_POST['pr']=serialize($_POST['pr']);
        $$do->save($_POST);
        to("../back.php?do={$do}");
        break;
    case 'bot':
        $$do->save($_POST);
        to("../back.php?do={$do}");
        break;
    case 'type':
        $$do->save($_POST);
        to("../back.php?do={$do}");
        break;
    case 'orders':
        $_POST['no']=date("Ymd").date("His");
        $_POST['date']=$today;
        $_POST['prds']=serialize($_SESSION['cart']);
        $$do->save($_POST);
        unset($_SESSION['cart']);
        to("../index.php?do=buycart");
        break;
    
    default:
        
        break;
}

