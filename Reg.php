<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";
$conn = new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
   die ("connection failed: " .$conn->connect_error);
}
//handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $date = $_POST['Date'];
    $phone = $_POST['phone'];
    $gender = $_POST['Gender'];
    $idcard = $_POST['idcard'];
    $file = $_POST['file'];

    //execute form submission
    $sql = "INSERT INTO `registration` (`Name`, `Email`, `Date of birth`, `Phone`, `Gender`, `ID`, `File`) 
    VALUES ('$fname', '$email', '$date', '$phone', '$gender', '$idcard', '$file')";

    if($conn->query($sql) == TRUE) {
        echo "Registered Successfully";
}else {
    echo "error:" .$sql ."<br/>" .$conn->error;
}
}
$conn->close();
?>