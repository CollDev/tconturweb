<!DOCTYPE html>
<html lang="es">
    <head>
        <title>TCONTUR</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
        <?php if ($option == 'maintenance') { ?>
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">
        <?php } ?>
    <!--[if lt IE 8]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
        </div>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <![endif]-->
    </head>

    <body>
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
                                <li><a <?php if ($option == 'maintenance') { ?>class="active" <?php } ?>href="/maintenance">Maintenance</a></li>
                                <li><a <?php if ($option == 'repair') { ?>class="active" <?php } ?>href="/repair">Repair</a></li>
                                <li><a <?php if ($option == 'price') { ?>class="active" <?php } ?>href="/price">Price List</a></li>
                                <li><a <?php if ($option == 'locations') { ?>class="active" <?php } ?>href="/locations">Locations</a></li>
                            </ul>
                        </nav>
                        <?php if ($option == '') { ?>
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
                        <?php } ?>
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
<?php
if ($option != '') {
    require_once 'templates/' . $option . '.html';
} else {
    require_once 'templates/index.html';
}
?>
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
                        <span>TCONTUR &copy; <?php echo date("Y"); ?> Todos los derechos reservados.</span> Creado por <a href="http://www.colldev.com/" target="_blank" rel="nofollow">Collaborative Development</a>. Alojado en <a href="http://www.royalhoster.com/" target="_blank" rel="nofollow">RoyalHoster</a>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/cufon-yui.js"></script>
        <script src="js/cufon-replace.js"></script>
        <script src="js/Vegur_300.font.js"></script>
        <script src="js/Vegur_500.font.js"></script> 
        <script src="js/FF-cash.js"></script>      
        <script src="js/tms-0.3.js"></script>
        <script src="js/tms_presets.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/jquery.equalheights.js"></script>
        <script src="js/jquery.prettyPhoto.js"></script>
        <script> Cufon.now(); </script>
        <script>
            $(document).on('ready', function() {
                <?php if ($option == '') { ?>
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
                <?php } elseif ($option == 'maintenance') { ?>
                $(".lightbox").append("<span></span>");
                $("a[data-gal^='prettyVideo']").prettyPhoto({animation_speed:'normal',theme:'facebook',slideshow:false, autoplay_slideshow: false});
                <?php } ?>
            });
        </script>
    </body>
</html>