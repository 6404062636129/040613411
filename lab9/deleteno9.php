<?php include "connect.php" ?>
<?php
// เตรียมค่าส่ง SQL สาหรับลบข้อมูล

$stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
$stmt->bindParam(1, $_GET["username"]); // กำหนดค่าลงในตำแหน่ง ?
if ($stmt->execute()) // เริ่มลบข้อมูล
header("location: workshop9.php"); // กลับไปแสดงผลหน้าข้อมูล

?>