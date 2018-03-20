<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>IHL - Team Registration</title>
        <?php include('inc/sitehead.php'); ?>
        <script type="text/javascript">
            function validpwd(){
                if(document.regform.tupass.value!=document.regform.tcupass.value){
                    alert("Confirm Password doesn't match");
                    return false;
                }
            }   
        </script>
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
                
                    <h1>Team Registration</h1>
                    <center>
                        <form method="post" name="regform" action="register_db.php" onsubmit="return validpwd();"> 
                            <table class="result-table">
                                <tr>
                                    <td>Team Name : </td>
                                    <td><input type="text" name="tname" required=""></td>
                                </tr>
                                <tr>
                                    <td>City : </td>
                                    <td><input type="text" name="tcity" required></td>
                                </tr>
                                <tr>
                                    <td>Corresponding Address : </td>
                                    <td><input type="text" name="taddress" required></td>
                                </tr>
                                <tr>
                                    <td>Manager Name : </td>
                                    <td><input type="text" name="tmanagername" required></td>
                                </tr>
                                <tr>
                                    <td>Manager Contact : </td>
                                    <td><input type="text" name="tmanagercontact" required></td>
                                </tr>
                                <tr>
                                    <td>Manager Email : </td>
                                    <td><input type="text" name="tmanagermail" required></td>
                                </tr>
                                <tr>
                                    <td>Username : </td>
                                    <td><input type="text" name="tuname" required></td>
                                </tr>
                                <tr>
                                    <td>Password : </td>
                                    <td><input type="password" name="tupass" required></td>
                                </tr>
                                <tr>
                                    <td>Confirm Password : </td>
                                    <td><input type="password" name="tcupass" required></td>
                                </tr>
                            </table>
                            <br>
                            <center><input type="submit" class="button"></center>
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