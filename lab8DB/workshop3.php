<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while($row = $stmt->fetch()){
    ?>
        ชื่อสมาชิก: <?= $row["name"]?> <br>
        ที่อยู่: <?= $row["address"]?> <br>
        อีเมล์: <?= $row["email"]?><br>
        <img src='member_photo/<?=$row["username"]?>.jpg' width='70'> 
        <hr>

    <?php } ?>
</body>
</html>