<?php
$servername = "db";           // ชื่อตาม service ใน docker-compose.yml
$username = "wordpress";      // ตามที่ตั้งไว้ใน environment
$password = "wordpress";      // ตามที่ตั้งไว้ใน environment
$dbname = "wordpress";        // ตามที่ตั้งไว้ใน environment

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "เชื่อมต่อฐานข้อมูลสำเร็จ!";
?>
