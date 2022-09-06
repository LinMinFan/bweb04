<?php
include "../base.php";
if (${$_POST['table']}->math('count','id',['acc'=>$_POST['acc']])>0) {
    echo "帳號已存在";
}else{
    echo "帳號可使用";
}