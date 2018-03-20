<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>IHL - Team Profile</title>
        <?php include('inc/sitehead.php'); ?>
    </head>
    <?php
    include('inc/logincheck.php');
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
                
                    <h4>Invitations</h4>
                    <?php
                        $sql="select * from invitation where invi_team = '".$_SESSION['id']."' order by invi_id desc";
                        $res=mysqli_query($conn,$sql);
                    ?>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <center>
                        <form method="post" action="logindb.php">
                        <div>
                        <ul class="sidebarlist">
                            <?php
                                $tot=mysqli_affected_rows($conn);
                                if($tot>0){
                                    for ($i=0; $i < $tot; $i++) { 
                                        $arr=mysqli_fetch_array($res);
                                    ?>
                                    <li>
                                        <?php 
                                            echo "Invitation for playing in ".$arr['invi_tour'];
                                            if($arr['team_approval']==1){
                                                echo " (Accepted)";
                                            }
                                            else{
                                                echo "<a href='accept_tour.php' title='Accept'>&#10004;</a> | <a href='reject_tour.php' title='Reject'>&#10006;</a>";
                                            }
                                        ?>
                                    </li>       
                                    <?php
                                    }
                                }
                                else{
                                    ?>
                                    <li>No Invitations</li>
                                    <?php
                                }
                            ?>
                        </ul>
                        </div>
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