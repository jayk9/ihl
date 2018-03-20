<section id="submenu-container">
    <a id="mobile-menu" href="#">Sub Menu</a>
    <nav id="submenu">
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">About IHL</a>
            </li>
            <li>
                <a href="#">Terms &amp; Conditions</a>
            </li>
            <li>
                <a href="#">Privacy Policy</a>
            </li>
            <li>
                <a href="#">Contact Us</a>
            </li>
            <li>
                <a href="#">Site Map</a>
            </li>
        </ul>
    </nav>
    <!-- LOGIN MENU -->
    <nav id="submenu-login">
        <ul>
            <?php
                if (isset($_SESSION['id'])) {
            ?>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
                <li>
                    <a href="profile.php">My Profile (<?php echo $_SESSION['uname']; ?>)</a>
                </li>
            <?php
                }
                else{
            ?>
            <li>
                <a href="registration_team.php">Register</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
            <?php
                }
            ?>
        </ul>
    </nav>
</section>