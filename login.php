<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>IHL - Login</title>
        <?php 
            include('inc/sitehead.php'); 
            if(isset($_SESSION['id'])){
                header("location:profile.php");
                exit;
            }
        ?>
    </head>
    
    <body>
        <!-- SUB MENU -->
        <?php include('inc/submenu.php'); ?>
        
        <div class="clear"></div>
        
        <!-- HEADER -->
        <?php include('inc/headerlogo.php'); ?>
        <div class="clear"></div>
        <!-- MAIN MENU -->
        <?php include('inc/mainmenu.php'); ?>

        <!-- MAIN CONTAINER -->
        <section class="maincontainer">
            <section class="pagecontainer">
                <!-- LEFT CONTAINER -->
                <section class="leftcontainer">
                    <h1>Login</h1>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <center>
                        <form method="post" action="logindb.php">
                        <table width="50%">
                            <tr>
                                <td><input type="text" name="uname" required="" placeholder="Username"></td>
                            </tr>
                            <tr>
                                <td><input type="password" name="upass" required="" placeholder="********"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" class="button" value="Login"></td>
                            </tr>
                        </table>
                        </form>
                        </center>
                    </article>
                    <hr/>
                    
                </section>
                <!-- RIGHT CONTAINER -->
                <section class="rightcontainer">
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <h3>Search</h3>
                        <form id="searchform" class="searchbox">
                            <input type="text" id="search" class="field searchtext" placeholder="Keyword..." />
                            <input type="submit" class="button" name="submit" value="Go" />
                        </form>
                    </div>
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <h3>About Our Team</h3>
                        <p>Elit cernantur in pariatur. Te illum de aute, a incididunt te pariatur. Vidisse aut tempor. Eu aut lorem cernantur, occaecat dolor mandaremus consequat. Do labore excepteur, dolor id admodum. Fabulas fugiat eiusmod incididunt. Si voluptate ita ullamco, iis minim incurreret voluptatibus an officia domesticarum nam cernantur est quis mentitum.
                            <a href="club.html">Read More...</a>
                        </p>
                    </div>
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <div class="sidebarbox-title">
                            <h3>Fixture</h3>
                        </div>
                        <!-- TABLE -->
                        <div class="fixture-row">
                            <a href="result.html">
                                <div class="fixture-row-left">Consectetur FC
                                    <div>?</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>?</div>Voluptate Cillum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Fabulas FC
                                    <div>1</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>3</div>Voluptate Cillum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Voluptate Cillum FC
                                    <div>4</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>1</div>Vidisse FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Elit FC
                                    <div>2</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>4</div>Voluptate Cillum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Voluptate Cillum FC
                                    <div>1</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>1</div>Domesticarum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Ullamco FC
                                    <div>6</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>1</div>Voluptate Cillum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Incididunt FC
                                    <div>1</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>5</div>Voluptate Cillum FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Voluptate Cillum FC
                                    <div>2</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>1</div>Pariatur FC</div>
                            </a>
                            <a href="result.html">
                                <div class="fixture-row-left">Voluptate Cillum FC
                                    <div>1</div>
                                </div>
                                <div class="fixture-row-right">
                                    <div>3</div>Mentitum FC</div>
                            </a>
                        </div>
                    </div>
                    <!-- SIDEBAR BOX -->
                    <div class="sidebarbox">
                        <div class="sidebarbox-title">
                            <h3>Gallery</h3>
                        </div>
                        <!-- GALLERY -->
                        <ul class="team-gallery">
                            <li>
                                <a class="clb-photo" href="images/photos/l1.jpg">
                                    <img src="images/photos/s1.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-iframe" href="http://www.youtube.com/embed/1iIZeIy7TqM">
                                    <img src="images/photos/t1.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-photo" href="images/photos/l2.jpg">
                                    <img src="images/photos/s2.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-iframe" href="http://www.dailymotion.com/embed/video/x143vp2">
                                    <img src="images/photos/t2.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-photo" href="images/photos/l3.jpg">
                                    <img src="images/photos/s3.jpg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a class="clb-link" href="http://www.themeforest.com/">
                                    <img src="images/photos/t3.jpg" alt="" />
                                </a>
                            </li>
                        </ul>
                        <a href="galleries.html" class="button button-widget">View All</a>
                    </div>
                </section>
            </section>
            <div class="clear"></div>
            <!-- SPONSORS TITLE -->
            <div class="logos-title">Sponsors</div>
            <!-- SPONSORS SLIDER -->
            <section class="transparent-bg">
                <div id="logos">
                    <div class="slide">
                        <a href="#">
                            <img src="images/photos/themeforest.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="#">
                            <img src="images/photos/codecanyon.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="#">
                            <img src="images/photos/photodune.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="#">
                            <img src="images/photos/activeden.png" alt="" />
                        </a>
                    </div>
                    <div class="slide">
                        <a href="#">
                            <img src="images/photos/audiojungle.png" alt="" />
                        </a>
                    </div>
                </div>
            </section>
            <!-- FOOTER -->
            <?php include('inc/footer.php'); ?>

            <!-- BACK TO TOP BUTTON -->
            <a href="#" class="back-to-top"></a>
        </section>
        <!-- JS FILES -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/backstretch.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="js/jflickrfeed.min.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
        <!-- BG IMAGE -->
        <script type="text/javascript">
            jQuery(window).load(function() {
                "use strict";
                jQuery('body').backstretch("images/photos/bg-blurred.jpg");
            });
        </script>
        <!-- SPONSORS SLIDER -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#logos').bxSlider({
                    slideWidth: 235,
                    pager: false,
                    minSlides: 2,
                    maxSlides: 5,
                    infiniteLoop: false,
                    hideControlOnEnd: true,
                    slideMargin: 10
                });
            });
        </script>
        <!-- FIXTURE SLIDER -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
                "use strict";
                jQuery('#fixture').bxSlider({
                    pager: false,
                    infiniteLoop: false,
                    hideControlOnEnd: true
                });
            });
        </script>
        <script src="js/custom.js" type="text/javascript"></script>
    </body>


<!-- Mirrored from sporty.wp4life.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Jun 2016 04:13:29 GMT -->
</html>