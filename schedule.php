<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>IHL - Schedule Manager</title>
        <?php include('inc/sitehead.php'); ?>
        <script type="text/javascript">
            function alertuser(){
                    alert("<?php echo $_GET['invite']; ?>");
            }
        </script>
    </head>
    <?php
    include('inc/logincheck.php');
?>
    <body onload="alertuser()">
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
                    <h3>Tournaments</h3>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <center>
                            <?php
                                $tsql = "select * from tournament";
                                $tres = mysqli_query($conn, $tsql);
                            ?>
                            <table border="1" cellpadding="5" cellspacing="5">
                                <tr>
                                    <td><strong>Sr No</strong></td>
                                    <td><strong>Tournament Type</strong></td>
                                    <td><strong>Status</strong></td>
                                    <td><strong>Action</strong></td>
                                </tr>
                                <?php
                                    $ttot = mysqli_affected_rows($conn);
                                    if($ttot>0){
                                        
                                        for($i=0;$i<$ttot;$i++){
                                            $tarr = mysqli_fetch_array($tres);
                                            ?>
                                            <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $tarr['tour_type']; ?></td>
                                            <td>
                                                <?php
                                                    if($tarr['tour_status']==1){
                                                        echo "Active";
                                                    }
                                                    else{
                                                        echo "Not Active";
                                                    }
                                                ?>  
                                            </td>
                                            <td><center><a href="tactive.php?tid=<?php echo $tarr['tour_id']; ?>" title="Make it Active">&#10004;</a> || <a href="tdeactive.php?tid=<?php echo $tarr['tour_id']; ?>" title="Make it Deactive" onclick="return confirm('Are you sure ?');">&#10006;</a></center></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </table>
                        </center>
                    </article>
                    <hr/>
                    <h3>Number of Teams</h3>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <center>
                            <form action="#" method="post">
                                <select name="seltour">
                                    <option value="NULL">Select</option>
                                    <?php
                                        $stsql = "select * from tournament where tour_status = '1'";
                                        $stres = mysqli_query($conn, $stsql);
                                        $sttot = mysqli_affected_rows($conn);
                                        for($j=0;$j<$sttot;$j++){
                                            $starr = mysqli_fetch_array($stres);
                                            ?>
                                            <option value="<?php echo $starr['tour_type']; ?>"><?php echo $starr['tour_type']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select><br>
                                <input type="submit" name="tourselected" class="button">
                            </form>
                            <?php
                                if($_POST['seltour']!=NULL){
                                    echo "<strong><font style='color:red;'><br>".$_POST['seltour']." Selected</font></strong>";
                                    ?><br>
                                    <strong><font>Available Teams</font></strong>
                                    <br>
                                    <form method="post" action="#">
                                    <table border="1" cellpadding="5" cellspacing="5">
                                        <tr>
                                            <td><strong>Sr. No.</strong></td>
                                            <td><strong>Team</strong></td>
                                            <td><strong>City</strong></td>
                                            <td><strong>Action</strong></td>
                                        </tr>
                                        <?php
                                            $teamsql = "select * from user where privid = '2'";
                                            $teamres = mysqli_query($conn, $teamsql);
                                            $teamtot = mysqli_affected_rows($conn);
                                            if($teamtot>0){
                                                for($t=0; $t<$teamtot; $t++){
                                                    $teamarr = mysqli_fetch_array($teamres);
                                                    $statusarr = mysqli_fetch_array($statusres);
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $t+1; ?></td>
                                                        <td><?php echo $teamarr['teamname']; ?></td>
                                                        <td><?php echo $teamarr['city']; ?></td>
                                                        <td><center><a href="invite_team.php?teamid=<?php echo $teamarr['id']; ?>&tourtype=<?php echo $_POST['seltour']; ?>&tourid=<?php echo $starr['tour_id']; ?>" title="Invite Team">&#10004;</a> || <a href="uninvite_team.php?teamid=<?php echo $teamarr['id']; ?>&tourtype=<?php echo $_POST['seltour']; ?>&tourid=<?php echo $starr['tour_id']; ?>" title="Uninvite Team">&#10006;</a></center></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </table>
                                    <br><br><br><br>
                                    <?php
                                        $schsql="select a.invi_team, a.team_approval, a.invi_tour_id, b.id, b.teamname, b.city from invitation a, user b where a.invi_team=b.id and a.team_approval='1' and a.invi_tour='".$_POST['seltour']."'";
                                        $schres=mysqli_query($conn,$schsql);
                                        $schtot=mysqli_affected_rows($conn);
                                    ?>
                                    <h3>Confirmed Teams</h3>
                                    <table border="1" cellpadding="5" cellspacing="5">
                                        <tr>
                                            <td><strong>Sr No.</strong></td>
                                            <td><strong>Team</strong></td>
                                            <td><strong>City</strong></td>
                                        </tr>
                                        <?php
                                            if($schtot>0){
                                                for($i=0;$i<$schtot;$i++){
                                                    $scharr=mysqli_fetch_array($schres);
                                        ?>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><?php echo $scharr['teamname']; ?></td>
                                            <td><?php echo $scharr['city']; ?></td>
                                        </tr>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </table>
                                    </form>
                                    <form method=get action="gensch.php"><input type="hidden" name="seltour" value="<?php echo $_POST['seltour']; ?>"><input type="submit" class="button" value="Generate Schedule"></form>
                                    <?php
                                }
                            ?>
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