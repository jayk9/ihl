<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>IHL - Schedule Manager</title>
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
                <a href="schedule.php" class="button">Back</a><br><br>
                <?php

                    $schsql="select a.invi_team, a.team_approval, a.invi_tour_id, b.id, b.teamname, b.city from invitation a, user b where a.invi_team=b.id and a.team_approval='1' and a.invi_tour='".$_GET['seltour']."'";
                    $schres=mysqli_query($conn,$schsql);
                    $schtot=mysqli_affected_rows($conn);

                    $row=array();
                    $final=array();
                    $i=0;
                    while($arr=mysqli_fetch_array($schres)){
                        $row[$i]=$arr['teamname'];
                        $i++;
                    }   
                    $count=0;
                ?>
                <center>
                    <form method="post" action="schfix.php">
                        <strong><font style="color:red;">*NOTE : Please Don't Change the Opponents' Value, It's Auto Generated.</font></strong>
                        <table border="1" cellpadding="2" cellspacing="2" width="100%">
                            <tr>
                            <td align="center"><strong>Sr No</strong></td>
                            <td align="center"><strong>Opponent 1</strong></td>
                            <td align="center"><strong>Opponent 2</strong></td>
                            <td align="center"><strong>Fix Date</strong></td>
                            <td align="center"><strong>Fix Time</strong></td>
                            <td align="center"><strong>Fix Venue</strong></td>
                            </tr>
                            <?php
                            for($i=0;$i<$schtot;$i++)
                            {
                                for($j=$i+1;$j<$schtot;$j++){
                                    $count=$count+1;
                            ?>
                            <tr>
                            <td align="center"><?php echo $count; ?></td>
                            <td align="center"><input type="text" value="<?php echo $row[$i]; ?>" name="match_opp1_<?php echo $count; ?>" onfocus="return alert('This is Auto Generated, Please Dont Change !!');" required></td>
                            <td align="center"><input type="text" value="<?php echo $row[$j]; ?>" name="match_opp2_<?php echo $count; ?>" onfocus="return alert('This is Auto Generated, Please Dont Change !!');" required></td>
                            <td align="center"><input type="date" name="match_date_<?php echo $count; ?>" required></td>
                            <td align="center"><input type="time" name="match_time_<?php echo $count; ?>" required></td>
                            <td align="center"><input type="text" name="match_venue_<?php echo $count; ?>" required></td>
                            </tr>
                            <?php
                                    //$final[$count]=$row[$i]." vs ".$row[$j]."</br>";
                                }
                            }
                            ?>
                        </table>
                        <input type="hidden" name="count" value="<?php echo $count; ?>">
                        <input type="hidden" name="seltour" value="<?php echo $_GET['seltour']; ?>">
                        <input type="submit" name="fixschdate" value="Fix Matches" class="button">
                    </form>
                </center>
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