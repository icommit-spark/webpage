<?php
include 'config.php';
session_start();

$username = isset($_SESSION['username']) ? mysqli_real_escape_string($conn, $_SESSION['username']) : '';
$pledgeId = isset($_POST['pledgeId']) ? mysqli_real_escape_string($conn, $_POST['pledgeId']) : '';
$status = isset($_POST['status']) ? mysqli_real_escape_string($conn, $_POST['status']) : '';

$sql = "UPDATE `pledges` SET `status`='$status' WHERE `username`='$username' and `id`='$pledgeId'";
if ($conn->query($sql) === TRUE) {
    echo json_encode($status);
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo json_encode($sql);
}