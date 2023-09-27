<?php include "connect.php" ?>
<script>
    function confirm() {  
    document.location = "workshop9.php" ; //ย้อนกลับไป workshop9.php (หน้าเดิม)
}
</script>
<?php
    $filename = $_POST["username"].".jpg"; //เปลี่ยนชื่อ file ให่เป็น .jpg
    $tempname = $_FILES["image"]["tmp_name"];  //จะเก็บไว้ใน tempname
    $folder = "./member_photo/" . $filename; //folder ที่เก็บรูป จะเอารูปมาเก็บไว้ที่ folder
    //print_r($_FILES["image"]);
    move_uploaded_file($tempname, $folder); //ย้ายไฟล์ จาก tempname ไปยัง folder
    $stmt = $pdo->prepare("UPDATE member SET name=?, password=?, address=?, mobile=?, email=? WHERE username=?"); 

    $stmt->bindParam(1, $_POST["name"]); 
    $stmt->bindParam(2, $_POST["password"]);
    $stmt->bindParam(3, $_POST["address"]);
    $stmt->bindParam(4, $_POST["mobile"]);
    $stmt->bindParam(5, $_POST["email"]);
    $stmt->bindParam(6, $_POST["username"]);    

    if ($stmt->execute())
        echo "แก้ไข " . $_POST["username"] . " สำเร็จ"."<br>";
        echo "<a href='#' onclick='confirm()'>ย้อนกลับ</a>"; //ปุ่มย้อนกลับ
?>