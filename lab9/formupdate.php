<?php include "connect.php" ?>
<?php
// 1. ก าหนดค าสง SQL ให้ดึงสนค้าตามรหัสส ิ นค้า ิ

$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); // 2. น าค่า pid ที่สงมากับ ่ URL ก าหนดเป็ นเงื่อนไข
$stmt->execute(); // 3. เริ่มค้นหา
$row = $stmt->fetch(); // 4. ดึงผลลัพธ์ (เนื่องจากมีข้อมูล 1 แถวจึงเรียกเมธอด fetch เพียงครั้งเดียว)
?>
<html>
<head><meta charset="utf-8"></head>
<body>
<form action="update-member.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="username" value="<?=$row["username"]?>"> 
name :     <input type="name" name="name" value="<?=$row["name"]?>"><br>
password : <input type="password" name="password" value="<?=$row["password"]?>"><br>
address : <input type="address" name="address" value="<?=$row["address"]?>"><br>
mobile : <input type="mobile" name="mobile" value="<?=$row["mobile"]?>"><br>
email : <input type="ema    il" name="email" value="<?=$row["email"]?>"><br>
เลือกรูปภาพ :<input type="file" name="image"><br>

<input type="submit" value="แก้ไข ">
</form>
</body>
</html>