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
                        <a href="profile.php?msg=OperationCancel" class="button">Cancel</a>
                        <center>
                        
                            
                            <form method="post" action="editrecord.php">
                                <?php
                                    $iqur = mysqli_query($conn, "select * from player where pid = '".$_GET['id']."'");
                                    $iarr = mysqli_fetch_array($iqur);
                                ?><br>
                                <table border="1" cellpadding="7" cellspacing="7">
                                    <tr>
                                        <td><label>Name : </label></td><td><input type="text" name="updnm2" value="<?php echo $iarr['pname']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Address : </label></td><td><textarea name="updaddr"><?php echo $iarr['paddress']; ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><label>Position : </label></td><td><input type="text" name="updpos2" value="<?php echo $iarr['pposition']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Height : </label></td><td><input type="text" name="updheight2" value="<?php echo $iarr['pheight']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Weight : </label></td><td><input type="text" name="updweight2" value="<?php echo $iarr['pweight']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><label>DOB : </label></td><td><input type="date" name="upddob2" value="<?php echo $iarr['pdob']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Contact : </label></td><td><input type="number" name="updcontact2" value="<?php echo $iarr['pcontact']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><label>City : </label></td><td><input type="text" name="updcity2" value="<?php echo $iarr['pcity']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Team Index : </label></td><td><input type="number" name="updtindex2" value="<?php echo $iarr['pteamindex']; ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Photo : </label></td><td><input type="file" name="updtpdp"></td>
                                    </tr>
                                </table>
                                <input type="submit" name="update" value="Update" class="button">
                                <input type="hidden" name="hidden" value="<?php echo $_GET['id']; ?>">
                            </form>
                        </center>
                    </article>
                    <hr/>
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
</html>