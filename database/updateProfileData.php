<?php
include 'config.php';
session_start();

$username = isset($_SESSION['username']) ? mysqli_real_escape_string($conn, $_SESSION['username']) : '';
$column = isset($_POST['column']) ? mysqli_real_escape_string($conn, $_POST['column']) : '';
$value = isset($_POST['value']) ? mysqli_real_escape_string($conn, $_POST['value']) : '';

$sql = "UPDATE `user` SET `$column`='$value' WHERE `username`='$username'";
if ($conn->query($sql) === TRUE) {
    echo json_encode($sql);
}
else {
    echo json_encode($sql);
}