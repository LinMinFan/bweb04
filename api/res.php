<?php
include "../base.php";
if (${$_POST['table']}->math('count','id',['acc'=>$_POST['acc']])>0) {
    echo "帳號已存在";
}else{
    $do=$_POST['table'];
    unset($_POST['table']);
    $_POST['date']=$today;
    $$do->save($_POST);
    echo "註冊完成";
}