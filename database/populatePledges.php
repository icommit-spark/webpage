<?php
include 'config.php';
session_start();
$username = isset($_SESSION['username']) ? mysqli_real_escape_string($conn, $_SESSION['username']) : '';
$category = isset($_POST['category']) ? mysqli_real_escape_string($conn, $_POST['category']) : '';
$category = 'politics';
$sql2 = "SELECT `pledge` FROM `pledges` WHERE `category`='$category' AND `username`='$username'";
echo $sql2;
$sql = "SELECT `pledgeText` FROM `pledges_list` WHERE `category`='$category'";
$result = $conn->query($sql);
$allPledges = array();
while($row = $result->fetch_assoc()) {
    $allPledges[] = $row;
}
$result2 = $conn->query($sql2);
$pledged = array();
while($row2 = $result2->fetch_assoc()) {
    $pledged[] = $row2;
}

echo json_encode($allPledges);
echo json_encode($pledged);
$conn->close();
?>