<?php
include 'config.php';
$username = isset($_POST['username']) ? mysqli_real_escape_string($conn, $_POST['username']) : '';
$sql = "SELECT * FROM user WHERE `username` = '$username'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
        echo json_encode($row);
    }