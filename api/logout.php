<?php
include "../base.php";
$do=$_GET['do'];
unset($_SESSION[$do]);
unset($_SESSION['cart']);
to("../index.php?do=$do");