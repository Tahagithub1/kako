<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="theme-color" content="#0997f0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="صفحه ورود کاکو">
    <meta name="description" content="کاکو زیر مجموعه ای از برند معروف پرسا است و تیم مدیریتی و فنی این شرکت افتخار دارد تا با بهره گیری از تکنولوژی روز و بکارگیری متد های کارآمد و همچنین انتخاب بهترین مواد اولیه و بهره منپی از کادری توانمند و با تجربه به سهم خود گامی شایسته در راه تولید محصولات جدید و بهبود کیفیت آنها برداشته و همواره رضایت کامل مشتریان عزیز را فراهم نماید">
    <meta name="robots" content="follow">

     <link rel="stylesheet" href="./tpl/login glass form.css"> 
     <link rel="website icon" type="png" href="../../assets/img/vector & icons/dog_icon.png"> 
     <link rel="stylesheet" href="../../assets/css/main.css"> 

    <title>login_admin</title>
    <style>
      .hidden{
        display: none;
      }
      
    </style>
    
  </head>

  <body>
    <div class="color"></div>
    <div class="color"></div>
    <div class="color"></div>
    <div class="box">
      <div class="squar" style="--i: 0"></div>
      <div class="squar" style="--i: 1"></div>
      <div class="squar" style="--i: 2"></div>
      <div class="squar" style="--i: 3"></div>
      <div class="squar" style="--i: 4"></div>
      <div class="container">
        <div class="header">
          <h2>Login Admin</h2>
        </div>
        <div class="form">
          <form action="index.php?action=login" method="post">
            <input name="username" type="text" placeholder="Username"/ required>
            <input name="password" type="password" placeholder="Password"/ required>
            <input name="submit" type="submit" value="Login"/>
          </form>
     
        </div>
        <?php
             if($_GET['action']=='notlogin'){
             diePage("worng username or password");
             }
            ?>
      </div>
    </div>
  </body>
</html>
