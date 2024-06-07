<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="theme-color" content="#0997f0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin-Page</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="../../../../assets/css/main.css">
  <link rel="stylesheet" href="../../../../assets/css/main.min.css">
  <link rel="website icon" type="png" href="../../../../assets/img/vector & icons/dog_icon.png">
  <link rel="stylesheet" href="../../../../assets/css/mediaQuery.css">
  <link rel="stylesheet" href="../../../../assets/css/animate.css">
  <link rel="stylesheet" href="../../../../assets/css/animate.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css" />
  <style>
      @font-face {
        font-family: vazir;
        src: url(../../../../assets/fonts/Vazir.ttf);
      }
      *{
        font-family: vazir !important;
      }
      input:focus{
        border: none;
        outline: none;
      }

      input[-moz-placeholder]{
        color: black !important;
     
      }

  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="flex items-center justify-between w-[95%] m-auto">
    <a id="exit" href="../../../../index.php" class="text-white rounded-2xl px-5 py-2 bg-[#0E91E3] animated bounceInUp">خروج</a>
  
    <h2 id="h2-header-admin" class="text-3xl font-bold my-7 text-[#0E91E3] animated zoomInLeft">صفحه ادمین کاکو</h2>
  
    <img src="../../../../assets/img/vector & icons/dog_icon.png" class="mx-3 animated bounceInUp" width="40px" alt="kako-icon">
    <!-- <a  style="background-color:red" class="text-white rounded-2xl px-5 py-2 bg-[#0E91E3] animated bounceInUp"  onclick="return confirm('ایا مطمن  برای حذف تمامی سفارشات هستید؟')" href="?delete-sefareshat" >حذف تمام سفارشات</a> -->
  </div>

  <!-- search -->
  </section>

  <section class="w-[100%] m-auto flex items-center justify-between h-auto flex-wrap" dir="rtl" >
    <div id="search-container" class="flex items-center justify-start rounded-3xl px-3 py-2 w-[350px] bg-[#b5e3f8] my-3 animated zoomInLeft" dir="rtl">
      <div id="search-icon" class="bg-[#0E91E3] cursor-pointer p-1 rounded-[50%]" dir="rtl">
          <svg xmlns="http://www.w3.org/2000/svg" style="color: white;" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>                          
      </div>
      <input id="search_result" type="text" placeholder="جستجو کنید ..." dir="rtl" class="bg-[#b5e3f8] text-black mx-2">
    </div>

    <div class="flex items-center jutify-center">
         <a class="px-4 py-3 rounded-3xl bg-red-600 text-white text-sm " href="">remove</a>
    </div>
  </section>



  <!-- result-search -->
  <div id="div_search" class="w-[100%] border-2 border-[#0E91E3] h-auto py-3 my-3 rounded-xl flex flex-wrap items-center justify-center">
    <!-- ببین این مثال سرچ -->
    <!-- مشکل این بود ک باید یوآی هم که کانتینر ال آیه توی نتیجه بیاد ن فقط خود ال آی -->
 
  </div>


  <ul class="responsive-table">
    <li class="table-header h-auto animated bounceInUp">
      <div class="col col-1">نام مشتری</div>
      <div class="col col-2">محصولات</div>
      <div class="col col-3">شماره تماس</div>
      <div class="col col-4">آدرس کلینیک/پت شاپ</div>
      <div class="col col-6">تاریخ</div>
      <div class="col col-5">علامت زدن</div>
    </li>


    
    
    <?php
global $pdo;
$sql = "SELECT * FROM `orders` WHERE is_done = 0";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$record = $stmt->fetchAll(PDO::FETCH_OBJ);



    foreach($result->get_orders() as $key):

    
     ?> 
 <?php   if( $key->is_done == 0 ) {?>
<li id="items" class="table-row h-auto animated bounceInUp">
<div class="col col-1" data-label="نام"><?= $key->name ?></div>
<div class="col col-2" data-label="محصولات"><?= $key->name_orders ?></div>
<div class="col col-3" data-label="شماره تماس"><?= $key->mobile ?></div>
<div class="col col-4" data-label="ادرس کلینیک/پت شاپ"><?= $key->name_clinic ?></div>
<div class="col col-6" data-label=" تاریخ و زمان"><?= $key->create_at ?></div>
<!-- <button class="btn col col-5 bg-[#0E91E3] rounded-xl py-2 text-sm text-white">خوانده </button> -->
<!-- <button id="Btn"  class="w-[100px] m-auto text-xs bg-[#0E91E3]  py-2 p-1 rounded-xl text-white text-center">خوانده شد</button> -->
<button data-keyid="<?= $key->id ?>" id="is_done" class="w-[100px] m-auto text-xs bg-[#0E91E3] py-2 p-1 rounded-xl text-white text-center" >خوانده شد </button>

</li>
        <?php
 } endforeach;
?>
</div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<hr class="w-[90%] h-1 m-auto bg-[#0E91E3] rounded-sm my-8">
  
  <div  class="w-full h-auto flex items-center justify-center my-5">
    <h3 class="text-2xl text-[#0E91E3] font-bold animated rollIn">سفارشات خوانده شده</h3>
  </div>
  

  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- partial -->
<div class="container">
  <ul class="responsive-table">
    <li class="table-header h-auto animated bounceInUp">
      <div class="col col-1">نام مشتری</div>
      <div class="col col-2">محصولات</div>
      <div class="col col-3">شماره تماس</div>
      <div class="col col-4">آدرس کلینیک/پت شاپ</div>
      <div class="col col-6">تاریخ</div>
      <div class="col col-5">حذف</div>
   
    </li>
    
<?php
 foreach($result->get_orders() as $key):
 if($key->is_done == 1){
  ?>
 <li  class="table-row h-auto animated bounceInUp">

      <div  class="col col-1" data-label="نام"><?= $key->name ?></div> 
      <div class="col col-2" data-label="محصولات"><?= $key->name_orders ?></div> 
      <div class="col col-3" data-label="شماره تماس"><?= $key->mobile ?></div> 
      <div class="col col-4"  data-label="ادرس کلینیک/پت شاپ"><?= $key->name_clinic ?></div> 
      <div class="col col-6" data-label="تاریخ"><?= $key->create_at ?></div> 

      <!-- <a href="#" class="aa col col-5 bg-[#0E91E3] rounded-xl py-2 text-sm text-white">حذف</a> -->

      <button data-keyname="<?= $key->name ?>"   data-keyid="<?= $key->id ?>" id="remove" class="w-[100px] m-auto text-xs bg-[#0E91E3] py-2 p-1 rounded-xl text-white text-center" > remove </button>
      
    
    </li>
  <?php
  } endforeach;
$result->Delete();

   ?>
    

  </ul>
</div>

  
<script src="../../../../assets/js/wow.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">

  document.querySelectorAll("#is_done").forEach(item =>{
    item.addEventListener("click", ()=>{
       $('#items').hide(500,function(){
      
  let idorders =  item.dataset.keyid; 
      $.ajax({

           url : "libs_admin/Ajax.php",
           method : "post",
           data :{action: "doneSwitch" , id : idorders },

           success:function(response){
            // location.reload();
          }
        });
         });
    });
  });

  document.querySelectorAll("#remove").forEach(item =>{
    item.addEventListener("click", ()=>{

  let idremove =  item.dataset.keyid; 
  let name = item.dataset.keyname;
      $.ajax({

           url : "libs_admin/Ajax.php",
           method : "post",
           data :{action: "removeSwitch",id : idremove , nameorders : name},

           success:function(response){
            alert('این سفارش با اسم ' + name  + 'حذف شد ');
           location.reload();
          }
        
        });
    });
  });
             
  

       $("#search_result").keyup(function(){

           var input = $(this).val();
               //  alert (input);
               if(input != ""){
                $.ajax({

                  url : "libs_admin/live_search.php",
                  method : "post",
                  data :{input:input},

                  success:function(data){
                    $("#div_search").html(data);
                  }
                
             });
                  }else{
                    // $("#div_search").css("display","none");
                  }

                });
        

</script>
</body>
</html>
