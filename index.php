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
        
        
        
    
        
<!------------------------------------------- start slide show -------------------->
        
   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators hidden-xs">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
       <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img id="img" src="img/slide1.jpg" alt="الدوريات العالمية">
     
    </div>
    <div class="item">
      <img id="img"  src="https://i0.wp.com/teaser-trailer.com/wp-content/uploads/Polar-new-banner.jpg?ssl=1" alt="احدث الأفلام">
      
    </div>
       <div class="item">
      <img id="img" src="https://dumielauxepices.net/sites/default/files/one-piece-clipart-hd-wallpaper-701390-8856678.png" alt="مسلسلات الإنيمي">
      
    </div>
      
        <div class="item">
      <img id="img" src="https://cdn.wccftech.com/wp-content/uploads/2016/08/witcher-3-vr.jpg" alt="المسلسلات التاريخية">
 
    </div>
      
        <div class="item">
      <img id="img" src="https://1.bp.blogspot.com/-S1qxstnpfrk/Wc8xHGar7hI/AAAAAAAAA9Q/4UbfjPRvRT4w6Lgv4nazLqMWeqlKHh_aQCLcBGAs/s1600/bein-sport-logo-live.jpg" alt="كل البطولات بين يديك">
   
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" style="height: 400px" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" style="height: 400px" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
        <!------------------------- End slide show--------------------------------- -->
    
    
      <div class="container " style="width: 100%; background-color: black;color: white">
        <h3 class="capt">مسلسلات رمضان </h3>  
	<div class="row">
		<div class="MultiCarousel" data-items="2,3,4,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
            <div class="item">
                    <div  class="pad15">
                    <div class="itempic">  
                        <img height="600px;"  class="img-responsive animate--fade-in"class="pic"  style="" src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1165125418.jpg">
                        
                    <div class="overlay">  
                        <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>
                       </div></div>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <div class="itempic">
                        <img class="img-responsive animate--fade-in" style="" src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1165182706.jpg">
                        <div class="overlay">
                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1165529602.jpg">
                         <div class="overlay">
                            <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1165182717.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1165187143.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1165529607.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1165575241.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1163710057.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1165018396.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1163710046.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1163708705.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1163801517.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1164093167.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1165018371.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1163767875.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1163816369.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1163710021.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1165016832.jpg">
                         <div class="overlay">  <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1163710023.jpg">
                         <div class="overlay">  <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1163710059.jpg">
                         <div class="overlay">  <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a> </div>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="https://vuclipi-a.akamaihd.net/p/tthumb320x480/d-1/1163710135.jpg">
                         <div class="overlay"> <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <span class="glyphicon glyphicon-menu-left leftLst" style="font-size: 21px;line-height: 1.2;cursor: pointer"></span>
            <span class="glyphicon glyphicon-menu-right rightLst" style="font-size: 21px;line-height: 1.2; cursor: pointer"></span>
        </div>
	</div>
	<div class="row">
	</div>
</div>
    
    <!------------------------------------------------------------------------------------------------------->
        
   <div class="container " id="drama" style="width: 100%; background-color: black;color: white">
        <h3 class="capt">مسلسلات شامية </h3>  
	<div class="row">
		<div class="MultiCarousel" data-items="2,3,4,5" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
            <div class="item">
                    <div  class="pad15">
                    <div class="itempic">  
                        <img height="600px;"  class="img-responsive animate--fade-in"class="pic"  style="" src="img/jorh.jpg">
                        
                    <div class="overlay">  
                        <a href="jorh.php" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>
                       </div></div>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                        <div class="itempic">
                        <img class="img-responsive animate--fade-in" style="" src="img/bargot1.jpg">
                        <div class="overlay">
                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/bargot2.jpg">
                         <div class="overlay">
                            <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/bab1.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/bab2.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/bab3.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/bab4.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/bab5.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/bab6.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/bab7.jpeg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/bab8.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/bab9.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/otr1.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/otr2.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/otr3.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/rjal.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/wardash.jpg">
                         <div class="overlay">                             <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a>                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/alzaeem.jpg">
                         <div class="overlay">  <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/Tawok1.jpg">
                         <div class="overlay">  <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/Tawok2.jpg">
                         <div class="overlay">  <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a> </div>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                     <div class="pad15">
                       <div class="itempic"> 
                      <img class="img-responsive animate--fade-in" style=""src="img/Tawok3.jpg">
                         <div class="overlay"> <a href="#" style="text-decoration: none; color: white;" ><span class="glyphicon glyphicon-play play"></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <span class="glyphicon glyphicon-menu-left leftLst" style="font-size: 21px;line-height: 1.2;cursor: pointer"></span>
            <span class="glyphicon glyphicon-menu-right rightLst" style="font-size: 21px;line-height: 1.2; cursor: pointer"></span>
        </div>
	</div>
	<div class="row">
	</div>
</div>
    
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