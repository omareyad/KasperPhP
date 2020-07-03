<?php
session_start();

if(isset($_SESSION['email'])){
    
    
    
}else{
    
     header('Location:login.php');
}
?>
<!Doctype html>
<html>
<head >
    
    <meta charset="utf-8">
    <!--MOBILE META -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home Page</title>
    
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css/fontawesome-all.min.css" type="text/css">
    <link rel="stylesheet" href="css/homelize.css" type="text/css">
    <link rel="stylesheet" href="css/hover-min.css" type="text/css"> <!-- because change boot without damage the exisit file boot -->
    <link rel="stylesheet" href="css/Animate.css">
          
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lalezar|Rakkas|Reem+Kufi" rel="stylesheet">
    <link rel="stylesheet" href="css/homenew.css" type="text/css">
    
    <style>
    
        form{
            
            text-align: center;
            padding: 25px;
            margin-top: 100px;
            margin-bottom: 70px;
        }
        
        
        form .in{
            
                margin: 15px;
    margin-top: 10px;
    width: 250px;
    height: 30px;
    color: white;
    background: transparent;
    text-align: center;
    border-bottom: 2px solid #ce1450;
    border-right: 2px solid #ce1450;
    border-top: 2px solid #fff;
    border-left: 2px solid #fff;
    border-radius: 0px 5% 0px 5px;
        }
        form button{
    animation-name: bounceInUp;
    width: 250px;
    height: 30px;
    background: #ce1450;
    color: white;
    border: 0px;
    font-size: 16px;
    margin-top: -3px;
        }
        form h3{
            text-align: center;
            color: white;
                margin-top: 0px;
    margin-bottom: 18px;
        }
    
    
    
    </style>
    </head>

    <body style="background-color: black">
        
         <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand  hvr-wobble-top" href="index.php">Kasper <span>Live</span></a>
        

      </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">الرئيسية<span class="sr-only">(current)</span></a></li>
        <li><a href="#">قنوات الرياضة</a></li>
      <li><a href="#">قنوات المسلسلات</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">الأفلام <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">الأكشن</a></li>
            <li><a href="#drama">دراما</a></li>
            <li><a href="#">كوميدي</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">مسلسلات تاريخية</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php
        echo $_SESSION['id']."&nbsp";
        echo $_SESSION['one']."&nbsp";
         echo $_SESSION['two'];
       
        ?><span class="glyphicon glyphicon-user" style="margin-left: 5px;"></span></a>
          <ul class="dropdown-menu">
          
         <li><a href="logout.php">تسجيل الخروج</a></li>
        
           
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
        
        
        
    
        

    
   <!------------------------------------------------------------------------------------------------------------->
        
       
     
          <form action="pedit.php" method="post">
    
    <h3><span class="glyphicon">&#xe065;</span> &nbsp;تعديل معلومات الدخول </h3>          
    <input class="wow bounceInLeft in"type="text" name="name1" value="<?php  echo $_SESSION['one']?>"><br>
            
        
    <input class="wow bounceInRight in" type="text" name="name2" value="<?php  echo $_SESSION['two']?>"><br>
    
    <input class="wow bounceInRight in" type="email" name="email" value="<?php  echo $_SESSION['email']?>"><br>
    
    <input class="wow bounceInRight in" type="text" name="password" value="<?php  echo $_SESSION['res']?>"><br>
     
    <input class="wow bounceInRight in" type="password" name="password2" placeholder="ادخل كلمة المرور الحالية"><br>
    <input style="visibility: hidden; display:none;" class="wow bounceInRight" type="text" name="id" value="<?php  echo $_SESSION['id']?>"><br>
    
    <button class="main wow bounceInUp" type="submit"> حفظ</button>
        
        <br/><br/>
             <?php
        if(!empty ($_SESSION['error_email']))
        {
              echo $_SESSION['error_email'];
         
            
        }else{
      
          
        }
              $_SESSION['error_email']="";
               
        ?>
            <input type="hidden" name="error_email" value="***">      
     
        
        </form>
    
<!------------------------------------------------------------------------------------------------------------->
        
   
        
         <!-- start scroll-top div bootstrap -->  
        <div id="scroll-top">
        <i class=""></i>
        <span class="glyphicon glyphicon-menu-up hvr-Icon-pop" aria-hidden="true"></span>
        
        </div>
        
        <!-- End scroll-top div bootstrap -->
        <!-- start secion footer bootstrap -->
        <section class="footer ">
        <div class="container">
        <div class="row">
        <div class="col-lg-4">
            <h3>خريطة الموقع</h3>
            <ul class="list-unstyled three">
            <li>الرئيسية</li>
            <li>القنوات الرياضية</li>
            <li>الأفلام </li>
            <li>الإينمي</li>
            <li>المسلسلات التاريخية</li>
            <li>عن الموقع</li>
            <li>الدعم والمساعدة</li>
            <li>سياسة الخصوصية</li>
            <li>إتفاقية الإستخدام</li>
            
            </ul>
            <ul class="list-unstyled social">
            <li class="hvr-grow-shadow" ><img id="soc" src="https://positivetransitioning.org/wp-content/uploads/2017/07/ICONCRAZE-COM-Facebook-Icon-PNG.png"></li>
                <li class="hvr-grow-shadow"><img id="soc" src="https://i1.wp.com/www.vectorico.com/wp-content/uploads/2018/02/Google-Plus-Icon.png?resize=300%2C300"></li>
                <li class="hvr-grow-shadow"><img id="soc" src="http://smartdoctor.ir/wp-content/uploads/2018/11/Insta-icon.png"></li>
                <li class="hvr-grow-shadow"><img id="soc" src="http://icons.iconarchive.com/icons/martz90/circle/256/linkedin-icon.png"></li>
            
            </ul>
            </div>
            <div class="col-lg-4">
            <h3>إتصل بنا </h3>
            <ul class="list-unstyled conlist">
                <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>عمان-الأردن</li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> omareayd939@gmail.com</li>
                <li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> +96787525719</li>
                
                
                </ul>
           
            </div>
            <div class="col-lg-4">
           <h3>أهداف الموقع</h3>
            <ul class="list-unstyled conlist">
            <li>البث المباشر للمباريات والأحداث الرياضية </li>
            <li>تقديم أفضل خدمة لجميع أعضاء الموقع </li> 
            <li>عرض جميع الأفلام والمسلسلات الحصرية </li>
                
                </ul>
            </div>
            </div>    
            </div>
            <div class="copyright text-center">
            Copyright &copy; 2018 Kasper<span> Live</span>
            </div>
               </section>
        <!-- End secion footer bootstrap -->
        
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
         <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/Jqueryomar.js"></script>
        <script src="js/bootstrap.min.js"></script>
         <script src="js/indexhome.js"></script>
          <script src="js/wow.min.js"></script>
        <script>
              new WOW().init();
              </script>
    </body>
</html>