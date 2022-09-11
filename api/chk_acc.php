<?php
include "../base.php";
if ($mem->math('count','id',$_POST)>0) {
    echo "帳號已存在";
}else{
    echo "帳號可使用";
}