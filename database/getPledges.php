<?php
include 'config.php';
$username = isset($_POST['username']) ? mysqli_real_escape_string($conn, $_POST['username']) : '';
$category = isset($_POST['category']) ? mysqli_real_escape_string($conn, $_POST['category']) : '';

if ($category == '') {
    $sql = "SELECT * FROM pledges WHERE `username` = '$username'";
} else {
    $sql = "SELECT * FROM pledges_list WHERE `category` = '$category'";
}
$result = $conn->query($sql);
$results = array();
while ($row = $result->fetch_assoc()) {
    $results[] = $row;
}
echo json_encode($results);
