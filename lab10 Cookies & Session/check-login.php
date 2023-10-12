<?php
  include "connect.php";
  
  session_start();

  $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ? AND password = ? ");
  $stmt->bindParam(1, $_POST["username"]);
  $stmt->bindParam(2, $_POST["password"]);
  $stmt->execute();
  $row = $stmt->fetch();

  // หาก username และ password ตรงกัน จะมีข้อมูลในตัวแปร $row
  if (!empty($row)) { 
    // นำข้อมูลผู้ใช้จากฐานข้อมูลเขียนลง session 2 ค่า
    session_regenerate_id();
    $_SESSION["fullname"] = $row["name"];   
    $_SESSION["username"] = $row["username"];

    // แสดง link เพื่อไปยังหน้าต่อไปหลังจากตรวจสอบสำเร็จแล้ว
    echo "<h1>เข้าสู่ระบบสำเร็จ</h1>";
    echo "<h2>Username : " . $_SESSION["fullname"] . "</h2>";
   // echo $_SESSION["username"] . "<br>";


    if($_SESSION["username"] == 123){
      echo "<a href='index.php'>ไปยังหน้าหลักของผู้ใช้</a>"; 
    }else{
      echo "<a href='index.php'>ไปยังหน้าหลักของผู้ใช้</a>"; 
    }
    
    

  // กรณี username และ password ไม่ตรงกัน
  } else {
    echo "ไม่สำเร็จ ชื่อหรือรหัสผ่านไม่ถูกต้อง";
    echo "<a href='login-form.php'>เข้าสู่ระบบอีกครัง</a>"; 
  }
?>

