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
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/page_profile_me.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:35:10 GMT -->
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
            <link rel="stylesheet" href="assets/css/pages/shortcode_timeline2.css">
            <!-- CSS Theme -->
            <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
            <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
            <!-- CSS Customization -->
            <link rel="stylesheet" href="assets/css/custom.css">
         </head>
         <body>
            <div class="wrapper">
               @include('inc.menu')
               <hr>
               <div class="heading">
                  <h2>Customer Profile</h2>
               </div>
               <section id="basicinfos">
                  <!--=== Profile ===-->
                  <div class="container content profile">
                     <div class="row">
                        <!--Left Sidebar-->
                        <div class="col-md-3 md-margin-bottom-40">
                           <div class="profile-bio">
                              <div class="row">
                                 <div class="col-md-14">
                                    <span class="change"><img class="img-responsive md-margin-bottom-10" src="assets/img/team/img32-md.jpg" alt=""></span>
                                    <a class="btn-u btn-u-sm" href="#">Change Picture</a>
                                 </div>
                              </div>
                           </div>
                           <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                              <li class="list-group-item active">
                                 <a href="/driverdashboard"><i class="fa fa-bar-chart-o"></i>Dashboard</a>
                              </li>
                              <li class="list-group-item">
                                 <a href="/customerprofile"><i class="fa fa-user"></i>My Profile</a>
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
                        <div id="concep">
                           <!-- Profile Content -->
                           <div class="col-md-9">
                              <div class="profile-body">
                                 <div class="row">
                                    <div class="row">
                                       <div class="col-md-9">
                                          <div class="panel-heading">
                                             <h3 class="panel-title">Basic Info</h3>
                                          </div>
                                          <div class="table-search-v1 margin-bottom-20">
                                             <div class="table-responsive">
                                                <table class="table ">
                                                   <tbody>

                                                 @foreach($data as $count)
                                                      <tr class="highlight">
                                                         <td class="field"><strong>Full Name</strong></td>
                                                         <td>{{$count->reg_customer_first_name}}
                                                         {{$count->reg_customer_last_name}}</td>
                                                      </tr>
                                                      <tr>
                                                        <td class="field"><strong>Phone</strong></td>
                                                         <td> {{$count->reg_mobile_number}}</td>
                                                      </tr>
                                                      <tr>
                                                         <td class="field"><strong>Email</strong></td>
                                                         <td> {{$count->reg_user_email}}</td>
                                                      </tr>
                                                      <tr>
                                                         <td class="field"><strong>Address</strong></td>
                                                         <td> {{$count->reg_customer_street}} &nbsp;
                                                         {{$count->reg_customer_location}} &nbsp;
                                                         {{$count->reg_customer_city}} &nbsp;
                                                         {{$count->reg_customer_state}}  </td>                                                        
                                                      </tr>
                                                    @endforeach

                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-md-9">
                                       <div class="panel-heading">
                                          <h3 class="panel-title">Vehicle Details</h3>
                                       </div>
                                       <div class="table-search-v1 margin-bottom-20">
                                          <div class="table-responsive">
                                             <table class="table table-hover table-bordered table-striped">
                                                <thead>
                                                   <tr>
                                                      <th>Vehicle NO.</th>
                                                      <th>Vehicle Type</th>
                                                      <th>Vehicle Make</th>
                                                      <th>Vehicle model</th>
                                                      <th>Vehicle Year</th>
                                                   </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($data as $count)
                                                   <tr>
                                                      <td>{{$count->reg_vehicle_No}} </td>
                                                      <td>{{$count->reg_vehicle_type}} </td>
                                                      <td>{{$count->reg_vehicle_make}} </td>
                                                      <td>{{$count->reg_vehicle_model}} </td>
                                                      <td>{{$count->reg_vehicle_year}} </td>
                                                   </tr>
                                                   @endforeach
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                               
                                 <div class="row">
                                    <div class="col-md-9">
                                       <div class="panel panel-green margin-bottom-40">
                                          <div class="panel-heading">
                                             <h3 class="panel-title"><i class="fa fa-phone"></i>Emergency Contact Details</h3>
                                          </div>
                                          <div class="table-search-v1 margin-bottom-20">
                                             <div class="table-responsive">
                                                <table class="table table-hover table-bordered table-striped">
                                                   <thead>
                                                      <tr>
                                                         <th>Name</th>
                                                         <th>Email</th>
                                                         <th>Contact 1</th>
                                                         <th>Contact 2</th>
                                                      </tr>
                                                   </thead>
                                                   <tbody>
                                                      <tr>
                                                      @foreach($data as $count)
                                                         <td> {{$count->reg_customer_emergency_name}}</td>
                                                         <td>{{$count->reg_customer_emergency_email}}</td>
                                                         <td>
                                                         {{$count->reg_customer_emergency_mobile}}
                                                         </td>
                                                         <td>
                                                         {{$count->reg_customer_emergency_landline}}
                                                         </td>
                                                      </tr>
                                                      @endforeach
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="commet">
                                    <div class="row">
                                       <div class="col-md-9">
                                          <div class="panel panel-profile">
                                             <div class="panel-heading overflow-h">
                                                <a href="#collapse-Seven" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle">
                                                   <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments"></i>Comment</h2>
                                                   <span class="pull-right"><i class="fa fa-plus"></i></span>
                                             </div>
                                             </a>
                                             <div class="panel-collapse collapse" id="collapse-Seven">
                                                <div class="panel-body margin-bottom-50">
                                                   <div class="media media-v2">
                                                      <a class="pull-left" href="#">
                                                      <img class="media-object rounded-x" src="assets/img/testimonials/img2.jpg" alt="">
                                                      </a>
                                                      <div class="media-body">
                                                         <h4 class="media-heading">
                                                            <strong><a href="#">Eva Nelson</a></strong> @EvaNelson
                                                            <small>About an hour ago</small>
                                                         </h4>
                                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada rhoncus tellus blandit facilisis. Morbi faucibus eros facilisis vulputate mollis. Mauris sodales ante lorem, sed fringilla orci rhoncus ac. Donec sit amet eros at libero egestas interdum non quis libero.</p>
                                                         <ul class="list-inline results-list pull-left">
                                                            <li><a href="#">25 Likes</a></li>
                                                            <li><a href="#">10 Share</a></li>
                                                         </ul>
                                                         <ul class="list-inline pull-right">
                                                            <li><a href="#"><i class="expand-list rounded-x fa fa-reply"></i></a></li>
                                                            <li><a href="#"><i class="expand-list rounded-x fa fa-heart"></i></a></li>
                                                            <li><a href="#"><i class="expand-list rounded-x fa fa-retweet"></i></a></li>
                                                         </ul>
                                                      </div>
                                                      <form action="#" class="sky-form">
                                                         <fieldset>
                                                            <section>
                                                               <label class="label"> Ratings</label>
                                                               <div class="rating">
                                                                  <input type="radio" name="stars-rating" id="stars-rating-5">
                                                                  <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                                                                  <input type="radio" name="stars-rating" id="stars-rating-4">
                                                                  <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                                                                  <input type="radio" name="stars-rating" id="stars-rating-3">
                                                                  <label for="stars-rating-3"><i class="fa fa-star"></i></label>
                                                                  <input type="radio" name="stars-rating" id="stars-rating-2">
                                                                  <label for="stars-rating-2"><i class="fa fa-star"></i></label>
                                                                  <input type="radio" name="stars-rating" id="stars-rating-1">
                                                                  <label for="stars-rating-1"><i class="fa fa-star"></i></label>
                                                               </div>
                                                            </section>
                                                         </fieldset>
                                                      </form>
                                                   </div>
                                                   <!--/end media media v2-->
                                                   <div class="media media-v2 margin-bottom-20">
                                                      <a class="pull-left" href="#">
                                                      <img class="media-object rounded-x" src="assets/img/testimonials/img3.jpg" alt="">
                                                      </a>
                                                      <div class="media-body">
                                                         <h4 class="media-heading">
                                                            <strong><a href="#">Frank Lennon</a></strong> @FLennon
                                                            <small>4 hours ago</small>
                                                         </h4>
                                                         <p>I'm incredibly excited to announce that I am joining the amazing <a href="#">@Unify</a> team. To be in touch with the latest update, Sign up and get your own Account page fee free :) Like mine: <a href="#">http://www.unify.com/flennon</a></p>
                                                         <ul class="list-inline results-list pull-left">
                                                            <li><a href="#">5 Likes</a></li>
                                                            <li><a href="#">1 Share</a></li>
                                                         </ul>
                                                         <ul class="list-inline pull-right">
                                                            <li><a href="#"><i class="expand-list rounded-x fa fa-reply"></i></a></li>
                                                            <li><a href="#"><i class="expand-list rounded-x fa fa-heart"></i></a></li>
                                                            <li><a href="#"><i class="expand-list rounded-x fa fa-retweet"></i></a></li>
                                                         </ul>
                                                         <div class="clearfix"></div>
                                                         <div class="media media-v2">
                                                            <a class="pull-left" href="#">
                                                            <img class="media-object rounded-x" src="assets/img/testimonials/img7.jpg" alt="">
                                                            </a>
                                                            <div class="media-body">
                                                               <h4 class="media-heading">
                                                                  <strong><a href="#">Edward Rooster</a></strong> @EdwardRooster
                                                                  <small>5 hours ago</small>
                                                               </h4>
                                                               <p>Welcome to Board! :) Your journey starts here. Wish you all the best!</p>
                                                               <ul class="list-inline results-list pull-left">
                                                                  <li><a href="#">0 Likes</a></li>
                                                                  <li><a href="#">0 Share</a></li>
                                                               </ul>
                                                               <ul class="list-inline pull-right">
                                                                  <li><a href="#"><i class="expand-list rounded-x fa fa-reply"></i></a></li>
                                                                  <li><a href="#"><i class="expand-list rounded-x fa fa-heart"></i></a></li>
                                                                  <li><a href="#"><i class="expand-list rounded-x fa fa-retweet"></i></a></li>
                                                               </ul>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <!--/end media media v2-->
                                                   <button type="button" class="btn-u btn-u-default btn-block">Load More</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Profile Content -->
                     </div>
                  </div>
                  <!--=== End Profile ===-->
               </section>
               <section id="commentss">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-9">
                           <h2 class="margin-bottom-20">&nbsp;Post Comment</h2>
                           <!-- Form -->
                           <form action="http://htmlstream.com/preview/unify-v1.9.6/assets/php/sky-forms-pro/demo-comment-process.php" method="post" id="sky-form3" class="sky-form comment-style">
                              <fieldset>
                                 <div class="row sky-space-30">
                                    <div class="col-md-12">
                                       <div>
                                          <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div>
                                          <input type="text" name="email" id="email" placeholder="Email" class="form-control">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="sky-space-30">
                                    <div>
                                       <textarea rows="8" name="message" id="message" placeholder="Write comment here ..." class="form-control"></textarea>
                                    </div>
                                 </div>
                                 <p class="pull-right"><button type="submit" class="btn-u">Submit</button></p>
                              </fieldset>
                              <div class="message">
                                 <i class="rounded-x fa fa-check"></i>
                                 <p>Your comment was successfully posted!</p>
                              </div>
                              <fieldset>
                                 <section class="pull-right">
                                    <label class="label"></label>
                                    <div class="rating">
                                       <input type="radio" name="stars-rating" id="stars-rating-5">
                                       <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                                       <input type="radio" name="stars-rating" id="stars-rating-4">
                                       <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                                       <input type="radio" name="stars-rating" id="stars-rating-3">
                                       <label for="stars-rating-3"><i class="fa fa-star"></i></label>
                                       <input type="radio" name="stars-rating" id="stars-rating-2">
                                       <label for="stars-rating-2"><i class="fa fa-star"></i></label>
                                       <input type="radio" name="stars-rating" id="stars-rating-1">
                                       <label for="stars-rating-1"><i class="fa fa-star"></i></label>
                                    </div>
                                 </section>
                              </fieldset>
                           </form>
                           <!-- End Form -->
                        </div>
                     </div>
                  </div>
               </section>
               <hr>
               <!--=== Footer Version 1 ===-->
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
            <script type="text/javascript" src="assets/plugins/circles-master/circles.js"></script>
            <script type="text/javascript" src="assets/plugins/sky-forms-pro/skyforms/js/jquery-ui.min.js"></script>
            <script type="text/javascript" src="assets/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>
            <!-- JS Customization -->
            <script type="text/javascript" src="assets/js/custom.js"></script>
            <!-- JS Page Level -->
            <script type="text/javascript" src="assets/js/app.js"></script>
            <script type="text/javascript" src="assets/js/plugins/datepicker.js"></script>
            <script type="text/javascript" src="assets/js/plugins/circles-master.js"></script>
            <script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
            <script type="text/javascript">
               jQuery(document).ready(function() {
                   App.init();
                   App.initScrollBar();
                   Datepicker.initDatepicker();
                   CirclesMaster.initCirclesMaster1();
                   StyleSwitcher.initStyleSwitcher();
               });
            </script>
            <!--[if lt IE 9]>
            <script src="assets/plugins/respond.js"></script>
            <script src="assets/plugins/html5shiv.js"></script>
            <script src="assets/plugins/placeholder-IE-fixes.js"></script>
            <![endif]-->
         </body>
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/page_profile_me.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:35:13 GMT -->
      </html>