<?php
include 'config.php';
$username = isset($_POST['username']) ? mysqli_real_escape_string($conn, $_POST['username']) : '';
$category = isset($_POST['category']) ? mysqli_real_escape_string($conn, $_POST['category']) : '';
$pledgeText = isset($_POST['pledgeText']) ? mysqli_real_escape_string($conn, $_POST['pledgeText']) : '';

$sql = "SELECT `status` FROM `pledges` WHERE `username` = '$username' AND `category` = '$category' AND `pledgeText` = '$pledgeText'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
    echo json_encode($row);
}
