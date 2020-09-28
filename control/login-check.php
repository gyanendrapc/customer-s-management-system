<?php
// starting session
session_start();

// define variables and set to empty values
$email = $password = "";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// 
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);


    if (isset($_POST['customer'])) {

        // dbcall
        require_once './database/dbconnect.php';
        dbconnect();

        // select query
        $sql = "SELECT * FROM ";
        echo "happy coding";
    } else if ($_POST['vendor']) {
    } else {
        $_SESSION['alert'] = "login failed";
        echo $_SESSION['alert'];
    }
}
