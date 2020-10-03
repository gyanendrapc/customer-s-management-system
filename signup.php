<?php require 'header.php'; ?>

<div>
    <div id="alert">
        <?php

        if (isset($_SESSION['alert'])) {
            echo $_SESSION['alert'];
        } else if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
        } else {
            echo "session not set";
        }

        ?>
        <?php
        print_r($_SESSION);
        session_unset();
        session_destroy();
        ?>

    </div>
    <form action="./control/signup-check.php" method="POST">
        <label for="name">Enter Your Name:</label>
        <input type="text" name="name" />
        <br>
        <label for="contact">Enter Your Contact:</label>
        <input type="tel" name="contact" id="contact">
        <!-- <br>
        <label for="email">Enter Your Email</label>
        <input type="email" name="email" id="email"> -->
        <br>
        <label for="new_password">Enter New Password</label>
        <input type="password" name="new_password">
        <br>
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password">
        <br>
        <input type="submit" value="submit">
    </form>
</div>

<?php require 'footer.php'; ?>