 
<?php

include "bootstrap/init.php";
if(!islogin()){
    header("location" . SiteUrl('auth.php'));
}

include  BASE_PATH . "xouyel712/tpl/admin.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
    $action = $_GET['action'];
    $params = $_POST;
    if($action == 'login'){
        if(isset($_POST['submit'])){ 
            $SetLogin = new getLogin();
        //    $SetLogin->emptyInput();
            $SetLogin->login();
 
           
        }
      }
}






?>
     