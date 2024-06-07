<?php
// include "constants.php";
include "constants.php";
include BASE_PATH . "xouyel712/bootstrap/config.php";


try{
    $pdo=new PDO("mysql:dbname=$kako->dbname;host={$kako->host}", $kako->user,$kako->pass);
    // set the pdo error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //  echo "config";
} catch(PDOException $e){
          diePage("Connection failed :" . $e->getMessage());
}

include BASE_PATH . "xouyel712/libs/helpers.php";
include BASE_PATH . "xouyel712/libs/lib-auth.php";

// $r = "error";
// diePage($r);

?>
