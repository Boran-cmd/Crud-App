<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Create User</h2>
    <form action="create.php" method="Post">
    <label>NAME:</label>
    <input type="text" name="name" required><br><br>
    <label>EMAIL:</label>
    <input type="email" name="email" required><br><br>
    <label>Phone:</label>
    <input type="text" name="phone" required><br><br>

    <button type="submit">Add user</button>
    </form>

    <h2>All Users</h2>
    <table border= "1">
<tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>PHONE</th>
    <th>ACTION</th>
</tr>

<?php
include 'db.php';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc() ){
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row ['phone'] . "</td>";
        echo "<td><a href='edit.php?id=" . $row['id']  ."'>Edit</a> | <a href='delete.php?id=" . $row ['id'] . "'>Delete</a></td>";
        echo "</tr>";
        



    }
}
else {
    echo " <tr> <td colspan='5'>No Data found</td></tr>";
}

$conn->close();

?>
    </table>
    
</body>
</html>