<?php
    session_start();


    ?>
<!DOCTYPE html>
    <html>
        
    <head>
            <meta charset="utf-8">
    <!--MOBILE META -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register Page</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="css/Animate.css">
    <link rel="stylesheet" href="css/register.css" type="text/css"> <!-- Down strng the up -->
     <link href="https://fonts.googleapis.com/css?family=Lalezar|Rakkas|Reem+Kufi" rel="stylesheet">
    <link href="css/hover-min.css" type="text/css" rel="stylesheet">
    
        </head>
        
    <body>
    <div class="bg">
    <div class="over1">
      
    <section>
    <div class="container">
    
        <a href="#"> <div class="logo">
            <h1 class="hvr-wobble-top">Kasper <span> Live</span></h1></div> </a>
        <div class="row">
    
    <div class="col-xs-12 ">  
        <div class="over wow bounceIn" data-wow-duration="2s">
            
    <div class="pic"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>التسجيل</div>    
        
    <form action="process2.php" method="post">
    
    <input class="wow bounceInLeft"type="text" name="name1" placeholder="أدخل الإسم الاول  "><br>
        
    <input class="wow bounceInRight" type="text" name="name2" placeholder="أدخل الإسم الاخير " ><br>
        
    <input class="wow bounceInLeft"type="email" name="email" placeholder="أدخل الإيميل الخاص بك "><br>
        
    <input class="wow bounceInRight" type="password" name="password" placeholder="أدخل كلمة المرور الخاص بك" ><br>
    
    <button class="main wow bounceInUp" type="submit"> تسجيل</button>
        
       <br/><br/>
         <?php
        if(!empty ($_SESSION['error_reg']))
        {
           
             echo $_SESSION['error_reg'];
        }else{
       
        }
        
        $_SESSION['error_reg']=" "; 
        ?>    
            
        <h5 class="lin">لديك حساب بالفعل ؟<a href="login.php">  دخول </a>  </h5>
            
            
               
        </form>
        </div>
        </div>
        </div>
        </div>
    </section>    
      
        
        
        
        
        
        
        </div>
        </div>    
        
        
             
   
    <script src= "https://code.jquery.com/jquery-3.2.1.min.js" ></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="js/wow.min.js"></script>
        <script>
              new WOW().init();
              </script>


        </body>    
        
        
        
        
        </html>