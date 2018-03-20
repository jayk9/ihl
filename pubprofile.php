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
                
               
                    <hr/>
                    <!-- POST -->
                    <article class="post">
                        <center>
                            <table border="1" cellpadding="7" cellspacing="7">
            <thead>
                <td>Sr No</td>
                <td>Article Title</td>
                <td>Publish Date</td>
                <td>Status</td>
                <td>Actions</td>
            </thead>
            <?php
                $zsql="select * from news order by news_id desc";
                $zres=mysqli_query($conn,$zsql);
                $ztot=mysqli_affected_rows($conn);

                if($ztot>0){
                    for($i=0;$i<$ztot;$i++){
                        $zarr=mysqli_fetch_array($zres);
                        $date = date_create_from_format('Y-m-d', $zarr['publishdate']);
                        ?>
                        <tr>
                            <td><?php echo $i+1; ?></td>
                            <td><?php echo $zarr['news_title']; ?></td>
                            <td><?php echo date_format($date, 'j-M-Y'); ?></td>
                            <td>
                                <?php
                                    if ($zarr['news_approval']==0)
                                        echo "Pending";
                                    if ($zarr['news_approval']==1)
                                        echo "Published";
                                    if ($zarr['news_approval']==2)
                                        echo "Disapproved";
                                ?>
                            </td>
                            <td align="center"><a href="editnews.php?newsid=<?php echo $zarr['news_id']; ?>" class="button">Edit</a> <a href="delnews.php?newsid=<?php echo $zarr['news_id']; ?>" class="button" onclick="return confirm('Are you sure ?');">Delete</a></td>
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