<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>IHL - Controller Profile</title>
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
                    <h3>Notify Teams</h3>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <center>
                            <form method="post" action="publishalert.php">
                                <table border="1" cellpadding="5" cellspacing="5">
                                    <tr>
                                        <td>Select Player</td>
                                        <td>
                                            <?php
                                                $csql="select * from user where privid = 2";
                                                $cres=mysqli_query($conn,$csql);
                                                $ctot=mysqli_affected_rows($conn);
                                                if($ctot>0){
                                                    for($i=0;$i<$ctot;$i++){
                                                        $carr=mysqli_fetch_array($cres);
                                                        ?>
                                                        <input type="checkbox" name="captain[]" value="<?php echo $carr['id']; ?>"><?php echo $carr['teamname']; ?>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Notification</td>
                                        <td><textarea name="alrtcontent" rows="5" cols="50"></textarea></td>
                                    </tr>
                                </table>
                                <input type="submit" value="Publish" class="button">
                            </form>
                        </center>
                    </article>
                    <hr/>
                    <h3>Articles</h3>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <center>
                            <table border='1' cellpadding="5" cellspacing="5">
                                <tr>
                                    <td>Sr No.</td>
                                    <td>Article Title</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            <?php
                                $nsql="select * from news order by news_id desc";
                                $nres=mysqli_query($conn,$nsql);
                                $ntot=mysqli_affected_rows($conn);
                                if($ntot>0){
                                    
                                    for ($i=0; $i < $ntot; $i++) { 
                                        $narr=mysqli_fetch_array($nres);
                                        ?>
                                        <tr>
                                            <td><?php echo $i+1; ?></td>
                                            <td><a href=""><?php echo $narr['news_title']; ?></a></td>
                                            <td>
                                                <?php
                                                    if($narr['news_approval']==0){
                                                        echo "Pending";
                                                    }
                                                    else if($narr['news_approval']==1){
                                                        echo "Approved";
                                                    }
                                                    else{
                                                        echo "Disapproved";
                                                    }
                                                ?>
                                            </td>
                                            <td><center><a href="napprove.php?nid=<?php echo $narr['news_id']; ?>" title="Approve">&#10004;</a> || <a href="ndisapprove.php?nid=<?php echo $narr['news_id']; ?>" title="Disapprove">&#10006;</a></center></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            ?>
                            </table>
                        </center>
                    </article>
                    <hr/>
                    <h3>Videos</h3>
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <center>
                            <table border='1' cellpadding="5" cellspacing="5">
                                <tr>
                                    <td align="center">Sr No.</td>
                                    <td align="center">Videos</td>
                                    <td align="center">Status</td>
                                    <td align="center">Action</td>
                                </tr>
                            <?php
                                $vsql="select * from videos order by v_id desc";
                                $vres=mysqli_query($conn,$vsql);
                                $vtot=mysqli_affected_rows($conn);
                                if($vtot>0){
                                    
                                    for ($i=0; $i < $vtot; $i++) { 
                                        $varr=mysqli_fetch_array($vres);
                                        ?>
                                        <tr>
                                            <td align="center"><?php echo $i+1; ?></td>
                                            <td align="center"><iframe name="pub-videos" width="350" height="225" src="<?php echo $varr['v_content']; ?>" frameborder="0" allowfullscreen></iframe></td>
                                            <td align="center">
                                                <?php
                                                    if($varr['v_status']==0){
                                                        echo "Pending";
                                                    }
                                                    else if($varr['v_status']==1){
                                                        echo "Approved";
                                                    }
                                                    else{
                                                        echo "Disapproved";
                                                    }
                                                ?>
                                            </td>
                                            <td align="center"><center><a href="vapprove.php?vid=<?php echo $varr['v_id']; ?>" title="Approve">&#10004;</a> || <a href="vdisapprove.php?vid=<?php echo $varr['v_id']; ?>" title="Disapprove">&#10006;</a></center></td>
                                        </tr>
                                        <?php
                                    }
                                }
                            ?>
                            </table>
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