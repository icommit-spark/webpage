<?php
include 'config.php';
var_dump($_POST);

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
// make the entry for the user if it doesn't exist

// if the email address is empty, its for logging in
if ($email != '') {
    $sql = "INSERT INTO `user`(`id`, `username`, `email_address`, `password`) VALUES (0, '$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo $sql;
    }
} else {
    $sql = "SELECT `email_address` FROM user WHERE `username` = '$username' AND `password` = '$password'";
    $result = $conn->query($sql);
    echo $sql;
    while($row = $result->fetch_assoc()) {
        echo "email_address" . $row["email_address"]. "<br>";
    }
    $_SESSION['username'] = $username;
    header('Location: ../index.php?username='."$username");

}

$conn->close();
?>