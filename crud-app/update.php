<?php

include 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "UPDATE users SET name = '$name', email= '$email', phone = '$phone' WHERE id = $id";


    if ($conn->query($sql)=== TRUE){
        echo "User updated successdully";
    
    }

    else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}