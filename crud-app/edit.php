<?php

include 'db.php';

$id= $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


?>

<link rel="stylesheet" href="style.css">


<form action="update.php"  method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>NAME</label>
    <input type="text" name="name" value="<?php echo $row['name']; ?>"required> <br><br>>
    <label>EMAIL</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"required> <br><br>>
    <label>PHONE</label>
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required> <br><br>>

    <button type= "submit">Update User</button>
    </form>