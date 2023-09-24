

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php include "connect.php" ?>
        <?php
        $stmt = $pdo->prepare("SELECT * FROM product");
        $stmt->execute();
        while($row = $stmt->fetch()){
            echo "รหัสสินค้า: ".$row["pid"] . "<br>";
            echo "ชื่อสินค้า: ".$row["pname"] . "<br>";
            echo "รายละเอียดสินค้า: ".$row["pdetail"] . "<br>";
            echo "ราคา: ".$row["price"] . "     บาท <br>";
            echo "<hr> \n";
        }?>
        
    </body>
</html>