<?php
// function aaaaa()  {
//    if( empty($name) || empty($name_clinic) || empty($mobile) || empty($name_orders)){
//array(posix_kill(acos(log(EmptyIterator))))
//    }else{
//     echo "avf";
//    }
// }


class Send_Orders{

    function Validation(){

        global $pdo;
    
    
            $mobile = $_POST['mobile'];
    
            $sql_user = $pdo->prepare("SELECT mobile FROM orders WHERE mobile = '$mobile'");
    
            $sql_user->execute();
    
            $row = $sql_user->fetch(PDO::FETCH_ASSOC);
    
            if($row){
    
                header('Location: ./init-orders.php?action=notsubmitd');
    
     
    
            }
    }

    public function Send() {
        global  $pdo;
 
    
            try{
// trim()
                $name = $_POST['name'];
                $name_clinic = $_POST['name_clinic'];
                $mobile = $_POST['mobile'];
                $name_orders = $_POST['name_orders'];
                if(!preg_match("/^[a-zA-Z ]*$/",$name . $name_clinic . $name_orders)){
                    //header('Location: ./init-orders.php?action=notsubmit');
                    // die();
                }
                if(!is_numeric($mobile)){
    // die();
                }


                 if(empty($name) || empty($name_clinic) || empty($mobile) || empty($name_orders)){
                    header('Location: ./init-orders.php?action=notsubmit');
                   // SendSubmit();
              
                 }else
                 {

                    $query="INSERT INTO orders SET name = :name, name_clinic = :name_clinic, mobile = :mobile, name_orders = :name_orders";
    
                    $values = [
                        ':name' => $name ,
                        ':name_clinic' => $name_clinic,
                        ':mobile' => $mobile ,
                        ':name_orders' => $name_orders
                        
                    ];
                    
                
                   
                    //Result
                
                     $Result = $pdo->prepare($query);
                
                    // bind
                    //  $Result->bindValue(1,$name);   
                    //  $Result->bindValue(2,$name_clinic);
                    //  $Result->bindValue(3,$mobile);
                    //  $Result->bindValue(4,$name_orders);   
                    //exe
                
                            $Result->execute($values);
                            
                            // $row = $Result->fetch(PDO::FETCH_ASSOC);
                            // if($row){
                            //      echo "s";
                            // }else{
                            //     echo "f";
                            // }
                           
                        ///     SendSubmit();
                         
                }

                }catch(PDOException $e){
                       echo "your error massage is :" . $e->getMessage();                                       
                }
                 }       

              
    }
   

?>