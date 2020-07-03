$('#carouselFade').carousel();
$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});



$(window).scroll(function() {
    if ($(this).scrollTop()>300)
     {
           $('.group').fadeIn(1500);
        
     }
      if ($(this).scrollTop()>400)
     {
           
             $('.group').fadeIn(1000);
         $('.group2').fadeIn(1500);
        
     }
    
      if ($(this).scrollTop()>500)
     {
           
             $('.group').fadeIn(1000);
            $('.group2').fadeIn(1200);
         $('.group3').fadeIn(1500);
         
        
     }
      if ($(this).scrollTop()>600)
     {
           
             $('.group').fadeIn(1000);
            $('.group2').fadeIn(1200);
         $('.group3').fadeIn(1500);
          $('.group4').fadeIn(1700);
         
        
     }
   
    else if ($(this).scrollTop()<280)
     {
    $('.group').fadeOut();
    $('.group2').fadeOut();
    $('.group3').fadeOut();
    $('.group4').fadeOut();
         
     }
 });





 var scrolltoop = $("#scroll-top");
    $(window).scroll(function()
{
        
    if ($(this).scrollTop() >= 700)
        {
        
        scrolltoop.show();
        
         }
        else{
            
            scrolltoop.hide();
        }
        
        
        
        
    });
    
    scrolltoop.click(function(){
        $("html,body").animate({scrollTop:10 },600);    
            
        });


$( ".ved1" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/-EEXT2VK5Sw?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved2" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/owpj3B_C4BY?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved3" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/Tssj5gn4aHA?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved4" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/nxuBqqnM-zM?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved5" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/x5gneNAY8Ms?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved6" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/pSg03PQMmVc?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved7" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/mGqWsmxohw8?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved8" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/k7FmT8ru26I?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved9" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/G1y8AD5tw2Y?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved10" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/F8sXoIJjjc8?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved11" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/0w0eZ2OTctk?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved12" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/HDwPTmLjFi8?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved13" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/iT3bSEgKJGk?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved14" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/UtPSunQ7lgU?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved15" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/7Z9O0KNjKk0?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved16" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/3JL2jtaiR08?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved17" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/gx4Ip_wcehI?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});
$( ".ved18" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/JeLS6UgoL6s?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved19" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/N2bxnKYey7s?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved20" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/tQu4NL3esFY?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved21" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/S5NXoIw-59M?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved22" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/Z84DBYBYM_0?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved23" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/bOah-qfdlXg?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved24" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/RNUGbllvCDA?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved25" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/SLT0BUoBk9c?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved26" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/GrOmpbKP7GM?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved27" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/Cc2n-ipMp2s?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved28" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/mot6PbPcHMQ?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved29" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/DZL1Jbk2uiA?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});

$( ".ved30" ).click(function() {
  $('.header').fadeOut();
    $('.link1').attr("src","https://www.youtube.com/embed/wb53VBRGGc4?&autoplay=1");
    $('.you').fadeIn();
    $(".video-part").css("margin-top", "65px");
    
});





$('.nav li a').on('click',function() {
   	 if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    	&& location.hostname == this.hostname) {
     		 var $target = $(this.hash);
     		 $target = $target.length && $target
     	 || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
       		 var targetOffset = $target.offset().top;
        $('html,body').animate({scrollTop: targetOffset},2000);
       return false;
      }
    }
  });




