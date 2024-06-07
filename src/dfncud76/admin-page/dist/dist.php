<?php


///include "../../../xouyel712/bootstrap/constants.php";

include "./libs_admin/init.php";

include "./libs_admin/list.php";

$result = new Admin();
$result->get_orders();

 include "./adminPage.php";
 
?>

