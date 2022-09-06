<?php
include "../base.php";
unset($_SESSION[$_POST['table']]);
if ($_POST['table']=='mem') {
    unset($_SESSION['cart']);
}
