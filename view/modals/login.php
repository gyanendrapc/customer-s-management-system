<div id="login" class="login">
    <div id="alert">
        <?php

        if (isset($_SESSION['alert'])) {
            echo $_SESSION['alert'];
        }

        ?>
    </div>
    <form action="./control/login-check.php" method="POST">
        <label for="email">User Email/Contact</label>
        <input type="text" name="email" placeholder="Enter Email or Contact-no" />

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <button type="submit" id="customer" value="customer">AS CUSTOMER</button>
        <button type="submit" id="vendor" value="vendor">AS VENDOR</button>

    </form>
</div>