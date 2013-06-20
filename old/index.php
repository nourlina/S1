<!DOCTYPE html>
<!--[if IE Mobile]>
   <html class="ie">
<![endif]--> 
<!--[if !(IE Mobile)]><!--> 
<html>
<!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	
	<title>SAMUEL</title> 
	<meta name="author" content="Soufiane BARAKAT">
	<meta name="description" content="Application Mobile samuel">
    <meta name="keywords" content="lina solutions, dog, application, ipad">
    <link rel="shortcut icon" href="thehotdog.png">
	<link rel="icon" href="thehotdog.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">	
	<script type="text/javascript" charset="utf-8" src="cordova-2.7.0.js"></script>
	<script type="text/javascript" charset="utf-8">
            function callWebService(){
                alert('ok');
                //create url
                var url = "http://www.linaweb.ma/hotdog/dog/export.php";
                x$.data = {};
                x$("#search_tweet_button").xhr(url,{
                                               error: function(){alert("failed"+this.responseText)},
                                               callback: function(){
                                               alert(this.responseText);
                                               //var //var jsonResponse = eval("("+this.responseText+")");
                                               // var jsonResponse= eval("("+this.responseText+")");
                                               
                                               // alert(x$("#tweet").html(tweets););
                                               var mama =  this.responseText;
                                               //x$("#tweet").html(mama);
                                               /* var tweets =  jsonResponse.query;
                                                if(tweets.length>0){
                                                //x$("#tweet").html(tweets);
                                                
                                                
                                                }*/                                               }
                                               });//end of xhr            }//end of method
            callWebService();            </script>

    
    <link href="css/royalslider.css" rel="stylesheet">
    <script src="js/jquery-1.8.3.min.js"></script>
      
        <script src="js/jquery.royalslider.min.js?v=9.3.6"></script>
      
    

    
    <link href="css/reset.css?v=1.0.4" rel="stylesheet">
    
     
        <link href="css/rs-default-inverted.css?v=1.0.4" rel="stylesheet">
     
    

    
    <style>
      #homeSlider {
  font-weight: light;
  width: 100%;
}
#homeSlider .rsThumbsHor {
  height: 30px;
  padding: 0;
}
.rsDefaultInv,
.rsDefaultInv .rsOverflow,
.rsDefaultInv .rsSlide,
.rsDefaultInv .rsVideoFrameHolder,
.rsDefaultInv .rsThumbs {
  background-color:#fff;
}
.rsDefaultInv .rsThumb.rsNavSelected {
  background: #fff;
  color:#a0d52d;border-bottom:2px solid #a0d52d;
}

.rsDefaultInv .rsThumb.rsNavSelected i{
  color:#a0d52d;border-bottom:1px solid #a0d52d;
}

#homeSlider .example-link {
  padding: 5px 12px 6px;
  color: #FFF;
  background: #FFF;
  position: absolute;
  color: #BB0202;
  right: 12px;
  bottom: 12px;
  text-decoration: none;
  font-weight: normal;
}
#homeSlider > .rsContent {
  height: 100%;overflow:hidden;
}
.royalSlider > .rsContent h1,
.royalSlider > .rsContent h2,
.royalSlider > .rsContent img,
.royalSlider > .rsContent .example-link {
  display: none;
  text-decoration: none;
  background: #C00;
  color: #FFF;
    -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0);
}

#homeSlider .example-link:hover {
  text-decoration: none;
  background: #C00;
  color: #FFF;
}
.rsWebkit3d .example-link {
  -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0);
}
#homeSlider .rsThumb {
padding-left:5px;padding-right:5px;
  height: 30px;
  cursor: pointer;
  position:relative;
  padding-top:-10px;color:#7e6510;
}
#homeSlider .rsTmb {
  text-align: center;
  margin-top: 6px;
  font-weight: light;
  font-family:arial;
}
#homeSlider .rsThumb i {
  font-style: normal;
  font-weight: light;font-size:13px;
  
}

.rsSlideTitle {
  font-size: 24px;
  padding: 11px 13px 14px;
  background: #c00;
  background: rgba(220,0,0,0.6);
  color: #FFF;
  font-weight: normal;
  margin: 0;
  line-height: 21px;
}
.rsFirstSlideTitle {
  left: 12%;
  top: 104px;

}
.rsSecondSlideTitle {
 left: 12%;
  top: 154px;
}
@media screen and (min-width: 0px) and (max-width: 960px) {
  .rsSlideTitle {
    font-size: 18px;
    padding: 10px 12px 12px;
  }
  .rsFirstSlideTitle {
    left: 8%;
    top: 84px;
  }
  .rsSecondSlideTitle {
   left: 8%;
    top: 129px;
  }
  #homeSlider .rsThumb {
    font-size: 12px;
    width: auto;
    height: 30px;
    cursor: pointer;
  }
  #homeSlider .rsTmb {
   margin-top: 6px;
  }
}
  @media screen and (min-width: 0px) and (max-width: 500px) {
  .royalSlider {
    height: 300px !important;
  }
    .rsSlideTitle {
    font-size: 14px;
    padding: 8px 10px 8px;
  }
   .rsFirstSlideTitle {
      left: 24px;
      top: 54px;
    }
    .rsSecondSlideTitle {
     left: 24px;
      top: 93px;
    }
 }

    </style>
	<!--  <link href="css/main2.css" rel="stylesheet" type="text/css" />-->

  <style type="text/css">
  #sidebar {
    width: 0px;
  }

  #content {
    width: auto;
  }
  
  </style>
    <link href="css/classe.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
<?php require("header.html"); ?>
   
      <div id="homeSlider" class="royalSlider rsDefaultInv" style="background-color:none;">l
       <div class="rsContent" data-rsDelay="2500" >
	  
             <i class="rsTmb">About me</i>
			 
			  <div style="height:30px;background-color:none;clear:both;">&nbsp;</div>
			<img class="rsImg" src="pictures/01.jpg" id='rsImg' /><?php require("form.html"); ?>
	
        <!--    <h1 class="rsABlock rsFirstSlideTitle rsSlideTitle">Bonjour</h1>
            <h2 class="rsABlock rsSecondSlideTitle rsSlideTitle" data-delay="350">& Contesssnt Slider</h2>-->
          </div>
          
          <div class="rsContent">
		  <i class="rsTmb">Home</i>
		   <div style="height:30px;background-color:none;clear:both;">&nbsp;</div>
		   
            <img class="rsImg" src="pictures/01.jpg" id='rsImgs' />
			<!--<img  src="pictures/ac.jpg" id='ac' style='width:621px;height:534px;"/>-->
			<div style='width:100%;height:100%;' id='ac'>
				<div style='width:100%;height:69%;clear:both'>
					<div style='width:63%;height:100%;float:left'>
						<div style='width:100%;height:33%;background-color:#7f8759;float:left'>qq</div>
						<div style='width:100%;height:33%;background-color:#5f5656;float:left'>qq</div>
						<div style='width:100%;height:33%;background-color:#a9a41b;float:left'>qq</div>
					</div>					
					<div style='width:37%;height:100%;float:left'>
						<div style='width:100%;height:50%;background-color:#55a1c8;clear:both'>qq</div>
						<div style='width:100%;height:50%;background-color:#877c63;clear:both'>qq</div>
					</div>					
				</div>
				<div style='width:100%;height:31%;clear:both'>
					<div style='width:34%;height:100%;background-color:#5bcdee;float:left'>qq</div>
					<div style='width:33%;height:100%;background-color:#38413b;float:left'>qq</div>
					<div style='width:33%;height:100%;background-color:#b87d71;float:left'>qq</div>
				</div>
			</div>
           <!-- <a class="example-link" href="#">View this example &#9656;<input type='text' value="pk" ></a>-->
          </div>
          
           <div class="rsContent">
		   <i  class="rsTmb">My page</i>
		   <div style="height:30px;background-color:none;clear:both;">&nbsp;</div>
		   
	<?php require("defiler.html"); ?>
  
           
          </div>
         
          <div class="rsContent"><i class="rsTmb">Friends wall</i> <div style="height:30px;background-color:none;clear:both;">&nbsp;</div>
            <a class="rsImg" href="http://dimsemenov.com/plugins/royal-slider/img/previews/home/gallery.jpg">Image Gallery</a>
            <a class="example-link" href="http://dimsemenov.com/plugins/royal-slider/gallery/">View this example &#9656;</a>
          </div>
          
          <div class="rsContent">
		  <i class="rsTmb">Leaders</i> 
		  <div style="height:30px;background-color:none;clear:both;">&nbsp;</div>
           <a class="rsImg" href="http://dimsemenov.com/plugins/royal-slider/img/previews/home/visible-nearby.jpg">Multi Gallery</a>
            <a class="example-link" href="http://dimsemenov.com/plugins/royal-slider/visible-nearby/">View this example &#9656;</a>
			
			  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>ssssssssssss  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>  <br /><font color='white'>Bonjour </font>sssssasasasas
          </div>
          
       
          
      </div>
	  
	  
   
   
  
	  
	  
    <script>
	
	
      jQuery(document).ready(function($) {
	 
  var opts = {
    controlNavigation:'thumbnails',
    imageScaleMode: 'fill',
    arrowsNav: false,
    arrowsNavHideOnTouch: true,
    fullscreen: false,
    loop: false,
    thumbs: {
      firstMargin: false,
      paddingBottom: 0
    },
	
    numImagesToPreload: 3,
    thumbsFirstMargin: false,
    autoScaleSlider: true, 
    autoScaleSliderWidth: 990,     
    autoScaleSliderHeight: 600,
    keyboardNavEnabled: true,
    navigateByClick: true,
    fadeinLoadedSlide: true,
    imgWidth: 707,
    imgHeight: 397
  };
  ///* if(!$.browser.webkit) {
    opts.imgWidth = 707;
    opts.imgHeight = 397;
	keyboardNavEnabled:true;
  //} */
  var sliderJQ = $('#homeSlider').royalSlider(opts);
var taillebis=parseFloat(document.getElementById('homeSlider').style.height.length)-2;	

var newtaille=parseFloat(document.getElementById('homeSlider').style.height.substr(0,taillebis))-30+300;	 
document.getElementById('homeSlider').style.height=newtaille+'px';

var taillebiss=parseFloat(document.getElementById('rsImg').style.height.length)-2;	
var newtailles=parseFloat((document.getElementById('rsImg').style.height.substr(0,taillebiss))/2);
document.getElementById('rsImg').style.height=newtailles+'px';
document.getElementById('rsImgs').style.height=newtailles+'px';

var taillebisss=parseFloat(document.getElementById('rsOverfloweee').style.height.length)-2;	
var newtaillesss=parseFloat(document.getElementById('rsOverfloweee').style.height.substr(0,taillebisss))+140;
document.getElementById('rsOverfloweee').style.height=newtaillesss+'px';
});

    </script>
	
	<!-- <script src="js/jquery-1.8.3.min.js" charset="utf-8"></script>-->
  <script src="jquery.lazyload.js?v=1.8.3" charset="utf-8"></script>
  <script type="text/javascript" charset="utf-8">
      $(function() {          
          $("img").lazyload({
              event : "sporty"
          });
      });
      $(window).bind("load", function() { 
          var timeout = setTimeout(function() { $("img").trigger("sporty"); }, 5000);
      });  
 
	document.getElementById('ac').style.height=$("#fale").height()+'px';
	document.getElementById('ac').style.width=$("#fale").width()+'px';
	//alert(document.getElementById('ac').style.height);
//	alert($("#fale").height());alert($("#fale").width());
  </script>
   

  
 
      
 
  </body>
</html>
