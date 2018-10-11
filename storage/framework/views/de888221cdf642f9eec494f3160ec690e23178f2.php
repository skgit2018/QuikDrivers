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
            <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>
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
            <link rel="stylesheet" href="assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">
            <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
            <link rel="stylesheet" href="assets/plugins/sky-forms-pro/skyforms/custom/custom-sky-forms.css">
            <!-- CSS Page Style -->
            <link rel="stylesheet" href="assets/css/pages/profile.css">
            <!-- CSS Theme -->
            <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
            <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
            <!-- CSS Customization -->
            <link rel="stylesheet" href="assets/css/custom.css">
            <!-- Date Time Picker Css & Js -->
            <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css" />
            <link href="assets/css/datetimepicker.css" rel="stylesheet">
            <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
            <script src="assets/js/moment-with-locales.js"></script>
            <script src="assets/js/datetimepicker.js"></script> 
         </head>
         <body>
            <div class="wrapper">
               <!--=== Header v1 ===-->
               <?php echo $__env->make('inc.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>               
               <section id="bookingForm">
                  
                  <!--=== Content Part ===-->
            <div class="container content">
            <?php echo Form::open(['url' => '/searchresults', 'method' =>'' ]); ?>

               <div class="row">
                  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                     <form class="reg-page">
                        <div class="reg-header">
                           <h4>SEARCH A DRIVER</h4>
                        </div>
      
                     
      
                        <label>Location<span class="color-red">*</span></label>
                        <input type="text" class="form-control margin-bottom-20" placeholder="Enter Your Location">
      
                        <div class="row">
                           <div class="col-sm-6">
                              <label>Form Date & Time<span class="color-red">*</span></label>
                                 <div class="login-block">
                                    <div class="input-group margin-bottom-20">
                                       <div class='input-group date' id='datetimepicker1'>
                                          <input type='text' class="form-control"  placeholder="Select Date & Time" />
                                          <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                           <div class="col-sm-6">
                             <label>To date & Time<span class="color-red">*</span></label>
                                 <div class="login-block">
                                    <div class="input-group margin-bottom-20">
                                       <div class='input-group date' id='datetimepicker2'>
                                          <input type='text' class="form-control"  placeholder="Select Date & Time" />
                                          <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
      
                        <hr>
      
                        <div class="row">
                           <div class="col-lg-6 checkbox">
                             
                           </div>
                           <div class="col-lg-6 text-right">
                              <button class="btn-u" type="submit">Search</button>
                           </div>
                        </div>
                        <?php echo Form::close(); ?>

                  </div>
               </div>
            </div><!--/container-->
            <!--=== End Content Part ===-->
                     </section>

               <br/>
               <?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>           
               </div>
            <!--/wrapper-->
          <!-- JS Global Compulsory -->
            <!-- <script type="text/javascript" src="assets/plugins/jquery/jquery.min.js"></script> -->
            <script type="text/javascript" src="assets/plugins/jquery/jquery-migrate.min.js"></script>
            <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
            <!-- JS Implementing Plugins -->
            <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
            <script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
            <script type="text/javascript" src="assets/plugins/counter/waypoints.min.js"></script>
            <script type="text/javascript" src="assets/plugins/counter/jquery.counterup.min.js"></script>
            <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
            <script type="text/javascript" src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <!-- JS Customization -->
            <script type="text/javascript" src="assets/js/custom.js"></script>
            <!-- JS Page Level -->
            <script type="text/javascript" src="assets/js/app.js"></script>
            <!-- <script type="text/javascript" src="assets/js/plugins/datepicker.js"></script> -->
            <!-- <script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script> -->
            <script type="text/javascript">
               jQuery(document).ready(function() {
                  App.init();
                  App.initCounter();
                  App.initScrollBar();
                  //Datepicker.initDatepicker();
                  //StyleSwitcher.initStyleSwitcher();
               });
            </script>
            <!--[if lt IE 9]>
            <script src="assets/plugins/respond.js"></script>
            <script src="assets/plugins/html5shiv.js"></script>
            <script src="assets/plugins/placeholder-IE-fixes.js"></script>
            <![endif]-->
            <script type="text/javascript">
               $(function () {
                   $('#datetimepicker1').datetimepicker();
               });
               $(function () {
                   $('#datetimepicker2').datetimepicker();
               });
            </script>
            <!--[if lt IE 9]>
            <script src="assets/plugins/respond.js"></script>
            <script src="assets/plugins/html5shiv.js"></script>
            <script src="assets/plugins/placeholder-IE-fixes.js"></script>
            <![endif]-->
         </body>
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/feature_header_v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:39:25 GMT -->
      </html>z