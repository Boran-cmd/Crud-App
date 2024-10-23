<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $phone = $_POST ['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

   if ($conn->query($sql) === TRUE) {
    echo "New record creazed siccessfully";
   } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
   }
}