<?php
// starting session
session_start();
?>
<?php
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

    $name = test_input($_POST["name"]);
    // $email = test_input($_POST["email"]);
    $contact = test_input($_POST["contact"]);
    $new_password = test_input($_POST["new_password"]);
    $confirm_password =  test_input($_POST["confirm_password"]);
}
// checking db
include '../database/dbconnect.php';

$sql = "SELECT * FROM vendors WHERE v_contact = '$contact'";
$result = mysqli_query($conn, $sql);
$vendor = mysqli_fetch_assoc($result);
if ($vendor) {
    if ($vendor["v_contact"] == $contact) {
        $_SESSION['alert'] = "contact number you entered is alredy in the database";
    }
} else if ($new_password == $confirm_password) {
    $password = md5($new_password); //encrypt the password before saving in the database

    $sql = "INSERT INTO vendors (v_name, v_contact, v_password) 
  			  VALUES('$name','$contact', '$password')";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "New record created successfully please login";
        header('location: ../index.php');
    } else {
        $_SESSION['alert'] = "Error: " . $sql . "<br>" . mysqli_error($conn);;
    }
} else {
    echo $_SESSION['message'] = "Error found signup failed...";
    header('location: ../signup.php');
}
mysqli_close($conn);
