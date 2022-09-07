<?php
include "../base.php";
$do=$_POST['table'];
unset($_SESSION[$do]);
unset($_SESSION['cart']);
