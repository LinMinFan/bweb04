<?php
include "../base.php";
$do=$_POST['table'];
if ($_POST['code'] !=$_SESSION['code']) {
    echo 1;
}else if ($$do->math('count','id',['acc'=>$_POST['acc'],'pw'=>$_POST['pw']])<1) {
    echo 2;
}else{
    $_SESSION[$do]=$_POST['acc'];
    echo 3;
}