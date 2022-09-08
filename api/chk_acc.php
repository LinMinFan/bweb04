<?php
include "../base.php";
if ($mem->math('count','id',['acc'=>$_POST['acc']])>0) {
    echo 1;
}else {
    echo 0;
}