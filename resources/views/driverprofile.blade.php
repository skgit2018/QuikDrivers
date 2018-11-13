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
        <section id="basicinfos">
            <!--=== Profile ===-->
            <?php if(Session::has('driverprofiles')){                
             $driverprofil = Session::get('driverprofiles');            
             foreach($driverprofil as $sdata){
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
                 $driver_contact = $sdata->reg_driver_verification_name;
                 $driver_contact = $sdata->reg_driver_verification_email;
                 $driver_contact = $sdata->reg_driver_verification_mobile;
                 $driver_contact = $sdata->reg_driver_verification_landline;
                 $driver_contact = $sdata->reg_driver_nominee1_name;
                 $driver_contact = $sdata->reg_driver_nominee1_email;
                 $driver_contact = $sdata->reg_driver_nominee1_mobile;
                 $driver_contact = $sdata->reg_driver_nominee1_address;
                 $driver_contact = $sdata->reg_driver_nominee2_name;
                 $driver_contact = $sdata->reg_driver_nominee2_email;
                 $driver_contact = $sdata->reg_driver_nominee2_mobile;
                 $driver_contact = $sdata->reg_driver_nominee2_address;
                 $driver_contact = $sdata->reg_driver_nominee3_name;
                 $driver_contact = $sdata->reg_driver_nominee3_email;
                 $driver_contact = $sdata->reg_driver_nominee3_mobile;
                 $driver_contact = $sdata->reg_driver_nominee3_address;
                 $driver_contact = $sdata->reg_driver_emergency_name;
                 $driver_contact = $sdata->reg_driver_emergency_email;
                 $driver_contact = $sdata->reg_driver_emergency_mobile;
                 $driver_contact = $sdata->reg_driver_emergency_landline;


           
           ?> 
            <div class="container content profile">
           
                <div class="row">
                    <!--Left Sidebar-->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="profile-bio">
                            <div class="row">
                                <div class="col-md-14">
                                    <span class="chamge"><img class="img-responsive md-margin-bottom-10" src="assets/img/team/img32-md.jpg" alt=""></span>
                                    <a class="btn-u btn-u-sm" href="/driververification">Change Picture</a>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group sidebar-nav-v1 margin-bottom-40" id="sidebar-nav-1">
                           <li class="list-group-item ">
                              <a href="/driverdashboard"><i class="fa fa-bar-chart-o"></i>Dashboard</a>
                           </li>
                           <li class="list-group-item active">
                              <a href="/driverprofiles"><i class="fa fa-user"></i>My Profile</a>
                           </li>
                           <li class="list-group-item">
                              <a href="/driverrides"><i class="fa fa-car"></i>My Rides</a>
                           </li>
                           <li class="list-group-item">
                              <a href="/driverpayments"><i class="fa fa-cc-visa"></i>My Payments</a>
                           </li>
                           <li class="list-group-item">
                              <a href="/driversettings"><i class="fa fa-cog"></i>Settings</a>
                           </li>
                        </ul>
                    </div>
                    <!--End Left Sidebar-->
                   
                    <div id="concep">
                    
                        <!-- Profile Content -->
                        <div class="col-md-9">
                            <div class="profile-body">

                                <div class="row">
                                     <div class="col-md-9">
                                    <div class="panel panel-red margin-bottom-40">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-user"></i> Basic info</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-search-v1 margin-bottom-20">
                                                <div class="table-responsive">
                                                    <table class="table table-hover table-bordered table-striped">

                                                                                                             <tbody>
                                                            <tr class="highlight">
                                                                <td class="field">Full Name</td>
                                                                <td> <?php
                                                                echo$driver_name = $driver_fname . " ". $driver_lname;
                                                                ?></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="field">Age</td>
                                                                <td> 30</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="field">Languages</td>
                                                                <td>Hindi ,English ,Telugu</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="field">Rides</td>
                                                                <td>20</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="field">Per day Salary(or)Charge</td>
                                                                <td> $500
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="field">Per Month Salary(or)Charge</td>
                                                                <td> $15000
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="field">Experience</td>
                                                                <td>30</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="field">Rating</td>
                                                                <td> <span class="item">
                                 <i class="fa fa-star-half-o"></i>
                                 <i class="fa fa-star-half-o"></i>
                                 <i class="fa fa-star-half-o"></i>
                                 <i class="fa fa-star-half-o"></i>
                                 <i class="fa fa-star-half-o"></i>  
                              </span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-md-9">
                                    <div class="panel panel-green margin-bottom-40">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-phone"></i>Contact Details</h3>
                                        </div>
                                        <div class="panel-body">

                                        </div>
                                        <div class="table-search-v1 margin-bottom-20">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered table-striped">
                                                    <thead>
                                                        <tr>

                                                            <th>Address</th>
                                                            <th>Email</th>
                                                            <th>Contact</th>
                                                            <th>Emergency Contact</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><?php
                                                                echo$driver_addr = $sdata->reg_driver_address;
                                                                echo$driver_street = $sdata->reg_driver_street;
                                                                echo$driver_loc = $sdata->reg_driver_location;
                                                                echo$driver_city = $sdata->reg_driver_city;
                                                                echo$driver_state = $sdata->reg_driver_state;
                                                                ?></td>
                                                            <td><?php
                                                                echo$driver_contact = $sdata->reg_driver_verification_email;
                                                                ?></td>
                                                            <td><?php
                                                                echo$driver_contact = $sdata->reg_driver_verification_mobile;
                                                                ?></td>
                                                            <td><?php
                                                                echo$driver_contact = $sdata->reg_driver_verification_landline;
                                                                ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php
                                                                echo$driver_addr = $sdata->reg_driver_address;
                                                                echo$driver_street = $sdata->reg_driver_street;
                                                                echo$driver_loc = $sdata->reg_driver_location;
                                                                echo$driver_city = $sdata->reg_driver_city;
                                                                echo$driver_state = $sdata->reg_driver_state;
                                                                ?></td>
                                                            <td><?php
                                                                echo$driver_contact = $sdata->reg_driver_verification_email;
                                                                ?></td>
                                                            <td><?php
                                                                echo$driver_contact = $sdata->reg_driver_verification_mobile;
                                                                ?></td>
                                                            <td><?php
                                                                echo$driver_contact = $sdata->reg_driver_verification_landline;
                                                                ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php
                                                                echo$driver_addr = $sdata->reg_driver_address;
                                                                echo$driver_street = $sdata->reg_driver_street;
                                                                echo$driver_loc = $sdata->reg_driver_location;
                                                                echo$driver_city = $sdata->reg_driver_city;
                                                                echo$driver_state = $sdata->reg_driver_state;
                                                                ?></td>
                                                            <td><?php
                                                                echo$driver_contact = $sdata->reg_driver_verification_email;
                                                                ?></td>
                                                            <td><?php
                                                                echo$driver_contact = $sdata->reg_driver_verification_mobile;
                                                                ?></td>
                                                            <td><?php
                                                                echo$driver_contact = $sdata->reg_driver_verification_landline;
                                                                ?></td>
                                                        </tr>
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
                                        <h3 class="panel-title">References</h3>
                                    </div>
                                    <div class="table-search-v1 margin-bottom-20">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>References</th>

                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Contact</th>
                                                        <th>Emergency Contact</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#">Reference1</a>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee1_name;
                                                        ?>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee1_email;
                                                        ?>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee1_mobile;
                                                        ?>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee1_address;
                                                        ?>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">Reference2</a>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee2_name;
                                                        ?>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee2_email;
                                                        ?>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee2_mobile;
                                                        ?>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee2_address;
                                                        ?>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">Reference3</a>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee3_name;
                                                        ?>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee3_email;
                                                        ?>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee3_mobile;
                                                        ?>
                                                        </td>
                                                        <td>
                                                        <?php echo$driver_contact = $sdata->reg_driver_nominee3_address;
                                                        ?>
                                                        </td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!---End row-->

                                <div class="row">
                                    <div class="col-md-9">
                                    <div class="panel panel-green margin-bottom-40">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="fa fa-phone"></i>Emergency Contact Details</h3>
                                        </div>
                                        <div class="panel-body">

                                        </div>
                                        <div class="table-search-v1 margin-bottom-20">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered table-striped">
                                                    <thead>
                                                        <tr>

                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Landline</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
<tr>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_name;?></td>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_email;?></td>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_mobile;?></td>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_landline;?></td>
</tr>
<tr>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_name;?></td>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_email;?></td>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_mobile;?></td>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_landline?></td>
</tr>
<tr>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_name;?></td>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_email;?></td>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_mobile;?></td>
<td><?php echo$driver_contact = $sdata->reg_driver_emergency_landline;?></td>
</tr>

                                                    </tbody>
                                                </table>
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

        <section id="user-comments">
            <div class="panel panel-profile">
                <div class="panel-heading overflow-h">
                    <a href="#collapse-Seven" data-parent="#accordion-v1" data-toggle="collapse" class="accordion-toggle">
                        <h2 class="panel-title heading-sm pull-left"><i class="fa fa-comments"></i>Users Comments</h2>
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
            <!--End Timeline-->
        </section>
        <section id="commentss">

            <div class="container content-sm">
                <div class="row">
                    <!-- Blog All Posts -->

                    <!-- End News v3 -->

                    <h2 class="margin-bottom-20">Post a Comment</h2>
                    <!-- Form -->
                    <form action="http://htmlstream.com/preview/unify-v1.9.6/assets/php/sky-forms-pro/demo-comment-process.php" method="post" id="sky-form3" class="sky-form comment-style">
                        <fieldset>
                            <div class="row sky-space-30">
                                <div class="col-md-6">
                                    <div>
                                        <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
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

                            <p>
                                <button type="submit" class="btn-u">Submit</button>
                            </p>
                        </fieldset>

                        <div class="message">
                            <i class="rounded-x fa fa-check"></i>
                            <p>Your comment was successfully posted!</p>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
                <!-- End Blog All Posts -->

                <!-- Blog Sidebar -->

                <!-- End Blog Sidebar -->
                <?php }}?>
            </div>
            
    </div>
   
    <!--/end container-->

    </section>
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