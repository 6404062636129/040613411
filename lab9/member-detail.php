<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> 
    <?php 
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username=?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute();
    while($row = $stmt->fetch()){
        echo "Username : ".$row['username'] . "<br>"; 
        echo "name : ".$row['name'] . "<br>";
        echo "password : ".$row['password'] . "<br>";
        echo "address : ".$row['address'] . "<br>";
        echo "mobile : ".$row['mobile'] . "<br>";
        echo "email : ".$row['email'] . "<br>";
    }

    ?>

    
</body>
</html>