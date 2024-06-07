<?php
//namespace init;
// include "constants.php";
include "constantss.php";
include "configg.php";



try{
    $pdo=new PDO("mysql:dbname=$kako->dbname;host={$kako->host}", $kako->user,$kako->pass);
    // set the pdo error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //  echo "config";
} catch(PDOException $e){
          diePage("Connection failed :" . $e->getMessage());
}


//include "../libs_send/helperss.php";
include "../libs_send/lib-submit.php";
// $r = "error";
// diePage($r);

?>
