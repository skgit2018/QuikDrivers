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
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/page_profile_comments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:35:17 GMT -->
         <head>
            <title>QD Dashboard</title>
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
                @include('inc.menu')
            <!--- Customer Dashboard Start-->
            <section id="Dashboard">
                  <div class="container content profile">
                     <h2 class="head">Customer Dashboard
                     </h2>
                     <div class="row">
                        <!--Left Sidebar-->
                        <div class="col-md-3 md-margin-bottom-40">
                           <div class="profile-bio">
                              <div class="row">
                                 <div class="col-md-14">
                                    <span class="change"><img class="img-responsive md-margin-bottom-10" src="assets/img/avatar.png" alt="img"></span>
                                    <a class="btn-u btn-u-sm" href="#">Change Picture</a>
                                 </div>
                              </div>
                           </div>
                           <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                              <li class="list-group-item active">
                                 <a href="/driverdashboard"><i class="fa fa-bar-chart-o"></i>Dashboard</a>
                              </li>
                              <li class="list-group-item">
                                 <a href="/customerprofiles"><i class="fa fa-user"></i>My Profile</a>
                              </li>
                              <li class="list-group-item">
                                 <a href="/customerrides"><i class="fa fa-car"></i>My Rides</a>
                              </li>
                              <li class="list-group-item">
                                 <a href="/customerpayments"><i class="fa fa-cc-visa"></i>My Payments</a>
                              </li>
                              <li class="list-group-item">
                                 <a href="/customersettings"><i class="fa fa-cog"></i>Settings</a>
                              </li>
                           </ul>
                        </div>
                        <!--End Left Sidebar-->
                        <!-- Profile Content -->
                        <div class="col-md-9">
                           <div class="profile-body">
                              <!--Service Block v3-->
                              <div class="row margin-bottom-10">
                                 <div class="col-sm-12 sm-margin-bottom-20">
                                    <div class="service-block-v3 service-block-u">
                                       <i class="icon-users"></i>
                                       <span class="service-heading">Total Bookings</span>
                                       <span class="counter">100</span>
                                       <span class="service-heading">Booking This Month</span>
                                       <span class="counter">10</span>
                                       <div class="clearfix margin-bottom-10"></div>
                                       <div class="row margin-bottom-20">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr>
                              <!-- booking Dates Starts-->
                              <section id="daters">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="panel-heading overflow-h">
                                          <h2 class="panel-title heading-sm pull-left">
                                             </i>Book a Driver
                                          </h2>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <h4 class="margin-bottom-10">From Date & Time</h4>
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
                                          <div class="col-md-6">
                                             <h4 class="margin-bottom-10">To Date & Time</h4>
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
                                    </div>
                                 </div>
                              </section>
                              <!--- End Booking Dates-->
                              <section id="notifications">
                                 <div class="page">
                                    <h2>
                                       Notifications
                                    </h2>
                                 </div>
                                 <div class="support">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="panel panel-profile">
                                             <div class="panel-heading overflow-h">
                                                <a href="#collapse-Seven" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle">
                                                   <h2 class="panel-title heading-sm pull-left">Upcoming Bookings</h2><span class="pull-right"><i class="fa fa-plus"></i></span>
                                             </div>
                                             </a>
                                             <div class="panel-collapse collapse" id="collapse-Seven">
                                                <div class="panel-body margin-bottom-50">
                                                   <div class="media media-v2">
                                                      <a class="pull-left" href="#">
                                                      <img class="media-object rounded-x" src="assets/img/testimonials/img2.jpg" alt="">
                                                      </a>
                                                      <table class="table table-striped">
                                                         <thead>
                                                            <tr>
                                                               <th>Booking ID's</th>
                                                               <th>Time</th>
                                                               <th>Status</th>
                                                            </tr>
                                                         </thead>
                                                         <tbody>
                                                            <tr>
                                                               <td>Book5874</td>
                                                               <td> Sep 25, 2018  10AM to 2PM 4hrs booking - In Taranaka from       </td>
                                                               <td><button class="btn btn-success btn-xs">Modify</button></td>
                                                               <td><button class="btn btn-danger btn-xs">Cancel</button></td>
                                                            </tr>
                                                            <tr>
                                                               <td>Book5874</td>
                                                               <td> Sep 25, 2018  10AM to 2PM 4hrs booking - In Taranaka from       </td>
                                                               <td><button class="btn btn-success btn-xs">Modify</button></td>
                                                               <td><button class="btn btn-danger btn-xs">Cancel</button></td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                   </div>
                                                   <button type="button" class="btn-u btn-u-default btn-block">Load More</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!--/end row-->
                                 </div>
                           </div>
                        </div>
                        <!-- End Profile Content -->
                     </div>
                  </div>
                  <!--=== End Profile ===-->
                  </section>
            </div>
            </div>
            <!-- End Profile Content -->
            </div>
            </div>
            <!--/container-->
            </section>
            <!--=== End Profile ===-->


           @include('inc.footer')
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
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/page_profile_comments.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:35:17 GMT -->
      </html>