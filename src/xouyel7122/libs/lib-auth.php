<?php

 defined('BASE_PATH') OR die("permission Deny");


function islogin()  {
    return false;
}

// function getuserbyusername($username)  {
//     global $pdo;
//     $sql = "SELECT * FROM `Login` WHERE username = :username";
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute([':username' =>$username]);
//     $record = $stmt->fetchAll(PDO::FETCH_OBJ);
//     return $record[0] ?? null;
// }
// function login($username,$pass)  {
//     $user = getuserbyusername($username);
//     dd($user);
// }

class getLogin{
    private $password;
    private $username;
   // public function __construct()
   // {
   //    $this->password = $_POST['passsword'];
   // }
   // public function emptyInput()  {
   //    if(empty($this->password)){
   //      echo "s";
   //    }else{
   //       echo "a";
   //    }
   // }

 public function login(){

      global $pdo;
      $option = ['cost'=>12];
      $this->username = $_POST['username'];
      $this->password = $_POST['password'];
      $query = "SELECT * FROM `Login` WHERE (username = :username);";
      $values = [':username'=>$this->username];
      $Login=false;
  
      try
      {
  
        $Result = $pdo->prepare($query);
       // $Result->bindValue(":username",$username); 
        $values = [':username'=>$this->username];  
        $Result->execute($values);
    
  
      }
      catch(PDOException $e)
      {
         diePage("error massege :".$e);
      }
  
        $Users = $Result->fetch(PDO::FETCH_ASSOC);
    
        if(is_array($Users)){
          
          if(password_verify($this->password , $Users['password']))
          {
               $Login = true;
               if($Login=true)
               {
             //   $header = BASE_PATH . "admin-page/dist/adminPage.php";
                  header("Location: .././dfncud76/admin-page/dist/dist.php");
                  die();
               }else
               {
  
                  if(password_needs_rehash($Users['password'],PASSWORD_DEFAULT,$option))
                  {
    
                     $hash = password_hash($this->password,PASSWORD_DEFAULT,$option);
                     $sql = 'UPDATE Login SET password = :password WHERE id = :id';
                     $values = ['password'=>$hash,':id'=>$Users['id']];
                     $Login = true;
                     
                  }
      
                 try
                 {
    
                    $Result = $pdo->prepare($sql);
                    $Result->execute($values);
    
    
                 }catch(PDOException $e)
                 {
                  
                         diePage("error massege :". $e);
                      
                 }
              }
          
             }else{
               header('Location: index.php?action=notlogin');
               diePage("worge username or password");
             }
          }else{
            header('Location: index.php?action=notlogin');
            diePage("worge username or password");
          }
     }  
      
}
     
     
    
   



 

?>
