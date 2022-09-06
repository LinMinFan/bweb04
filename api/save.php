<?php
include "../base.php";
$do=$_GET['do'];
switch ($do) {
    case 'admin':
        $_POST['pr']=serialize($_POST['pr']);
        break;
    
    default:

        break;
}
$$do->save($_POST);

to("../back.php?do={$do}");
