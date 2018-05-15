<?php
include 'config.php';
$username = isset($_POST['username']) ? mysqli_real_escape_string($conn, $_POST['username']) : '';
$sql = "SELECT * FROM pledges WHERE `username` = '$username'";
$result = $conn->query($sql);
$results = array();
while($row = $result->fetch_assoc()) {
    $results[] = $row;
}
echo json_encode($results);
?>