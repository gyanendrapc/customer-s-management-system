<?php



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "customers_management";



    // 
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // checking connection
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    } else {
        echo "<script>alert('database connection successfull');</script>";
    }

    // mysqli_close($conn);
