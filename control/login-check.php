<?php
// starting session
session_start();
?>
<?php
// define variables and set to empty values
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// 
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $contact = test_input($_POST["contact"]);
    $password = test_input($_POST["password"]);

    $pass = md5($password);

    echo $contact . " and " . $password . "    ";
    if (isset($_POST['vendor'])) {
        // dbcall
        require_once '../database/dbconnect.php';
        // select query

        $sql = "SELECT * FROM vendors WHERE v_contact='$contact' AND v_password ='$pass'";

        echo $sql;
        $result = mysqli_query($conn, $sql);
        $count  = mysqli_num_rows($result);
        if ($count == 0) {
            $_SESSION['message'] = "Invalid Username or Password!";
            header('location: ../index.php');
        } else {
            $_SESSION['message'] = "You are successfully authenticated!";
            echo $_SESSION['message'];
            header('location: ../dashboard.php');
        }
        // echo $message;
    }
}
mysqli_close($conn);
