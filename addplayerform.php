<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>IHL - Player Registration</title>
        <?php include('inc/sitehead.php'); ?>
    </head>
    <?php
    include('inc/logincheck.php');
    if($_SESSION['priv']==2){
?>
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
                
                    <h1>Player Registration</h1>
                    <center>
                    <form enctype="multipart/form-data" method="post" action="addplayer.php"> 
                        <table>
                            <tr>
                                <td>Player Name</td>
                                <td><input type="text" name="pname" required></td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td><input type="text" name="pcity" required></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><input type="text" name="paddress" required></td>
                            </tr>
                            <tr>
                                <td>Date Of Birth</td>
                                <td><input type="date" name="pdob" required></td>
                            </tr>
                            <tr>
                                <td>Contact</td>
                                <td><input type="number" name="pcontact" required></td>
                            </tr>
                            <tr>
                                <td>Height</td>
                                <td><input type="text" name="pheight" required></td>
                            </tr>
                            <tr>
                                <td>Weight</td>
                                <td><input type="text" name="pweight" required></td>
                            </tr>
                            <tr>
                                <td>Position</td>
                                <td><input type="text" name="pposition" required></td>
                            </tr>
                            <tr>
                                <td>Team Index</td>
                                <td><input type="text" name="ptindex" required></td>
                            </tr>
                            <tr>
                                <td>Photo</td>
                                <td><input type="file" name="pdp"></td>
                            </tr>
                        </table>
                        <br>
                        <center><input class="button" type="submit" name="submitregform"></center>
                        </form>
                        </center>
                    </article>
                    <hr/>
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
</html>
<?php
    }
    else{
        header("location:profile.php?msg=OnlyTeamsCanRegisterPlayers");
        exit;
    }
?>