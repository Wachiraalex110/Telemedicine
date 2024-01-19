<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "appointments";
   $con = new mysqli($servername,$username,$password,$dbname);

   if($con->connect_error) {
    die("connection failed: " . $con->connect_error);
   }
   //haddle form appointments
   if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $country = $_POST["Country"];
    $postalcode = $_POST["PostalCode"];
    $appointment_date = $_POST["Appointment_date"];

    //prepare and execute the database insetion
    $sql = "INSERT INTO `apointments` (`Name`, `Email`, `Country`, `Postal code`, `Appointment-date`) 
    VALUES ('$name', '$email', '$country', 'postalcode', 'appointment_date')"; 

    if ($conn->query($sql) == TRUE){
        echo 'booking successfull';
    }
    else {
        echo 'Error: ' . $sql . "\n" .$conn->error;
    }
   }
   $conn->close();
   ?>