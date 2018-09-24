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
            <title>Quikdrivers</title>
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


<?php echo $__env->make('inc.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<section id="qdm">
<div class="breadcrumbs-v1">
			<div class="container">
				<span>Quikdrivers</span>
				<h1>Search Results</h1>
			</div>
		</div>
		<!--=== End Breadcrumbs v1 ===-->
	</section>

<section id="posts">
			<!--=== Content Part ===-->
		<div class="container content">
			<div class="row">
				<div class="col-md-12">
                   <!-- Check the Session Data from Search Controller -->
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

<div class="headline"><h2>Driver Profile</h2></div>

<!-- Clients Block-->
<div class="row clients-page">
    <div class="col-md-2">
    <img class="thumbnail" src="localhost:8000/public/storage/uploads/image.jpg">
    </div>
    <div class="col-md-10">
   <button onclick="myFunction()">Driver Details</button>


    <div id="profile" class="profile-edit tab-pane fade in active">
                
                
                <br>
                <dl class="dl-horizontal">
                
                    <dt class="st"><strong>Your Name </strong></dt>
                    
                    <dd>
                   <?php 
                   echo $driver_name = $driver_fname . " ". $driver_lname;
                   ?>
                       
                    </dd>
                    
                    <dt><strong>Gender </strong></dt>
                    <dd>
                    <?php 
                   echo $driver_gender = $sdata->reg_driver_gender;
                   ?>
                        <span>
                           
                        </span>
                    </dd>
                    
                    <dt><strong>Address </strong></dt>
                    <dd> 
                     <?php 
                   echo $driver_addr = $sdata->reg_driver_address;
                   echo $driver_street = $sdata->reg_driver_street;
                   echo $driver_loc = $sdata->reg_driver_location;
                   echo $driver_city = $sdata->reg_driver_city;
                   echo $driver_state = $sdata->reg_driver_state;
                   ?>
                        
                    </dd>
                    
                    <!--<dt><strong>Street </strong></dt>
                    <dd>
                    <?php 
                  
                   ?>
                       
                    </dd>
                    
                    <dt><strong>Location </strong></dt>
                    <dd>
                    <?php 
                   
                   ?>
                        
                    </dd>
                    
                    <dt><strong>City </strong></dt>
                    <dd>
                    <?php 
                   
                   ?>
                        
                    </dd>
                    
                    <dt><strong>State </strong></dt>
                    <dd>
                    <?php 
                   
                   ?>
                        
                    </dd>-->
                    
                    <dt><strong>Experience </strong></dt>
                    <dd>
                    <?php 
                   echo $driver_exp = $sdata->reg_driver_experience;
                   ?>
                        
                    </dd>
                </dl>
                <!--<button type="button" class="btn-u btn-u-default">Cancel</button>
                <button type="button" class="btn-u">Save Changes</button>-->

            </div>

    </div>
</div>
<!-- End Clients Block-->
<?php }}?>





<!-- Pagination -->
<div class="text-center md-margin-bottom-30">
    <ul class="pagination">
        <li><a href="#">«</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">»</a></li>
    </ul>
</div>

<!-- End Pagination -->
</div><!--/col-md-9-->



					
	</section>



	<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>          
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