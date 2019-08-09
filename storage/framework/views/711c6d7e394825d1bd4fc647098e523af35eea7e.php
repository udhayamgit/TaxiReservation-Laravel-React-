<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(Setting::get('site_title','Relax Taxi')); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="<?php echo e(Setting::get('site_icon')); ?>"/>

    <link href="<?php echo e(asset('asset/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('asset/css/slick-theme.css')); ?>"/>
    <link href="<?php echo e(asset('asset/css/slick.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('asset/css/sweet-alert.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <div class="overlay" id="overlayer" data-toggle="offcanvas"></div>

        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li>
                </li>
                <li class="full-white">
                    <a href="<?php echo e(url('/register')); ?>">SIGN UP To RIDE</a>
                </li>
                <li class="white-border">
                    <a href="<?php echo e(url('/provider/register')); ?>">BECOME A DRIVER</a>
                </li>
                <li>
                    <a href="<?php echo e(url('/ride')); ?>">Ride</a>
                </li>
                <li>
                    <a href="<?php echo e(url('/drive')); ?>">Drive</a>
                </li>
                <li>
                    <a href="<?php echo e(url('/help')); ?>">Help</a>
                </li>
                <li>
                    <a href="<?php echo e(url('/privacy')); ?>">Privacy Policy</a>
                </li>
                <li>
                    <a href="<?php echo e(url('/terms')); ?>">Terms and Conditions</a>
                </li>
                <li>
                    <a href="<?php echo e(Setting::get('store_link_ios','#')); ?>"><img src="<?php echo e(asset('/asset/img/appstore-white.png')); ?>"></a>
                </li>
                <li>
                    <a href="<?php echo e(Setting::get('store_link_android','#')); ?>"><img src="<?php echo e(asset('/asset/img/playstore-white.png')); ?>"></a>
                </li>
            </ul>
        </nav>

        <div id="page-content-wrapper">
            <header>
                <nav class="navbar navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                                <span class="hamb-top"></span>
                                <span class="hamb-middle"></span>
                                <span class="hamb-bottom"></span>
                            </button>

                            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(Setting::get('site_logo', asset('logo-black.png'))); ?>"></a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li <?php if(Request::url() == url('/ride')): ?> class="active" <?php endif; ?>>
                                    <a href="<?php echo e(url('/ride')); ?>">Ride</a>
                                </li>
                                <li <?php if(Request::url() == url('/drive')): ?> class="active" <?php endif; ?>>
                                    <a href="<?php echo e(url('/drive')); ?>">Drive</a>
                                </li>

                                 <!-- <li <?php if(Request::url() == url('/offers')): ?> class="active" <?php endif; ?>>
                                    <a href="<?php echo e(url('/offers')); ?>">Offers in Nagpur</a>
                                </li> -->
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php echo e(url('/help')); ?>">Help</a></li>
                                <?php if(empty(Auth::user()->id)): ?>
                                <li><a href="<?php echo e(url('/login')); ?>">Signin</a></li>
                                <li><a class="menu-btn" href="<?php echo e(url('/drive')); ?>">Become a Driver</a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <?php echo $__env->yieldContent('content'); ?>
            <div class="page-content">
                <div class="footer row no-margin">
                    <div class="container">
                        <div class="footer-logo row no-margin">
                            <div class="logo-img">
                                <img src="<?php echo e(Setting::get('site_logo',asset('asset/img/logo-white.png'))); ?>">
                            </div>
                        </div>
                        <div class="row no-margin">
                            <div class="<?php if(empty(Auth::user()->id)): ?> col-md-3 <?php else: ?> col-md-4 <?php endif; ?> col-sm-3 col-xs-12">
                                <ul>
                                    <li><a href="<?php echo e(url('/ride')); ?>">Ride</a></li>
                                    <li><a href="<?php echo e(url('/drive')); ?>">Drive</a></li>
                                    <li><a href="<?php echo e(url('/ride/#city-view')); ?>">Cities</a></li>
                                    <li><a href="<?php echo e(url('/ride/#estimate-fare')); ?>">Fare Estimate</a></li>
                                </ul>
                            </div>
                            <?php if(empty(Auth::user()->id)): ?>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <ul>
                                    <li><a href="<?php echo e(url('ride')); ?>">Signup to Ride</a></li>
                                    <li><a href="<?php echo e(url('drive')); ?>">Become a Driver</a></li>
                                    <li><a href="<?php echo e(url('ride')); ?>">Ride Now</a></li>                            
                                </ul>
                            </div>
                            <?php endif; ?>

                            <div class="<?php if(empty(Auth::user()->id)): ?> col-md-3 <?php else: ?> col-md-4 <?php endif; ?> col-sm-3 col-xs-12">
                                <h5>Get App on</h5>
                                <ul class="app">
                                    <li>
                                        <a href="<?php echo e(Setting::get('store_link_ios','#')); ?>">
                                            <img src="<?php echo e(asset('asset/img/appstore.png')); ?>">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(Setting::get('store_link_android','#')); ?>">
                                            <img src="<?php echo e(asset('asset/img/playstore.png')); ?>">
                                        </a>
                                    </li>                                                        
                                </ul>                        
                            </div>

                            <div class="<?php if(empty(Auth::user()->id)): ?> col-md-3 <?php else: ?> col-md-4 <?php endif; ?> col-sm-3 col-xs-12">                        
                                <h5>Connect us</h5>
                                <ul class="social">
                                    <li><a href="<?php echo e(Setting::get('facebook_link','#')); ?>"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="<?php echo e(Setting::get('twitter_link','#')); ?>"><i class="fa fa-twitter"></i></a></li> 
                                </ul>
                                <p style="color:#fff;">
                                    <strong style="color:#fff;">Relax Taxi</strong><br/>  
                                    Relax Taxi,<br/>
                                    Jeita Main Road,<br/>
                                    Mount Lebanon,<br/>
                                    Lebanon.<br/>
                                    info@relaxtaxi.me
                                </p>
                            </div>
                        </div>

                        <div class="row no-margin">
                            <div class="col-md-12 copy">
                                <p><?php echo e(Setting::get('site_copyright', '&copy; '.date('Y').' Appoets')); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo e(asset('asset/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/js/bootstrap.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('asset/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('asset/js/scripts.js')); ?>"></script>

    <script src="<?php echo e(asset('asset/js/sweet-alert.js')); ?>"></script>

    <script type="text/javascript">
        $('.car-detail').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            swipeToSlide: true,
            infinite: false
        })
    </script>

    <?php if(Setting::get('demo_mode', 0) == 1): ?>
        <!-- Start of LiveChat (www.livechatinc.com) code -->
        <script type="text/javascript">
            window.__lc = window.__lc || {};
            window.__lc.license = 8256261;
            (function() {
                var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
                lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
            })();
        </script>
        <!-- End of LiveChat code -->
    <?php endif; ?>

    <script>
        var map;

        function initMap() {
            var uluru = { lat: 3.1390, lng: 101.6869 };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: { lat: 3.1390, lng: 101.6869 }
            });
            var contentString = '<div id="content">' +
                '<div id="siteNotice">' +
                '</div>' +
                '<h4 id="firstHeading" class="firstHeading">Contact Us</h4>' +
                '<div id="bodyContent">' +
                '<p>Tamarai Tech Park, 12,16,' +
                'Jawaharlal Nehru Road,' +
                'Guindy,' +
                'Chennai,' +
                'Tamil Nadu 600032</p>' +
                '</div>' +
                '</div>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                title: 'YOUR_TITLE'
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }
        </script>

        <script type="text/javascript" src="<?php echo e(asset('asset/js/map.js')); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCATPBQuGNU6v0xZ6m5fAZHv3AQuw7YIYs&libraries=places&callback=initMap" async defer></script>

<script type="text/javascript">
    var current_latitude = 40.730610;
    var current_longitude = -73.935242;
</script>

<script type="text/javascript">
    if( navigator.geolocation ) {
       navigator.geolocation.getCurrentPosition( success, fail );
    } else {
        console.log('Sorry, your browser does not support geolocation services');
        initMap();
    }

    function success(position)
    {
        document.getElementById('long').value = position.coords.longitude;
        document.getElementById('lat').value = position.coords.latitude

        if(position.coords.longitude != "" && position.coords.latitude != ""){
            current_longitude = position.coords.longitude;
            current_latitude = position.coords.latitude;
        }
        initMap();
    }

    function fail()
    {
        // Could not obtain location
        console.log('unable to get your location');
        initMap();
    }
</script> 
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
    jQuery(".hamburger.is-closed").click(function(){
        jQuery("#sidebar-wrapper").toggleClass('active');
    });
</script>

 <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
