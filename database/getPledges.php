<?php
include 'config.php';
$username = isset($_POST['username']) ? mysqli_real_escape_string($conn, $_POST['username']) : '';
$category = isset($_POST['category']) ? mysqli_real_escape_string($conn, $_POST['category']) : '';
mysqli_set_charset($conn, 'utf8');
if ($category == '') {
    $sql = "SELECT * FROM `pledges` WHERE `username` = '$username'";
} else {
    $sql = "SELECT * FROM `pledges_list` WHERE `category` = '$category'";
}
$result = $conn->query($sql);
$results = array();
while ($row = $result->fetch_assoc()) {
    $results[] = $row;
}
$final = json_encode($results);
if ($final) {
    echo $final;
} else {
    echo json_last_error_msg();
}
$conn->close();
?>