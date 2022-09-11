<?php
include "../base.php";
$do=$_GET['do'];

switch ($do) {
    case 'orders':
        $_POST['no']=date("Ymd").date("His");
        $_POST['date']=$today;
        $_POST['prds']=serialize($_SESSION['cart']);
        $$do->save($_POST);
        unset($_SESSION['cart']);
        to("../index.php?do={$do}");
        break;
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
        if (isset($_POST['id']) && $admin->find($_POST['id'])['acc']==$_SESSION['admin']) {
            $_SESSION['admin']=$_POST['acc'];
        }
        $_POST['pr']=serialize($_POST['pr']);
        $$do->save($_POST);
        to("../back.php?do={$do}");
        break;
    case 'bot':
        $_POST['id']=1;
        $$do->save($_POST);
        to("../back.php?do={$do}");
        break;
    case 'type':
        $$do->save($_POST);
        to("../back.php?do={$do}");
        break;
    
    default:
        
        break;
}