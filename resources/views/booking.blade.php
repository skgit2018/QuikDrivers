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
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/page_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:35:08 GMT -->
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
            <link rel="stylesheet" href="assets/css/pages/page_faq1.css">
            <!-- CSS Theme -->
            <link rel="stylesheet" href="assets/css/theme-colors/default.css" id="style_color">
            <link rel="stylesheet" href="assets/css/theme-skins/dark.css">
            <!-- CSS Customization -->
            <link rel="stylesheet" href="assets/css/custom.css">
            <link rel="stylesheet" href="assets/css/bootstap.css">
            
            <!-- Date Time Picker Css & Js -->
            <link rel="stylesheet" type="text/css" media="screen" href="assets/css/bootstrap.min.css" />
            <link href="assets/css/datetimepicker.css" rel="stylesheet">
            <script type="text/javascript" src="assets/js/jquery-2.1.1.min.js"></script>
            <script src="assets/js/moment-with-locales.js"></script>
            <script src="assets/js/datetimepicker.js"></script> 
            <script src="assets/js/map.js"></script> 
         </head>
         <body>
            <div class="wrapper">
            <!--=== Header ===-->
@include('inc.menu')
               <!--=== End Header ===-->
               <!--===Booking From Start ===-->
               <hr>
               <section id="bookingForm">
                  <div class="container content faq-page">
                     <!-- FAQ Content -->
                     <div class="row">
                        <!-- Begin Tab v1 -->
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                           <div class="tab-v1">
                              <ul class="nav nav-tabs margin-bottom-20">
                                 <li class="active"><a data-toggle="tab" href="#profile">SEARCH A DRIVER</a></li>
                                 <li><a data-toggle="tab" href="#profile">BOOK A CAB</a></li>
                              </ul>
                              <div class="tab-content">
                                 <!-- Tab Content 1 -->
                                 <div id="profile" class="tab-pane fade in active">
                                    <div id="accordion-v1" class="panel-group acc-v1">
                                       <div class="panel panel-default">
                                          <div class="panel-collapse collapse in" id="collapse-One">
                                             <div class="panel-body">
                                                <label>Location<span class="color-red">*</span></label>
                                                <div class="pac-card" id="pac-card">
                                                   <div id="pac-container">
                                                      <input id="pac-input" class="form-control margin-bottom-" type="text"
                                                         placeholder="Enter a location">
                                                   </div>
                                                </div>
                                                <div id="map"></div>
                                                <div id="infowindow-content">
                                                   <img src="" width="16" height="" id="place-icon">
                                                   <span id="place-name"  class="title"></span><br>
                                                   <span id="place-address"></span>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <label>Form Date <span class="color-red">*</span></label>
                                                      <div class="form-group">
                                                         <div class="input-group date" id="dp3"  data-date-format="mm-dd-yyyy">
                                                            <input name="date" class="form-control" type="text" value="">
                                                            <span class="input-group-addon btn"><i class="glyphicon glyphicon-calendar" id="butt"></i></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class='col-sm-6'>
                                                      <label>From Time<span class="color-red">*</span></label>
                                                      <div class="form-group">
                                                         <div class='input-group ' id='datetimepicker5'>
                                                            <input type='text' class="form-control" />
                                                            <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <label>To Date <span class="color-red">*</span></label>
                                                      <div class="form-group">
                                                         <div class="input-group date" id="dp3"  data-date-format="mm-dd-yyyy">
                                                            <input name="date" class="form-control" type="text" value="">
                                                            <span class="input-group-addon btn"><i class="glyphicon glyphicon-calendar" id="butt"></i></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class='col-sm-6'>
                                                      <label>To Time<span class="color-red">*</span></label>
                                                      <div class="form-group">
                                                         <div class='input-group ' id='datetimepicker6'>
                                                            <input type='text' class="form-control" />
                                                            <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="pull-right">
                                                      <button class="btn-u" type="submit">Search</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- End Tab Content 1 -->
                                 <!-- Tab Content 2 -->
                                 <div id="profile" class="tab-pane fade">
                                    <div id="accordion-v2" class="panel-group acc-v1">
                                       <div class="panel panel-default">
                                          <div class="panel-collapse collapse in" id="collapse-One">
                                             <div class="panel-body">
                                                <div class="pac-card" id="pac-card">
                                                   <div id="pac-container">
                                                      <input id="pac-input" class="form-control margin-bottom-" type="text"
                                                         placeholder="Enter a location">
                                                   </div>
                                                </div>
                                                <div id="map"></div>
                                                <div id="infowindow-content">
                                                   <img src="" width="16" height="16" id="place-icon">
                                                   <span id="place-name"  class="title"></span><br>
                                                   <span id="place-address"></span>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <label>Form Date <span class="color-red">*</span></label>
                                                      <div class="form-group">
                                                         <div class="input-group date" id="dp3"  data-date-format="mm-dd-yyyy">
                                                            <input name="date" class="form-control" type="text" value="">
                                                            <span class="input-group-addon btn"><i class="glyphicon glyphicon-calendar" id="butt"></i></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class='col-sm-6'>
                                                      <label>From Time<span class="color-red">*</span></label>
                                                      <div class="form-group">
                                                         <div class='input-group ' id='datetimepicker8'>
                                                            <input type='text' class="form-control" />
                                                            <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-sm-6">
                                                      <label>To Date <span class="color-red">*</span></label>
                                                      <div class="form-group">
                                                         <div class="input-group date" id="dp3"  data-date-format="mm-dd-yyyy">
                                                            <input name="date" class="form-control" type="text" value="">
                                                            <span class="input-group-addon btn"><i class="glyphicon glyphicon-calendar" id="butt"></i></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class='col-sm-6'>
                                                      <label>To Time<span class="color-red">*</span></label>
                                                      <div class="form-group">
                                                         <div class='input-group ' id='datetimepicker7'>
                                                            <input type='text' class="form-control" />
                                                            <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="pull-right">
                                                      <button class="btn-u" type="submit">Search</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Tab Content 2 -->
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--/col-md-6-->
                     <!--End Tab v1-->
                  </div>
               </section>
               <hr>
               <!--=== Booking form End ===-->
               <!--=== Footer Version 1 ===-->
               @include('inc.footer')
               <!--=== End Footer Version 1 ===-->
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
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
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
                $(function () {
                   $('#datetimepicker3').datetimepicker();
               });
                 $(function () {
                   $('#datetimepicker4').datetimepicker();
               });
            </script>
            <script type="text/javascript">
               $(function () {
                   $('#datetimepicker5').datetimepicker({
                       format: 'LT'
                   });
                   
               });
               $(function () {
                   $('#datetimepicker6').datetimepicker({
                       format: 'LT'
                   });
                   
               });
               $(function () {
                   $('#datetimepicker7').datetimepicker({
                       format: 'LT'
                   });
                   
               });
               $(function () {
                   $('#datetimepicker8').datetimepicker({
                       format: 'LT'
                   });
                   
               });
            </script>
            <script>
               $(document).ready(function(){
               var date_input=$('.date'); //our date input has the name "date"
               var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
               date_input.datepicker({
               format: 'mm/dd/yyyy',
               container: container,
               todayHighlight: true,
               autoclose: true,
               });
               });
            </script>
            <script>
               // This example requires the Places library. Include the libraries=places
               // parameter when you first load the API. For example:
               // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
               
               function initMap() {
                 var map = new google.maps.Map(document.getElementById('map'), {
                   center: {lat: -33.8688, lng: 151.2195},
                   zoom: 13
                 });
                 var card = document.getElementById('pac-card');
                 var input = document.getElementById('pac-input');
                 var types = document.getElementById('type-selector');
                 var strictBounds = document.getElementById('strict-bounds-selector');
               
                 map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);
               
                 var autocomplete = new google.maps.places.Autocomplete(input);
               
                 // Bind the map's bounds (viewport) property to the autocomplete object,
                 // so that the autocomplete requests use the current map bounds for the
                 // bounds option in the request.
                 autocomplete.bindTo('bounds', map);
               
                 // Set the data fields to return when the user selects a place.
                 autocomplete.setFields(
                     ['address_components', 'geometry', 'icon', 'name']);
               
                 var infowindow = new google.maps.InfoWindow();
                 var infowindowContent = document.getElementById('infowindow-content');
                 infowindow.setContent(infowindowContent);
                 var marker = new google.maps.Marker({
                   map: map,
                   anchorPoint: new google.maps.Point(0, -29)
                 });
               
                 autocomplete.addListener('place_changed', function() {
                   infowindow.close();
                   marker.setVisible(false);
                   var place = autocomplete.getPlace();
                   if (!place.geometry) {
                     // User entered the name of a Place that was not suggested and
                     // pressed the Enter key, or the Place Details request failed.
                     window.alert("No details available for input: '" + place.name + "'");
                     return;
                   }
               
                   // If the place has a geometry, then present it on a map.
                   if (place.geometry.viewport) {
                     map.fitBounds(place.geometry.viewport);
                   } else {
                     map.setCenter(place.geometry.location);
                     map.setZoom(17);  // Why 17? Because it looks good.
                   }
                   marker.setPosition(place.geometry.location);
                   marker.setVisible(true);
               
                   var address = '';
                   if (place.address_components) {
                     address = [
                       (place.address_components[0] && place.address_components[0].short_name || ''),
                       (place.address_components[1] && place.address_components[1].short_name || ''),
                       (place.address_components[2] && place.address_components[2].short_name || '')
                     ].join(' ');
                   }
               
                   infowindowContent.children['place-icon'].src = place.icon;
                   infowindowContent.children['place-name'].textContent = place.name;
                   infowindowContent.children['place-address'].textContent = address;
                   infowindow.open(map, marker);
                 });
               
                 // Sets a listener on a radio button to change the filter type on Places
                 // Autocomplete.
                 function setupClickListener(id, types) {
                   var radioButton = document.getElementById(id);
                   radioButton.addEventListener('click', function() {
                     autocomplete.setTypes(types);
                   });
                 }
               
                 setupClickListener('changetype-all', []);
                 setupClickListener('changetype-address', ['address']);
                 setupClickListener('changetype-establishment', ['establishment']);
                 setupClickListener('changetype-geocode', ['geocode']);
               
                 document.getElementById('use-strict-bounds')
                     .addEventListener('click', function() {
                       console.log('Checkbox clicked! New state=' + this.checked);
                       autocomplete.setOptions({strictBounds: this.checked});
                     });
               }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd0HfhdaShWg0qxpKHgJysJoICT70nHTs&libraries=places&callback=initMap"
               async defer></script>
         </body>
         <!-- Mirrored from htmlstream.com/preview/unify-v1.9.6/page_profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Oct 2016 11:35:09 GMT -->
      </html>