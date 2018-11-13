<!DOCTYPE html>
<!--[if IE 8]> 
<html lang="en" class="ie8">
   <![endif]-->
   <!--[if IE 9]> 
   <html lang="en" class="ie9">
      <![endif]-->
      <!--[if !IE]><!--> 
      <html lang="en">
         <!--<![endif]-->
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/feature_header_v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:39:25 GMT -->
         <head>
            <title>Quikdrivers Search Results</title>
            <!-- Meta -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- Favicon -->
            <link rel="shortcut icon" href="favicon.ico">
            <!-- Web Fonts -->
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin">
            <!-- CSS Global Compulsory -->
            <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/style.css">
            <!-- CSS Header and Footer -->
            <link rel="stylesheet" href="assets/css/headers/header-v1.css">
            <link rel="stylesheet" href="assets/css/footers/footer-v1.css">
            <!-- CSS Implementing Plugins -->
            <link rel="stylesheet" href="assets/plugins/animate.css">
            <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
            <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="assets/plugins/parallax-slider/css/parallax-slider.css">
            <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
            <link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
            <link rel="stylesheet" href="assets/plugins/brand-buttons/brand-buttons.css">
            <!-- CSS Page-->
            <link rel="stylesheet" href="assets/css/pages/page_log_reg_v4.css">
            <link rel="stylesheet" href="assets/css/pages/page_clients.css">
            <!-- CSS Theme -->
            <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
            <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
            <!-- CSS Customization -->
            <link rel="stylesheet" href="assets/css/custom.css">
         </head>
         <body>
            <div class="wrapper">


@include('inc.menu')
<section id="qdm">
<div class="breadcrumbs-v1">
			<div class="container">
				<span>Quikdrivers</span>
				<h1>Search Results</h1>
			</div>
		</div>
		<!--=== End Breadcrumbs v1 ===-->
	</section>
<hr>
<section id="driverdetail">
<div class="y">
                        <div class="panel-heading overflow-h">
                        <h2 class="panel-title heading-sm pull-left">Driver Pool</h2></div>
                    </div>
<div class="container">
<?php if(Session::has('search')){                
             $searchdata = Session::get('search');            
             foreach($searchdata as $sdata){
                 $driver_image = $sdata->reg_driver_image;
                 $driver_fname = $sdata->reg_driver_firstname;
                 $driver_lname = $sdata->reg_driver_lastname;
                 $driver_name = $driver_fname . " ". $driver_lname;
                 $driver_gender = $sdata->reg_driver_gender;
                 $driver_addr = $sdata->reg_driver_address;
                 $driver_street = $sdata->reg_driver_street;
                 $driver_loc = $sdata->reg_driver_location;
                 $driver_city = $sdata->reg_driver_city;
                 $driver_state = $sdata->reg_driver_state;
                 $driver_exp = $sdata->reg_driver_experience;

           
           ?>
   <div class="row">
   

        
      
     
     <div class="col-md-2">
     <?php
               echo $driver_image = $sdata->reg_driver_image;
               ?>
     </div>
    
   <div class="col-md-4">
   
              <dl class="dl-horizontal">
               <dt><strong>Your name:</strong></dt>
               <dd>
               <?php
               echo $driver_name = $driver_fname . " ". $driver_lname;
               ?>
                  
               </dd>
               
               <dt><strong>Gender:</strong></dt>
               <dd>
               <?php
               echo $driver_gender = $sdata->reg_driver_gender;
               ?>
                 
               </dd>
               
               <dt><strong>Address:</strong></dt>
               <dd>
               <?php
               echo $driver_addr = $sdata->reg_driver_address;
               ?>
                  
               </dd>
               
               <dt><strong>City:</strong></dt>
               <dd>
               <?php
               echo $driver_city = $sdata->reg_driver_city;
               ?>
                  
               </dd>
             
               <dt><strong>Experience:</strong></dt>
               <dd>
               <?php
               echo $driver_exp = $sdata->reg_driver_experience;
               ?>
                  
               </dd>
               
               <dt><strong>State:</strong></dt>
               <dd>
               <?php
               echo $driver_exp = $sdata->reg_driver_state;
               ?>
                 
               </dd>
              
               <dt><strong></strong></dt>
               <dd>
                  
                  
               </dd>
              
            </dl>
                  
   </div>
 
   
   <div class="col-md-2">
      <ul class="deatilsdrivers">
      <li><a href="/booking/user"><button class="btn-u btn-u-dark" type="button">Book Now</button></a></li>
      <li><a href="driverdetails"><button class="btn-u btn-u-dark" type="button">View More</button></a></li>
   </ul>
   </div>
   
  
  
</div>
<br/>
<?php }}?>

</div>


</section>

<hr>
	@include('inc.footer')          
	 </div>
            <!--/wrapper-->
            <!-- JS Global Compulsory -->
            <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script>
            <script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
            <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
            <!-- JS Implementing Plugins -->
            <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
            <script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
            <script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
            <script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
            <script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
            <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
	        <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.validate.min.js"></script>
	        <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery.maskedinput.min.js"></script>
            <!--Slider JS -->
            <script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
            <script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
            <script type="text/javascript" src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
            <script type="text/javascript" src="assets/plugins/jquery.parallax.js"></script>
            <!-- JS Customization -->
            <script src="assets/js/custom.js"></script>
            <!-- JS Page Level -->
            <script type="text/javascript" src="assets/js/app.js"></script>
            <script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>
            <script type="text/javascript" src="assets/js/plugins/parallax-slider.js"></script>
            <script type="text/javascript">
               jQuery(document).ready(function() {
                  App.init();
                OwlCarousel.initOwlCarousel();
                ParallaxSlider.initParallaxSlider();
                  
               });
            </script>
            <script>
function myFunction() {
    location.replace('/driverdetails')
}
</script>
            <!--[if lt IE 9]>
            <script src="assets/plugins/respond.js"></script>
            <script src="assets/plugins/html5shiv.js"></script>
            <script src="assets/plugins/placeholder-IE-fixes.js"></script>
            <![endif]-->
         </body>
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/feature_header_v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:39:25 GMT -->
      </html>