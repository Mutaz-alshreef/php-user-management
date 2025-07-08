<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT status FROM user WHERE id = $id");
$row = $result->fetch_assoc();
$newStatus = $row['status'] ? 0 : 1;

$conn->query("UPDATE user SET status = $newStatus WHERE id = $id");
echo $newStatus;
?>
