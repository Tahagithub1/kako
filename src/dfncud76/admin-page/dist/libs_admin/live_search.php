<?php

include "./init.php";

if(isset($_POST['input'])){
    global $pdo;
    $input = $_POST['input'];

    $query = $pdo->prepare("SELECT * FROM orders WHERE name LIKE ? OR name_clinic LIKE ? OR mobile LIKE ? OR name_orders LIKE ? ");
    $query->bindValue(1, "%$input%" , PDO::PARAM_STR);
    $query->bindValue(2, "%$input%" , PDO::PARAM_STR);
    $query->bindValue(3, "%$input%" , PDO::PARAM_STR);
    $query->bindValue(4, "%$input%" , PDO::PARAM_STR);

    $query->execute();
    if (!$query->rowCount() == 0) 
    {
      while($results = $query->fetch())  {
        $removeid = $results['id'];
        $name = $results['name'];
        $name_orders = $results['name_orders'];
        $mobile = $results['mobile'];
        $name_clinic = $results['name_clinic'];
        $create_at = $results['create_at'];
         {
             ?>
     <div class="container">
  <ul class="responsive-table">
    
     <li class="table-row h-auto animated bounceInUp">
      <div class="col col-1" data-label="نام"><?php echo $name ?></div>
      <div class="col col-2" data-label="محصولات"><?php echo $name_orders ?></div>
      <div class="col col-3" data-label="شماره تماس"><?php echo $mobile ?></div>
      <div class="col col-4"  data-label="ادرس کلینیک/پت شاپ"><?php echo $name_clinic ?> </div>
      <div class="col col-6" data-label="تاریخ"><?php echo $create_at ?></div>
      <!-- <a href="#" class="aa col col-5 bg-[#0E91E3] rounded-xl py-2 text-sm text-white">حذف</a> -->
      <button data-keyname="<?= $name ?>"   data-keyid="<?= $key->id ?>" id="remove" class="w-[100px] m-auto text-xs bg-[#0E91E3] py-2 p-1 rounded-xl text-white text-center" > remove </button>

    </li>
    </ul>
         </div>
    
             <?php
            $is_done = $results['is_done'];
            // var_dump($is_done);
              if($is_done == 1){
           $result = new Admin();
           $result->removeorder($removeid);
         }else{
          ?>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">


  document.querySelectorAll("#remove").forEach(item =>{
    item.addEventListener("click", ()=>{
  let name = item.dataset.keyname;
            alert('این سفارش با اسم ' + name  + 'حذف نشد لطفا در قسمت خوانده شده قرارش بدهید و بعد اقدام برای حذف کنید ');
           location.reload();
       
       
        
        });
    });

</script>
          <?php
          die();
         
         }

        }  
     } 
    }
     else 
     {
        ?>
          <div dir="rtl" class="flex items-center justify-start bg-red-600 rounded-xl w-[70%] m-auto h-[7vh] px-7 my-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color: white;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
              </svg>          
            <p class="text-white font-bold text-sm m-2">  نتیجه ای یافت نشد </p>
        <?php
           
     }
     }  
    
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">


  document.querySelectorAll("#remove").forEach(item =>{
    item.addEventListener("click", ()=>{
  let name = item.dataset.keyname;
            alert('این سفارش با اسم ' + name  + 'حذف شد ');
           location.reload();
       
       
        
        });
    });

             
  


</script>
