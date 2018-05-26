<?php
include 'config.php';
session_start();
# get the values from $_POST, if the value is set, set it to the variable, else set it to ''
# mysql_real_escape_string - sanitize the input
$username = isset($_POST['username']) ? mysqli_real_escape_string($conn, $_POST['username']) : '';
$password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : '';
$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
$password = isset($_POST['password']) ? mysqli_real_escape_string($conn, $_POST['password']) : '';
// make the entry for the user if it doesn't exist

// if the email address is empty, its for logging in
if ($email != '') {
    $sql = "INSERT INTO `user`(`id`, `username`, `email_address`, `password`) VALUES (0, '$username', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo $sql;
        echo "New record created successfully";
        header('Location: ../index.php?username='."$username");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        echo $sql;
    }
} else {
    $sql = "SELECT `email_address` FROM user WHERE `username` = '$username' AND `password` = '$password'";
    $result = $conn->query($sql);
    echo $sql;
    $row = $result->fetch_assoc();
    if (count($row) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['email_address'] = $row['email_address'];
        header('Location: ../profile.php');
    } else {
        header('Location: ../index.php?error=invalidCredentials');
    }
}

$conn->close();
?>