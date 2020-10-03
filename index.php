<?php require 'header.php' ?>


<div id="login" class="login">
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
        <?php session_destroy(); ?>

    </div>
    <form action="./control/login-check.php" method="POST">
        <label for="contact">User Contact</label>
        <input type="tel" name="contact" id="contact">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" id="customer" name="customer" value="customer">AS CUSTOMER</button>
        <button type="submit" id="vendor" name="vendor" value="vendor">AS VENDOR</button>

    </form>
    <a href="./signup.php">
        <button id="signup">signup</button>
    </a>

</div>

<?php require 'footer.php' ?>