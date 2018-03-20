<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>IHL - Publisher Profile</title>
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
                <h3>Publish a Video</h3>               
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <center>
        <form action="postvideo.php" method="post">
                                <input type="text" name="videotitle" placeholder="Video Title" required />
                                <input type="text" name="videocode" placeholder="Embedded Code Link (Paste only the link in the embedded code)" required />
        <input class="button" type="submit" name="postvideo" value="Publish Video">
                            </form>
                        </center>
                    </article>
                    <hr/>
                    <h3>Manage Videos</h3>               
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <center>
                            <table border="1" cellpadding="7" cellspacing="7" width="50%">
                            <tr>
                                <td align="center"><strong>Sr No</strong></td>
                                <td align="center"><strong>Video</strong></td>
                                <td align="center"><strong>Status</strong></td>
                                <td align="center"><strong>Action</strong></td>
                            </tr>
                            <?php
                                $vsql="select * from videos order by v_id desc";
                                $vres=mysqli_query($conn,$vsql);
                                $vtot=mysqli_affected_rows($conn);
                                if($vtot>0){
                                    for($i=0;$i<$vtot;$i++){
                                        $varr=mysqli_fetch_array($vres);  
                                ?>
                                <tr>
                                <td><?php echo $i+1; ?></td>
                                <td><iframe name="pub-videos" width="350" height="225" src="<?php echo $varr['v_content']; ?>" frameborder="0" allowfullscreen></iframe></td>
                                <td>
                                <?php
                                    if($varr['v_status']==0){
                                        echo "Pending";
                                    }
                                    else if($varr['v_status']==1){
                                        echo "Approved";
                                    }
                                    else{
                                        echo "Dissapproved";   
                                    }
                                ?>
                                </td>
                                <td><a href="delvideo.php?id=<?php echo $varr['v_id']; ?>" onclick="return confirm('Are you sure ?')" title="Delete Video">Delete</a></td>
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