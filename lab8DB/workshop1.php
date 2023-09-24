<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 
    <?php 
    echo "<table border ='1'><tr><th>รหัสสินค้า</th><th>ชื่อสินค้า</th><th>รายละเอียด</th><th>ราคา</th></td>";
  
   
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
    while($row = $stmt->fetch()){
        echo "<tr><td>".$row["pid"]."<br>";
        echo "<td>".$row["pname"]."<br>";
        echo "<td>".$row["pdetail"]."<br>";
        echo "<td>".$row["price"]."<br>";
    }
    echo "</table>" ;
    ?>

    
</body>
</html>