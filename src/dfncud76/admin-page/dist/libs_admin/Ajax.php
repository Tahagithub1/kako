<?php

include "./init.php";



 
if(!isset($_POST['action'])|| empty($_POST['action'])){
    echo "invalid action";
}

switch($_POST['action']){
    case "doneSwitch":
        // is_numeric()
        var_dump($_POST['id']);
        $orders_id = $_POST['id'];
        if(!isset($orders_id)){
            echo "نامعتبر";
            die();
        }

        $result= new Admin();
        $result->doneSwitch($orders_id);

          break;   ///importet

        case "removeSwitch":
             $removeid = $_POST['id'];

         
           if(!isset($removeid)){
            echo "نامعتبر";
            die();
           }
           $result = new Admin();
           $result->removeorder($removeid);
           break;
      
           
   
 
}
?>