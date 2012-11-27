<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="chrome=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>EMS International - Home</title>
	<link rel="stylesheet" href="css/site/hems-stylesheet.css" type="text/css" media="screen" /> <!-- Main CSS -->
    <link rel="stylesheet" href="lib/nivo-slider/nivo-slider.css" type="text/css" media="screen" /> <!-- Nivo Slider CSS -->
	<!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="lib/nav/ie.css" media="screen" />
    <![endif]-->
    
	<script type="text/javascript" language="javascript" src="lib/nav/hoverIntent.js"></script> <!-- Site Navigation -->
    <script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> <!-- Google CDN Jquery -->
    <script src="http://cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script><!-- Cufon -->
	<script src="lib/cufon/gnuolane.cufonfonts.js" type="text/javascript"></script><!-- Cufon -->
    <script type="text/javascript">
    	Cufon.replace('h2, h3, h4, h5, #current-page-desc p', { fontFamily: 'Gnuolane Free', hover: true }); 
    </script>
    <script type="text/javascript">
		$(document).ready(function(){
			//To switch directions up/down and left/right just place a "-" in front of the top/left attribute
			//Vertical Sliding
			$('.boxgrid.slidedown').hover(function(){
				$(".cover", this).stop().animate({top:'-350px'},{queue:false,duration:200});
			}, function() {
				$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:200});
			});
		});
	</script>
    <script type="text/javascript" src="lib/nivo-slider/jquery.nivo.slider.js"></script> <!-- Nivo Slider -->
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>

<body>
    <div class="container" id="top-contact">
        <div class="grid_9">&nbsp;</div>
        <div class="grid_3 top-contact-details">
        	<h4>Direct line: +632 XXX XXXX</h4>
            <h4>Mobile: +63 917 XXX XXXX</h4>
            <h4>Email: info@emsinternational.com</h4>
        </div>
    </div>
    <div class="clear"></div>
	<div id="mainbody">
    	<?php include("includes/navigation.php"); ?> 
        <!--
    	<div id="current-page">
        	<img src="images/banner/med-bell.jpg" alt="" />
            <div id="current-page-desc">
            	<h2>About Us</h2>
                <p>Sed porttitor velit rhoncus velit ornare a scelerisque velit tincidunt.</p>
            </div>
        </div> -->
        <div class="container">
        	<div class="slider-wrapper theme-default">
                <div class="ribbon"></div>
                <div id="slider" class="nivoSlider">
                    <img src="images/slider/toystory.jpg" alt="" />
                    <a href="http://dev7studios.com"><img src="images/slider/up.jpg" alt="" /></a>
                    <img src="images/slider/walle.jpg" alt="" />
                </div>
            </div>
        </div>
        
        <div class="container">
        	<div class="slogan">
            	<p>
                	<h4>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</h4>
                    <p>Nunc et libero ac neque pellentesque lacinia. Quisque ut turpis diam, id molestie quam. Nullam eros orci, tincidunt lacinia ornare at, molestie in dolor. Curabitur ipsum est, rutrum sit amet convallis ornare, aliquam eget dui.</p>
                </p>
            </div>
        	<div id="slidedown-welcome">       
                <div class="third">
                        <h3>Quality Personnel</h3>
                        <img src="images/thumbs/human_touch.jpg" alt="We Touch Lives" title="We Touch Lives" />
                        <p>Employees are one of the main foundations of a company. Their performance and services directly reflects to the image of the business. In order to provide quality service, we are very proud to inform you that the people who work for EMS Assist-Pilipinas Corp. are determined and qualified employees because we recruit, train, and retain only exceptional people who are passionate about customers. We are committed to perform beyond every customers' expectations.</p>
                        <a href="#" class="block">&raquo; See more information</a>
                </div>        
                <div class="third">
                        <h3>Dependability</h3>
                        <img src="images/thumbs/roof-top.jpg" alt="Professional Service" title="Professional Service" />
                        <p>Our responsibility is to serve our customers by providing various kinds of services to save lives and keep them in good health and shape. It is our duty to reach out to the community from different parts of the globe while giving quality service and assistance. Customers can fully rely to EMS Assist-Pilipinas Corp. that only quality service will be given every time.</p>
                        <a href="#" class="block">&raquo; See more information</a>
                </div>
                <div class="third">
                        <h3>24/7</h3>
                        <img src="images/thumbs/quality_service.jpg" alt="Quality Service" title="Quality Service" />
                        <p>EMS Assist-Pilipinas Corp. ensures that every customer will be properly served 24-hours, 7-days a week. Our well-trained employees are divided into different shifts to completely fill up the spaces around-the-clock to be able to serve you any time of the day. Our services are always ready because we believe that no one can tell when accidents will happen.</p>
                        <a href="#" class="block">&raquo; See more information</a>
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>
