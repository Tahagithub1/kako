<?php
class Admin{
   public function get_orders()  {
       global $pdo;
       $sql="SELECT * FROM orders";
       $stmt = $pdo->prepare($sql);
       $stmt->execute();
       $record = $stmt->fetchAll(PDO::FETCH_OBJ);
       return $record;
    
    }

    
   public function ShowId($id)  {
    global $pdo;
       $sql="SELECT * FROM orders WHERE id = :id";
       $stmt = $pdo->prepare($sql);
       $values = [
        ':id' => $id  
    ];
       $stmt->execute($values);
       $record = $stmt->fetch(PDO::FETCH_OBJ);
       return $record;
   
}


public function Delete() {
       global $pdo;
    if(isset($_GET['delete-sefareshat'])){
        $sql = "DELETE FROM orders";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
    }
  }
//   public function Delete_item($id) {
//      global $pdo;
//      $sql = "DELETE FROM `orders` WHERE id = :id";
//      $stmt = $pdo->prepare($sql);
//      $values = [
//         ':id' => $id  
//     ];
//      $stmt->execute($values); 
//  }
public function is_done(){
    global $pdo;
    $sql = "SELECT `is_done` FROM `orders` WHERE is_done = 0";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_OBJ);
    return $record;
      
}
 public function doneSwitch($id){

    global $pdo;
    $sql = "UPDATE orders SET is_done = 1 - is_done WHERE id = :orderid";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':orderid' => $id]);
    return $stmt->rowCount();
    
    }

    public function removeorder($removeid){
       global $pdo;
       $sql = "DELETE FROM `orders` WHERE id = :removeid";
       $stmt = $pdo->prepare($sql);
       $stmt->execute([':removeid'=> $removeid]);

        
    }
}

// $UserInfo = array($record);
// var_dump($record);



?>