<?php
include "../base.php";
unset($_SESSION[$_GET['do']]);
unset($_SESSION['cart']);
to("../index.php?do={$_GET['do']}");