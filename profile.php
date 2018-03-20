<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>IHL - Team Profile</title>
        <?php include('inc/sitehead.php'); ?>
    </head>
    <?php
    include('inc/logincheck.php');

                if($_SESSION['priv']==1){
                    header("location:adminprofile.php?msg=WelcomeAdmin");
                    exit;
                }
                if($_SESSION['priv']==3){
                    header("location:contprofile.php?msg=WelcomeController");
                    exit;
                }
                if ($_SESSION['priv']==4) {
                    header("location:pubprofile.php?msg=WelcomePublisher");
                    exit;
                }
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
                
                    <h1>Player Details</h1>
                    <?php
                        $sql="select * from player where capid = '".$_SESSION['id']."' order by pid desc";
                        $res=mysqli_query($conn,$sql);
                        $tot=mysqli_affected_rows($conn);
                    ?>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <center>
                        <form method="post" action="logindb.php">
                        <table border="1" cellpadding="7" cellspacing="7">
                            <tr>
                                <td>Sr No.</td>
                                <td>Photo</td>
                                <td>Name</td>
                                <td>Position</td>
                                <td>Height</td>
                                <td>Weight</td>
                                <td>Team Index</td>
                                <td>Address</td>
                                <td>DOB</td>
                                <td>City</td>
                                <td>Contact</td>
                                <td>Actions</td>
                            </tr>
                            <?php
                                if($tot>0){
                                    for ($i=0; $i < $tot; $i++) { 
                                        $arr=mysqli_fetch_array($res);
                                    ?>
                                    <tr>
                                        <td><?php echo $i+1; ?></td>
                                        <td>
                                        <?php 
                                            if($arr['pphoto']==""){
                                                echo "<img src='images/playerpic/no-profile-img.gif' style='width:50px;'>";                 
                                            }               
                                            else{
                                                echo "<img src='images/playerpic/".$arr['pphoto']."' style='width:50px;'>"; 
                                            }
                                        ?>
                                        </td>
                                        <td><?php echo $arr['pname']; ?></td>
                                        <td><?php echo $arr['pposition']; ?></td>
                                        <td><?php echo $arr['pheight']; ?></td>
                                        <td><?php echo $arr['pweight']; ?></td>
                                        <td><?php echo $arr['pteamindex']; ?></td>
                                        <td><?php echo $arr['paddress']; ?></td>
                                        <td><?php echo $arr['pdob']; ?></td>
                                        <td><?php echo $arr['pcity']; ?></td>
                                        <td><?php echo $arr['pcontact']; ?></td>
                                        <td align="center"><a href="editplayer.php?id=<?php echo $arr['pid']; ?>" class="button">Edit</a> <a href="delplayer.php?id=<?php echo $arr['pid']; ?>" class="button" onclick="return confirm('Are you sure ?');">Delete</a></td>
                                    </tr>
                                    <?php
                                    }
                                }
                                else{
                                    ?>
                                    <tr>
                                        <td align="center" colspan="12">No Players Registered</td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </table>
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