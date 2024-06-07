<?php


include "bootstrap_orders/initt.php";

include "./libs_send/lib-submit.php";


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])){
    $action = $_GET['action'];
    $params = $_POST;
    $orders = new Send_Orders();
    $orders->Validation();
    if($action == 'submit'){
          
            $orders->Send();
      }
}

include "orders.php";

?>