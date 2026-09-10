<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "cyber_project";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
echo "تم الاتصال بقاعدة البيانات بنجاح";
?>