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
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	  
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="css/fontawesome-all.min.css" type="text/css">
    <link rel="stylesheet" href="css/homelize.css" type="text/css">
    <link rel="stylesheet" href="css/hover-min.css" type="text/css"> <!-- because change boot without damage the exisit file boot -->
    <link rel="stylesheet" href="css/Animate.css">
          
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lalezar|Rakkas|Reem+Kufi" rel="stylesheet">
    <link rel="stylesheet" href="css/homenew.css" type="text/css">
    
    
    <script>
    
</script>
    
    
    
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
            <li><a href="index.php#drama">دراما</a></li>
            <li><a href="#">كوميدي</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">مسلسلات تاريخية</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php
        echo $_SESSION['one']."&nbsp"; 
         echo $_SESSION['two'];
       
        ?><span class="glyphicon glyphicon-user" style="margin-left: 5px;"></span></a>
          <ul class="dropdown-menu">
        <li><a href="#">تعديل</a></li>      
         <li><a href="logout.php">تسجيل الخروج</a></li>
        
           
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
       <div style="clear: both"></div>
        <div style="width: 100%; height: 73px"></div>
<!------------------------------------------- start slide show -------------------->

        <!-- 21:9 aspect ratio -->
            <div id="container" class="you" style="display: none">
  <div id="monitor">
    <div id="monitorscreen">
      <div class="embed-responsive embed-responsive-21by9 " >
  <iframe class="embed-responsive-item link1" src="https://www.youtube.com/embed/-EEXT2VK5Sw" allowfullscreen></iframe>
</div>
      
      </div>
  </div>
</div>
        
        
        
        <div class="header" style="position: relative;">
            <img class="img-responsive" src="img/jorhcover.jpg">
        <div class="overlay" style="display: block">
       <div class="intro" style="text-align: right; color: white;"> 
           <h1 class="caption">مسلسل جرح الورد </h1>
           <br><br><br><br>
           <h3 class="par">دراما 2019</h3>
           
           
        
            </div>    
            </div>
      </div>
        
        
        
  <div style="clear: both"></div>
        <!------------------------- End slide show--------------------------------- -->
    <!------------------------- End slide video--------------------------------- -->
        
        <div class="video-part">
        <div class="container">
        <div class="row">
            <div class="vedio-items">
            
            <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved6"></span></a>
                <h4>الحلقة 6</h4>
                </div>
                
            </div>
            
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved5"></span></a>
                <h4>الحلقة 5</h4>
                </div>
                
            </div>
            
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved4"></span></a>
                <h4>الحلقة 4</h4>
                </div>
                
            </div>
            
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved3"></span></a>
                <h4>الحلقة 3</h4>
                </div>
                
            </div>
            
                
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved2"></span></a>
                <h4>الحلقة 2</h4>
                </div>
                
            </div>
            
                
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved1"></span></a>
                <h4>الحلقة 1</h4>
                </div>
                
            </div>
            
            <!---------------------------6 video---------------------------------------------------------------------->    
             
                
                <div class="group">
            <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved12"></span></a>
                <h4>الحلقة 12</h4>
                </div>
                
            </div>
            
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved11"></span></a>
                <h4>الحلقة 11</h4>
                </div>
                
            </div>
            
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved10"></span></a>
                <h4>الحلقة 10</h4>
                </div>
                
            </div>
            
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved9"></span></a>
                <h4>الحلقة 9</h4>
                </div>
                
            </div>
            
                
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved8"></span></a>
                <h4>الحلقة 8</h4>
                </div>
                
            </div>
            
                
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved8"></span></a>
                <h4>الحلقة 7</h4>
                </div>
                
            </div>
            
            <!---------------------------6 video---------------------------------------------------------------------->    
             
            </div>
                
                
                
              <!---------------------------6 video---------------------------------------------------------------------->    
             
                
                <div class="group2">
            <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved18"></span></a>
                <h4>الحلقة 18</h4>
                </div>
                
            </div>
            
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved17"></span></a>
                <h4>الحلقة 17</h4>
                </div>
                
            </div>
            
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved16"></span></a>
                <h4>الحلقة 16</h4>
                </div>
                
            </div>
            
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved15"></span></a>
                <h4>الحلقة 15</h4>
                </div>
                
            </div>
            
                
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved14"></span></a>
                <h4>الحلقة 14</h4>
                </div>
                
            </div>
            
                
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved13"></span></a>
                <h4>الحلقة 13</h4>
                </div>
                
            </div>
            
            <!---------------------------6 video---------------------------------------------------------------------->    
             
            </div>    
                
                
             <!---------------------------6 video---------------------------------------------------------------------->    
             
                
                <div class="group3">
            <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved24"></span></a>
                <h4>الحلقة 24</h4>
                </div>
                
            </div>
            
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved23"></span></a>
                <h4>الحلقة 23</h4>
                </div>
                
            </div>
            
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved22"></span></a>
                <h4>الحلقة 22</h4>
                </div>
                
            </div>
            
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved21"></span></a>
                <h4>الحلقة 21</h4>
                </div>
                
            </div>
            
                
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved20"></span></a>
                <h4>الحلقة 20</h4>
                </div>
                
            </div>
            
                
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved19"></span></a>
                <h4>الحلقة 19</h4>
                </div>
                
            </div>
            
            <!---------------------------6 video---------------------------------------------------------------------->    
             
            </div>      
                
                
                
                
             <!---------------------------6 video---------------------------------------------------------------------->    
             
                
                <div class="group4">
            <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved30"></span></a>
                <h4>الحلقة 30</h4>
                </div>
                
            </div>
            
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved29"></span></a>
                <h4>الحلقة 29</h4>
                </div>
                
            </div>
            
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved28"></span></a>
                <h4>الحلقة 28</h4>
                </div>
                
            </div>
            
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved27"></span></a>
                <h4>الحلقة 27</h4>
                </div>
                
            </div>
            
                
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved26"></span></a>
                <h4>الحلقة 26</h4>
                </div>
                
            </div>
            
                
                
                <div class=" video-item col-lg-2  col-md-3 col-sm-4 col-xs-6 itempic ">
            <img class="img-responsive" style="position: relative;" src="img/jorhved.jpg">
              
            <div class=" hvr-shutter-in-horizontal overlay playtext">
                <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play1 ved25"></span></a>
                <h4>الحلقة 25</h4>
                </div>
                
            </div>
            
            <!---------------------------6 video---------------------------------------------------------------------->    
             
            </div>        
                
                
                
            
                </div>
            </div>    
            </div>
            
        </div>
        
        <!------------------------- End slide vedio--------------------------------- -->
    
       <!-- start scroll-top div bootstrap -->  
        <div id="scroll-top">
        
        <span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span>
        
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
         <script src="js/jquery.nicescroll.js"></script>
        <script src="js/Jqueryomar.js"></script>
        <script src="js/bootstrap.min.js"></script>
         <script src="js/indexhome.js"></script>
          <script src="js/wow.min.js"></script>
        <script>
              new WOW().init();
              </script>
    </body>
</html>