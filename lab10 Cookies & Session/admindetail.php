<?php
include "connect.php"
?>

<?php
    $stmt = $pdo->prepare("SELECT * FROM item");
    $stmt->execute();
    
    // while($row = $stmt->fetch()){
    //     echo  "tid". $row["tid"] . "<br>";
    //     echo  "ord_id". $row["ord_id"] . "<br>";
    //     echo  "pid". $row["pid"] . "<br>";
    //     echo  "quantity". $row["quantity"] . "<br><hr>";
    // }

?>

<?php 
$stmt = $pdo->prepare("SELECT product.pid, product.pname ,SUM(item.quantity) AS quantity FROM item, product  WHERE  product.pid = item.pid GROUP BY product.pname");
$stmt->execute();
while($row = $stmt->fetch()){
    $pname = $row['pname'];
    $quantity = $row['quantity'];
    echo "ชื่อสินค้า " .$pname . "<br>";
    echo "<b>คงเหลือ " . $quantity . "<br></b>";
    echo "<hr>";
    
}
?><a href="index.php">ย้อนกลับ</a>

