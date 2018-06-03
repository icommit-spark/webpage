<?php
include 'config.php';
session_start();

$username = isset($_SESSION['username']) ? mysqli_real_escape_string($conn, $_SESSION['username']) : '';
$pledgeId = isset($_POST['pledgeId']) ? mysqli_real_escape_string($conn, $_POST['pledgeId']) : '';
$pledgeText = isset($_POST['pledgeText']) ? mysqli_real_escape_string($conn, $_POST['pledgeText']) : '';
$status = isset($_POST['pledgeStatus']) ? mysqli_real_escape_string($conn, $_POST['pledgeStatus']) : '';
$category = isset($_POST['category']) ? mysqli_real_escape_string($conn, $_POST['category']) :  '';

// $sql = "UPDATE `pledges` SET `status`='$status', `completion_date`=now() WHERE `username`='$username' and `id`='$pledgeId'";
$sql = "SELECT `id` FROM `pledges` WHERE `username` = '$username' AND `pledgeText`  = '$pledgeText'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if (count($row) >= 1) {
    $sql2 = "UPDATE `pledges` SET `status` = '$status' WHERE `username` = '$username' AND `pledgeText` = '$pledgeText'";
    // $result2 = $conn->query($sql2);
} else {
    $sql2 = "INSERT INTO `pledges` (`username`, `category`, `pledgeText`, `status`) VALUES ('$username', '$category', '$pledgeText', '$status')";
}
if ($conn->query($sql2) === true) {
    echo json_encode($sql2);
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
    echo json_encode($sql2);
}
//
//
// if ($conn->query($sql) === true) {
//     echo json_encode($sql);
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
    // echo json_encode($sql);
// }
