<!DOCTYPE html>
<!--[if IE 8]> 
<html lang="en" class="ie8">
   <![endif]-->
   <!--[if !IE]><!-->
   <html lang="en">
      <!--<![endif]-->
      <!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/extra_search_results.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2016 12:11:30 GMT -->
      <head>
         <meta charset="utf-8" />
         <title>Quikdrivers</title>
         <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
         <meta content="" name="description" />
         <meta content="" name="author" />
         <!-- ================== BEGIN BASE CSS STYLE ================== -->
         <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
         <link href="assets/pluginss/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
         <link href="assets/pluginss/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
         <link href="assets/pluginss/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
         <link href="assets/csss/animate.min.css" rel="stylesheet" />
         <link href="assets/csss/style-responsive.min.css" rel="stylesheet" />
         <link href="assets/csss/theme/default.css" rel="stylesheet" id="theme" />
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
         <!-- CSS Theme -->
         <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
         <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
         <!-- CSS Customization -->
         <link rel="stylesheet" href="assets/css/custom.css">
         <!-- ================== END BASE CSS STYLE ================== -->
         <!-- ================== BEGIN BASE JS ================== -->
         <script src="assets/pluginss/pace/pace.min.js"></script>
         <!-- ================== END BASE JS ================== -->
      </head>
      <body>
         <!-- begin #page-loader -->
         <!-- end #page-loader -->
         <!-- begin #page-container -->
         <!-- begin #header -->
         <div class="wrapper">
           <?php echo $__env->make('inc.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- begin #sidebar -->
             <section id="driverdetail">

               <div class="container">

                  <div class="row">
                        <div class="y">
                        <div class="panel-heading overflow-h">
                        <h2 class="panel-title heading-sm pull-left">Driver Pool</h2></div>
                    </div>
                  <div class="col-md-12">
                  <div class="table-search-v2">
                     <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>Driver Image</th>
                                 <th>FullName</th>
                                 <th>Age</th>
                                 <th>Languages</th>
                                 <th>Rides</th>
                                 <th>Per day Charge(or)Salary</th>
                                 <th>Per Month Charge(or)Salary</th>
                                 <th>Experience</th>
                                 <th>Rating</th>
                                 <th>Status</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <img class="rounded-x" src="assets/img/testimonials/img1.jpg" alt="">
                                 </td>
                                 <td>Ramakrishna</td>
                                 <td>24</td>
                                 <td class="td">Hindi Telugu English </td>
                                 <td>20</td>
                                 <td>$500</td>
                                 <td>$15,000</td>
                                 <td>5</td>
                                 <td class="td-width">
                                 <span class="item">
                                 <i class="fa fa-star-half-o"></i>
                                 <i class="fa fa-star-half-o"></i>
                                 <i class="fa fa-star-half-o"></i>
                                 <i class="fa fa-star-half-o"></i>
                                 <i class="fa fa-star-half-o"></i>  
                              </span>
                              </td>
                              <td class="sss"><button class="btn-u btn-block btn-u-blue btn-u-xs">Book Now</button>
                                  <button class="btn-u btn-block btn-u-blue btn-u-xs">View Details</button></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  </div>
                  
                  </div>
               </div>

               
            </section>


<hr>
<?php echo $__env->make('inc.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>
         <!-- end page container -->
         <!-- ================== BEGIN BASE JS ================== -->
         <script src="assets/pluginss/jquery/jquery-1.9.1.min.js"></script>
         <script src="assets/pluginss/jquery/jquery-migrate-1.1.0.min.js"></script>
         <script src="assets/pluginss/jquery-ui/ui/minified/jquery-ui.min.js"></script>
         <script src="assets/pluginss/bootstrap/js/bootstrap.min.js"></script>
         <!--[if lt IE 9]>
         <script src="assets/crossbrowserjs/html5shiv.js"></script>
         <script src="assets/crossbrowserjs/respond.min.js"></script>
         <script src="assets/crossbrowserjs/excanvas.min.js"></script>
         <![endif]-->
         <script src="assets/pluginss/slimscroll/jquery.slimscroll.min.js"></script>
         <script src="assets/pluginss/jquery-cookie/jquery.cookie.js"></script>
         <!-- ================== END BASE JS ================== -->
         <!-- ================== BEGIN PAGE LEVEL JS ================== -->
         <script src="assets/jss/apps.min.js"></script>
         <!-- ================== END PAGE LEVEL JS ================== -->
         <script>
            $(document).ready(function() {
                App.init();
            });
         </script>
         <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-53034621-1', 'auto');
            ga('send', 'pageview');
         </script>
      </body>
      <!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/extra_search_results.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Jan 2016 12:11:30 GMT -->
   </html>