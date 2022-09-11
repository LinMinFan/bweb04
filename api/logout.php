<?php
include "../base.php";
$do=$_GET['do'];
if ($do=='mem') {
    unset($_SESSION['cart']);
}
unset($_SESSION[$do]);
to("../index.php?do={$do}");
