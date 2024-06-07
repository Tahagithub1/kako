<?php


include "config.php";


try{
    $pdo=new PDO("mysql:dbname=$kako->dbname;host={$kako->host}", $kako->user,$kako->pass);
    // set the pdo error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "config";
} catch(PDOException $e){
          echo("Connection failed :" . $e->getMessage());
}


?>