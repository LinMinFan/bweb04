<?php
include "../base.php";

$_POST['date']=$today;
$mem->save($_POST);
echo "註冊完成";
