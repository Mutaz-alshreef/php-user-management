<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "list"; // غيّر الاسم إذا قاعدة البيانات اسمها غير

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
