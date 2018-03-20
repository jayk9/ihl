<?php
    error_reporting(0);
?>
<section id="mainmenu-container">
    <a class="toggleMenu" href="#">Menu</a>
    <nav>
        <ul id="mainmenu">
            <?php
                if($_SESSION['priv']==2){
                ?>
                <li>
                    <a href="profile.php">
                        <span>Team Profile</span>
                    </a>
                </li>
                <li>
                    <a href="notifications.php">
                        <span>Notifications</span>
                    </a>
                </li>
                <li>
                    <a href="invitations.php">
                        <span>Invitations</span>
                    </a>
                </li>
                <li>
                    <a href="addplayerform.php">
                        <span>Player Registration</span>
                    </a>
                </li>
                <?php
                }
                elseif ($_SESSION['priv']==3) {
                    ?>
                    <li>
                        <a href="inputscore.php">
                            <span>Scores</span>
                        </a>
                    </li>
                    <li>
                        <a href="schedule.php">
                            <span>Schedule</span>
                        </a>
                    </li>
                    <?php
                }
                elseif ($_SESSION['priv']==4) {
                    ?>
                    <li>
                        <a href="#">
                            <span>Publish News</span>
                        </a>
                    </li>
                    <li>
                        <a href="publishvids.php">
                            <span>Publish Videos</span>
                        </a>
                    </li>
                    <?php
                }
                else{
            ?>
                <li>
                    <a href="#">
                        <span>Team</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Stats</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <span>Player Stats</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>Team Stats</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span>Scores</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Schedule</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Videos</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Players</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>Become a Sponsor</span>
                    </a>
                </li>
                <?php
                }
                ?>
        </ul>
    </nav>
</section>