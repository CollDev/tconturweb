<?php
if (isset($_GET['option'])) {
    $option = $_GET['option'];
} else {
    $option = '';
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>TCONTUR</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <!--[if lt IE 8]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
        </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
    </head>

    <body id="page1">
        <div class="main-bg">
            <div class="bg">
                <!--==============================header=================================-->
                <header>
                    <div class="main">
                        <div class="wrapper">
                            <h1><a href="/">logo</a></h1>
                            <div class="fright">
                                <div class="indent">
                                    <span class="address">8901 Marmora Road, Glasgow, D04 89GR</span>
                                    <span class="phone">Tel: +1 959 552 5963</span>
                                </div>
                            </div>
                        </div>
                        <nav>
                            <ul class="menu">
                                <li><a <?php if ($option == '') { ?>class="active" <?php } ?>href="/">Home</a></li>
                                <li><a <?php if ($option == 'about') { ?>class="active" <?php } ?>href="/about">About Us</a></li>
                                <li><a <?php if ($option == 'maintenance') { ?>class="active" <?php } ?>href="/maintenance">Maintenance </a></li>
                                <li><a <?php if ($option == 'repair') { ?>class="active" <?php } ?>href="/repair">Repair</a></li>
                                <li><a <?php if ($option == 'price') { ?>class="active" <?php } ?>href="/price">Price List</a></li>
                                <li><a <?php if ($option == 'locations') { ?>class="active" <?php } ?>href="/locations">Locations</a></li>
                            </ul>
                        </nav>
                        <div class="slider-wrapper">
                            <div class="slider">
                                <ul class="items">
                                    <li>
                                        <img src="images/slider-img1.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/slider-img2.jpg" alt="" />
                                    </li>
                                    <li>
                                        <img src="images/slider-img3.jpg" alt="" />
                                    </li>
                                </ul>
                            </div>
                            <a class="prev" href="#">prev</a>
                            <a class="next" href="#">next</a>
                        </div>
                    </div>
                </header>

                <!--==============================content================================-->
                <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - January 30, 2012!</div>
                    <div class="main">
                        <div class="container_12">
                            <div class="wrapper p5">
                                <article class="grid_4">
                                    <div class="wrapper">
                                        <figure class="img-indent"><img src="images/page1-img1.png" alt=""></figure>
                                        <div class="extra-wrap">
                                            <h4>Engine Repair</h4>
                                            <p class="p2">Lorem ipsum dolosit amet, consetetur sadipng elitr sed diam nonumy eirmod.</p>
                                            <a class="button" href="#">Read More</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="grid_4">
                                    <div class="wrapper">
                                        <figure class="img-indent"><img src="images/page1-img2.png" alt=""></figure>
                                        <div class="extra-wrap">
                                            <h4>Wheel Alignment</h4>
                                            <p class="p2">Tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                            <a class="button" href="#">Read More</a>
                                        </div>
                                    </div>
                                </article>
                                <article class="grid_4">
                                    <div class="wrapper">
                                        <figure class="img-indent"><img src="images/page1-img3.png" alt=""></figure>
                                        <div class="extra-wrap">
                                            <h4>Fluid Exchanges</h4>
                                            <p class="p2">No sea takimata sanctus est gorem ipsum dolor sit amet forem ipsum.</p>
                                            <a class="button" href="#">Read More</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="container-bot">
                                <div class="container-top">
                                    <div class="container">
                                        <div class="wrapper">
                                            <article class="grid_8">
                                                <div class="indent-left">
                                                    <h2>Welcome!</h2>
                                                    <p class="prev-indent-bot"><strong>Car Repair</strong> is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free website templates</a> created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid. </p>
                                                    <p class="border-bot">This <a href="http://blog.templatemonster.com/2012/01/30/free-website-template-jquery-slider-car-project/" target="_blank" rel="nofollow">Car Repair Template</a> goes with two packages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplatesMonster.com. The basic package (without PSD source) is available for anyone without registration.</p>
                                                </div>
                                                <div class="wrapper">
                                                    <div class="grid_4 alpha">
                                                        <div class="indent-left">
                                                            <div class="maxheight indent-bot">
                                                                <h3>About Us</h3>
                                                                <p class="prev-indent-bot"><a class="link-1" href="#">Lorem ipsum dolor amet</a> conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                                <a class="link-1" href="#">Dolor amet conse ctetur</a> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ut enim ad.
                                                            </div>
                                                            <a class="button" href="#">Read More</a>
                                                        </div>
                                                    </div>
                                                    <div class="grid_4 omega">
                                                        <div class="indent-left2">
                                                            <div class="maxheight indent-bot">
                                                                <h3 class="p0">Our Services</h3>
                                                                <ul class="list-1">
                                                                    <li><a href="#">Complete Computer Diagnostics</a></li>
                                                                    <li><a href="#">Complete Safety Analysis</a></li>
                                                                    <li><a href="#">Drivability Problems</a></li>
                                                                    <li><a href="#">Oil Changes</a></li>
                                                                    <li><a href="#">Emission Repair Facility</a></li>
                                                                    <li><a href="#">Air Conditioning Service</a></li>
                                                                    <li><a href="#">Electrical Systems</a></li>
                                                                    <li><a href="#">Fleet Maintenance</a></li>
                                                                </ul>
                                                            </div>
                                                            <a class="button" href="#">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <article class="grid_4">
                                                <div class="indent-left2 indent-top">
                                                    <div class="box p4">
                                                        <div class="padding">
                                                            <div class="wrapper">
                                                                <figure class="img-indent"><img src="images/page1-img4.png" alt=""></figure>
                                                                <div class="extra-wrap">
                                                                    <h3 class="p0">Our Hours:</h3>
                                                                </div>
                                                            </div>
                                                            <p class="p1"><strong>24 Hour Emergency Towing</strong></p>
                                                            <p class="color-1 p0">Monday - Friday: 7:30 am - 6:00</p>
                                                            <p class="color-1 p1">Saturday: 7:30 am - Noon</p>
                                                            Night Drop Available
                                                        </div>
                                                    </div>
                                                    <figure class="indent-bot">
                                                        <iframe width="260" height="202" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                                                    </figure>
                                                    <div class="indent-left">
                                                        <dl class="main-address">
                                                            <dt>Demolink.org 8901 Marmora Road,<br> Glasgow, D04 89GR.</dt>
                                                            <dd><span>Telephone:</span>  +1 959 552 5963;</dd>
                                                            <dd><span>FAX:</span>  +1 959 552 5963</dd>
                                                            <dd><span>E-mail:</span><a href="#">mail@demolink.org</a></dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--==============================footer=================================-->
                <footer>
                    <div class="main">
                        <span>Car Repair &copy; 2012</span>
                        Website Template by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/cufon-yui.js" type="text/javascript"></script>
        <script src="js/cufon-replace.js" type="text/javascript"></script>
        <script src="js/Vegur_500.font.js" type="text/javascript"></script> 
        <script src="js/FF-cash.js" type="text/javascript"></script>      
        <script src="js/tms-0.3.js" type="text/javascript"></script>
        <script src="js/tms_presets.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="js/jquery.equalheights.js" type="text/javascript"></script>
        <script type="text/javascript"> Cufon.now(); </script>
        <script type="text/javascript">
            $(document).on('ready', function() {
                $('.slider')._TMS({
                    duration:1000,
                    easing:'easeOutQuint',
                    preset:'simpleFade',
                    slideshow:7000,
                    banners:false,
                    pauseOnHover:true,
                    pagination:false,
                    pagNums:false,
                    nextBu:'.next',
                    prevBu:'.prev'
                });
            });
        </script>
    </body>
</html>