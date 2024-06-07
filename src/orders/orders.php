<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0997f0">
    <meta name="keywords" content="صفحه سفارش گیری کاکو">
    <meta name="description" content="کاکو زیر مجموعه ای از برند معروف پرسا است و تیم مدیریتی و فنی این شرکت افتخار دارد تا با بهره گیری از تکنولوژی روز و بکارگیری متد های کارآمد و همچنین انتخاب بهترین مواد اولیه و بهره منپی از کادری توانمند و با تجربه به سهم خود گامی شایسته در راه تولید محصولات جدید و بهبود کیفیت آنها برداشته و همواره رضایت کامل مشتریان عزیز را فراهم نماید">
    <meta name="robots" content="follow">
    <title>orders</title>
    <link rel="stylesheet" href="../../assets/css/main.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <link rel="website icon" type="png" href="../../assets/img/vector & icons/dog_icon.png">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css" />
    <link rel="stylesheet" href="../../assets/css/mediaQuery.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/animate.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hidden{
            display: none;
        }
        input:focus{
            outline:none;
        }

        #header-container-orders{
            background-image: linear-gradient(to bottom, #8ADAFF 40% , #fff);
        }
    </style>
</head>
<body class="w-[100%] h-[100vh]">

    <!-- header orders -->
    <div id="header-container-orders" class="w-full h-[12vh] mb-3">
        <div id="heade-orders" class="w-[80%] m-auto h-auto flex items-center justify-between">

            <section id="sec-order-left" class="flex items-center justify-center mt-4">
                <a href="../index.php" class="w-10 h-10 p-2 rounded-full bg-[#0E91E3] flex items-center justify-center m-1 animated bounceInUp">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color:white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     class="w-5 bg-[#0E91E3] rounded-xl h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                      </svg>                      
                </a>
                <button class="text-white bg-[#0E91E3] rounded-3xl py-2 px-5 animated bounceInUp">بازگشت</button>
            </section>

            <section id="sec-order-right" class="flex items-center justify-center  mt-4">
                <h1 class="font-extrabold m-2 text-3xl text-[#0E91E3] animated bounceInUp">کاکو</h1>
                <img src="../../assets/img/vector & icons/dog_icon.png" class="animated bounceInUp" width="40px" alt="dog_icon">
            </section>

        </div>
    </div>


    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <!-- اجرای پیام درست ارسال شدن اطلاعات  -->

<?php

if(isset($_GET['action'])){
    switch ($_GET['action']){
        case 'submit':
            ?>
            <?php
        break;
            
    }
}if(isset($_GET['action'])){
    switch ($_GET['action']){
        case 'notsubmit':
           ?>
           <?php
            break;
    }
}if(isset($_GET['action'])){
    switch ($_GET['action']){
        case 'notsubmitd':
       ?>
       <?php
        break;
    }
}

?>
















    <?php

if(isset($_GET['action'])=='notsubmit'){
 // SendSubmit("your not sub");
 ?>
    <div dir="rtl" class="flex items-center justify-start bg-red-600 rounded-xl w-[70%] m-auto h-[7vh] px-7 my-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color: white;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
          </svg>          
        <p class="text-white font-bold text-sm m-2">خطا در ثبت سفارش</p>
        <p class="text-white font-bold text-sm m-2">مقادیر را کامل وارد کنیید </p>
    </div> 
 <?php
 //die();
    }
    elseif(isset($_GET['action'])){
        if($_GET['action']=='submit'){
?>
<div dir="rtl" class="flex items-center justify-start bg-green-600 rounded-xl w-[70%] m-auto h-[7vh] px-7 my-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color: white;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
          </svg>
        <p class="text-white font-bold text-sm m-2"> سفارش شما ثبت شد </p>
    </div> 
<?php
    }
    }elseif(isset($_GET['action'])){
        if($_GET['action']=='notsubmitd'){
        ?>
           <div dir="rtl" class="flex items-center justify-start bg-red-600 rounded-xl w-[70%] m-auto h-[7vh] px-7 my-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color: white;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
          </svg>          
        <p class="text-white font-bold text-sm m-2">خطا در ثبت سفارش</p>
        <p class="text-white font-bold text-sm m-2">این داده ثبت شده است </p>
    </div> 
        <?php
        }
    }elseif(isset($_GET['action'])){
        if($_GET['action']== 'notsubmitvalid'){
            ?>
              <div dir="rtl" class="flex items-center justify-start bg-red-600 rounded-xl w-[70%] m-auto h-[7vh] px-7 my-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color: white;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
          </svg>          
        <p class="text-white font-bold text-sm m-2">خطا در ثبت سفارش</p>
        <p class="text-white font-bold text-sm m-2">لطفا از فقط حروف استفاده کنید برای پر کردن داده ها</p>
    </div> 
            <?php
        }
    }elseif(isset($_GET['action'])){
        if($_GET['action']== 'notsubmitnumber'){
            ?>
              <div dir="rtl" class="flex items-center justify-start bg-red-600 rounded-xl w-[70%] m-auto h-[7vh] px-7 my-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color: white;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
          </svg>          
        <p class="text-white font-bold text-sm m-2">خطا در ثبت سفارش</p>
        <p class="text-white font-bold text-sm m-2">شماره تلفن حتما باید عدد باشد</p>
    </div> 
            <?php
        }
    }
?>


?>
    <?php

if(isset($_GET['action'])){
     switch ($_GET['action']){
        case 'notsubmitvalid':
       ?>
         <div dir="rtl" class="flex items-center justify-start bg-red-600 rounded-xl w-[70%] m-auto h-[7vh] px-7 my-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color: white;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
          </svg>          
        <p class="text-white font-bold text-sm m-2">خطا در ثبت سفارش</p>
        <p class="text-white font-bold text-sm m-2">برای پر کردن داده ها فقط از حروف استفاده کنید نه مقادیر نامربوط</p>
    </div> 
       <?php
           break;
}
}if(isset($_GET['action'])){
     switch ($_GET['action']){
        case 'notsubmitnumber':
       ?>
                <div dir="rtl" class="flex items-center justify-start bg-red-600 rounded-xl w-[70%] m-auto h-[7vh] px-7 my-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color: white;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
          </svg>          
        <p class="text-white font-bold text-sm m-2">خطا در ثبت سفارش</p>
        <p class="text-white font-bold text-sm m-2">شماره تلفن حتما باید عدد باشد</p>
    </div> 
       <?php
           break;
     }
}
?>



if(!preg_match("/^[a-zA-Z ]*$/",$name . $name_clinic . $name_orders)){
                    header('Location: ./init-orders.php?action=notsubmitvalid');
                   
                }
                if(!is_numeric($mobile)){
                      header('Location: ./init-orders.php?action=notsubmitnumber');
   
                }
                

    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- main-order -->
<form action="init-orders.php?action=submit" method="post">
    <div id="main-order-container" class="w-[100%] m-auto h-auto flex items-center justify-center mt-16">

        <section id="left-main-order" class="w-[40%] flex items-center justify-center flex-col" dir="rtl">
            <div id="form" class="w-[80%] flex items-start justify-start mb-9">
                <h1 class="text-4xl font-extrabold text-[#0E91E3] animated fadeInLeftBig">فرم ثبت سفارش</h1>
            </div>
            <input name="name" type="text" placeholder="نام و نام خانوادگی :" class="border-2 rounded-xl py-2 px-4 w-[490px] h-[60px] bg-[#F3F3F3] my-2 animated fadeInLeftBig">
            <input name="name_clinic" type="text" placeholder="نام کلینیک پت شاپ : " class="border-2 rounded-xl py-2 px-4 w-[490px] h-[60px] bg-[#F3F3F3] my-2 animated fadeInLeftBig">
            <input name="mobile" type="text" placeholder="شماره تلفن :"  class="border-2 rounded-xl py-2 px-4 w-[490px] h-[60px] bg-[#F3F3F3] my-2 animated fadeInLeftBig">
            <input name="name_orders" type="text" placeholder="نام محصولات انتخاب شده‌ :" class="border-2 rounded-xl py-2 px-4 w-[490px] h-[200px] bg-[#F3F3F3] my-2 animated fadeInLeftBig">
        </section>

        <section id="middle-main-order" class="w-[2px] h-[500px] bg-[#0E91E3] mx-2"></section>

        <section id="right-main-order" class="w-[40%] flex items-start justify-center flex-col" dir="rtl">
            <h1 class="font-extrabold text-[#0E91E3] text-4xl mb-8 animated fadeInRightBig">ارسال سفارش</h1>
            <p id="p-order" style="line-height: 30px; font-size: 18px;" class="w-[400px] animated fadeInRightBig text-[#807f7f] mb-8">بعد از ارسال سفارش شما پشتیبانی کاکو در اولین فرصت آنها را بررسی خواهند کرد و در کمترین زمان ممکن با شما تماس میگیرند و محصول را بدستتان میرسانند.</p> 
            <div id="security" class="flex items-center justify-center mb-8 animated fadeInRightBig">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color: #0E91E3;" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                </svg>
                <p class="text-[#0E91E3]">ما اطلاعات شما رو در امنیت کامل حفظ می کنیم.</p>
            </div>
           <button name="send" id="send" class="w-[80%] animated fadeInRightBig bg-[#0E91E3] text-white rounded-2xl text-xl font-bold py-4 px-7 mb-8">ارسال فرم سفارش</button>
        </section>
    </div>

</form>
  
    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- footer order -->
    <footer class="w-[80%] m-auto h-auto flex items-center justify-between mt-16">
        <section class="flex items-center animated rollIn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color:#0E91E3" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
            </svg>
            <h2  class="text-[#0E91E3] text-2xl mx-2">0919 925 3929</h2>
        </section>

        <section class="flex items-center animated rollIn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" style="color:#0E91E3" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
            </svg>
            <h2 class="text-[#0E91E3] text-2xl mx-2">Kako.ir</h2>              
        </section>

        <section id="sec-footer-order animated rollIn">
            <p class="text-[#0E91E3] text-2xl animated rollIn" style="text-align: center;">نیاز به راهنمایی دارید؟ با ما تماس بگیرید</p>
        </section>
    </footer>
    
</body>
</html>,