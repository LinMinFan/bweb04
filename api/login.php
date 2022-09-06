<?php
include "../base.php";
if ($_POST['check'] !=$_SESSION['check']) {
    echo 1;
}else{
    if (${$_POST['table']}->math('count','id',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])>0) {
        $_SESSION[$_POST['table']]=$_POST['acc'];
        echo 3;
    }else{
        echo 2;
    }
}